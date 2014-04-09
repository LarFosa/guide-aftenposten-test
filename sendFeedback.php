<html lang="en" mainfest="cache.appcache" class=" js no-touch cssanimations csstransitions js no-touch cssanimations csstransitions js no-touch cssanimations csstransitions" style=""><head>
		<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"> 
		<title>Guide for Ivy Engine</title>
		<meta name="description" content="Gi Tilbakemelding">
		<meta name="keywords" content="fullscreen layout, boxes, responsive, page transitions, css transitions, jquery, portfolio, template">
		<meta name="author" content="Agens AS">
		<link rel="stylesheet" type="text/css" href="css/component.css">
		<script src="js/modernizr.custom.js"></script>

		
		
		<script>
			function goBack()
 		{
 			 window.history.back()
  		}
		</script>
		
		<style>
  
  body {
    margin: 0;
    padding: 20px 0;
    font-family: 'Open sans', Helvetica, Arial;
    color: #666;
    font-size: 15px;
    line-height: 1.6em;
    text-rendering: optimizelegibility;
    -webkit-text-size-adjust: none;
    -webkit-touch-callout: none;
    -webkit-font-smoothing: antialiased;
    background: #EFEFEF;
}
.clear {
	clear: both;
}

.container {
	max-width: 500px;
	margin: auto;
}

form, fieldset {
    margin: 0;
    padding: 0;
    border: 0;
}
p {
	font-weight: 300;
	text-align: center;
    margin: 30px 10px 10px;

}

.dialog {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    font-size: 18px;
    display: -webkit-box;
    opacity: 0;
    z-index: 99;
    -webkit-box-pack: center;
    -webkit-box-align: center;
    -webkit-transform: translate3d(0, -100%, 0);
	-webkit-transition: all .5s ease-out;
	transition: all .5s ease-out;
	background: rgba(255,255,255, .9);
}

.dialog.is-active {
    -webkit-transform: translate3d(0, 0, 0);
    opacity: 1;
}

.dialog > div {
    display: inline-block;
    padding: 20px 40px;
    border-radius: 4px;
    color: #333;
}

.content {
    margin: 0;
    padding: 0 0 0 20px;
    background: #F7F7F7;
    border: 1px solid #e7e7e7;
    box-shadow: inset 0px 1px 0px #FEFEFE;
    border-bottom: 1px solid #ddd;
    
/*
    border-left: 0;
    border-right: 0;
*/
}

.input {
    clear: both;
    position: relative;
}

.input-text input,
.input-text textarea,
input:-webkit-autofill {
    background: transparent;
    padding: 32px 0 5px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
    font-size: 16px;
    line-height: 1.5em;
    font-weight: 300;
    letter-spacing: 1px;
    border: 0;
    -webkit-appearance: none;
    appearance: none;
    margin: 0;
    border-radius: 0;
	border-bottom: 1px solid #ddd;
	vertical-align: bottom;
    font-family: 'Open sans', Helvetica, Arial;
	color: #333;
	max-width: 100%;
	-webkit-transition: min-height 0.3s ease;
	transition: min-height 0.3s ease;
}
.input-text input:focus,
.input-text textarea:focus {
	border-bottom: 1px solid #00aeef;
	outline: none;	
}
.input-text textarea {
	margin: 32px 0 5px;
	padding: 5px 0;
}
.input-text textarea:focus {
	//min-height: 200px;
}

.input-text input:active,
.input-text textarea:active {
	border-bottom: 1px solid #00aeef;
}

.btn {
	background: none;
	border: none;
	position: relative;
	display: block;
    text-align: center;
	font-weight: 400;
    font-size: 16px;
    padding: 12px 0;
    text-decoration: none;
    width: 100%;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
	margin: 0;
	color: #00aeef;
	outline: none;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}
/*
.btn#btn-post-feedback {
	margin: 20px 0;
	padding: 10px 20px;
	border: none;
	float: right;
	background: #00aeef;
	color: #fff;
	-webkit-appearance:none;
	-webkit-border-radius:20px;
	font-weight: 300;
	text-transform: uppercase;
	letter-spacing: 2px;
}
*/

