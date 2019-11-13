@extends ('layout')

@section('main-content')

               <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                 <h4 class="header-title">Danh sách Câu hỏi</h4>

                                <form  action="{{route('cau-hoi.cap-nhat-cau-hoi',$cau_hoi->id)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Linhvuc">Câu Hỏi </label>
                                        <input required="" type="text" class="form-control" id="Linhvuc" name="cau_hoi" placeholder="Câu hỏi" value="{{$cau_hoi->cau_hoi}}">
                                        <label for="Linhvuc">Đáp Án A </label>
                                        <input required="" type="text" class="form-control" id="Linhvuc" name="dap_an_a" placeholder="Đáp án a" value="{{$cau_hoi->dap_an_a}}">
                                        <label for="Linhvuc">Đáp Án B </label>
                                        <input required="" type="text" class="form-control" id="Linhvuc" name="dap_an_b" placeholder="Đáp án b" value="{{$cau_hoi->dap_an_b}}">
                                        <label for="Linhvuc">Đáp Án C </label>
                                        <input required="" type="text" class="form-control" id="Linhvuc" name="dap_an_c" placeholder="Đáp án c" value="{{$cau_hoi->dap_an_c}}">
                                        <label for="Linhvuc">Đáp Án D </label>
                                        <input required="" type="text" class="form-control" id="Linhvuc" name="dap_an_d" placeholder="Đáp án d" value="{{$cau_hoi->dap_an_d}}">
                                         <label for="Linhvuc">Đáp Án Đúng </label>
                                        <input required="" type="text" class="form-control" id="Linhvuc" name="dap_an_dung" placeholder="Đáp án đúng" value="{{$cau_hoi->dap_an_dung}}">
                                         <label for="Linhvuc">Lĩnh Vực </label>
                                        <input required="" type="text" class="form-control" id="Linhvuc" name="linh_vuc" placeholder="lĩnh vực" value="{{$cau_hoi->linh_vuc}}">
                                         
                                    </div>
                                    

                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Xác nhận</button> 
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
@endsection