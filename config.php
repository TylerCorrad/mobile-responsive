<?php
require_once INCLUDE_DIR . 'class.plugin.php';

class MobileResponsiveConfig extends PluginConfig {

    function getOptions() {
        return [
            'general' => new SectionBreakField([
                'label' => 'Configuración general'
            ]),

            'enable_responsive' => new BooleanField([
                'label' => 'Activar diseño responsive',
                'default' => true,
                'hint' => 'Aplica ajustes móviles al formulario'
            ])
        ];
    }
}