<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 18:13:53
         compiled from "app\view\home\productdetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286495501c8b33e6ab1-31103040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dae565c0ecd946c4f7a2ecd408f37cc9b20b7a2' => 
    array (
      0 => 'app\\view\\home\\productdetails.tpl',
      1 => 1426180430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286495501c8b33e6ab1-31103040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5501c8b346ffa1_73922325',
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501c8b346ffa1_73922325')) {function content_5501c8b346ffa1_73922325($_smarty_tpl) {?><div class="container">
	<h1><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</h1>
	<table class="table">
		<tr>
			<td>Productnaam<td>
			<td><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</td>
		</tr>
		<tr>
			<td>Beschrijving<td>
			<td><?php echo $_smarty_tpl->tpl_vars['product']->value->getBeschrijving();?>
</td>
		</tr>
		<tr>
			<td>Prijs<td>
			<td>&euro; <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
</td>
		</tr>
		<tr>
			<td>Op voorraad<td>
			<td> 
			<?php if ($_smarty_tpl->tpl_vars['product']->value->getVoorraad()>0) {?>
			Ja
			<?php } else { ?>
			Nee
			<?php }?>
			</td>
		</tr>
	</table>
</div><?php }} ?>
