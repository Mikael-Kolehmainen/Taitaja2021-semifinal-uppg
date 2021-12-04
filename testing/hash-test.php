<html>
    <head>
        <title>Hash test</title>
    </head>
    <body>
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

            $sql = "SELECT salasana FROM asiakaat";

            $result = mysqli_query($conn, $sql);
            echo mysqli_num_rows($result);
            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                echo argon2.verify(password, $result[$i]);
            }
        ?>
    </body>
</html>