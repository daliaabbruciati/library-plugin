<?php

add_action('admin_menu', 'settings_menu');

function settings_menu(): void
{
    add_menu_page(
        'Lista prenotazioni',
        'Lista prenotazioni',
        'manage_options',
        plugin_dir_path(__FILE__) . './views/db-view.html.php',
        null,
        'dashicons-book',
        90
    );


    add_submenu_page(
        plugin_dir_path(__FILE__) . './views/db-view.html.php',
        'Aggiungi prenotazione',
        'Aggiungi prenotazione',
        'manage_options',
        plugin_dir_path(__FILE__) . './views/add-new-user.html.php',
        null,
        90
    );

    add_submenu_page(
        plugin_dir_path(__FILE__) . './views/db-view.html.php',
        'Modifica prenotazione',
        'Modifica prenotazione',
        'manage_options',
        plugin_dir_path(__FILE__) . './views/edit-user.html.php',
        null,
        91
    );
}
