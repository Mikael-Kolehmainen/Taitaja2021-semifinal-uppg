function setItems(images, titles, qty, prices, total) {
    window.localStorage.setItem('images', JSON.stringify(images))
    window.localStorage.setItem('titles', JSON.stringify(titles))
    window.localStorage.setItem('qty', JSON.stringify(qty))
    window.localStorage.setItem('prices', JSON.stringify(prices))
    window.localStorage.setItem('total', total)
}
function showItems() {
    itemImages = JSON.parse(window.localStorage.getItem('images'))
    itemTitles = JSON.parse(window.localStorage.getItem('titles'))
    itemQty = JSON.parse(window.localStorage.getItem('qty'))
    itemPrices = JSON.parse(window.localStorage.getItem('prices'))
    itemTotal = window.localStorage.getItem('total')

    if (itemImages.length > 0) {
        for (j = 0; j < itemImages.length; j++) {
            var shopItem = document.createElement('tr')
            shopItem.className = 'shop-item'
            document.getElementById('valikoima').appendChild(shopItem)

            var shopItemImage = document.createElement('img')
            shopItemImage.className = 'shop-item-image'
            shopItemImage.src = itemImages[j]

            var cell = document.createElement('td')
            shopItem.appendChild(cell)

            cell.appendChild(shopItemImage)

            var shopItemTitle = document.createElement('div')
            shopItemTitle.id = 'product'
            shopItemTitle.className = 'shop-item-title'
            shopItemTitle.innerText = itemTitles[j]

            var cell = document.createElement('td')
            shopItem.appendChild(cell)

            cell.appendChild(shopItemTitle)
            
            var shopItemPrice = document.createElement('div')
            shopItemPrice.id = 'price'
            shopItemPrice.className = 'shop-item-price'
            shopItemPrice.innerText = itemPrices[j] + "/kpl"

            cell.appendChild(shopItemPrice)

            var shopItemQty = document.createElement('div')
            shopItemQty.innerText = "Kpl: " + itemQty[j]

            cell.appendChild(shopItemQty)
        }
        document.getElementById('total').innerText = "Yhteensä: " + itemTotal
    } else {
        document.append("Empty")
    }
}