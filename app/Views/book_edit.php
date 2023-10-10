
 <?= $this->extend('backend/common/dheader');?>   <!--page mastering -->
<?= $this->section('content');?>

<style>
    .container {
      max-width: 500px;
      padding-top: 50px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>

  <div class="container mt-5 p-5">
    <form method="post" id="update_book" name="update_book" 
    action="<?= base_url('book-update/').$book_obj["id"]?>">
   
    <div class="form-group">
          <label>Adress:</label>
          <input type="text" name="address" class="form-control" placeholder="Input your address" value="<?php echo $book_obj['address']; ?>">
        </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label>Room Type:</label>
            <select class="form-select form-control" name="roomtype" value="<?php echo $book_obj['roomtype']; ?>">
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
            <select class="form-select form-control" name="guests" value="<?php echo $book_obj['guests']; ?>">
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
            <input type="text" name="first" class="form-control" placeholder="First name" value="<?php echo $book_obj['first']; ?>">
          </div>
          <div class="col">
            <input type="text" name="last" class="form-control" placeholder="Last name" value="<?php echo $book_obj['last']; ?>">
          </div>
        </div>

        <div class="form-group">
          <label>Contract Number:</label>
          <input type="text" name="contract" class="form-control" placeholder="Input your phone number" value="<?php echo $book_obj['contract']; ?>">
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Arrival date:</label>
              <input type="date" name="arridate" class="form-control" value="<?php echo $book_obj['arridate']; ?>">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Check-in time</label>
              <input type="time" name="arritime" class="form-control" value="<?php echo $book_obj['arritime']; ?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Departure date:</label>
              <input type="date" name="depdate" class="form-control" value="<?php echo $book_obj['depdate']; ?>">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>Check-out time:</label>
              <input type="time" name="deptime" class="form-control" value="<?php echo $book_obj['deptime']; ?>">
            </div>
          </div>
        </div>
      <div class="form-group">
        <label>Days of Stay</label>
        <input type="text" name="stay" class="form-control" value="<?php echo $book_obj['stay']; ?>">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Save Data</button>
      </div>
    </form>
  </div>
  <?= $this->endSection('content');?>
  <script>
    if ($("#update_book").length > 0) {
      $("#update_book").validate({
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
