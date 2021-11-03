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
            <div class="mySlides fade">
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
        <footer></footer>
    </body>
</html>