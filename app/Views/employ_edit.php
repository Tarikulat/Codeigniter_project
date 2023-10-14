<!-- <!DOCTYPE html>
<html>
<head>
  <title>Employ add</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  <?= $this->extend('backend/common/dheader');?>
<?= $this->section('content');?>
 
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
<!-- </head>
<body> -->
  <div class="container mt-5">
    <form method="post" id="employ_update" name="employ_update" 
    action="<?= site_url('/update') ?>">
   
    <input type="hidden" name="id" id="id" value="<?php echo $employ_obj['id']; ?>">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control" value="<?php echo $employ_obj['name']; ?>">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="text" name="email" class="form-control" value="<?php echo $employ_obj['email']; ?>">
      </div>

      <div class="form-group">
        <label>Phone:</label>
        <input type="text" name="phone" class="form-control" value="<?php echo $employ_obj['phone']; ?>">
      </div>
      
      <div class="form-group">
        <label>Age:</label>
        <input type="text" name="age" class="form-control" value="<?php echo $employ_obj['age']; ?>">
      </div>

      <div class="col">
          <div class="form-group">
            <label>Employee Designation:</label>
            <select class="form-select form-control" name="designation" value="<?php echo $employ_obj['designation']; ?>">
              <option selected>Select a designation</option>
              <option value="1">Hotel Manager</option>
              <option value="2">Receptionist</option>
              <option value="3">Executive chef</option>
              <option value="4">Night auditor</option>
            </select>
          </div>
        </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Save Data</button>
      </div>
    </form>
  </div>
  <?= $this->endSection('content');?>

 <script>
    if ($("#employ_update").length > 0) {
      $("#employ_update").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
          
          phone: {
            required: true,
            maxlength: 60,
            phone: true,
          },
          age: {
            required: true,
            maxlength: 60,
            age: true,
          },
          designation: {
            required: true,
            maxlength: 60,
            designation: true,
          },


        },
        messages: {
          name: {
            required: "Name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },

          phone: {
            required: "Phone number is required.",
          },
          age: {
            required: "Age is required.",
          },
          designation: {
            required: "Designation is required.",
          },
        },
      })
    }
  </script>
<!-- </body>
</html> -->