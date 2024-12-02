# Descripción
Posa en pràctica el que vas aprendre a fonaments de la programació (o el que no et va fer falta aprendre a fonaments de la programació) però adaptat a PHP! En aquesta entrega ens centrarem en variables, condicionals, bucles, funcions, constants i operacions bàsiques! Deixarem la pràctica amb arrays per al següent tema.

## ✔️	 Nivel 1

### Ejercicio 1
Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.

### Ejercicio 2
Imprimeix per pantalla "Hello, World!" utilitzant una variable. En acabat:

- Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
- Imprimeix per pantalla la mida (longitud) de la variable.
- Imprimeix per pantalla l'string en ordre invers de caràcters.
- Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings.

### Ejercicio 3
Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:

- El valor de cada variable.
- La suma.
- La resta.
- El producte.
- El mòdul.
- Per N i M realitzaràs el mateix.

Per a totes les variables (X, Y, N, M):

- El doble de cada variable.
- La suma de totes les variables.
- El producte de totes les variables.

Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.

### Ejercicio 4
Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per pantalla pas per pas.

### Ejercicio 5
Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

- Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
- Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
- Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
- Si la nota és menor a 33%, l'estudiant reprovarà.

### Ejercicio 6

Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.
Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.


## ✔️	Nivel 2

### Ejercicio 1
Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

- Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
- Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.

### Ejercicio 2
Imagina que som a una botiga on es ven:

- Xocolata: 1 euro
- Xiclets: 0,50 euros
- Caramels: 1,50 euros

Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:

2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:

funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

Sent, per tant, el total, 4.

## ✔️	 Nivel 3

El sedàs d'Eratòstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. Basant-te en la informació de l'enllaç adjunt, implementa el sedàs d'Eratòstenes dins d'una funció, de tal forma que puguem invocar la funció per a un número concret.

# Proyecto PHP Básico

## 💻 Tecnologías Utilizadas

- PHP 7.4 o superior
- Servidor web (Apache, Nginx, etc.) o el servidor web integrado de PHP

## 🔑 Requisitos

- PHP 7.4 o superior instalado en tu sistema
- Un servidor web como Apache o Nginx, o usar el servidor web integrado de PHP
- Navegador web para visualizar la aplicación

## ☕ Instalación

1. Clona el repositorio en tu máquina local:
   ```sh
   git clone https://github.com/soughtsingularity/Sprint-1/tree/main/Entrega_2_PHP_BASICS

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
- n1_basic.php
- n2_basic.php
- n3_basic.php

### Usando servidor web como Apache o Nginx

1. Asegurate de que tu serviddor web esté en ejecución
2. Abre tu navegador preferido y navega a la URL donde esté alojado tu proyecto. Por ejemplo:

```http://localhost/tu_repositorio/archivo.php```






