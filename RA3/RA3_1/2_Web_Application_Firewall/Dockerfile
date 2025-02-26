FROM pps10219513/apache:1

RUN apt update && apt install -y modsecurity-crs php libapache2-mod-php
#RUN a2enmod php

COPY config/modsecurity.conf /etc/modsecurity/crs/modsecurity.conf
COPY config/post.php /var/www/html/
EXPOSE 80 443
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

