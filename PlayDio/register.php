<?php

if (isset($_POST['reg'])) {
    include 'conn.php';

    $u_img_name = $_FILES['u_img']['name'];
    $u_img_tmp = $_FILES['u_img']['tmp_name'];

    move_uploaded_file($u_img_tmp, "user_images/" . $u_img_name);

    $u_fname = mysqli_real_escape_string($conn, $_POST['u_fname']);
    $u_lname = mysqli_real_escape_string($conn, $_POST['u_lname']);
    $u_uname = mysqli_real_escape_string($conn, $_POST['u_name']);
    $u_email = mysqli_real_escape_string($conn, $_POST['u_email']);
    $u_pswd = mysqli_real_escape_string($conn, $_POST['u_passowrd']);
    $u_phone = mysqli_real_escape_string($conn, $_POST['u_phone']);
    $u_loc = mysqli_real_escape_string($conn, $_POST['u_loc']);
    $u_age = mysqli_real_escape_string($conn, $_POST['u_age']);
    $u_dob = mysqli_real_escape_string($conn, $_POST['u_dob']);
    // $u_terms = mysqli_real_escape_string($conn, $_POST['u_terms']);
    $u_added = date('Y-m-d h:i:s');
    $status = $_POST['u_status'];


    $sql = "INSERT INTO `user`(`u_fname`, `u_lname`, `u_username`, `u_email`, `u_password`, `u_img`, `u_location`, `u_age`, `u_dob`, `u_added`, `u_phone`, `u_status`) VALUES ('{$u_fname}', '{$u_lname}', '{$u_uname}', '{$u_email}', '{$u_pswd}', '{$u_img_name}', '{$u_loc}','{$u_age}','{$u_dob}','{$u_added}', '{$u_phone}', '{$status}')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location: login.php');
        echo 'Data Inserted';
    } else {
        die();
        echo 'Error';
    }
}

//include('links.php');
include('no-user-header.php');
?>

<title> PlayDio | Register </title>

