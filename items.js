function setItems(images, titles, qty, prices) {
    window.localStorage.setItem('images', JSON.stringify(images));
    window.localStorage.setItem('titles', titles);
    window.localStorage.setItem('qty', qty);
    window.localStorage.setItem('prices', prices);
}
function showItems() {
    itemImages = JSON.parse(window.localStorage.getItem('images'))
    itemTitles = window.localStorage.getItem('titles')
    itemQty = window.localStorage.getItem('qty')
    itemPrices = window.localStorage.getItem('prices')

    var shopItem = document.createElement('tr')
    shopItem.className = 'shop-item'
    var row = document.createElement('td')

    if (itemImages.length > 0) {
        for (i = 0; 1 >= i; i++) {
            document.getElementById('orderedItems').appendChild(shopItem)
            for (j = 0; j < itemImages.length; j++) {
                var shopItemImage = document.createElement('img')
                shopItemImage.className = 'shop-item-image'
                shopItem.appendChild(row)
                switch(i) {
                    case 1:
                        shopItemImage.src = itemImages[j]
                        row.appendChild(shopItemImage)
                        break;
                    case 2:
                        document.append("<div id='product' class='shop-item-title'>" + itemTitles[j] + "</div>")
                        document.append("<div id='price' class='shop-item-price'>" + itemPrices[j] + " €/kpl" + "</div><br><br>")
                        document.append("Kpl: " + itemQty[j])
                        break;
                }
            }
        }
    } else {
        document.append("Empty")
    }
}