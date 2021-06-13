<?php  
session_start();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo "путь: $uri";
$segments = explode('/', trim($uri, '/'));

$method = $_SERVER['REQUEST_METHOD'];

if (!empty($segments[1])) 
{
	echo "s1";
	if (!empty($segments[2]))
	{
		echo "s2";
		if ($segments[2] == 'cats')
		{
			$file = 'pages/cats.php';
		}
		elseif ($segments[2]== 'prof') {
			echo "s3";
			echo $_SESSION['status'];
			
			if (!empty($_SESSION['auth']) and $_SESSION['status'] == '2')
			{
				echo "s4";
				if (!empty($segments[3]))
				{
					echo "s5";
					echo $segments[3]; 
					if ($segments[3]== 'edit')
					{
						$file = 'pages/prof_admin_edit.php';
					}
					elseif ($segments[3] == 'interviews')
					{
						$file = 'pages/prof_admin_interviews.php';
						echo "s6";
					}
					elseif ($segments[3] == 'cats')
					{
						$file = 'pages/prof_admin_cats.php';
					}
					else
					{
						$file = 'pages/error404.php';
					}
				}
				else
				{
					$file = 'pages/prof_admin.php';
				}
			}
			elseif (!empty($_SESSION['auth']) and $_SESSION['status'] == 'user')
			{
				if (!empty($segments[3]))
				{
					if ($segments[3]== 'edit')
					{
						$file = 'pages/prof_admin_edit.php';
					}
					elseif ($segments[3] == 'interviews')
					{
						$file = 'pages/prof_admin_interviews.php';
					}
					elseif ($segments[3] == 'cats')
					{
						$file = 'pages/prof_admin_cats.php';
					}
					else
					{
						$file = 'pages/error404.php';
					}
				}
				else
				{
					$file = 'pages/prof_admin.php';
				}
			}
			else	
			{
				$file = 'pages/error404.php';
			}
		}
		else
		{
			$file = 'pages/' . $segments[2] . '.php';
		}
	}
	else {
		$file = 'pages/error404.php';
	} 
}
elseif ($segments[0] == 'tomasina')
{
	$file = 'pages/main.php';
}
else
{
	$file = 'pages/error404.php';
}
require $file;
?>