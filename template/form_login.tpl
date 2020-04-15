{extends file='index.tpl'}
{block name=main}
{include file='header_without_logout.tpl'}

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

		
{/block}