<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
  <script src='https://cdn.plot.ly/plotly-2.27.0.min.js'></script>
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

<div style="  margin: auto;width: 50%; height: 300px;" id='myDiv'>
</br>
<div style="height: 500px;" id='myDiv2'>


<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
<script>
var data = [
  {
    domain: { x: [0, 1], y: [0, 1] },
    value: <?php echo json_encode($ketqua, JSON_NUMERIC_CHECK); ?> ,
    title: { text: "Kết quả thực hiện đến tháng hiện tại so với kế hoạch" },
    type: "indicator",
    mode: "gauge+number+delta",
    gauge: {
      axis: { range: [null, <?php echo json_encode($giatrikh, JSON_NUMERIC_CHECK); ?>] },
      
    },
     threshold: {
        line: { color: "red", width: 4 },
        thickness: 0.75,
        value: <?php echo json_encode($giatrikh, JSON_NUMERIC_CHECK); ?>
      }
  }
];

Plotly.newPlot('myDiv', data);

var trace1 = {
  type: 'bar',
  x: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4','Tháng 5','Tháng 6','Tháng 7','Tháng 8','Tháng 9','Tháng 11','Tháng 11','Tháng 12'],
  y: <?php echo json_encode($datakq, JSON_NUMERIC_CHECK); ?>,
  text: <?php echo json_encode($datakq, JSON_NUMERIC_CHECK); ?>,
  marker: {
      color: '#C8A2C8',
      line: {
          width: 2.5
      }
  }
};

var data2 = [ trace1 ];

var layout2 = { 
  title: 'Doanh thu theo các tháng',
  font: {size: 15}
};

var config = {responsive: true , hovermode: false}

Plotly.newPlot('myDiv2', data2, layout2, config );
</script>
</body>
</html>
