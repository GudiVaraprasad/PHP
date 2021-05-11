function check2(){
        swal({
              title: "Failed!",
              text: "Entered details already exists.",
              icon: "error",
              button: "Back",
            });
}

function check1(){
        swal({
              title: "Done!",
              text: "New Birthday added successfully.",
              icon: "success",
              button: "OK",
            })
  .then((value) => {
  swal(window.location="index.html");
});
}

function checkmail2(){
        swal({
              title: "Failed!",
              text: "Mail was not sent to the requested email address.",
              icon: "error",
              button: "Try again",
            });
}

function checkmail1(){
        swal({
              title: "Done!",
              text: "Mail sent successfully.",
              icon: "success",
              button: "OK",
            });
}