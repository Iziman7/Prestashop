<?php
/* Smarty version 3.1.43, created on 2022-10-20 11:54:10
  from 'C:\OpenServer\domains\presta-home\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63510cb258b736_37436421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '660b8a72460b0d8c3259f92a94ead55b99525c3c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\presta-home\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63510cb258b736_37436421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\OpenServer\\domains\\presta-home\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\66\\0b\\8a\\660b8a72460b0d8c3259f92a94ead55b99525c3c_2.file.helpers.tpl.php',
    'uid' => '660b8a72460b0d8c3259f92a94ead55b99525c3c',
    'call_name' => 'smarty_template_function_renderLogo_25187916563510cb2580966_93445057',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_25187916563510cb2580966_93445057 */
if (!function_exists('smarty_template_function_renderLogo_25187916563510cb2580966_93445057')) {
function smarty_template_function_renderLogo_25187916563510cb2580966_93445057(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_25187916563510cb2580966_93445057 */
}
