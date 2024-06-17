<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary" id="add" data-toggle="modal" data-target="#exampleModal">
        Add student
      </button>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <form action="<?= BASEURL ?>student/search" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search student..." autocomplate="off" aria-label="Search student..." name="keyword" id="keyword" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="search">Serch</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <h1>List of Students</h1>
      <ul class="list-group">
        <?php foreach ($data['students'] as $student) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center"><?= $student['name_student'] ?>
            <div>
              <a href="<?= BASEURL ?>student/detail/<?= $student['id_student'] ?>"><span class="badge badge-primary">Detail</span></a>
              <a href="<?= BASEURL ?>student/edit/<?= $student['id_student'] ?>"><span class="badge badge-success edit" data-toggle="modal" data-target="#exampleModal" data-id="<?= $student['id_student'] ?>">Edit</span></a>
              <a href="<?= BASEURL ?>student/delete/<?= $student['id_student'] ?>"><span class="badge badge-danger mr-2" onclick="return confirm('Are you sure?')">Delete</span></a>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>student/add" method="post">
          <input type="hidden" id="id_student" name="id_student">
          <div class="form-group">
            <label for="name_student">Name</label>
            <input type="text" class="form-control" id="name_student" name="name_student">
          </div>
          <div class="form-group">
            <label for="nis_student">NIS</label>
            <input type="number" class="form-control" id="nis_student" name="nis_student">
          </div>
          <div class="form-group">
            <label for="email_student">Email</label>
            <input type="email" class="form-control" id="email_student" name="email_student">
          </div>
          <div class="form-group">
            <label for="jurusan_student">Example select</label>
            <select class="form-control" name="jurusan_student" id="jurusan_student">
              <option value="RPL">RPL</option>
              <option value="TKR">TKR</option>
              <option value="TITL">TITL</option>
              <option value="AUVI">AUVI</option>
              <option value="TI">TI</option>
              <option value="SI">SI</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add student</button>
        </form>
      </div>
    </div>
  </div>
</div>