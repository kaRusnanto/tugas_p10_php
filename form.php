<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Account Bank</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      background-color: #00FFFF;
    }

    h1{
      text-align: center;
    }

    .container {
      margin-top: 50px;
    }

    .input-group-addon {
      background-color: #000000;
      border: 1px solid #ced4da;
      color: #ffffff;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: #000000;
      border: 1px solid #000000;
    }

    .btn-primary:hover {
      background-color: #000000;
      border: 1px solid #0056b3;
    }

    .table {
      margin-top: 50px;
    }

    .table thead th {
      background-color: #000000;
      color: #ffffff;
    }

  
  </style>
</head>
<body>
  <h1 class="container">Form Account Bank</h1>

<?php
// Initialize an array to store form data
$accounts = array();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $nomerRekening = $_POST["nomerRekening"];
  $namaCustomer = $_POST["namaCustomer"];
  $saldoAwal = $_POST["saldoAwal"];

  // Validate and sanitize the data (you can add more robust validation)
  $nomerRekening = htmlspecialchars($nomerRekening);
  $namaCustomer = htmlspecialchars($namaCustomer);
  $saldoAwal = htmlspecialchars($saldoAwal);

  // Add the data to the accounts array
  $accounts[] = array(
    "nomerRekening" => $nomerRekening,
    "namaCustomer" => $namaCustomer,
    "saldoAwal" => $saldoAwal
  );
}

// Display the form
?>
<form class="container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <!-- Your form content -->
  <div class="form-group row">
    <label for="nomerRekening" class="col-4 col-form-label">Nomer Rekening</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-credit-card-alt"></i>
        </div> 
        <input id="nomerRekening" name="nomerRekening" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="namaCustomer" class="col-4 col-form-label">Nama Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-address-book"></i>
        </div> 
        <input id="namaCustomer" name="namaCustomer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="saldoAwal" class="col-4 col-form-label">Saldo Awal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-tripadvisor"></i>
        </div> 
        <input id="saldoAwal" name="saldoAwal" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">masuk</button>
    </div>
  </div>
</form>

<table class="table">
  <thead>
    <tr class="bg-dark text-light">
      <th scope="col">No</th>
      <th scope="col">Nomer Rekening</th>
      <th scope="col">Nama Customer</th>
      <th scope="col">Saldo Awal</th>
    </tr>
  </thead>
  <tbody class="table-info"> 
    <tr>
      <th scope="row">1</th>
      <td>010</td>
      <td>Messi</td>
      <td>6250000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>070</td>
      <td>Ronaldo</td>
      <td>8743500</td>
    </tr>
    <tr>

    <?php
   // hasil dari pengisian form di atas
    $count = 3;
    foreach ($accounts as $account) {
      echo "<tr>";
      echo "<th scope='row'>" . $count . "</th>";
      echo "<td>" . $account["nomerRekening"] . "</td>";
      echo "<td>" . $account["namaCustomer"] . "</td>";
      echo "<td>" . $account["saldoAwal"] . "</td>";
      echo "</tr>";
      $count++;
    }
    ?>
  </tbody>
</table>

</body>
</html>
