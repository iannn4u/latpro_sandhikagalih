<!-- <div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Detail Student
        </div>
        <div class="card-body">
          <h5 class="card-title"><?= $student['name_student']; ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?= $student['email_student']; ?></h6>
          <p class="card-text"><?= $student['nis_student']; ?></p>
          <p class="card-text"><?= $student['major_student']; ?></p>
          <a href="<?= base_url(); ?>student" class="btn btn-primary">Back</a>
        </div>
      </div>
    </div>
  </div>
</div> -->
<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Detail Student
        </div>
        <div class="card-body">
          <h5 class="card-title"><?= $student['nama']; ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?= $student['email']; ?></h6>
          <p class="card-text"><?= $student['nrp']; ?></p>
          <p class="card-text"><?= $student['jurusan']; ?></p>
          <a href="<?= base_url(); ?>student" class="btn btn-primary">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>