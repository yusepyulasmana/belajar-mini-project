<?php if ($this->session->message): ?>
    <div class="alert alert-info">
        <?= $this->session->message ?>
    </div>
<?php endif?>

<a href=" <?=site_url('classes/create') ?>" class="btn btn-primary my-5">
    Tambah Kelas
</a>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">TAPEL</th>
        <th scope="col">KELOMPOK</th>
        <th scope="col">NAMA SISWA</th>
        <th scope="col">ACTION</th>
        
        </tr>
    </thead>

    <tbody>
        <?php foreach($items as $item): ?>
        <tr>
            <td><?= $item->id?></td>
            <td><?= $item->year?></td>
             <td><?= $item->group_name?></td>
             <td><?= $item->fullname?></td>
           
            <td>
                <a href="<?=site_url("classes/update/$item->id") ?>" class="btn btn-primary btn-sm">
                    Edit
                </a>
                <a href="<?=site_url("classes/delete_process/$item->id") ?>" class="btn btn-danger btn-sm">
                    Hapus
                </a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
    
</table>