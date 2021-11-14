function checkPasswords() {
    var pwcheck = document.getElementById('pwCheck');

    var pw1 = document.forms["customer"]["pw1"].value;
    var pw2 = document.forms["customer"]["pw2"].value;

    if (pw1 == pw2) {
        pwcheck.innerText = "Salasana on OK!";
    } else {
        pwcheck.innerText = "Salasanat eivät täsmää.";
    }
}