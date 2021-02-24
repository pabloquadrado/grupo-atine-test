FROM phpdockerio/php73-fpm:latest
WORKDIR "/application"

ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.3-memcached php7.3-bcmath php7.3-bz2 php7.3-enchant php7.3-gearman php7.3-gmp php7.3-igbinary php7.3-imagick php7.3-imap php7.3-odbc php7.3-pspell php7.3-raphf php7.3-recode php7.3-snmp php7.3-soap php7.3-ssh2 php7.3-sybase php7.3-xsl php7.3-yaml \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*