<?php if ($this->session->message): ?>
    <div class="alert alert-info">
        <?= $this->session->message ?>
    </div>
<?php endif?>
<div class="d-flex justify-content-between align-items-center"> 
    <h2 class="my-5">Daftar Librarian</h2>
    <a href="<?=site_url('user/create') ?>" class="btn btn drak">
        Masukan data 
    </a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>PETUGAS</th>
            <th>INDUK</th>
            <th>EMAIL</th>
            <th>KATA KUNCI</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($items as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->username ?></td>
            <td><?= $item->NIP?></td>
            <td><?= $item->email?></td>
            <td><?= $item->password?></td>
            <td>
            <a href="<?= site_url("user/update/$item->id") ?>" class="btn btn-primary btn-sm"> 
                edit
                </a>
                <a href="<?= site_url("user/delete_process/$item->id") ?>" class="btn btn-danger btn-sm"> 
                hapus
                </a>

            </td>
        </tr>
        <?php endforeach ?>
    </tbody>

</table>
