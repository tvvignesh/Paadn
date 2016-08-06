<?php require("header.php");?>
 <link rel="stylesheet" href="slides/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slides/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slides/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slides/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slides/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slides/style.css" type="text/css" media="screen" />
<div id="maincont">
	<div id="wrapper">
        <a href="http://dev7studios.com" id="dev7link" title="Go to dev7studios">dev7studios</a>

        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="slides/images/toystory.jpg" data-thumb="slides/images/toystory.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="slides/images/up.jpg" data-thumb="slides/images/up.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="slides/images/walle.jpg" data-thumb="slides/images/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="slides/images/nemo.jpg" data-thumb="slides/images/nemo.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>

    </div>
	<div id="enclosecont" style="position:relative;top:-50px;">
		<div id="leftinside">
			<div class="mainhead">MISSION</div>
			<div class="subcont">
				"PAADN INTERNATIONAL SCHOOL will provide its students with a world class education by nurturing self – confidence, self discipline, Critical thinking and creativity which will encourage in them an enduring love of knowledge and the passion and sense of improvement as well as responsibility to make a positive difference in the lives of others through their own actions and example."
			</div>
			
			<div class="mainhead">GOAL (STRIVE TO SURPASS)</div>
			<div class="subcont">
				PAADN International school strives to surpass through its two-fold purpose of achieving academic and moral excellence. Education is basically to prepare a human being to be good and become good citizen of the world . There is a linkage between true education and sustainable development , which is a millennium development goal to save the planet , when words and action are not directed by a moral force , scientific knowledge and technological know how lead to misery as they do to prosperity and happiness.
			</div>
			
			<div class="mainhead">EXPERENTIAL LEARNING</div>
			<div class="subcont">
				To provide ample opportunities for learning, students of all classes are taken to nearby places and also to places outside the Districts/State for Educational Trips and Excursion Programmes.
			</div>
		</div>
		<div id="rightinside">
		
			<div class="mainhead">HIGHLIGHTS OF SCHOOL</div>
			<div class="subcont">
				At present now we are going to start our Primary wing at Chira Chas with beautiful well equipped campus of 4.5 Acres. As soon as our new building will take shape at Telmaccho it is going to be one of the best day boarding school in the country with 32 Acres Land with all modern facilities like full length Cricket ground full lengths Football Ground, skating arena, synthetic basket ball court, swimming pool, Horse Riding, Indoor Multipurpose Hall, World Class Computer Lab, Air conditioned E – Library, A.C. Classrooms, Conference Room, Sick Room, Audio – Visual Room, Language Lab, Maths Lab, Science Lab, Gymnasium, A.C. Hostel for Girls and Boys separately with the capacity of 500 Students in each Hostel with balanced Hygienic food.
			</div>
			
			<div class="mainhead">SICK ROOM OR MEDICAL CENTRE</div>
			<div class="subcont">
				The Medical Center provides a fully equipped 24/7 service for all students and faculty. Two Well qualified nurses are present on campus along with the School Doctor either in attendance or on call.
			</div>
		</div>
		<div style="clear:both;"> </div>
	</div>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="slides/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<?php require("footer.php");?>