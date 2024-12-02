 
# Descripción
En aquesta pràctica crearem i operarem amb arrays.

## ✔️	Nivel 1

### Ejercicio 1
Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.

### Ejercicio 2
```$X = array (10, 20, 30, 40, 50,60);```

Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). Mostra per última vegada la mida de l’array.

### Ejercicio 3
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.

### Ejercicio 4
Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:

- nom
- edat
- email
- menjar favorit

## ✔️	Nivel 2

### Ejercicio 1
Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:

- La intersecció dels dos arrays (nombres en comú)
- La mescla dels dos arrays.

### Ejercicio 2
Crea un programa que llisti les notes dels/les alumnes d’una classe. Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.

## ✔️	 Nivel 3

### Ejercicio 1
Donat un array d’enters, fes un programa que:

Retorni cada valor de l’array elevat al cub fent servir la funció array_map().

### Ejercicio 2
Donat un array d’strings, fes un programa que:

Retorni un array on només estiguin els strings que tinguin un nom parell de caràcters usant la funció array_filter().

### Ejercicio 3
Donat un array d’enters, fes un programa que ens retorni la suma dels enters de l’array que siguin primers fent servir la funció array_reduce().


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
   git clone https://github.com/soughtsingularity/Sprint-1/tree/main/Entrega_3_PHP_ARRAYS

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
- n1_arrays.php
- n2_arrays.php
- n3_arrays.php

### Usando servidor web como Apache o Nginx

1. Asegurate de que tu serviddor web esté en ejecución
2. Abre tu navegador preferido y navega a la URL donde esté alojado tu proyecto. Por ejemplo:

```http://localhost/tu_repositorio/archivo.php```