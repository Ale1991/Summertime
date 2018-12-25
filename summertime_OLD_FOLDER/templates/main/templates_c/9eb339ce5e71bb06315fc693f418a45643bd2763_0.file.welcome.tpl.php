<?php
/* Smarty version 3.1.33, created on 2018-10-19 16:16:36
  from 'C:\Users\Alessio\Desktop\Summertime\Summertime\templates\welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc9e7446197b5_26536154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9eb339ce5e71bb06315fc693f418a45643bd2763' => 
    array (
      0 => 'C:\\Users\\Alessio\\Desktop\\Summertime\\Summertime\\templates\\welcome.tpl',
      1 => 1539958594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc9e7446197b5_26536154 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<body>
<h1 title="Prenotazione">The title Attribute</h1>
<h2>Ciao <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>

<fieldset>
    <legend>Scegli la data!</legend>

    <div>
        <label for="start"></label>
        <input type="date" id="start" name="trip"
                              min="2018-01-01" max="2018-12-31" />
    </div>



</fieldset>
<button>PRENOTA ORA</button>
</body>
</html><?php }
}
