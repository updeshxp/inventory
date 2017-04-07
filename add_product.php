<html>
<head>
  <meta charset="utf-8">
  <title>Add Product</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="style.css" media="screen" title="no title">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/validator.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="container" id="logo">
      <a class='logo' href="index.php">Inventory Management System</a>
      <h1>Add Product</h1>
    </div>

<div class="box-section">
  <br><br>
  <form class="form-horizontal" role="form" id="add_prod" method="POST" action="buyprod.php" data-toggle="validator">
    <div class="container">
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Enter Product Name :</label>
          <div class="col-xs-4">
            <input class="form-control" type="text" name="product_name"  id="prod_name"data-error="Please enter Product name" required>
            <div class="help-block with-errors"></div>
          </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Enter Category :</label>
        <div class="col-xs-4">
            <input class="form-control" type="text"  name="category" id="category"data-error="Please enter Category" required>
            <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Enter Quantity :</label>
        <div class="col-xs-4">
          <input class="form-control" type="number" name="qty" id="quantity"data-error="Please enter Quantity" required>
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Enter Cost Price :</label>
        <div class="col-xs-4">
          <input class="form-control" type="number" name="cp" id="cost_price"data-error="Please enter Cost price" required>
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Enter Selling Price :</label>
        <div class="col-xs-4">
          <input class="form-control" type="number" name="sp" id="selling_price"data-error="Please enter Selling Price" required>
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group row">
        <label for="example-date-input" class="col-xs-4 col-form-label text-right">Enter Expiry Date :</label>
          <div class="col-xs-4">
            <input class="form-control" type="date" name="exp_date" value="2016-10-07" id="expiry_date"data-error="Please enter Expiry Date" required>
            <div class="help-block with-errors"></div>
          </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Enter Manufacturing Company :</label>
        <div class="col-xs-4">
            <input class="form-control" type="text" name="mfg_co" id="mfg_co"data-error="Please enter Manufacturing Company" required>
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <a href="#"><button type="submit" name="submit" id="submitpro" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Submit</button></a>
        <a href="#"><button type="reset" name="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span> Reset</button></a>
        <a href="owner_dashboard.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>
    </div>
  </form>
</div>
  </div>
</body>
</html>
