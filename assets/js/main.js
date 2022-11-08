$("#formTwit").on("submit", function (e) {
  e.preventDefault();

  let form = $("#formTwit");
  let data = form.serialize();

  let file_data = $("#twitImage").prop("files")[0];

  let form_data = new FormData($("#formTwit")[0]);
  form_data.append("file", file_data);

  $.ajax({
    type: "POST",
    url: "/modules/add-twit.php",
    data: form_data,
    processData: false,
    contentType: false,
    success: function (data) {
      $("#listTwits").prepend(data);
    },
  });
});
