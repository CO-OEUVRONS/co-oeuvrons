<?php
/* Smarty version 3.1.33, created on 2018-12-10 11:56:07
  from '/homepages/45/d764159039/htdocs/co-oeuvrons/admin448xpygsq/themes/new-theme/template/components/layout/employee_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0e4647bf3db2_66077809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91886743b4ab96fbb7439722aedfca0d3a6269f9' => 
    array (
      0 => '/homepages/45/d764159039/htdocs/co-oeuvrons/admin448xpygsq/themes/new-theme/template/components/layout/employee_dropdown.tpl',
      1 => 1544437673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e4647bf3db2_66077809 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['employee']->value)) {?>
<div class="dropdown employee-dropdown">
  <div class="rounded-circle person" data-toggle="dropdown">
    <i class="material-icons">account_circle</i>
  </div>
  <div class="dropdown-menu dropdown-menu-right">
    <div class="text-center employee_avatar">
      <img class="avatar rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" />
      <span><?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->lastname;?>
</span>
    </div>
    <a class="dropdown-item employee-link profile-link" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'),'html','UTF-8' ));?>
&amp;id_employee=<?php echo intval($_smarty_tpl->tpl_vars['employee']->value->id);?>
&amp;updateemployee">
      <i class="material-icons">settings_applications</i>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your profile'),$_smarty_tpl ) );?>

    </a>
    <a class="dropdown-item employee-link" id="header_logout" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['login_link']->value,'html','UTF-8' ));?>
&amp;logout">
      <i class="material-icons">power_settings_new</i>
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out'),$_smarty_tpl ) );?>
</span>
    </a>
  </div>
</div>
<?php }
}
}