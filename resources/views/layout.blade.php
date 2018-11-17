<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi Sitio</title>
    </head>
    <body>
        <header>
            <nav>
                <a href="<?php echo route('home'); ?>">Inicio</a>
                <a href="<?php echo route('contactos'); ?>">Contacto</a>
                <a href="<?php echo route('saludo', 'Edison'); ?>">Saludo</a>
            </nav>
        </header>
        @yield('contenido')
        <footer>Copyrigth {{ date('Y') }}</footer>
    </body>
</html>
