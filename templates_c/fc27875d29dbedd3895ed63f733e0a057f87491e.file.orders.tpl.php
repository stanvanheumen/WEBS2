<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-25 13:29:14
         compiled from "app\view\cms\orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1626555127b1d954023-03338267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc27875d29dbedd3895ed63f733e0a057f87491e' => 
    array (
      0 => 'app\\view\\cms\\orders.tpl',
      1 => 1427286553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1626555127b1d954023-03338267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55127b1d9a26d6_53501664',
  'variables' => 
  array (
    'orders' => 0,
    'order' => 0,
    'accounts' => 0,
    'account' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55127b1d9a26d6_53501664')) {function content_55127b1d9a26d6_53501664($_smarty_tpl) {?><div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-2 pull-right">
			<div class="panel panel-default">
				<div class="panel-body text-centered">
					<a class="btn btn-blue" href="/cms/"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Bestellingen</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-2">Id</th>
						<th class="col-md-8">E-mail</th>
						<th class="col-md-2">Opties</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
					<tr>
						<td class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
</td>
						<?php  $_smarty_tpl->tpl_vars['account'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['account']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['account']->key => $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['account']->value->getId()==$_smarty_tpl->tpl_vars['order']->value->getAccountId()) {?>
						<td class="col-md-8">
							<?php echo $_smarty_tpl->tpl_vars['account']->value->getGebruikersnaam();?>
	
						</td>
						<?php }?>
						<?php } ?>
						<td class="col-md-2 text-centered">
							<a href="/cms/read_bestelling?id=<?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
" class="btn btn-primary"><span class="
glyphicon glyphicon-sunglasses"></span></a>
							<a class="btn btn-danger" href="/cms/delete_bestelling?id=<?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>