function show_template()
{
    global $template;
    echo '<div style="position: fixed; bottom: 10px; left: 10px; background-color: rgba(0,0,0,0.5); padding: 10px; z-index: 99999999; color: #fff;">';
    print_r($template);
    echo '</div>';
}
add_action('wp_head', 'show_template');
