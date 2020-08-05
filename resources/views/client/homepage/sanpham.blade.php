@extends('client.master')
@section('content')
    <div class="search" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-inline" method="get" action="">                      
                            <div class="col-md-3">    
                                <select id="inputState" class="form-control">
                                    <option selected>thời gian</option>
                                    <option>Dưới 3 giờ</option>
                                    <option>Trên 3 giờ</option>
                                </select>
                            </div>
                            <div class="col-md-3">    
                                <select id="inputState" class="form-control">
                                    <option selected>Theo trình độ</option>
                                    <option>Mới bắt đầu</option>
                                    <option>chuyên nghiệp</option>
                                </select>
                            </div>    
                            <div class=" col-md-3">
                                    <select id="inputState" class="form-control">
                                    <option selected>Mới nhất</option>
                                    <option>Nổi bật</option>
                                    <option>Khuyến mãi</option>
                                    <option>Miễn phí</option>
                                    </select>
                            </div>
                            <div class="col-md-1 col-md-offset-2" style="margin-left: 115px;">
                                <input name="" id="" class="btn btn-primary" type="button" value="Lọc kết quả">
                            </div>                    
                    </form>
                </div>  
            </div>
        </div>
    </div>
    <div class="menuproduct">
        <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Danh mục khóa học</h6>
                                <ul>
                                    <li><i class="fa fa fa-language b"></i><a href="" style="margin-left: 15px;">  Ngoại ngữ</a></li>
                                    <li><i class="fa fa fa-rocket b"></i><a href="" style="margin-left: 13px;"> Kinh doanh</a></li>
                                    <li><i class="fa fa fa-line-chart b"></i><a href="" style="margin-left: 9px;"></i> Marketing</a></li>
                                    <li><i class="fa fa fa-desktop b"></i><a href="" style="margin-left: 13px;">Tin học văn phòng</a></li>
                                    <li><i class="fa fa fa-heartbeat b"></i><a href="" style="margin-left: 15px;">Sức khỏe giới tính</a></li>
                                    <li><i class="fa fa fa-paint-brush b"></i><a href="" style="margin-left: 15px;">Kế toán</a></li>
                                    <li><i class="fa fa fa-lightbulb-o b"></i><a href="" style="margin-left: 21px;">It và lập trình</a></li>
                                    <li><i class="fa fa fa-cutlery b"></i><a href="" style="margin-left: 17px;">kỹ năng cho công việc</a></li>
                                    <li><i class="fa fa fa-camera b"></i><a href="" style="margin-left: 12px;">Nhiếp ảnh</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Chủ đề đang hot</h6>
                                <input name="" id="" class="btn btn-primary hot" type="button" value="Facebook">
                                <input name="" id="" class="btn btn-primary hot" type="button" value="Kinh doanh">
                                <input name="" id="" class="btn btn-primary hot" type="button" value="Thiết kế">
                                <input name="" id="" class="btn btn-primary hot" type="button" value="Tiếng anh">
                                <input name="" id="" class="btn btn-primary hot" type="button" value="Kĩ năng sống">
                                <input name="" id="" class="btn btn-primary hot" type="button" value="SEO">
                                <input name="" id="" class="btn btn-primary hot" type="button" value="Học tập">
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-9">
                        <div class="bao">
                            <div class="row">
                            <div class="col-md-7">
                                <img src="img/bannerpro.png" alt="">
                            </div>
                            <div class="col-md-5">
                                <div class="news">
                                        <img src="img/bannerpro2.png" alt="">
                                        <a href="">Tự học tiếng anh</a>
                                </div>
                                <div class="news">
                                        <img src="img/bannerpro3.png" alt="">
                                        <a href="">Tiếng anh đơn giản</a>
                                </div>                  
                            </div>
                            </div> 
                        </div> 
                        <div class="most"> 
                            <div class="row">
                                    <div class="col-md-4">
                                        <div class="course">
                                                <div class="card" style="width: 18rem;">
                                                    <img src="img/kh1.png" width="285px" alt="...">
                                                    <div class="card-body contentcard">
                                                        <h5 class="card-title">Học giao tiếp tiếng anh</h5>
                                                        <p >Trần Văn Minh</p>
                                                        <p >Diễn giả về công nghệ thông tin</p>
                                                        <i class="fa fa-star co-or"></i>
                                                        <i class="fa fa-star co-or"></i>
                                                        <i class="fa fa-star co-or"></i>
                                                        <i class="fa fa-star co-or"></i>
                                                        <i class="fa fa-star co-or"></i>
                                                        <div class="money">
                                                            <span class="money">400.000</span>	
                                                            <span class="moneysale">500.000</span>
                                                            <span class="percent">(20%)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="buy">
                                                        <button type="button " class="btn do" >Mua</button>
                                                        <button type="button " class="btn xanh">Xem thêm</button>								
                                                </div>						
                                        </div>				
                                    </div>
                                    <div class="col-md-4">
                                            <div class="course">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="source/image/product/kh1.png" width="285px" alt="...">
                                                        <div class="card-body contentcard">
                                                            <h5 class="card-title">Chuyên gia về hóa học</h5>
                                                            <p >Trần Văn Minh</p>
                                                            <p >Diễn giả về công nghệ thông tin</p>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <div class="money">
                                                                <span class="money">400.000</span>	
                                                                <span class="moneysale">500.000</span>
                                                                <span class="percent">(20%)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="buy">
                                                            <button type="button " class="btn do" >Mua</button>
                                                            <button type="button " class="btn xanh">Xem thêm</button>								
                                                    </div>							
                                            </div>				
                                    </div>
                                    <div class="col-md-4">
                                            <div class="course">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="img/kh3.png" width="285px" alt="...">
                                                        <div class="card-body contentcard">
                                                            <h5 class="card-title">Tiếng anh cho trẻ nhỏ</h5>
                                                            <p >Trần Văn Minh</p>
                                                            <p >Diễn giả về công nghệ thông tin</p>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <div class="money">
                                                                <span class="money">400.000</span>	
                                                                <span class="moneysale">500.000</span>
                                                                <span class="percent">(20%)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="buy">
                                                            <button type="button " class="btn do" >Mua</button>
                                                            <button type="button " class="btn xanh">Xem thêm</button>								
                                                    </div>							
                                            </div>				
                                    </div>
                                    <div class="col-md-4">
                                            <div class="course">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="img/kh1.png" width="285px" alt="...">
                                                        <div class="card-body contentcard">
                                                            <h5 class="card-title">Học giao tiếp tiếng anh</h5>
                                                            <p >Trần Văn Minh</p>
                                                            <p >Diễn giả về công nghệ thông tin</p>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <div class="money">
                                                                <span class="money">400.000</span>	
                                                                <span class="moneysale">500.000</span>
                                                                <span class="percent">(20%)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="buy">
                                                            <button type="button " class="btn do" >Mua</button>
                                                            <button type="button " class="btn xanh">Xem thêm</button>								
                                                    </div>							
                                            </div>				
                                    </div>
                                    <div class="col-md-4">
                                            <div class="course">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="img/kh1.png" width="285px" alt="...">
                                                        <div class="card-body contentcard">
                                                            <h5 class="card-title">Học giao tiếp tiếng anh</h5>
                                                            <p >Trần Văn Minh</p>
                                                            <p >Diễn giả về công nghệ thông tin</p>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <div class="money">
                                                                <span class="money">400.000</span>	
                                                                <span class="moneysale">500.000</span>
                                                                <span class="percent">(20%)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="buy">
                                                            <button type="button " class="btn do" >Mua</button>
                                                            <button type="button " class="btn xanh">Xem thêm</button>								
                                                    </div>							
                                            </div>				
                                    </div>
                                    <div class="col-md-4">
                                            <div class="course">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="img/kh1.png" width="285px" alt="...">
                                                        <div class="card-body contentcard">
                                                            <h5 class="card-title">Học giao tiếp tiếng anh</h5>
                                                            <p >Trần Văn Minh</p>
                                                            <p >Diễn giả về công nghệ thông tin</p>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <div class="money">
                                                                <span class="money">400.000</span>	
                                                                <span class="moneysale">500.000</span>
                                                                <span class="percent">(20%)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="buy">
                                                            <button type="button " class="btn do" >Mua</button>
                                                            <button type="button " class="btn xanh">Xem thêm</button>								
                                                    </div>							
                                            </div>				
                                    </div>
                                    <div class="col-md-4">
                                            <div class="course">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="img/kh1.png" width="285px" alt="...">
                                                        <div class="card-body contentcard">
                                                            <h5 class="card-title">Học giao tiếp tiếng anh</h5>
                                                            <p >Trần Văn Minh</p>
                                                            <p >Diễn giả về công nghệ thông tin</p>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <i class="fa fa-star co-or"></i>
                                                            <div class="money">
                                                                <span class="money">400.000</span>	
                                                                <span class="moneysale">500.000</span>
                                                                <span class="percent">(20%)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="buy">
                                                            <button type="button " class="btn do" >Mua</button>
                                                            <button type="button " class="btn xanh">Xem thêm</button>								
                                                    </div>							
                                            </div>				
                                    </div>
                            </div>
                        </div> 
                        <div class="camket">
                            <div class="row">
                                    <h3 class="contentt" style="margin-left: 380px;"> Cam kết</h3>
                                <div class="infomation">
                                    <p>
                                            Để xây dựng một xã hội làm việc và hơn thế là làm việc chuyên nghiệp, bên cạnh kiến thức chuyên môn, chúng ta còn phải quan tâm đến việc rèn luyện kỹ năng. Cần nhận thức rằng không chỉ người lao động cần mà từ các giám đốc điều hành, nhà quản lý… cũng rất cần rèn luyện và nâng cao kỹ năng cho bản thân như: kỹ năng lãnh đạo, kỹ năng quản lý công việc,...

                                            Thực tế nghiên cứu cho thấy người thành đạt chỉ có 25% là do những kiến thức chuyên môn, 75% còn lại được quyết định bởi những kỹ năng mềm họ được trang bị. Chính vì vậy rèn luyện và nâng cao các kỹ năng cũng chính là cách bạn nâng cao bậc thang thành công của chính mình.
                                            
                                            Nắm bắt được tầm quan trọng của kỹ năng làm việc, Kyna gửi đến cho các bạn những khóa học kỹ năng cho công việc với những chủ đề HOT:</br>
                                            
                                            - Giao tiếp - thuyết trình </br>
                                            
                                            - Tư duy logic - sáng tạo </br>
                                            
                                            - Đàm phán - thuyết phục</br>
                                            
                                            - Kỹ năng lãnh đạo</br>
                                            
                                            Đến với Kyna, bạn sẽ được trải nghiệm một phương pháp học tập mới vô cùng thú vị và tiện ích.</br>
                                            
                                            ✓ Học cùng chuyên gia</br>
                                            
                                            ✓ Thanh toán một lần</br>
                                            
                                            ✓ Học mọi lúc mọi nơi</br>
                                            
                                            ✓ Cam kết hoàn tiền</br>
                                            
                                            Khóa học Online : Học giao tiếp - Kỹ năng thuyết trình - Kỹ năng giao tiếp - Kỹ năng tư duy sáng tạo - Kỹ năng đàm phán.
                                    </p>
                                </div>
                            </div> 
                        </div>
                                       
                    </div> 
                </div> 
                           
        </div>
    </div>
@endsection	