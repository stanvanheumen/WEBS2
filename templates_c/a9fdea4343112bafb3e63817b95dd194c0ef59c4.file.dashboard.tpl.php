<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-15 02:59:28
         compiled from "app\view\cms\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150135504d1733123b6-60820039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9fdea4343112bafb3e63817b95dd194c0ef59c4' => 
    array (
      0 => 'app\\view\\cms\\dashboard.tpl',
      1 => 1426384766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150135504d1733123b6-60820039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5504d173336644_46112846',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5504d173336644_46112846')) {function content_5504d173336644_46112846($_smarty_tpl) {?><div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-2 pull-right">
			<div class="panel panel-default">
				<div class="panel-body text-centered">
					<a class="btn btn-success" href="/cms/create"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
					<a href="/cms/index" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-off" aria-hidden="true"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Producten</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-8">Naam</th>
						<th class="col-md-2">Prijs</th>
						<th class="col-md-2 text-centered">Opties</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
					<tr>
						<td class="col-md-8"><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</td>
						<td class="col-md-2">&euro; <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
</td>
						<td class="col-md-2 text-centered">
							<a class="btn btn-warning" href="/cms/edit?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a class="btn btn-danger" href="/cms/remove?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>