<?php echo form_open_multipart('matkul/create'); ?>
<table>
    <tr>
        <td>KODE MATKUL</td>
        <td><?php echo form_input('kd_matkul'); ?></td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td><?php echo form_input('nama'); ?></td>
    </tr>
	<tr>
        <td>DOSEN</td>
        <td><?php echo form_input('dosen'); ?></td>
    </tr>
	<tr>
        <td>KELAS</td>
        <td><?php echo form_input('kelas'); ?></td>
    </tr>
    <tr>
        <td colspan="2">
            <?php echo form_submit('submit', 'Simpan'); ?>
            <?php echo anchor('matkul', 'Kembali'); ?></td>
    </tr>
</table>
<?php
echo form_close();
?>
