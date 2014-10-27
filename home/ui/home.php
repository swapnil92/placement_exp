<?php
session_start();
?>
<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="../../common/css/layout.css" >
        <link rel="stylesheet" href="../../common/css/defStyle.css" >
        <link rel="stylesheet" href="../css/home.css">
    </head>
    <body>
        <?php
        include '../../common/php/titleBar.php';    
        ?>
        <div id="wrapper">
            <div id="mainContainer">
                <div id="aboutUs" class="containerTile">
                    <span class="title">What is this about?</span>
                    <div class="commentBox">
                        <div class="mediumImageContainer">
                            <img class="image" src="../../resource/image/img_gautam.png" alt="Image not found">
                            <label class="imageCaption footNote">Gautam Singh</label>
                        </div>
                        <span class="commentText">
                            One fine day (actually the time was 1.30 am..!), I got to hear the news of my friend had got placed in a
                            in an organization which came for placement in our campus.
                            He, after the incident described his adventurous and joyful journey of ending up in a job starting from the ragging period. 
                            I thought why not share such interesting moments with people like us, who struggle for getting into the job and after getting 
                            one, they end up in telling stories, rather very funny interesting and motivational stories.
                            <br><br>
                            I thought of building this platform a while ago then I really started just because I wanted to confirm if I am right about
                            the philosophy that WE love telling about our journey. After meeting a bunch of such people (including me) I started my 
                            work on this platform. It aims to make their story reach out to mass and as well as simultaneously teach juniors whatsoever
                            it may be related to final year days (or placement days).
                            <br><br>
                            <center><u><span class="footNote">In short this is about SHARING..!!</span></u></center>
                        </span>
                    </div>
                </div>
                <div id="registerForm" class="containerTile">
                    <span class="title">Register</span>
                    <form>
                        <div class="fieldSet">
                            <label class="fieldName">Name</label>
                            <input class="fieldValue" type="text" name="userName" placeholder="Your actual name">
                        </div>
                        <div class="fieldSet">
                            <label class="fieldName">Email ID</label>
                            <input class="fieldValue" type="text" name="userEmail" placeholder="Your email id">
                        </div>
                        <div class="fieldSet">
                            <label class="fieldName">Password</label>
                            <input class="fieldValue" type="password" name="userPass" placeholder="New Password">
                        </div>
                        <div class="fieldSet">
                            <label class="fieldName">Retype password</label>
                            <input class="fieldValue" type="password" name="userPass2" placeholder="Type the same password again">
                        </div>
                        <div class="buttonSet">
                            <input class="yesButton button" type="submit" name="register" value="Register">
                            <input class="noButton button" type="reset" value="Cancel">
                        </div>
                    </form>
                </div>
                <div id="loginForm" class="containerTile">
                    <span class="title">Login</span>
                    <form>
                        <div class="fieldSet">
                            <label class="fieldName">Email ID</label>
                            <input class="fieldValue" type="text" name="userName" placeholder="Your email id">
                        </div>
                        <div class="fieldSet">
                            <label class="fieldName">Password</label>
                            <input class="fieldValue" type="password" name="userName" placeholder="Your secret password">
                        </div>
                        <div class="buttonSet">
                            <input class="yesButton button" type="submit" name="login" value="Login">
                            <input class="noButton button" type="reset" value="Cancel">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>