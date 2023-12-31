<?= $this->extend('backend/common/dheader'); ?>
<?= $this->section('content'); ?>

<div class="d-flex ">
   <div class="col-md-2 mt-4 p-5"></div>
   <div class="col-md-10 mt-4 p-5">
      <div class="d-flex justify-content-end">
      <h1 class="text-center p-3 mb-2 bg-primary text-white">Employ Details</h1>
         <a href="<?php echo site_url('employ_add') ?>" class="btn btn-success mb-2">Add Employ</a>
      </div>
      <?php
      if (isset($_SESSION['msg'])) {
         echo $_SESSION['msg'];
      }
      ?>
      <div class="mt-3">
         <table class="table table-bordered" id="empoly-list">
            <thead>
               <tr>
                  <th>User Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Age</th>
                  <th>Employee Designation</th>
                  <th>Image</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php if ($employs) : ?>
                  <?php foreach ($employs as $employ) : ?>
                     <tr>
                        <td><?php echo $employ['id']; ?></td>
                        <td><?php echo $employ['name']; ?></td>
                        <td><?php echo $employ['email']; ?></td>
                        <td><?php echo $employ['phone']; ?></td>
                        <td><?php echo $employ['age']; ?></td>
                        <td><?php echo $employ['cata_name']; ?></td>
                        <td><img src="<?= base_url('uploads/img/'.$employ['image']);?>" alt="" srcset="" width="50"></td>

                        <td>
                           <a href="<?= base_url('/employ_edit/'). $employ['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                           <a href="<?= base_url('/delete_employ/'). $employ['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
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
      $('#employ-list').DataTable();
   });
</script>
<!-- </body>

</html> -->