<?php if ($this->session->message): ?>
    <div class="alert alert-info">
        <?= $this->session->message ?>
    </div>
<?php endif?>
<div class="d-flex justify-content-between align-items-center">
<h2 class="my-5">Daftar Tingkatan</h2>

<a href="<?= site_url('level/create') ?>" class="btn btn-dark">
    Buat Tingkatan
</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tingkatan</th>
            <th>ACTION</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($items as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->level?></td>
            <td>
                <a href="<?= site_url("level/update/$item->id") ?>" class="btn btn-primary btn-sm"> 
                edit
                </a>
                <a href="<?= site_url("level/delete_process/$item->id") ?>" class="btn btn-danger btn-sm"> 
                hapus
                </a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>

</table>