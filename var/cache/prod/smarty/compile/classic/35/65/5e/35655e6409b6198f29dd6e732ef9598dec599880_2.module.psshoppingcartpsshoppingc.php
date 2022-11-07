<?php
/* Smarty version 3.1.43, created on 2022-11-07 11:26:18
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6368cf3ae529d2_25703310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1667812928,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' => 1,
  ),
),false)) {
function content_6368cf3ae529d2_25703310 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_cart">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="header">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        <a rel="nofollow" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping cart link containing %nbProducts% product(s)','sprintf'=>array('%nbProducts%'=>$_smarty_tpl->tpl_vars['cart']->value['products_count']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
        <!-- <i class="material-icons shopping-cart" aria-hidden="true">shopping_cart</i> -->
        <div>
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.6 12H30.4C31.2867 12 31.3333 12.7958 31.3333 13.3333L32 15.03C32 15.5675 31.2867 16 30.4 16H1.6C0.713333 16 0 15.5675 0 15.03L0.666667 13.3333C0.666667 12.7958 0.713333 12 1.6 12Z" fill="#F6871F"/>
<path d="M9.51459 24.2249L10.2394 27.6324C10.3833 28.3026 11.389 28.0867 11.245 27.4159L10.5202 24.0083C10.3127 23.2347 9.35138 23.6144 9.51459 24.2249Z" fill="black"/>
<path d="M15.4481 23.982V27.6402C15.4481 28.3258 16.4762 28.3258 16.4762 27.6402V23.982C16.4762 23.1846 15.4481 23.236 15.4481 23.982Z" fill="black"/>
<path d="M22.8273 24.2249L22.1025 27.6324C21.9586 28.3026 20.953 28.0867 21.0969 27.4159L21.8217 24.0083C22.0293 23.2347 22.9906 23.6144 22.8273 24.2249Z" fill="black"/>
<path d="M16.2333 1.84485H18.4823C19.3369 1.84485 20.1414 2.54075 20.0245 3.38702L17.7915 19.5316C17.6746 20.3779 17.104 21.0738 16.2494 21.0738H14.0004C13.1458 21.0738 12.3413 20.3779 12.4582 19.5316L14.6911 3.38702C14.8081 2.54075 15.3787 1.84485 16.2333 1.84485Z" fill="#90ADFF"/>
<path d="M16.2584 1.33331C15.0953 1.33331 14.3602 2.28689 14.206 3.32528L13.0314 11.7796H2.09679C0.964581 11.7796 0.0373535 12.7068 0.0373535 13.839V17.1193C0.0373535 18.2515 0.964581 19.1801 2.09679 19.1801H12.011L11.9679 19.4949C11.7829 20.7319 12.9331 21.6238 14.0242 21.6238H16.2777C17.4266 21.6238 18.233 20.6708 18.33 19.6356C18.6436 17.3603 18.9578 15.085 19.2714 12.8096H29.8995C30.4791 12.8096 30.9295 13.2601 30.9295 13.8397V17.12C30.9295 17.6996 30.4791 18.15 29.8995 18.15H18.5607C17.7395 18.15 17.8905 19.1807 18.3724 19.1807H27.3864L25.5866 28.5783C25.4086 29.4303 24.482 30.1841 23.6113 30.1841H8.38369C7.51365 30.1841 6.58578 29.4297 6.40779 28.5783L4.83414 20.3637C4.65486 19.4422 3.65502 19.698 3.7861 20.3637L5.39831 28.7794C5.39831 28.7833 5.3996 28.7858 5.40024 28.7897C5.68811 30.1712 6.97261 31.2154 8.38369 31.2154H23.6113C25.023 31.2154 26.3056 30.1712 26.5941 28.7897C26.5948 28.7858 26.5954 28.7833 26.596 28.7794L28.4344 19.1807H29.8995C31.0317 19.1807 31.9589 18.2522 31.9589 17.12V13.8397C31.9589 12.7074 31.0317 11.7802 29.8995 11.7802H19.4134L20.5687 3.46665C20.7506 2.18215 19.7437 1.33396 18.5125 1.33396H16.259L16.2584 1.33331ZM16.2584 2.364H18.5119C19.2264 2.364 19.6094 2.77331 19.5458 3.32528L17.3116 19.4943C17.1914 20.1799 16.7949 20.5937 16.2777 20.5937H14.0242C13.3469 20.5937 12.9408 20.1651 12.9896 19.6356L15.2251 3.466C15.3446 2.77845 15.7238 2.364 16.259 2.364H16.2584ZM2.09679 12.809H12.89L12.1536 18.1487H2.09679C1.51719 18.1487 1.06675 17.6983 1.06675 17.1187V13.8384C1.06675 13.2588 1.51719 12.8083 2.09679 12.8083V12.809Z" fill="black"/>
</svg>

        </div>
        <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        <span class="cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        </a>
      <?php }?>
    </div>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
            <div class="ht_cart cart-hover-content">
                <div class="upper-cart">
                    <div>Votre panier</div>
                    <div>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
 articles)</div>
                </div>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        <li class="cart-wishlist-item">
                            <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <div class="cart-summary">
                    <div class="cart-subtotals">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
$_smarty_tpl->tpl_vars['subtotal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
$_smarty_tpl->tpl_vars['subtotal']->do_else = false;
?>
                            <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
                                <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
                                <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="cart-total">
                        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                </div>
                <div class="cart-wishlist-action">
                    <a class="cart-wishlist-viewcart" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">Afficher le panier</a>
                </div>
            </div> 
        <?php } else { ?>
            <div class="ht_cart cart-hover-content">
                <p class="no-item">There is no itme in your cart.</p>
            </div>
  <?php }?>
</div>
<?php }
}
