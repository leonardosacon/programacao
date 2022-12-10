<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Alien - Business Inteligence</title>
    <link rel="icon" type="image/x-icon" href="media/icon/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>

<?php 
$data = array(
    array('members', 'Members List', array(
        array('member.php?id=3', 'John'),
        array('member.php?id=4', 'Alice'),
        array('member.php?id=5', 'Michel'),
		array('member.php?id=6', 'Leonardo'),
    )),
    array('news', 'News details', array(
		array('link.php', 'NomeLink')
	)),
    array('alerts', 'Alerts'),
	array('news', 'News details')
);
?>


	

	<div class="container-fluid" >
		<div class="row flex-nowrap">
			<div id="sidebar" class="col-auto col-md-3 col-xl-2 bg-dark">
			
				<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark align-items-sm-start text-white min-vh-100" style="border-top: 1px solid white;">
					<div href="/" class="d-flex text-white text-decoration-none">
						<div class="flex-row fs-5 d-none d-sm-inline ms-center" style="margin-top:-8px;text-align:center;flex:1;">
							 Menu Principal
						</div>
					</div>
					<ul class="nav nav-pills flex-column mb-auto w-100" id="menusidebar">
						<li class="nav-item">
							<a href="#submenu1" data-bs-toggle="collapse" class="nav-link text-white px-0 align-middle">
								<i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
							<ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menusidebar">
								<li class="w-100">
									<a href="#" class="nav-link text-white px-0"> <span class="d-none d-sm-inline">Item</span> 1 <i class="float-end bi bi-chevron-right"></i></a>
								</li>
								<li>
									<a href="#" class="nav-link text-white px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-white px-0 align-middle">
								<i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
						</li>
						<li class="nav-item">
							<a href="#submenu2" data-bs-toggle="collapse" class="nav-link text-white">
								<i class="bi bi-bootstrap-fill"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span>
							</a>
							<ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menusidebar">
								<li class="w-100">
									<a href="#" class="nav-link text-white px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
								</li>
								<li>
									<a href="#" class="nav-link text-white px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#submenu3" data-bs-toggle="collapse" class="nav-link text-white px-0 align-middle">
								<i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> 
							</a>
							<ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menusidebar">
								<li class="w-100">
									<a href="#" class="nav-link text-white px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
								</li>
								<li>
									<a href="#" class="nav-link text-white px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
								</li>
								<li>
									<a href="#" class="nav-link text-white px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
								</li>
								<li>
									<a href="#" class="nav-link text-white px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-link text-white px-0 align-middle">
								<i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> 
							</a>
						</li>
					</ul>
					<hr>
					<div class="dropdown pb-2 ps-2 pe-2 ms-center">
						<a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
							<span class="d-none d-sm-inline mx-1">loser</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-dark text-small shadow">
							<li><a class="dropdown-item" href="#">New project...</a></li>
							<li><a class="dropdown-item" href="#">Settings</a></li>
							<li><a class="dropdown-item" href="#">Profile</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#">Sign out</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col p-0" style="border-right:1px solid #ddd;border-top:1px solid white;border-bottom:1px solid white;">	
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
					<div class="container-fluid">
						<img src="media/icon/alien.png" alt="Logo" width="20">
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse " id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link text-white" aria-current="page" href="#">Inicial</a>
								</li>
								
								
								<li class="nav-item">
									<a class="nav-link text-white" href="#">Link</a>
								</li>
								<li class="nav-item dropdown pull-right">
									<a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Dropdown
									</a>
									<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="#">Action</a></li>
										<li><a class="dropdown-item" href="#">Another action</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="#"> <i class="bi bi-airplane-fill"></i> Something else here</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
								</li>
							</ul>
							<ul class="navbar-nav ms-auto ">
								<li class="nav-item dropdown text-end">
									<a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="bi bi-person-circle"></i> Exemplo
									</a>
									<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="#">Editar Perfil</a></li>
										<li>
											<a id="navbarDropdown2" class="dropdown-item" href="#">Another action</a>
											<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown2">
												<li><a class="dropdown-item active" href="#"></a></li>
												<li><a class="dropdown-item" href="#">Another action</a></li>
												<li><hr class="dropdown-divider"></li>
												<li><a class="dropdown-item" href="#">Sair</a></li>
											</ul>
										</li>

										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="#">Something else here</a></li>
										
									</ul>
								</li>
							</ul>
						</div>
						
					</div>
				</nav>


				<section class="container-fluid">

					<div class="row">

						<div class="col">
							<nav id='menu'>
							<?php
								echo '<ul>';
								foreach ($data as $item) {
									// $item[0] -> href/url, $item[1] -> label/text, $item[2] -> subitems
									echo '<li>';
									echo '<a href="' . $item[0] . '">' . $item[1] . '</a>';

									if (isset($item[2])) { // if this item has subitems...
										echo '<ul class="sub-menus">';
										foreach ($item[2] as $subitem) {
											// $subitem[0] -> href/url, $subitem[1] -> label/text
											echo '<li><a href="' . $subitem[0] . '">' . $subitem[1] . '</a></li>';
										}
										echo '</ul>';
									}

									echo '</li>';
								}
								echo '</ul>';
								?>
							</nav>
						</div>
					</div>

					<div class="row">
						<div class="col">
							Coluna do elemento
						</div>
					</div>
				</section>

			</div>
		</div>
	</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" href="js/script.js"></script>
</body>
</html>