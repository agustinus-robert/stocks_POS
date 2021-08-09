<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="html, css bootstrap, mega menu, navbar, large dropdown, menu CSS examples" />
	<meta name="description" content="Bootstrap 5 navbar megamenu examples with simple css demo code" />  

	<title>Demo - Bootstrap navbar megamenu dropdown. html code example </title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style type="text/css">
.navbar .megamenu{ padding: 1rem; }
/* ============ desktop view ============ */
@media all and (min-width: 992px) {
	
	.navbar .has-megamenu{position:static!important;}
	.navbar .megamenu{left:0; right:0; width:100%; margin-top:0;  }
	
}	
/* ============ desktop view .end// ============ */


/* ============ mobile view ============ */
@media(max-width: 991px){
	.navbar.fixed-top .navbar-collapse, .navbar.sticky-top .navbar-collapse{
		overflow-y: auto;
	    max-height: 90vh;
	    margin-top:10px;
	}
}
/* ============ mobile view .end// ============ */
</style>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element){
        	element.addEventListener('click', function (e) {
        		e.stopPropagation();
        	});
        })
    }); 
	// DOMContentLoaded  end
</script>

 @livewireStyles
</head>
<body>
	<div class="container">

<!-- ============= COMPONENT ============== -->
<nav class="navbar navbar-expand-lg navbar-dark bg-gradient" style='background-color:#3474b5!important;'>
<div class="container-fluid">
	<a class="navbar-brand" href="#">Brand</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="main_nav">
		<ul class="navbar-nav">
			<li class="nav-item dropdown has-megamenu">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Produk  </a>
				<div class="dropdown-menu megamenu" role="menu">
					<div class="row g-3">
						<div class="col-lg-4 col-6">
							<div class="col-megamenu">
								<h6 class="title">Transaksi</h6>
								<ul class="list-unstyled">
                                                                    <li><a href="#">Stock Adjustment</a></li>
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-4 col-6">
							<div class="col-megamenu">
								<h6 class="title">Reporting</h6>
								<ul class="list-unstyled">
                                                                        <li><a href="#">Daftar Produk</a></li>
									<li><a href="#">Stock Report Adjustment</a></li>
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-4 col-6">
							<div class="col-megamenu">
								<h6 class="title">Master Data</h6>
								<ul class="list-unstyled">
									<li><a href="{{url('product/add')}}">Tambah Produk</a></li>
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div>    
					</div><!-- end row --> 
				</div> <!-- dropdown-mega-menu.// -->
			</li>
			<li class="nav-item"><a class="nav-link" href="#"> Pembelian </a></li>
			<li class="nav-item dropdown has-megamenu">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Penjualan  </a>
				<div class="dropdown-menu megamenu" role="menu">
					<div class="row g-3">
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title">Title Menu One</h6>
								<ul class="list-unstyled">
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title">Title Menu Two</h6>
								<ul class="list-unstyled">
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title">Title Menu Three</h6>
								<ul class="list-unstyled">
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div>    
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title">Title Menu Four</h6>
								<ul class="list-unstyled">
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
									<li><a href="#">Custom Menu</a></li>
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
					</div><!-- end row --> 
				</div> <!-- dropdown-mega-menu.// -->
			</li>
		</ul>
		<ul class="navbar-nav ms-auto">
			<li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
			<li class="nav-item dropdown">
				<a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dropdown right </a>
			    <ul class="dropdown-menu dropdown-menu-end">
				  <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
				  <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
			    </ul>
			</li>
		</ul>
	</div> <!-- navbar-collapse.// -->
</div> <!-- container-fluid.// -->
</nav>
<!-- ============= COMPONENT END// ============== -->

		<section class="section-content py-5">

		
		</section>

	