
<!DOCTYPE html>
<html dir="rtl">
<head >
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?f\amily=Gentium+Basic|Merienda&display=swap" rel="stylesheet">
<style>
.slidecontainer {
  width: 80%;
  margin-right:50px;
  margin-left:10px;
  color: #800080;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 20px;
  background: #d6d6c2;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
  
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 15px;
  height: 20px;
  background: #0000ff	;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}
@media screen and (max-width:800px){
  .aside1{
    display: block;
  }
  body{
    background:lightcoral;
  }
}
/*////////////////////////////////////////////*/
 h3 {
color: #008ae6;
margin-right:20px; 
font-family :'Gentium Basic'    
}       
section {
margin-top: 50px;   
}
h1 {
 font-family: 'Merienda';
 font-size: 150%;
 color: #ffffff;
}    
p {
color: #008ae6;
margin-right:100px; 
font-family :'Gentium Basic'    
}    

body {
  background-color: lightblue;
}
/*////////////////////////////////////////////*/
.button {
  color: #008ae6;
  padding: 9px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  background: #ffffff;
  border: 2px solid #008ae6;
  border-radius: 7px;
  font-family:'Merienda';
}
.button1 {
  color: #008ae6;
  padding: 9px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  margin-right:567px;
  background: #ffffff ;
  border: 2px solid #008ae6;
  border-radius: 7px;
  font-family: 'Merienda';
}
.button4 {
  color: #008ae6;
  padding: 9px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  cursor: pointer;
  margin-right: 149px;
  background: #ffffff;
  border: 2px solid #008ae6;
  border-radius: 7px;
  font-family: 'Merienda';
  margin-right: 890px;
}
.button5 {
  color: #008ae6;
  padding: 9px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:30px;
  margin: 4px 2px;
  cursor: pointer;
  margin-right: 70px;
  background: #ffffff ;
  border: 2px solid #008ae6;
  border-radius: 7px;
  font-family: 'Merienda';
  margin-right: 800px;
}
.button2 {
  color: #008ae6;
  padding: 9px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  cursor: pointer;
  margin-right: 20px;
  background: #ffffff;
  border: 2px solid #008ae6;
  border-radius: 7px; 
  font-family: 'Merienda';
  cursor: pointer;
}
 .button3 {
  color: #008ae6;
  padding: 9px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  cursor: pointer;
  margin-right:20px;
  background: #ffffff;
  border: 2px solid #008ae6;
  border-radius: 7px; 
  font-family: 'Merienda';
}
.aside2 {
  width: 40%;
  padding-left: 15px;
  margin-right: 15px;
  float: right;
  padding: 5px;
  border-radius: 20px;
  margin-bottom: 10px;
  background-color:#ffffff;

}
.aside1 {
  width: 40%;
  padding-left: 15px;
  margin-right: 200px;
  float: right;
  padding: 5px;
  border-radius: 20px;
  margin-bottom: 10px;
  background-color:#ffffff;

}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 900px) {
  .aside1,.aside2 {
    width: 50%;
    margin-right: 100px;
    margin-left: 600px;
  }
  .button1{
    margin-right: 30000px;
    margin: 4px 2px;

  }
  .button5,.button3,.button2{
    margin-left: 999px;
    margin: 4px 2px;
    font-size: 20px;
  }
  .button4{
    margin-right: 100px;
    margin: 4px 58px;
    font-size: 20px;
  }
  
}
</style>
<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
</head>
<body>
<header >
<h1 align="center"> Task #1 <br>
<br>
لوحة تحكم لروبوت
</h1>
</header>
<form action="TaskNo1.php" method="POST" id="form1">
<aside class="aside2">
<h3>المحرك رقم 1</h3>	
<div class="slidecontainer">
<input type="range" min="0" max="180" value="90" class="slider" id="myRange" name="motor1"> 
<p align="left"> Value: <span id="demo"></span></p> 
</div></aside>
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<aside class="aside1">
<h3>المحرك رقم 2</h3>
<div class="slidecontainer">
<input type="range" min="0" max="180" value="90" class="slider" id="myRange1" name="motor2">
<p align="left"> Value: <span id="demo1"></span></p>
</div></aside>
	
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->

<aside class="aside2">
<h3>المحرك رقم 3</h3>
<div class="slidecontainer">
<input type="range" min="0" max="180" value="90" class="slider" id="myRange2" name="motor3">
<p align="left">Value: <span id="demo2"></span></p>
</div></aside>
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<aside class="aside1">	
<h3>المحرك رقم 4</h3>
<div class="slidecontainer">
<input type="range" min="0" max="180" value="90" class="slider" id="myRange3" name="motor4">
<p align="left"> Value: <span id="demo3"></span></p>
</div>
</aside>
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<aside class="aside2">
<h3>المحرك رقم 5</h3>
<div class="slidecontainer">
<input type="range" min="0" max="180" value="90" class="slider" id="myRange4" name="motor5">
<p align="left"> Value: <span id="demo4"></span></p>
</div>
</aside>

<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<aside class="aside1">
<h3>المحرك رقم 6</h3>
<div class="slidecontainer">
<input type="range" min="0" max="180" value="90" class="slider" id="myRange5" name="motor6">
<p align="left"> Value: <span id="demo5"></span></p>
</div>
</aside>
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<p><br></p>
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<button type="button" class="button1"> إيقاف</button>	
<button type="button" class="button">تشغيل</button>
<button type="submit" class="button" name="sub" > حفظ</button> 
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<p><br></p>
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<button type="submit" class="button4" value=" Forward "  name="forward"> forward </button><br>
<br>
<button type="submit" class="button5" value="Right" name="right" form="form1" > right </button>
<button type="submit" class="button3" value="Stop" name="stop_s" form="form1"> stop </button>
<button type="submit" class="button2" value="Left"  name="left" form="form1">left </button><br>
<br>
<button type="submit" class="button4" value="Backward"  name="backward">backward </button>

<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
</form>
</div>	
</article>
</section>	
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->	
<script     >
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
output.innerHTML = this.value;
}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/
var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
output1.innerHTML = this.value; 
}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/
var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
output2.innerHTML = this.value; 
}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/
var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
output3.innerHTML = this.value; 
}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/
var slider4 = document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
output4.innerHTML = this.value; 
}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/
var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
output5.innerHTML = this.value; 
}

</script>
</body>
</html>