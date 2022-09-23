<?php
/* Tablesets aktualisieren */

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_table_api::importTablesets(rex_file::get(rex_path::addon($this->name, 'install/wortpresse.tableset.json')));
    rex_yform_manager_table::deleteCache();
}

rex_metainfo_add_field('translate:wortpresse_category_meta_category', 'cat_wortpresse_category', '100', 'multiple="multiple" perm="wortpresse[category_meta]"', 3, '', 'SELECT name, id FROM rex_wortpresse_category ORDER BY name ASC');
rex_metainfo_add_field('translate:wortpresse_category_meta_taxonomy', 'cat_wortpresse_taxonomy', '100', 'multiple="multiple" perm="wortpresse[category_meta]"', 3, '', 'SELECT name, id FROM rex_wortpresse_taxonomy ORDER BY name ASC');
rex_metainfo_add_field('translate:wortpresse_article_meta_category', 'art_wortpresse_category', '100', 'multiple="multiple" perm="wortpresse[article_meta]"', 3, '', 'SELECT name, id FROM rex_wortpresse_category  ORDER BY name ASC');
rex_metainfo_add_field('translate:wortpresse_article_meta_taxonomy', 'art_wortpresse_taxonomy', '100', 'multiple="multiple" perm="wortpresse[article_meta]"', 3, '', 'SELECT name, id FROM rex_wortpresse_taxonomy ORDER BY name ASC');
rex_metainfo_add_field('translate:wortpresse_article_meta_author', 'art_wortpresse_author', '100', 'multiple="multiple" perm="wortpresse[article_author]"', 3, '', 'SELECT name, id FROM rex_user ORDER BY name ASC');
rex_metainfo_add_field('translate:wortpresse_article_meta_publishdate', 'art_wortpresse_publishdate', '100', 'type="datetime-local" perm="wortpresse[article_publishdate]"', 1, '', '');
rex_metainfo_add_field('translate:wortpresse_article_meta_comment', 'art_wortpresse_comment', '100', 'perm="wortpresse[article_comment]"', 5, '', '');
