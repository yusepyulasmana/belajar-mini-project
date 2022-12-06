<?php
    $is_edit = isset($item);
    $target_url = $is_edit ? "level/update_process/$item->id" : 'level/create_process';
?>
    <h2 class="my-4"><?= $is_edit ? 'Edit' : 'Buat ' ?>  Tingkatan </h2>

<form action="<?=site_url($target_url) ?>" method="POST">
    <div class="form-group">
        <label>Tingkatan</label>
        <input type="text" class="form-control" name="level" value="<?= $is_edit ? $item->level : '' ?>">
    </div>

    <button class="btn btn-dark">
        Submit
    </button>

</form>