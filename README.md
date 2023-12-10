# Desenvolupament d'un sistema basic de gestió d'usuaris
### *DWES - Marc Morlá Isern*

### 💬 ***Enunciat:***
Per fer l’avaluació d'aquest primer trimestre, ens centrarem en l’ús de PHP per a desenvolupar un sistema d'autenticació, la gestió de cookies, variables de sessió i operacions bàsiques d'escriptura/lectura en una base de dades MySQL.

---
### 🔨 ***Eines empleades:***
    HTML
    PHP
    MySQL
    CSS
---

### ❔ ***Com poder executar l'aplicació***
En primer lloc i absolutament necessari hem de tenir un servidor web que tingui habilitada la funció de PHP i MySQL. 

En el meu cas jo he fet servir la pila XAMPP i la instal·lació anirà sobre ella.
[Descarregar XAMPP](https://sourceforge.net/projects/xampp/)


![gestioUsuaris](/READMEimg/instalacion.png)

Quan tinguem l'aplicació instal·lada hem d'habilitar els mòduls:
- Apache
- MySQL

![gestioUsuaris](/READMEimg/instalacion2.png)

Per poder executar l'aplicació hem de ficar l'estructura de carpetes amb els fitxers distintius a la carpeta **htdocs**

![gestioUsuaris](/READMEimg/instalacion4.png)
![gestioUsuaris](/READMEimg/instalacion3.png)

Amb aquesta configuració ja podriem executar l'aplicació al navegador web.
Per poder accedir des del navegador escrivim a la barra de navegació: 

    localhost/*nom_de_la_teva_carpeta*

### 📋 ***Configuració de la base de dades***

Per poder fer funcionar l'aplicació es necesari tenir una base de dades activa per això abans hem activat el mòdul **MySQL** juntament amb el Apache.

Per accedir al gestor de base de dades de **XAMPP *phpMyAdmin*** escrivim a la barra de navegació:

    localhost/phpmyadmin

![gestioUsuaris](/READMEimg/bd1.png)
Elegim un nom per la base de dades, feim servir en aquest projecte **dbdwes** perquè així ho tenim configurat al nostre php
![gestioUsuaris](/READMEimg/bd2.png)
Crearem una taula anomenada **users**
![gestioUsuaris](/READMEimg/bd3.png)
I crearem les 4 columnes necesaries:
- id: Tipus int (Marcarem la cesella ***A_I*** perque l'id dels usuaris sigui autoincrementable)
- nom: Tipus varchar
- email: Tipus varchar
- pass: Tipus varchar

#### Are ja tenim l'entorn perperat per poder executar l'aplicació
---
### 💻 ***Captures del sistema en funcionament***
*`Executat en tot moment amb la pila XAMPP`*

Quan executem ens redirecciona automàticament al fitxer index.php que té el login de la nostra aplicació

***Login principal:***
![gestioUsuaris](/READMEimg/gestionImg.png)
***Registre d'usuaris***
![gestioUsuaris](/READMEimg/gestionImg2.png)

***Pantalla de benvinguda dinàmica:***

Segons l'hora del dia d'avui l'aplicació mostrará:
- Bon dia
- Bones tardes
- Bona nit

Juntament amb el nom de l'usuari que hem creat
![gestioUsuaris](/READMEimg/gestionImg4.png)
![gestioUsuaris](/READMEimg/gestionImg5.png)
![gestioUsuaris](/READMEimg/gestionImg6.png)

### 🔜 ***Possibles millores de cara a un futur:***
- Implementació de mes dades d'usuari
- Millora d'interfaç
- Refactoritzar el codi

### 💡 ***Conclusió amb el projecte:***
    Personalment aquest treball m'ha ajudat molt, tant per aprendre, com per saber com treballar amb la pressió d'haver-lo d'entregar un dia en concret.

    
    Escriure aquest manual d'instal·lació m'ha costat pel fet que no sabia exactament quantes coses ficar. Tot i així pens que ho he pogut escriure el més dinàmic possible.

    Ha estat un projecte diferent i m'ha agradat l'estructura on ho havíem de fer.
---

### 🔎 ***Bibliografia:***
> Password Hash and Password Verify - Salt and Hash a Password in PHP (https://youtu.be/DuXHjdK--DU?list=LL) — *Ken Swartwout*