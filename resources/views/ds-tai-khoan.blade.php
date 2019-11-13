@extends('layout')

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
$("#linhvuc-datatable").DataTable({
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

@section('css')
               <!-- third party css -->
        <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

@endsection

@section('main-content')
<h1> Danh sách Câu hỏi </h1> 

               <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách Câu hỏi</h4>
                                <a href="{{route ('tai-khoan.xl-them-moi-tai-khoan')}}">  <button>Thêm</button> </a>

                                 <a href="{{route ('tai-khoan.thung-rac')}}">  <button>Thùng rác</button> </a>
                              
                                <table id="cauhoi-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Câu hỏi</th>
                                            <th>Đáp án A</th>
                                            <th>Đáp án B</th>
                                            <th>Đáp án C</th>
                                            <th>Đáp án D</th> 
                                              <th>Đáp án đúng </th>
                                                <th>Lĩnh vực</th>

                                        </tr>
                                    </thead>
                                
                               
                                    <tbody>
                                     @foreach($taikhoan as $taikhoan)

                                     <tr>
                                      <td> {{$taikhoan->id}} </td>
                                     
                                     
                                        <a href="{{ route('tai-khoan.xl-cap-nhat-tai-khoan',$taikhoan->id)}}">
                                          <button type="button" class="btn btn-purple waves-effect waves-light"><i class="mdi mdi-settings"></i></button>
                                        </a>
                                          <a href="{{ route('tai-khoan.xoa-tai-khoan',$taikhoan->id)}}">
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