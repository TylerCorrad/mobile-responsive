# Plugin: Mobile responsive

El objetivo de este plugin es adecuar la UI de osTicket para ser mas amigable con los usuarios móviles. Este inyecta código css a las plantillas php del sistema, por lo que requiere modificar el core del mismo de manera mínima.

---
## Compatibilidad
Este plugin es compátible con la versión 1.18 de osTicket, si va a implementarlo en otras versiones hagalo con precaución.

---
## Instalación 
Para implementar este plugin en su instancia de osTicket siga los siguientes pasos:

### Paso 1
descargue este proyecto y muevalo a la carpeta */include/plugins* dentro de su instancia de osTicket
### Paso 2
Modifique el archivo **header.inc.php** en las carpetas */include/client/* e */include/staff/* y agregue la siguiente linea dentro de la etiqueta *head*.
<!--CSS plugin-->
``
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>include/plugins/mobile-responsive/assets/css/responsive.css" media="screen"/>
``
<!--CSS plugin-->
### Paso 3
En el panel de administrador de osTicket vaya al apartado **Administrar>Plugins** y haga click sobre *"Añadir nuevo Plugin"*.
### Paso 4
Seleccione el plugin llamado *"mobile responsive plugin"*. El plugin estará habilitado de manera inmediata, no importa si lo habilita o no.