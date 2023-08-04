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
 <?php 
 include("koneksi.php");
 $cari = mysqli_query($koneksi, "select * from mobil");
 ?>
  <div class="card ">
  <h5 class="card-header">Add Oder Data</h5>
  <div class="card-body">
 <form method="post" action="?x=sorder">

 <div class="form-group">
    <label >plat Number</label>
    <select name="polisi" class="from-control">
        <option value="">---select---</option>
        <?php
        while ($data = mysqli_fetch_array($cari)) {
            ?>
            <option value="<?php echo $data['id_mobil']; ?>"><?php echo $data['no_polisi']. " - ".$data['merk'];?>
        </option>
        <?php
        }
  ?>
</select>
  </div>

   <div class="form-group">
    <label >ID card number</label>
 <input type="text" class="form-control" name="txtKTP">
  </div>

  <div class="form-group">
    <label >Borrower Name </label>
<input type="text" class="form-control" name="txtNama">
  </div>
   
  <div class="form-group">
    <label >Gender </label>
<select name="jenkel"  class="form-control">
    <option value="">---select---</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
</select>
  </div>

  <div class="form-group">
    <label >Address </label>
<input type="text" class="form-control" name="txtAlamat">
  </div>

  <div class="form-group">
    <label >ID Number </label>
<input type="text" class="form-control" name="txtTlp">
  </div>

  <div class="form-group">
    <label >purpose  </label>
<input type="text" class="form-control" name="txtTujuan">
  </div>

 <div class="form-group">
    <label >Borrow Date </label>
<input type="Date" class="form-control" name="txtMulai">
  </div>

  <div class="form-group">
    <label >Date  of completion </label>
<input type="Date" class="form-control" name="txtSelesai">
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


  


   
 

        
        
      




 
  
 

