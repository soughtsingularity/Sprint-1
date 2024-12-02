 # Descripción
 Posem en pràctica alguna de les funcionalitats particulars de PHP!

## ✔️	Nivel 1

### Ejercicio 1
Crea un formulari HTML amb els camps que vulguis (almenys un nom o username). El formulari ha de tenir com a action un document PHP. El codi d’aquest document PHP haurà de mostrar els valors dels diferents camps del formulari mitjançant variables superglobals. Enregistra a més, alguns d’aquests valors dins de variables de sessió.

### Ejercicio 2
Fes un programa que faci servir almenys un parell de constants màgiques.

### Ejercicio 3
Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha (que no sigui __construct)

## ✔️	Nivel 2

### Ejercicio 1
Crea una classe que representi un recurs didàctic d’aquesta especialitat. Els recursos hauran de tenir un nom, un tema (que només podrà ser PHP, CSS, HTML, SQL, Laravel) un URL i un tipus de recurs (Fitxer, Article web, Vídeo). Implementa tant el tema com el tipus de recurs amb enums.

### Ejercio 2
Implementa una classe Car que tingui informació sobre un cotxe (marca, matrícula, tipus de combustible, velocitat màxima). A més, implementa un Trait anomenat Turbo que tingui un mètode boost() que mostri un missatge “S’ha iniciat el turbo”. Usa aquest mètode des de la classe Car.

## ✔️	Nivel 3

### Ejercicio 1
Instal.la Composer al teu ordinador. Dona un cop d'ull a alguna llibreria que t'interessi i instal·la-la mitjançant Composer.

### Ejercicio 2
Crea un programa que faci servir aquesta llibreria.

# Proyecto PHP Básico

## 💻 Tecnologías Utilizadas

- PHP 7.4 o superior
- Servidor web (Apache, Nginx, etc.) o el servidor web integrado de PHP

## 🔑 Requisitos

- PHP 7.4 o superior instalado en tu sistema
- Un servidor web como Apache o Nginx, o usar el servidor web integrado de PHP
- Composer 2.7 y la libería de composer brick/math 0.12.1
- Navegador web para visualizar la aplicación

## ☕ Instalación

1. Clona el repositorio en tu máquina local:
   ```sh
   git clone https://github.com/soughtsingularity/Sprint-1/tree/main/Entrega_6_PHP_Avanzado

2. Navega al directorio del proyecto:

```cd tu_repositorio```

3. Si usas un servidor web como Apache o Nginx, asegúrate de que esté configurado para servir archivos PHP desde el directorio del proyecto.

## ⏩ Ejecución

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