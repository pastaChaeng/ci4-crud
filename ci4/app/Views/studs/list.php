<?php

$this->extend('layout/main');
$this->section('body');


?>


<h1>Lists</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Student Number</th>
            <th scope="col">Section</th>
            <th scope="col">Course</th>
            <th scope="col">Year Level</th>
            <th scope="col">Student Profile</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<?php $this->endSection(); ?>