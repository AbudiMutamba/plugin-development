<?php

namespace WPC;

class Widget_Loader  {
    //signleton

    private static $_instance = null;

    public static function instance () 
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self:: $_instance;
    }

    private function include_widgets_files()
    {
        require_once(_DIR_ . '/widgets/text-excerpt.php');
    }

    public function register_widgets()
    {
        $this->include_widgets_files();

        \Elementor\Plugins::instance()->widgets_manager->register_widget_type(new Widgets\Text_Excerpt());
    }

    public function _construct()
    {
        add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets'], 99);
    }
}




// Instantiate Plugin Class
Widget_Loader::instance();