$(window).scroll(() => {
  let wScroll = $(this).scrollTop();

$('h1').css({
  'transform' : 'translate(0, ' + wScroll/2 + '%)'
})

$('kotak').css({
  'transform' : 'translate(0, ' + wScroll/10 + '%)'
})
})