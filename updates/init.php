    <?php

    require get_template_directory() . '/updates/update-checker/plugin-update-checker.php';
    use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
    
    $myUpdateChecker = PucFactory::buildUpdateChecker(
        'theme.json',
        get_template_directory(), //Full path to the main plugin file or functions.php.
        '_mag'
    );

    ?>