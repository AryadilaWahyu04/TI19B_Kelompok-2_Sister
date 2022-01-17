<?php echo form_open_multipart('mahasiswa/create');?>
<table>
    <tr><td>NIM</td><td><?php echo form_input('nim');?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama');?></td></tr>
    <tr><td>NOMOR</td><td><?php echo form_input('nomor');?></td></tr>
    <tr><td>ALAMAT</td><td><?php echo form_input('alamat');?></td></tr>    
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mahasiswa','Kembali');?></td></tr>
</table>

