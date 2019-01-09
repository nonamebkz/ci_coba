<?php
if ($this->session->flashdata('sukses')) {
    ?>
<div class="alert alert-success"><?php echo $this->session->flashdata('sukses');
                                ?></div>
                                <?php 
                            } ?>

<a href="<?php echo base_url('blog/add') ?>">tambah</a>    
<h2>Data orang</h2>
    <table class="table">
        <tr>
        <th>no</th>
        <th>nama</th>
        <th>alamat</th>
        <th>aksi</th>
        </tr>
        <?php
        if ($listdata) {
            foreach ($listdata as $data) {
                ?>
        <tr>
        <td><?php echo $data->id; ?></td>
        <td><?php echo $data->nama; ?></td>
        <td><?php echo $data->alamat; ?></td>
        <td>
        <a href="<?php echo base_url('blog/edit/' . $data->id); ?>" class="btn btn-primary">Edit</a>
        <a href="<?php echo base_url('blog/delete/' . $data->id); ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus data ini?')">hapus</a>
        </td>
        </tr>
        <?php

    }
}
?>
    </table>
