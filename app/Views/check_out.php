
<?= $this->extend('backend/common/dheader'); ?>
<?= $this->section('content'); ?>


<div class="d-flex">
   <div class="col-md-2 mt-4 p-5"></div>
   <div class="col-md-10 mt-4 p-5">
      <h1 class="text-center p-3 mb-2 bg-success text-white">Check-out List View</h1>


      <?php
      if (isset($_SESSION['msg'])) {
         echo $_SESSION['msg'];
         }

      ?>
      <div class="mt-3 p-5">
         <table class="table table-bordered" id="bcheckout">
            <thead>
               <tr>
                  <th>Check-out Id</th>
                  <th>First Name:</th>
                  <th>Last Name:</th>
                  <th>Contract Number:</th>
                  <th>Departure date:</th>
                  <th>Check-out time:</th>
                  <!-- <th>Days of Stay</th> -->
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php if ($book) : ?>
                  <?php foreach ($book as $booking) : ?>
                     <tr>
                       <td><?php echo $booking['id']; ?></td>
                       <td><?php echo $booking['first']; ?></td>
                       <td><?php echo $booking['last']; ?></td>
                       <td><?php echo $booking['contract']; ?></td>
                       <td><?php echo $booking['depdate']; ?></td>
                       <td><?php echo $booking['deptime']; ?></td> 
                       <!-- <td><?php echo $booking['stay']; ?></td> -->
                        <td>
                        
                           <a href="<?php echo base_url('book-print/' . $booking['id']); ?>" class="btn btn-danger btn-sm">Print</a>
                           
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
      $('#bcheckout').DataTable();
   });
</script>