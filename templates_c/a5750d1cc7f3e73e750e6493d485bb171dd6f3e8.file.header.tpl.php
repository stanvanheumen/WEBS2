<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-14 21:13:49
         compiled from "app\view\partial\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169635501dc8d3e50a7-09540670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5750d1cc7f3e73e750e6493d485bb171dd6f3e8' => 
    array (
      0 => 'app\\view\\partial\\header.tpl',
      1 => 1426360586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169635501dc8d3e50a7-09540670',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5501dc8d45bb28_10731543',
  'variables' => 
  array (
    'title' => 0,
    'categories' => 0,
    'cat' => 0,
    'games' => 0,
    'game' => 0,
    'computers' => 0,
    'computer' => 0,
    'toys' => 0,
    'toy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501dc8d45bb28_10731543')) {function content_5501dc8d45bb28_10731543($_smarty_tpl) {?><!DOCTYPE html>
<html lang="nl">
	<head>
  		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Stan van Heumen en Brian van den Broek">
		
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/style.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<div class="container">
			<!-- navigation -->
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/home/index"><img src="/assets/images/logo.png" class="img-responsive" width="150" height="30" alt="logo" /></a>
				</div>

				<div class="collapse navbar-collapse js-navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown mega-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Assortiment <span class="glyphicon glyphicon-chevron-down"></span></a>			
							<ul class="dropdown-menu mega-dropdown-menu row">
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Categorie</li>
										<li class="divider"></li>
									  	<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
										<li><a href="/home/assortment?categorie=<?php echo $_smarty_tpl->tpl_vars['cat']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</a></li>
										<?php } ?>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Muziek, Film en Games</li>
										<li class="divider"></li>
										<?php  $_smarty_tpl->tpl_vars['game'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['game']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['games']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['game']->key => $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->_loop = true;
?>
										<li><a href="/home/productdetails?product_id=<?php echo $_smarty_tpl->tpl_vars['game']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value->getProductNaam();?>
</a></li>
										<?php } ?>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Computer en Elektronica</li>
										<li class="divider"></li>
										<?php  $_smarty_tpl->tpl_vars['computer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['computer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['computers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['computer']->key => $_smarty_tpl->tpl_vars['computer']->value) {
$_smarty_tpl->tpl_vars['computer']->_loop = true;
?>
										<li><a href="/home/productdetails?product_id=<?php echo $_smarty_tpl->tpl_vars['computer']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['computer']->value->getProductNaam();?>
</a></li>
										<?php } ?>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Speelgoed</li>
										<li class="divider"></li>
										<?php  $_smarty_tpl->tpl_vars['toy'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['toy']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['toys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['toy']->key => $_smarty_tpl->tpl_vars['toy']->value) {
$_smarty_tpl->tpl_vars['toy']->_loop = true;
?>
										<li><a href="/home/productdetails?product_id=<?php echo $_smarty_tpl->tpl_vars['toy']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['toy']->value->getProductNaam();?>
</a></li>
										<?php } ?>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li><a href="/home/login">Inloggen</a></li>
						<li><a href="/home/register">Registreren</a></li>
					</ul>
				</div>
			</nav>
			<!-- /navigation -->

			<!-- logo -->
			<div class="sm-vpadding">
				<div class="row">
					<div class="col-sm-12">
						<form action="/home/search">
							<div class="input-group">
								<input type="search" class="form-control input-lg"
									name="search-query" id="search-query" placeholder="Zoeken in alle artikelen..." />
								<div class="input-group-btn">
									<button class="btn btn-lg btn-blue" type="submit" id="Search">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /logo -->

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<!-- TODO: Add breadcrumb trail here. -->
			</ol>
			<!-- /breadcrumbs -->
		</div><?php }} ?>