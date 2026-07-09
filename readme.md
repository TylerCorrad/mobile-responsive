# Plugin: help-topic-split
Este plugin para osTicket tiene como objetivo ajustar el front-end de la aplicación para su uso en dispositivos móviles.

---


## Compatibilidad
Este plugin es compátible con la versión 1.18 de osTicket, si va a implementarlo en otras verciones tenga precaución.

---

## Instalación
Para implementar este plugin siga los siguientes pasos:

### Paso 1:
descargue este proyecto y muevalo a la carpeta /include/plugins dentro de su instancia de osTicket

### Paso 2:
modifique el archivo */include/client/header.inc.php* incluyendo las siguientes lineas dentro del **head** del archivo:

<!--CSS plugin-->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>include/plugins/mobile-responsive/assets/css/common.css" media="screen"/>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>include/plugins/mobile-responsive/assets/css/users.css" media="screen"/>

### Paso 3:
modifique el archivo */include/staff/header.inc.php* incluyendo las siguientes lineas dentro del **head** del archivo:

<!--CSS plugin-->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>include/plugins/mobile-responsive/assets/css/common.css" media="screen"/>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>include/plugins/mobile-responsive/assets/css/staff.css" media="screen"/>
---

### Paso 4:
Dentro del panel de administrador ingrese a **Administrar > plugins** y haga click sobre la opción *"Añadir nuevo plugin"*. Posteriormente, seleccione la opción *"Instalar"* Esto hará que el plugin quede activo automáticamente, incluso si aparece como deshabilitado.