<?php
$is_edit = isset($item);
$target_url = $is_edit ? "classes/update_process/$item->id" : 'classes/create_process';
?>
<h2 class="my-4"><?= $is_edit ? 'Edit' : 'Buat '?> Kelas </h2>

<form action="<?=site_url($target_url) ?>" method="POST">
    <div class="form-group">
        <label>Tapel</label>
        <select class="form-control" name="student_id">
            <?php foreach ($year_options as $year): ?>
                <option value="<?= $year->id ?>" <?= $is_edit && $item->year_id == $year->id ? 'selected' : "" ?>>
                <?= $year->year ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
        <label>Kelompok</label>
        <select class="form-control" name="student_id">
            <?php foreach ($level_options as $level): ?>
                <option value="<?= $level->id ?>" <?= $is_edit && $item->level_id == $level->id ? 'selected' : "" ?>>
                <?= $level->level ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
        <label>Tingkatan</label>
        <select class="form-control" name="student_id">
            <?php foreach ($group_options as $group): ?>
                <option value="<?= $group->id ?>" <?= $is_edit && $item->group_id == $group->id ? 'selected' : "" ?>>
                <?= $group->id ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>

    <button class="btn btn-dark">
        Submit
    </button>

</form>