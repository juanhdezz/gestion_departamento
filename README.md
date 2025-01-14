# Gestión de Departamento

Este proyecto es parte de mi Trabajo de Fin de Grado (TFG) y tiene como objetivo desarrollar una aplicación web para la gestión interna de un departamento.  
La aplicación permite compartir información y realizar gestiones específicas que no pueden ser cubiertas por una web pública estándar.  
Actualmente, existe una versión previa que será migrada a un sistema más actual utilizando tecnologías modernas.

## Tecnologías Utilizadas

- **Backend**: Laravel 11 con Eloquent ORM y base de datos MySQL.
- **Frontend**: Motor de plantillas Blade de PHP acompañado de Tailwind CSS para los estilos.

## Características

- Gestión de usuarios y roles.
- Control de acceso basado en permisos.
- Módulo de gestión de documentos internos.
- Notificaciones y alertas personalizadas.
- Panel de administración con estadísticas y reportes.

## Instalación

Siga estos pasos para configurar el proyecto en su entorno local:

1. **Clonar el repositorio**:

   ```bash
   git clone https://gitingest.com/juanhdezz/gestion_departamento.git
   cd gestion_departamento
   ```

2. **Mover el proyecto a la carpeta htdocs de XAMPP**:

   Coloque los archivos del proyecto en la carpeta `htdocs` de su instalación de XAMPP. Por ejemplo:

   ```
   C:\xampp\htdocs\gestion_departamento
   ```

3. **Configurar un host virtual**:

   Cree un host virtual para acceder al proyecto mediante `gestiondep.test`:

   - Abra el archivo `httpd-vhosts.conf`, ubicado en `C:\xampp\apache\conf\extra\httpd-vhosts.conf`, y agregue lo siguiente:

     ```
     <VirtualHost *:80>
         DocumentRoot "C:/xampp/htdocs/gestion_departamento/public"
         ServerName gestiondep.test
     </VirtualHost>
     ```

   - Edite el archivo `hosts`, ubicado en `C:\Windows\System32\drivers\etc\hosts`, y agregue la línea:

     ```
     127.0.0.1 gestiondep.test
     ```

   - Reinicie Apache desde el panel de control de XAMPP.

4. **Instalar dependencias de PHP**:

   ```bash
   composer install
   ```

5. **Instalar dependencias de Node.js**:

   ```bash
   npm install
   ```

6. **Configurar el archivo de entorno**:

   Copie el archivo `.env.example` y renómbrelo a `.env`.  
   Luego, configure las variables de entorno, especialmente las relacionadas con la base de datos y las credenciales de correo.

7. **Generar la clave de la aplicación**:

   ```bash
   php artisan key:generate
   ```

8. **Migrar y sembrar la base de datos**:

   ```bash
   php artisan migrate --seed
   ```

9. **Compilar los activos front-end**:

   ```bash
   npm run dev
   ```

10. **Acceder a la aplicación**:

    Abra su navegador y vaya a [http://gestiondep.test](http://gestiondep.test).

## Uso

Una vez instalada la aplicación, puede acceder con las credenciales de administrador predeterminadas:

- **User**: admin
- **Contraseña**: admin

Se recomienda cambiar estas credenciales después del primer inicio de sesión.


## Licencia

Este proyecto está bajo la Licencia MIT. Consulte el archivo [LICENSE](LICENSE) para más detalles.

## Recursos Adicionales

Para obtener más información sobre las tecnologías utilizadas en este proyecto, puede consultar los siguientes recursos:

- [Documentación de Laravel](https://laravel.com/docs/11.x)
- [Guía de instalación de Tailwind CSS con Laravel](https://tailwindcss.com/docs/guides/laravel)

## Video Tutorial

Para una guía visual sobre cómo configurar y utilizar la aplicación, puede consultar el siguiente video:

[Instalación y curso sobre Laravel 11](https://www.youtube.com/watch?v=laXc22YPGhg&list=PLZ2ovOgdI-kVtF2yQ2kiZetWWTmOQoUSG&index=2)

Este vídeo y su lista de reproducción asociada me ha sido de gran ayuda a la hora de aprender el lenguaje y la metodología 

---
