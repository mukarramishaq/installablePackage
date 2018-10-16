<?php

    $manifest = array(
        'acceptable_sugar_flavors' => array('CE','PRO','CORP','ENT','ULT'),
        'acceptable_sugar_versions' => array(
            'exact_matches' => array('8.0.1.0', '7.9.2.0'),
            'regex_matches' => array('(.*?)\\.(.*?)\\.(.*?)$'),
        ),
        'author' => 'SugarCRM',
        'description' => 'Installs a sample logic hook',
        'icon' => '',
        'is_uninstallable' => true,
        'name' => 'Example Logic Hook Installer',
        'published_date' => '2012-07-06 2012 20:45:04',
        'type' => 'module',
        'version' => '1341607504',
    );

    $installdefs = array(
        'id' => 'package_1341607504',
        'copy' => array(
            0 => array(
                'from' => '<basepath>/Files/custom/modules/Accounts/accounts_save.php',
                'to' => 'custom/modules/Accounts/accounts_save.php',
            ),
        ),
        'logic_hooks' => array(
            array(
                'module' => 'Accounts',
                'hook' => 'before_save',
                'order' => 99,
                'description' => 'Example Logic Hook - Updates account name',
                'file' => 'custom/modules/Accounts/accounts_save.php',
                'class' => 'Accounts_Save',
                'function' => 'updateAccountName',
            ),
        ),
    );

?>
