FROM ubuntu:25.04
RUN apt update && apt install -y apache2

# Mòdul que està per defecte que hem de llevar
RUN a2dismod -f autoindex 

# Necessaris per al HSTS
RUN a2enmod ssl
RUN a2enmod rewrite
RUN a2enmod headers

# Copiem la configuració d'apache2 i la dels virtual-hosts
COPY apache2/sites-enabled /etc/apache2/sites-enabled
COPY apache2/apache2.conf /etc/apache2/apache2.conf

EXPOSE 80 443
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

