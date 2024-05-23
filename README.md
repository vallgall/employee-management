# Employee Management Application
> By Valentina Orjuela Tapia
## Instalación de Proyecto
### Descargar el Proyecto
1. Clona el repositorio en la ruta C:/xampp/htdocs:
```
git clone https://github.com/vallgall/employee-management.git
cd employee-management
```
### Instalación de PHP
1. Descargar PHP:
- **Ve a [php.net](https://www.php.net/downloads) y descarga la última versión de PHP para Windows. Elige el archivo VC15 x64 Thread Safe o VC15 x86 Thread Safe, según tu sistema operativo.**
2. Instalar PHP:
- **Extrae el archivo descargado a una ubicación en tu sistema, por ejemplo, C:\php.**
- **Agrega PHP a la variable de entorno PATH:**
    - ***Abre el Panel de Control -> Sistema y Seguridad -> Sistema.***
    - ***Haz clic en Configuración avanzada del sistema.***
    - ***En la pestaña Opciones avanzadas, haz clic en Variables de entorno.***
    - ***En Variables del sistema, selecciona la variable Path y haz clic en Editar.***
    - ***Agrega C:\php (o la ruta donde extrajiste PHP) y haz clic en Aceptar.***
3. Verificar la instalación de PHP:
- **Abre una terminal (cmd o PowerShell) y escribe:**
    ```
    php -v
    ```
- **Deberías ver la versión de PHP instalada.**
### Instalación de Composer
1. Descargar Composer:
- **Ve a [getcomposer.org](https://getcomposer.org) y descarga el instalador de Composer para Windows.**
2. Instalar Composer:
- **Ejecuta el instalador y sigue las instrucciones. Asegúrate de que el instalador detecte tu instalación de PHP.**
- **Durante la instalación, selecciona la ruta donde tienes PHP instalado (por ejemplo, C:\php\php.exe).**
3. Verificar la instalación de Composer:
- **Abre una terminal y escribe:**
    ```
    composer -V
    ```
- **Deberías ver la versión de Composer instalada.**
### Instalación de Apache
1. Configurar Apache:
- **Abre el archivo httpd.conf en un editor de texto (ubicado en C:/xampp/apache/conf/httpd.conf).**
- **Configura el DocumentRoot para apuntar a tu proyecto Laravel. Por ejemplo:**
    ```
    DocumentRoot "C:/xampp/htdocs/employee-management/public"
    <Directory "C:/xampp/htdocs/employee-management/public">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
    ```
- **Asegúrate de que el módulo mod_rewrite esté habilitado. Busca y descomenta la línea:**
    ```
    LoadModule rewrite_module modules/mod_rewrite.so
    ```
2. Iniciar Apache:
- **Inicia el servicio de Apache desde el panel de control de XAMPP.**
### Configurar la Base de Datos
1. Configurar la base de datos en .env:
- **Abre el archivo .env en el directorio del proyecto y configura la base de datos:**
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=employee_management
    DB_USERNAME=root
    DB_PASSWORD=
    ```
2. Migrar las tablas:
    ```
    php artisan migrate
    ```
3. Ejecutar inserts:
- **Importa el archivo employee_management.sql en MySQL para agregar los registros necesarios. Utiliza la herramienta de tu elección (como phpMyAdmin o la línea de comandos de MySQL).**
### Iniciar el Servidor
    ```
    php artisan serve
    ```
2. Compila los activos con npm:
1. Inicia el servidor de desarrollo de Laravel:
- **En otra terminal, ejecuta:**
    ```
    npm run dev
    ```
