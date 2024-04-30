<?php
session_start();
error_reporting(E_ALL);
include('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style> 
*{
  margin: 0;
  padding: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;  
}
body{
  background-color: #d4d3d3;
}
.btn{
    position: absolute;
  top: 15px;
  left: 45px;
  height: 45px;
  width: 45px;
  text-align: center;
  background: #1b1b1b;
  border-radius: 3px;
  cursor: pointer;
  transition: left 0.4s ease;
}
.btn.click{
  left: 260px;
}
.btn span{
  color: white;
  font-size: 28px;
  line-height: 45px;
}
.btn.click span:before{
  content: '\f00d';
}
.sidebar{
  position: fixed;
  width: 250px;
  height: 100%;
  left: -250px;
  background: #1b1b1b;
  transition: left 0.4s ease;
}
.sidebar.show{
  left: 0px;
}
.sidebar .text{
  color: white;
  font-size: 25px;
  font-weight: 600;
  line-height: 65px;
  text-align: center;
  background: #1e1e1e;
  letter-spacing: 1px;
}
nav ul{
  background: #1b1b1b;
  height: 100%;
  width: 100%;
  list-style: none;
}
nav ul li{
  line-height: 60px;
  border-top: 1px solid rgba(255,255,255,0.1);
}
nav ul li:last-child{
  border-bottom: 1px solid rgba(255,255,255,0.05);
}
nav ul li a{
  position: relative;
  color: white;
  text-decoration: none;
  font-size: 18px;
  padding-left: 40px;
  font-weight: 500;
  display: block;
  width: 100%;
  border-left: 3px solid transparent;
}
nav ul li.active a{
  color: cyan;
  background: #1e1e1e;
  border-left-color: cyan;
}
nav ul li a:hover{
  background: #1e1e1e;
}
nav ul ul{
  position: static;
  display: none;
}
nav ul .feat-show.show{
  display: block;
}
nav ul .serv-show.show1{
  display: block;
}
nav ul ul li{
  line-height: 42px;
  border-top: none;
}
nav ul ul li a{
  font-size: 17px;
  color: #e6e6e6;
  padding-left: 80px;
}
nav ul li.active ul li a{
  color: #e6e6e6;
  background: #1b1b1b;
  border-left-color: transparent;
}
nav ul ul li a:hover{
  color: cyan!important;
  background: #1e1e1e!important;
}
nav ul li a span{
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  font-size: 22px;
  transition: transform 0.4s;
}
nav ul li a span.rotate{
  transform: translateY(-50%) rotate(-180deg);
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  text-align: center;
}
.content .header{
  font-size: 45px;
  font-weight: 600;
}
.content p{
  font-size: 30px;
  font-weight: 500;
}

.class2 {
   
    position: absolute;
    /*div hedhy tekhou priorite ala lokhra*/
    top: 60%;
    left: 20%;
    transform: translateY(-70%)
}

h1 {
        font-size: 80px;
        font-weight: 700;
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        background-image: url('https://s3.amazonaws.com/usefulangle/news/95-5f6cc1ad5575e.jpg');
    
}

h3 {
    color: rgb(4, 3, 3);
    font-size: 50px;
    margin-bottom: 50px;
}

h4 {
    color: #323a3c;
    letter-spacing: 2px;
    font-size: 40px;
}





  .container1 {
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 530px;
    right: 550px;
    width: 400px;
    height: 40px;
  }
  
  .buttons1 {
    display: flex;
    flex-direction: column;
  }
  
  .btn1 {
    text-decoration: none;
    padding: 20px 50px;
    font-size: 1.25rem;
    position: relative;
    margin: 32px;
  }
  .btn-2 {
    color: #000;
  }
  
  .btn-2::after,
  .btn-2::before {
    border: 3px solid #000;
    content: "";
    position: absolute;
    width: calc(100% - 6px);
    height: calc(100% - 6px);
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: transform 0.3s ease;
  }
  
  .btn-2:hover::after {
    transform: translate(-5px, -5px);
  }
  
  .btn-2:hover::before {
    transform: translate(5px, 5px);
  }


  



  .container2 {
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 620px;
    right: 550px;
    width: 400px;
    height: 40px;
  }
  
  .buttons2 {
    display: flex;
    flex-direction: column;
  }
  
  .btn2 {
    text-decoration: none;
    padding: 22px 40px;
    font-size: 1.2rem;
    position: relative;
    margin: 25px;
  }
  .btn-3 {
    color: #000;
  }
  
  .btn-3::after,
  .btn-3::before {
    border: 3px solid #000;
    content: "";
    position: absolute;
    width: calc(100% - 6px);
    height: calc(100% - 6px);
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: transform 0.3s ease;
  }
  
  .btn-3:hover::after {
    transform: translate(-5px, -5px);
  }
  
  .btn-3:hover::before {
    transform: translate(5px, 5px);
  }

  




  




</style>
      <meta charset="utf-8">
      <title>index</title>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="stylesheet" href="./css/style.css">
   </head>
   <body>
    <div class="btn">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
            Side Menu
         </div>
         <ul>
            <li>
               <a href="#" class="feat-btn">portfolio
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
                  <li><a href="about us.html">about us</a></li>
                  <li><a href="last work.html">last work</a></li>
                  <li><a href="contact us.html">contact us</a></li>
               </ul>
            </li>
           
         </ul>
      </nav>
      <div class="content">
        <h4>hello our name is </h4>
        <h1>Void<span>Visions</span></h1>
        <h3>production Turning thoughts and ideas into visuals.</h3>
      </div>
      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      </script>
       
       <div class="container1">
         <div class="buttons1">
           <a href="login.php" class="btn1 btn-2">login</a>
         </div>
       </div>
       <div class="container2">
         <div class="buttons2">
           <a href="register.php" class="btn2 btn-3">sign up</a>
         </div>
       </div>
   </body>

</html>