# Use PHP 7.4 with Apache for production
FROM php:7.4-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    curl \
    libcurl4-openssl-dev \
    pkg-config \
    && docker-php-ext-install -j$(nproc) \
    zip \
    curl \
    && a2enmod rewrite \
    && a2enmod headers \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . /var/www/html/

# Create Apache virtual host configuration
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    ServerName localhost\n\
    \n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
        DirectoryIndex index.php\n\
    </Directory>\n\
    \n\
    # Handle PHP files\n\
    <FilesMatch "\.php$">\n\
        SetHandler application/x-httpd-php\n\
    </FilesMatch>\n\
    \n\
    # Security headers\n\
    Header always set X-Content-Type-Options nosniff\n\
    Header always set X-Frame-Options DENY\n\
    Header always set X-XSS-Protection "1; mode=block"\n\
    \n\
    # Enable compression\n\
    <IfModule mod_deflate.c>\n\
        AddOutputFilterByType DEFLATE text/plain\n\
        AddOutputFilterByType DEFLATE text/html\n\
        AddOutputFilterByType DEFLATE text/xml\n\
        AddOutputFilterByType DEFLATE text/css\n\
        AddOutputFilterByType DEFLATE application/xml\n\
        AddOutputFilterByType DEFLATE application/xhtml+xml\n\
        AddOutputFilterByType DEFLATE application/rss+xml\n\
        AddOutputFilterByType DEFLATE application/javascript\n\
        AddOutputFilterByType DEFLATE application/x-javascript\n\
    </IfModule>\n\
    \n\
    # Cache static assets\n\
    <IfModule mod_expires.c>\n\
        ExpiresActive on\n\
        ExpiresByType text/css "access plus 1 year"\n\
        ExpiresByType application/javascript "access plus 1 year"\n\
        ExpiresByType image/png "access plus 1 year"\n\
        ExpiresByType image/jpg "access plus 1 year"\n\
        ExpiresByType image/jpeg "access plus 1 year"\n\
        ExpiresByType image/gif "access plus 1 year"\n\
        ExpiresByType image/svg+xml "access plus 1 year"\n\
    </IfModule>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Create .htaccess for URL rewriting
RUN echo 'RewriteEngine On\n\
\n\
# Handle clean URLs\n\
RewriteCond %{REQUEST_FILENAME} !-f\n\
RewriteCond %{REQUEST_FILENAME} !-d\n\
\n\
# Route main pages\n\
RewriteRule ^(tourist-spots|barangays|delicacies|about|contact-us)/?$ /public/$1.php [L]\n\
\n\
# Route barangay pages\n\
RewriteRule ^barangay/([^/]+)/?$ /barangays/$1.php [L]\n\
\n\
# Route spot pages\n\
RewriteRule ^spot/([^/]+)/?$ /public/pages/spots/$1.php [L]\n\
\n\
# Route all other requests to start_server.php for custom routing\n\
RewriteRule ^(.*)$ /start_server.php [QSA,L]\n\
\n\
# Security: Prevent access to sensitive files\n\
<Files "*.php">\n\
    <RequireAll>\n\
        Require all granted\n\
    </RequireAll>\n\
</Files>\n\
\n\
# Prevent access to configuration files\n\
<FilesMatch "\.(env|config|ini|log)$">\n\
    Require all denied\n\
</FilesMatch>\n\
\n\
# Enable compression\n\
<IfModule mod_deflate.c>\n\
    AddOutputFilterByType DEFLATE text/plain\n\
    AddOutputFilterByType DEFLATE text/html\n\
    AddOutputFilterByType DEFLATE text/xml\n\
    AddOutputFilterByType DEFLATE text/css\n\
    AddOutputFilterByType DEFLATE application/xml\n\
    AddOutputFilterByType DEFLATE application/xhtml+xml\n\
    AddOutputFilterByType DEFLATE application/rss+xml\n\
    AddOutputFilterByType DEFLATE application/javascript\n\
    AddOutputFilterByType DEFLATE application/x-javascript\n\
</IfModule>' > /var/www/html/public/.htaccess

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 644 /var/www/html/public/.htaccess

# Create a custom entrypoint script
RUN echo '#!/bin/bash\n\
\n\
# Set environment variables if not already set\n\
export NODE_ENV=${NODE_ENV:-production}\n\
export API_BASE_URL=${API_BASE_URL:-http://localhost:3001/api/v1}\n\
export FRONTEND_URL=${FRONTEND_URL:-http://localhost}\n\
export CACHE_ENABLED=${CACHE_ENABLED:-true}\n\
export CACHE_DURATION=${CACHE_DURATION:-3600}\n\
\n\
# Start Apache in foreground\n\
exec apache2-foreground' > /usr/local/bin/docker-entrypoint.sh \
    && chmod +x /usr/local/bin/docker-entrypoint.sh

# Expose port 80
EXPOSE 80

# Use custom entrypoint
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"] 