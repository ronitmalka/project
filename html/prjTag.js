$(document).ready(function() {
  $('.container').click(function(e) {
    var offset = $(this).offset();
    $('#position').text((e.clientX - offset.left) + ", " + (e.clientY - offset.top));
  });
});
