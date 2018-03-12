<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body background="img/back.png">

<div class="topnav" id="myTopnav">
  <a href="index.html">ගෙදර</a>
  <a href="papers/papers.html">ප්‍රශ්න පත්‍ර</a>
  <a href="exam/exam.html">ඔන්ලයින් විභාගය</a>
  <a href="#contact">E - පොත් </a>
  <a href="#about">ගුරුමඩුල්ල</a>
  <a href="#about">අපි ගැන</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>



<section id="content">
			<h2>ඔබට ඉගෙනීමට ඇති විෂයන් </h2>
			<div class="sublist">
					<li id="floating-box"><a href="#"><img src="img/subjects/sub1.jpg">තොරතුරු හා සන්ණිවේදන තාක්ෂණය </a></li>
					<li id="floating-box"><a href="#"><img src="img/subjects/sub2.jpg">තාක්ෂණවේදය සදහා විද්‍යාව </a></li>
					<li id="floating-box"><a href="#"><img src="img/subjects/sub3.jpg">ඉංජිනේරු තාක්ෂණය</a></li>
					<li id="floating-box"><a href="#"><img src="img/subjects/sub4.jpg">සතිඅන්ත වාර පරීක්ෂණය </a></li>
			</div><!-- sublist -->
	</section>
	
	<section id="middle">
		<center>
			<h2>සිසුන් සදහා  </h2>
		<form method="post">
            <input id="logtxt" type="text" placeholder="පරිශීලක නාමය" name="uname"><br>
            <input id="logtxt" type="password" placeholder="මුරපදය" name="upass"><br>
            <input id="logbtn" type="submit" value="පිවිසෙන්න " name="submit"><br>
        </form>
		</center>

	</section>

		<section id="sidebar">
			  <h2>අලුත් ගිණුමක් අරින්න</h2>
    			<div class="singup">
					<form method="post">
					<li><input id="stext" id="stext" type="text" placeholder="සම්පුර්ණ නම " name="sname"></li>
					<li><input id="stext" type="text" placeholder="පරිශීලක නාමය (Amal34 )" name="suser"></li><br>
					<li><input id="stext" type="password" placeholder="මුරපදය " name="spass"></li>
					<li><input id="sbtn" type="submit" value="ගිණුමක් සාදන්න" name="submit"><br></li><br>

		
					</form>
				</div>
    		

		</section>
	
	<footer>
	
		<div class="footerinfo">
				Made by <a href="www.facebook.com/madushankpraneeth">Praneeth </a>© <script type="text/javascript">
		var d = new Date()
		document.write(d.getFullYear())</script> <br>
		
		</div><!-- footerinfo -->

	
		
	</footer>

</div>
<script type="text/javascript">
	AOS.init({
  duration: 1200,
})
</script>


</body>
</html>