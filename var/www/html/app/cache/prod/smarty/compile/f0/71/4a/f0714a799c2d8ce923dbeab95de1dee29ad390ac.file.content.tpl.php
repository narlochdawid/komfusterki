<?php /* Smarty version Smarty-3.1.19, created on 2017-12-03 10:03:21
         compiled from "/var/www/html/admind/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9262893885a23bdd9d070d5-72353279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0714a799c2d8ce923dbeab95de1dee29ad390ac' => 
    array (
      0 => '/var/www/html/admind/themes/default/template/content.tpl',
      1 => 1512163027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9262893885a23bdd9d070d5-72353279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a23bdd9d37a20_95508999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a23bdd9d37a20_95508999')) {function content_5a23bdd9d37a20_95508999($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
