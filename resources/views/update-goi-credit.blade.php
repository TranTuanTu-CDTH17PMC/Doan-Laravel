@extends ('layout')

@section('main-content')

               <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                 <h4 class="header-title">Danh sách gói credit</h4>

                                <form  action="{{route('goi-credit.cap-nhat-goi-credit',$goicredit->id)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Nguoichoi">Tên gói</label>
                                        <input required="" type="text" class="form-control" id="Nguoichoi" name="ten_goi" placeholder="Tên gói credit">
                                        <label for="Nguoichoi">credit</label>
                                        <input required="" type="text" class="form-control" id="Nguoichoi" name="credit" placeholder="credit">
                                        <label for="Nguoichoi">Số tiền</label>
                                        <input required="" type="text" class="form-control" id="Nguoichoi" name="so_tien" placeholder="số tiền">
                                      
                                   
                                         
                                    </div>
                                    

                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Xác nhận</button> 
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
@endsection