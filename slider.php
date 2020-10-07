<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/sl1.png" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="category.php">SHKO NE NJE UDHETIM KETE FUNDJAVE</a></h2>
							<lable></lable>
							<h1><a href="category.php">Kisha e Thethit</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/sl2.png" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="category.php">NE THELLESI TE ALPEVE</a></h2>
							<lable></lable>
							<h1><a href="category.php">Valbone</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/slide.png" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="category.php">AVENTURE</a></h2>
							<lable></lable>
							<h1><a href="category.php">Shikoje! Ndjeje! Duaje!</a></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/beach4.png" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h1><a href="category.php">Destinacioni</a></h1>
							<lable></lable>
							<h2><a href="category.php">I ENDRRAVE TUA</a></h2>
							</div>
			          </div>
			        </li>
                    <li>
			          <img src="images/sl4.png" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="category.php">NDJEHU I SIGURTE</a></h2>
							<lable></lable>
							<h1><a href="category.php">Gjate Pushimeve Tuaja</a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->	
</body>
</html>