<?php if ($this->session->message): ?>
    <div class="alert alert-info">
        <?= $this->session->message ?>
    </div>
<?php endif?>
<div class="d-flex justify-content-between align-items-center">
<h2 class="my-5">Buku Induk</h2>

<a href="<?= site_url('student/create') ?>" class="btn btn-dark">
    Buat Data
</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Siswa</th>
            <th>Nomor Induk Siswa</th>
            <th>Jenis Kelamin</th>
            <th>ACTION</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($items as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->fullname ?></td>
            <td><?= $item->nis?></td>
            <td><?= $item->gender?></td>
            <td>
                <a href="<?= site_url("student/update/$item->id") ?>" class="btn btn-primary btn-sm"> 
                edit
                </a>
                <a href="<?= site_url("student/delete_process/$item->id") ?>" class="btn btn-danger btn-sm"> 
                hapus
                </a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>

</table>