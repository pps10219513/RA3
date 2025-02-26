FROM pps10219513/apache:1

# Instal·lem els paquets necessaris
RUN apt update && apt install -y php libapache2-mod-security2 

# Copiem la configuració per defecte
RUN cp /etc/modsecurity/modsecurity.conf-recommended /etc/modsecurity/modsecurity.conf

# Afegim el post.php vulnerable a xss
COPY config/post.php /var/www/html/

EXPOSE 80 443