.btn#btn-post-feedback {
    background: #00aeef;
	padding: 10px 30px 12px;
    display: inline-block;
	font-family: 'Open Sans', sans-serif;
    font-weight: 600;
	font-size: 13px;
	border: none;
	color: #fff;
	text-transform: uppercase;
	font-style: normal;
	border-radius: 4px;
	margin: 20px 20px 25px;
	width: auto;
}
.btn#btn-post-feedback:active {
	margin: 22px 20px 20px;

}
.actions {
	text-align: center;
}


.btn.icon {
	padding-left: 40px;
	text-align: left;
}
#btn-facebook {
}
#btn-twitter {
	border-top: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
}
.btn.icon:before {
	content: '';
	background: url(images/social_sprite.png) no-repeat center 10px transparent;
	background-size: 25px;
	width: 46px;
	height: 44px;
	left: -10px;
	top: 50%;
	margin-top: -22px;
	position: absolute;
}
#btn-twitter:before {
	background: url(images/social_sprite.png) no-repeat center -30px transparent;
	background-size: 25px;
}
#btn-rate:before {
	background: url(images/social_sprite.png) no-repeat center -68px transparent;
	background-size: 25px;
}

.btn:active {
    opacity: 0.8;
    outline: none;
}
.btn:focus {
	border-color: #00aeef;
}

#submit-error-label {
	padding: 5px 0;
	color: #C22727;
	font-weight: 400;
}

label {
	font-size: .8125em; /* 13/16 */ 
	text-transform: uppercase;
	position: absolute;
	letter-spacing: 2px;
	font-weight:bold;
	top: 10px;
	left: 0;
	color: #00aeef;
	opacity: 1;
	-webkit-transition: .333s ease top, .333s ease opacity;
	transition: .333s ease top, .333s ease opacity;
}

/* Javascript classes
   Used for modifying form fields
==================================== */
.js-hide-label label {
	opacity: 0; 
	top: 7px;
}

.js-unhighlight-label label {
	color: #999
}

/* Bonus form valiation styles */
.js-error {
	border-color: #00aeef!important; /* override all cases */
}
.js-error + div {
	border-top-color: #00aeef;
}
.js-error label {
	color: #00aeef;
}

.creds {
	width: 58px;
	margin: 30px auto;
}
.creds img{
	width: 100%;
	height: auto;
}

</style>







	</head>
		<body> 
	
	 <?
	
	$name = utf8_encode($_POST['name']);
	$phone = utf8_encode($_POST['phone']);
	$email = utf8_encode($_POST['email']);
	$feedback = utf8_encode($_POST['feedback']);
 
	$lengthN = strlen($name);
	$lengthE = strlen($email);
	$lengthF = strlen($feedback);

	if($lengthN > 0 && $lengthE > 0 && $lengthF > 0) {
		mail("lars.fosaas@aftenposten.no","Tilbakemelding fra Aftenposten+","$feedback \n\nFra: $name\n$email \n$phone");
    	
echo "<div class='container'>
	<div class='dialog' id='dialog-receipt'><div>Takk for tilbakemelding!</div></div>
	
	<div class='clear'></div>
	<p>

	Takk for tilbakemelding! </p>

	";
} 
else {
echo "<div class='container'>
	<div class='dialog' id='dialog-receipt'><div>Takk for tilbakemelding!</div></div>
	
	<div class='clear'></div>
	<p>

	Vennligst tast inn navn, epost-adresse og melding </p>
";

 }
 ?>
	
		
		
	


<form method="post" action="sendFeedback.php" class="content form" id="feedback">
	    
	    
	    
	    <div class="actions">
	        <input type="button" value="Tilbake" onclick="goBack()" class="btn input-border" id="btn-post-feedback">
	    </div>
	    <div class="clear"></div>
	</form>
	
</div>
<div class="clear"></div>



















































</body></html>