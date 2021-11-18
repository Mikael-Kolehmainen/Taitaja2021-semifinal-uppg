function setItems(images, titles, qty, prices) {
    window.localStorage.setItem('images', images);
    window.localStorage.setItem('titles', titles);
    window.localStorage.setItem('qty', qty);
    window.localStorage.setItem('prices', prices);
}
function showItems() {
    itemImages = window.localStorage.getItem('images')
    itemTitles = window.localStorage.getItem('titles')
    itemQty = window.localStorage.getItem('qty')
    itemPrices = window.localStorage.getItem('prices')

    if (itemImages.length > 0) {
        for (i = 0; 1 >= i; i++) {
            // document.write
            document.getElementById('orderedItems').appendChild(document.createTextNode("<tr class=shop-item"))
            for (j = 1; j <= 2; j++) {
                document.append("<td>")
                switch(i) {
                    case 1:
                        document.append("<img src=" + itemImages[j] + " class='shop-item-image'>")
                        break;
                    case 2:
                        document.append("<div id='product' class='shop-item-title'>" + itemTitles[j] + "</div>")
                        document.append("<div id='price' class='shop-item-price'>" + itemPrices[j] + " €/kpl" + "</div><br><br>")
                        document.append("Kpl: " + itemQty[j])
                        break;
                }
                document.append("</td>")
            }
            document.append("</tr>")
        }
    } else {
        document.append("Empty")
    }
    console.log(itemImages)
    console.log(itemTitles)
    console.log(itemQty)
    console.log(itemPrices)
}