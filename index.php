<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://kit.fontawesome.com/c3f4bf0210.js" crossorigin="anonymous"></script>
    <style>
    @import url("css/header.css");
    @import url("css/footer.css");
    @import url("css/drpdwnbtn.css");
    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 20px 8px;
        -webkit-transition-duration: 0.2s;
        /* Safari 0.4*/
        transition-duration: 0.2s;
        /*0.4*/
        cursor: pointer;
    }

    .button1 {
        background-color: white;
        color: black;
        /* black*/
        border: 3px solid #4CAF50;
        border-radius: 5px;
    }

    .button1:hover {
        background-color: #4CAF50;
        color: white;
    }



    .middle {
        color: green;
        font-size: 15px;
    }

    .lower {
        color: green;
        font-size: 27px;
    }


    input[type=text],
    select,
    textarea {
        width: 50%;
        padding: 12px;
        border: 1px solid;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px;
    }

    /* CSS for slideshow img */
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Verdana, sans-serif;
    }

    .image-sliderfade {
        display: none;
    }

    img {
        vertical-align: middle;
    }


    /* Caption text */


    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 20px 15px;
        position: absolute;
        right: 10px;
        bottom: 10px;
        width: 40%;
        background: rgba(0, 0, 0, .7);
        text-align: left;
    }

    @-webkit-keyframes fade-image {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    @keyframes fade-image {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .text {
            font-size: 11px
        }

    }


    /* css for about */
    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    .active,
    .accordion:hover {
        background-color: #ccc;
    }

    .accordion:after {
        content: '\002B';
        color: #777;
        font-weight: bold;
        float: right;
        margin-left: 5px;
    }

    .active:after {
        content: "\2212";
    }

    .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }

    .container {
        position: relative;
        width: 100%;
    }

    .container img {
        width: 100%;
        height: 80%;

    }

    .container .btn {
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: white;
        color: green;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
        border: 2px solid #4CAF50;
    }

    .container .btn:hover {
        background-color: #4CAF50;
        color: white;
        border: 2px solid #4CAF50;
    }

    .video {

        padding: 40px 530px 10px;
        vertical-align: middle;

    }

    .topnav {
        overflow: hidden;
        background-color: #4CAF50;
        height: 100px;
        border: 1px solid black;

    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 13px;
        text-decoration: none;
        font-size: 60px;
        font-weight: bold;
    }

    /* this is for green alert  */
    .alert-close {
        position: absolute;
        top: 50%;
        right: 5%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    .alert-close:hover {
        color: gray;
    }

    .green-alert {
        height: 70px;
        width: 100%;
        font-size: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        color: white;
        background: green;
    }
    </style>
</head>
<!-- body -->

<div class="topnav">

    <a href="index.html">WefoundingFarmers</a>

</div>

<!-- header -->
<header>

    <form>
        <div class="navbar">
            <?php
      if(isset($_GET['status']) && $_GET['status'] == "done"){
        echo '
        <div class="green-alert alert" id="green-alert">
            SUCCESS! Your information has been recorded.
            <span class="green-alert-close alert-close"><i class="fa-solid fa-xmark"></i></span>
        </div>';
    }
      ?>
            <table>
                <tr>
                    <td> VIEW PRODUCTS</td>
                    <td> ABOUT FPOS</td>
                    <td> <a href="newListFpo.php?status=none">LIST FPOS</a></td>
                    <td> JOIN FPOS</td>
                    <td> CONTACT US</td>
                </tr>
            </table>
        </div>
        </div>
        </div>
    </form>


    <div class="container">
        <img src="images/1.png" alt="1" style="width:100%">
        <button class="btn"><strong>View Products</strong></button>
        <a href="pro.html" class="btn"><strong>View Products</strong></a>
    </div>


    <div class="container">
        <img src="images/2.png" alt="1" style="width:100%">
        <button class="btn"><strong>List FPO</strong></button>
        <a href="pro.html" class="btn"><strong>View Products</strong></a>
    </div>

    <div class="container">
        <img src="images/3.png" alt="1" style="width:100%">
        <button class="btn"><strong>Join FPO</strong></button>
        <a href="pro.html" class="btn"><strong>View Products</strong></a>
    </div>

    </div>
    <br><br>
    <hr />
    <br>

    <div class="video">
        <h2 align="center">
            <font size="+7">Learn More About FPO<strong class="black"></font></strong>
        </h2>
        <video width="640" height="480" controls>
            <source src="images/fpo.mp4" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
    </div>
    <hr />

    <br><br><br>


    <h2 align="center">
        <font size="+7">Meet Our Team <strong class="black"></font></strong>
    </h2>
    <img src="images/team1.png" alt="team" width="100%">

    <hr width="100%" size="3" color="black">

    <hr />
    <br><br><br>


    <h2 align="center">
        <font size="+7">Our Vision & Mission <strong class="black"></font></strong>
    </h2>
    <img src="images/mission3.png" alt="mission" width="100%">

    <hr />
    <br><br><br><br><br><br><br><br><br>

    <div class="footer">
        <div class="footer-text-left">
            <a href="index.html" class="menu">home</a>
            <a href="#" class="menu">about</a>
            <a href="#" class="menu">credits</a>


            <div class="footer-content-right">
                <a href="#"><img src="images/linked_in.webp" class="icon-style" alt="limkedin icon"></a>
                <a href="#"><img src="images/whatsapp.webp" class="icon-style" alt="whatsapp icon"></a>
                <a href="#"><img src="images/instagram.webp" class="icon-style" alt="instagram"></a>
                <a href="#"><img src="images/github.webp" class="icon-style" alt="Github icon"></a>
                <a href="#"><img src="images/twitter.webp" class="icon-style" alt="Twitter icon"></a>
                <a href="#"><img src="images/email.webp" class="icon-style" alt="Emailicon"></a>
            </div>
        </div>
        </body>
        <script>
          const gAlertClose = document.querySelector(".green-alert-close");
          const greenAlert = document.getElementById("green-alert");
          gAlertClose.onclick = function(){
            greenAlert.style.display = "none";
          }
        </script>

</html>