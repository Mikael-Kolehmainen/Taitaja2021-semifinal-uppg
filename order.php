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
        <script src="items.js" async></script>
    </head>
    <body onload="showItems()">
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
                        <button class="btn btn-primary btn-purchase" type="button">OSTA <i class='cart-icon fas fa-shopping-cart fa-lg'></i></button>
                    </div>
                </div>  
            </ul>
        </nav>
        <section id="home-page-section">
            <article>
                <h1>Kiitos tilauksesta!</h1>                
                <p id="date"></p>
                <script>
                    n =  new Date();
                    document.getElementById("date").innerHTML = n.getDate() + "." + (n.getMonth() + 1) + "." + n.getFullYear() + " " + n.getHours() + ":" + n.getMinutes();
                </script>

                <!-- Tuotteen tiedot -->
                <table id="valikoima">
                    
                </table>
                <p id="total"></p>

                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "asiakastietokanta";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['new-customer'])) {

                        $fname = $_REQUEST['fname'];
                        $lname = $_REQUEST['lname'];
                        $mail = $_REQUEST['e-mail'];
                        $phone = $_REQUEST['phone'];
                        $postnum = $_REQUEST['postnumber'];
                        $postaddress = $_REQUEST['address'];
                        $pw = $_REQUEST['pw1'];

                        $pw = password_hash($pw, PASSWORD_DEFAULT);

                        $sql = "INSERT INTO asiakaat (etunimi, sukunimi, osoite, postinumero, puhelinnumero, eposti, salasana)
                                VALUES ('$fname', '$lname', '$postaddress', '$postnum', '$phone', '$mail', '$pw')";

                        $amountOfWrongPws = 0;
                        
                        mysqli_query($conn, $sql);

                       /* if (mysqli_query($conn, $sql)) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }*/

                        if (isset($_POST['delivery'])) {
                            echo "Toimitustapa: ".$_POST['delivery']."<br>";
                        }    
                        echo $fname." ".$lname."<br>";
                        echo $postaddress.", ".$postnum."<br>";
                        echo $mail."<br>";
                        echo $phone."<br>";
                    } else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['old-customer'])) {
                        $sql = "SELECT id, etunimi, sukunimi, osoite, postinumero, puhelinnumero, eposti, salasana FROM asiakaat";
                        $result = mysqli_query($conn, $sql);

                        $mail = $_REQUEST['e-mail'];
                        $pw = $_REQUEST['pw1'];
                        if (isset($_POST['delivery'])) {
                            echo "Toimitustapa: ".$_POST['delivery']."<br>";
                        }
                        if (mysqli_num_rows($result) > 0) {
                            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                                $row = mysqli_fetch_assoc($result);
                                if ($mail == $row['eposti'] && password_verify($pw, $row['salasana']) == 1) {
                                    
                                    // Debugging
                                    echo $row['id']."<br>";

                                    echo $row['etunimi']." ".$row['sukunimi']."<br>";
                                    echo $row['osoite'].", ".$row['postinumero']."<br>";
                                    echo $row['eposti']."<br>";
                                    echo $row['puhelinnumero']."<br>";
                                } else if ($mail == $row['eposti'] && password_verify($pw, $row['salasana']) == 0) {
                                    // Password was wrong
                                    echo "<script>
                                            alert('Salasana on väärä.');
                                            window.location.href = 'sign-in.php';
                                            </script>";
                                } else if ($mail != $row['eposti']) {
                                    // Email was wrong
                                    // Amount of wrong passwords == number of rows then email was wrong
                                    if () {

                                    }
                                }
                            }
                        }
                    }
                    mysqli_close($conn);
                ?>
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