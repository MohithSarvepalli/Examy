<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'../inc/header.php');
?>
<style><@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap');
* {
    margin: 0;
    padding: 0;
    outline: none;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

body {
    background: #f2f2f2;
}

nav {
    background: #171c24;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    height: 70px;
    padding: 0 100px;
}

nav .logo {
    color: #fff;
    font-size: 30px;
    font-weight: 600;
    letter-spacing: -1px;
}

nav .nav-items {
    display: flex;
    flex: 1;
    padding: 0 0 0 40px;
}

nav .nav-items li {
    list-style: none;
    padding: 0 15px;
}

nav .nav-items li a {
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    text-decoration: none;
}

nav .nav-items li a:hover {
    color: #ff3d00;
}

nav form {
    display: flex;
    height: 40px;
    padding: 2px;
    background: #1e232b;
    min-width: 18%!important;
    border-radius: 2px;
    border: 1px solid rgba(155, 155, 155, 0.2);
}

nav form .search-data {
    width: 100%;
    height: 100%;
    padding: 0 10px;
    color: #fff;
    font-size: 17px;
    border: none;
    font-weight: 500;
    background: none;
}

nav form button {
    padding: 0 15px;
    color: #fff;
    font-size: 17px;
    background: #ff3d00;
    border: none;
    border-radius: 2px;
    cursor: pointer;
}

nav form button:hover {
    background: #e63600;
}

nav .menu-icon,
nav .cancel-icon,
nav .search-icon {
    width: 40px;
    text-align: center;
    margin: 0 50px;
    font-size: 18px;
    color: #fff;
    cursor: pointer;
    display: none;
}

nav .menu-icon span,
nav .cancel-icon,
nav .search-icon {
    display: none;
}

@media (max-width: 1245px) {
    nav {
        padding: 0 50px;
    }
}

@media (max-width: 1140px) {
    nav {
        padding: 0px;
    }
    nav .logo {
        flex: 2;
        text-align: center;
    }
    nav .nav-items {
        position: fixed;
        z-index: 99;
        top: 70px;
        width: 100%;
        left: -100%;
        height: 100%;
        padding: 10px 50px 0 50px;
        text-align: center;
        background: #14181f;
        display: inline-block;
        transition: left 0.3s ease;
    }
    nav .nav-items.active {
        left: 0px;
    }
    nav .nav-items li {
        line-height: 40px;
        margin: 30px 0;
    }
    nav .nav-items li a {
        font-size: 20px;
    }
    nav form {
        position: absolute;
        top: 80px;
        right: 50px;
        opacity: 0;
        pointer-events: none;
        transition: top 0.3s ease, opacity 0.1s ease;
    }
    nav form.active {
        top: 95px;
        opacity: 1;
        pointer-events: auto;
    }
    nav form:before {
        position: absolute;
        content: "";
        top: -13px;
        right: 0px;
        width: 0;
        height: 0;
        z-index: -1;
        border: 10px solid transparent;
        border-bottom-color: #1e232b;
        margin: -20px 0 0;
    }
    nav form:after {
        position: absolute;
        content: '';
        height: 60px;
        padding: 2px;
        background: #1e232b;
        border-radius: 2px;
        min-width: calc(100% + 20px);
        z-index: -2;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }
    nav .menu-icon {
        display: block;
    }
    nav .search-icon,
    nav .menu-icon span {
        display: block;
    }
    nav .menu-icon span.hide,
    nav .search-icon.hide {
        display: none;
    }
    nav .cancel-icon.show {
        display: block;
    }
}

.content {
    position: absolute;
    top: 50%;
    left: 50%;
    text-align: center;
    transform: translate(-50%, -50%);
}

.content header {
    font-size: 30px;
    font-weight: 700;
}

.content .text {
    font-size: 30px;
    font-weight: 700;
}

.space {
    margin: 10px 0;
}

nav .logo.space {
    color: red;
    padding: 0 5px 0 0;
}

@media (max-width: 980px) {
    nav .menu-icon,
    nav .cancel-icon,
    nav .search-icon {
        margin: 0 20px;
    }
    nav form {
        right: 30px;
    }
}

@media (max-width: 350px) {
    nav .menu-icon,
    nav .cancel-icon,
    nav .search-icon {
        margin: 0 10px;
        font-size: 16px;
    }
}

.content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.content header {
    font-size: 30px;
    font-weight: 700;
}

.content .text {
    font-size: 30px;
    font-weight: 700;
}

.content .space {
    margin: 10px 0;
}

@import url('https://fonts.googleapis.com/css?family=Exo:700');
@import url('https://fonts.googleapis.com/css?family=Abel');
body {
    background-color: #55bfec;
    -webkit-transform: perspective(900px);
    -webkit-transform-style: preserve-3d;
}

.title {
    width: 100%;
    text-align: center;
}

.title h1 {
    margin-top: 5%;
    margin-left: 18%;
    font-size: 50px;
    font-family: 'Exo', sans-serif;
    color: #e9700d;
    background: rgb(131, 58, 180);
    background: linear-gradient(90deg, rgba(131, 58, 180, 1) 0%, rgba(233, 240, 140, 1) 0%, rgba(90, 245, 235, 1) 50%, rgba(132, 107, 226, 1) 100%);
    width: 60%;
    height: 100%;
    padding-bottom: 2.5%;
    padding-top: 2.5%;
    border-radius: 50px;
    text-align: center;
}

.card1 {
    text-align: center;
    position: absolute;
    left: 100px;
    width: 270px;
    height: 400px;
    margin-top: 10px;
    margin-bottom: 10px;
    background: linear-gradient(rgb(225, 150, 58), rgb(227, 144, 91));
    transition: .6s;
    transform: rotatex(75deg) translatey(-200px) translatez(-100px);
    box-shadow: 0px 20px 60px rgba(0, 0, 0, 0.5);
}

.card1:hover {
    transform: rotatex(0deg);
    transform: rotatez(0deg);
    transition: .6s;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
}

.card1 img {
    transform: translateY(15px);
    width: 200px;
    height: 120px;
}

h3 {
    font-size: 25px;
    font-family: 'Abel', sans-serif;
    color: rgb(255, 255, 255);
    text-shadow: 0 0 2px rgb(255, 255, 255);
    transform: translatey(10px);
}

p {
    font-family: 'Abel', sans-serif;
    color: white;
    text-align: center;
    width: 220px;
    transform: translatex(12px);
}

.card2 {
    text-align: center;
    position: absolute;
    left: 450px;
    width: 270px;
    height: 400px;
    margin-top: 10px;
    margin-bottom: 10px;
    background: linear-gradient(rgb(93, 94, 170), rgb(93, 66, 103));
    animation: animate 1s linear infinite;
    transition: .6s;
    transform: rotatex(75deg) translatey(-200px) translatez(-100px);
    box-shadow: 0px 20px 60px rgba(0, 0, 0, 0.5);
}

.card2:hover {
    transform: rotatex(0deg);
    transition: .6s;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
}

.card2 img {
    transform: translateY(15px);
    width: 180px;
    height: 150px;
}

.card3 {
    text-align: center;
    position: absolute;
    left: 800px;
    width: 270px;
    height: 400px;
    margin-top: 10px;
    margin-bottom: 10px;
    background: linear-gradient(#ff5252, #b33939);
    transition: .6s;
    transform: rotatex(75deg) translatey(-200px) translatez(-100px);
    box-shadow: 0px 20px 60px rgba(0, 0, 0, 0.5);
}

.card3:hover {
    transform: rotatex(0deg);
    transition: .6s;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
}

.card3 img {
    transform: translateY(15px);
    width: 200px;
    height: 120px;
}

.card4 {
    text-align: center;
    position: absolute;
    left: 1150px;
    width: 270px;
    height: 400px;
    margin-top: 10px;
    margin-bottom: 10px;
    background: linear-gradient(#c3e23c, #94bd24);
    transition: .6s;
    transform: rotatex(75deg) translatey(-200px) translatez(-100px);
    box-shadow: 0px 20px 60px rgba(0, 0, 0, 0.5);
}

.card4:hover {
    transform: rotatex(0deg);
    transition: .6s;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
}

.card4 img {
    transform: translateY(15px);
    width: 200px;
    height: 120px;
}

.footer {
    position: absolute;
    top: 500px;
    margin: 10px;
    width: 100%;
    text-align: center;
}

.footer h2 {
    font-size: 18px;
    font-family: 'Exo', sans-serif;
}

#add {
    margin-top: 15%;
    text-align: center;
    width: 150px;
    height: 50px;
    border-radius: 30px;
    border: double;
    background: rgb(223, 188, 33);
    outline: none;
    color: white;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

#create {
    text-align: center;
    width: 150px;
    height: 50px;
    margin-top: 5%;
    border-radius: 30px;
    border: double;
    background: rgb(171, 62, 235);
    outline: none;
    color: white;
    transform: translateY(10px);
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

#evaluate {
    margin-top: 11%;
    text-align: center;
    width: 150px;
    height: 50px;
    border-radius: 30px;
    border: double;
    background: rgb(230, 90, 25);
    outline: none;
    color: white;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

#modify {
    margin-top: 10%;
    text-align: center;
    width: 150px;
    height: 50px;
    border-radius: 30px;
    border: double;
    background: rgb(124, 230, 25);
    outline: none;
    color: white;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}</style>
 
    <div class="title">
        <h1>HELLO EXAMINER!</h1>
    </div>
    

    <div class="card2">
        <img src="img/examcreate.jpg" alt="Exam"><br><br>
        <h3>Create Exam</h3><br><br>
        <p>Create a exam here...Good luck in preparing your question paper.</p>
        <a href="quesadd.php"><button  id=create>Create Exam</button></a>
    </div>

    <div class="card3">
        <img src="img/evaluation.jpg" alt=""><br><br>
        <h3>Question List</h3><br><br>
        <p>Here you can evaluate the students answer sheets. Hope your students perform well</p><br>
        <a href="queslist.php"><button  id=evaluate>Evaluate</button></a>
    </div>
    <div class="card4">
        <img src="img/modify.png" alt=""><br><br>
        <h3>Modify Student</h3><br><br>
        <p>Here you can modify the students details</p><br><br>
        <a href="users.php"><button  id=modify>Modify</button></a>
    </div>
    <div class="footer">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                

                

            </div>
        </div>
    </div>
