<html lang="en">
    <head>
 <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://fonts.googleapis.com/css?family=Lato:100,300,600" rel="stylesheet" type="text/css">
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" >
 <title>Foodies</title>
       <style>
           body {
               background-color:rgba(76, 175, 80, 0.5);
               font-family: cursive;
                 font-size: 16px;
             position: relative;
               height: 100vh;
             font-weight: 400;
           line-height: inherit;
           }    
           .load{
               background-color: rgba(76, 175, 80, 0.5) ;
               font-family: serif;
           }
    </style>
    <body>
        <?php
        $name=$_GET["name"];
        $sender= $_GET["email"];?></br> 
        <?php
        echo "Welcome $name";?></br>
    <?php
    echo "Your email address: $sender"; ?></br>


        </body>
    </html>