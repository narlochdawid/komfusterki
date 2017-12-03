<?php /* Smarty version Smarty-3.1.19, created on 2017-12-03 09:57:46
         compiled from "module:ps_customtext/ps_customtext.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10247847795a23bc8af3ce62-68081208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8654b2ba7ef103395c5eb0a4a12ed7463d291bc8' => 
    array (
      0 => 'module:ps_customtext/ps_customtext.tpl',
      1 => 1512163028,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '10247847795a23bc8af3ce62-68081208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_infos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a23bc8b000ab1_00610386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a23bc8b000ab1_00610386')) {function content_5a23bc8b000ab1_00610386($_smarty_tpl) {?>

<div id="custom-text">
  <?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>

</div>
<?php }} ?>
