<!-- <div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Form Add New Student
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="name_student">Name Student</label>
              <input type="text" class="form-control" id="name_student" name="name_student" required>
              <small class="form-text text-danger"><?= form_error('name_student'); ?></small>
            </div>
            <div class="form-group">
              <label for="nis_student">NIS Student</label>
              <input type="text" class="form-control" id="nis_student" name="nis_student" required>
              <small class="form-text text-danger"><?= form_error('nis_student'); ?></small>
              </div>
            <div class="form-group">
              <label for="email_student">Email Student</label>
              <input type="email" class="form-control" id="email_student" name="email_student" required>
              <small class="form-text text-danger"><?= form_error('email_student'); ?></small>
              </div>
            <div class="form-group">
              <label for="major_student">Major Student</label>
              <select class="form-control" id="major_student" name="major_student" required>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                <option value="Teknik Audio Video">Teknik Audio Video</option>
                <option value="Teknik Infromatika">Teknik Infromatika</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary float-right">Send</button>
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
          Form Add New Student
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="nama">Name Student</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
              <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
              <label for="nrp">NIS Student</label>
              <input type="text" class="form-control" id="nrp" name="nrp" required>
              <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
              </div>
            <div class="form-group">
              <label for="email">Email Student</label>
              <input type="email" class="form-control" id="email" name="email" required>
              <small class="form-text text-danger"><?= form_error('email'); ?></small>
              </div>
            <div class="form-group">
              <label for="jurusan">Major Student</label>
              <select class="form-control" id="jurusan" name="jurusan" required>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                <option value="Teknik Audio Video">Teknik Audio Video</option>
                <option value="Teknik Infromatika">Teknik Infromatika</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary float-right">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>