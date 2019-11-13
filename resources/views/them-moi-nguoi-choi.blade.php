@extends ('layout')

@section('main-content')
               <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="mb-3 header-title">Thêm người chơi</h2>

                                <form  action="{{route ('nguoi-choi.them-moi-nguoi-choi')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Nguoichoi">Tên đăng nhập</label>
                                        <input  required=""  type="text" class="form-control" id="Nguoichoi" name="ten_dang_nhap" placeholder="Tên đăng nhập">
                                        <label for="Nguoichoi">Mật khẩu</label>
                                        <input  required=""  type="text" class="form-control" id="Nguoichoi" name="mat_khau" placeholder="Mật khẩu">
                                        <label for="Nguoichoi">Email</label>
                                        <input  required=""  type="text" class="form-control" id="Nguoichoi" name="email" placeholder="Email">
                                        <label for="Nguoichoi">Hình đại diện</label>
                                        <input required=""   type="file" class="form-control" id="Nguoichoi" name="hinh_dai_dien" placeholder="Hình đại diện">
                                   
                                         
                                    </div>
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Xác nhận</button> 
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
@endsection