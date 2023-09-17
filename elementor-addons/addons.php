<?php

function zahid_tt_one_child_widgets($widgets_manager)
{

    require_once __DIR__ . '/widgets.php';

    $widgets_manager->register(new \ZAHID_Team_Members());
    $widgets_manager->register(new \Hover_Team_Members());
    $widgets_manager->register(new \Zahid_Unsplash());

}
add_action('elementor/widgets/register', 'zahid_tt_one_child_widgets');