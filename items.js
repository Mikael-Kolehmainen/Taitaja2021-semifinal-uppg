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
        for (i = 0; itemImages.length >= i; i++) {
            // document.write
            echo "<tr class='shop-item'>";
            for(i = 1; i <= 2; i++) {
                echo "<td>";
                switch($i) {
                    case 1:
                        $image = $row['kuva'];
                        echo "<img src='$image' class='shop-item-image'>";
                        break;
                    case 2:
                        echo "<div id='product' class='shop-item-title'>".$row["merkki"]."</div>";
                        echo "<ul id='desc'>";
                            echo "<li>".$row["koko"]."</li>";
                            if ($row["tyyppi"] == 0) {
                                echo "<li>Kesärengas</li>";
                            } else {
                                echo "<li>Nastarengas</li>";
                            }
                        echo "</ul>";
                        echo "<div id='price' class='shop-item-price'>".$row["hinta"]." €/kpl"."</div><br><br>";
                        echo "<button id='cart' class='shop-item-button'/>Lisää ostoskoriin <i class='cart-icon fas fa-shopping-cart fa-lg'></i></button";
                        echo "</ul>";
                        break;
                }
                echo "</td>";
            }
            echo "</tr>";
        }
    } else {
        echo "Empty";
    }

    console.log(itemImages)
    console.log(itemTitles)
    console.log(itemQty)
    console.log(itemPrices)
}