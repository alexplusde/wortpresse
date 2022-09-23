<?php
/* Tablesets aktualisieren */

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_table_api::importTablesets(rex_file::get(rex_path::addon($this->name, 'install/wortpresse.tableset.json')));
    rex_yform_manager_table::deleteCache();
}

rex_metainfo_add_field('translate:wortpresse_category_meta_category', 'cat_wortpresse_category', '100', 'multiple="multiple" perm="wortpresse[category_meta]" note="translate:wortpresse_category"', 3, '', 'SELECT name, id FROM rex_wortpresse_category ORDER BY name DESC');
rex_metainfo_add_field('translate:wortpresse_category_meta_taxonomy', 'cat_wortpresse_taxonomy', '100', 'multiple="multiple" perm="wortpresse[category_meta]" note="translate:wortpresse_taxonomy"', 3, '', 'SELECT name, id FROM rex_wortpresse_taxonomy ORDER BY name DESC');
rex_metainfo_add_field('translate:wortpresse_article_meta_category', 'art_wortpresse_category', '100', 'multiple="multiple" perm="wortpresse[article_meta]" note="translate:wortpresse_category"', 3, '', 'SELECT name, id FROM rex_wortpresse_category  ORDER BY name DESC');
rex_metainfo_add_field('translate:wortpresse_article_meta_taxonomy', 'art_wortpresse_taxonomy', '100', 'multiple="multiple" perm="wortpresse[article_meta]" note="translate:wortpresse_taxonomy"', 3, '', 'SELECT name, id FROM rex_wortpresse_taxonomy ORDER BY name DESC');
