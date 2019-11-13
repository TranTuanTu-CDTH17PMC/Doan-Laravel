@extends ('layout')

@section('main-content')

               <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="mb-3 header-title">Cập nhật lĩnh vực</h2>

                                <form  action="{{route('linh-vuc.cap-nhat-linh-vuc',$linh_vuc->id)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Linhvuc">Tên lĩnh vực cũ</label>
                                        <input required="" type="text" class="form-control" id="Linhvuc"  placeholder="Gõ tên lĩnh vực" value="{{$linh_vuc->ten_linh_vuc}}" readonly="readonly">

                                         <label for="Linhvuc">Tên lĩnh vực mới</label>
                                        <input required="" type="text" class="form-control" id="Linhvuc" name="ten_linh_vuc" placeholder="Gõ tên lĩnh vực">
                                         
                                    </div>
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Xác nhận</button> 
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
@endsection