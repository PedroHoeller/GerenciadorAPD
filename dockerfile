# Usar a imagem oficial do PHP 8.3
FROM php:8.3-apache

# Copiar o código do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Dar permissões ao diretório
RUN chown -R www-data:www-data /var/www/html

# Expor a porta 80 para o Apache
EXPOSE 80
