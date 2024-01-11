<?php
require_once('tcpdf/tcpdf.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Success</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Payment has been successful</h2>

  <div class="alert alert-success">
    <strong>Please note your payment id!</strong><?php echo $_SESSION['payment_id'];?>
  </div>

  <form method="post" action="download_receipt.php">
    <input type="hidden" name="payment_id" value="<?php echo $_SESSION['payment_id']; ?>">
    <input type="hidden" name="name" value="<?php echo $_SESSION['name']; ?>">
    <button type="submit" class="btn btn-primary">Download Receipt</button>
  </form>
</div>

</body>
</html>
