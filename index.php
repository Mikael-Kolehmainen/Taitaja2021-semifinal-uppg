<!DOCTYPE html>
<html>
    <head>
        <link href="main.css" rel="stylesheet" type="text/css">
        <script src="slideshow.js"></script>
    </head>
    <body>
        <header>
            <img src="media/logo.jpg" alt="Company logo"></img>
        </header>
        <nav>
            <ul>
                <a href="index.php" class="active"><li class="active">KOTI</li></a>
            </ul>
        </nav>
        <section>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1805.3714078292367!2d21.60626091650187!3d63.09614948313138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x467d605ceb03eadb%3A0x414e478949cc1230!2sKirkkopuistikko%2020%2C%2065100%20Vaasa!5e0!3m2!1sen!2sfi!4v1635956848113!5m2!1sen!2sfi" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            </aside>
        </footer>
    </body>
</html>