FROM mysql:5.7

COPY entrypoint.sh /entrypoint.sh
RUN chmod a+x /entrypoint.sh
COPY my.cnf /etc/mysql/my.cnf
RUN chmod 0644 /etc/mysql/my.cnf
