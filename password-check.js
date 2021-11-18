function checkPasswords() {
    var pwcheck = document.getElementById('pwCheck');

    var pw1 = document.getElementById('pw1').value;
    var pw2 = document.getElementById('pw2').value;

    if (pw1 == pw2) {
        pwcheck.innerText = "Salasana on OK!";
    } else {
        pwcheck.innerText = "Salasanat eivät täsmää.";
    }
}