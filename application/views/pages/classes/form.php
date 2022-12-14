<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Select2</title>
	    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </head>

    <body>
        <?php
        $is_edit = isset($item);
        $target_url = $is_edit ? "classes/update_process/$item->id" : 'classes/create_process';
        ?>
        <h2 class="my-4"><?= $is_edit ? 'Edit' : 'Buat '?> Kelas </h2>
        <form action="<?=site_url($target_url) ?>" method="POST">  
            <div class="form-group">
                <label>
                    Tahun Pelajaran: <br>
                    <select id="select-year" style="width: 350px;"  name="year_id">
                        <?php foreach ($year_options as $year): ?>
                            <option value="<?= $year->id ?>"<?= $is_edit && $item->year_id == $year->id ? 'selected' : "" ?>>
                                <?= $year->year ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </label>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	            <script>
		            $('#select-year').select2({
			            placeholder: 'Silahkan pilih Tapel',
			            allowClear: true
		            })
	            </script>
                <br> <br>
            </div>
            <div class="form-group">
                <label>
                        Kelompok: <br>
                    <select id="select-group" style="width: 350px;" name="group_id">
                        <?php foreach ($group_options as $id): ?>
                            <option value="<?= $id->id ?>" <?= $is_edit && $item->group_id == $id->id ? 'selected' : "" ?>>
                                <?= $id->id?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </label>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	            <script>
		            $('#select-group').select2({
			            placeholder: 'Silahkan pilih kelompok',
			            allowClear: true
		            })
	            </script>
                <br> <br>
            </div>

            <div class="form-group">
                <label>
                    Nama Siswa: <br>
                    <select id="select-fullname" style="width: 350px;" name="student_id">
                        <?php foreach ($student_options as $fullname): ?>
                            <option value="<?= $fullname->id ?>" <?= $is_edit && $item->student_id == $fullname->id ? 'selected' : "" ?>>
                                <?= $fullname->fullname?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </label>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	            <script>
		            $('#select-fullname').select2({
			            placeholder: 'Silahkan pilih Nama',
			            allowClear: true
		            })
	            </script>
                <br> <br>
            </div>

            <button class="btn btn-dark">
                Submit
            </button>
        </form>  
    </body>
</html>
    