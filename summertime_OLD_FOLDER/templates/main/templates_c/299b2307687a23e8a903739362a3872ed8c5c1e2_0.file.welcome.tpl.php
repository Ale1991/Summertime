<?php
/* Smarty version 3.1.33, created on 2018-12-03 19:55:33
  from 'C:\Users\Alessio\Desktop\Summertime\Summertime\templates\main\template\welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c057c25984188_34474976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '299b2307687a23e8a903739362a3872ed8c5c1e2' => 
    array (
      0 => 'C:\\Users\\Alessio\\Desktop\\Summertime\\Summertime\\templates\\main\\template\\welcome.tpl',
      1 => 1543854001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c057c25984188_34474976 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<body>
<h1 title="Prenotazione"><?php echo $_smarty_tpl->tpl_vars['nomelido']->value;?>
</h1>
<h2>Ciao <?php echo $_smarty_tpl->tpl_vars['nomeutente']->value;?>
</h2>

<form method="post" action="index.php">
  Inserisci l'ID dell'ombrellone <br>
  <input type="text" name="ombrellone"><br>
   Dal:
  <input type="date" name="data1" min=<?php echo $_smarty_tpl->tpl_vars['dataApertura']->value;?>
 max=<?php echo $_smarty_tpl->tpl_vars['dataChiusura']->value;?>
>
   Al:
  <input type="date" name="data2" min=<?php echo $_smarty_tpl->tpl_vars['dataApertura']->value;?>
 max=<?php echo $_smarty_tpl->tpl_vars['dataChiusura']->value;?>
>
  
               
    <input type="submit" value="Prenota ora!">
  
  
</form>



</body>
</html>



<?php }
}
