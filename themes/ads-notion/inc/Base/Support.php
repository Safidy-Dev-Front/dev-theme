<?php 
    /**
     * 
     */
    namespace Inc\Base;
    class Support 
    {
        // private $passwordUser;
        // private $password;
        public function register(){
            add_action('after_setup_theme', [$this,'theme_support']);
        }
        
        /**
         * @return mixed
         */
        public function theme_support()
        {
            add_theme_support('title-tag');
            add_theme_support('post-thumbnails');
            add_theme_support('menus');
            register_nav_menu('header', 'menu top');
        }
       
    }