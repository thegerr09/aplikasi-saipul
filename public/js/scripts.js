(function()
{
$('form[data-remote]').on('submit', function(e) {
  var form = $(this);
  var url = form.prop('action');

  $.ajax({
    type: 'POST',
    url: url,
    dataType:'html',
    data: form.serialize(),
    success: function(){
        var message = '<div class="alert alert-success" role="alert">'+
        '<span class="glyphicon glyphicon-ok"></span> <b>SUCCESS</b></div>';
        if (message) {
          $('#info').html(message).fadeIn(1000).delay(2500).fadeOut(500);
        }
      }
    });
  e.preventDefault();
});
})();