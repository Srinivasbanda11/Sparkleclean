<?php
require_once 'logincheckstaff.php';
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "activity");
$query = "SELECT * FROM staff WHERE `staff_no`='$_SESSION[staff_no]'";
$sql = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
  <title>SparkleClean Services | staff idi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="shortcut icon" href="./uploads/ico.png" />
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/jquery.dataTables.min.css">
  <link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./css/style3.css">
  <link rel="stylesheet" type="text/css" href="./css/style6.css">
  <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <script type="text/javascript" src="./js/jquery.dataTables.min.js"></script>

  <style>
    .errorWrap {
      padding: 10px;
      margin: 0 0 20px 0;
      background: #dd3d36;
      color: #fff;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }

    .succWrap {
      padding: 10px;
      margin: 0 0 20px 0;
      background: #5cb85c;
      color: #fff;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }
  </style>
  <link rel="stylesheet" href="./css6/style.css">
</head>

<body>
Staff
  

</body>

<script type="text/javascript" src="./js/jquery.min.js"></script>
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.dataTables.min.js"></script>
<script src="./js/dataTables.bootstrap.min.js"></script>
<script src="./js/main.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    setTimeout(function() {
      $('.succWrap').slideUp("slow");
    }, 3000);
  });
</script>
<script src="./js/main1.js"></script>

</html>
<?php ?>