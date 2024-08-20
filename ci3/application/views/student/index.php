<div class="container">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
  <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
      <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Successfull
          <strong><?= $this->session->flashdata('flash'); ?>!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div> -->
  <?php endif; ?>
  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?= base_url(); ?>student/create" class="btn btn-primary">Add new student</a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search student..." aria-label="Search student..." aria-describedby="button-addon2" name="keyword">
          <div class="input-group-append">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-6">
      <h1>List of Students</h1>
      <?php if (empty($students)) : ?>
        <div class="alert alert-danger" role="alert">
          Undifined student!
        </div>
      <?php endif; ?>
      <ul class="list-group">
        <?php foreach ($students as $student) : ?>
          <!-- <li class="list-group-item">
            <?= $student['name_student']; ?>
            <a href="<?= base_url(); ?>student/delete/<?= $student['nis_student']; ?>" class="badge badge-danger float-right delete">Delete</a>
            <a href="<?= base_url(); ?>student/edit/<?= $student['nis_student']; ?>" class="badge badge-success float-right">Edit</a>
            <a href="<?= base_url(); ?>student/detail/<?= $student['nis_student']; ?>" class="badge badge-primary float-right">Detail</a>
          </li> -->
          <li class="list-group-item">
            <?= $student['nama']; ?>
            <a href="<?= base_url(); ?>student/delete/<?= $student['id']; ?>" class="badge badge-danger float-right delete">Delete</a>
            <a href="<?= base_url(); ?>student/edit/<?= $student['nrp']; ?>" class="badge badge-success float-right">Edit</a>
            <a href="<?= base_url(); ?>student/detail/<?= $student['nrp']; ?>" class="badge badge-primary float-right">Detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>