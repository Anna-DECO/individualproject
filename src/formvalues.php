<html>
        <head>
                <meta charset="utf-8">
                <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="style.css">
        </head>

        <body>
        Thanks for your submission!

        You Submitted the following:
        Photographer: <?php echo $_POST["name"]; ?> <?php echo $_POST["lastname"]; ?><br>
        Image Location: <?php echo $_POST["town"]; ?>, <?php echo $_POST["suburb"]; ?>, <?php echo $_POST["country"]; ?><br>

        <?php
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                }
        }
        ?>
        <a href="index.html">
             <button class="start-but" href="index.html">GO BACK TO HOME PAGE</button>
        </a>
        </body>
</html>
