FROM php:8.2-apache

# تثبيت ملحقات PHP والأدوات المطلوبة
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

# تثبيت Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# تفعيل وحدة إعادة الكتابة لـ Apache
RUN a2enmod rewrite

# تعيين مسار العمل ونسخ الملفات
WORKDIR /var/www/html
COPY . .

# تثبيت الحزم باستخدام Composer
RUN composer install --no-interaction

EXPOSE 80
