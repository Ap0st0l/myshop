<?php

const USERS_FILE = "users.json";
const POSTS_FILE = "posts.json";

//---------------------------------------------
//форма логина

function getLoginView(){
global $smarty;

$smarty->display('form_login.tpl');
}

//---------------------------------------------
//форма регистрации

function getRegisterView(){
global $smarty;

$smarty->display('form_register.tpl');

}

//---------------------------------------------
//чтение Json файлов

function readJsonFile(string $fileName): array
{
    return json_decode((file_get_contents($fileName) ?? '[]'), true) ?? [];
}

//---------------------------------------------
//запись Json файлов

function writeJsonFile(array $data, string $fileName): void {
	$jsonString = json_encode($data);
	file_put_contents($fileName, $jsonString);
}


//---------------------------------------------
//создание пользователя

function getCreateUser(string $login, string $password, string $gender)
{

	if ((isset($_SESSION['data']['user']['login']))) 
	{
		$referer = ($_SESSION['data']['user']['login']);
	}
	 else
	{
		$referer = 'admin';
	}
	$newUser = [
			'login' => $login, 
			'password' => $password,
			'gender' => $gender,
			'referer' => $referer
	];
			
	$users = readJsonFile(USERS_FILE);
	$users[] = $newUser;
	writeJsonFile($users, USERS_FILE);

	//$_SESSION['data']['user'] = $newUser;
}

//---------------------------------------------
//логин пользователя

function loginUser(string $login, string $password)
{
	$users = readJsonFile(USERS_FILE); 
	foreach ($users as $user) 
	{

		if ($user['login'] === $login && $user['password'] === $password) 
		{
			$_SESSION['data']['user'] = $user;
			header('Location: main');
			exit;
		}
		
	}
			header('Refresh: 5; URL= main');
			echo "Пользователь не найден. Через 5 секунд вас вернет обратно";
			
	
  	
			
}


	


//---------------------------------------------
//Главная страница

function getMainPage()
{
	
	if (isset($_SESSION['data']['user']['login'])) {
	
	$users = readJsonFile(USERS_FILE); 
		
		global $smarty;
		$smarty->assign('users', $users);
		$smarty->assign('gender', 'gender');
		$smarty->display('table.tpl');
		
	}
	else
	{
		getLoginView();
	}
}
		

function sortGender()
{		
		if ($male_gender) 
		{
			$smarty->assign('gender', 'male');
		} 
		elseif ($female_gender)
			 {
			$smarty->assign('gender', 'female');
			}
		else{
			$smarty->assign('gender', 'female');
		}

		/*global $action;
		global $smarty;
		if ($action = 'main?female_gender') {
			$smarty->assign('gender', 'all_gender');
			getMainPage();
		}
		*/
		
			

			
		//$smarty->assign('male_gender', $male_gender);
		//$smarty->assign('female_gender', $female_gender);

		
		

		
}

	









//---------------------------------------------
//выход с сессии

function getlogout()
{
	session_destroy();
	header('Location: main');
}




function getEditUser()
{

	if ((isset($_SESSION['data']['user']['login']))) 
	{
		global $smarty;
		
		$smarty->display('edit_users.tpl');
	}
}

function deleteUser(string $user)
{
	
	$users = readJsonFile(USERS_FILE);
		foreach ($users as $login =>$key)
		{
				
				if (($key['login'] === $user)  && ($_SESSION['data']['user']['login']) ===      ($key['referer'])          )
				{
					unset($users[$login]) ;					
					writeJsonFile($users, USERS_FILE);
					header('Location: main');
				}			

													

				
		}
			
		
			


			
}










