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
if (rex::isBackend() && is_object(rex::getUser())) {
    rex_perm::register('wortpresse[category_meta]', "Kategorie-Taxonomien", rex_perm::EXTRAS);
    rex_perm::register('wortpresse[article_meta]', "Artikel-Taxonomien", rex_perm::EXTRAS);
    rex_perm::register('wortpresse[article_author]', "Autor/en", rex_perm::EXTRAS);
    rex_perm::register('wortpresse[article_publishdate]', "Veröfentlichungsdatum", rex_perm::EXTRAS);
    rex_perm::register('wortpresse[article_comment]', "Kommentare", rex_perm::EXTRAS);
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
