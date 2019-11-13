@extends ('layout')

@section('main-content')
               <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="mb-3 header-title">Thêm lĩnh vực</h2>

                                <form  action="{{route ('cau-hoi.them-moi-cau-hoi')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Linhvuc">Câu Hỏi</label>
                                        <input type="text" class="form-control" id="Linhvuc" name="cau_hoi" placeholder="Câu hỏi">
                                        <label for="Linhvuc">Đáp Án A</label>
                                        <input type="text" class="form-control" id="Linhvuc" name="dap_an_a" placeholder="Đáp án a">
                                        <label for="Linhvuc">Đáp Án B</label>
                                        <input type="text" class="form-control" id="Linhvuc" name="dap_an_b" placeholder="Đáp án b">
                                        <label for="Linhvuc">Đáp Án C</label>
                                        <input type="text" class="form-control" id="Linhvuc" name="dap_an_c" placeholder="Đáp án c">
                                        <label for="Linhvuc">Đáp Án D</label>
                                        <input type="text" class="form-control" id="Linhvuc" name="dap_an_d" placeholder="Đáp án d">
                                         <label for="Linhvuc">Đáp Án Đúng</label>
                                        <input type="text" class="form-control" id="Linhvuc" name="dap_an_dung" placeholder="Đáp án đúng">
                                        <label for="Linhvuc">Lĩnh Vực</label>
                                        <br>
                                        <select name="linh_vuc_id">
                                            @foreach($linhvuc as $Linhvuc)

                                            <option  value="{{$Linhvuc->id}}">{{$Linhvuc->ten_linh_vuc}}</option>
                                            @endforeach
                                              </select>
                                         
                                    </div>
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Xác nhận</button> 
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
@endsection