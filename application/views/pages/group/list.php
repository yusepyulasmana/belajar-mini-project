<?php if ($this->session->message): ?>
    <div class="alert alert-info">
        <?= $this->session->message ?>
    </div>
<?php endif?>

<a href=" <?=site_url('group/create') ?>" class="btn btn-primary my-5">
    Tambah Kelompok
</a>
<table class="table"> 
    <thead>
        <tr>
            <th>ID</th>
            <th>SISWA</th>
            <th>KEJURUAN</th>
            <th>KELOMPOK</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $item): ?>
            <tr>
                <td><?= $item->id ?></td>
                <td><?= $item->student_fullname?></td>
                <td><?= $item->vocation_code?></td>
                <td><?= $item->team_title?></td>
                <td>
                    <a href="<?=site_url("group/update/$item->id") ?>" class="btn btn-primary btn-sm">
                        Edit
                    </a>
                    <a href="<?=site_url("group/delete_process/$item->id") ?>" class="btn btn-danger btn-sm">
                        Hapus
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

