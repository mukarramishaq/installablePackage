<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class Accounts_Save
    {
        function updateAccountName($bean, $event, $arguments)
        {
            $bean->name = "My New Account Name (" . time() . ")";
        }
    }

?>
