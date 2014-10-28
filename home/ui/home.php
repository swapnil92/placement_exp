<?php
session_start();
?>
<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="../../common/css/layout.css" >
        <link rel="stylesheet" href="../../common/css/defStyle.css" >
        <link rel="stylesheet" href="../css/home.css">
        
        <script type="text/javascript" src="../../common/js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/home.js"></script>
    </head>
    <body>
        <?php
        include '../../common/php/titleBar.php';    
        ?>
        <div id="wrapper">
            <div id="mainContainer">
                <div id="aboutUs" class="containerTile">
                    <div class="title">What is this about?</div>
                    <div class="innerContainer">
                        <div class="commentText">
                            <div class="imageContainer">
                                <img class="image medium" src="../../resource/image/img_gautam.png" alt="Image not found">
                                <span class="caption small">Gautam Singh</span>
                            </div>
                            <p>
                                One fine day (actually the time was 1.30 am..!), I got to hear the news of my friend had got placed in an organization 
                                which came for placement in our campus. He, after the incident described his adventurous and joyful journey of ending 
                                up in a job starting from the ragging period. I thought why not share such interesting moments with people like us, who 
                                struggle for getting into the job and after getting one, they end up in telling stories, rather very funny interesting 
                                and motivational stories.
                            </p>
                            <p>
                                I thought of building this platform a while ago then I really started just because I wanted to confirm if I am right about
                                the philosophy that WE love telling about our journey. After meeting a bunch of such people (including me). I started my 
                                work on this platform. It aims to make their story reach out to mass and as well as simultaneously teach juniors 
                                whatsoever it may be related to final year days (or placement days).
                            </p>
                        </div>
                        <center><h2 class="footNote">In short this is about SHARING..!!</h2></center>
                    </div>
                    <div id="actionSelector">
                        <label class="footNote">Wanna join.?
                            <a id="loginTab" class="link" href="#">Login</a> or
                            <a id="registerTab" class="link" href="#">Register</a>
                            for free
                        </label>
                    </div>
                </div>
                <div id="registerForm" class="containerTile">
                    <div class="title">Register</div>
                    <div class="innerContainer">
                        <form>
                            <div class="fieldSet">
                                <label class="fieldName">Name</label>
                                <input class="fieldValue inp-box medium" type="text" name="userName" placeholder="Your actual name">
                            </div>
                            <div class="fieldSet">
                                <label class="fieldName">Email ID</label>
                                <input class="fieldValue inp-box medium" type="text" name="userEmail" placeholder="Your email id">
                            </div>
                            <div class="fieldSet">
                                <label class="fieldName">Password</label>
                                <input class="fieldValue inp-box medium" type="password" name="userPass" placeholder="New Password">
                            </div>
                            <div class="fieldSet">
                                <label class="fieldName">Retype password</label>
                                <input class="fieldValue inp-box medium" type="password" name="userPass2" placeholder="Type the same password again">
                            </div>
                            <div class="buttonSet">
                                <input class="yesButton btn large primary" type="submit" name="register" value="Register">
                                <input class="noButton btn large secondary" type="reset" value="Clear">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="loginForm" class="containerTile" hidden>
                    <div class="title">Login</div>
                    <div class="innerContainer">
                        <form>
                            <div class="fieldSet">
                                <label class="fieldName">Email ID</label>
                                <input class="fieldValue inp-box medium" type="text" name="userName" placeholder="Your email id">
                            </div>
                            <div class="fieldSet">
                                <label class="fieldName">Password</label>
                                <input class="fieldValue inp-box medium" type="password" name="userName" placeholder="Your secret password">
                            </div>
                            <div class="fieldSet">
                                <label class="fieldName">&nbsp;</label>
                                <label class="linkText footNote">Forgot password? Click <a class="link" href="#">here</a>.</label>
                            </div>
                            <div class="buttonSet">
                                <input class="yesButton btn large primary" type="submit" name="login" value="Login">
                                <input class="noButton btn large secondary" type="reset" value="Clear">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>