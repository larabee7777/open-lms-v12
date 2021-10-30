<?php
/**
 * Plugin Name: Knowledge Check 
 * Author: Lara W
 * Version: 1.0.0
 */
  
function loadMyBlock() {
  wp_enqueue_script(
    'knowledge_check_block',
    plugin_dir_url(__FILE__) . 'knowledge_check_block.js',
    array('wp-blocks','wp-editor'),
    true
  );
}
   
add_action('enqueue_block_editor_assets', 'loadMyBlock');
