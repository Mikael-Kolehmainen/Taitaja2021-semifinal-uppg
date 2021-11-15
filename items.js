const itemImages = []
const itemTitles = []
const itemQty = []
const itemPrices = []

function getItems(images, titles, qty, prices) {
    itemImages.push(images)
    itemTitles.push(titles)
    itemQty.push(qty)
    itemPrices.push(prices)
    console.log(images, titles, qty, prices)
}
function showItems() {
    console.log(itemImages, itemTitles, itemQty, itemPrices)
}