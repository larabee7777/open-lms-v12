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
    }
    function addtoadminpage() {
        add_options_page('Teacher Bio Settings','Teacher Bio','manage_options','teacher-bio-settings',array($this,'settingsLayout'));
    }
    
    function settingsLayout(){ ?>
        <div class='wrap'>
            <h1>Teacher Bio Settings<h1>
        </div>
    
    <?php }
}

$TeacherBioClass = new TeacherBioClass();




