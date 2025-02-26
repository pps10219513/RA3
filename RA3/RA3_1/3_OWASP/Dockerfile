FROM pps10219513/apache:2

COPY modsecurity /etc/modsecurity/
RUN mv -f /etc/modsecurity/security2.conf /etc/apache2/mods-enabled/security2.conf 

EXPOSE 80 443
