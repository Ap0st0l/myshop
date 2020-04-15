<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-14 11:27:18
  from '/app/template/form_register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e959e16f141d3_11798162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ddb56d442fa43c3cf0d5c0c0eb5a82a2f951e7c' => 
    array (
      0 => '/app/template/form_register.tpl',
      1 => 1586863636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_without_logout.tpl' => 1,
  ),
),false)) {
function content_5e959e16f141d3_11798162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17756312285e959e16f0f670_38754285', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'index.tpl');
}
/* {block 'main'} */
class Block_17756312285e959e16f0f670_38754285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_17756312285e959e16f0f670_38754285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:header_without_logout.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="forma">
	<h2>Register</h2>
	<div class="form-group">
		<form action= '/register' method='POST'>
		<br>
			<input type=	'text' class="form-control" name='login' placeholder='Login'>
		    <br>
		    <input type=	'password' class="form-control" name='password' placeholder='Password'>
		    </div><br>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
			  <label class="form-check-label" for="inlineRadio1">Male</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
			  <label class="form-check-label" for="inlineRadio2">Female</label>
			</div><br>

		    <input type=	'submit' class="btn btn-dark" name='Register'>
		</form>
		<br><br>
		Есть аккаунт? <a href="/login">Вход</a> 
</div>

		
<?php
}
}
/* {/block 'main'} */
}
