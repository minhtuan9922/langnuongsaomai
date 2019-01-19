<!--Phần đăng phim-->
<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="text-danger">GIỚI THIỆU</h1>
				<h5 class="text-justify">Với sức chứa lớn cùng không gian lịch sự, đội ngũ nhân viên chuyên nghiệp, Hello quán hiện đang là điểm đến lý tưởng cho gia đình Việt cũng như anh em bạn bè có thể thư giãn, ăn uống, giao lưu vào cuối ngày làm việc căng thẳng. Các món ăn tại quán luôn đa dạng và chế biến vô cùng tươi ngon nhằm mang lại một bữa ăn dinh dưỡng và ngon miệng đến khách hàng.</h5>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-6">
						<img src="<?=base_url('img/hinh1-6450.jpg') ?>" width="100%">
					</div>
					<div class="col-6">
						<img src="<?=base_url('img/lau-thai-7267.jpg') ?>" width="100%">
					</div>
				</div>
			</div>
		</div>
		<div class="space30"></div>
	</div>
</div>
<div class="container-fuld bg-green">
	<div class="container">
		<div class="space50"></div>
		<h1 class="text-white text-center">THỰC ĐƠN LÀNG NƯỚNG SAO MAI</h1>
		<img src="<?=base_url('img/bgkh.png') ?>" class="mx-auto d-block" alt="">
		<div class="owl-carousel owl-theme" id="myTab">
			<?php
			if(isset($danhmuc))
			{
				foreach($danhmuc as $item)
				{
			?>
			<div class="item text-center">
				<a class="nav-link" href="#thuc_don_<?=$item['tenkhongdau'] ?>">
					<img class="mx-auto d-block" src="<?=base_url('img/'.$item['hinhanh']) ?>" alt="">
				</a>
				<h5 class="text-white"><?=$item['tendanhmuc'] ?></h5>
			</div>
			<?php
				}
			}
			?>
		</div>
		<div class="tab-content">
			<?php
			if(isset($sanpham))
			{
				foreach($sanpham as $k => $item)
				{
					if($k == 0 || $item['danhmuc'] != $sanpham[$k-1]['danhmuc'])
					{
						echo '<div class="tab-pane fade" id="thuc_don_'. $item['tenkhongdau'] .'">';
						echo '<div class="row">';
					}
			?>
				
					<div class="col-md-3">
						<div class="product">
							<img src="<?=base_url('img/sanpham/'.$item['hinhanh_sp']) ?>" width="100%">
							<h5 class="text-center"><?=$item['tensanpham'] ?></h5>
						</div>
					</div>
				
			<?php
					if($k == count($sanpham) - 1 || $item['danhmuc'] != $sanpham[$k+1]['danhmuc'])
					{
						echo '</div>';
						echo '</div>';
					}
				}
			}
			?>
		</div>
		<script>
			$('.owl-carousel').owlCarousel({
				loop:true,
				margin:10,
				nav: false,
				dots: false,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:6
					}
				}
			});
			$('a.nav-link').click(function(e) {
				e.preventDefault();
				var id = $(this).attr('href');
				$('.tab-pane').removeClass('show active');
				$(id).addClass('show active');
			});
//			$('a.nav-link').click(function(){
//				$(this).tab('show');
//			})
		</script>
		<div class="space50"></div>
	</div>
</div>
<div class="contact-home">
	<div class="space50"></div>
	<div class="container">
		<h1 class="text-center text-white">LIÊN HỆ ĐẶT BÀN</h1>
		<p class="text-center text-white">Đăng ký ngay để được tư vấn nhanh nhất!</p>
		<form action="<?=base_url() ?>" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-3">
					<input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email (*)">
				</div>
				<div class="col-md-3">
					<input type="text" name="dienthoai" class="form-control form-control-lg" id="dienthoai" placeholder="Điện thoại (*)">
				</div>
				<div class="col-md-3">
					<input type="text" name="noidung" class="form-control form-control-lg" id="noidung" placeholder="Nội dung">
				</div>
				<div class="col-md-3">
					<button type="submit" name="dangky" class="btn btn-success btn-block btn-lg">Đăng ký</button>
				</div>
			</div>
		</form>
	</div>
	<div class="space50"></div>
</div>
<!-- The Modal -->
<div class="modal fade" id="trailer">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content trailer">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" id="trailer_youtube"  src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<script>
	function play_trailer(id) {
		$.ajax({
			dataType: "JSON",
			method: "POST",
			url: "<?=base_url('home/trailer'); ?>",
			data:{id:id},
			success: function(result)
			{
				if(result.trailer) {
					$('#trailer iframe').attr('src', result.trailer);
				}
			}
		});
	}
	$("#trailer").on('hidden.bs.modal', function () {
		$('#trailer iframe').attr('src', '');
	});
	<?php
	if(isset($result) && $result == 1)
	{
	?>
	alert('Đăng ký thành công. Chúng tôi sẽ liên lạc trong thời gian sớm nhất.')
	<?php
	}
	?>
</script>
