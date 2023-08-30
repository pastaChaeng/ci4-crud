<?php

$this->extend('layout/main');
$this->section('body');


?>

<?php if(session()->getFlashdata('success')) :?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?=session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">&times;</button>     
    </div>
    <?php endif; ?>   

<h1>Student Accounts</h1>
<table class="table">
    <a href="/studs/create" class="btn btn-primary">Add New Student</a>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Student Number</th>
            <th scope="col">Section</th>
            <th scope="col">Course</th>
            <th scope="col">Year Level</th>
            <th scope="col">Profile</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($studs as $stud): ?>
            <tr>
                <th scope="row"><?= $stud['id']; ?></th>
                    <td><?= $stud['stud_name']; ?></td>
                    <td><?= $stud['stud_id']; ?></td>
                    <td><?= $stud['stud_section']; ?></td>
                    <td><?= $stud['stud_course']; ?></td>
                    <td><?= $stud['stud_grade_lvl']; ?></td>
                    <td><?= $stud['stud_profile']; ?></td>
                    <td>
                    <a href="/studs/edit<?= $studs['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="/studs/delete<?= $studs['id']; ?>" class="btn btn-danger">Cancel</a>
                    </td>
                </th>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>

<?php $this->endSection(); ?>