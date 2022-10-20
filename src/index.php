<html>
<body>

        <?php echo "Use the form below to upload your photograph!";?><br>

        <form action="formvalues.php" method="post" enctype="multipart/form-data">

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

                <input type="submit" value="Upload Image" name="submit">
        </form>

</body>
</html>
