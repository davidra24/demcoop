<?php

    add_action('init', 'demc_register_blocks');

    function demc_register_blocks(){
        $assets_file = include_once DEMC_PATH . "/demcoop/build/index.asset.php";
        
        wp_register_script('demc-registrer-block', 
            plugins_url('./build/index.js', __FILE__),
            $assets_file['dependencies'],
            $assets_file['version']
        );
        
        wp_register_style(
            'demc-registrer-block',
            plugins_url('./build/index.css', __FILE__),
            array(),
            $assets_file['version']
        )

        register_block_type('demc/register', 
        array('editor_script' => 'demc-registrer-block',
              'style' => 'demc-registrer-block'));

    }
?>