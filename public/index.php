 <!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Interactive1</title>
	
	<link rel="stylesheet" type="text/css" href="./css/main.css"/>
	<link rel="stylesheet" type="text/css" href="./css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="./css/text.css"/>
	<link rel="stylesheet" type="text/css" href="./css/960_12_col.css"/>
	<link rel="stylesheet" type="text/css" href="./css/pro_drop_1.css" />
	<script src="./js/jquery.js"></script> 	<script src="./js/jquery.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
      
		
	
</head>
<body>
<?php require("xml_unos.php"); ?>
<div class="container_12 ">
	<header id="logo" class="logo">
		<h1><a href="#">Logo</a></h1>

	</header><!-- /header -->
<br class="clear" />
<div class="nav">
	<nav class="navigacija">
		<ul>
		    <li><a href="#">ABOUT OUR COMPANY</a></li>
		    <li><a href="#">TRACK RECORD</a></li>
		    <li><a class="selected" href="#">YOUR TEAM</a></li>
		    <li><a href="#">NEWS &amp; INSIGHTS</a></li>
		    <li><a href="#">INDUSTRY LEADERSHIP</a></li>
		    <li><a href="#">CONTACT US</a></li>
		</ul>
	</nav>	

</div>


 <div class="main_title">
	<h2>AN EXPERIENCED TEAM</h2>
</div>



<ul id="plavi_menu" class="clearfix">
<li class="top"><a href="#" id="products" class="top_link"><span class="down">All</span></a>
		<ul class="sub">
			
			<li><a href="#">Ivan Ivanović </a></li>
			<li><a href="#">Ivan Ivanović </a></li>
			<li><a href="#">Ivan Ivanović </a></li>
			<li><a href="#">Ivan Ivanović </a></li>
			<li><a href="#">Ivan Ivanović </a></li>
			<li><a href="#">Ivan Ivanović</a></li>
			<li><a href="#">Ivan Ivanović</a></li>
		</ul>
	</li>
	<li class="top"><a href="#" class="top_link"><span>Offices</span></a></li>
	<li class="top"><a href="#" class="top_link"><span>Partners</span></a></li>
	<li class="top"><a href="#" class="top_link"><span>Deals</span></a></li>
	<li class="top"><a href="#" class="top_link"><span>Support Team</span></a></li>	
</ul>


<div class="main1" id="main1">

	<div class="grid_4" >

		<a href="#"class="name" id="osoba"><img id="osoba1" src="./img/selected_person.png" alt="">
		<?php echo $feed[0]['name']; ?><br/></a>
		<span class="job"><?php echo $feed[0]['jtitle']; ?></span>
		<p hidden class="para">
		 	<?php echo $feed[0]['desc']; ?>
	   </p>
			 

	</div>
	<div class="grid_4">
		<a href="#"class="name" id="osoba"><img id="osoba2" id="osoba1"src="./img/selected_person.png" alt="">
		<?php echo $feed[1]['name']; ?><br/></a>
		<span class="job"><?php echo $feed[1]['jtitle']; ?></span>
		<p  hidden class="para">
			<?php echo $feed[1]['desc']; ?>

		</p>
	</div>
	<div class="grid_4">
		<a href="#"class="name" id="osoba"><img id="osoba3"src="./img/selected_person.png" alt="">
		<?php echo $feed[2]['name']; ?><br/></a>
		<span class="job"><?php echo $feed[2]['jtitle']; ?></span>
		<p hidden class="para">
			<?php echo $feed[2]['desc']; ?>
		</p>
	</div><br class="clear" />

</div>

<div class="main2" id="main2">

	<div class="grid_4" >

		<a href="#"class="name" id="osoba"><img id="osoba4" src="./img/selected_person.png" alt="">
		<?php echo $feed[3]['name']; ?><br/></a>
		<span class="job"><?php echo $feed[3]['jtitle']; ?></span>
		<p hidden class="para">
			<?php echo $feed[3]['desc']; ?>
		</p>
	</div>
	<div hidden class="grid_4">
		<a href="#"class="name" id="osoba"><img id="osoba5"src="./img/selected_person.png" alt="">
		<?php echo $feed[4]['name']; ?><br/></a>
		<span class="job"><?php echo $feed[4]['jtitle']; ?></span>
		<p hidden class="para"> 
			<?php echo $feed[4]['desc']; ?>
		</p>
	</div>
	<div hidden class="grid_4">
		<a  href="#"class="name" id="osoba"><img id="osoba6"src="./img/selected_person.png" alt="">
		<?php echo $feed[5]['name']; ?><br/></a>
		<span class="job"><?php echo $feed[5]['jtitle']; ?></span>
		<p hidden class="para">
			<?php echo $feed[5]['desc']; ?>
		</p>
	</div><br class="clear" />

</div>

