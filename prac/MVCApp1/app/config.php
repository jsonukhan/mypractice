<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Config::set('site_name', 'Your site name' );


 //Routes. Toute name => method prefix

 Config::set('routes', array(
     'default'  =>  '',
     'admin'    =>  'admin_'
 ));
 
 Config::set('default_route', 'default');
 Config::set('default_controller', 'pages');
 Config::set('default_action', 'index');