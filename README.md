<h1 align="center" >Buckysearch</h1>

## Resumen

El proyecto Buckysearch trata de una página web en la que estudiantes universitarios puedan publicar
sus libros para vender o intercambiar.

## Vistas

![página principal](https://raw.githubusercontent.com/angel553/final_project_books/main/public/assets/images/principal_1.png)

![página principal 2](https://raw.githubusercontent.com/angel553/final_project_books/main/public/assets/images/principal_2.png)

## Instalación

Instrucciones para ejecutar el proyecto

1. Clonar repositorio

    ```sh
    git clone https://github.com/angel553/final_project_books.git final-books
    ```

1. Ingresar al directorio donde se clono el proyecto

    ```sh
    cd final-books
    ```

1. Instalación de dependencias

    ```sh
    composer install
    ```

1. Copiar el archivo .env.example al archivo .env
    ```sh
    cp .env.example .env
    ```
1. Generación de la key

    ```sh
    php artisan key:generate
    ```

1. Crear base de datos `final_books`

1. Ingresar al archivo `.env`

    - Modificar los valores de la base de datos (`DB_DATABASE=final_books`, `DB_USERNAME=root`, `DB_PASSWORD=`)

1. Crear link simbólico

    ```sh
    php artisan storage:link
    ```

1. Ejecutar migraciones
    ```
    php artisan migrate
    ```
1. Ejcutar seeder

    ```
    php artisan db:seed
    ```

    Este comando crea:

    - 1 usuario (Admininistrador) y otros 10 usuarios (Usuario):

        > email: test@test.com , password: 12345678

        > email: aleatorio , password: password

    - 2 libros que se relacionan con el usuario de id = 2:

        > book->user_id->2, los demás datos del libro son aleatorios

    - 3 etiquetas:

        > Venta, Intercambio y no disponible

    - relación entre etiquetas y libros:

        > Se relacionan las 3 etiquetas a los libros

1. Ejecutar proyecto

    > Iniciar laragon y los servidores de: mysql y apache

1. Ingresar a `final_books.test` en el navegador

    > Verificar que los servicios de laragon esten corriendo.

1. Envío de correos (Contactactános y contactar vendedor)

-   En la página [mailtrap](https://mailtrap.io/)
-   Iniciar sesión con la cuenta de github, entrar al archivo `.env` y configurarlo de acuerdo a lo que indica en la página mailtrap:
    -   Una vez configurado en esa página llegarán los correos que se manden desde los formularios.
