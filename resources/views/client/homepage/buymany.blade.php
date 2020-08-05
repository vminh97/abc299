<div class="hightlight">
	<div class="container">
			<h3 class="contentt">KHÓA HỌC MUA NHIỀU</h3>
			<div class="row">
				@foreach( $hightlight as $hl )
					<div class="col-md-3">
						<div class="course">							
								<div class="card" style="width: 18rem;">
								<img src="source/client/image/product/{{$hl->avatar}}" width="285px" alt="...">
									<div class="card-body contentcard">
									<h5 class="card-title">{{ $hl->name }}</h5>
										<p >
											{{-- @foreach( $teacher as $tc )
													{{ $tc->name }}
											@endforeach --}}
											Trần văn Minh
										</p>
										<i class="fa fa-star co-or"></i>
										<i class="fa fa-star co-or"></i>
										<i class="fa fa-star co-or"></i>
										<i class="fa fa-star co-or"></i>
										<i class="fa fa-star co-or"></i>
										<div class="money">
											<span class="money">{{ $hl->price }}</span>	
											<span class="moneysale"style="margin-left: 65px;" >100000</span>
											<span class="percent" style="margin-left:25px">{{ $hl->discount }}%</span>
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