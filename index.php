<?php

include("includes/config.php");

session_destroy();

if(isset($_SESSION['userLoggedIn'])){
    $userLoggedIn = $_SESSION['userLoggedIn'];
}
else{
    header("Location: register.php");
}

?>

<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

    <div id="nowPlayingBarContainer">

        <div id="nowPayingBar">

            <div id="nowPlayingLeft">
                
            </div>

            <div id="nowPlayingCenter">

                <div class="content playerControl">

                    <div class="buttons">

                        <button class="controlButton shuffle" title="shuffle button">
                            <img src="assets/images/icons/shuffle.png">
                        </button>

                    </div>
                    
                </div>

            </div>

            <div id="nowPlayingRight">
                
            </div>

        </div>

    </div>



</body>
</html>
