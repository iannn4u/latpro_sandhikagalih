$(() => {
  $("#add").on("click", () => {
    $("#exampleModalLabel").html("Add student");
    $('.modal-footer button[type=submit]').html('Add student')
  });

  $(".edit").on("click", (e) => {
    e.preventDefault();
    $("#exampleModalLabel").html("Edit student");
    $('.modal-footer button[type=submit]').html('Edit Student')
    $('.modal-body form').attr('action', 'http://localhost/MVC%20di%20dalam%20PHP/public/student/edit')
    const id_student = $(e.currentTarget).data('id');
    $.ajax({
      url: 'http://localhost/MVC%20di%20dalam%20PHP/public/student/getUbah',
      data: {id_student: id_student},
      method: 'post',
      dataType: 'json',
      success: (data) => {
        $('#name_student').val(data.name_student);
        $('#nis_student').val(data.nis_student);
        $('#email_student').val(data.email_student);
        $('#jurusan_student').val(data.jurusan_student);
        $('#id_student').val(data.id_student);
      }
    })
  });
});
