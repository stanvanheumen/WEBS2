<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-20 14:03:13
         compiled from "app\view\home\account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5451550b0e18114ae0-56077541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e830cb637888427fdab3b426f6682271e01c640' => 
    array (
      0 => 'app\\view\\home\\account.tpl',
      1 => 1426856591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5451550b0e18114ae0-56077541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550b0e1815ce50_04769865',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b0e1815ce50_04769865')) {function content_550b0e1815ce50_04769865($_smarty_tpl) {?><div class="container">
	<table id="cart" class="table table-hover table-condensed">
		<thead>
			<tr>
				<th style="width:50%">Product</th>
				<th style="width:10%">Prijs</th>
				<th style="width:8%">Hoeveelheid</th>
				<th style="width:22%" class="text-center">Subtotaal</th>
				<th style="width:10%"></th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
			<tr>
				<td data-th="Product">
					<div class="row">
						<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
						<div class="col-sm-10">
							<h4 class="nomargin"><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</h4>
							<p><?php echo $_smarty_tpl->tpl_vars['product']->value->getBeschrijvingKort();?>
</p>
						</div>
					</div>
				</td>
				<td data-th="Price">&euro; <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
</td>
				<td data-th="Quantity">
					<input type="number" min="1" id="input<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" onchange="update(<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
, <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
)" class="form-control text-center" value="1">
				</td>
				<td data-th="Subtotal" id="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" class="text-center">&euro; <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
</td>
				<td class="actions">
					<a href="/home/removefromcart?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a>								
				</td>
			</tr>
			<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<td><a href="/home/index" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i>Ga door met winkelen</a></td>
				<td colspan="2" class="hidden-xs"></td>
				<td class="hidden-xs text-center"><strong>Totaal (MOET NOG)</strong></td>
				<td><a href="#" class="btn btn-success btn-block">Betalen <i class="glyphicon glyphicon-chevron-right"></i></a></td>
			</tr>
		</tfoot>
	</table>
</div>

<?php echo '<script'; ?>
>
function update(id, price) {
	document.getElementById(id).innerHTML = "€ " + (price * document.getElementById("input" + id).value);
}
<?php echo '</script'; ?>
><?php }} ?>