<?php

/*
* Plugin Name: Add Teacher Bio
* Plugin URI: larawhybrow.com
* Description: Add customizable teacher bio. Works with Open LMS
* Version: 1.0
* Author: LW
* Author URI: larawhybrow.com
*/

class TeacherBioClass {
    function __construct(){
        add_action('admin_menu', array($this,'addtoadminpage'));
        add_action('admin_init',array($this,'settings'));
    }
    
    function settings() {
        add_settings_section('tbs-section1',null,null,'teacher-bio-settings-page');
        
        add_settings_field('tbs_position','Display Location',array($this,'locationHTML'),'teacher-bio-settings-page','tbs-section1');
        register_setting('tbs_group','tbs_position',array('sanitize_callback' =>'sanitize_text_field','default'=>'0'));
        
        add_settings_field('tbs_headline','Headline Text',array($this,'headlineHTML'),'teacher-bio-settings-page','tbs-section1');
        register_setting('tbs_group','tbs_headline',array('sanitize_callback' =>'sanitize_text_field','default'=>'Headline Text'));

        add_settings_field('tbs_showAnnouncements','Show Announcements',array($this,'announcementsHTML'),'teacher-bio-settings-page','tbs-section1');
        register_setting('tbs_group','tbs_showAnnouncements',array('sanitize_callback' =>'sanitize_text_field','default'=>'1'));


    }
    
    function announcementsHTML() {
        ?>
            <input type="checkbox" name='tbs_showAnnouncements' value='1' <?php checked(get_option('tbs_showAnnouncements'),1) ?>
        <?php
    }


    function headlineHTML(){
        ?>
        <input type='text' name='tbs_headline' value='<?php echo esc_attr(get_option('tbs_headline')) ?>' 
        
    <?php
    }
    
    
    function locationHTML(){
        ?>
        <select name='tbs_position'>
        <option value='0' <?php selected(get_option('tbs_position'),0) ?>>Beginning of page</option>
        <option value='1'<?php selected(get_option('tbs_position'),1) ?>>End of page</option>
        </select>
    <?php
    }
    
    function addtoadminpage() {
        add_options_page('Teacher Bio Settings','Teacher Bio','manage_options','teacher-bio-settings-page',array($this,'settingsLayoutHTML'));
    }
    
    function settingsLayoutHTML(){ ?>
        <div class='wrap'>
            <h1>Teacher Bio Settings<h1>
            <form action='options.php' method='POST'>
             <?php
              settings_fields('tbs_group');
              do_settings_sections('teacher-bio-settings-page');
              submit_button();
             ?>

            </form>
        </div>
    
    <?php }
}

$TeacherBioClass = new TeacherBioClass();




