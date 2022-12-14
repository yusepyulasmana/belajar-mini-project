<?php 
    $is_edit = isset($item);
    $target_url = $is_edit ? "student/update_process/$item->id" : 'student/create_process';
?>
    <h2 class="my-4"><?= $is_edit ? 'Edit' : 'Buat ' ?>  Data </h2>

<form action="<?=site_url($target_url) ?>" method="POST">


    <div class="form-group row">
        <label for="inputfullname" class="col-sm-2 col-form-label">Nama Siswa</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="fullname" value="<?= $is_edit ? $item->fullname : '' ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputNis" class="col-sm-2 col-form-label">Nomor Induk Siswa</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="nis" value="<?= $is_edit ? $item->nis : '' ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
        <div class="col-sm-5">
        <input type="enum" class="form-control" name="gender" value="<?= $is_edit ? $item->gender : '' ?>">
        </div>
    </div>

    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"> Submit</button>
    </div>
  </div>
</form>


