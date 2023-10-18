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
    <form method="post" id="employ_add" name="employ_add" 
    action="<?= site_url('employ_add') ?>" enctype="multipart/form-data">
    <h1>Add Employ Information </h1>
      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="text" name="email" class="form-control">
      </div>

      <div class="form-group">
        <label>Phone:</label>
        <input type="text" name="phone" class="form-control">
      </div>
      
      <div class="form-group">
        <label>Age:</label>
        <input type="text" name="age" class="form-control">
      </div>

      <div class="col">
          <div class="form-group">
            <label>Employee Designation:</label>
            <select class="form-select form-control" name="designation">
              <option selected>Select a designation</option>
              <?php foreach($EmpCata as $row) : ?>
              <option value="<?= $row['cata_id']?>"><?= $row['cata_name'] ?></option>
                <?php endforeach ?>
            </select>
          </div>
        </div>

        <div class="form-group">
        <label>Image:</label>
        <input type="file" name="file" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">New Employ</button>
      </div>
    </form>
  </div>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script> -->
 
  <?= $this->endSection('content');?>
 <script>
    if ($("#employ_add").length > 0) {
      $("#employ_add").validate({
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