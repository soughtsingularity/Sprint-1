# Descripción
Juguem una mica amb una de les llibreries més utilitzades en testing per a PHP, PHPunit.

## ✔️	Nivel 1

### Ejercicio 1
Donada la classe NumberChecker programa els tests unitaris que facin falta per certificar que el codi font de la classe fa el que ha de fer.

### Ejercicio 2
Practiquem una mica de TDD. Recorda l’exercici 5 del nivell de PHP Bàsics i pensa tests que podries realitzar per provar el seu correcte funcionament. Programa’ls i després ves realitzant el programa a testejar pas a pas segons valides els tests prèviament creats.

## ✔️	Nivel 2

### Ejercicio 1
Programa un DataProvider per a la classe Test de l’exercici 1 del nivell anterior i fes-lo servir.

### Ejercicio 3
Programa un DataProvider per a la classe Test de l’exercici 2 del nivell 1 i fes-lo servir.

## ✖️ Nivel 3 (En construcción)
Necessitem crear un petit software per a tractament d’informació en una biblioteca. Per això necessitem representar la informació d’un llibre, que té:

- Un títol
- Un autor/autora
- Un ISBN
- Un gènere, que pot ser: Aventures, Ciència-ficció, Conte, Novel·la Policial, Paranormal, Distopia, Fantàstic.
- núm. de pàgines.

Necessitem emmagatzemar el conjunt de llibres i tenir mètodes que:

Afegeixin, esborrin i modifiquin un llibre de la llibreria.
Permetin consultar llibres per títol, gènere, ISBN o autor.
Retornar llibres grans (més de 500 pàgines).
Desenvolupa mitjançant TDD aquest programa per tal de garantir que compleix totes les funcionalitats demanades per l’enunciat.

# Proyecto PHP Básico

## 💻 Tecnologías Utilizadas

- PHP 7.4 o superior
- Composer 
- xDebug
- PHP Unit PHPUnit 10.5.38
- Servidor web (Apache, Nginx, etc.) o el servidor web integrado de PHP

## 🔑 Requisitos

- PHP 7.4 o superior instalado en tu sistema
- Un servidor web como Apache o Nginx, o usar el servidor web integrado de PHP
- Navegador web para visualizar la aplicación

## ☕ Instalación

1. Clona el repositorio en tu máquina local:
   ```sh
   git clone https://github.com/soughtsingularity/Sprint-1/tree/main/Entrega_7_PHP_Test

2. Navega al directorio del proyecto:

```cd tu_repositorio```

3. Si usas un servidor web como Apache o Nginx, asegúrate de que esté configurado para servir archivos PHP desde el directorio del proyecto.

## ⏩ Ejecución

## Para los test

1. Dada la configuración de phpunit.xml:

```
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php">
    <testsuites>
        <testsuite name="Default">
            <directory>./tests</directory>
        </testsuite>
    </testsuites>
</phpunit>

```

Podemos ejecutar los test de la siguiente manera:

2. Navega al direcorio del proyecto

```cd_tu_repositorio```

3. BUsca la carpeta que aloja los test

```cd_carpeta_con_test_```

4. Ejecuta lo siguiente para ejecutar el test globalmente:
```phpunit + "cd_clase_con_test"```

5. Ejecuta lo siguiente para ejecutar el test con Composer:
```./vendor/bin/phpunit tests/archivo.php```

archivo.php es el archivo.php alojado en el repositorio que quieras testear, en este caso puede ser:
- NumberCheckerTest.php
- TDDTest.php

## Para el resto de archivos

### Usando el servidor integrado de PHP

1. Navega al direcorio del proyecto

```cd_tu_repositorio```

2. Inicia el servidor web integrado de PHP:

```php -S localhost:8000```

3. Navega a:

```http://localhost:8000/archivo.php```

archivo.php es el archivo.php alojado en el repositorio que quieras abrir, en este caso puede ser:
- index.php

### Usando servidor web como Apache o Nginx

1. Asegurate de que tu serviddor web esté en ejecución
2. Abre tu navegador preferido y navega a la URL donde esté alojado tu proyecto. Por ejemplo:

```http://localhost/tu_repositorio/archivo.php```