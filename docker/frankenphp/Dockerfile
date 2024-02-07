FROM dunglas/frankenphp:sha-00b1d0e-php8.2.14

# Arguments defined in docker-compose.yml
ARG user
ARG uid

RUN apt-get update \
    && apt-get -y install \
    vim \
    dnsutils \
    iputils-ping \
    iproute2 \
    git \
    unzip \
    less \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libpq-dev \
    && pecl install redis && docker-php-ext-enable redis \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure opcache --enable-opcache \
    && docker-php-ext-install gd opcache intl mbstring zip exif pcntl bcmath gd mysqli
# MySQLを使えるように対応する
# MySQLをつかなわい場合は個々の記述を削除して良い
RUN apt-get -y install default-mysql-client \
    && docker-php-ext-install pdo_mysql mysqli

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# WORKDIR /app
COPY /docker/bash.sh /
RUN chmod u+x /bash.sh
# ENTRYPOINT [ "docker/entrypoint.sh" ]
