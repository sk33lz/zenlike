<?php
// $Id: template.php $
function zenlike_preprocess_page(&$vars) {
 // Generate menu tree from source of Primary Links
 $vars['primary_links_tree'] = menu_tree(variable_get('menu_primary_links_source','primary-links'));
}