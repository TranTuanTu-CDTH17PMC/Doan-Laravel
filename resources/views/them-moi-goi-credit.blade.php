@extends ('layout')

@section('main-content')
               <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="mb-3 header-title">Thêm người chơi</h2>

                                <form  action="{{route ('goi-credit.them-moi-goi-credit')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Nguoichoi">Tên gói</label>
                                        <input type="text" class="form-control" id="Nguoichoi" name="ten_goi" required="" placeholder="Tên gói credit">
                                        <label for="Nguoichoi">credit</label>
                                        <input  required=""  type="text" class="form-control" id="Nguoichoi" name="credit" placeholder="credit">
                                        <label  required=""  for="Nguoichoi">Số tiền</label>
                                        <input type="text" class="form-control" id="Nguoichoi" name="so_tien" placeholder="số tiền">
                                      
                                   
                                         
                                    </div>
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Xác nhận</button> 
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
@endsection