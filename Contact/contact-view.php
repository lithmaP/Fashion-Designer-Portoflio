<html>
<head>
<title>Contact Us Form</title>
<link rel="stylesheet" type="text/css" href="style.css?ver=<?php echo rand(111,999)?>">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="head" id="head">
    <iframe src="../nav.html" frameborder="0" style="width: 100%; position: fixed;"></iframe>
</div>
</head>
<body>
    <div class="main">
        <div>
            <h1 align="left" id="home">Contact</h2>
                <p><br>Liviana Spade is a bi-coastal private stylist. Based in New York, she frequently travels to
                    work
                    with clients in  Los Angeles, and Seattle.
                    Please fill out the form below or email livianas@gmail.com to get in contact and she will get back to you as
                    soon
                    as possible.<br><br></p><br>
        </div>


        <div class="form-container">
            <form name="frmContact" id="" frmContact"" method="post"
                action="" enctype="multipart/form-data"
                onsubmit="return validateContactForm()">

                <div class="input-row">
                    <label style="padding-top: 20px;">Name</label> <span
                        id="userName-info" class="info"></span><br /> <input
                        type="text" class="input-field" name="userName"
                        id="userName" />
                </div>
                <div class="input-row">
                    <label>Email</label> <span id="userEmail-info"
                        class="info"></span><br /> <input type="text"
                        class="input-field" name="userEmail" id="userEmail" />
                </div>
                <div class="input-row">
                    <label>Subject</label> <span id="subject-info"
                        class="info"></span><br /> <input type="text"
                        class="input-field" name="subject" id="subject" />
                </div>
                <div class="input-row">
                    <label>Message</label> <span id="userMessage-info"
                        class="info"></span><br />
                    <textarea name="content" id="content"
                        class="input-field" cols="60" rows="6"></textarea>
                </div>
                <div>
                    <input type="submit" name="send" class="btn-submit"
                        value="Send" />

                    <div id="statusMessage"> 
                            <?php
                            if (! empty($message)) {
                                ?>
                                <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                            <?php
                            }
                            ?>
                        </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
</body>
<footer class="w3-container w3-padding-30 w3-center w3-opacity w3-light-grey w3-xlarge">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge">

        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</footer>
</html>