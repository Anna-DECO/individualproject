<html>
        <body>

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
        </body>
</html>
