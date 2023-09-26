<?php
session_start();
require_once 'config/config.php';
$token = bin2hex(openssl_random_pseudo_bytes(16));

// If User has already logged in, redirect to dashboard page.
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === TRUE)
{
	header('Location:index.php');
}

// If user has previously selected "remember me option": 
if (isset($_COOKIE['series_id']) && isset($_COOKIE['remember_token']))
{
	// Get user credentials from cookies.
	$series_id = filter_var($_COOKIE['series_id']);
	$remember_token = filter_var($_COOKIE['remember_token']);
	$db = getDbInstance();
	// Get user By series ID: 
	$db->where('series_id', $series_id);
	$row = $db->getOne('admin_accounts');

	if ($db->count >= 1)
	{
		// User found. verify remember token
		if (password_verify($remember_token, $row['remember_token']))
        	{
			// Verify if expiry time is modified. 
			$expires = strtotime($row['expires']);

			if (strtotime(date()) > $expires)
			{
				// Remember Cookie has expired. 
				clearAuthCookie();
				header('Location:login.php');
				exit;
			}

			$_SESSION['user_logged_in'] = TRUE;
			$_SESSION['admin_type'] = $row['admin_type'];
			header('Location:index.php');
			exit;
		}
		else
		{
			clearAuthCookie();
			header('Location:login.php');
			exit;
		}
	}
	else
	{
		clearAuthCookie();
		header('Location:login.php');
		exit;
	}
}

include BASE_PATH.'/includes/header.php';
?>
<div id="page" class="col-md-4 col-md-offset-4">
	<form class="form loginform" method="POST" action="authenticate.php">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">
				<div class="text-center">
					<img class="img-fluid" style="width:200px" src="./assets/img/logo-maltez.png" alt="" srcset="">
				</div></div>
			<div class="panel-body">
				
				<div class="form-group">
					<i class="fa fa-user" aria-hidden="true"></i>
					<label class="control-label">Usuário</label>
					<input type="text" name="username" class="form-control" required="required">
				</div>
				<div class="form-group">
					<i class="fa fa-key" aria-hidden="true"></i>
					<label class="control-label">Senha</label>
					<input type="password" name="passwd" class="form-control" required="required">
				</div>
				<div class="checkbox">
					<label>
						<input name="remember" type="checkbox" value="1">Lembrar-me
					</label>
				</div>
				<?php if (isset($_SESSION['login_failure'])): ?>
				<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php
					echo $_SESSION['login_failure'];
					unset($_SESSION['login_failure']);
					?>
				</div>
				<?php endif; ?>
				<div class="text-center">
					<button type="submit" class=" btn btn-success loginField">Entrar</button>
				</div>
			</div>
		</div>
	</form>
	<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright :
    <a class="text-reset fw-bold" href="#">KS2 Soluções Empresariais e Tecnologia</a>
     <p class="text-reset fw-bold">Versão - 1.0.0.0</p>
  </div>
</div>
