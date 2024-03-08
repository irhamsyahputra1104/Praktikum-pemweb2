<?php
$costumer = isset($_POST['costumer']) ? $_POST['costumer'] : "";
$produck = isset($_POST['produck']) ? $_POST['produck'] : "";
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : "";

$data = [
  'tv' => 4200000,
  'kulkas' => 3100000,
  'mesin cuci' => 3800000,
];

$total = isset($data[$produck]) ? $data[$produck] * $jumlah : 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktikum2</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container-fluid">
    <div class="p-5 row">

      <form action="formbelanja.php" method="post" class=" col-8">
        <div class="form-group row">
          <label for="costumer" class="col-4 col-form-label">Customer</label>
          <div class="col-8">
            <input id="costumer" name="costumer" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Product</label>
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produck" id="produck_0" type="radio" class="custom-control-input" value="tv">
              <label for="produck_0" class="custom-control-label">Tv</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produck" id="produck_1" type="radio" class="custom-control-input" value="mesin cuci">
              <label for="produck_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produck" id="produck_2" type="radio" class="custom-control-input" value="kulkas">
              <label for="produck_2" class="custom-control-label">Mesin Cuci</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="jumlah" class="col-4 col-form-label">Quantity</label>
          <div class="col-8">
            <input id="jumlah" name="jumlah" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>

      <div class="col-4 rounded">


        <table class="table">
          <thead class="bg-primary ">
            <tr>
              <th scope="col rounded">Product</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Tv : 4.200.000</td>
            </tr>
            <tr>
              <th scope="row">Kulkas : 3.100.000</td>
            </tr>
            <tr>
              <th scope="row">Mesin Cuci : 3.800.000</td>
            </tr>
          </tbody>
          <tfoot class="bg-primary">
            <tr>
              <th scope="row">Price can change any time</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <hr>

    <div class="mx-3">
      <p>Customer Name: <?= $costumer ?></p>
      <p>Selected Product: <?= $produck ?></p>
      <p>Purchase Quantity: <?= $jumlah ?></p>
      <p>Total : <?= number_format($total) ?></p>
    </div>
  </div>
</body>

</html>