<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,600" rel="stylesheet" type="text/css">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet">
    <title>Foodies</title>
    <style>
        body {
            background-color: rgba(76, 175, 80, 0.5);
            font-family: cursive;
            font-size: 16px;
            position: relative;
            height: 100vh;
            font-weight: 400;
            line-height: inherit;
        }

        .load {
            background-color: rgba(76, 175, 80, 0.5);
            font-family: serif;
        }
    </style>

<body>
    <?php
    $name = $_POST["name"];
    $sender = $_POST["email"]; ?></br>
    <?php echo "validating......";
    ?>
    <?php
    $dishname = $_POST["dishname"];
    $error = '';
    ?></br>
    <?php
    if (isset($_POST['submit'])) {
        $file = $_FILES['fileToUpload'];
        $filename = $_FILES['fileToUpload']['name'];
        $fileTmpname = $_FILES['fileToUpload']['tmp_name'];
        $filesize = $_FILES['fileToUpload']['size'];
        $fileerror = $_FILES['fileToUpload']['error'];
        $filetype = $_FILES['fileToUpload']['type'];

        $fileext = explode('.', $filename);
        $fileactualext = strtolower(end($fileext));
        $allowed = array('pdf', 'dox');
        if (in_array($fileactualext, $allowed)) {
            if ($fileerror === 0) {
                if ($filesize < 1000000000) {
                    $fileNewname = uniqid('', true) . '.' . $fileactualext;
                    $filedestination = 'uploads/' . $fileNewname;

                    move_uploaded_file($fileTmpname, $fileNewname);
                    echo "upload is successfull";
                } else {
                    echo "file is too large";
                }
            } else {
                echo "There was a error while uploding the file";
            }
        } else {
            echo "You can't applode this type of file!";
        }
    }
    ?>
    <?php
    if ($error == '') {
        $file_open = fopen("sigin.csv", "a");
        $no_rows = count(file("sigin.csv"));
        if ($no_rows > 1) {
            $no_rows = ($no_rows - 1) + 1;
        }
        $form_data = array(
            'username' => $name,
            'email' => $sender,
            'dishname' => $dishname

        );

        fputcsv($file_open, $form_data);
        $error = '<label class="text-success">Thank you for contacting us</label>';
        $name = '';
        $sender = '';
        $dishname = '';
        $fileNewname = '';
    }

    ?>

</body>

</html>