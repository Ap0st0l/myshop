<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-14 10:05:17
  from '/app/template/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e958add26c4d6_79737174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '425f30ede3376736dc4154db71dc9af2b9fd84b3' => 
    array (
      0 => '/app/template/form.tpl',
      1 => 1586858686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_without_logout.tpl' => 1,
  ),
),false)) {
function content_5e958add26c4d6_79737174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19159353915e958add1ef7f2_37497318', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'index.tpl');
}
/* {block 'main'} */
class Block_19159353915e958add1ef7f2_37497318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_19159353915e958add1ef7f2_37497318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:header_without_logout.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="forma">
	<h2><?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h2>
	<div class="form-group">
		<form action= '/<?php ob_start();
echo $_smarty_tpl->tpl_vars['action']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
' method='POST'>
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
		<br>
	
</div>

		
<?php
}
}
/* {/block 'main'} */
}
