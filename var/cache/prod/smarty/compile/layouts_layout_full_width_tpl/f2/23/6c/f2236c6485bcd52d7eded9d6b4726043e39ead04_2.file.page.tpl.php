<?php
/* Smarty version 3.1.33, created on 2018-12-02 13:57:15
  from 'C:\xampp\htdocs\co-oeuvrons\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c03d6ab14c4b2_31763526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2236c6485bcd52d7eded9d6b4726043e39ead04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\co-oeuvrons\\themes\\classic\\templates\\page.tpl',
      1 => 1543754503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c03d6ab14c4b2_31763526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7843768385c03d6ab12b9f5_50608707', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_19823476595c03d6ab131f06_69181653 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_8932980635c03d6ab12e247_71108003 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19823476595c03d6ab131f06_69181653', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_5183284885c03d6ab142b10_19461781 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11970612935c03d6ab144468_12542543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11916839965c03d6ab1418b6_36488017 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5183284885c03d6ab142b10_19461781', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11970612935c03d6ab144468_12542543', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_8605920835c03d6ab148640_60262027 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_17259048525c03d6ab147544_66493567 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8605920835c03d6ab148640_60262027', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_7843768385c03d6ab12b9f5_50608707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7843768385c03d6ab12b9f5_50608707',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8932980635c03d6ab12e247_71108003',
  ),
  'page_title' => 
  array (
    0 => 'Block_19823476595c03d6ab131f06_69181653',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11916839965c03d6ab1418b6_36488017',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5183284885c03d6ab142b10_19461781',
  ),
  'page_content' => 
  array (
    0 => 'Block_11970612935c03d6ab144468_12542543',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_17259048525c03d6ab147544_66493567',
  ),
  'page_footer' => 
  array (
    0 => 'Block_8605920835c03d6ab148640_60262027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8932980635c03d6ab12e247_71108003', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11916839965c03d6ab1418b6_36488017', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17259048525c03d6ab147544_66493567', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
