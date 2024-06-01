// event pada saat link di klik
$(".page-scroll").on("click", function (e) {
  // ambil isi href
  var tujuan = $(this).attr("href");
  // tangkap elemen ybs
  var elementTujuan = $(tujuan);

  // pindahkan scroll
  $("html, body").animate(
    { scrollTop: elementTujuan.offset().top - 50 },
    1250,
    "easeInOutExpo"
  );
  e.preventDefault();
});

$(window).on('load', () => {
  $('.pKiri').addClass('pMuncul')
  $('.pKanan').addClass('pMuncul')
})

$(window).scroll(() => {
  let wScroll = $(this).scrollTop();

  $(".jumbotron img").css({
    transform: "translate(0, " + wScroll / 4 + "%)",
  });
  $(".jumbotron h1").css({
    transform: "translate(0, " + wScroll / 2 + "%)",
  });
  $(".jumbotron p").css({
    transform: "translate(0, " + wScroll / 1.2 + "%)",
  });

  if (wScroll > $(".portfolio").offset().top - 250) {
    $(".portfolio .thumbnail").each((i) => {
      setTimeout(() => {
        $(".portfolio .thumbnail").eq(i).addClass("muncul");
      }, 300 * (i + 1));
    });
  }
});
