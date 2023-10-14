
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
    <form method="post" id="update_user" name="update_user" 
    action="<?= site_url('/update') ?>">
    
      <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $user_obj['name']; ?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $user_obj['email']; ?>">
      </div>

      <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" value="<?php echo $user_obj['phone']; ?>">
      </div>
      <div class="form-group">
        <label>Age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $user_obj['age']; ?>">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" value="<?php echo $user_obj['address']; ?>">
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
          address: {
            required: true,
            maxlength: 60,
            address: true,
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
            required: "Phone is required.",
          },
          age: {
            required: "Age is required.",
          },
          address: {
            required: "Address is required.",
          },
        },
      })
    }
  </script>
<!-- </body>
</html> -->