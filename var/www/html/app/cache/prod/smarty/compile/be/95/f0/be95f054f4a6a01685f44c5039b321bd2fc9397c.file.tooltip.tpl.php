<?php /* Smarty version Smarty-3.1.19, created on 2017-12-03 10:03:22
         compiled from "/var/www/html/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1733808265a23bdda57ff67-38026987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be95f054f4a6a01685f44c5039b321bd2fc9397c' => 
    array (
      0 => '/var/www/html/modules/welcome/views/templates/tooltip.tpl',
      1 => 1512163028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1733808265a23bdda57ff67-38026987',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a23bdda58f718_20952398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a23bdda58f718_20952398')) {function content_5a23bdda58f718_20952398($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
