function pswrdvisible() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function repswrdvisible() {
  var y = document.getElementById("re-type-password");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}