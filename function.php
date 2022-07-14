<?php 
function ppoutput(){
    echo "yes";
    include("popup_settings_html.php");
    // popup_settings_html.php
    
}
// Register settings using the Settings API 
function pp_register_my_setting() {
    // register_setting( 'my-options-group', 'my-option-name', 'intval' ); 
    // echo "yes";
    add_menu_page( 'Pop up settings', 'Pop up settings', 'administrator', "popupset", 'ppoutput' );
} 

add_action( 'admin_menu', 'pp_register_my_setting' );

?>
