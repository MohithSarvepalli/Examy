<?php include 'inc/header.php'; ?>
<?php
  Session::checkSession();
?>
<style>@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap');
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
    width: 350px;
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
    left: 650px;
    width: 350px;
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
    left: 1200px;
    width: 350px;
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



.footer {
    position: absolute;
    top: 500px;
    marging: 10px;
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
    margin-top: 10%;
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
</style>

    

<!DOCTYPE html>
<html>

<head>
    <title>Student</title>
    <link rel="stylesheet" type="text/css" href="styles/Student.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="https://kit.fontawesome.com/396354d450.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <div class="title">
        <h1>HELLO STUDENT</h1>
    </div>
    <div class="card1">
        <img src="https://navigus.in/blog/wp-content/uploads/2016/06/psychometrictest.jpg" alt="Tests">
        <h3>Tests</h3><br><br>
        <p>You can attend your tests here.Best of luck.</p>
        <a href="starttest.php"><button  id=add>Tests</button></a>
    </div>

    <div class="card2">
        <img src="img/download.png" alt="Results"><br><br>
        <h3>Profile</h3><br><br>
        <p>Check your profile here.</p>
        <a href="profile.php"><button  id=create>Results</button></a>
    </div>

    <div class="card3">
        <img src="https://fuchunsec.moe.edu.sg/qql/slot/easynews/tl04/98cc7407b_3540.jpg" alt="Test Schedule"><br><br>
        <h3>Test Schedule</h3><br><br>
        <p>Be aware of your test timings.</p><br>
        <a href="schedule.html"><button  id=evaluate>Test Schedule</button></a>
    </div>
    <div class="footer">
    </div>

</body>

</html>