<style>
    .form-container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 90vh;
        width: 100%;
    }

    ::selection {
        color: var(--white);
        background: var(--main-color);
    }

    .container {
        width: 410px;
        height: 550px;
        background: var(--white);
        text-align: center;
        border-radius: 5px;
        padding: 50px 35px 10px 35px;
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 1px solid var(--border-color);
        box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
    }

    .container header {
        font-size: 30px;
        font-weight: 600;
        margin: 0 0 20px 0;
        margin-top: -30px
    }

    .container .form-outer {
        width: 100%;
        overflow: hidden;
    }

    .container .form-outer form {
        display: flex;
        width: 400%;
    }

    .form-outer form .page {
        width: 25%;
        transition: margin-left 0.3s ease-in-out;
    }

    .form-outer form .page .title {
        text-align: left;
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .form-outer form .page .field {
        width: 335px;
        height: 45px;
        margin: 45px 0;
        margin-bottom: 35px;
        display: flex;
        position: relative;
    }

    form .page .field .label {
        position: absolute;
        top: -30px;
        font-weight: 500;
    }


    form .page .field input {
        height: 100%;
        width: 100%;
        border: 1px solid lightgrey;
        border-radius: 5px;
        padding-left: 15px;
        font-size: 18px;
    }

    form .page .field input[type='number']::-webkit-inner-spin-button,
    form .page .field input[type='number']::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }

    form .page .field select {
        width: 100%;
        padding-left: 10px;
        font-size: 17px;
        font-weight: 500;
    }

    form .page .field button {
        width: 100%;
        height: calc(100% + 5px);
        border: none;
        background: var(--main-color);
        margin-top: -20px;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: 0.5s ease;
    }

    form .page .field button:hover {
        background: #000;
    }

    form .page .btns button {
        margin-top: -20px !important;
    }

    form .page .btns button.prev {
        margin-right: 3px;
        font-size: 17px;
    }

    form .page .btns button.next {
        margin-left: 3px;
    }

    .container .progress-bar {
        display: flex;
        margin: 30px 0;
        margin-bottom: 25px;
        user-select: none;
    }

    .container .progress-bar .step {
        text-align: center;
        width: 100%;
        position: relative;
    }

    .container .progress-bar .step p {
        font-weight: 500;
        font-size: 17px;
        color: #000;
        margin-bottom: 7px;
    }

    .progress-bar .step .bullet {
        height: 25px;
        width: 25px;
        border: 2px solid #000;
        display: inline-block;
        border-radius: 50%;
        position: relative;
        transition: 0.2s;
        font-weight: 500;
        font-size: 17px;
        line-height: 25px;
    }

    .progress-bar .step .bullet.active {
        border-color: var(--main-color);
        background: var(--main-color);
    }

    .progress-bar .step .bullet span {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }

    .progress-bar .step .bullet.active span {
        display: none;
    }

    .progress-bar .step .bullet:before,
    .progress-bar .step .bullet:after {
        position: absolute;
        content: '';
        bottom: 10px;
        right: -59px;
        height: 3px;
        width: 59px;
        background: #262626;
    }

    .progress-bar .step .bullet.active:after {
        background: var(--main-color);
        transform: scaleX(0);
        transform-origin: left;
        animation: animate 0.3s linear forwards;
    }

    @keyframes animate {
        100% {
            transform: scaleX(1);
        }
    }

    .progress-bar .step:last-child .bullet:before,
    .progress-bar .step:last-child .bullet:after {
        display: none;
    }

    .progress-bar .step p.active {
        color: var(--main-color);
        transition: 0.2s linear;
    }

    .progress-bar .step .check {
        position: absolute;
        left: 50%;
        top: 70%;
        font-size: 15px;
        transform: translate(-50%, -50%);
        display: none;
    }

    .progress-bar .step .check.active {
        display: block;
        color: #fff;
    }

    form .page .field .flex-div {
        width: 100%;
        justify-content: center;
        align-items: flex-start;
        text-align: start;
    }

    .form .page .field .flex-div input {
        height: 20px;
        width: 20px;
        border-radius: 5px;
        padding-left: 5px;
        font-size: 15px;
    }
