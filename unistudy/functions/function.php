<?php
    function get_header(){
        require_once("includes/header.php");
    }
    function get_bread(){
        require_once("includes/breadcrumb.php");
    }
    function get_testimonial(){
        require_once("includes/testimonial.php");
    }
    function get_part($addpart){
        require_once("includes/".$addpart);
    }
    function get_footer(){
        require_once("includes/footer.php");
    }
?>