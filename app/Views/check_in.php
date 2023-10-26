<?= $this->extend('backend/common/dheader'); ?>
<?= $this->section('content'); ?>


<div class="d-flex">
    <div class="col-md-2 mt-4 p-5"></div>
    <div class="col-md-10 mt-4 p-5">
        <h1 class="text-center p-3 mb-2 bg-success text-white">Check in List View</h1>

        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
        }
        ?>
        <div class="mt-3 p-5">
            <table class="table table-bordered" id="bcheckin">
                <thead>
                    <tr>
                        <th>Check-in Id</th>
                        <th>Adress:</th>
                        <th>Number of guests:</th>
                        <th>Arrival date:</th>
                        <th>Check-in time:</th>
                        <th>Days of Stay</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ($book) : ?>
                        <?php foreach ($book as $booking) : ?>
                            <tr>
                                <td><?php echo $booking['id']; ?></td>
                                <td><?php echo $booking['address']; ?></td>
                                <td><?php echo $booking['personq']; ?></td>
                                <td><?php echo $booking['arridate']; ?></td>
                                <td><?php echo $booking['arritime']; ?></td>
                                <td><?php echo $booking['stay']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('book-forms/' . $booking['id']); ?>" class="btn btn-success btn-sm">Check-in</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>
<script>
    $(document).ready(function() {
        $('#bcheckin').DataTable();
    });
</script>