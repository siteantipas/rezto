
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?u8vidh">
<link href="https://fonts.googleapis.com/css?family=Anton|Black+Han+Sans|Candal|Fredoka+One|Fugaz+One|Gamja+Flower|Righteous|Shrikhand|Sigmar+One|Syncopate" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline|El+Messiri|Faster+One|Inconsolata|Kaushan+Script|Monoton|PT+Sans|Philosopher|Poiret+One|Titan+One" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/global.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />

<style>

/* label underline color */
.input-field input[type=text], .input-field input[type=password], .input-field textarea {
 border-bottom: 1px solid '<?php print HEX ?>' !important;
 box-shadow: none!important;
}
/* label underline focus color */
.input-field input[type=text]:focus, .input-field input[type=password]:focus, .input-field textarea:focus{
 border-bottom: 1px solid <?php print HEX ?> !important;
 box-shadow: 0 0px 0 0 <?php print HEX ?> !important;
}
input{
	border-color: <?php print HEX ?>!important;
}

[type="radio"]:checked + label::after, [type="radio"].with-gap:checked + label::after {
    background-color: <?php print HEX ?> !important;
}
[type="radio"]:checked + label::after, [type="radio"].with-gap:checked + label::before, [type="radio"].with-gap:checked + label::after {
    border: 2px solid <?php print HEX ?> !important;
}
.fixed-table-pagination li.active a {
    background: #000!important;
    color: #fff!important;
}

.animsition-loading {
  border-left: 5px solid <?php print HEX ?>;
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
/**
* Define global variables
**/

window.App = {

	name  : "<?php print APP_NAME ?>",
	color : "<?php print COLOR ?>",
	bg    : "<?php print BG ?>",
	hex	  : "<?php print HEX ?>",
	device: {

		type    : 'PC',
		brand   : 'HP',
		os	    : 'Linux',
		browser : 'Chrome',
		country : 'CM',
		ip      : '192.0.12.155'
	}
}

$(function() {


})
</script>
<script src="assets/js/notif.js"></script>
<script src="assets/js/global.js"></script>
<script src="assets/js/ajax.js"></script>


<!--plugins include -->
<script src="assets/plugins/page-transition/js/animsition.js"></script>
<link rel="stylesheet" href="assets/plugins/page-transition/css/animsition.css">