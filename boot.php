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

if (rex::isBackend() && rex_be_controller::getCurrentPage() == "wortpresse/edit" || rex_be_controller::getCurrentPage() == "yform/manager/data_edit") {
    rex_extension::register('OUTPUT_FILTER', function (rex_extension_point $ep) {
        $suchmuster = 'class="###wortpresse-settings-editor###"';
        $ersetzen = rex_config::get("wortpresse", "editor");
        $ep->setSubject(str_replace($suchmuster, $ersetzen, $ep->getSubject()));
    });
}
