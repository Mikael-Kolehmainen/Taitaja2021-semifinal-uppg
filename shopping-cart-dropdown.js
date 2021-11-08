/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
console.log("Test");
function dropdownfunction() {
    document.getElementById("mydropdown").classList.toggle("show");
    var shoppingcart = document.getElementById("shopping-cart-btn");
    shoppingcart.style.margin = '0 0 0 90%';
}
  
  // Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn') && event.target.matches('.shopping-cart')) {
        var dropdowns = document.getElementsByClassName("shopping-cart-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
                shoppingcart.style.margin = '0 0 0 0';
            }
        }
    }  
}