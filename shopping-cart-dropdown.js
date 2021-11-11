if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}
function ready() {
    function dropdownfunction() {
        document.getElementById("mydropdown").classList.toggle("show");
        document.getElementById("shopping-cart-btn").style.margin = '0 0 0 90%';
        if (document.getElementById("mydropdown").classList.contains('show') == false) {
            document.getElementById("shopping-cart-btn").style.removeProperty("margin");
        }
    }
      
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn') && event.target.matches('.shopping-cart')) {
            console.log("Test");
            var dropdowns = document.getElementsByClassName("shopping-cart-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    document.getElementById("shopping-cart-btn").style.removeProperty("margin");
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
}