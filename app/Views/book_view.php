<?= $this->extend('backend/common/dheader');?>
<?= $this->section('content');?>


<div class="d-flex">
   <div class="col-md-2 mt-4 p-5"></div>
   <div class="col-md-10 mt-4 p-5">
      <h1 class="text-center p-3 mb-2 bg-danger text-white">New Booking List</h1>

      <?php
      if (isset($_SESSION['msg'])) {
         echo $_SESSION['msg'];
      }
      ?>
      <div class="mt-3">
         <table class="table table-bordered" id="book-list">
            <thead>
               <tr>
                  <th>Booking Id</th>
                  <th>Name</th>
                  <th>Contart</th>
                  <th>Check-in Date</th>
                  <th>Check-in Time</th>
                  <th>Days of Stay</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php if ($book) : ?>
                  <?php foreach ($book as $booking) : ?>
                     <tr>
                        <td><?php echo $booking['id']; ?></td>
                        <td><?php echo $booking['name']; ?></td>
                        <td><?php echo $booking['contract']; ?></td>
                        <td><?php echo $booking['date']; ?></td>
                        <td><?php echo $booking['time']; ?></td>
                        <td><?php echo $booking['stay']; ?></td>
                        <td>
                           <a href="<?php echo base_url('book-edit/'.$booking['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                           <a href="<?php echo base_url('book-delete/' . $booking['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                     </tr>
                  <?php endforeach; ?>
               <?php endif; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<?= $this->endSection('content');?>
   <script>
      $(document).ready(function() {
         $('#book-list').DataTable();
      });
   </script>
