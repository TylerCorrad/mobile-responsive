<?php
require_once INCLUDE_DIR . 'class.plugin.php';

class MobileResponsiveConfig extends PluginConfig {

    function getOptions() {
        return [
            'general' => new SectionBreakField([
                'label' => 'Configuración general'
            ]),
        ];
    }
}