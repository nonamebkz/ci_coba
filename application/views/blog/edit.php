<h3>Update data</h3>
<a href="<?php echo base_url('blog/index') ?>" class="btn btn-primary">Kembali</a>
<form action="<?php echo base_url('blog/update') ?>" method="post" class="form-horizontal">
<input type="hidden" value="<?php echo $databyid->id;?>" name="txt_id">
<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="txt_nama" value="<?php echo $databyid->nama;?>">
</div>
<div class="form-group">
    <label for="alamat">alamat</label>
    <input type="text" name="txt_alamat" value="<?php echo $databyid->alamat;?>">
</div>
<div class="form-group">
    <input type="submit" name="tombolUpdate" class="btn btn-success" value="Update">
</div>
</form>