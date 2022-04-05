<?php
/* Smarty version 3.1.43, created on 2022-04-05 11:24:24
  from 'C:\WebImpacto\XAMPP\htdocs\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_624c0ac8e34d29_24019692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2bd4acf65c199af9049c7d383d0ff3b431d9a3e' => 
    array (
      0 => 'C:\\WebImpacto\\XAMPP\\htdocs\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1647359402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624c0ac8e34d29_24019692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\WebImpacto\\XAMPP\\htdocs\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\b2\\bd\\4a\\b2bd4acf65c199af9049c7d383d0ff3b431d9a3e_2.file.helpers.tpl.php',
    'uid' => 'b2bd4acf65c199af9049c7d383d0ff3b431d9a3e',
    'call_name' => 'smarty_template_function_renderLogo_1312563985624c0ac8e2ccc6_72583727',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1312563985624c0ac8e2ccc6_72583727 */
if (!function_exists('smarty_template_function_renderLogo_1312563985624c0ac8e2ccc6_72583727')) {
function smarty_template_function_renderLogo_1312563985624c0ac8e2ccc6_72583727(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1312563985624c0ac8e2ccc6_72583727 */
}
