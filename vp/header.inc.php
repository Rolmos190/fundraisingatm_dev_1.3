<?php
if(isset($_POST['login'])){
    session_start();
    ob_start();
    require_once('logInUser.inc.php');
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="wot-verification" content="afd275378407e34df6ec"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preload" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.rel='stylesheet'" crossorigin="anonymous"> <!-- asynch css load -->
  <noscript> <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></noscript> <!-- load styles for browsers with JS disabled -->

  <link rel="preload" href="../css2/global_styles.css" as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><link rel="stylesheet" href="../css2/global_styles.css"></noscript><!-- load styles for browsers with JS disabled -->
  <!-- bootstrap file, avoid editing if possible, find the classes you need and then override them in global styles -->

  <link rel="preload" href="../css2/bootstrap.css"  as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><link rel="stylesheet" href="../css2/bootstrap.css"></noscript><!-- load styles for browsers with JS disabled -->


  <link rel="preload" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><link  rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css"></noscript><!-- load styles for browsers with JS disabled -->

  <link rel="preload" href="../css2/content_styles.css" as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><linkrel="stylesheet" href="../css2/content_styles.css"></noscript><!-- load styles for browsers with JS disabled -->

  <!-- top navigation styles -->
  <link rel="preload" href="../css2/main_nav.css" as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><link rel="stylesheet" href="../css2/main_nav.css"></noscript><!-- load styles for browsers with JS disabled -->

  		<!-- jQuery (required) before bootstrap JS -->
  		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!--<link rel="stylesheet" href="../jquery-ui-1.7.2/css/base/ui.accordion.css">-->

	<!--<script src="../js/js-image-slider.js" type="text/javascript"></script>-->
    <script src="../js/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="../js/simpletabs_1.3.js"></script>
	<script src="../jquery-ui-1.10.3/ui/jquery-ui.js"></script>

    <!-- function for loading basic content for browser with JS disabled -->
	<script>
	/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
	!function(a){"use strict";var b=function(b,c,d){function e(a){return h.body?a():void setTimeout(function(){e(a)})}function f(){i.addEventListener&&i.removeEventListener("load",f),i.media=d||"all"}var g,h=a.document,i=h.createElement("link");if(c)g=c;else{var j=(h.body||h.getElementsByTagName("head")[0]).childNodes;g=j[j.length-1]}var k=h.styleSheets;i.rel="stylesheet",i.href=b,i.media="only x",e(function(){g.parentNode.insertBefore(i,c?g:g.nextSibling)});var l=function(a){for(var b=i.href,c=k.length;c--;)if(k[c].href===b)return a();setTimeout(function(){l(a)})};return i.addEventListener&&i.addEventListener("load",f),i.onloadcssdefined=l,l(f),i};"undefined"!=typeof exports?exports.loadCSS=b:a.loadCSS=b}("undefined"!=typeof global?global:this);
	/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
	!function(a){if(a.loadCSS){var b=loadCSS.relpreload={};if(b.support=function(){try{return a.document.createElement("link").relList.supports("preload")}catch(b){return!1}},b.poly=function(){for(var b=a.document.getElementsByTagName("link"),c=0;c<b.length;c++){var d=b[c];"preload"===d.rel&&"style"===d.getAttribute("as")&&(a.loadCSS(d.href,d,d.getAttribute("media")),d.rel=null)}},!b.support()){b.poly();var c=a.setInterval(b.poly,300);a.addEventListener&&a.addEventListener("load",function(){b.poly(),a.clearInterval(c)}),a.attachEvent&&a.attachEvent("onload",function(){a.clearInterval(c)})}}}(this);
	</script>

	<!--google analytics-->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88659906-1', 'auto');
  ga('send', 'pageview');

      </script>
	<script src="../js/jquery.maskedinput.min.js" type="text/javascript"></script>
	<script>
	jQuery(function($){
        $("#date").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
        $("#phone").mask("999-999-9999");
        $("#tin").mask("99-9999999");
        $("#ssn").mask("999-99-9999");
        $("#ftin1").mask("99-9999999");
        $("#ssn1").mask("999-99-9999");
});
	</script>
        <script>
		var slideIndex = 0;
		carousel();

		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("mainSlides");
		    for (i = 0; i < x.length; i++) {
		      x[i].style.display = "none";
		    }
		    slideIndex++;
		    if (slideIndex > x.length) {slideIndex = 1}
		    x[slideIndex-1].style.display = "block";
		    setTimeout(carousel, 2000);
		}
	</script>
	<script> $(document).ready(function(){ $("button").click(function(){ $("show").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button1").click(function(){ $("show1").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button2").click(function(){ $("show2").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button3").click(function(){ $("show3").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button4").click(function(){ $("show4").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button5").click(function(){ $("show5").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button6").click(function(){ $("show6").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button7").click(function(){ $("show7").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button8").click(function(){ $("show8").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button9").click(function(){ $("show9").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button10").click(function(){ $("show10").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button11").click(function(){ $("show11").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button12").click(function(){ $("show12").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button13").click(function(){ $("show13").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button14").click(function(){ $("show14").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button15").click(function(){ $("show15").toggle(); }); }); </script>
	<script> $(document).ready(function(){ $("button16").click(function(){ $("show16").toggle(); }); }); </script>

	<script> //select-deselect all recipients in emails
		function setCheckboxes1(act) {
		  var e = document.getElementsByClassName('leaders');
		  var elts_cnt  = (typeof(e.length) != 'undefined') ? e.length : 0;
		  if (!elts_cnt) {
		    return;
		  }
		  for (var i = 0; i < elts_cnt; i++) {
		    e[i].checked = (act == 1 || act == 0) ? act : (e[i].checked ? 0 : 1);
		  }
		}
		function setCheckboxes2(act) {
		  var e = document.getElementsByClassName('members');
		  var elts_cnt  = (typeof(e.length) != 'undefined') ? e.length : 0;
		  if (!elts_cnt) {
		    return;
		  }
		  for (var i = 0; i < elts_cnt; i++) {
		    e[i].checked = (act == 1 || act == 0) ? act : (e[i].checked ? 0 : 1);
		  }
		}
		function setCheckboxes3(act) {
		  var e = document.getElementsByClassName('contacts');
		  var elts_cnt  = (typeof(e.length) != 'undefined') ? e.length : 0;
		  if (!elts_cnt) {
		    return;
		  }
		  for (var i = 0; i < elts_cnt; i++) {
		    e[i].checked = (act == 1 || act == 0) ? act : (e[i].checked ? 0 : 1);
		  }
		}
	</script>
	<script type="text/javascript">
        function ValidateRadios() {
         var radios = document.getElementsByName('fundtype')

         for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
        //alert("Selected Value = " + radios[i].value);
        return true; // checked
    }
    //return false;
    };

    // not checked, show error
    document.getElementById('ValidationError').innerHTML = 'Error! You must select one group.';
    return false;
     }
</script>
  <script>
	function allInputs(e)
	{
	var other = document.getElementById("clubs1").value;
	var gen = document.getElementById("general1").value;
	var ath = document.getElementById("athletics1").value;
         if ($("input[type=checkbox]:checked").length === 0 )
         {
            if (other === "" && gen === "" && ath === "")
            {
              e.preventDefault();
              alert('You must select a checkbox or fill in club name.');
              return false;
            }
         }
        }
       </script>
	<script type="text/javascript">
    $(function () {
        $("#submit").click(function () {
            var le = $("#leader");
            var ty = $("#logdropdown1");
            if (le.val() == "") {
                //If the "Please Select" option is selected display error.
                alert("Please select a Sender!");
                document.getElementById("leader").focus();
                document.getElementById("leader").style.border="3px solid red";
                return false;
            }
            if (ty.val() == "") {
                //If the "Please Select" option is selected display error.
                alert("Please select an email type!");
                document.getElementById("logdropdown1").focus();
                document.getElementById("logdropdown1").style.border="3px solid red";
                return false;
            }
            return true;
        });
    });
</script>
<script>
        function myToggle() {
        var x = document.getElementById('example1');
        var y = document.getElementById('example2');
        if (x.style.display === 'none') {
        x.style.display = 'block';
        y.style.display = 'none';
        } else {
          x.style.display = 'none';
        }
       }
       </script>
       <script>
        function myToggle2() {
        var x = document.getElementById('example2');
        var y = document.getElementById('example1');
        if (x.style.display === 'none') {
        x.style.display = 'block';
        y.style.display = 'none';
        } else {
          x.style.display = 'none';
        }
       }
       </script>

<script>
  $( function() {
    $( "#accordion" ).accordion({
       header: "h4",
       heightStyle: "Content",
       collapsible: true,
       active: 0,
       autoHeight: true
    });
  } );
  </script>
<script type="text/javascript">
        function ValidateRadios2() {
         var radios = document.getElementsByName('clubs[]')

         for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
        //alert("Selected Value = " + radios[i].value);
        return true; // checked
    }
    };

    // not checked, show error
    document.getElementById('ValidationError').innerHTML = 'Error! You must select one group.';
    return false;
     }
</script>

	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-N7BS27"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-N7BS27');</script>
	<!-- End Google Tag Manager -->

	<script>
		function getSelectedValue() {
	 		var val = document.getElementById("fundraisingType").value;
	 		//alert("You selected : " + val);
         		document.getElementById("choice").value = val;
        	}
	</script>


<script type="text/javascript">



    function CheckForm(){
	var checked=false;
	var elements = document.getElementsByName("clubs[]");
	for(var i=0; i < elements.length; i++){
		if(elements[i].checked) {
			checked = true;
		}
	}
	if (!checked) {
		alert('You Must Select At Least One Club Type');
		return false;
	}
	//return checked;
}
</script>
<script>
  function checkForm1(form)
  {


    if(form.pass1.value != "" && form.pass1.value == form.pass2.value) {
      if(form.pass1.value.length < 6) {
        //alert("Error: Password must contain at least six characters!");
        document.getElementById("error").innerHTML = "Error: Password must contain at least six characters!";
        form.pass1.focus();
        return false;
      }
      if(form.pass1.value == form.email.value) {
        //alert("Error: Password must be different from Username!");
        document.getElementById("error").innerHTML = "Error: Password must be different from email address!";
        form.pass1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pass1.value)) {
        //alert("Error: password must contain at least one number (0-9)!");
        document.getElementById("error").innerHTML = "Error: password must contain at least one number (0-9)!";
        form.pass1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pass1.value)) {
        //alert("Error: password must contain at least one lowercase letter (a-z)!");
        document.getElementById("error").innerHTML = "Error: password must contain at least one lowercase letter (a-z)!";
        form.pass1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pass1.value)) {
        //alert("Error: password must contain at least one uppercase letter (A-Z)!");
        document.getElementById("error").innerHTML = "Error: password must contain at least one uppercase letter (A-Z)!";
        form.pass1.focus();
        return false;
      }
    } else {
      //alert("Error: Please check that you've entered and confirmed your password!");
      document.getElementById("error").innerHTML = "Error: Please check that you've entered and confirmed your password!";
      form.pass1.focus();
      return false;
    }

    //alert("You entered a valid password: " + form.pass1.value);
    return true;
  }

</script>
<script>
  function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}
  </script>
<script>
		function showUser(str) {
			if (str=="") {
	  			document.getElementById("txtHint").innerHTML="";
	  			//var z = $(this).find(':selected').data('year');
	  			return;
	  		}
			if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
	  			xmlhttp=new XMLHttpRequest();
	  		}
			else {// code for IE6, IE5
	  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  		}
			xmlhttp.onreadystatechange=function() {
	  			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	    				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	    			}
	  		}
	  		var div = str.split(/,/);
	  		var name = div[0];
                        var z = div[1];
			xmlhttp.open("GET","getclub.php?q="+name+"&z="+z,true);
			xmlhttp.send();
		}
	</script>

	<script>
		function showUser2(str) {
			if (str=="") {
	  			document.getElementById("clubs").innerHTML="";
	  			//var z = $(this).find(':selected').data('year');
	  			return;
	  		}
			if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
	  			xmlhttp=new XMLHttpRequest();
	  		}
			else {// code for IE6, IE5
	  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  		}
			xmlhttp.onreadystatechange=function() {
	  			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	    				document.getElementById("clubs").innerHTML=xmlhttp.responseText;
	    			}
	  		}
	  		var div = str.split(/,/);
	  		var name = div[0];
            var z = div[1];
			xmlhttp.open("GET","getClub2.php?q="+name+"&z="+z,true);
			xmlhttp.send();
		}
	</script>

	<script>
	function atleast_onecheckbox(e) {
	var other = document.getElementById("clubs1");
	var gen = document.getElementById("general1");
	var ath = document.getElementById("athletics1");
	var error = document.getElementById("error");
        if ($("input[type=checkbox]:checked").length === 0) {
        if(myForm.clubs1.value == "" && myForm.general1.value == "" && myForm.athletics1.value == "")
        {

             e.preventDefault();
             document.getElementById("error").innerHTML="You must select a checkbox or fill in club name.";
             return false;
        }
       }
       //return true;
      }
      </script>
      <script>
	function atleast_onecheckbox2(e)
	{
	var other = document.getElementById("clubs1").value;
	var gen = document.getElementById("general1").value;
	var ath = document.getElementById("athletics1").value;
         if ($("input[type=checkbox]:checked").length === 0 )
         {
            if (other === "" && gen === "" && ath === "")
            {
              e.preventDefault();
              alert('You must select a checkbox or fill in club name.');
              return false;
            }
         }
        }
       </script>

	<script>
		function toggle(source) {
	  		checkboxes = document.getElementsByName('clubs[]');
	  		for(var i in checkboxes)
	  		checkboxes[i].checked = source.checked;

	  		checkboxes1 = document.getElementsByName('general[]');
	  		for(var e in checkboxes1)
	  		checkboxes1[e].checked = source.checked;

	  		checkboxes2 = document.getElementsByName('athletics[]');
	  		for(var f in checkboxes2)
	  		checkboxes2[f].checked = source.checked;

		}


		$(document).ready(function(){
	  		$('input[name="all"],input[name="clubs[]"]').bind('click', function(){
	  			var status = $(this).is(':checked');
	  			$('input[type="checkbox"]', $(this).parent('li')).attr('checked', status);
	  		});
	  		});


	</script>

	<script>
		function toggle2(source) {
	  		checkboxes = document.getElementsByName('recipents[]');
	  		for(var i in checkboxes)
	  		checkboxes[i].checked = source.checked;
		}

		$(document).ready(function(){
	  		$('input[name="all"],input[name="recipents[]"]').bind('click', function(){
	  			var status = $(this).is(':checked');
	  			$('input[type="checkbox"]', $(this).parent('li')).attr('checked', status);
	  		});
	  	});
	</script>

	<script>
		$(document).ready(function() {
			$(“.nav li:has(ul)”).hover(function(){
				$(this).find(“ul”).slideDown();
			}, function(){
				$(this).find(“ul”).hide();
			});
		});
	</script>

	<script>
		$(document).ready(function(){
	  		$("button1").click(function(){
	    			$("show").toggle();
	  		});
		});
	</script>

	<script>
		$(document).ready(function(){
	  		$("button2").click(function(){
	    			$("show2").toggle();
	  		});
		});
	</script>

	<script>
		var LHtotal;
		var AHtotal;
		var LMtotal;
		var AMtotal;
		var schoolTotal;
		var churchTotal;
		var grandTotal1;
		function calculateSchool(orgType) {
		        //large high schools
		        var num = Number(document.getElementById("LHnum").value);
			var fund = Number(document.getElementById("LHfund").value);
			var people = Number(document.getElementById("LHpeople").value);
			var percent = (Number(document.getElementById("LHpercent").value))/100;
			var active = people * percent;
			active = Number(active);
			//document.getElementById("LHactive").innerHTML = active;
			var baskets = Number(document.getElementById("LHbaskets").value);
			var numPerYear = Number(document.getElementById("LHnumPerYear").value);
			var price = 26.00;
			var commission = 0.005;
			var total1 = fund * active * baskets * numPerYear * price * commission * num;
			var result1 = format(total1,2);
			grandTotal1 = result1;
			schoolTotal = result1;
			document.getElementById("LHtotal").innerHTML = result1;
			document.getElementById("schoolTotal").innerHTML = schoolTotal;
			document.getElementById("grandTotal").value = grandTotal1;

			//average high schools
			var num2 = Number(document.getElementById("AHnum").value);
			var fund2 = Number(document.getElementById("AHfund").value);
			var people2 = Number(document.getElementById("AHpeople").value);
			var percent2 = (Number(document.getElementById("AHpercent").value))/100;
			var active2 = people2 * percent2;
			active2 = Number(active2);
			//document.getElementById("AHactive").innerHTML = active2;
			var baskets2 = Number(document.getElementById("AHbaskets").value);
			var numPerYear2 = Number(document.getElementById("AHnumPerYear").value);
			var total2 = fund2 * active2 * baskets2 * numPerYear2 * price * commission * num2;
			var result2 =  format(total2,2);
			document.getElementById("AHtotal").innerHTML = result2;
			grandTotal1 += result2;
			schoolTotal += result2;
			schoolTotal = format(schoolTotal,2);
			document.getElementById("schoolTotal").innerHTML = schoolTotal;
			document.getElementById("grandTotal").value = grandTotal1;

			//large middle schools
			var num3 = Number(document.getElementById("LMnum").value);
			var fund = Number(document.getElementById("LMfund").value);
			var fund3 = Number(document.getElementById("LMfund").value);
			var people3 = Number(document.getElementById("LMpeople").value);
			var percent3 = (Number(document.getElementById("LMpercent").value))/100;
			var active3 = people3 * percent3;
			active3 = Number(active3);
			//document.getElementById("LMactive").innerHTML = active3;
			var baskets3 = Number(document.getElementById("LMbaskets").value);
			var numPerYear3 = Number(document.getElementById("LMnumPerYear").value);
			var total3 = fund3 * active3 * baskets3 * numPerYear3 * price * commission * num3;
			var result3 =  format(total3,2);
			document.getElementById("LMtotal").innerHTML = result3;
			grandTotal1 += result3;
			schoolTotal += result3;
			schoolTotal = format(schoolTotal,2);
			document.getElementById("schoolTotal").innerHTML = schoolTotal;
			document.getElementById("grandTotal").value = grandTotal1;

			//average middle schools
			var num4 = Number(document.getElementById("AMnum").value);
			var fund4 = Number(document.getElementById("AMfund").value);
			var people4 = Number(document.getElementById("AMpeople").value);
			var percent4 = (Number(document.getElementById("AMpercent").value))/100;
			var active4 = people4 * percent4;
			active4 = Number(active4);
			//document.getElementById("AMactive").innerHTML = active4;
			var baskets4 = Number(document.getElementById("AMbaskets").value);
			var numPerYear4 = Number(document.getElementById("AMnumPerYear").value);
			var total4 = fund4 * active4 * baskets4 * numPerYear4 * price * commission * num4;
			var result4 =  format(total4,2);
			document.getElementById("AMtotal").innerHTML = result4;
			grandTotal1 += result4;
			schoolTotal += result4;
			document.getElementById("schoolTotal").innerHTML = schoolTotal;
			document.getElementById("grandTotal").value = grandTotal1;

			//elementary schools
			var num7 = Number(document.getElementById("Enum").value);
			var fund7 = Number(document.getElementById("Efund").value);
			var people7 = Number(document.getElementById("Epeople").value);
			var percent7 = (Number(document.getElementById("Epercent").value))/100;
			var active7 = people7 * percent7;
			active7 = Number(active7);
			//document.getElementById("Eactive").innerHTML = active7;
			var baskets7 = Number(document.getElementById("Ebaskets").value);
			var numPerYear7 = Number(document.getElementById("EnumPerYear").value);
			var total7 = fund7 * active7 * baskets7 * numPerYear7 * price * commission * num7;
			var result7 =  format(total7,2);
			grandTotal1 += result7;
			schoolTotal += result7;
			document.getElementById("Etotal").innerHTML = result7;
			document.getElementById("schoolTotal").innerHTML = schoolTotal;
			document.getElementById("grandTotal").value = grandTotal1;


			//large churches
			var num5 = Number(document.getElementById("LCnum").value);
			var fund5 = Number(document.getElementById("LCfund").value);
			var people5 = Number(document.getElementById("LCpeople").value);
			var percent5 = (Number(document.getElementById("LCpercent").value))/100;
			var active5 = people5 * percent5;
			active5 = Number(active5);
			//document.getElementById("LCactive").innerHTML = active5;
			var baskets5 = Number(document.getElementById("LCbaskets").value);
			var numPerYear5 = Number(document.getElementById("LCnumPerYear").value);
			var total5 = fund5 * active5* baskets5 * numPerYear5 * price * commission * num5;
			var result5 =  format(total5,2);
			document.getElementById("LCtotal").innerHTML = result5;
			grandTotal1 += result5;
			churchTotal = result5;
			document.getElementById("churchTotal").innerHTML = churchTotal;
			document.getElementById("grandTotal").value = grandTotal1;

			//average churches
			var num6 = Number(document.getElementById("ACnum").value);
			var fund6 = Number(document.getElementById("ACfund").value);
			var people6 = Number(document.getElementById("ACpeople").value);
			var percent6 = (Number(document.getElementById("ACpercent").value))/100;
			var active6 = people6 * percent6;
			active6 = Number(active6);
			//document.getElementById("ACactive").innerHTML = active6;
			var baskets6 = Number(document.getElementById("ACbaskets").value);
			var numPerYear6 = Number(document.getElementById("ACnumPerYear").value);
			var total6 = fund6 * active6 * baskets6 * numPerYear6 * price * commission * num6;
			var result6 =  format(total6,2);
			document.getElementById("ACtotal").innerHTML = result6;
			grandTotal1 += result6;
			churchTotal += result6;
			document.getElementById("churchTotal").innerHTML = churchTotal;
			document.getElementById("grandTotal").value = grandTotal1;



			//organizations
			var num8 = Number(document.getElementById("Onum").value);
			var fund8 = Number(document.getElementById("Ofund").value);
			var people8 = Number(document.getElementById("Opeople").value);
			var percent8 = (Number(document.getElementById("Opercent").value))/100;
			var active8 = people8 * percent8;
			active8 = Number(active8);
			//document.getElementById("Oactive").innerHTML = active8;
			var baskets8 = Number(document.getElementById("Obaskets").value);
			var numPerYear8 = Number(document.getElementById("OnumPerYear").value);
			var total8 = fund8 * active8 * baskets8 * numPerYear8 * price * commission * num8;
			var result8 =  format(total8,2);
			//document.getElementById("Ototal").innerHTML = result6;
			grandTotal1 += result8;
			orgTotal = result8;
			document.getElementById("Ototal").innerHTML = result8;
			document.getElementById("orgTotal").innerHTML = orgTotal;
			document.getElementById("grandTotal").value = grandTotal1;
		}
		function format(num, dec) {
	        	return Math.round(num*Math.pow(10,dec))/Math.pow(10,dec);
	        }
	</script>
		<script>

		function fetch_select2(val) {

		   	$.ajax({
		     		type: 'post',
		     		url: 'fetch_reps.php',
		     		data: {
		       			get_option:val
		     		},
		     		success: function (response) {
		       			document.getElementById("rpid").innerHTML=response;
		       			document.getElementById("groupid").innerHTML='';
		       			document.getElementById("clubs").innerHTML='';
		     		}
		   	});
		  }

		function fetch_select3(val) {

		   	$.ajax({
		     		type: 'post',
		     		url: 'fetch_groups.php',
		     		data: {
		       			get_option:val
		     		},
		     		success: function (response) {
		       			document.getElementById("groupid").innerHTML=response;
		     		}
		   	});
		  }

		function fetch_select(val) {

		   	$.ajax({
		     		type: 'post',
		     		url: 'fetch_members.php',
		     		data: {
		       			get_option:val
		     		},
		     		success: function (response) {
		       			document.getElementById("memberid").innerHTML=response;
		     		}
		   	});
		  }
		  function fetch_select4(val) {

		   	$.ajax({
		     		type: 'post',
		     		url: 'displayCoordinator.php',
		     		data: {
		       			get_option:val
		     		},
		     		success: function (response) {
		       			document.getElementById("cd").innerHTML=response;
		     		}
		   	});
		  }
	</script>
	<script>
	function fetch_select5(val) {

		   	$.ajax({
		     		type: 'post',
		     		url: 'fetch_contact_datax.php',
		     		data: {
		       			get_option:val
		     		},
		     		success: function (response) {
		       			document.getElementById("memberContacts").innerHTML=response;
		     		}
		   	});
		  }
		function fetch_select6(val) {
		var group = document.getElementById("groupid").value;
		   	$.ajax({
		     		type: 'post',
		      		url: 'getGroupSales.php',
		     		data: {
		       			get_option:val, get_option2:group
		     		},
		     		success: function (response) {
		       			document.getElementById("goalreport").innerHTML=response;
		     		}
		   	});

		}
		function fetch_select7(val) {
		var group = document.getElementById("groupid").value;
		   	$.ajax({
		     		type: 'post',
		      		url: 'sortReport.php',
		     		data: {
		       			get_option:val, get_option2:group
		     		},
		     		success: function (response) {
		       			document.getElementById("goalreport").innerHTML=response;
		     		}
		   	});

		}
		function fetch_select8(val) {

		   	$.ajax({
		     		type: 'post',
		     		url: 'fetch_groups2.php',
		     		data: {
		       			get_option:val
		     		},
		     		success: function (response) {
		       			document.getElementById("groupid").innerHTML=response;
		       			document.getElementById("clubs").innerHTML='';
		     		}
		   	});
		  }

		  function fetch_select9(val) {

		   	$.ajax({
		     		type: 'post',
		     		url: 'fetchEmails.php',
		     		data: {
		       			get_option:val
		     		},
		     		success: function (response) {
		       			document.getElementById("recipients").innerHTML=response;
		       			document.getElementById("memid").value=val;

		     		}
		   	});
		}

		function fetch_select10(val) {

		   	$.ajax({
		     		type: 'post',
		     		url: 'getMemberSales.php',
		     		data: {
		       			get_option:val

		     		},
		     		success: function (response) {
		       			document.getElementById("goalreport").innerHTML=response;

		     		}
		   	});
		}
		  function fetch_select11(val) {
		var group = document.getElementById("memberid").value;
		   	$.ajax({
		     		type: 'post',
		      		url: 'sortReport.php',
		     		data: {
		       			get_option:val, get_option2:group
		     		},
		     		success: function (response) {
		       			document.getElementById("goalreport").innerHTML=response;
		     		}
		   	});

		}


	function fetch_select12(val) {

		   	$.ajax({
		     		type: 'post',
		     		url: 'fetch_group.php',
		     		data: {
		       			get_option:val
		     		},
		     		success: function (response) {
		       			document.getElementById("new_select").innerHTML=response;
		       			document.getElementById("new_select2").innerHTML='';

		     		}
		   	});
		   	}
		   	</script>
	 <script>
	function fetch_select15(val) {

		   	$.ajax({
		   	    // var option = $('input[type="radio"]:checked').val();
		     		type: 'post',
		     		url: 'fetch_orgs.php',
		     		data: {
		       			//"fundSelect":radio_button_value
		       			 get_option : val
		     		},
		     		success: function (response) {
		       			document.getElementById("selection").innerHTML=response;


		     		}
		   	});
		   }
	 </script>
	 <script>
	 function fetch_select16(val) {

		       			document.getElementById("selection").innerHTML='';

		   }
	 </script>
	 <script>
	 function fetch_select17(val) {

		   	$.ajax({
		     		type: 'post',
		     		url: 'fetch_groups.php',
		     		data: {
		       			get_option:val
		     		},
		     		success: function (response) {
		       			document.getElementById("groupid2").innerHTML=response;

		     		}
		   	});
		  }

		  function fetch_select18(val) {

		   	$.ajax({
		     		type: 'post',
		     		url: 'fetch_reps.php',
		     		data: {
		       			get_option:val
		     		},
		     		success: function (response) {
		       			document.getElementById("rpid2").innerHTML=response;
		     		}
		   	});
		  }
		  function fetch_select19(val) {

		   	$.ajax({
		     		type: 'post',
		     		url: 'fetchEmails3.php',
		     		data: {
		       			get_option:val
		     		},
		     		success: function (response) {
		       			document.getElementById("recipients").innerHTML=response;

		     		}
		   	});
		}

		  function fetch_select20(val) {

		   	$.ajax({
		     		type: 'post',
		     		url: 'fetch_groups_parent.php',
		     		data: {
		       			get_option:val
		     		},
		     		success: function (response) {
		       			document.getElementById("groupid").innerHTML=response;
		     		}
		   	});
		  }
		  </script>
		  <script>
	function getParameterByName(name) {
         name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
         var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
             results = regex.exec(location.search);
         return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
       }
        function checkCookies() {
        //var sent = GetURLParameter('cs');
        var sent = getParameterByName('cs');
         if(sent == 1)
         {

           document.getElementById("emessage").innerHTML="email sent";
           $("#emessage").html("Email(s) Sent").fadeIn(5000).fadeOut(5000);

         }
        }
       </script>



	<script>
		$(function(){
		 $('#slider')
		   .anythingSlider() // add any non-default options here
		});
	</script>


	<script>
		function getUrlVars() {
		    var vars = {};
		    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		        vars[key] = value;
		    });
		    return vars;
		}
		var group = getUrlVars()["group"];
	</script>

	<script src="http://app.ecwid.com/script.js?" charset="utf-8"></script>
	<script>xAffiliate('24503');</script>
	<script> xProductBrowser("categoriesPerRow=3","views=grid(5,4) list(10) table(20)","categoryView=grid","searchView=list","style="); </script>



  <!-- jequery for validation -- ensures fields at least have text -->
  <script>
    var $formLogin = $('#loginform');
    var $formLost = $('#lost-form');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    $("#login_btn").submit(function () {
        switch(this.id) {
            case "loginform":
                var $username=$('#loginemail').val();
                var $password=$('#loginpassword').val();
                return false;
                break;
            default:
                return false;
        }
        return false;
    });
  </script>

   <!-- prevent side navigation from collapsing when mobile users attempt to toggle a dropdown -->
   <script>
    $(document).ready(function(){
    $('li.dropdown a').on("click", function(){
      $(this).parent().toggleClass('open');
      });
      $('body.canvas-slid').on('click', function (e) {
      if (!$('li.dropdown').is(e.target) && $('li.dropdown').has(e.target).length === 0 && $('.open').has(e.target).length === 0)  {
          $('li.dropdown').removeClass('open');
        }
        e.stopPropagation();
        e.preventDefault();
      });
        $('#accountIcon, #accountIconMobile').click(function () {
            $('login-modal').modal({
                show: true
            })
        });
            $(document).on('show.bs.modal', '.modal', function (event) {
                var zIndex = 1040 + (10 * $('.modal:visible').length);
                $(this).css('z-index', zIndex);
                setTimeout(function() {
                    $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
                }, 0);
            }); $('[data-toggle="tooltip"]').tooltip();
    });

  </script>

    <script>/* remove containers so dropdowns are consistant inside sidenavigation */
        $(function () {
        $(window).on('load, resize', function () {
            var viewportWidth = $(window).width();
            if (viewportWidth < 1183) {
                $(".dropdown-menu #dropdownrow-large").removeClass("container");
                 $(".dropdown-menu #dropdownrow").removeClass("container").removeClass("container-fluid");
            }else{
                $(".dropdown-menu #dropdownrow-large").addClass("container"),
                $(".dropdown-menu #dropdownrow").addClass("container").addClass("container-fluid");
            }
        })
        .resize();
        });
     </script>

     <script> //pause play carousel, switch active classes depedning on button clicked */
        $(function () {
            $('#carousel-presentation').carousel({
                interval:6500,
                pause: "false"
            });
            $('#playButton').click(function () {
                $('#carousel-presentation').carousel('cycle');
                $('#pauseButton').removeClass('active');
            });
            $('#pauseButton').click(function () {
                $('#carousel-presentation').carousel('pause');
                $('#pauseButton').addClass('active');
                $('#playButton').removeClass('active');
            });
        });
	</script>
  <script>
	    $(document).ready(function () {

    $('#myModal').modal('show');

     });
	</script>
