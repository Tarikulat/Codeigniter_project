<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 Add User With Validation Demo</title>
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
  <div class="container mt-5 border border-info">
    <form method="post" id="add_create" name="add_create" 
    action="">
    <h1 class="text-danger text-center">Booking From </h1>

      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
        <label>Contract:</label>
        <input type="text" name="contract" class="form-control">
      </div>

      <div class="form-group">
        <label>Check-in Date:</label>
        <input type="date" name="date" class="form-control">
      </div>

      <div class="form-group">
        <label>Check-in Time:</label>
        <input type="time" name="time" class="form-control">
      </div>

      <div class="form-group">
        <label>Days of Stay:</label>
        <input type="text" name="stay" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Book Now</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          name: {
            required: true,
          },
          contract: {
            required: true,
            maxlength: 60,
            contract: true,
          },
          
          date: {
            required: true,
            maxlength: 60,
            date: true,
          },
          time: {
            required: true,
            maxlength: 60,
            time: true,
          },
          stay: {
            required: true,
            maxlength: 60,
            stay: true,
          },


        },
        messages: {
          name: {
            required: "Name is required.",
          },
          contract: {
            required: "Contract is required.",
           
          },

          date: {
            required: "Date number is required.",
          },
          time: {
            required: "Time is required.",
          },
          stay: {
            required: "Stay is required.",
          },
        },
      })
    }
  </script>
</body>
</html>