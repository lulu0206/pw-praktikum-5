<?= $this->extend('layout/template'); ?>

<?= $this->section('conten'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Device detail</h1>
            <?php foreach ($tabel as $a) : ?>
                <ul>
                    <li><?= $a['id']; ?></li>
                    <li><?= $a['brand']; ?></li>
                    <li><?= $a['status']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>