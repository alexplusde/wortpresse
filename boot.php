<?php
if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_dataset::setModelClass(
        'rex_wortpresse_category',
        wp_category::class
    );
    rex_yform_manager_dataset::setModelClass(
        'rex_wortpresse_tag',
        wp_tag::class
    );
    rex_yform_manager_dataset::setModelClass(
        'rex_wortpresse_menu',
        wp_menu::class
    );
}

# Prüfen, ob ein anderes Addon installiert ist, bspw. Cronjob-Addon
/*
if (rex_addon::get('cronjob')->isAvailable() && !rex::isSafeMode()) {
    rex_cronjob_manager::registerType('rex_cronjob_wortpresse');
}
*/

# Beim Extension Point REX_YFORM_SAVED etwas ausführen
/*
rex_extension::register('REX_YFORM_SAVED', function (rex_extension_point $ep) {
    // Mein Code, oder meine Funktion / statische Methode aufrufen
});
*/
