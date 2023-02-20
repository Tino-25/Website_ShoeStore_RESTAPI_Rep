<header id="header">
	<i class="fas fa-stream showresponsive_headertop"></i>
	<div class="header-top">
		<div class="logo--wrap">
			<div class="header-top_logo">
				<img src="assets/img/logo_fashion.png" alt="Logo cửa hàng">
			</div>
		</div>
		<div class="header-top_search">
			<form action="?act=cuahang" method="get">
				<input type="hidden" name="act" placeholder="Tìm kiếm" value="cuahang">
				<input required type="text" name="search" placeholder="Tìm kiếm">
				<div class="header-top_search__icon">
					<button><i class="fas fa-search"></i></button>
				</div>
			</form>
		</div>
		<div class="header-top_hotline header-top__content--wrap">
			<i class="fas fa-phone-volume header-top--icon"></i>
			<div class="header-top__content_item header-top__hostline">
				<span>Hotline</span>
				<p>0123 456 789</p>
			</div>
		</div>
		<div class="header-top_account header-top__content--wrap">
			<i class="far fa-user header-top--icon"></i>
			<div class="header-top__content_item header-top__account">
				<span>Tài khoản</span>
				<?php if(isset($_SESSION['idDivision']) && isset($_SESSION['userName']) && isset($_SESSION['idUser']) ){ ?>
					<div class="dropdown">
						<button class="btn btn-modify" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php echo $_SESSION['userName'].' '.$_SESSION['idUser'];?>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<?php if($_SESSION['idDivision'] == 2){ ?>
								<a class="dropdown-item" href="admin">Admin</a>
							<?php } ?>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</div>
				<?php }else{ ?>
					<p><a href="./login.php">Đăng nhập</a></p>
				<?php } ?>
			</div>
		</div>
		<div class="header-top__interactive">
				<!-- <div class="header-top__interactive__item">
					<i class="fas fa-heart"></i>
				</div>
				<div class="header-top__interactive__item">
					<i class="fas fa-random"></i>
				</div> -->
				<div class="header-top__interactive__item header-top__interactive__item--cart">
					<a href="?act=cart">
						<i class="fas fa-shopping-cart"></i>
					</a>
					<span class="notice">
						<?php 
						if(!empty($_SESSION['quantity_cart'])){
							echo $_SESSION['quantity_cart'];
						}else{
							echo "0";
						}
						?>
					</span>
				</div>
			</div>
		</div>
		<div class="header-navbar">
			<div class="container header-navbar__wrap">
				<div class="header-navbar__category">
					<i class="fas fa-stream"></i>
					<span>Danh mục sản phẩm</span>
					<ul class="header-navbar__category__hover__list">
						<?php foreach($allCategory as $key=>$value){ ?>
							<li class="header-navbar__category__hover__item">
								<a class="link" href="?act=cuahang&category=<?php echo $value['idCategoryProduct']; ?>">
									<?php echo $value['categoryName']; ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="header-navbar__list-wrap">
					<ul class="header-navbar__list">
						<li class="header-navbar__List__item show-element-btn">
							<i class="fas fa-stream"></i>
							<a>
								Action
								<ul class="show-element-btn__item">
									<li class="header-navbar__List__item">
										<a href="./">
											Trang chủ
										</a>
									</li>
									<li class="header-navbar__List__item">
										<a href="?act=introduction">
											Giới thiệu
										</a>
									</li>
									<li class="header-navbar__List__item header-navbar__List__item__product">
										<a href="?act=cuahang">
											Sản phẩm
										</a>

									</li>
									<li class="header-navbar__List__item">
										<a href="#">
											Tin tức
										</a>
									</li>
									<li class="header-navbar__List__item">
										<a href="#">
											Tuyển dụng
										</a>
									</li>
									<li class="header-navbar__List__item">
										<a href="#">
											Liên hệ
										</a>
									</li>
								</ul>
							</a>
						</li>
						<li class="header-navbar__List__item">
							<a href="./">
								Trang chủ
							</a>
						</li>
						<li class="header-navbar__List__item">
							<a href="?act=introduction">
								Giới thiệu
							</a>
						</li>
						<li class="header-navbar__List__item header-navbar__List__item__product">
							<a href="?act=cuahang">
								Sản phẩm
							</a>
						</li>
						<li class="header-navbar__List__item">
							<a href="#">
								Tin tức
							</a>
						</li>
						<li class="header-navbar__List__item">
							<a href="#">
								Tuyển dụng
							</a>
						</li>
						<li class="header-navbar__List__item">
							<a href="#">
								Liên hệ
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</header>



	<div class="responsive-header">
		h
	</div>