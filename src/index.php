<html>
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
        <body>

        <h1>Use the form below to upload your photograph!</h1><br>

        <form id="uploadform" class="uploadformwords" action="formvalues.php" method="post" enctype="multipart/form-data">

                <br>
                <p>Who took this image?</p><br>
                First name: <input type="text" name="name"><br>
                Surname: <input type="text" name="lastname"><br>
                <br>
                <p>Where was your image taken?</p><br>
                Town: <input type="text" name="town"><br>
                Suburb : <input type="text" name="suburb"><br>
                Country : <input type="text" name="country"><br>
                <br>
                <p>Upload your image here (accepted file types include: jpg, jpeg, png)</p><br>
                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                <br>

                <input style="font-size: 40px;" type="submit" value="Upload Image" name="submit" id="fileToUploadSubmission">
        </form>

        </body>
</html>
