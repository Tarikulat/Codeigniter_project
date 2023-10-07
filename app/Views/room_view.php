<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Room View here</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/room-form') ?>" class="btn btn-success mb-2">Add Rooms</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="room-list">
       <thead>
          <tr>
            <th>User Id</th>
             <th>Room No</th>
             <th>Category</th>
             <th>Availability</th>
             <th>Room Cost</th>
          </tr>
       </thead>
       <tbody>
          <?php if($rooms): ?>
          <?php foreach($rooms as $room): ?>
          <tr>
             <td><?php echo $room['id']; ?></td>
             <td><?php echo $room['room']; ?></td>
             <td><?php echo $room['category']; ?></td>
             <td><?php echo $room['available']; ?></td>
             <td><?php echo $room['cost']; ?></td>
             <td>
              <a href="<?php echo base_url('public/edit-view/'.$user['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('public/delete/'.$user['id']);?>" class="btn btn-danger btn-sm">Delete</a>
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
    $(document).ready( function () {
      $('#rooms-list').DataTable();
  } );
</script>
</body>
</html>