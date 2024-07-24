<div class="container mt-3">
  <h2>Data Mahasiswa</h2>          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Jurusan</th>
        <th colspan="2">AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php

      require_once 'connect.php';

      $query = mysqli_query($connect, "SELECT * FROM mahasiswa" );
      $no = 0;
      while($hasil = mysqli_fetch_array($query)) {
        $no++;
      ?>
      <tr>
        <td><?php echo $no?></td>
        <td><?php echo $hasil['Nama']?></td>
        <td><?php echo $hasil['Nim']?></td>
        <td><?php echo $hasil['Jurusan']?></td>
        <td><a href="" data-bs-toggle="modal" data-bs-target="#myModal" onclick="editData('<?php echo $hasil['id']?>')"><i class="fa fa-edit" style="font-size:21px;color:#3385ff"></i></a></td>
        <td><a href="controller/proses_delete_data.php?id=<?php echo $hasil['id']?>" onclick="return confirm('Yakin akan menghapus data <?php echo $hasil['Nama']?>?')"><i class="fa fa-trash-o" style="font-size:21px;color:red"></i></a></td>
      </tr>
      <?php

      }

      ?>
    </tbody>
  </table>
</div>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Data Mahasiswa</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="hasil"></div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

      <script> 
       $.ajax({
          type : 'post',
          url : 'views/form_edit_modal.php',
          data : {id:a},
          succes : function (response) {
            $.('#hasil').html(response);
          }
        });
      </script>



