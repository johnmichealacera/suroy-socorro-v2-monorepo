# Use PHP 7.4 CLI (matching your local setup)
FROM php:7.4-cli

# Install system dependencies
RUN apt-get update \
    && apt-get install -y \
        libzip-dev \
        zip \
        unzip \
        curl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install zip

# Set working directory
WORKDIR /app

# Copy application files
COPY . /app/

# Set proper permissions
RUN chown -R www-data:www-data /app \
    && chmod -R 755 /app \
    && chmod +x /app/run_server.sh

# Expose port 8000 (matching your local setup)
EXPOSE 8000

# Use the same approach as your run_server.sh
CMD ["php", "-S", "0.0.0.0:8000", "start_server.php"] 