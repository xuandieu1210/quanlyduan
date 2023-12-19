<!DOCTYPE html>

<html>

<head>

   <title>TTCNTT TOOLS</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />

   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">


</head>

<body>

<div class="container">

   <div class="card-header bg-secondary dark bgsize-darken-4 white card-header">

       <h4 class="text-white">DANH SÁCH CÀI ĐẶT 1000 ENDPOINTS</h4>

   </div>

<!--    <div class="row justify-content-centre" style="margin-top: 4%">

       <div class="col-md-8">

           <div class="card">

               <div class="card-body">

                   @if ($message = Session::get('success'))




                       <div class="alert alert-success alert-block">




                           <button type="button" class="close" data-dismiss="alert">×</button>




                           <strong>{{ $message }}</strong>




                       </div>

                       <br>

                   @endif

                   <form action="" method="post" enctype="multipart/form-data">

                       @csrf

 

                               

                               <div class="input-group-append" id="button-addon2">

                                   <button class="btn btn-primary square" type="submit"><i class="ft-upload mr-1"></i> Thêm mới dự án</button>

                               </div>

                   </form>

               </div>

           </div>

       </div>

   </div>
 -->



   <div class="row justify-content-left">

       <div class="col-md-12">

           <br />

           <div class="card">

               <div class="card-header bgsize-primary-4 white card-header">

                   <h4 class="card-title">Danh sách</h4>

               </div>

               <div class="card-body">

                   <div class="pull-right">

                       <a href="" class="btn btn-primary" style="margin-left:85%">Xuất file báo cáo</a>

                   </div>

                   <div class=" card-content table-responsive">

                       <table id="example" class="table table-striped table-bordered" style="width:100%">



                          <thead>
                            <tr>
                              <th >STT</th>
                              <th >Đơn vị</th>
                              <th >SL máy giao</th>
                              <th >SL sau điều chỉnh</th>
                              <th >SL đã cài</th>
                              <th >SL thiếu</th>
                              <th >SL biên bản</th>
                              <th >Up file scan biên bản</th>
                              <th >Hành động</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data as $index => $row)
                         <form class="form-horizontal" method="post" action="{{ route('soctool.store') }}">
                            @csrf
                            <input type="hidden"  class="form-control" id = "id" name="id" value="{{$row->id}}">
                            <tr>
                              <th scope="row">{{$index}}</th>
                              <td>{{$row->donvi}}</td>
                              <td style=" color: red">{{$row->soluonggiao}}</td>
                              <td><input style="width: 50px;" type="number" min="0" id="fname" name="dieuchinh" value="{{$row->dieuchinh}}"/> </td>
                              <td><input style="width: 50px" type="number" min="0" id="fname" name="soluongcaidat" value="{{$row->soluongcaidat}}"/></td>
                              <td style=" color: green;">{{$row->soluongthieu}}</td>
                              <td><input style="width: 50px" type="number" min="0" id="fname" name="soluongbienban" value="{{$row->soluongbienban}}"/></td>
                              <td><input type="file" class="form-control" name="linkfile" id="uploaded_file"> </td>
                              <td> <button type="submit" class="btn btn-default">Lưu</button></td>
                            </tr>
                            </form>
                           @endforeach
                          </tbody>




                       </table>


                   </div>

               </div>

           </div>

       </div>




   </div>

   <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

   <script>

       $(document).ready(function() {

           $('#example').DataTable();

       } );

   </script>

</body>




</html>