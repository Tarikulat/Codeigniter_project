<?= $this->extend('backend/common/dheader');?>
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
    <form method="post" id="update_user" name="update_user" 
    action="<?= base_url('book-update/').$user_obj["id"]?>">
   
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $user_obj['name']; ?>">
      </div>
      <div class="form-group">
        <label>Contract</label>
        <input type="text" name="contract" class="form-control" value="<?php echo $user_obj['contract']; ?>">
      </div>

      <div class="form-group">
        <label>Check-in Date</label>
        <input type="date" name="date" class="form-control" value="<?php echo $user_obj['date']; ?>">
      </div>
      <div class="form-group">
        <label>Check-in Time</label>
        <input type="time" name="time" class="form-control" value="<?php echo $user_obj['time']; ?>">
      </div>
      <div class="form-group">
        <label>Days of Stay</label>
        <input type="text" name="stay" class="form-control" value="<?php echo $user_obj['stay']; ?>">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Save Data</button>
      </div>
    </form>
  </div>
  <?= $this->endSection('content');?>
  <script>
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
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
