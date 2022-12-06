<?php 
    $is_edit = isset($item);
    $target_url = $is_edit ? "vocation/update_process/$item->id" : 'vocation/create_process';
?>
    <h2 class="my-4"><?= $is_edit ? 'Edit' : 'Buat ' ?>  Kejuruan </h2>

<form action="<?=site_url($target_url) ?>" method="POST">
    <div class="form-group">
        <label>Kompetensi Keahlian</label>
        <input type="text" class="form-control" name="name" value="<?= $is_edit ? $item->name : '' ?>">
    </div>

    <div class="form-group">
        <label>Kode Kompetensi</label>
        <input type="text" class="form-control" name="code" value="<?= $is_edit ? $item->code : '' ?>">
    </div>

    
    <button class="btn btn-dark">
        Submit
    </button>

</form>