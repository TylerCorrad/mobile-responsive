<?php
class MobileResponsivePlugin extends Plugin
{
    
    function bootstrap() {
        if (!defined('INCLUDE_DIR') || $this->isStaff())
            return;
            // Inyectar CSS
            echo '<link rel="stylesheet" href="include/plugins/moblie-responsive/assets/css/common.css">';
            echo '<link rel="stylesheet" href="include/plugins/moblie-responsive/assets/css/users.css">';
            echo '<link rel="stylesheet" href="include/plugins/moblie-responsive/assets/css/staff.css">';
    }

    function onPageLoad($page)
    {

        if (basename($_SERVER['PHP_SELF']) !== 'open.php')
            return;

        global $ost;

        if ($ost) {

            $script = <<<HTML
<script>
document.addEventListener("DOMContentLoaded", function() {
    console.log("PLUGIN FUNCIONANDO");
});
</script>
HTML;

            $ost->addExtraHeader($script);
        }
    }
}