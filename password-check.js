function checkPasswords() {
    var pwcheck = document.getElementById('pwCheck')

    var pw1 = document.getElementById('pw1').value
    var pw2 = document.getElementById('pw2').value

    var submitBtn = document.getElementById('vahvistus')

    if (pw1 != pw2) {
        submitBtn.disabled = true
        pwcheck.innerText = "Salasanat eivät täsmää."
    } else if (pw1.length < 8 && pw2.length < 8) {
        submitBtn.disabled = true
        pwcheck.innerText = "Vähintään 8 merkkiä."
    } else if (pw1 == pw2) {
        submitBtn.disabled = false
        pwcheck.innerText = "Salasana on OK!"
    }
}