FROM ubuntu:25.04
RUN apt update && apt install -y apache2

# Deshabilitar informació extra tant de les capçaleres com del error
RUN echo "ServerTokens ProductOnly" >> /etc/apache2/apache2.conf
RUN echo "ServerSignature Off" >> /etc/apache2/apache2.conf

# Mòduls per defecte que hem d'afegir i llevar
RUN a2dismod -f autoindex 
RUN a2enmod rewrite
RUN a2enmod ssl

# Necessari per al HSTS
RUN a2enmod headers

COPY apache2/sites-enabled /etc/apache2/sites-enabled
EXPOSE 80 443
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

