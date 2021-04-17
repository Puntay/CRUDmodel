# Modelo de CRUD con PHP

_Ejemplo utilizando MVC (Modelo, Vista y Controlador) con patrones DAO (Data Access Object) y VO (Value Object)._

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

### Pre-requisitos 📋

_Que cosas necesitas para instalar el software y como instalarlas_

```
Debes tener instalado Xampp o similar [https://www.apachefriends.org/es/download.html]
```

### Instalación 🔧

_Crear la base de datos y revisar la configuración en la carpeta configuracion.php_

```
CREATE TABLE `trabajador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_trab` varchar(25) NOT NULL,
  `ape_trab` varchar(25) NOT NULL,
  `fec_ini` date NOT NULL,
  `sueldo` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `trabajador` (`id`, `nom_trab`, `ape_trab`, `fec_ini`, `sueldo`) VALUES
(1, 'PABLO', 'GONZALEZ', '1965-06-15', '3500.00'),
(2, 'JUAN', 'QUISPE', '1970-12-11', '2750.00'),
(3, 'FERNANDO', 'RODRIGUEZ', '1985-12-14', '1200.00'),
(4, 'HENRY', 'VALENZUELA', '1987-01-28', '985.00'),
(5, 'RAUL', 'CHINCHAISUYO', '1960-11-01', '6500.00'),
(6, 'JORGE', 'MELENDRES', '2021-04-12', '1111.00');
```
_Instalar Smarty Templates_

_Clonar el repositorio_

```
$ git clone https://github.com/Puntay/CRUDmodel.git
```

## Despliegue 📦

_Configurar la carpeta Smarty dentro del proyecto_


## Construido con 🛠️

_Las herramientas utilizadas son:_

* [PHP](https://www.php.net/) - Lenguaje utilizado
* [Smarty](https://www.smarty.net/download) - Gestor de Plantillas
* [HTML](https://www.w3.org/html/) - HTML5


## Autor ✒️

* **Pablo Untay** - *Diseño y Desarrollo* - [Puntay](https://github.com/Puntay)

---
⌨️