<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>

<!-- Navbar ================================================== -->
<!--thanh menu -->
<div id="logoArea" class="navbar">
	<?php 
	include "subview/menu.php";
	?>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="#"><img style="width:100%; height: 100%" src="themes/images/carousel/1.jpg" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="#"><img style="width:100%; height: 100%" src="themes/images/carousel/2.jpg" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>

		  

		  
		   
		   
		  
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<!-- sản phẩm nằm bên trái-->
	<div id="sidebar" class="span3">
		<?php
		include "subview/left.php";
		?>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Products Compairsition</li>
    </ul>
	<h3> Products Compairsition <small class="pull-right"> 2 products are compaired </small></h3>	
	<hr class="soft"/>

	<table id="compairTbl" class="table table-bordered">
              <thead>
                <tr>
                  <th>Features</th>
                  <th>Product1 name here </th>
                  <th>Product2 name here</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>&nbsp;</td>
                  <td style="text-align:center">
					<p class="justify">
						Nowadays the lingerie industry is one of the most successful business spheres.
						We always stay in touch with the latest fashion tendencies - that is why our 
						goods are so popular and we have a great number of faithful customers all over the country.
					</p>
				<img src="themes/images/products/1.jpg" alt=""/>
				<form class="form-horizontal qtyFrm">
				<h3> $222.00</h3><br/>
				 <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				 <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				</form>
				</td>
                  <td>
				  <p class="justify">
					Nowadays the lingerie industry is one of the most successful business spheres.
					We always stay in touch with the latest fashion tendencies - that is why our 
					goods are so popular and we have a great number of faithful customers all over the country.
				</p>
				<img src="themes/images/products/3.jpg" alt=""/>
				
				<form class="form-horizontal qtyFrm">
				<h3> $190.00</h3>
				<br/>
				 <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				 <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				</form>
				  </td>
                </tr>
                <tr>
                  <td>Height</td>
                  <td>2"</td>
                  <td>2"</td>
                </tr>
                <tr>
                  <td>Deepth</td>
                  <td>5"</td>
                  <td>5"</td>
                </tr>
				<tr>
                  <td>Dimension</td>
                  <td>--</td>
                  <td>--</td>
                </tr>
				<tr>
                  <td>Width</td>
                  <td>6.5"</td>
                  <td>6.5"</td>
                </tr>
				<tr>
                  <td>Weight</td>
                  <td>0.5kg</td>
                  <td>0.5kg</td>
                </tr>
              </tbody>
            </table>		
	<a href="products.html" class="btn btn-large pull-right">Back Products Page</a>
	
	
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<?php include "subview/footer.php";?>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	

<span id="themesBtn"></span>
</body>
</html>