<?php if ($this->session->message): ?>
    <div class="alert alert-info">
        <?= $this->session->message ?>
    </div>
<?php endif?>

<a href=" <?=site_url('classes/create') ?>" class="btn btn-primary my-5">
    Tambah Kelas
</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>TAPEL</th>
            <th>KELOMPOK</th>
            <th>TINGKATAN</th>
            <th>ACTION</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($items as $item): ?>
        <tr>
            <td><?= $item->id?></td>
            <td><?= $item->year_id?></td>
            <td><?= $item->group_id?></td>
            <td><?= $item->level_id?></td>
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