#!/bin/bash

export DEBIAN_FRONTEND=noninteractive

VAGRANT_CORE_FOLDER=$(echo "$1")

OS=$(/bin/bash "${VAGRANT_CORE_FOLDER}/shell/os-detect.sh" ID)
CODENAME=$(/bin/bash "${VAGRANT_CORE_FOLDER}/shell/os-detect.sh" CODENAME)
RELEASE=$(/bin/bash "${VAGRANT_CORE_FOLDER}/shell/os-detect.sh" RELEASE)

if [[ ! -d '/.puphpet-stuff' ]]; then
    mkdir '/.puphpet-stuff'
    echo 'Created directory /.puphpet-stuff'
fi

touch '/.puphpet-stuff/vagrant-core-folder.txt'
echo "${VAGRANT_CORE_FOLDER}" > '/.puphpet-stuff/vagrant-core-folder.txt'

if [[ ! -f '/.puphpet-stuff/init-apt-get-update' ]] && [[ "${OS}" == 'debian' || "${OS}" == 'ubuntu' ]]; then
    apt-get update

    touch '/.puphpet-stuff/init-apt-get-update'
fi


# CentOS comes with tty enabled. RHEL has realized this is stupid, so we can
# also safely disable it in PuPHPet boxes.
if [[ ! -f '/.puphpet-stuff/disable-tty' ]]; then
    perl -pi'~' -e 's@Defaults(\s+)requiretty@Defaults !requiretty@g' /etc/sudoers

    touch '/.puphpet-stuff/disable-tty'
fi

# Digital Ocean seems to be missing iptables-persistent!
# See https://github.com/puphpet/puphpet/issues/1575
if [[ ! -f '/.puphpet-stuff/iptables-persistent-installed' ]] && [[ "${OS}" == 'debian' || "${OS}" == 'ubuntu' ]]; then
    apt-get -y install iptables-persistent

    touch '/.puphpet-stuff/iptables-persistent-installed'
fi

if [[ ! -f '/.puphpet-stuff/software-properties-common' ]] && [[ "${OS}" == 'debian' || "${OS}" == 'ubuntu' ]]; then
    apt-get -y install software-properties-common python-software-properties

    touch '/.puphpet-stuff/software-properties-common'
fi

if [[ -f '/.puphpet-stuff/initial-setup-base-packages' ]]; then
    exit 0
fi

if [ "${OS}" == 'debian' ] || [ "${OS}" == 'ubuntu' ]; then
    echo 'Installing curl'
    apt-get -y install curl
    echo 'Finished installing curl'

    echo 'Installing git'
    apt-get -y install git-core
    echo 'Finished installing git'

    echo 'Installing build-essential packages'
    apt-get -y install build-essential
    echo 'Finished installing build-essential packages'
fi

echo 'Installing docker'
# install Docker
curl -sS -L https://get.docker.com/ | sudo sh

# add 'vagrant' user to docker group
sudo gpasswd -a vagrant docker
#sudo usermod -aG docker vagrant

# configure for systemd
sudo cp ${VAGRANT_CORE_FOLDER}/docker/docker.service  /lib/systemd/system/
sudo cp ${VAGRANT_CORE_FOLDER}/docker/docker.socket   /lib/systemd/system/

# enabled when booting
sudo systemctl enable docker
sudo systemctl start  docker

# enable memory and swap accounting
sudo sed -i -e \
  's/^GRUB_CMDLINE_LINUX=.+/GRUB_CMDLINE_LINUX="cgroup_enable=memory swapaccount=1"/' \
  /etc/default/grub
sudo update-grub
echo 'Finished installing docker'


echo 'Installing docker-compose'
# @see http://docs.docker.com/compose/install/
curl -sS -o docker-compose -L https://github.com/docker/compose/releases/download/1.21.2/docker-compose-`uname -s`-`uname -m`
chmod a+x docker-compose
sudo mv docker-compose /usr/local/bin
echo 'Finished installing docker-compose'

touch '/.puphpet-stuff/initial-setup-base-packages'
