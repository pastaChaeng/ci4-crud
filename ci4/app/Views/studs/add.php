<?php

$this->extend('layout/main');
$this->section('body');


?>

<h1>Create New Student Account</h1>
<form method="POST"  action="/studs/store" enctype="multipart/form-data">  
<div class="mb-3">
  <label for="studname" class="form-label">Name</label>
  <input type="text" class="form-control" id="" name="studname" placeholder="Enter your name" required>
</div>
<div class="mb-3">
  <label for="studid" class="form-label">Student Number</label>
  <input type="text" class="form-control" id="" name="studid" value="<?= $stud_id; ?>" readonly>
</div>
<div class="mb-3">
  <label for="studsection" class="form-label">Section</label>
  <input type="text" class="form-control" id="" name="studsection" placeholder="Ex. SBIT-4G" required>
</div>
<div class="mb-3">
  <label for="studcourse" class="form-label">Course</label>
  <input type="text" class="form-control" id="" name="studcourse" placeholder="Ex. BSIT" required>
</div>
<div class="mb-3">
  <label for="studgradelvl" class="form-label">Year Level</label>
  <input type="text" class="form-control" id="" name="studgradelvl" placeholder="Ex. 4th Year" required>
</div>
<div class="mb-3">
  <label for="studprofile" class="form-label">Student Profile</label>
  <input type="file" class="form-control" name="studprofile" placeholder="Ex. 4th Year" required>
</div>
<button type="submit" class="btn btn-primary">Submit</button>  <a href="/studs" class="btn btn-danger">Cancel</a>
    <thead>
</form>
<?php $this->endSection(); ?>