@extends('layout')

@section('css')
               <!-- third party css -->
        <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

@endsection

@section('js')

               <!-- third party js -->
        <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
<script type="text/javascript">
$(document).ready(function() {
$("#dsnguoichoi-datatable").DataTable({
language: {
paginate: {
previous: "<i class='mdi mdi-chevron-left'>",
next: "<i class='mdi mdi-chevron-right'>"
}
},
drawCallback: function() {
$(".dataTables_paginate > .pagination").addClass("pagination-rounded")
}
});
});
       </script>
@endsection


@section('main-content')
<h1> Danh sách người chơi </h1> 

               <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách người chơi</h4>
                                <a href="{{route ('nguoi-choi.xl-them-moi-nguoi-choi')}}">  <button>Thêm</button> </a>

                                 <a href="{{route('nguoi-choi.thung-rac-nguoi-choi')}}">  <button>Thùng rác</button> </a>
                              
                                <table id="dsnguoichoi-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Mật khẩu</th>
                                            <th>Email</th>
                                            <th>Hình đại diện</th>
                                            <th>Điểm cao nhất</th>
                                           
                                        </tr>
                                    </thead>
                                
                               
                                    <tbody>
                                     @foreach($nguoi_choi as $nguoi_choi)

                                     <tr>
                                      <td> {{$nguoi_choi->id}} </td>
                                      <td> {{$nguoi_choi->ten_dang_nhap}} </td>
                                      <td><input value ="{{$nguoi_choi->mat_khau}}" type="password" readonly="readonly"> " </td>
                                      <td> {{$nguoi_choi->email}} </td>
                                      <td> <img src="{{asset('img/'.$nguoi_choi->hinh_dai_dien)}}" alt="" width="80px" height="80px"></td>
                                      <td> {{$nguoi_choi->diem_cao_nhat}} </td>
                                       <td> {{$nguoi_choi->credit}} </td>
                                      
                                      <td>
                                        <a href="{{route('nguoi-choi.xl-cap-nhat-nguoi-choi',$nguoi_choi->id)}}">
                                          <button type="button" class="btn btn-purple waves-effect waves-light"><i class="mdi mdi-settings"></i></button>
                                        </a>
                                          <a href="{{route('nguoi-choi.xoa-nguoi-choi',$nguoi_choi->id)}}">
                                        <button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></button>


                                      </td>

                                  </tr> 
                                  @endforeach
                                  
                              </tbody>
                          </table>

                      </div> <!-- end card body-->
                  </div> <!-- end card -->
              </div><!-- end col-->
          </div>
@endsection