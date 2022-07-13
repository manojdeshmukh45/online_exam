<html>
<head>
    <title>Brain Sizzlers</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="1.page.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Raleway');
body{
    font-family: 'Raleway', sans-serif;
    background-image:url("images/g.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;

}
.all{
    display: flex;
    perspective: 10px;
    transform: perspective(300px) rotateX(20deg);
    will-change:perspective;
    perspective-origin: center center;
    transition: all 1.3s ease-out;
    justify-content: center;
    transform-style: preserve-3d;
}
.all:hover{
    perspective: 1000px;
    transition: all 1.3s ease-in;
    transform: perspective(10000px) rotateX(0deg);
}
.all:hover .text{
    opacity: 1;
}
.all:hover > div{
    opacity: 1;
    transition-delay: 0s;
}
.all:hover .explainer{
    opacity: 0;
}
.left , .center, .right, .lefter, .righter{
    width: 200px;
    height: 150px;
    transform-style: preserve-3d;
    border-radius: 10px;
    border:1px solid #fff;
    box-shadow: 0 0 20px 5px rgba(100,100,255,.4);
    opacity: 0;
    transition: all .3s ease;
    transition-delay: 1s;
    position: relative;
    background-position: center center;
    background-size: contain;
    background-repeat: no-repeat;
    background-color: #58d;
    cursor: pointer;
    background-blend-mode: color-burn;
}
.left:hover, .center:hover, .right:hover, .lefter:hover, .righter:hover{
    box-shadow: 0 0 30px 10px rgba(100,100,255,0.6);
    background-color:#ccf;
}
.text{
    transform: translateY(30px);
    opacity: 0;
    transition: all .3s ease;
    bottom: 0;
    left: 5px;
    position: absolute;
    will-change: transform;
    color: #fff;
    text-shadow: 0 0 5px rgba(100,100,255,.6);
}
.lefter{
    
    transform: translateX(-60px) translateZ(-50px) rotateY(-10deg);
    background-image: url(https://cdn3.iconfinder.com/data/icons/other-icons/48/organization-512.png);
}
.left{
    transform: translateX(-30px) translateZ(-25px) rotateY(-5deg);
    background-image: url(https://cdn3.iconfinder.com/data/icons/other-icons/48/creative_draw-512.png);
}
.center{
    opacity: 1;
    background-image: url(https://cdn3.iconfinder.com/data/icons/other-icons/48/app_window-512.png);
}
.right{
    transform: translateX(30px) translateZ(-25px) rotateY(5deg);
    background-image: url(https://cdn3.iconfinder.com/data/icons/other-icons/48/cloud_weather-512.png);
}
.righter{
    transform: translateX(60px) translateZ(-50px) rotateY(10deg);
    
    background-image: url(https://cdn3.iconfinder.com/data/icons/other-icons/48/search-512.png);
}
.explainer{
    font-weight: 300;
    font-size: 2rem;
    color: #fff;
    transition: all .6s ease;
    width: 100%;
    height: 100%;
    background-color: #303050;
    background-image: radial-gradient(circle at center top, #cce, #33a);
    border-radius: 10px;
    text-shadow:  0 0 10px rgba(255,255,255,.8);
    display: flex;
    justify-content: center;
    align-items: center;
}
    </style>
</head>
<body>

    <div class="all">
        <div class="lefter">
           <a href="about.php">
           <div class="explainer"></div>
            <div class="text">Admin Details</div>
            </a>
        </div>
        
        <div class="center"><a href="index.php">
            <div class="explainer"><span>Brain Sizzlers</span></div>
            <div class="text">Student Login</div></a>
        </div>
        <div class="right"><a href="contact/contact.html">
           <div class="explainer"></div>
            <div class="text">Contact</div></a>
        </div>
        
    </div>

</body>
</html>