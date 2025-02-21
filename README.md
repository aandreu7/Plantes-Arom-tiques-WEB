## 🇪🇸 Español

# 🛒 Tienda Virtual: Plantas aromáticas (https://plantas-aromaticas.onrender.com)

Este repositorio contiene el código fuente de una tienda virtual (ficticia) desarrollada con **JQuery, JavaScript, PHP, CSS y HTML 5**. El proyecto sigue la arquitectura **MVC** y cuenta con medidas de seguridad para evitar ataques como **SQL Injection** y **XSS**.

## 🚀 Tecnologías utilizadas

- **Frontend**: HTML 5, CSS, JavaScript, JQuery  
- **Backend**: PHP  
- **Base de datos**: PostgreSQL 
- **Arquitectura**: Modelo-Vista-Controlador (MVC)  

## 🔐 Seguridad implementada

✔️ **Protección contra SQL Injection** mediante consultas preparadas.  
✔️ **Protección contra XSS** asegurando la sanitización de entradas del usuario.  
✔️ **Contraseñas protegidas** mediante hashing seguro antes de almacenarlas en la base de datos.

## 📤 Despliegue

El despliegue (**deploy**) se ha realizado utilizando **Render** como servicio de hosting y **Neon** como servicio donde se aloja la base de datos. 
La web está aislada dentro de un contenedor **Docker** y el servicio de hosting lo ejecuta como una aplicación independiente.

## ⚠️ Importante: Subida de imágenes

Los usuarios pueden subir imágenes (como fotos de perfil), pero **estas no se almacenarán de forma persistente**.  
Esto se debe a que **el servicio de hosting utilizado no permite almacenamiento persistente de archivos**, por lo que cualquier imagen subida se perderá al reiniciar el servidor.

## ⚠️ Importante: Tienda ficticia

En ningún momento hay que introducir datos de ninguna cuenta bancaria/tarjeta/Paypal u otros. Una vez el usuario confirma la comanda, simplemente se guarda en una base de datos. El pedido no llegará nunca ni tampoco se efectuará ningún cobro.

## 🇨🇦 Català

# 🛒 Botiga Virtual: Plantes aromàtiques (https://plantas-aromaticas.onrender.com)

Aquest repositori conté el codi font d'una botiga virtual (fictícia) desenvolupada amb **JQuery, JavaScript, PHP, CSS i HTML 5**. El projecte segueix l'arquitectura **MVC** i compta amb mesures de seguretat per evitar atacs com **SQL Injection** i **XSS**.

## 🚀 Tecnologies utilitzades

- **Frontend**: HTML 5, CSS, JavaScript, JQuery  
- **Backend**: PHP  
- **Base de dades**: PostgreSQL 
- **Arquitectura**: Model-Vista-Controlador (MVC)  

## 🔐 Seguretat implementada

✔️ **Protecció contra SQL Injection** mitjançant consultes preparades.  
✔️ **Protecció contra XSS** assegurant la sanitització d'entrades de l'usuari.  
✔️ **Contrasenyes protegides** mitjançant hashing segur abans d'emmagatzemar-les a la base de dades.

## 📤 Desplegament

El desplegament (**deploy**) s'ha fet utilitzant **Render** com a servei de hosting i **Neon** com a servei on s'allotja la base de dades. 
La web està aïllada dins d'un contenidor **Docker** i el servei de hosting l'executa com una aplicació independent.

## ⚠️ Important: Pujada d'imatges

Els usuaris poden pujar imatges (com fotografies de perfil), però **aquestes no s'emmagatzemaran de forma persistent**.  
Això és perquè **el servei de hosting utilitzat no permet emmagatzematge persistent de fitxers**, per la qual cosa qualsevol imatge pujada es perdrà en reiniciar el servidor.

## ⚠️ Important: Botiga fictícia

En cap moment cal introduir dades de cap compte bancari/targeta/Paypal o altres. Un cop l'usuari confirma la comanda, simplement es guarda a una base de dades. La comanda no arribarà mai ni tampoc no s'efectuarà cap cobrament.
