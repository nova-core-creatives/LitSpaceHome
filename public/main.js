var form = $('contact-form');


form.submit(function (e){

  console.log(frm.serialize());
  $.ajax({

        type: frm.attr('method'),
        url: "form.php",
        data: frm.serialize(),
        success: function (data) {
            console.log('Submission was successful.');
            console.log(data);
        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        },
    });
})
