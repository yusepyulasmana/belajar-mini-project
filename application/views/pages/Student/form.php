<?php 
    $is_edit = isset($item);
    $target_url = $is_edit ? "student/update_process/$item->id" : 'student/create_process';
?>
    <h2 class="my-4"><?= $is_edit ? 'Edit' : 'Buat ' ?>  Data </h2>

<form action="<?=site_url($target_url) ?>" method="POST">
    <div class="form-group">
        <label> Nama Siswa</label>
        <input type="text" class="form-control" name="fullname" value="<?= $is_edit ? $item->fullname : '' ?>">
    </div>

    <div class="form-group">
        <label>Nomor Induk Siswa</label>
        <input type="text" class="form-control" name="nis" value="<?= $is_edit ? $item->nis : '' ?>">
    </div>

    <div class="form-group">
        <label>gender</label>
        <input type="Enum" class="form-control" name="gender" value="<?= $is_edit ? $item->gender : '' ?>">
    </div>

    <button class="btn btn-dark">
        Submit
    </button>

</form>
