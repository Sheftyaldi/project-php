<?php

    $id=$_GET['id'];

    require_once 'connect.php';

    $query = mysqli_query($connect, "SELECT * FROM mahasiswa where id=$id");

    while($hasil = mysqli_fetch_array($query)) {

  

?>

    
<div class="container mt-3">
  <h2>Edit Data</h2>
  <form action="controller/proses_edit_data.php" method="post">
    <input type="hidden" value="<?php echo $hasil['id'] ?>" name="id">
    <div class="mb-3 mt-3">
      <label>Nama:</label>
      <input type="teks" class="form-control" value="<?php echo $hasil['Nama'] ?>" name="nama">
    </div>
    <div class="mb-3 mt-3">
      <label>Nim:</label>
      <input type="teks" class="form-control" value="<?php echo $hasil['Nim'] ?>" name="nim">
    </div>
    <div class="mb-3 mt-3">
      <label>Jurusan:</label>
      <input type="teks" class="form-control" value="<?php echo $hasil['Jurusan'] ?>" name="jurusan">
    </div>
    <button type="submit" class="btn btn-primary">Edit Data</button>
  </form>
</div>

<?php

    }

?>