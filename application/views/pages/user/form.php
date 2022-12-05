<?php 
    $is_edit = isset($item);
    $target_url = $is_edit ? "user/update_process/$item->id" : 'user/create_process';

?>

    <h2 class="my-4"><?= $is_edit ? 'Edit' : 'Buat' ?> daftar </h2>

<form action="<?=site_url($target_url) ?>" method ="POST">
    <div class="form-group">
        <label>Nama Petugas</label>
        <input type="text" class = "form-control" name="username" value="<?=$is_edit ? $item->username : '' ?>">
    </div>
    
    <div class="form-group">
    <label>Nomor Induk </label>
        <input type="text" class = "form-control" name="nip" value="<?=$is_edit ? $item->NIP : '' ?>">
    </div>
   
    <div class="form-group">
    <label>Alamat email </label>
        <input type="text" class = "form-control" name="email" value="<?=$is_edit ? $item->email : '' ?>">
    </div>
    
    <div class="form-group">
    <label>Kata Kunci </label>
        <input type="text" class = "form-control" name="password" value="<?=$is_edit ? $item->password : '' ?>">
    </div>
    
    <button class="btn btn-dark">
        Submit
    </button>
</form>