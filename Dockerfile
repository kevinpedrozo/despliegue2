# Usamos una imagen oficial de PHP con servidor Apache incluido
FROM php:8.2-apache

# Copiamos todos los archivos del proyecto al directorio web raíz de Apache
COPY . /var/www/html/

# Exponemos el puerto estándar 80
EXPOSE 80

# El comando por defecto ya inicia Apache, por lo que no es estrictamente necesario añadir un CMD
