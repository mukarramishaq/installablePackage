<?php
/**
 * Created by PhpStorm.
 * User: mukarram.ishaq
 * Date: 10/22/18
 * Time: 2:29 PM
 */

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class CustomEndPoint extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'test1' => [
                'reqType' => 'GET',
                'noLoginRequired'=>true,
                'path'=>['customEndPoint', 'test1', '?'],
                'pathVars'=>['','','id'],
                'method'=>'test1',
                'shortHelp'=>'This is test1 endpoint you can access it like http://{site-name}/rest/v11_1/customEndPoint/test1/{id}',
            ],
        );
    }

    public function test1($api, $args)
    {
        $args['author'] = 'Mukarram Ishaq';
        return $args;
    }
}