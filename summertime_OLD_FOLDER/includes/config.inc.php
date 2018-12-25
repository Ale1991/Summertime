<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

global $config;

$config['smarty']['template_dir'] =
'C:\Users\Alessio\Desktop\Summertime\Summertime\templates\main\template';
$config['smarty']['compile_dir'] =
'C:\Users\Alessio\Desktop\Summertime\Summertime\templates\main\templates_c';
$config['smarty']['config_dir'] =
'C:\Users\Alessio\Desktop\Summertime\Summertime\templates\main\configs';
$config['smarty']['cache_dir'] =
'C:\Users\Alessio\Desktop\Summertime\Summertime\templates\main\cache';

$config['debug']=false;
$config['mysql']['user'] = 'root';
$config['mysql']['password'] = 'summertime';
$config['mysql']['host'] = 'summertime';
$config['mysql']['database'] = 'summertime';

//configurazione server smtp per invio email
$config['smtp']['host'] = 'smtp.cheapnet.it';
$config['smtp']['port'] = '25';
$config['smtp']['smtpauth'] = false;
$config['smtp']['username'] = '';
$config['smtp']['password'] = '';

$config['email_webmaster']='webmaster@bookstore.lamjex.com';
$config['url_summertime']='http://summertime';

function debug($var){
    global $config;
    if ($config['debug']){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}

?>
