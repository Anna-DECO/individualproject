<html>
        <head>
                <meta charset="utf-8">
                <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="style.css">
        </head>

        <body>
        <p style="padding-bottom: 0px; margin-bottom: 0px;">Thanks for your submission!</p><br>
        <div id="uploadform">
        <p>You Submitted the following:</p><br>
        <p>Photographer: <?php echo $_POST["name"]; ?> <?php echo $_POST["lastname"]; ?><br>
        <p>Image Location: <?php echo $_POST["town"]; ?>, <?php echo $_POST["suburb"]; ?>, <?php echo $_POST["country"]; ?></p><br>
        <p>Image Upload Status:
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
        ?></p><br>
        <p style="color: black; font-size: 20px;"> Your submission will be reviewed and approved or denied for 'Anna's Photographs' collection </p>
        </div>
        <a href="index.html" style="margin-bottom: 20px; padding-bottom: 20px;">
             <button class="start-but" href="index.html">GO BACK TO HOME PAGE</button>
        </a>
        </body>
</html>
