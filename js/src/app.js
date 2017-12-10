var _references = document.querySelector('.references');

if (_references) {
  var _list = _references.querySelector('ul'),
    _left_btn = _references.querySelector('.left-arrow'),
    _right_btn = _references.querySelector('.right-arrow'),
    _container_width = null,
    _list_width = _list.offsetWidth,
    _ratio = null,
    _current = 0;

  var _calcul_ratio = function(e) {
    _container_width = _references.querySelector('.content-references').offsetWidth;
    _ratio = _list_width / _container_width;
    _max_decal = _container_width - _list_width;
  };

  window.addEventListener('resize', _calcul_ratio);

  var _move = function(d) {

    if (d > 0) {
      d = 0;
    } else if (d < _max_decal) {
      d = _max_decal;
    }
    _current = d;
    _list.style.left = d + 'px';

  };

  _left_btn.addEventListener('click', function(e) {
    var _decal = _current + _container_width;
    _move(_decal);
  });

  _right_btn.addEventListener('click', function(e) {
    var _decal = _current - _container_width;
    _move(_decal);
  });

  _calcul_ratio();
}

var viewMore = function(id) {
  if ($('#col' + id).hasClass("viewMore")) {
    $('.colArchivePresta').removeClass('viewMore');
    $('.colImage').removeClass('viewMore');
    $('#viewMoreButton' + id).text('Voir plus');
  } else {
    $('.colArchivePresta').removeClass('viewMore');
    $('.colImage').removeClass('viewMore');
    $('#viewMoreButton' + id).text('Voir moins');
    $('#col' + id).addClass('viewMore');
    $('#image' + id).addClass('viewMore');
  }
}

var viewMoreXs = function(id) {
  if ($('#colXs' + id).hasClass("viewMore")) {
    $('.colArchivePresta').removeClass('viewMore');
    $('.colImage').removeClass('viewMore');
    $('#viewMoreButtonXs' + id).text('Voir plus');
  } else {
    $('.colArchivePresta').removeClass('viewMore');
    $('.colImage').removeClass('viewMore');
    $('#viewMoreButtonXs' + id).text('Voir moins');
    $('#colXs' + id).addClass('viewMore');
    $('#imageXs' + id).addClass('viewMore');
  }
}