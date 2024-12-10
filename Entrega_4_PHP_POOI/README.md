# Descripción
Ha arribat l'hora de posar en pràctica una teoria tan important com la de l'orientació a objectes en PHP.

## ✔️	Nivel 1

### Ejercicio 1
Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos).

### Ejercicio 2
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

## Nivel 2

### ✔️	Ejercicio 1
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.


Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.

## ✔️	Nivel 3

### Ejercicio 1
Imagina que has de presentar el catàleg de pel·lícules d'una cadena de cinemes. Cada cinema té un nom, una població a on pertany, i un llistat de pel·lícules. Cada pel·lícula té un nom, una duració, i un director/a.

Es tracta de fer un programa que ens permeti enregistrar aquesta informació per a després:

Per a cada cinema, mostrar les dades de cada pel·lícula.
Per a cada cinema, mostrar la pel·lícula amb major duració.
Implementa una funció que cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir pel·lícules.
A més, pots aprofitar aquest exercici per treballar una bona presentació amb HTML+CSS que doni suport a la lògica.

Objectius
Creació i ús d'objectes en PHP.
Ús de l’herència com a mecanisme en objectes.

# Proyecto PHP Básico

## 💻 Tecnologías Utilizadas

- PHP 7.4 o superior
- HTML5 y CSS (FlexBox)
- Servidor web (Apache, Nginx, etc.) o el servidor web integrado de PHP

## 🔑 Requisitos

- PHP 7.4 o superior instalado en tu sistema
- Un servidor web como Apache o Nginx, o usar el servidor web integrado de PHP
- Navegador web para visualizar la aplicación

## ☕ Instalación

1. Clona el repositorio en tu máquina local:
   ```sh
   git clone https://github.com/soughtsingularity/Sprint-1/tree/main/Entrega_4_PHP_POOI

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