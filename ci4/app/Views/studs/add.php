<?php

$this->extend('layout/main');
$this->section('body');


?>

<h1>Create New Student Account</h1>
<div class="mb-3">
  <label for="stud_name" class="form-label">Name</label>
  <input type="text" class="form-control" id="" name="stud_name" placeholder="Enter your name">
</div>
<div class="mb-3">
  <label for="stud_id" class="form-label">Student Number</label>
  <input type="text" class="form-control" id="" name="stud_id" disabled>
</div>
<div class="mb-3">
  <label for="stud_section" class="form-label">Section</label>
  <input type="text" class="form-control" id="" name="stud_section" placeholder="Ex. SBIT-4G">
</div>
<div class="mb-3">
  <label for="stud_course" class="form-label">Course</label>
  <input type="text" class="form-control" id="" name="stud_course" placeholder="Ex. BSIT">
</div>
<div class="mb-3">
  <label for="stud_grade_lvl" class="form-label">Year Level</label>
  <input type="text" class="form-control" id="" name="stud_grade_lvl" placeholder="Ex. 4th Year">
</div>
<div class="mb-3">
  <label for="stud_profile" class="form-label">Student Profile</label>
  <input type="file" class="form-control" name="stud_profile" placeholder="Ex. 4th Year">
</div>
<button type="button" class="btn btn-primary">Submit</button>

<?php $this->endSection(); ?>