</style>
<div class="container">
    <header>Signup Form</header>
    <div class="progress-bar">
        <div class="step">
            <p>
                Step 1
            </p>
            <div class="bullet">
                <span>1</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>
        <div class="step">
            <p>
                Step 2
            </p>
            <div class="bullet">
                <span>2</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>
        <div class="step">
            <p>
                Step 3
            </p>
            <div class="bullet">
                <span>3</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>
        <div class="step">
            <p>
                Step 4
            </p>
            <div class="bullet">
                <span>4</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>
    </div>
    <div class="form-outer">
        <form method="post" enctype="multipart/form-data">
            <div class="page slide-page">
                <div class="title">
                    Display Information:
                </div>
                <div class="field">
                    <div class="label">
                        First Names <span class="text-red">*</span>
                    </div>
                    <input type="text" name="u_fname">
                </div>
                <div class="field">
                    <div class="label">
                        Last Name
                    </div>
                    <input type="text" name="u_lname">
                </div>
                <div class="field">
                    <div class="label">
                        Username <span class="text-red">*</span>
                    </div>
                    <input type="text" name="u_name" id="u_name" onkeyup="checkAvailability()" autocomplete="off" min="8">
                </div>
                <div id="exist"></div>
                <div class="field">
                    <button class="firstNext next">Next</button>
                </div>
            </div>
            <div class="page">
                <div class="title">
                    Account Information:
                </div>
                <div class="field">
                    <div class="label">
                        Email Address <span class="text-red">*</span>
                    </div>
                    <input type="email" name="u_email">
                </div>
                <div class="field">
                    <div class="label">
                        Password <span class="text-red">*</span>
                    </div>
                    <input type="password" name="u_passowrd">
                </div>
                <div class="field">
                    <div class="label">
                        Contact <span class="text-red">*</span>
                    </div>
                    <input type="number" name="u_phone">
                </div>
                <div class="field btns">
                    <button class="prev-1 prev">Previous</button>
                    <button class="next-1 next">Next</button>
                </div>
            </div>
            <div class="page">
                <div class="title">
                    Personal Information:
                </div>
                <div class="field">
                    <div class="label">
                        Location <span class="text-red">*</span>
                    </div>
                    <select name="u_loc">
                        <option>Pakistan</option>
                        <option>America</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">
                        Age <span class="text-red">*</span>
                    </div>
                    <input type="number" name="u_age">
                </div>
                <div class="field">
                    <div class="label">
                        Date Of Birth <span class="text-red">*</span>
                    </div>
                    <input type="date" name="u_dob">
                </div>
                <div class="field btns">
                    <button class="prev-2 prev">Previous</button>
                    <button class="next-2 next">Next</button>
                </div>
            </div>
            <div class="page">
                <div class="title">
                    Login Details:
                </div>
                <div class="field">
                    <div class="label">
                        Image
                    </div>
                    <input type="file" name="u_img">
                </div>
                <div class="field">
                    <div class="label">
                        Term & Conditions <span class="text-red">*</span>
                    </div>
                    <div class="flex-div">
                        <input type="checkbox" name="u_terms">
                        <p>Accept Our Terms and Conditions</p>
                    </div>
                </div>
                <input type="text" name="u_status" value="active" class="d-none">
                <div class="field btns">
                    <button class="prev-3 prev">Previous</button>
                    <button class="submit" name="reg">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    const slidePage = document.querySelector(".slide-page");
    const nextBtnFirst = document.querySelector(".firstNext");
    const prevBtnSec = document.querySelector(".prev-1");
    const nextBtnSec = document.querySelector(".next-1");
    const prevBtnThird = document.querySelector(".prev-2");
    const nextBtnThird = document.querySelector(".next-2");
    const prevBtnFourth = document.querySelector(".prev-3");
    const submitBtn = document.querySelector(".submit");
    const progressText = document.querySelectorAll(".step p");
    const progressCheck = document.querySelectorAll(".step .check");
    const bullet = document.querySelectorAll(".step .bullet");
    let current = 1;

    nextBtnFirst.addEventListener("click", function(event) {
        event.preventDefault();
        slidePage.style.marginLeft = "-25%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    });
    nextBtnSec.addEventListener("click", function(event) {
        event.preventDefault();
        slidePage.style.marginLeft = "-50%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    });
    nextBtnThird.addEventListener("click", function(event) {
        event.preventDefault();
        slidePage.style.marginLeft = "-75%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    });
    //    submitBtn.addEventListener("click", function() {
    //        bullet[current - 1].classList.add("active");
    //        progressCheck[current - 1].classList.add("active");
    //        progressText[current - 1].classList.add("active");
    //        current += 1;
    //        setTimeout(function() {
    //            alert("Your Form Successfully Signed up");
    //            location.reload();
    //        }, 800);
    //    });

    prevBtnSec.addEventListener("click", function(event) {
        event.preventDefault();
        slidePage.style.marginLeft = "0%";
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    });
    prevBtnThird.addEventListener("click", function(event) {
        event.preventDefault();
        slidePage.style.marginLeft = "-25%";
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    });
    prevBtnFourth.addEventListener("click", function(event) {
        event.preventDefault();
        slidePage.style.marginLeft = "-50%";
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    });
</script>



<script type="text/javascript">
    function checkAvailability() {
        $.ajax({
            type: "POST",
            url: "controllers/username-check.php",
            cache: false,
            data: {
                type: 1,
                username: $("#u_name").val(),
            },
            success: function(data) {
                $("#exist").html(data);
            }
        });
    }
</script>

<!--<script src="assets/js/multi-form.js"></script>-->
</body>

</html>