<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-15 00:21:27
  from '/app/template/edit_users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e965387b802b4_93845719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '293a54b2ab1ffef2fa1dc3c0d142e218d5494c97' => 
    array (
      0 => '/app/template/edit_users.tpl',
      1 => 1586910086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5e965387b802b4_93845719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8088838025e965387b7c277_77518092', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'index.tpl');
}
/* {block 'main'} */
class Block_8088838025e965387b7c277_77518092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_8088838025e965387b7c277_77518092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br><br>



<div class="table2">
Зарегистрировать нового пользователя:  
  <div class="form-group">
    <form action= '/edit' method='POST'>
    <br>
      <input type=  'text' class="form-control" name='login' placeholder='Login'>
        <br>
        <input type=  'password' class="form-control" name='password' placeholder='Password'>
        </div><br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
        <label class="form-check-label" for="inlineRadio1">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
        <label class="form-check-label" for="inlineRadio2">Female</label>
      </div><br>

       

        <input type=  'submit' class="btn btn-dark" name='Register'>
    </form>
    <br>
  </div>

  





<br><br><br><br>








  <div class="table2">
  Удалить пользователя
<form action= '/edit' method='POST'>
	<input type=  'text' class="form-control" name='user' placeholder='Login'>
        <br>
        <input type=  'submit' class="btn btn-dark" name='Register'>
    <br>
    </form>

  </div>
	

  <?php
}
}
/* {/block 'main'} */
}
