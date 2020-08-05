@extends('admin.layouts.master')

@section('content')
  
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Category</h4>              
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Country
                      </th>
                      <th>
                        City
                      </th>
                      <th >
                        Salary
                      </th>
                      <th >
                        <button class="btn btn-primary  sua" ><i class="fas fa-add">Sửa</i></button>
                      </th>
                      <th >
                        <button class="btn btn-danger xoa" ><i class="fas fa-add">Thêm</i></button>
                      </th>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <button class="btn btn-primary them" ><i class="fas fa-add">Thêm</i></button>
	<!-- Edit Modal-->
@endsection
  
 

