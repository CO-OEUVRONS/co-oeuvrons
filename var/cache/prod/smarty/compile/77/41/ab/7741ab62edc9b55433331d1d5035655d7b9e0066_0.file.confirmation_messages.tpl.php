<?php
/* Smarty version 3.1.33, created on 2018-12-10 11:56:07
  from '/homepages/45/d764159039/htdocs/co-oeuvrons/admin448xpygsq/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0e4647c40885_11907547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7741ab62edc9b55433331d1d5035655d7b9e0066' => 
    array (
      0 => '/homepages/45/d764159039/htdocs/co-oeuvrons/admin448xpygsq/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1544437673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e4647c40885_11907547 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
