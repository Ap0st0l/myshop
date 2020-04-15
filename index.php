<?php
require_once "libs/Smarty.class.php";
require_once "function.php";
require_once "session.php";

$smarty = new Smarty();
$smarty->setTemplateDir('template');




$action = ltrim($_SERVER['REQUEST_URI'], '/') ?? 'main';




switch ($action) {

	
	//-----------------------------------------------------------------------------
	// Логин

	case 'login':
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {
			getLoginView();
		} 
		else
		{
			$login = $_POST['login'];
			$password = $_POST['password'];
			loginUser($login, $password);
		}

	
		
	break;


	//-----------------------------------------------------------------------------
	// Регистрация 

	case 'register':

		if ($_SERVER['REQUEST_METHOD'] === 'GET') 
		{
			getRegisterView();
		}
		 
		else
		{	
			$login = $_POST['login'];
			$password = $_POST['password'];
			$gender = $_POST['gender'];

			getCreateUser($login, $password, $gender);
			header('Location: main');

		}
	break;

	//-----------------------------------------------------------------------------
	// Главная страница

	case 'main':
		
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {															//Показываем форму логина
			getMainPage();
		} 
		elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && (! (isset($_SESSION['data']['user']['login']))))	//Логиним пользователя
		{
			$login = $_POST['login'];
			$password = $_POST['password'];
			loginUser($login, $password);
		}

		
		

		break;
	//-----------------------------------------------------------------------------
	// Выходим с сессии


	case 'logout':
		getlogout();
	break;




	case 'edit':

		if ($_SERVER['REQUEST_METHOD'] === 'GET') 
		{
			getEditUser();
		}
		 
		elseif ($_POST['login']['password']['gender'])
		{	
			$login = $_POST['login'];
			$password = $_POST['password'];
			$gender = $_POST['gender'];

			getCreateUser($login, $password, $gender);
			header('Location: main');
		}

		elseif ($_POST['user'])
		{	
			$user = $_POST['user'];
			
			
			deleteUser($user);
			
		}
	break;	

}











