<?php
    $is_edit = isset($item);
    $action_url = $is_edit ? "group/update_process/$item->id" : 'group/create_process';
?>
<form action="<?= site_url($action_url) ?>" method="post">
    <div class="form-group">
        <label>Daftar Kelompok</label>
        <label>Siswa</label>
        <select class="form-control" name="student_id">
            <?php foreach ($student_options as $student): ?>
                <option value="<?= $student->id ?>" <?= $is_edit && $item->student_id == $student->id ? 'selected' : "" ?>>
                <?= $student->fullname ?>
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