<?php $__env->startSection('header'); ?>
    <table style="width: 100%">
        <tr>
            <td style="width: 15%" class="font-weight-bold">Siswa:</td>
            <td style="width: 50%"><?php echo e($student->name . ' - ' . $student->nisn); ?></td>
            <td style="width: 15%" class="font-weight-bold">Tanggal Cetak:</td>
            <td style="width: 20%; text-align: right"><?php echo e(\Carbon\Carbon::now()->isoFormat('DD-MM-Y')); ?></td>
        </tr>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal Bayar</th>
            <th scope="col">Bulan Dibayar</th>
            <th scope="col">Tahun Dibayar</th>
            <th scope="col">Nominal</th>
            <th scope="col">Petugas Penerima</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td><?php echo e(\Carbon\Carbon::parse($payment->paid_at)->isoFormat('DD-MM-Y')); ?></td>
                <td><?php echo e($payment->paid_month); ?></td>
                <td><?php echo e($payment->paid_year); ?></td>
                <td><?php echo e("Rp" . number_format($payment->amount,2,',','.')); ?></td>
                <td><?php echo e($payment->staff?->name); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pdf', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplikasi-pembayaran-spp-main\resources\views/pages/payment/print.blade.php ENDPATH**/ ?>