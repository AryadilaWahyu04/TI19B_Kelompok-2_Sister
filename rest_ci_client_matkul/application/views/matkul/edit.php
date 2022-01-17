<?php echo form_open('matkul/edit'); ?>
<?php echo form_hidden('id', $datamatkul[0]->id); ?>

<table>
    <tr>
        <td>ID</td>
        <td><?php echo form_input('', $datamatkul[0]->id, "disabled"); ?></td>
    </tr>
    <tr>
        <td>KODE MATKUL</td>
        <td><?php echo form_input('kd_matkul', $datamatkul[0]->kd_matkul); ?></td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td><?php echo form_input('nama', $datamatkul[0]->nama); ?></td>
    </tr>
	<tr>
        <td>DOSEN</td>
        <td><?php echo form_input('dosen', $datamatkul[0]->dosen); ?></td>
    </tr>
	<tr>
        <td>KELAS</td>
        <td><?php echo form_input('kelas', $datamatkul[0]->kelas); ?></td>
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
