<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-19 18:49:24
         compiled from "app\view\cms\categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:692550b0c242170e8-44329294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3b50ff47ae8547c46628b268d859897603ae7a2' => 
    array (
      0 => 'app\\view\\cms\\categories.tpl',
      1 => 1426787309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '692550b0c242170e8-44329294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'categorie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550b0c24263804_16272739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b0c24263804_16272739')) {function content_550b0c24263804_16272739($_smarty_tpl) {?><div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-2 pull-right">
			<div class="panel panel-default">
				<div class="panel-body text-centered">
					<a class="btn btn-success" href="/cms/create_category"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
					<a class="btn btn-blue" href="/cms/"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Categorie&#235;n</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-10">Naam</th>
						<th class="col-md-2 text-centered">Opties</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['categorie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categorie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->key => $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->_loop = true;
?>
					<tr>
						<td class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['categorie']->value->getNaam();?>
</td>
						<td class="col-md-2 text-centered">
							<a class="btn btn-warning" href="/cms/edit_category?id=<?php echo $_smarty_tpl->tpl_vars['categorie']->value->getId();?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a class="btn btn-danger" href="/cms/delete_category?id=<?php echo $_smarty_tpl->tpl_vars['categorie']->value->getId();?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>
