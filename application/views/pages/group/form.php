<?php
    $is_edit = isset($item);
    $action_url = $is_edit ? "group/update_process/$item->id" : 'group/create_process';
?>
<form action="<?= site_url($action_url) ?>" method="post">
    <div class="form-group">
        <label>Daftar Kelompok</label>
    
    </div>
    <div class="form-group">
        <label>Siswa</label>
        <input type="Int" class="form-control" name="student_id" value="<?= $is_edit ? $item->student_id : ''?>">
    </div>
    <div class="form-group">
        <label>Keahlian</label>
        <input type="Int" class="form-control" name="vocation_id" value="<?= $is_edit ? $item->vocation_id : ''?>">
    </div>
    <div class="form-group">
        <label>Kelompok</label>
        <input type="Int" class="form-control" name="team_id" value="<?= $is_edit ? $item->team_id : ''?>">
    </div>
    <button class="btn btn-primary">
        SUBMIT
    </button>
</form>