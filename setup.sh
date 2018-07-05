#!/usr/bin/env bash

# A limit on mmap counts equal to 262,144 or more for ELK
sudo sysctl -w vm.max_map_count=262144

docker-compose -f "/vagrant/docker-compose.yml" rm --force
docker-compose -f "/vagrant/docker-compose.yml" build
docker-compose -f "/vagrant/docker-compose.yml" stop
docker-compose -f "/vagrant/docker-compose.yml" up -d

docker exec cc_php php composer.phar self-update
docker exec cc_php php composer.phar update

docker exec cc_mysql mysql -uroot -ptest -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY 'root' WITH GRANT OPTION; FLUSH PRIVILEGES;"
docker exec cc_mysql mysql -uroot -ptest -e "CREATE DATABASE test";
