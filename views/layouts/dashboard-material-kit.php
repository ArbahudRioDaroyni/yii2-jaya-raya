<?php

use yii\helpers\Html;

app\assets\DashboardMaterialKitAsset::register($this);
app\assets\OnlineAsset::register($this);
app\assets\StyleAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' />
	<?php $this->registerCsrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body class="">
<?php $this->beginBody() ?>

<div class="wrapper">
	<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
		<!--
			Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

			Tip 2: you can also add an image using data-image tag
	-->
		<div class="logo">
			<a href="http://www.creative-tim.com" class="simple-text logo-normal">
				Creative Tim
			</a>
		</div>
		<div class="sidebar-wrapper">
			<ul class="nav">
				<li class="nav-item active  ">
					<a class="nav-link" href="./dashboard.html">
						<i class="material-icons">dashboard</i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="./user.html">
						<i class="material-icons">person</i>
						<p>User Profile</p>
					</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="./tables.html">
						<i class="material-icons">content_paste</i>
						<p>Table List</p>
					</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="./typography.html">
						<i class="material-icons">library_books</i>
						<p>Typography</p>
					</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="./icons.html">
						<i class="material-icons">bubble_chart</i>
						<p>Icons</p>
					</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="./map.html">
						<i class="material-icons">location_ons</i>
						<p>Maps</p>
					</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="./notifications.html">
						<i class="material-icons">notifications</i>
						<p>Notifications</p>
					</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="./rtl.html">
						<i class="material-icons">language</i>
						<p>RTL Support</p>
					</a>
				</li>
				<li class="nav-item active-pro ">
					<a class="nav-link" href="./upgrade.html">
						<i class="material-icons">unarchive</i>
						<p>Upgrade to PRO</p>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- end sidebar -->
	<div class="main-panel">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
			<div class="container-fluid">
				<div class="navbar-wrapper">
					<a class="navbar-brand" href="#pablo">Dashboard</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="navbar-toggler-icon icon-bar"></span>
					<span class="navbar-toggler-icon icon-bar"></span>
					<span class="navbar-toggler-icon icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end">
					<form class="navbar-form">
						<div class="input-group no-border">
							<input type="text" value="" class="form-control" placeholder="Search...">
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i>
								<div class="ripple-container"></div>
							</button>
						</div>
					</form>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#pablo">
								<i class="material-icons">dashboard</i>
								<p class="d-lg-none d-md-block">
									Stats
								</p>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="material-icons">notifications</i>
								<span class="notification">5</span>
								<p class="d-lg-none d-md-block">
									Some Actions
								</p>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Mike John responded to your email</a>
								<a class="dropdown-item" href="#">You have 5 new tasks</a>
								<a class="dropdown-item" href="#">You're now friend with Andrew</a>
								<a class="dropdown-item" href="#">Another Notification</a>
								<a class="dropdown-item" href="#">Another One</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="material-icons">person</i>
								<p class="d-lg-none d-md-block">
									Account
								</p>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
								<a class="dropdown-item" href="#">Profile</a>
								<a class="dropdown-item" href="#">Settings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navbar -->

		<div id="content" class="content">
			<div class="container-fluid">
				<?= $content ?>
			</div>
		</div>
		<footer class="footer">
			<div class="container-fluid">
				<nav class="float-left">
					<ul>
						<?php for ($i=0; $i < 5; $i++) { ?>
							<li>
								<a href="https://www.creative-tim.com">
									Menu <?= $i ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</nav>
				<div class="copyright float-right">
					&copy; PT. JAYA RAYA INDONESIA <?= date('Y') ?>
				</div>
			</div>
		</footer>
	</div>
	<!-- End main panel -->
</div>
<!-- End wrapper -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
