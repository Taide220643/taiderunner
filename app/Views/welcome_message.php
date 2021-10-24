<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TAIDE RUNNER</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link type="text/css" rel="stylesheet" href="<?= base_url('public/css/home.css') ?>">
</head>
<body>
	<?php $session=session(); ?>
	<div class="Navbar" >
		<div class="navbar_img">
			<a href="/">
				<img src="https://scontent.fkdt1-1.fna.fbcdn.net/v/t1.15752-9/246218432_4708057712567208_3836877601114629231_n.png?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeF9ZP-8qBz7mlg6oq_WFaaWDGOKQm4Z2GoMY4pCbhnYauNc3JO85B-WDbaUkQaIV3owz44TB-w_3lLRi31Fzh5m&_nc_ohc=aBAr87y99M4AX88NIpK&_nc_ht=scontent.fkdt1-1.fna&oh=49ffaa4c041d569df1bfc98293879c9b&oe=6196C466"/>
			</a>
		</div> 
		<div class="navbar_menu">
			<?php if($session->get('id_card') != ''){ ?>
				<div class="navbar_menu_text">
					<a href="logout"><h4 >Logout</h4></a>
					<a href="login"><h4><?php echo $session->get('name') ?></h4></a>
				</div>
			<?php }else{?>
				<div class="navbar_menu_text">
					<a href="register"><h4 >Register</h4></a>
					<a href="login"><h4>Login</h4></a>
				</div>
			<?php }?>
		</div>
	</div>
	<div class="text_head">
		<div class="nameweb">
			<h1>T A I D E </h1>
			<h1 id="name02">R U N N E R</h1>
		</div>
		<?php if($session->get('id_card') != ''){ ?>
			<div class="group_button">
				<a href="myrun"><button id="buttonrun">My Running</button></a>
				<a href="regisrun"><button>Run register</button></a>
			</div>
		<?php }else{?>
			<div class="group_button">
				<button>Run register</button>
			</div>
		<?php }?>
	</div>




</body>
</html>
