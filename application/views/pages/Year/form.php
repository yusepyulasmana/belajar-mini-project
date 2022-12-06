<?php
    $is_edit = isset($item);
    $target_url = $is_edit ? "year/update_process/$item->id" : 'year/create_process';
?>
    <h2 class="my-4"><?= $is_edit ? 'Edit' : 'Buat ' ?>  Tapel </h2>

<form action="<?=site_url($target_url) ?>" method="POST">
    <div class="form-group">
        <label>Daftar Tapel</label>
        <input type="text" class="form-control" name="year" value="<?= $is_edit ? $item->year : '' ?>">
    </div>

    <button class="btn btn-dark">
        Submit
    </button>

</form>