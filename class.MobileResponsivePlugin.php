<?php
class MobileResponsivePlugin extends Plugin
{
    
    function bootstrap() {
        if (!defined('INCLUDE_DIR') || $this->isStaff())
            return;
            // Inyectar CSS
            echo '<link rel="stylesheet" href="include/plugins/mobile-responsive/assets/css/test.css">';

    }

    function onPageLoad($page)
    {

        if (basename($_SERVER['PHP_SELF']) !== 'open.php')
            return;

        global $ost;

        if ($ost) {

            $script = <<<HTML
HTML;
            $ost->addExtraHeader($script);
        }
    }
}