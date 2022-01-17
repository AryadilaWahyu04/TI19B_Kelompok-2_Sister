<?php echo form_open('mahasiswa/edit');?>
<?php echo form_hidden('id',$datamahasiswa[0]->id);?>

<table>
    <tr><td>ID</td><td><?php echo form_input('',$datamahasiswa[0]->id,"disabled");?></td></tr>
    <tr><td>NIM</td><td><?php echo form_input('nim',$datamahasiswa[0]->nim);?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama',$datamahasiswa[0]->nama);?></td></tr>
    <tr><td>NOMOR</td><td><?php echo form_input('nomor',$datamahasiswa[0]->nomor);?></td></tr>
    <tr><td>ALAMAT</td><td><?php echo form_input('alamat',$datamahasiswa[0]->alamat);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mahasiswa','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
