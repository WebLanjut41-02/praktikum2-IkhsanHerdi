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
      <a class="navbar-brand" href="<?php echo base_url(); ?>Welcome/index">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url(); ?>paket/index">List Paket</a></li>
      <li><a href="#">Create Paket</a></li>
      <li><a href="#">Update Paket</a></li>
      <li><a href="#">Create Penghuni</a></li>
      <li><a href="#">Update Penghuni</a></li>
      <li><a href="<?php echo base_url(); ?>login/logout">logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>List Paket</h3>
 
  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tanggal Datang</th>
                  <th>Sasaran</th>
                  <th>Penerima</th>
                  <th>Isi Paket</th>
                  <th>Tanggal Ambil</th>
                </tr>
                </thead>
                <tbody>

                 <?php
                $data = $this->session->all_data;
                foreach ($data as $datapaket) { 
            ?>
 
            <tr>
                <td><?php echo $datapaket->tanggal_datang; ?></td> 
                <td><?php echo $datapaket->sasaran; ?></td>
                <td><?php echo $datapaket->penerima; ?></td>
                <td><?php echo $datapaket->isi_paket; ?></td>
                <td><?php echo $datapaket->tanggal_ambil; ?></td>

              </tr>
            <?php } ?>
                </tbody>
               
              </table>
                
</div>

</body>
</html>

