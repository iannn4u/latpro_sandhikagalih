// const bSearch = document.querySelector("#search");
// const input = document.querySelector("#keyword");
// const table = document.querySelector("#container");

// input.addEventListener("keyup", () => {
//   const xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = () => {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       table.innerHTML = xhr.responseText;
//     }
//   };

//   xhr.open("GET", "ajax.php?keyword=" + input.value, true);
//   xhr.send();
// });

$(document).ready(() => {
  $("#search").hide();

  $("#keyword").on("keyup", () => {
    $("#spinner").show();
    // $('#container').load('ajax.php?keyword=' + $('#keyword').val())
    $.get("ajax.php?keyword=" + $("#keyword").val(), (data) => {
      $("#container").html(data);
      $("#spinner").hide();
    });
  });
});
