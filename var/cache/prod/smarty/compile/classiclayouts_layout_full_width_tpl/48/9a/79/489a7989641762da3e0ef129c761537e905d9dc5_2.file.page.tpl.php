<?php
/* Smarty version 3.1.43, created on 2022-04-05 10:22:26
  from 'C:\WebImpacto\XAMPP\htdocs\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_624bfc425e8af5_14442349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '489a7989641762da3e0ef129c761537e905d9dc5' => 
    array (
      0 => 'C:\\WebImpacto\\XAMPP\\htdocs\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1647359402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624bfc425e8af5_14442349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_781736744624bfc425aa8d9_26304039', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1680859746624bfc425ab5f3_75103889 extends Smarty_Internal_Block
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
class Block_2140688534624bfc425aaf06_75178285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1680859746624bfc425ab5f3_75103889', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_189213477624bfc425e6240_94808277 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_620055489624bfc425e6a44_49874850 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1156117388624bfc425e5c29_11685025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189213477624bfc425e6240_94808277', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_620055489624bfc425e6a44_49874850', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_642280859624bfc425e7b84_15481556 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1726421037624bfc425e7645_33610856 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_642280859624bfc425e7b84_15481556', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_781736744624bfc425aa8d9_26304039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_781736744624bfc425aa8d9_26304039',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2140688534624bfc425aaf06_75178285',
  ),
  'page_title' => 
  array (
    0 => 'Block_1680859746624bfc425ab5f3_75103889',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1156117388624bfc425e5c29_11685025',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_189213477624bfc425e6240_94808277',
  ),
  'page_content' => 
  array (
    0 => 'Block_620055489624bfc425e6a44_49874850',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1726421037624bfc425e7645_33610856',
  ),
  'page_footer' => 
  array (
    0 => 'Block_642280859624bfc425e7b84_15481556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2140688534624bfc425aaf06_75178285', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1156117388624bfc425e5c29_11685025', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1726421037624bfc425e7645_33610856', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
