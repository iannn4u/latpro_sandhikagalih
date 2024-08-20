const flashdata = $(".flash-data").data("flashdata");

if (flashdata) {
	Swal.fire({
		title: "The student",
		text: "Successfull " + flashdata,
		icon: "success",
	});
}

$(".delete").on("click", function(e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
	  title: "Are you sure?",
	  text: "You will be delete this student permanently!",
	  icon: "warning",
	  showCancelButton: true,
	  confirmButtonColor: "#3085d6",
	  cancelButtonColor: "#d33",
	  confirmButtonText: "Yes, delete it!"
	}).then((result) => {
	  if (result.isConfirmed) {
	    document.location.href = href;
	  }
	});
});
