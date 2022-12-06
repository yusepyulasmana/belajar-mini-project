<?php if ($this->session->message): ?>
    <div class="alert alert-info">
        <?= $this->session->message ?>
    </div>
<?php endif?>
<div class="d-flex justify-content-between align-items-center">
<h2 class="my-5">Kompetensi Keahlian</h2>

<a href="<?= site_url('vocation/create') ?>" class="btn btn-dark">
    Buat Kompetensi
</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>DI</th>
            <th>Kompetensi Keahlian</th>
            <th>Kode Keahlian</th>
            <th>ACTION</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($items as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->name?></td>
            <td><?= $item->code?></td>
            <td>
                <a href="<?= site_url("vocation/update/$item->id") ?>" class="btn btn-primary btn-sm"> 
                edit
                </a>
                <a href="<?= site_url("vocation/delete_process/$item->id") ?>" class="btn btn-danger btn-sm"> 
                hapus
                </a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>

</table>