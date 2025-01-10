<?php
/* Smarty version 4.3.4, created on 2025-01-09 16:07:04
  from '/home/u737454357/domains/iramirezdevs.com/public_html/04_Tellwireless/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6780488849c8e1_20572512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fcb4677e443c2cbe5b515a3713aa67a2e8613bd' => 
    array (
      0 => '/home/u737454357/domains/iramirezdevs.com/public_html/04_Tellwireless/themes/classic/templates/_partials/helpers.tpl',
      1 => 1736459075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6780488849c8e1_20572512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/u737454357/domains/iramirezdevs.com/public_html/04_Tellwireless/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/6f/cb/46/6fcb4677e443c2cbe5b515a3713aa67a2e8613bd_2.file.helpers.tpl.php',
    'uid' => '6fcb4677e443c2cbe5b515a3713aa67a2e8613bd',
    'call_name' => 'smarty_template_function_renderLogo_518354583678048884983b7_95388681',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_518354583678048884983b7_95388681 */
if (!function_exists('smarty_template_function_renderLogo_518354583678048884983b7_95388681')) {
function smarty_template_function_renderLogo_518354583678048884983b7_95388681(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_518354583678048884983b7_95388681 */
}
