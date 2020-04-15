{extends file='index.tpl'}
{block name=main}
{include file='header.tpl'}
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
	

  {/block}