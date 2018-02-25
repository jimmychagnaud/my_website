var img = $('.viewer-content > img');

$('.imageSingle').on('click', function(e) {
  console.log('1');
  var src = $(this).css('background-image');
  url = src.replace('url("', '').replace('")', '');
  img.attr('src', url);
  $('.viewer').css('display', 'block');
  $('.viewer').animate({ 'opacity': '1' }, 300);
});

$('.viewer').on('click', function(e) {
  hideViewer();
});

function hideViewer() {
  $('.viewer').animate({ 'opacity': '0' }, 300);
  setTimeout(function() {
    $('.viewer').css('display', 'none');
  }, 300);
}