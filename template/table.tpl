{extends file='index.tpl'}
{block name=main}
{include file='header.tpl'}




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
      {foreach $users as $user}
      <td>
        
        {{$user['login']}} 
        
      </td>
      <td>
        {{$user['gender']}} 
      </td>
      </tr>
      
      {/foreach}
      
  </tbody>
</table>
</div>













  
{/block}