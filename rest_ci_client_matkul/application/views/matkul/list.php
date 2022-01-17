<font color="orange">
    <?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr>
        <th>ID</th>
        <th>KODE MATKUL</th>
        <th>NAMA</th>
		<th>DOSEN</th>
		<th>KELAS</th>
        <th></th>
    </tr>
    <?php
    foreach ($datamatkul as $matkul) {
        echo "<tr>
              <td>$matkul->id</td>
              <td>$matkul->kd_matkul</td>
              <td>$matkul->nama</td>
			  <td>$matkul->dosen</td>
			  <td>$matkul->kelas</td>
              <td>".anchor('matkul/edit/'.$matkul->id,'Edit')."
                  ".anchor('matkul/delete/'.$matkul->id,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
<a href="http://192.168.100.16/rest_ci_client/index.php/matkul/create"> + Tambah data</a>
