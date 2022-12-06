<?php if ($this->session->message): ?>
    <div class="alert alert-info">
        <?= $this->session->message ?>
    </div>
<?php endif?>
<div class="d-flex justify-content-between align-items-center">
<h2 class="my-5">Daftar Kelas</h2>

<a href="<?= site_url('team/create') ?>" class="btn btn-dark">
    Buat Kelas
</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Kelas</th>
            <th>ACTION</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($items as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->title?></td>
            <td>
                <a href="<?= site_url("team/update/$item->id") ?>" class="btn btn-primary btn-sm"> 
                edit
                </a>
                <a href="<?= site_url("team/delete_process/$item->id") ?>" class="btn btn-danger btn-sm"> 
                hapus
                </a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>

</table>