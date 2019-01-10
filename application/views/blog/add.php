<h3>Add data</h3>
<a href="<?php echo base_url('blog/index') ?>" class="btn btn-primary">Kembali</a>
<form enctype="multipart/form-data" action="<?php echo base_url('blog/submit') ?>" method="post" class="form-horizontal">

<div class="form-group">
    <label for="nama">upload gambar</label>
    <input type="file" name="image">
</div>
<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="txt_nama">
</div>
<div class="form-group">
    <label for="alamat">alamat</label>
    <input type="text" name="txt_alamat">
</div>
<div class="form-group">
    <input type="submit" name="tombolSimpan" class="btn btn-success" value="Simpan">
</div>
</form>