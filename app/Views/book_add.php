<!DOCTYPE html>
<html>

<head>
  <title>Codeigniter 4</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 570px;
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
    <form method="post" id="book_create" name="book_create" action="">
      <h1 class="text-success text-center">Hotel Booking From </h1>

      <div class="form-group">
          <label>Adress:</label>
          <input type="text" name="address" class="form-control" placeholder="Input your address">
        </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label>Room Type:</label>
            <select class="form-select form-control" name="roomtype">
              <option selected>Please Select</option>
              <option value="1">Deluxe Room</option>
              <option value="2">Family ROOM</option>
              <option value="3">Single Room</option>
              <option value="4">Twin Bed Room</option>
            </select>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label>Number of Guests:</label>
            <select class="form-select form-control" name="guests">
              <option selected>Please Select</option>
              <option value="1">1-3 person</option>
              <option value="2">3-5 person</option>
              <option value="3">5-7 person</option>
              <option value="4">7-9 person</option>
              <option value="5">10+ person</option>
            </select>
          </div>
        </div>
        </div>

        <div class="row">
          <div class="col">
            <input type="text" name="first" class="form-control" placeholder="First name">
          </div>
          <div class="col">
            <input type="text" name="last" class="form-control" placeholder="Last name">
          </div>
        </div>

        <div class="form-group">
          <label>Contract Number:</label>
          <input type="text" name="contract" class="form-control" placeholder="Input your phone number">
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Arrival date:</label>
              <input type="date" name="arridate" class="form-control">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Check-in time:</label>
              <input type="time" name="arritime" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Departure date:</label>
              <input type="date" name="depdate" class="form-control">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Check-out time:</label>
              <input type="time" name="deptime" class="form-control">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label>Days of Stay:</label>
          <input type="text" name="stay" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-success btn-block">Submit Now</button>
        </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#book_create").length > 0) {
      $("#book_create").validate({
        rules: {
          address: {
            required: true,
          },
          roomtype: {
            required: true,
            maxlength: 60,
            roomtype: true,
          },

          guests: {
            required: true,
            maxlength: 60,
            guests: true,
          },
          first: {
            required: true,
            maxlength: 60,
            first: true,
          },
          last: {
            required: true,
            maxlength: 60,
            last: true,
          },
          contract: {
            required: true,
            maxlength: 60,
            contract: true,
          },
          arridate: {
            required: true,
            maxlength: 60,
            arridate: true,
          },
          arritime: {
            required: true,
            maxlength: 60,
            arritime: true,
          },
          depdate: {
            required: true,
            maxlength: 60,
            depdate: true,
          },
          deptime: {
            required: true,
            maxlength: 60,
            deptime: true,
          },

          stay: {
            required: true,
            maxlength: 60,
            stay: true,
          },



        },
        messages: {

          address: {
            required: "address is required.",
          },
          roomtype: {
            required: "roomtype is required.",
          },
          guests: {
            required: "guests number is required.",
          },
          first: {
            required: "first name is required.",
          },
          last: {
            required: "last name is required.",
          },
          contract: {
            required: "contract is required.",
          },
          arridate: {
            required: "date is required.",
          },
          arritime: {
            required: "time is required.",
          },
          depdate: {
            required: "date is required.",
          },
          deptime: {
            required: "time is required.",
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