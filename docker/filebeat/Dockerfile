FROM docker.elastic.co/beats/filebeat:6.2.4

COPY filebeat.yml /usr/share/filebeat/filebeat.yml
COPY logstash-beats.crt /etc/pki/tls/certs/logstash-beats.crt

USER root
RUN chown filebeat /usr/share/filebeat/filebeat.yml
RUN chmod go-w /usr/share/filebeat/filebeat.yml

USER filebeat