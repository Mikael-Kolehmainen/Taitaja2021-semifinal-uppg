
function dropdownfunction() {
    dropdownBtn = document.getElementById('shopping-cart-btn')
    document.getElementById("mydropdown").classList.toggle("show")
    if (document.getElementById('cart-items').childElementCount >= 1) {
        dropdownBtn.style.margin = '0 0 0 90%'
    } else {
        dropdownBtn.style.margin = '0 0 0 80%'
    }
    if (document.getElementById("mydropdown").classList.contains('show') == false) {
        dropdownBtn.style.removeProperty("margin")
    }
}
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn') && event.target.matches('.shopping-cart')) {
        var dropdowns = document.getElementsByClassName("shopping-cart-content")
        var i
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i]
            if (openDropdown.classList.contains('show')) {
                dropdownBtn.style.removeProperty("margin")
                openDropdown.classList.remove('show')
            }
        }
    }
}