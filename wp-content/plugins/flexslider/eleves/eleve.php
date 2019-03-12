<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta content="charset=utf-8">
	<title>FlexSlider 2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <!-- Syntax Highlighter -->
  <link href="css/shCore.css" rel="stylesheet" type="text/css" />
  <link href="css/shThemeDefault.css" rel="stylesheet" type="text/css" />
  <!-- Demo CSS -->
	<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>

  <style type="text/css">
    .flex-caption {
      width: 96%;
      padding: 2%;
      left: 0;
      bottom: 0;
      background: rgba(0,0,0,.5);
      color: #fff;
      text-shadow: 0 -1px 0 rgba(0,0,0,.3);
      font-size: 14px;
      line-height: 18px;
    }
    li.css a {
      border-radius: 0;
    }
  </style>

</head>
<body class="loading">

  <div id="container" class="cf">
    <header role="navigation">
      <a class="logo" href="" title="Radio Lycée">
        <img src="images/logo.png" alt="Radio lycée" />
	  </a>
      <h1>Radio Lycée </h1>
      <h2>Apprenez simplement !</h2>
      <!-- <a class="button green" href="https://github.com/woothemes/FlexSlider/zipball/master">Download Flexslider</a>
      <h3 class="nav-header">Other Examples</h3> -->

    </header>

	<div id="main" role="main">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="images/generalite/radio lycee point FR - Ecriture.001.jpeg" />
              <p class="flex-caption">AAAA <a href="test.html"><i class="fas fa-angle-double-down"></i>test</a></p>
  	    		</li>
  	    		<li>
  	    	    <img src="images/generalite/radio lycee point FR - Ecriture.002.jpeg" />
              <p class="flex-caption">02</p>
  	    		</li>
  	    		<li>
  	    	    <img src="images/generalite/radio lycee point FR - Ecriture.003.jpeg" />
              <p class="flex-caption">03</p>
  	    		</li>
  	    		<li>
  	    	    <img src="images/generalite/radio lycee point FR - Ecriture.004.jpeg" />
              <p class="flex-caption">04</p>
            </li>
            <li>
              <img src="images/generalite/radio lycee point FR - Ecriture.004.jpeg" />
              <p class="flex-caption">05</p>
            </li>
          </ul>
        </div>
      </section>

    </div>

  </div>

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="../jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="js/shCore.js"></script>
  <script type="text/javascript" src="js/shBrushXml.js"></script>
  <script type="text/javascript" src="js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>
  <script defer src="js/demo.js"></script>

</body>
</html>