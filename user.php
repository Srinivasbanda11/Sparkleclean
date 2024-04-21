<?php
require_once 'logincheck.php';
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "activity");
$query = "SELECT * FROM users WHERE `user_no`='$_SESSION[user_no]'";
$sql = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
  <title>SparkleClean Services</title>
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
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #e2e2e2;
    }

    .addToCartBtn {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 8px 16px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 4px;
    }


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

  <?php include('includes/header.php'); ?>
  <div class="ts-main-content">
    <?php include('includes/leftbar.php'); ?>
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">

                  <?php require_once './includes/update_user.php' ?>

                  <?php
                  $conn = new mysqli('localhost', 'root', '', 'activity') or die(mysqli_error());
                  $query = $conn->query("SELECT * FROM `users` WHERE `user_no`='$_SESSION[user_no]'") or die(mysqli_error());
                  $fetch = $query->fetch_array();
                  ?>
                  <div class="panel-heading"> <?php echo $fetch["email"]; ?> </div>
                  <div class="panel-body">
                    <?php
                    $conn = new mysqli('localhost', 'root', '', 'activity') or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `users` WHERE `user_no`='$_SESSION[user_no]'") or die(mysqli_error());
                    while ($fetch = $query->fetch_array()) {
                    ?>
                      <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        <?php

                        while ($row = mysqli_fetch_array($sql)) {
                        ?>


                          <div>

                            <h2>Cleaning Services</h2>
                            <table id="cleaningTable">
                              <tr>
                                <th>Service Type</th>
                                <th>Description</th>
                                <th>Cost</th>
                                <th></th> <!-- Empty column for Add to Cart button -->
                              </tr>
                              <tr>
                                <td>Basic Cleaning</td>
                                <td>Cleaning of floors, surfaces, and basic dusting</td>
                                <td>$50</td>
                                <td><button class="addToCartBtn">Add to Cart</button></td> <!-- Add to Cart button for Basic Cleaning -->
                              </tr>
                              <tr>
                                <td>Deep Cleaning</td>
                                <td>Thorough cleaning including detailed scrubbing and sanitization</td>
                                <td>$100</td>
                                <td><button class="addToCartBtn">Add to Cart</button></td> <!-- Add to Cart button for Deep Cleaning -->
                              </tr>
                              <tr>
                                <td>Carpet Cleaning</td>
                                <td>Professional cleaning of carpets and rugs</td>
                                <td>$75</td>
                                <td><button class="addToCartBtn">Add to Cart</button></td> <!-- Add to Cart button for Carpet Cleaning -->
                              </tr>
                              <tr>
                                <td>Window Cleaning</td>
                                <td>Cleaning of interior and exterior windows</td>
                                <td>$50</td>
                                <td><button class="addToCartBtn">Add to Cart</button></td> <!-- Add to Cart button for Window Cleaning -->
                              </tr>
                            </table>
                          </div>

                          <script>
                            const addToCartBtns = document.querySelectorAll('.addToCartBtn');

                            addToCartBtns.forEach(btn => {
                              btn.addEventListener('click', () => {
                                const row = btn.closest('tr');
                                const serviceType = row.cells[0].innerText;
                                const description = row.cells[1].innerText;
                                const cost = row.cells[2].innerText;

                                // Example code to add the item to a shopping cart
                                // You can customize this part to fit your specific requirements
                                addToCart(serviceType, description, cost);
                              });
                            });

                            function addToCart(serviceType, description, cost) {
                              // Example function to add the item to a shopping cart
                              // Replace this function with your actual logic to add items to the cart
                              console.log('Adding to cart:', serviceType, description, cost);
                            }
                          </script>

                  </div>

                  <div class="form-group">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4 text-center">
                      <img src="./uploads/<?php echo $fetch["image"]; ?>" style="width:200px; border-radius:50%; margin:10px;">
                      <input type="file" name="image" class="form-control">
                      <input type="hidden" name="image" class="form-control" value="<?php echo $fetch["image"]; ?>">
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div>

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name<span style="color:red">*</span></label>
                    <div class="col-sm-4">
                      <input type="text" name="name" class="form-control" required value="<?php echo $fetch['name']; ?>">
                    </div>

                    <label class="col-sm-2 control-label">Email<span style="color:red">*</span></label>
                    <div class="col-sm-4">
                      <input type="email" name="email" class="form-control" required value="<?php echo $fetch['email']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Address<span style="color:red">*</span></label>
                    <div class="col-sm-4">
                      <input type="text" name="address" class="form-control" required value="<?php echo $fetch['address']; ?>">
                    </div>


                    <label class="col-sm-2 control-label">Mobile<span style="color:red">*</span></label>
                    <div class="col-sm-4">
                      <input type="text" name="mobile" class="form-control" required value="<?php echo $fetch['mobile']; ?>">
                    </div>
                  </div>
                  <input type="hidden" name="user_no" class="form-control" required value="<?php echo $fetch['user_no']; ?>">

                  <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                      <button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
                    </div>
                  </div>
                <?php

                          $conn->close();
                        }
                ?>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

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
<?php } ?>