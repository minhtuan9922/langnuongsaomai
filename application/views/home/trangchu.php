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
			<div class="item">
				<a class="nav-link" href="#home">Home</a>
			</div>
			<div class="item">
				<a class="nav-link" href="#menu1">Home</a>
			</div>
			<div class="item"><h4>3</h4></div>
			<div class="item"><h4>4</h4></div>
			<div class="item"><h4>5</h4></div>
			<div class="item"><h4>6</h4></div>
			<div class="item"><h4>7</h4></div>
			<div class="item"><h4>8</h4></div>
			<div class="item"><h4>9</h4></div>
			<div class="item"><h4>10</h4></div>
			<div class="item"><h4>11</h4></div>
			<div class="item"><h4>12</h4></div>
		</div>
		<div class="tab-content">
			<div class="tab-pane fade" id="home">home</div>
			<div class="tab-pane fade" id="menu1">menu 1</div>
			<div class="tab-pane fade" id="menu2">...</div>
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
						items:5
					}
				}
			});
			$('a.nav-link').click(function() {
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
</script>
