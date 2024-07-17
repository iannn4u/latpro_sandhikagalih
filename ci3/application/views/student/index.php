<div class="container">
  <?php if($this->session->flashdata('flash')) : ?>
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="alert alert-success alert-dismissible fade show" role="alert">Successfull
        <strong><?= $this->session->flashdata('flash'); ?>!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?= base_url(); ?>student/create" class="btn btn-primary">Add new student</a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-6">
      <h1>List of Students</h1>
      <ul class="list-group">
        <?php foreach ($students as $student) : ?>
          <li class="list-group-item">
            <?= $student['name_student']; ?>
            <a href="<?= base_url(); ?>student/delete/<?= $student['nis_student']; ?>" class="badge badge-danger float-right" onclick="return confirm('Are you sure to delete this student?')">Delete</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>