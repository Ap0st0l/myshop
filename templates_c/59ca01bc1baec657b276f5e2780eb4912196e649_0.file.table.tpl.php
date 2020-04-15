<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-15 14:55:37
  from '/app/template/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e972069cfc170_20631202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59ca01bc1baec657b276f5e2780eb4912196e649' => 
    array (
      0 => '/app/template/table.tpl',
      1 => 1586962464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5e972069cfc170_20631202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5706087585e972069cf8239_10038971', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'index.tpl');
}
/* {block 'main'} */
class Block_5706087585e972069cf8239_10038971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_5706087585e972069cf8239_10038971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div class="text">Зарегистрированные пользователи: </div >
<br>

<button class="btn btn-dark"><a style="color: white" href='/edit' >Добавить / удалить пользователя</a></button><br><br>
<form action= '/table' method='GET'>

<button type="submit" name="all_gender" class="btn btn-secondary">All</button>
<button type="submit"  name="male_gender" class="btn btn-secondary">Male</button>
<button type="submit" name="female_gender" class="btn btn-secondary">Female</button>




<br><br>
<div class="overflow-hidden" style="height: 230px; width: 500px; overflow: auto" >
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th>Login</th>
      <th>Gender</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
      <td>
        
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value['login'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 
        
      </td>
      <td>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value['gender'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
 
      </td>
      </tr>
      
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      
  </tbody>
</table>
</div>













  
<?php
}
}
/* {/block 'main'} */
}
