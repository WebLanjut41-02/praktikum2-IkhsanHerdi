<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Login</h2>
  <p>Karyawan</p>
  <form action="<?php echo base_url(); ?>login/ceklogin" method="post">
    <div class="form-group">
      <label for="usr">Nama:</label>
      <input type="text" class="form-control" id="usr" name="nama">
    </div>
    <div class="form-group">
      <label for="pwd">NIP:</label>
      <input type="password" class="form-control" id="pwd" name="nip">
    </div>
    <input type="submit" name="submit">
  </form>
</div>

</body>
</html>
