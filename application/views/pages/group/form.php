<?php
    $is_edit = isset($item);
    $action_url = $is_edit ? "group/update_process/$item->id" : 'group/create_process';
?>
<h2 class="my-4"><?= $is_edit ? 'Edit' : 'Buat '?> Kelas </h2>
<form action="<?= site_url($action_url) ?>" method="post">
    <div class="form-group">
        <label>Daftar Kelompok</label>
        <br>
        <label>Tingkatan</label>
        <select class="form-control" name="level_id">
            <?php foreach ($level_options as $level): ?>
                <option value="<?= $level->id ?>" <?= $is_edit && $item->level_id == $level->id ? 'selected' : " " ?>>
                <?= $level->level ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
        <label>Keahlian</label>
        <select class="form-control" name="vocation_id">
            <?php foreach ($vocation_options as $vocation): ?>
                <option value="<?= $vocation->id ?>" <?= $is_edit && $item->vocation_id == $vocation->id ? 'selected' : "" ?>>
                <?= $vocation->code ?>
                </option>
            <?php endforeach ?>
        </select>
    
    </div>
    <div class="form-group">
        <label>KELOMPOK</label>
        <select class="form-control" name="team_id">
            <?php foreach ($team_options as $team): ?>
                <option value="<?= $team->id ?>" <?= $is_edit && $item->team_id == $team->id ? 'selected' : "" ?>>
                <?= $team->title?>
                </option>
            <?php endforeach ?>
        </select>
    </div>
    <button class="btn btn-primary">
        SUBMIT
    </button>
</form>