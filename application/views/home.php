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

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url(); ?>paket/index">List Paket</a></li>
      <li><a href="#">Create Paket</a></li>
      <li><a href="#">Update Paket</a></li>
      <li><a href="#">Create Penghuni</a></li>
      <li><a href="#">Update Penghuni</a></li>
      <li><a href="<?php echo base_url(); ?>login/logout">logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Akun yang sedang login Login</h3>
  <?php 
    echo 'Nama Karyawan  : <b>'.$this->session->userdata('data')['Nama'].'</b>';
    echo '<br><br>';
    echo 'NIP  : <b>'.$this->session->userdata('data')['NIP'].'</b>';
  ?>
                
</div>

</body>
</html>

