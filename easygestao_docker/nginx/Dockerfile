FROM nginx:latest

WORKDIR /

RUN apt update && apt install -y \
    vim \
    wget \
    curl \
    original-awk

# RUN sed -i -e 's/listen       80;/listen       9000;/g' /etc/nginx/conf.d/default.conf
# RUN sed -i -e 's/listen  [::]:80;/listen  [::]:9000;/g' /etc/nginx/conf.d/default.conf
# RUN sed -i -e 's/server_name.*;/server_name  localhost;/g' /etc/nginx/conf.d/default.conf
# RUN sed -i -e '/location \/ {/a\\tproxy_pass http://127.0.0.1:9000;' /etc/nginx/conf.d/default.conf
