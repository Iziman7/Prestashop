<?php
/* Smarty version 3.1.43, created on 2022-10-20 11:54:09
  from 'C:\OpenServer\domains\presta-home\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63510cb1e824c8_41311121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00634f82da6f3cbdb6c90f9663ad713d0dc719c0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\presta-home\\themes\\classic\\templates\\index.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63510cb1e824c8_41311121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132320639263510cb1e80226_98090301', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_15048933863510cb1e80745_11805605 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_29369577163510cb1e812c7_59502911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_87268011263510cb1e80ea2_80357171 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29369577163510cb1e812c7_59502911', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_132320639263510cb1e80226_98090301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_132320639263510cb1e80226_98090301',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15048933863510cb1e80745_11805605',
  ),
  'page_content' => 
  array (
    0 => 'Block_87268011263510cb1e80ea2_80357171',
  ),
  'hook_home' => 
  array (
    0 => 'Block_29369577163510cb1e812c7_59502911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15048933863510cb1e80745_11805605', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87268011263510cb1e80ea2_80357171', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
