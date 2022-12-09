<?php
$is_edit = isset($item);
$target_url = $is_edit ? "classes/update_process/$item->id" : 'classes/create_process';
?>
<h2 class="my-4"><?= $is_edit ? 'Edit' : 'Buat '?> Kelas </h2>

<form action="<?=site_url($target_url) ?>" method="POST">
    <div class="form-group">
        <label>Tapel</label>
        <input type="text" class="form-control" name="year_id" value="<?= $is_edit ? $item->year_id : '' ?>">
    </div>

    <div class="form-group">
        <label>Tingkatan</label>
        <input type="text" class="form-control" name="level_id" value="<?= $is_edit ? $item->level_id : '' ?>">
    </div>

    <div class="form-group">
        <label>Kelompok</label>
        <input type="text" class="form-control" name="team_id" value="<?= $is_edit ? $item->team_id : '' ?>">
    </div>

    <button class="btn btn-dark">
        Submit
    </button>

</form>