<html>
    <head>
        <title>Hash test</title>
        <link href="../main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <form id="customer" name="test" action="hash-test.php" method="POST" autocomplete="off">
        <div class="floating-label-group">
            <input type="text" id="password" name="pw" class="form-control" autocomplete="off" autofocus required />
            <label class="floating-label">Testi salasana</label>
        </div>
    </form>
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
            echo mysqli_num_rows($result)."<br>";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo password_verify("12345678", $row['salasana'])."<br>";
                }
            }
        ?>
    </body>
</html>