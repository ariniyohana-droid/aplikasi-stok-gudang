

<?php $__env->startSection('title','Data Barang'); ?>

<?php $__env->startSection('content'); ?>

<h1>Data Barang</h1>

<div class="d-flex justify-content-end mb-3">

    <a href="/barang/tambah"
       class="btn btn-primary">

        <i class="fa-solid fa-plus"></i>
        Tambah Barang

    </a>

</div>

<div class="card-box">

    <table class="table">

        <thead>
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jenis</th>
            <th>Satuan</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        </thead>

        <tbody>

        <tr>
            <td>1</td>
            <td>AL001</td>
            <td>Hollow 4x4</td>
            <td>Hollow</td>
            <td>Batang</td>
            <td>130</td>
            <td>
                <button class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-pen"></i>
                </button>

                <button class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>AL002</td>
            <td>Plat Aluminium 2mm</td>
            <td>Plat</td>
            <td>Lembar</td>
            <td>40</td>
            <td>
                <button class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-pen"></i>
                </button>

                <button class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </td>
        </tr>

        </tbody>

    </table>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\stok_gudang\resources\views/barang/index.blade.php ENDPATH**/ ?>