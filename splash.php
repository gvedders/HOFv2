
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>AQ Hall of Fame</title> 
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script> 
<script type="text/javascript" src="js/jquery.cross-slide.min.js"></script> 
<script type="text/javascript"> 
//<!--
jQuery(function($) {
    $('#container').crossSlide({
      fade: .0000000001
    }, [
      {
        src:  '/images/bg.jpg',
        from: 'center left',
        to:   'center right',
        time: 60
      }, {
        src:  '/images/bg.jpg',
        from: 'center right',
        to:   'center left',
        time: 60
      }
    ]);
});
// --> 
</script> 
<script> 
  $(".testlink").fadeOut("slow");
</script> 
 
<style type="text/css"> 
* {
	margin:0;
	padding:0;
	color:#232322;
	outline: none;
}
img {
	outline: none;
	border: none;
}
body {
	width: 1360px;
	height: 768px;
	overflow: hidden;
	background: url(images/bg_static_light_blur.jpg) no-repeat;
}
@font-face {
	font-family: Trajan;
	src: url('fonts/trajan.otf');
}
@font-face {
	font-family: Berling;
	src: url('fonts/berlingroman.ttf');
}
#container {
	width: 1360px;
	height: 768px;
	overflow: hidden;
	margin:0;
	padding:0;
	z-index: -1;
	text-align: center;
}
/* ------------------------------------- MAINMENU = MAIN MENU ------------------------------------- */
#mainmenu {
	position: absolute;
	width: 536px;
	height: 585px;
	left: 50%;
	margin-left: -268px;
	top: 40px;
	z-index: 1;
	text-align: center;
}
#mainmenu table {
	width: 453px;
	padding: 0;
	margin-left: 35px;
	margin-top: -2px;
}
#mainmenu li {
	display: block;
	height: 85px;
	min-height: 85px;
	max-height: 85px;
	overflow: hidden;
	border: 1px solid #ababab;
	list-style-type: none;
	background: url(images/selection_bg.jpg) #e6e6e6 repeat-x top left;
	margin-bottom: -1px;
	text-align: center;
	font-size: 26px;
	line-height: 3.3em;
	text-shadow: 0px 1px #FFF;
	font-family: "Berling", Berling, "Berling Roman", Georgia, "Times New Roman", Times, serif;
}
#mainmenu li a {
	display: block;
	width: 100%;
	height: 100%;
	text-decoration: none;
}
#mainmenu li a:active {
	background: url(images/selection_active_main.png) #dedede repeat-x top left;
	color: #000;
}
#mainmenu table td {
	width: 50%;
}
.splash {height: 160px !important;} 
</style> 
<!--[if IE]>
        <link rel="stylesheet" type="text/css" href="ie.css" />
<![endif]--> 
</head> 
<body> 
<div id="container"></div> 
<div id="mainmenu"> 
	<img src="images/hof_header.png" width="536" height="231" alt="header" /> 
<table> 
    <tr> 
        <td valign="top"> 
	<a href="hof.php"><img src="images/splash.jpg"></img></a>
	</td> 
    </tr> 
  </table> 
</div> 
</div> 
</body> 
</html>