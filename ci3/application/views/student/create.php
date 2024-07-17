<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Form Add New Student
        </div>
        <div class="card-body">
          <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?>
            </div>
          <?php endif; ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="name_student">Name Student</label>
              <input type="text" class="form-control" id="name_student" name="name_student" required>
            </div>
            <div class="form-group">
              <label for="nis_student">NIS Student</label>
              <input type="text" class="form-control" id="nis_student" name="nis_student" required>
            </div>
            <div class="form-group">
              <label for="email_student">Email Student</label>
              <input type="email" class="form-control" id="email_student" name="email_student" required>
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
</div>