</head>
<header>

    <div class ="container-fluid"> <!-- START above nav elements content container -->
       <div class="row-fluid" id="aboveNavElements">
          <a href="#" class="hidden-lg hidden-md pull-right" id="accountIcon" role="button" data-toggle="modal" data-target="#login-modal"><i data-toggle="tooltip" data-placement="left" title="Account Login and Information" class="fa fa-user fa-3x" aria-hidden="true"></i></a>

          <div id="headerImage" class="col-lg-3 col-md-1 col-sm-1" style="">
              <a href="../index.php"><img class="img-responsive" src="../newdeal/images/fundatm_logo.png" alt="GMlogo" class="img-responsive"></img></a>
          </div>

          <div id="bannerHeader" class="col-lg-7 col-lg-push-1 col-md-7 col-xs-12">
  	        <img class="img-responsive" src="../images/main_2.jpg" alt="Main Banner Image. Achieve Great Goals!"/>
          </div>

          <a href="#"  id="accountIcon" class="pull-right  hidden-sm hidden-xs" role="button" data-toggle="modal" data-target="#login-modal"><img src="../nd/images/log_icon.png" alt="" />Account</a>

      </div>
    </div><!-- END above nav elements -->






    <nav class="navbar navbar-default" role="navigation"> <!-- start default nav -->
      <div class="navbar-header container-fluid ">
        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
    <div class ="container-fluid">
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="navCats"  id="mainCategoryType"> <!-- navbar list items -->


        <li class="dropdown">
            <a href="../greatmoodsMall.php?group=16444&storeid=900#!/Womens/c/18159169/offset=0&sort=priceAsc" class="dropdown-toggle" data-toggle="dropdown disabled" role="button" aria-haspopup="true" aria-expanded="false">Women<span class="sr-only"></span></a>
            <?php include '../menu/menu_women.php'; ?>
         </li> <!-- end nav dropdown for multi columns -->

         <li class="dropdown"  id="mainCategoryType">
            <a  href="../greatmoodsMall.php?group=16444&storeid=900#!/Accessories/c/18195523/offset=0&sort=priceAsc" class="dropdown-toggle" data-toggle="dropdown disabled" role="button" aria-haspopup="true" aria-expanded="false">Accessories <span class="sr-only"></span></a>
              <?php include '../menu/menu_accessories.php'; ?>
         </li>

          <li class="dropdown"  id="mainCategoryType">
            <a href="../greatmoodsMall.php?group=16444&storeid=900#!/Mens/c/18159150/offset=0&sort=priceAsc" class="dropdown-toggle" data-toggle="dropdown disabled" role="button" aria-haspopup="true" aria-expanded="false">Men <span class="sr-only"></span></a>
            <?php include '../menu/menu_men.php'; ?>
          </li>

          <li class="dropdown"  id="mainCategoryType">
            <a href="../greatmoodsMall.php?group=16444&storeid=900#!/Juniors/c/18195671/offset=0&sort=priceAsc" class="dropdown-toggle" data-toggle="dropdown disabled" role="button" aria-haspopup="true" aria-expanded="false">Juniors <span class="sr-only"></span></a>
            <?php include '../menu/menu_juniors.php'; ?>
          </li>

          <li class="dropdown"  id="mainCategoryType">
            <a  href="../greatmoodsMall.php?group=16444&storeid=900#!/Kids/c/18209039/offset=0&sort=priceAsc" class="dropdown-toggle" data-toggle="dropdown disabled" role="button" aria-haspopup="true" aria-expanded="false">Kids <span class="sr-only"></span></a>
              <?php include '../menu/menu_kids.php'; ?>
          </li>
          <li class="dropdown"  id="mainCategoryType">
            <a "../greatmoodsMall.php?group=16444&storeid=900#!/Fitness/c/18209624/offset=0&sort=priceAsc" class="dropdown-toggle" data-toggle="dropdown disabled" role="button" aria-haspopup="true" aria-expanded="false">Fitness <span class="sr-only"></span> </a>
            <?php include '../menu/menu_fitness.php'; ?>
          </li>

          <li class="dropdown"  id="mainCategoryType">
            <a  href="../greatmoodsMall.php?group=16444&storeid=900#!/Food/c/18209702/offset=0&sort=priceAsc" class="dropdown-toggle" data-toggle="dropdown disabled" role="button" aria-haspopup="true" aria-expanded="false"  id="mainCategoryType">Gifts <span class="sr-only"></span> </a>
             <?php include '../menu/menu_food.php'; ?>
          </li>

          <li class="dropdown"  id="mainCategoryType">
            <a  href="../greatmoodsMall.php?group=16444&storeid=900#!/Entertainment/c/18209743/offset=0&sort=priceAsc" class="dropdown-toggle" data-toggle="dropdown disabled" role="button" aria-haspopup="true" aria-expanded="false">Entertainment<span class="sr-only"></span> </a>
             <?php include '../menu/menu_entertainment.php'; ?>
          </li>

          <li class="dropdown" id="mainCategoryType">
            <a  href="../greatmoodsMall.php?group=16444&storeid=900#!/Houseware/c/18209794/offset=0&sort=priceAsc" class="dropdown-toggle" data-toggle="dropdown disabled" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="sr-only"></span></a>
            <?php include '../menu/menu_housewares.php'; ?>
          </li>

          <li class="dropdown"  id="mainCategoryType">
            <a  href="../greatmoodsMall.php?group=16444&storeid=900#!/Health/c/18209818/offset=0&sort=priceAsc" class="dropdown-toggle" data-toggle="dropdown disabled" role="button" aria-haspopup="true" aria-expanded="false">Health<span class="sr-only"></span> </a>
            <?php include '../menu/menu_health.php'; ?>
          </li>

          <li class="dropdown"  id="mainCategoryType">
            <a  href="../greatmoodsMall.php?group=16444&storeid=900#!/Inspirational/c/18209845/offset=0&sort=priceAsc" class="dropdown-toggle" data-toggle="dropdown disabled" role="button" aria-haspopup="true">Inspirational<span class="sr-only"></span> </a>
            <?php include '../menu/menu_inspirational.php'; ?>
          </li>

          <li class="dropdown"  id="mainCategoryType">
            <a  href="../greatmoodsMall.php?group=16444&storeid=900#!/Holiday/c/18209901/offset=0&sort=priceAsc"  class="dropdown-toggle" data-toggle="dropdown disabled" role="button" aria-haspopup="true">Holiday<span class="sr-only"></span> </a>
              <?php include '../menu/menu_holiday.php'; ?>
          </li>

          <li class="dropdown"  id="mainCategoryType">
            <a  href="../greatmoodsMall.php?group=16444&storeid=900#!/Business/c/18209939/offset=0&sort=priceAsc"  class="dropdown-toggle" data-toggle="dropdown disabled" role="button" aria-haspopup="true">Business<span class="sr-only"></span> </a>
                <?php include '../menu/menu_business.php'; ?>
          </li>
          <!--<li class="divider-vertical" style="border-right: 1px solid white !important;border-left: 1px solid white !important"></li>-->

          <!-- fundraiser examples main navigation start -->
          <li id="fund-border" class="divider-vertical" style="border-right: 1px solid white !important;border-left: 1px solid transparent !important"></li>
          <span id="navbar-examples-wrap">
            <li id="navbar-examples-title">Fundraiser Examples</li>
              <li id="fund-example-item" class="dropdown">
                <a id="school-drop-link" data-toggle="dropdown disabled" role="button" aria-haspopup="true" aria-expanded="false">Schools<span class="sr-only"></span></a>
                   <ul class="dropdown-menu example-list-edu" >
                    <?php include '../menu/menu_education_examples.php'; ?>
                  </ul>
              </li>
            <span class="fund-divider"></span>
            <li id="fund-example-item" class="dropdown">
              <a id="orgs-drop-link" href="#"  class="dropdown-toggle"  role="button" id="mainCategoryType">Organizations<span class="sr-only"></span></a>
                              <ul class="dropdown-menu example-list-org">
                  <?php include '../menu/menu_organization_examples.php'; ?>
                </ul>
            </li>
          </span>
          <li id="fund-border" class="divider-vertical" style="border-right: 1px solid transparent !important;border-left: 1px solid white !important"></li>

        <!--<li id="login-button" role="button" data-toggle="modal" data-target="#login-modal" aria-hidden="true"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Login</a></li>-->
      </div>
    </div><!-- end container -->
  </nav> <!-- end nav -->

    <!-- Code for navbar collapse to SIDEBAR on MOBILE screens -->
  <div class="navmenu navmenu-default navmenu-fixed-left offcanvas" >
    <ul class="nav navmenu-nav">
      <!--<span role="button" data-toggle="modal" data-target="#login-modal" aria-hidden="true">Login</span>-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle " role="button" aria-haspopup="true" aria-expanded="false" id="mainCategoryType">Women <span class="sr-only"></span></a>
          <?php include '../menu/menu_women.php'; ?>
      </li> <!-- end nav dropdown for multi columns -->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"  id="mainCategoryType">Accessories <span class="sr-only"></span></a>
            <?php include '../menu/menu_accessories.php'; ?>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"  id="mainCategoryType">Men <span class="sr-only"></span></a>
            <?php include '../menu/menu_men.php'; ?>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" role="button"aria-haspopup="true" aria-expanded="false"  id="mainCategoryType">Juniors <span class="sr-only"></span></a>
            <?php include '../menu/menu_juniors.php'; ?>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"  id="mainCategoryType">Kids <span class="sr-only"></span> </a>
        <?php include '../menu/menu_kids.php'; ?>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" role="button"  aria-haspopup="true" aria-expanded="false" id="mainCategoryType">Fitness <span class="sr-only"></span> </a>
          <?php include '../menu/menu_fitness.php'; ?>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"  id="mainCategoryType">Gifts <span class="sr-only"></span></a>
          <?php include '../menu/menu_food.php'; ?>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false"  id="mainCategoryType">Entertainment <span class="sr-only"></span></a>
         <?php include '../menu/menu_entertainment.php'; ?>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"  id="mainCategoryType">Home <span class="sr-only"></span></a>
            <?php include '../menu/menu_housewares.php'; ?>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" role="button"  aria-haspopup="true" aria-expanded="false"  id="mainCategoryType">Health <span class="sr-only"></span> </a>
        <?php include '../menu/menu_health.php'; ?>
      </li>
      <li class="dropdown" >
        <a href="#"  id="mainCategoryType" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Inspirational <span class="sr-only"></span></a>
          <?php include '../menu/menu_inspirational.php'; ?>
      </li>
      <li class="dropdown">
        <a href="#"  id="mainCategoryType" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Holiday <span class="sr-only"></span></a>
        <?php include '../menu/menu_holiday.php'; ?>
      </li>
      <li class="dropdown">
        <a href="#"  id="mainCategoryType" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Business <span class="sr-only"></span></a>
        <?php include '../menu/menu_business.php'; ?>
      </li>
        <li class="dropdown" id="fundraiserExamples">
          <a href="#"  class="dropdown-toggle" role="button" id="mainCategoryType">School Examples <span class="sr-only"></span></a>
            <ul class="dropdown-menu">
              <?php include '../menu/menu_education_examples.php'; ?>
            </ul>
          </li>
          <li class="dropdown" id="fundraiserExamples">
            <a href="#" class="dropdown-toggle" role="button" id="mainCategoryType">Organization Examples <span class="sr-only"></span></a>
            <ul class="dropdown-menu">
              <?php include '../menu/menu_organization_examples.php'; ?>
            </ul>
          </li>
        <li class="divider"></li>
      </ul> <!-- end navmenu -->
    </div> <!--end side nav -->


