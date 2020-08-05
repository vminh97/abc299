@extends('client.master')
@section('content')
	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="menudoc">
						<ul class="">
								<li><a href="">Ngoại ngữ</a>	</li>							 
								<li><a href="">Maketing</a></li>
								<li><a href="">Tin học văn phòng</a></li>
								<li><a href="">Thiết kế</a></li>
								<li><a href="">Kinh doanh</a></li>
								<li><a href="">Phát triển cá nhân</a></li>
								<li><a href="">Công nghệ thông tin</a></li>
								<li><a href="">Sức khỏe-Giới tính</a></li>
								<li><a href="">Phong cách sống</a></li>
						</ul>
					</div>	
				</div>
				<div class="col-md-9">
						<div id="idcarou" class="carousel slide" data-ride="carousel" style="position: relative;">
							<ol class="carousel-indicators">
								<li data-target="#idcarou" data-slide-to="0" class="active"></li>
								<li data-target="#idcarou" data-slide-to="1"></li>
								<li data-target="#idcarou" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<img src="Source/client/image/slide/slider3.jpg" alt="First slide">
									
								</div>
								<div class="carousel-item">
									<img src="Source/client/image/slide/slider2.jpg" alt="First slide">
									
								</div>
								<div class="carousel-item">
									<img src="Source/client/image/slide/slider1.jpg" alt="First slide">									
								</div>
								<div class="carousel-item">
									<img src="Source/client/image/slide/slider4.png" alt="First slide">									
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	@include('client.banner')
	@include('client.homepage.hightlight')
    @include('client.homepage.buymany')
	@include('client.homepage.new')
	@include('client.bannerpart2')
	@include('client.homepage.giangvien')
	<!-- <div class="nutlentren">
		<button>len</button>
	</div> -->
@endsection	
