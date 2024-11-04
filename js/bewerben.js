$(function () {
  $(
      "#ApplyForm input,#ApplyForm textarea,#ApplyForm button"
  ).jqBootstrapValidation({
      preventSubmit: true,
      submitError: function ($form, event, errors) {
      },
      submitSuccess: function ($form, event) {
          event.preventDefault();
          var bewerbenname = $("input#bewerbenname").val();
          var bewerbenemail = $("input#bewerbenemail").val();
          var referenzen = $("input#referenzen").val();
          var vorstellung = $("input#vorstellung").val();
          var bewerbenbeschreibung = $("textarea#bewerbenbeschreibung").val();
          var bewerbentoken = $("input#bewerbentoken").val();
          var bewerbenfirstName = bewerbenname;
          if (bewerbenfirstName.indexOf(" ") >= 0) {
              bewerbenfirstName = bewerbenname.split(" ").slice(0, -1).join(" ");
          }
          $this = $("#sendApplyButton");
          $this.prop("disabled", true);
          $.ajax({
              url: "././mail/bewerben.php",
              type: "POST",
              data: {
                  bewerbenname: bewerbenname,
                  bewerbenemail: bewerbenemail,
                  referenzen: referenzen,
                  vorstellung: vorstellung,
                  bewerbenbeschreibung: bewerbenbeschreibung,
                  bewerbentoken: bewerbentoken,
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
                  $("#ApplyForm").trigger("reset");
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
                              bewerbenfirstName +
                              ", our mailserver is unfortunally offline!"
                      )
                  );
                  $("#success > .alert-danger").append("</div>");
                  $("#Applyform").trigger("reset");
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