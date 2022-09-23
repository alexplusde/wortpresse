<?php
/* Tablesets aktualisieren */

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_table_api::importTablesets(rex_file::get(rex_path::addon($this->name, 'install/wortpresse.tableset.json')));
    rex_yform_manager_table::deleteCache();
}
