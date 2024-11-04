$(function () {
  $(
      "#comissionForm input,#comissionForm textarea,#comissionForm button"
  ).jqBootstrapValidation({
      preventSubmit: true,
      submitError: function ($form, event, errors) {
      },
      submitSuccess: function ($form, event) {
          event.preventDefault();
          var auftragsname = $("input#auftragsname").val();
          var auftragsemail = $("input#auftragsemail").val();
          var art = $("input#art").val();
          var groeße = $("input#groeße").val();
          var stil = $("input#stil").val();
          var beschreibung = $("textarea#beschreibung").val();
          var auftragstoken = $("input#auftragstoken").val();
          var auftragsfirstName = auftragsname;
          if (auftragsfirstName.indexOf(" ") >= 0) {
              auftragsfirstName = auftragsname.split(" ").slice(0, -1).join(" ");
          }
          $this = $("#sendComissionButton");
          $this.prop("disabled", true);
          $.ajax({
              url: "././mail/auftrag.php",
              type: "POST",
              data: {
                  auftragsname: auftragsname,
                  auftragsemail: auftragsemail,
                  art: art,
                  stil: stil,
                  groeße: groeße,
                  beschreibung: beschreibung,
                  auftragstoken: auftragstoken,
              },
              cache: false,
              success: function () {
                  $("#success").html("<div class='alert alert-success'>");
                  $("#success > .alert-success")
                      .html(
                          "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
                      )
                      .append("</button>");
                  $("#success > .alert-success").append(
                      "<strong>Your message has been sent. </strong>"
                  );
                  $("#success > .alert-success").append("</div>");
                  $("#comissionForm").trigger("reset");
              },
              error: function () {
                  $("#success").html("<div class='alert alert-danger'>");
                  $("#success > .alert-danger")
                      .html(
                          "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
                      )
                      .append("</button>");
                  $("#success > .alert-danger").append(
                      $("<strong>").text(
                          "Sorry " +
                              auftragsfirstName +
                              ", our mailserver is unfortunally offline!"
                      )
                  );
                  $("#success > .alert-danger").append("</div>");
                  $("#comissionform").trigger("reset");
              },
              complete: function () {
                  setTimeout(function () {
                      $this.prop("disabled", false); 
                  }, 1000);
              },
          });
      },
      filter: function () {
          return $(this).is(":visible");
      },
  });

  $('a[data-toggle="tab"]').click(function (e) {
      e.preventDefault();
      $(this).tab("show");
  });
});

$("#name").focus(function () {
  $("#success").html("");
});