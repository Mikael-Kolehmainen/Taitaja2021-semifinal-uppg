var x = 1;

document.getElementById('qty').innerHTML = x;

function button1() {
    document.getElementById('qty').innerHTML = --x;
    if (x <= 0) {
        x = 1;
        document.getElementById('qty').innerHTML = x;
    }
    updatetotal();
}

function button2() {
    document.getElementById('qty').innerHTML = ++x;
    updatetotal();
}

function updatetotal() {
    document.getElementById('total').innerHTML = "Yhteensä: " + parseFloat(document.getElementById('price').innerHTML.replace(' €/kpl', '')) * x + " €";
}