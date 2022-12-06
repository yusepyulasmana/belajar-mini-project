<?php
    $is_edit = isset($item);
    $target_url = $is_edit ? "team/update_process/$item->id" : 'team/create_process';
?>
    <h2 class="my-4"><?= $is_edit ? 'Edit' : 'Buat ' ?>  Kelas </h2>

<form action="<?=site_url($target_url) ?>" method="POST">
    <div class="form-group">
        <label>Daftar Kelas</label>
        <input type="text" class="form-control" name="title" value="<?= $is_edit ? $item->title : '' ?>">
    </div>

    <button class="btn btn-dark">
        Submit
    </button>

</form>