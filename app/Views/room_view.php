<?= $this->extend('backend/common/dheader'); ?>
<?= $this->section('content'); ?>

<div class="d-flex">
  <div class="col-md-2 mt-4 p-5"></div>
  <div class="col-md-10 mt-4 p-5">
    <h1 class="text-center p-3 mb-2 bg-success color-white">Rooms Catagory List</h1>

    <div class="d-flex justify-content-end">
      <a href="<?php echo site_url('/room_add') ?>" class="btn btn-success mb-2">Add Rooms</a>
    </div>
    <?php
    if (isset($_SESSION['msg'])) {
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
          <?php if ($rooms) : ?>
            <?php foreach ($rooms as $room) : ?>
              <tr>
                <td><?php echo $room['id']; ?></td>
                <td><?php echo $room['room']; ?></td>
                <td><?php echo $room['category']; ?></td>
                <td><?php echo $room['available']; ?></td>
                <td><?php echo $room['cost']; ?></td>
                <td>
                  <a href="<?php echo base_url('edit-view/' . $room['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                  <a href="<?php echo base_url('delete/' . $room['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
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
    $('#rooms-list').DataTable();
  });
</script>
</body>

</html>