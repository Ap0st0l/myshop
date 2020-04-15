<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-14 10:47:42
  from '/app/template/form_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9594ce9cb357_19223744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b0265a25aebb4fdb7b28be2c204d51024bf7d2' => 
    array (
      0 => '/app/template/form_login.tpl',
      1 => 1586861258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_without_logout.tpl' => 1,
  ),
),false)) {
function content_5e9594ce9cb357_19223744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9379675975e9594ce9ca091_51171528', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'index.tpl');
}
/* {block 'main'} */
class Block_9379675975e9594ce9ca091_51171528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_9379675975e9594ce9ca091_51171528',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:header_without_logout.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="forma">
	<h2>Login</h2>
	<div class="form-group">
		<form action= '/login' method='POST'>
		<br>
			<input type=	'text' class="form-control" name='login' placeholder='Login'>
		    <br>
		    <input type=	'password' class="form-control" name='password' placeholder='Password'>
		    <br>
		    <input type=	'submit' class="btn btn-dark" name='Register'>
		    </form>
		    <br>
		    Нет аккаунта? <a href="/register">Регистрация</a> 
		<br>
	
</div>

		
<?php
}
}
/* {/block 'main'} */
}
