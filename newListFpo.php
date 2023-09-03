<html>
<!-- this script is from font awsome for plus and minus icons  -->
<script src="https://kit.fontawesome.com/c3f4bf0210.js" crossorigin="anonymous"></script>

<head>
    <title>list FPO</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap');

    * {
        margin: 0;
        padding: 0;
        font-family: 'Roboto Condensed', sans-serif;
    }

    body {
        height: auto;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .forms-container {
        min-height: 100vh;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 20px 0;
    }

    .form-container {
        height: 100vh;
        width: 61vw;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        background: rgb(248, 248, 248);
    }

    /* by default all other forms are closed  */
    #form-container-2 {
        display: none;
    }

    #form-container-3 {
        display: none;
        height: 40vh !important;
    }

    #form-container-3 .input-container {
        height: 25%;
    }

    #form-container-3 input[type=file] {
        cursor: pointer;
    }

    .list-fpo-form {
        width: 80%;
        height: 100%;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: space-evenly;
    }

    .list-fpo-form input {
        border: 1px solid black;
        height: 40%;
        width: 100%;
        border-radius: 4px;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 20px;
        padding: 3px 8px;
    }

    .list-fpo-form label {
        font-size: 20px;
    }

    .list-fpo-form :last-child {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .list-fpo-form input[type=file] {
        font-size: 15px;
    }

    .input-container {
        width: 100%;
        height: 10%;
        /* border: 1px solid green; */
    }

    .form-title {
        text-align: center;
        color: green;
        width: 60%;
        padding: 1%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        background: rgb(233, 230, 230);
        margin-top: 20px;
    }

    .form-number {
        height: 5%;
        padding: 3px 7px;
        background: rgb(201, 198, 198);
        font-size: 20px;
    }

    .save-btn {
        border-radius: 5px;
        width: 25%;
        height: 50%;
        font-size: 18px;
        background-color: #0093E9;
        background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
        color: white;
        border: 0 0 5px;
        border: none;
        display: grid;
        place-items: center;
        cursor: pointer;
    }

    header {
        width: 100vw;
    }

    .container {
        height: 10%;
        width: 100%;
        background-color: #0093E9;
        background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
    }

    #navlist {
        display: flex;
        justify-content: space-between;
        padding: 2%;
        list-style: none;
    }

    #navlist p {
        font-size: 1.7rem;
        color: white;
    }

    #a-list {
        display: flex;
        gap: 20px;
    }

    a {
        text-decoration: none;
        list-style: none;
        font-size: 1.7rem;
        font-style: none;
    }

    #footer {
        text-align: center;
        height: 6vh;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #0093E9;
        background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
    }


    .form-plus {
        font-size: 25px;
        color: black;
        position: absolute;
        right: 5%;
        cursor: pointer;
    }

    .fa-minus {
        color: rgb(236, 98, 98);
    }

    /* this css is for popups  */
    .red-alert {
        height: 70px;
        width: 100%;
        font-size: 20px;
        justify-content: center;
        align-items: center;
        position: relative;
        color: white;
        display: flex;
        background: red;
    }

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

