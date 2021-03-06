<?php
    header('Content-type: text/css; charset:UTF-8');
?>

/* Frontpage */

html 
{
    background-image: url('../img/Vulkan1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}

#heading 
{
    position: relative;
    color: #f1f1f1;
    font-size: 2.1em;
    font-weight: 200;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4pt;
    top: 20%;
}

#mainContainer
{
    position: relative;
    height: 100vh;
    width: 100%;
}

html, 
#heading,
#title,
h2, 
h3,
h4,
p 
{
  font-family: 'Raleway', sans-serif;
} 

p 
{
    font-size: 1.2em;
}

p a 
{
    font-family: 'Helvetica Neue', sans-serif;
    letter-spacing: -0.1pt;
}

h2, p 
{ 
  font-weight: 300;
  text-align: center;

}

/* Circle-navbar for frontpage */

.menutext 
{
    color: white;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 300;
    letter-spacing: 1.0pt;
    font-family: 'Raleway', sans-serif; 
    float: left;
    width: 100%;
    padding-top: 26%;
    font-size: 0.7em;
    line-height: 2.9em;
    margin-top: -0.5em;
}

#menutext1
{
    padding-top: 28%;
    line-height: 2.0em;
}

#icons 
{
    position: absolute;
}

.menucircle 
{
    position: absolute;
    text-align: center;
    height: 145px;
    width: 145px;
    border-radius: 200px;
    opacity: 0.9;
    -webkit-transition: width 0s, height 0s, 
    -webkit-transform 0s; 
    transition: width 0s, height 0s, transform 0s;
}

.menucircle:hover
{
    width: 155px;
    height: 155px;
}

#food
{
    left: 30%;
    margin-left: -60px;
    top: 36%;
    background-color: #7d5179;
}

#transport
{
    left: 40%;
    margin-left: -60px;
    top: 54.6%;
    background-color: #6aafc8;
}

#shopping
{
    left: 50%;
    margin-left: -60px;
    top: 36%;
    background-color: #ff5252;
}

#activities
{
    left: 60%;
    margin-left: -60px;
    top: 54.6%;
    background-color: #ffd460;
}

#contact
{
    left: 70%;
    margin-left: -60px;
    top: 36%;
    background-color: #8ac394;
}

#icons
{
    position: absolute;
}

/* End circle-navbar frontpage */ 

/* Circle-navbar frontpage Responsive */ 

@media screen and (max-width: 480px)
{
    #heading 
    {
        left: 5%;
    }    

.menucircle 
    {
        height: 60px;
        width: 60px;
        border: 2px solid transparent;
    }
}


/* Slider */ 

* {box-sizing:border-box}

/* Slideshow container */

.slide-container 
{
    position: fixed;
    width: 64%;
    top: 19%;
    left: 18%;
    height: 70%;
    background: #f1f1f1;
    border: 1px dashed #f1f1f1;
    outline: 1px solid white;
    outline-offset: 6px;
    opacity: 1;
    overflow: hidden;
}
  
img 
{
    opacity: 0.8;
}

.Slide 
{
    display: none;
}

/* Forward and back buttons */

.back, .forward 
{
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

.forward 
{
    right: 0;
    border-radius: 3px 0 0 3px;
}

/* On hover effect */

.back:hover, .forward:hover 
{
  background-color: rgba(0,0,0,0.5);
}

/* Fading animation */

.fade 
{
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;   
    animation-name: fade;
    animation-duration: 1.5s;
}

@-webkit-keyframes fade 
{
    from {opacity: .4} 
    to {opacity: 1}
}

@keyframes fade 
{
    from {opacity: .4} 
    to {opacity: 1}
}

.textbox
{
    background: rgba(255,255,255,0.7);
    position: absolute;
    bottom: 10%;
    left: 9%;
    right: 9%;
    height: 70%;
    width: 80%;
    padding: 40px;
    overflow: hidden;
}

/* Slider End */ 


/* Circle-navbar for underpages */ 

.menucircle2 
{ 
    position: fixed;
    text-align: center;
    height: 59px;
    width: 59px;
    border: 10px solid #transparent;
    border-radius: 200px;
    -webkit-transition: all 200ms linear;
    -moz-transition: all 200ms linear;
    -o-transition: all 200ms linear;
    -ms-transition: all 200ms linear;
    transition: all 200ms linear;
}

.menucircle2:hover
{
    width: 70px;
}

.underikoner 
{
    position: absolute;
    top: 25%;
    right: 25%;
}

#food2
{
    top: 30%;
    left: 8%;
    text-algin: center;
    background-color: #7d5179;
}

#transport2
{
    top: 43.5%;
    left: 8%;
    background-color: #6aafc8;
}

#shopping2
{
    top: 57.3%;
    left: 8%;
    background-color: #ff5252;
}

#activities2
{
    top: 70.6%;
    left: 8%;
    background-color: #8ac394;
}

#contact2 
{
    top: 81%;
    left: 5%;
    background-color: #8ac394;
}

/* End of circle-navbar for underpages */ 

@media screen and (max-width: 480px) 
{
    #heading
    {
        left: 5%;
    }    

    .menucircle2 
    {
        height: 60px;
        width: 60px;
        border: 2px solid transparent;
    }
}

/* End circle-navbar for underpages */

/* For about page */

.about
{
    background: rgba(255,255,255,0.7);
    position: absolute;
    bottom: 10%;
    left: 9%;
    right: 9%;
    height: 80%;
    width: 80%;
    padding: 40px;
    overflow: hidden;
}

/* Map */

#Kart
{
    position: absolute;
    width: 100%;
    opacity: 1;
 }

/* End of map */

/* Navigation-bar */ 

ol,
ul 
{
    margin: 0;
    padding: 0;
}
 
ul,
ol 
{
    list-style: none;
}
 
a 
{
    text-decoration: none;
}
 
.clearfix 
{
    clear: both;
}

/* End Reset Some Elements */
 
.nav 
{
    background-color: #f1f1f1;
    opacity: 1;
}
 
.container 
{
    width: 65%;
    margin: 0 auto;
}

/* Start Toggle */
 
  
.toggle 
{
    width: 30px;
    padding-top: 15px;
    float: right;
    margin: 3px;
    cursor: pointer;
    display: none;
} 
 
.toggle span 
{
    width: 100%;
    height: 4px;
    background-color: #222;
    display: block;
    margin-bottom: 3px;
}

/* End Toggle */



/* Start Logo */

.nav .container .logo 
{
    width: 5%;
    float: left;
    padding-top: 0px;
    padding-bottom: 0px;
}
 
/* End Logo */



/* Start Title */

#title 
{
    display: inline-block;
    padding: 23px;
    float: left;
    text-transform: uppercase;
}

/* End Title */

 
/* Start Links */
 
.nav .container .links 
{
    width: 45%;
    float: right;
}
 
.nav .container .links ul 
{
    float: center;
}
 
.nav .container .links ul li 
{
    display: inline-block;
    padding: 20px;
}
 
.nav .container .links ul li a 
{
    color: #333;
    font-size: 0.7em;
    font-family: Raleway;
    text-transform: uppercase;
    letter-spacing: 0.8pt;
}

.nav .container .links ul li a:hover 
{
    color: #ccc;
    padding: 10px 0 10px;
}

/* End Links */

@media(max-width:768px) 
{
    .toggle 
    {
        display: block;
    }
    .links 
    {
        display: none;
    }
    .nav .container .links ul li 
    {
        display: block;
        text-align: center;
        padding: 10px;
    }
    .nav .container .links ul 
    {
        float: none;
    }
    .nav .container .logo
    {
        padding-top: 10px;
    }
}
