<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      body{
        background-color:lightblue;
        font-family: arial;
        
      }
      </style>
  </head>
  <body>

  <div class="card ">
  <h5 class="card-header">Update Admin Data</h5>
  <div class="card-body">
 <form method="post" action="?x=uadmin">
        <?php
            include("koneksi.php");
            $id = $_GET['id'];
            $cari = mysqli_query($koneksi,"select * from admin  where id_admin='$id'") or die  (mysqli_error());

            $data = mysqli_fetch_array($cari);

        ?>
        <input type="hidden" name="kode" value="<?php echo $data['id_admin'];?>">

 <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="txtNama" value="<?php echo $data['nama_admin']; ?>">
  </div>

  <div class="form-group">
    <label >gender</label>
    <select name="kelamin" class="form-control">
    <option value="<?php echo $data['jenkel_admin']; ?>"><?php echo $data ['jenkel_admin']; ?></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option> 
       
    </select>
  </div>


  <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="txtusername" value="<?php echo $data['username']; ?>">
  </div>

<div class="form-group">
      <label >Password</label>
    <input type="password" class="form-control" name="txtpassword" value="<?php echo $data['password']; ?>">
  </div>
  <div class="form-group">
    <label >Level</label>
    <select name="level" class="form-control">
        <option value=""><?php echo $data['level']; ?></option>
        <option value="ADMIN">ADMIN</option>
        <option value="SUPER">SUPER</option>
    </select>
  </div>
 <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
</div>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>