FROM ubuntu:25.04

RUN apt update && apt install -y nginx
COPY conf/certs /etc/nginx/certs
COPY conf/nginx.conf /etc/nginx/nginx.conf
COPY conf/default /etc/nginx/sites-enabled/default
COPY conf/post.html /var/www/html/post.html

CMD ["nginx", "-g", "daemon off;"]
