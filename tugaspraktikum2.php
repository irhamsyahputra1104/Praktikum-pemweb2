<?php
$customer = isset($_POST['customer']) ? htmlspecialchars($_POST['customer']) : "";
$product = isset($_POST['product']) ? $_POST['product'] : "";
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : "";

$data = [
  'tv' => 4200000,
  'kulkas' => 3100000,
  'mesin cuci' => 3800000,
];

$total = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($product) && array_key_exists($product, $data)) {
        if (is_numeric($quantity) && $quantity > 0) {
            $total = $data[$product] * $quantity;
        } else {
            echo "<script>alert('Quantity harus berupa angka positif');</script>";
        }
    } else {
        echo "<script>alert('Silakan pilih produk terlebih dahulu');</script>";
    }
}
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

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="col-8">
        <div class="form-group row">
          <label for="customer" class="col-4 col-form-label">Customer</label>
          <div class="col-8">
            <input id="customer" name="customer" type="text" class="form-control" value="<?= $customer ?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Product</label>
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="product" id="product_tv" type="radio" class="custom-control-input" value="tv">
              <label for="product_tv" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="product" id="product_kulkas" type="radio" class="custom-control-input" value="kulkas">
              <label for="product_kulkas" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="product" id="product_mesin_cuci" type="radio" class="custom-control-input" value="mesin cuci">
              <label for="product_mesin_cuci" class="custom-control-label">Mesin Cuci</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="quantity" class="col-4 col-form-label">Quantity</label>
          <div class="col-8">
            <input id="quantity" name="quantity" type="text" class="form-control" value="<?= $quantity ?>">
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
          <thead class="bg-primary">
            <tr>
              <th scope="col rounded">Product</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $key => $value) : ?>
              <tr>
                <td><?= ucfirst($key) ?> : <?= number_format($value) ?></td>
              </tr>
            <?php endforeach; ?>
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
      <p>Customer Name: <?= htmlspecialchars($customer) ?></p>
      <p>Selected Product: <?= ucfirst($product) ?></p>
      <p>Purchase Quantity: <?= $quantity ?></p>
      <p>Total : <?= number_format($total) ?></p>
    </div>
  </div>
</body>

</html>
