FROM php:8.3-fpm

# Instalar dependências do sistema + libs Chromium
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx \
    chromium \
    libx11-6 \
    libxkbfile1 \
    libxcomposite1 \
    libxrender1 \
    libnss3 \
    libatk1.0-0 \
    libatk-bridge2.0-0 \
    libgtk-3-0

# Instalar Node.js + npm via NodeSource
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Limpar cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensões PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurar diretório de trabalho
WORKDIR /var/www/html

# Copiar arquivos
COPY . .

# Instalar dependências do Laravel
RUN composer install --no-interaction --optimize-autoloader

# Instalar Puppeteer (nodejs) para Spatie PDF
RUN npm install puppeteer --save-dev

# Ajustar permissões
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expor porta
EXPOSE 8000

# Comando para iniciar o servidor
CMD php artisan serve --host=0.0.0.0 --port=8000