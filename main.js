$(document).on('change', '#select', function () {
  $.ajax({
    type: "POST",
    data: $('#select').val(),
    url: "getData.php",
  }).done(function (response) {
      $('#displayArea').append(response[0])
  }).fail(function (XMLHttpRequest, textStatus, errorThrown) {
    console.log(XMLHttpRequest);
    console.log(textStatus);
    console.log(errorThrown);
    return;
  })
});