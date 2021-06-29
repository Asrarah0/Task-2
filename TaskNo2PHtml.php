
<!DOCTYPE html>
<html dir="rtl">
<head >
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Gentium+Basic|Merienda&display=swap" rel="stylesheet">
<style>
.slidecontainer {
  width: 40%;
  margin-right:200px;
  margin-left:20px;
  margin-up:20px;
  color: #800080;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 20px;
  background: #ffffff;
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
  background: #800080	;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}
/*////////////////////////////////////////////*/
 h3 {
color: #800080;
margin-right:90px; 
font-family :'Gentium Basic'    
}       
section {
margin-top: 50px;   
}
h1 {
 font-family: 'Merienda';
 font-size: 150%;
 color: #800080;
}      
#content article {
margin-bottom: 30px;
}
        
#comments article {
background: #f9e6ff;
padding: 10px;
border-radius: 200px;
margin-bottom: 20px;
}
#comments1 {
background: #f9e6ff;
padding: 10px;
border-radius: 100px;
margin-bottom: 10px;
margin-left:200px;
margin-right:200px;
margin-top: 20px
}
        
#comments article header {
font-weight: bold;   
}
/*////////////////////////////////////////////*/
.button4 {
  color: #800080;
  padding: 9px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  margin-right: 580px;
  background: #ffffff;
  border: 2px solid #800080;
  border-radius: 7px;
  font-family: 'Merienda';
}
.button5 {
  color: #800080;
  padding: 9px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  margin-right: 501px;
  background: #ffffff ;
  border: 2px solid #800080;
  border-radius: 7px;
  font-family: 'Merienda';
}
.button2 {
  color: #800080;
  padding: 9px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  margin-right: 20px;
  background: #ffffff;
  border: 2px solid #800080;
  border-radius: 7px; 
  font-family: 'Merienda';
}
 .button3 {
  color: #800080;
  padding: 9px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  margin-right:20px;
  background: #ffffff;
  border: 2px solid #800080;
  border-radius: 7px; 
  font-family: 'Merienda';
}

</style>
<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
</head>
<body>
<header id="comments1">
<h1 align="center"> Task #2 <br>
<br>
لوحة تحكم لروبوت
</h1>
</header>
<form action="TaskNo2.php" method="POST" id="form1">
<section id="comments">
<article>
<div >
<button type="submit" class="button4" value=" Forward "  name="forward"> forward </button><br>
<br>
<button type="submit" class="button5" value="Right" name="right" form="form1" > right </button>
<button type="submit" class="button3" value="Stop" name="stop_s" form="form1"> stop </button>
<button type="submit" class="button2" value="Left"  name="left" form="form1">left </button><br>
<br>
<button type="submit" class="button4" value="Backward"  name="backward">backward </button>
</div>
 <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->	
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

</script>
</body>
</html>