<body>
    <header>
        <div class="container">
            <div class="navbar">
                <ul id="navlist">
                    <li>
                        <p> AgroFounders <img src="" alt=""> </p>
                    </li>
                    <li>
                        <div id="a-list">
                            <a href="">Home</a>
                            <a href="">Contact</a>
                            <a href="">About</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <?php
    if($_GET['status'] == "notdone"){
        echo '
    <div class="red-alert" id="red-alert">
        UNSUCCESS! Please make sure you filled up the all inputs.
        <span class="alert-close" id="red-close"><i class="fa-solid fa-xmark"></i></span>
    </div>';
}
    ?>
    <form action="handleListFpo.php" method="POST" enctype="multipart/form-data" class="forms-container"
        id="list-fpo-main-form">
        <h1 class="form-title"><span class="form-number">1</span>Enter Entity Details<i
                class="form-plus fa-solid fa-minus"></i></h1>
        <div class="form-container">
            <div class="list-fpo-form">
                <div class="input-container">
                    <label for="">Nature Of Entity:</label><br>
                    <input type="text" name="nature">
                </div>
                <div class="input-container">
                    <label> Industry:</label> <br>
                    <input type="text" name="industry"><br>
                </div>
                <div class="input-container">
                    <label> Sector:</label> <br>
                    <input type="text" name="sector"><br>
                </div>
                <div class="input-container">
                    <label> Categoires:</label> <br>
                    <input type="text" name="category">
                </div>
                <div class="input-container">
                    <label> Company Incorporation Number:</label><br>
                    <input type="text" name="incnumber">
                </div>
                <div class="input-container">
                    <label> Name Of The Entity:</label> <br>
                    <input type="text" name="name">
                </div>
                <div class="input-container">
                    <label> Registration:</label> <br>
                    <input type="text" name="registration">
                </div>
                <div class="input-container">
                    <label>Pan:</label><br>
                    <input type="text" name="pan"><br>
                </div>
                <div class="input-container">
                    <button class="save-btn" type="button">SAVE AND NEXT</button>
                </div>
            </div>
        </div>
        <h1 class="form-title"><span class="form-number">2</span>Full address (office)<i
                class="form-plus fa-solid fa-plus"></i></h1>
        <div class="form-container" id="form-container-2">
            <div class="list-fpo-form">
                <div class="input-container">
                    <label for="">Address line 1 :</label><br>
                    <input type="text" name="addr_1">
                </div>
                <div class="input-container">
                    <label> Address line 2 :</label> <br>
                    <input type="text" name="addr_2"><br>
                </div>
                <div class="input-container">
                    <label> Address line 3 :</label> <br>
                    <input type="text" name="addr_3"><br>
                </div>
                <div class="input-container">
                    <label> City/Village :</label> <br>
                    <input type="text" name="city">
                </div>
                <div class="input-container">
                    <label> State/Union Territory :</label><br>
                    <input type="text" name="state">
                </div>
                <div class="input-container">
                    <label> Pin code :</label> <br>
                    <input type="text" name="pincode">
                </div>
                <div class="input-container">
                    <label> District :</label> <br>
                    <input type="text" name="district">
                </div>
                <div class="input-container">
                    <label>Sub district :</label><br>
                    <input type="text" name="subdistrict"><br>
                </div>
                <div class="input-container">
                    <button class="save-btn" type="button">SAVE AND NEXT</button>
                </div>
            </div>
        </div>
        <h1 class="form-title"><span class="form-number">3</span>Self cirtification<i
                class="form-plus fa-solid fa-plus"></i></h1>
        <div class="form-container" id="form-container-3">
            <div class="list-fpo-form">
                <div class="input-container">
                    <label for="">Incorporation/Registration Certificate :</label><br>
                    <input type="file" name="reg_cert">
                </div>
                <div class="input-container">
                    <label> Authorization Letter :</label> <br>
                    <input type="file" name="auth_letter"><br>
                </div>
                <div class="input-container">
                    <input type="submit" value="submit" name="submit" class="save-btn">
                    <!-- <button class="save-btn" type="submit" name="submit">SUBMIT</button> -->
                </div>
            </div>
        </div>
    </form>
    <footer id="footer">
        &copy; AgroFounders
    </footer>
</body>

</html>
<script>
// this javascript is for opening and closing the forms along with the plus and minus btns 
const mainFrom = document.getElementById("list-fpo-main-form");
const formArr = document.querySelectorAll(".form-container");
const plusBtns = document.querySelectorAll(".form-plus");
const saveBtnArr = document.querySelectorAll(".save-btn");

// these constants are of popups 
const redAlert = document.getElementById("red-alert");
const rAlertClose = document.getElementById("red-close");





plusBtns.forEach(element => {
    element.addEventListener("click", (event) => {
        for (let i = 0; i < plusBtns.length; i++) {
            index = Array.prototype.indexOf.call(plusBtns, event.target);
        }
        classListString = element.getAttribute("class");
        classNameArr = classListString.split(" ");
        if (classNameArr[2] === "fa-plus") {
            element.classList.replace("fa-plus", "fa-minus");
            formArr[index].style.display = "flex";
        } else {
            element.classList.replace("fa-minus", "fa-plus");
            formArr[index].style.display = "none";
        }
    })
});

// this js is for closing the form on save and next and opening the next from 
saveBtnArr.forEach((btn) => {
    btn.addEventListener("click", (event) => {
        for (let i = 0; i < saveBtnArr.length; i++) {
            index = Array.prototype.indexOf.call(saveBtnArr, event.target);
        }
        if (index < 2) {
            classListString = plusBtns[index].getAttribute("class");
            classNameArr = classListString.split(" ");
            if (classNameArr[2] === "fa-plus") {
                plusBtns[index].classList.replace("fa-plus", "fa-minus");
                // formArr[index].style.display = "flex";
            } else {
                plusBtns[index].classList.replace("fa-minus", "fa-plus");
                // formArr[index].style.display = "none";
            }
            formArr[index++].style.display = "none";
            plusBtns[index].classList.replace("fa-plus", "fa-minus");
            formArr[index].style.display = "flex";
        }
    })
})


// this js id for closing the popups 
rAlertClose.onclick = function() {
    redAlert.style.display = "none";
}
</script>