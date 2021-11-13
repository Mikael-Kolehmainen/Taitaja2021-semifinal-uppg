<!DOCTYPE html>
<html>
    <head>
        <title>Mustapään Auto Oy</title>
        <link rel="icon" href="media/favicon.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="main.css" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <script src="slideshow.js" async></script>
        <script src="sticky.js" async></script>
        <script src="shopping-cart-dropdown.js" async></script>
        <script src="shopping-cart.js" async></script>
    </head>
    <body>
        <header>
            <img src="media/logo.jpg" alt="Company logo"></img>
        </header>
        <nav id="navbar">
            <ul>
                <a href="index.php#video"><li>RENKAIDEN VAIHTO</li></a>
                <a href="index.php#valikoima"><li>RENGAS VALIKOIMA</li></a>
                <div class="shopping-cart" style="float: right;">
                    <a onclick="dropdownfunction()" class="dropbtn fas fa-shopping-cart fa-lg" id="shopping-cart-btn"></a>
                    <div id="mydropdown" class="shopping-cart-content">
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column">TUOTE</span>
                            <span class="cart-quantity cart-header cart-column">MÄÄRÄ</span>
                            <span class="cart-price cart-header cart-column">HINTA</span>
                        </div>
                        <div class="cart-items">
                            
                        </div>
                        <div class="cart-total">
                            <strong class="cart-total-title">Yhteensä</strong>
                            <span class="cart-total-price">0€</span>
                        </div>
                        <button class="btn btn-primary btn-purchase" type="button">OSTA</button>
                    </div>
                </div>  
            </ul>
        </nav>
        <section id="home-page-section">
            <div class="slideshow-container">
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade" id="slide1">
                    <div class="numbertext">1 / 4</div>
                    <img src="media/rengas-1.png" style="width:100%; height:100%">
                    <div class="text"><a href="">Sesonkimainos</a></div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 4</div>
                    <img src="media/rengas-2.jpg" style="width:100%; height:100%">
                    <div class="text"><a href="">Sesonkimainos</a></div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 4</div>
                    <img src="media/rengas-3.jpg" style="width:100%; height:100%">
                    <div class="text"><a href="">Osta renkaat meiltä</a></div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 4</div>
                    <img src="media/rengas-4.jpg" style="width:100%; height:100%">
                    <div class="text"><a href="">Miten  vaihdat renkaat</a></div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
            <br>
            <article id="video">
                <h1>Miten vaihdat renkaat</h1>
                <iframe src="https://www.youtube.com/embed/WWIVmcXL-Is" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </article>
            <article id="valikoima">
                <h1>Rengas valikoima</h1>
                <select id="sorting">
                    <option value="0">Lajittele: Koko, pienin ensin</option>
                    <option value="1">Lajittele: Koko, suurin ensin</option>
                    <option value="2">Lajittele: Edullisin ensin</option>
                    <option value="3">Lajittele: Kallein hinta ensin</option>
                    <option value="4">Lajittele: A - Ö</option>
                    <option value="5">Lajittele: Ö - A</option>
                </select>
                <button id="searchsize" onclick="">Valitse rengaskoko <i class="far fa-circle"></i></button>
                <table>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "rengastietokanta";

                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql = "SELECT kuva, merkki, koko, hinta, tyyppi FROM renkaat";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr class='shop-item'>";
                                for($i = 1; $i <= 2; $i++) {
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
                            echo "0 results";
                        }

                        mysqli_close($conn);
                    ?>
                </table>
            </article>
        </section>
        <footer>
            <div id="rest">
                <img src="media/logo.jpg" alt="Company logo" style="padding-top: 20px"></img>
                <h3>Mustapään Auto Oy</h3>
                <p>Kirkkopuistikko 20</p>
                <p>65100 Vaasa</p>
                <p>Puh. 040 1234567</p>
                <p style="padding-bottom: 5px">info@mustapaan-auto.fi</p>
            </div>
            <aside>
                <h3>Löydä meidät</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1805.3714078292367!2d21.60626091650187!3d63.09614948313138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x467d605ceb03eadb%3A0x414e478949cc1230!2sKirkkopuistikko%2020%2C%2065100%20Vaasa!5e0!3m2!1sen!2sfi!4v1635956848113!5m2!1sen!2sfi" width="80%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </aside>
        </footer>
        <script src="shopping-cart.js"></script>
    </body>
</html>