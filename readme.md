<p align="center"><img src="/dawstore-app/public/img/logos/logoTello.png" width="400" alt="Laravel Logo"></a></p>

## INTRODUCCIÓN
TelloStore Ecommerce realizado utilizando las siguientes tecnologías:
- Laravel 9
- HTML
- BOOTSTRAP 5.2
- CSS
- Mysql
- JavaScript
- GSAP

## INSTALACIÓN
Clonar TelloStore
- git clone https://github.com/dawstore/dawstore.git

Entrar en el repositorio y actualizarlo para añadir la carpeta Vendor
- Composer update

General la "Llave" para utilizar nuestra Aplicación
- php artisan key:generate


Realizar la migración de los modelos 
- php artisan migrate

Para desplegar los productos de su Script Mysql debe introducirlo en la carpeta /database y ejecutar el siguiente comando
- php artisan db:seed

Para iniciar nuestra Aplicación
- php artisan serve

## Desplegar Docker Sail (Solo Windows WSL o Distribuciones Linux)
Laravel Sail es una Interface de Línea de Comandos ( CLI ) para interactuar con un entorno de desarrollo contenerizado (Docker) el cual provee un punto de partida para construir una aplicación con Laravel haciendo uso de PHP, MySQL y Redis. Está compuesto por un fichero docker-compose

En nuestra Aplicación este servicio ya esta instalado pero hay que configurar ciertas opciones
El comando por defecto de sail es el siguiente './vendor/bin/sail' para hacerlo más intuitivo vamos a establecer un alias a dicho comando 

- alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail' -- Ahora nuestro comando sail pasa de ser vendor/bin/sail a sail asecas

Para iniciar sail debemos introducir el siguiente comando
- sudo sail up

Para parar servicio sail debemos ejecutar el siguiente comando
- sudo sail stop

## Desplegar Docker Clásico
Debemos tener instalado docker en nuestro equipo 
Para levantar el contenedor docker
- docker compose up -- Se nos instalará todo lo necesario para ejecutar gracias al archivo Dockerfile nuestra Aplicación 

Para parar el contenedor
- docker compose stop