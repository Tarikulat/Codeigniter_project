
<?= $this->extend('backend/common/dheader');?>
<?= $this->section('content');?>


<div class="d-flex">
   <div class="col-md-2 mt-4 p-5"></div>
   <div class="col-md-10 mt-4 p-5">
      <h1 class="text-center p-3 mb-2 bg-success text-white">New Booking List</h1>

      <?php
      if (isset($_SESSION['msg'])) {
         echo $_SESSION['msg'];
      }
      ?>
      <div class="mt-3 p-5">
         <table class="table table-bordered" id="book-list">
            <thead>
               <tr>
                  <th >Booking Id</th>
                  <!-- <th>Adress:</th> -->
                  <th>Room Type:</th>
                  <th>Room Price:</th>
                  <th>Number of Guests:</th>
                  <!-- <th>First Name:</th>
                  <th>Last Name:</th> -->
                  <th>Contract Number:</th>
                  <th>Arrival date:</th>
                  <!-- <th>Check-in time:</th>
                  <th>Departure date:</th>
                  <th>Check-out time:</th> -->
                  <th>Days of Stay</th>
                  <th>Status</th>
                  <th>Action</th>
                  
               </tr>
            </thead>
            <tbody>
               <?php if ($book) : ?>
                  <?php foreach ($book as $booking) : ?>
                     <tr>
                        <td><?php echo $booking['id']; ?></td>

                        <!-- <td><?php echo $booking['address']; ?></td> -->
                        <td><?php echo $booking['type_name']; ?></td>
                        <td><?php echo $booking['room_price']; ?></td>

                        <td><?php echo $booking['personq']; ?></td>

                        <!-- <td><?php echo $booking['first']; ?></td>
                        <td><?php echo $booking['last']; ?></td> -->

                        <td><?php echo $booking['contract']; ?></td>
                        <td><?php echo $booking['arridate']; ?></td>
                        <!-- <td><?php echo $booking['arritime']; ?></td>
                        <td><?php echo $booking['depdate']; ?></td>
                        <td><?php echo $booking['deptime']; ?></td> -->

                        <td><?php echo $booking['stay']; ?></td>
                        <td><?php echo $booking['status']; ?></td>
                        <td>
                           <a href="<?php echo base_url('book-print/'.$booking['id']); ?>" class="btn btn-warning btn-sm">Views</a>
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