<!-- Login/logged in/change pw modal elements -->
<!-- START MODAL LOGIN -  pops up box for login -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" align="center">
          <img class="img-rounded" id="img_logo" src="../newdeal/images/fundatm_logo.png">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-times-circle" aria-hidden="true"></i>

          </button>
        </div>
    		<div id="loginSession">
    		<!-- form for login info and verifying session/user -->
          <?php
              if(!isset($_SESSION['LOGIN']) || $_SESSION['LOGIN'] == "FALSE") {
                  echo '<form id="loginform" action="../logInUser.php" method="POST">';
                  echo '<div class="modal-body">';
                  echo '<input class="form-control" id="loginemail" type="text" name="email" value="" placeholder="Email" required>';
                  echo '<input id="loginpassword" class="form-control" "loginpassword" type="password" name="password" value="" placeholder="Password" required>';
                //   echo '<div class="checkbox"><label><input type="checkbox"> Remember me</label></div>';
                  echo '</div>'; /*modal body end */
                  echo '<div class="modal-footer">';
                  echo '<div><button class="btn btn-success btn-lg btn-block" id="login_btn" name="submit" type="submit" value="login">Login</button></div>';
                   echo '<a href="recover.php"><input class="btn-link" name="passrec" type="button" value="Forgot Password" /></a></div>';
                  echo '</div>'; /* end modal footer */
                 /* echo '<a href="recover.php"><input class="user redbutton" name="passrec" type="button" value="Forgot Password" /></a></div>'; */
                  echo '</form>';
              }
               elseif ($_SESSION['LOGIN'] == "TRUE") {
                        echo '<div class="modal-body">';
                            echo '<div class="mallmenu">';
            	            echo '<h4><a href="index.php">FundraisingATM Homepage</a></h4>';
            	         	echo '<h4><a href="accounts.php"/>Account Home</a></h4>';
                	        echo '<h4><a href="../reset.php">Change My Password</a></h4>';
            	         	echo '</div>'; /*modal body end */
            	         	echo '<div class="modal-footer">';
			         	    include('../menu/logout.inc.php');
			         	    echo '</div>'; /*modal body end */
                }
           ?>
          </div>
      </div>    <!-- end modal content -->
    </div> <!-- end modal-dialogue -->
  </div> <!-- END MODAL LOGIN -->

          <!-- Reset PW Modal
          || WHILE ALL FUNCTIONS WORKED FINE FOR THIS, IT DOES NOT PROPERLY STORE PWs ||
          || Saving so I can look into utilizing PHP for reset inside this modal - have used it to show messages based on button submit, but pws still did not change ||
        <div class="modal fade" id="change-pw">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" align="center">
                      <img class="img-rounded" id="img_logo" src="../images/GMlogo.png">
                    </div>
                	<!-- change pw modal2 form
                  </?php
                        if($_SESSION['LOGIN'] == "TRUE") {
                                echo '<div class="modal-body">';
              	         	    echo '<h3>Change Your Password</h3>';
                                echo '<form id="change-pw-form" method="POST">';
                                echo '<input  class="form-control" type="password" name="password" value"" palceholder="Enter New Password" required>';
                                echo '<input class="form-control" type="password" name="cpassword" value"" placeholder= Confirm New Password" required>';
                                echo '</div>'; /*modal body end */
                                echo '<div class="modal-footer">';
                                echo '<button class="btn btn-success btn-lg btn-block" type="submit" name="submit" value="Change Password" id="changBtn" required>Change Password</button>';
                                echo '  </form>';
                                echo '<br><a class="btn btn-sm btn-primary" href="#" data-dismiss="modal">Back</a>';
                                echo '</div>'; /* end modal footer */
                        }
                	  ?>
                </div>    <!-- end modal content
            </div> <!-- end modal-dialogue
        </div>  END MODAL CHANGEPW -->

</header>
<!--<li>
    <a href="#">GreatMoods<br>Mall Directory</a>
    <php include '../menu/menu_mall_directory_site.php'; ?>
</li> -->
