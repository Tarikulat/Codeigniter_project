<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Booking From</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
   <div class="container mt-4 p-5">
      <h1 class="text-success text-center">New Booking List</h1>

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
                           <a href="<?php echo base_url('public/book-edit/'.$booking['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                           <a href="<?php echo base_url('public/book-delete/' . $booking['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                     </tr>
                  <?php endforeach; ?>
               <?php endif; ?>
            </tbody>
         </table>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
   <script>
      $(document).ready(function() {
         $('#book-list').DataTable();
      });
   </script>
</body>

</html>