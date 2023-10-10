<!DOCTYPE html>
<html>
<head>
  <title>Room edit file</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form method="post" id="update_room" name="update_room" 
    action="<?= site_url('/update_room') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $rooms['id']; ?>">
      <div class="form-group">
        <label>Room No:</label>
        <input type="text" name="room" class="form-control" value="<?php echo $rooms['room']; ?>">
      </div>
      <div class="form-group">
        <label>Category:</label>
        <select  class="form-select form-control" name="category">
          <option selected><?php echo $rooms['category']; ?></option>
          <option value="Deluxe Room">Deluxe Room</option>
          <option value="Family ROOM">Family ROOM</option>
          <option value="Single Room">Single Room</option>
          <option value="Twin Bed Room">Twin Bed Room</option>
        </select>
      </div>

      <div class="form-group">
        <label>Availability:</label>
        <input type="text" name="available" class="form-control" value="<?php echo $rooms['available']; ?>">
      </div>
      <div class="form-group">
        <label>Room Cost:</label>
        <input type="text" name="cost" class="form-control" value="<?php echo $rooms['cost']; ?>">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Save Data</button>
      </div>

      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>


    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_room").length > 0) {
      $("#update_room").validate({
        rules: {
            room: {
            required: true,
          },
          category: {
            required: true,
            maxlength: 60,
            category: true,
          },
          
          available: {
            required: true,
            maxlength: 60,
            available: true,
          },
          cost: {
            required: true,
            maxlength: 60,
            cost: true,
          },
          
        },
        messages: {
            room: {
            required: "Room is required.",
          },
          category: {
            required: "Category is required.",
          },

          available: {
            required: "Available number is required.",
          },
          cost: {
            required: "Cost is required.",
          },
        },
      })
    }
  </script>
</body>
</html>