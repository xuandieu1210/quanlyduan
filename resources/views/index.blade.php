<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<!-- <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-10 text-left"> 
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
    
  </div>
</div> -->
<!-- <div class="row justify-content-left">

<div class="container">
  <h2>Horizontal form</h2>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
 -->
</br>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-8 col-md-offset-1">
        <div class="container">

        <form class="form-horizontal" method="post" action="{{ route('duan.store') }}">
            @csrf
            <input type="hidden"  class="form-control" id = "id" name="id">
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Tên dự án:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="tenduan" placeholder="Enter tenduan">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Mô tả:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" name="mota" placeholder="Enter mota">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Chủ đầu tư:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" name="tenkhachhang" placeholder="Enter tenkhachhang">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Địa chỉ:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" name="diachi" placeholder="Enter diachi">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Thông tin lãnh đạo:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" name="thongtinlanhdao" placeholder="Enter thongtinlanhdao">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Thông tin kế toán:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" name="thongtinketoan" placeholder="Enter thongtinketoan">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Thông tin kỹ thuật:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" name="thongtinkythuat" placeholder="Enter thongtinkythuat">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Mã số thuế:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" name="masothue" placeholder="Enter masothue">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Số hợp đồng:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" name="sohopdong" placeholder="Enter sohopdong">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Ngày hợp đồng:</label>
            <div class="col-sm-4">          
              <input type="date" class="form-control" name="ngayhopdong" placeholder="Enter ngayhopdong">
            </div>
             <label class="control-label col-sm-2" for="pwd">Ngày kết thúc:</label>
            <div class="col-sm-4">          
              <input type="date" class="form-control" name="ngayketthuchopdong" placeholder="Enter ngayketthuchopdong">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Giá trị hợp đồng:</label>
            <div class="col-sm-10">          
              <input type="number" class="form-control" name="giatrihopdongchuabaogom" placeholder="Enter giatrihopdongchuabaogom">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">GHi chú:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" name="ghichu" placeholder="Enter ghichu">
            </div>
          </div>

          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Lưu</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-sm-2 text-left"> 
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
    
  </div>
</div>









</div>
   <div class="row justify-content-left">

       <div class="col-md-10 col-md-offset-1">

           <br />

           <div class="card">

               <div class="card-header bgsize-primary-4 white card-header">

                   <h4 class="card-title">Danh sách</h4>

               </div>

               <div class="card-body">


                   <div class=" card-content table-responsive">

                       <table id="list" class="table table-striped table-bordered" style="width:100%">



                          <thead>
                            <tr>
                              <th >STT</th>
                              <th >Dự án</th>
                              <th >Mô tả</th>
                              <th >Địa chỉ</th>
                              <th >Chủ đầu tư</th>
                              <th >Ngày hợp đồng</th>
                              <th >Ngày kết thúc</th>
                              <th >Giá trị hợp đồng</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data as $index => $row)
                            <tr>
                              <th id= "{{$row->id}}" scope="row">{{$index}}</th>
                              <td id= "{{$row->id}}">{{$row->tenduan}}</td>
                              <td id= "{{$row->id}}">{{$row->mota}}</td>
                              <td id= "{{$row->id}}"> {{$row->tenkhachhang}}</td>
                              <td id= "{{$row->id}}">{{$row->diachi}}</td>
                              <td id= "{{$row->id}}">{{$row->ngayhopdong}}</td>
                              <td id= "{{$row->id}}">{{$row->ngayketthuchopdong}}</td>
                              <td id= "{{$row->id}}">{{$row->giatrihopdongchuabaogom}}</td>
                            </tr>
                           @endforeach
                          </tbody>




                       </table>


                   </div>

               </div>

           </div>

       </div>




   </div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
<script>
    $("#list td").on("click", function(cell){
        $("#id").val( this.id)
    })
</script>
</body>
</html>
