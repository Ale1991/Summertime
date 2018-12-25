<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/

function my_autoloader($class_name){
     switch ($class_name[0]) {
        case 'V':
            include ('View/'.$class_name.'.php');
            break;
        case 'F':
            include ('Foundations/'.$class_name.'.php');
            break;
        case 'E':
            include ('Entity/'.$class_name.'.php');
            break;
        case 'C':
            include ('Control/'.$class_name.'.php');
            break;
         case 'U':
            include ('Foundations/Utility/'.$class_name.'.php'); 
            break;
    }
    
}

spl_autoload_register('my_autoloader');


?>