<div class="main3" id="main3">

	<div class="grid_4" >

		<a href="#"class="name" id="osoba"><img id="osoba7"src="./img/selected_person.png" alt="">
		<?php echo $feed[6]['name']; ?><br/></a>
		<span class="job"><?php echo $feed[6]['jtitle']; ?></span>
		<p hidden class="para">
			<?php echo $feed[6]['desc']; ?>
		</p>
	</div>
	<div hidden class="grid_4">
		<a href="#"class="name" id="osoba"><img id="osoba8"src="./img/selected_person.png" alt="">
		<?php echo $feed[7]['name']; ?><br/></a>
		<span class="job"><?php echo $feed[7]['jtitle']; ?></span>
		<p hidden class="para">
			<?php echo $feed[7]['desc']; ?>
		</p>
	</div>
	<div hidden class="grid_4">
		<a href="#"class="name" id="osoba"><img id="osoba9" src="./img/selected_person.png" alt="">
		<?php echo $feed[8]['name']; ?><br/></a>
		<span class="job"><?php echo $feed[8]['jtitle']; ?></span>
		<p hidden class="para">
			<?php echo $feed[8]['desc']; ?>
		</p>
	</div><br class="clear" />

</div>

<div class="main4" id="main4">

	<div hidden class="grid_4" >

		<a href="#"class="name" id="osoba"><img id="osoba10"src="./img/selected_person.png" alt="">
		<?php echo $feed[9]['name']; ?><br/></a>
		<span class="job"><?php echo $feed[9]['jtitle']; ?></span>
		<p hidden class="para">
			<?php echo $feed[9]['desc']; ?>	
		</p>
	</div>
	<div class="grid_4">
		<a href="#"class="name" id="osoba"><img id="osoba11"src="./img/selected_person.png" alt="">
		<?php echo $feed[10]['name']; ?><br/></a>
		<span class="job"><?php echo $feed[10]['jtitle']; ?></span>
		<p hidden class="para">
			<?php echo $feed[10]['desc']; ?>
		</p>
	</div>
	<div hidden class="grid_4">
		<a href="#"class="name" id="osoba"><img id="osoba12" src="./img/selected_person.png" alt="">
		<?php echo $feed[11]['name']; ?><br/></a>
		<span class="job"><?php echo $feed[11]['jtitle']; ?></span>
		<p hidden class="para">
			<?php echo $feed[11]['desc']; ?>
		</p>
	</div><br class="clear" />

</div>
<br class="clear" />



 <script>
 $(document).ready(function() {
    $("div.grid_4 a").on("click", function(e) {

        select = document.getElementById('osoba');
    	var jobtitle = $(this).parent().children(' span').html();
        var paragraph = $(this).parent().children(' p.para').html();
   	    var ime = $(this).text();
  
        $("#holder").remove();
        $("#paramore").remove();

        // BugFix za Firefox. IE i Chrome definiraju e globalno, Firefox ne.
        if (!e) {
            var target = $(event.target);
        }
/* ============================================================================
 nakon klika na sliku ili link, svi svi ostali članovi tima postanu prozirniji
============================================================================ */
        for (i = 0; i < ($("#osoba img").length); i++) {
            $("#osoba img").css('opacity', '0.5');
            if (target) {
                target.css('opacity', '1');
            }
        }

        $("#holder").empty()
        $("#paramore").empty()
        var div = $('<div class="created" id="created"></div>').text(" ");
        var button = $('<button id="button" type="button">Close</button>');
        var mora = $(this).parent().parent().attr("id");
        var rr = ('div.' + mora);

        jQuery('<div/>', {
            id: 'holder',
        }).appendTo(rr);

        jQuery('<div/>', {
            id: 'paramore',
            // "class": 'clear',
        }).appendTo(rr);

        $("#holder").append([div, '<br/>', ime, '<br/>', jobtitle, '<br>']);
        $("#paramore").append([paragraph, button]);

        $("#paramore")
            .animate({
                opacity: 1
            }, 150)

        .hide()
            .fadeIn(600);

        $("#holder")
            .animate({
                opacity: 1
            }, 150)

        .hide()
            .fadeIn(600);

       $('div.created').css("border-top", "#05345f solid 1px ");

        $("#button").on("click", function() {
            // Ne treba jer se remove() funkcija primjenjuje
            // $("#holder")fadeOut("slow"); 
            // $("#paramore")fadeOut("slow");
            $("#holder").remove();
            $("#paramore").remove();
            $("#osoba img").css('opacity', '1');
        });
        $("#foo").trigger("click");
        // e.preventDefault();
        return false;
    });
});
</script>

<div class="country_help">
<p>How can we help you? Please select an office to find 
    the appropriate phone number: <!--<select id="sel"></select>  -->

<select id="sel" class="selector" ></select>

    Or alternatively:  <button class="btn">EMAIL US</button>
</p>
</div> <br class="clear" />

<p class="territory"><span>ASIA NORTH AMERICA EUROPE<span></p>

<footer>
<ul>
<br class="clear" />
	<li class="mak"><a href="#">TERMS &amp; CONDITIONS </a></li>
	<li class="maki"><a href="#">PRIVACY POLICY</a></li>
	<li class="maki"><a href="#">COOKIE POLICY</a></li>
	<li class="maki"><a href="#">CAREERS</a></li>
	<li><span class="connect">CONNECT WITH US:
		<a href="#" title="Linkedin">
			<img class="linkedin" src="img/linkedin.png" alt="LinkedIn">  
				LINKEDIN
		</a>
		</span>
	</li>
</ul>
	
</footer>
</div><!-- /container -->
		<script src="./js/glavni.js"></script>
</body>
</html>
