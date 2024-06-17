<div class="container mt-5">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['student']['name_student'] ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['student']['nis_student'] ?></h6>
      <p class="card-text"><?= $data['student']['email_student'] ?></p>
      <a href="#" class="card-link"><?= $data['student']['jurusan_student'] ?></a>
      <a href="<?= BASEURL ?>/student" class="card-link">Back</a>
    </div>
  </div>
</div>