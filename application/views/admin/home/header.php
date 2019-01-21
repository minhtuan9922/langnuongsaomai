<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
	<!-- Brand -->
	<a class="navbar-brand" href="#">Trang quản trị</a>

	<!-- Toggler/collapsibe Button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

	<?php
	$user = $this->madmin->get_user($_SESSION['admin_id']);
	?>
	<!-- Navbar links -->
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> <?=$user['ten'] ?></a>
				<div class="dropdown-menu bg-dark menu-drop" aria-labelledby="navbarDropdown">
					<a class="dropdown-item bg-dark text-light" href="<?=base_url('admin/user/chinhsua/'.$user['id']) ?>">Thông tin</a>
					<a class="dropdown-item bg-dark text-light" href="<?=base_url('admin/login/dangxuat') ?>">Đăng xuất</a>
				</div>
			</li>
		</ul>
	</div>
</nav>
<div class="menu-left bg-dark" id="menuleft">
	<div id="accordion">
		<div class="card">
			<div class="card-header">
				<a class="card-link text-light <?php if($this->uri->uri_string() == 'admin') echo 'active'; ?>" href="<?=base_url('admin') ?>"><i class="fas fa-home"></i> Trang chủ</a>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<a class="collapsed card-link text-light <?php if($this->uri->segment(2) == 'sanpham') echo 'active'; ?>" data-toggle="collapse" data-parent="#accordion" href="#sanpham"><i class="fas fa-film"></i> Sản phẩm</a>
			</div>
			<div id="sanpham" class="collapse <?php if($this->uri->segment(2) == 'sanpham') echo 'show'; ?>">
				<div class="card-body">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link text-light <?php if($this->uri->uri_string() == 'admin/sanpham') echo 'active'; ?>" href="<?=base_url('admin/sanpham') ?>"><i class="fas fa-list-ul"></i> Danh sách</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light <?php if($this->uri->uri_string() == 'admin/sanpham/themsanpham') echo 'active'; ?>" href="<?=base_url('admin/sanpham/themsanpham') ?>"><i class="fas fa-plus"></i> Thêm sản phẩm</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<a class="collapsed card-link text-light <?php if($this->uri->segment(2) == 'danhmuc') echo 'active'; ?>" data-toggle="collapse" data-parent="#accordion" href="#danhmuc"><i class="fas fa-list-ul"></i> Danh mục</a>
			</div>
			<div id="danhmuc" class="collapse <?php if($this->uri->segment(2) == 'danhmuc') echo 'show'; ?>">
				<div class="card-body">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link text-light <?php if($this->uri->uri_string() == 'admin/danhmuc') echo 'active'; ?>" href="<?=base_url('admin/danhmuc') ?>"><i class="fas fa-list-ul"></i> Danh sách</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light <?php if($this->uri->uri_string() == 'admin/danhmuc/them') echo 'active'; ?>" href="<?=base_url('admin/danhmuc/them') ?>"><i class="fas fa-plus"></i> Thêm danh mục</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<a class="collapsed card-link text-light <?php if($this->uri->segment(2) == 'slide') echo 'active'; ?>" data-toggle="collapse" data-parent="#accordion" href="#slide"><i class="far fa-image"></i> Slide</a>
			</div>
			<div id="slide" class="collapse <?php if($this->uri->segment(2) == 'slide') echo 'show'; ?>">
				<div class="card-body">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link text-light <?php if($this->uri->uri_string() == 'admin/slide') echo 'active'; ?>" href="<?=base_url('admin/slide') ?>"><i class="fas fa-list-ul"></i> Danh sách</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light <?php if($this->uri->uri_string() == 'admin/slide/them') echo 'active'; ?>" href="<?=base_url('admin/slide/them') ?>"><i class="fas fa-plus"></i> Thêm slide</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<a class="collapsed card-link text-light <?php if($this->uri->segment(2) == 'user') echo 'active'; ?>" data-toggle="collapse" data-parent="#accordion" href="#user"><i class="fas fa-users"></i> Quản trị viên</a>
			</div>
			<div id="user" class="collapse <?php if($this->uri->segment(2) == 'user') echo 'show'; ?>">
				<div class="card-body">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link text-light <?php if($this->uri->uri_string() == 'admin/user') echo 'active'; ?>" href="<?=base_url('admin/user') ?>"><i class="fas fa-list-ul"></i> Danh sách</a>
						</li>
<!--
						<li class="nav-item">
							<a class="nav-link text-light <?php if($this->uri->uri_string() == 'admin/user/them') echo 'active'; ?>" href="<?=base_url('admin/user/them') ?>"><i class="fas fa-plus"></i> Thêm quản trị viên</a>
						</li>
-->
					</ul>
				</div>
			</div>
		</div>
		

	</div>
</div>
<div class="icon-menuleft">
	<button class="btn btn-showmenu"><i class="fas fa-caret-right"></i></button>
</div>
<script>
	$('.btn-showmenu').click(function() {
		$('#menuleft').toggle('slow');
	});
</script>