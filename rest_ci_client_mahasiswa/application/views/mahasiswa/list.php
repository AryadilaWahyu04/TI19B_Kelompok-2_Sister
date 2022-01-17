<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr><th>ID</th><th>NIM</th><th>NAMA</th><th>NOMOR</th><th>ALAMAT</th><th></th></tr>
    <?php
    foreach ($datamahasiswa as $mahasiswa){
        echo "<tr>
              <td>$mahasiswa->id</td>
              <td>$mahasiswa->nim</td>
              <td>$mahasiswa->nama</td>
              <td>$mahasiswa->nomor</td>
              <td>$mahasiswa->alamat</td>
              <td>".anchor('mahasiswa/edit/'.$mahasiswa->id,'Edit')."
                  ".anchor('mahasiswa/delete/'.$mahasiswa->id,'Delete')."</td>
              </tr>";
    }
    ?>
</table>

<a href="http://192.168.100.5/rest_ci_client/index.php/mahasiswa/create"> + Tambah data</a>
