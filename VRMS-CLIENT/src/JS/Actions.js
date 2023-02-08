$(`#myImmunization`).hide();
$(`#myProfile`).hide();
$(`#home`).show();

function home() {
  $(`#myImmunization`).hide();
  $(`#home`).show();
  $(`#myProfile`).hide();
}

function btnMy() {
  $(`#myImmunization`).show();
  $(`#home`).hide();
  $(`#myProfile`).hide();
}

function btnProfile() {
  $(`#myProfile`).show();
  $(`#home`).hide();
  $(`#myImmunization`).hide();
}

function signOut() {
  window.location.href = "../../index.php";
}
