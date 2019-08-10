FROM ubuntu:16.04

RUN apt-get update && apt-get install apache2 --assume-yes --no-install-recommends

EXPOSE 80

CMD apachectl -D FOREGROUND

