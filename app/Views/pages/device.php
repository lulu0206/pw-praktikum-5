<?= $this->extend('layout/template'); ?>

<?= $this->section('conten'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Device</h1>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Device name</th>
                                    <th scope="col">Device brand</th>
                                    <th scope="col">Device quantity</th>
                                    <th scope="col">Device status</th>
                                    <th scope="col">Lebih lengkap</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><img src="/img/keyboard.jpeg" alt"" class="sampul"></td>
                                    <td>Keyboard</td>
                                    <td>LG</td>
                                    <td>50</td>
                                    <td>Baik</td>
                                    <td>
                                        <a href="" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>