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
    php-xml \
    php-mysql

RUN apt install -y php8.2 php8.2-bcmath php8.2-bz2 php8.2-curl php8.2-gd php8.2-intl php8.2-mbstring php8.2-pgsql php8.2-soap php8.2-xml php8.2-xsl php8.2-zip 

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
# # RUN HASH=`curl -sS https://composer.github.io/installer.sig`
# # RUN echo $HASH
# # RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN composer install

# RUN php artisan migrate


EXPOSE 9000
CMD php artisan serve --host=0.0.0.0 --port=9000 && npm run dev

