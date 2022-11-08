$("#formTwit").on("submit", function (e) {
  e.preventDefault();

  let form = $("#formTwit");
  let data = form.serialize();

  $.ajax({
    type: "POST",
    url: "/modules/add-twit.php",
    data: data,
    success: function (data) {
      $("#listTwits").prepend(data);
    },
  });
});
