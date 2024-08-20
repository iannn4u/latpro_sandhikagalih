<!-- <div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Form Edit a Student
        </div>
        <div class="card-body">
          <form action="" method="post">
            <input type="hidden" name="id_student" value="<?= $student['id_student']; ?>">
            <div class="form-group">
              <label for="name_student">Name Student</label>
              <input type="text" class="form-control" id="name_student" name="name_student" required value="<?= $student['name_student']; ?>">
              <small class="form-text text-danger"><?= form_error('name_student'); ?></small>
            </div>
            <div class="form-group">
              <label for="nis_student">NIS Student</label>
              <input type="text" class="form-control" id="nis_student" name="nis_student" required value="<?= $student['nis_student']; ?>">
              <small class="form-text text-danger"><?= form_error('nis_student'); ?></small>
            </div>
            <div class="form-group">
              <label for="email_student">Email Student</label>
              <input type="email" class="form-control" id="email_student" name="email_student" required value="<?= $student['email_student']; ?>">
              <small class="form-text text-danger"><?= form_error('email_student'); ?></small>
            </div>
            <div class="form-group">
              <label for="major_student">Major Student</label>
              <select class="form-control" id="major_student" name="major_student" required>
                <?php foreach ($majors as $major) : ?>
                  <?php if ($j == $student['major']) : ?>
                    <option value="<?= $major; ?>" selected><?= $major; ?></option>
                  <?php else : ?>
                    <option value="<?= $major; ?>"><?= $major; ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary float-right">Edit</button>
          </form>
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
          Form Edit a Student
        </div>
        <div class="card-body">
          <form action="" method="post">
            <input type="hidden" name="id_student" value="<?= $student['id_student']; ?>">
            <div class="form-group">
              <label for="nama">Name Student</label>
              <input type="text" class="form-control" id="nama" name="nama" required value="<?= $student['nama']; ?>">
              <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
              <label for="nrp">NIS Student</label>
              <input type="text" class="form-control" id="nrp" name="nrp" required value="<?= $student['nrp']; ?>">
              <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
            </div>
            <div class="form-group">
              <label for="emaii">Email Student</label>
              <input type="email" class="form-control" id="emaii" name="emaii" required value="<?= $student['emaii']; ?>">
              <small class="form-text text-danger"><?= form_error('emaii'); ?></small>
            </div>
            <div class="form-group">
              <label for="jurusan">Major Student</label>
              <select class="form-control" id="jurusan" name="jurusan" required>
                <?php foreach ($majors as $major) : ?>
                  <?php if ($j == $student['major']) : ?>
                    <option value="<?= $major; ?>" selected><?= $major; ?></option>
                  <?php else : ?>
                    <option value="<?= $major; ?>"><?= $major; ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary float-right">Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>