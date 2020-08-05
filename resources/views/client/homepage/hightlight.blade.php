<div class="hightlight">
		<div class="container">
			<h3 class="contentt">KHÓA HỌC NỔI BẬT</h3>
			<div class="row">
				@foreach( $sanpham as $sp )
					<div class="col-md-3">
						<div class="course">							
								<div class="card" style="width: 18rem;">
								<img src="source/client/image/product/{{$sp->avatar}}" width="285px" alt="...">
									<div class="card-body contentcard">
									<h5 class="card-title">{{ $sp->name }}</h5>
										<i class="fa fa-star co-or"></i>
										<i class="fa fa-star co-or"></i>
										<i class="fa fa-star co-or"></i>
										<i class="fa fa-star co-or"></i>
										<i class="fa fa-star co-or"></i>
										<div class="money">
											<span class="money">{{ $sp->price }}</span>	
											<span class="moneysale"style="margin-left: 65px;" >100000</span>
											<span class="percent" style="margin-left:25px">{{ $sp->discount }}%</span>
										</div>
									</div>
								</div>
								<div class="buy">
									<button type="button " class="btn do" >Mua</button>
									<button type="button " class="btn xanh">Xem thêm</button>								
							    </div>						
						</div>				
					</div>
				@endforeach
			</div>
			<button type="button" class="btn btn-success" style="margin-left: 500px;">Xem tất cả</button>
		</div>	
</div>