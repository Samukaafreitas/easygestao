FROM debian:12-slim

WORKDIR /app/easygestao

COPY . /app/easygestao

RUN apt update && apt install -y \
    vim \
    wget \
    curl \
    php \
    php-cli \
    unzip \
    nodejs \
    git \
    npm \
    php-xml

# RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
# # RUN HASH=`curl -sS https://composer.github.io/installer.sig`
# # RUN echo $HASH
# # RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
# RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer


EXPOSE 9000
CMD php artisan serve --host=0.0.0.0 --port=9000 && npm run dev

