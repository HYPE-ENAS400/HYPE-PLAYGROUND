<html>
<head>
<meta charset="UTF-8">
<title>Hyperion</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="styles/main.css" rel="stylesheet" type="text/css" media="all">
<link href="styles/ads.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">#osfooter{display:block;position:fixed;bottom:0;left:0;width:100%;height:300px;margin-bottom:-300px;overflow:hidden;background-color:transparent;z-index:5000;text-indent:-5000px;}#osfooter div{margin-bottom:-1000px;}#osfooter a{display:block;text-indent:-5000px;}</style>
<!--[if lte IE 6]><style type="text/css">#osfooter{position:absolute; display:none;}</style><![endif]-->
<script src="scripts/jquery-latest.min.js"></script>
<script src="scripts/jquery-ui.min.js"></script>
<script src="scripts/ost-custom.js"></script>
<script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>

</head>
<body id="akq">


<script type="text/javascript">
$(document).ready(function() {
	var viewWithHype = <?php echo $_POST['viewWithHype'] ?>;
	if (viewWithHype) {
		var ref = new Firebase("https://enas400hype.firebaseio.com/users/4de94929-914c-4022-947b-e3b165e69865");
		
		ref.on("value", function(snapshot) {
		  var data = snapshot.val();
		  console.log("Points: " + data.contentCount);
		  
		  if (data.contentCount > 500) {
			var ads = document.getElementsByClassName("advertisement");
			for (var i = 0; i < ads.length; i++) {
	            ads[i].style.display = "none";
	        }
		  } 
		  else {
			var ads = document.getElementsByClassName("advertisement");
			for (var i = 0; i < ads.length; i++) {
	            ads[i].style.display = "inline-block";
	        }
	        console.log("Send notification");
	        sendNotification();
	        	
		  }
		}, function (errorObject) {
		  console.log("The read failed: " + errorObject.code);
		});
	} 
	else {
		var ads = document.getElementsByClassName("advertisement");
		for (var i = 0; i < ads.length; i++) {
	        ads[i].style.display = "inline-block";
	    }
	}
});

function sendNotification() {
   $.ajax({
      url:'sendNotification.php',
      complete: function () {
          console.log("it worked")
      },
      error: function () {
          console.log("nope")
      }
  });
}

</script>
<div class="aga ajv">
<div id="ahj" class="aiy">
<div class="afu ail">
<ul class="adc">
<li><a href="#">Home</a></li>
<li><a href="#">Contact Us</a></li>
<li><a href="#">Column Index</a></li>
<li><a href="#">Register</a></li>
<li><a href="#">Login</a></li>
</ul>
</div>
<div class="afv">
<ul class="ahn">
<li><a class="aba" title="Facebook" href="#"><span class="fa fa-facebook"><em>Facebook</em></span></a></li>
<li><a class="aat" title="Pinterest" href="#"><span class="fa fa-pinterest"><em>Pinterest</em></span></a></li>
<li><a class="abm" title="Twitter" href="#"><span class="fa fa-twitter"><em>Twitter</em></span></a></li>
<li><a class="abn" title="Dribble" href="#"><span class="fa fa-dribbble"><em>Dribble</em></span></a></li>
<li><a class="abb" title="LinkedIn" href="#"><span class="fa fa-linkedin"><em>LinkedIn</em></span></a></li>
<li><a class="aai" title="Google+" href="#"><span class="fa fa-google-plus"><em>Google+</em></span></a></li>
<li><a class="acf" title="Skype" href="#"><span class="fa fa-skype"><em>Skype</em></span></a></li>
</ul>
</div>
</div>
</div>
<div class="aga akk">
<header role="banner" id="ahi">
<img src="images/live-demo/hyperion.png">
<img src="images/live-demo/ads/1.jpg" class="advertisement">
</header>
</div>
<div class="aga aki">
<nav role="navigation" id="aho" class="aiy">
<ul class="aiy">
<li class="ahe"><a href="http://www.os-templates.com/premium-website-templates" title="Home">Home</a></li>
<li><a class="ajm" href="#" title="Pages">Pages</a>
<ul class="afc">
<li><a href="pages/about-us.php" title="About Us">About Us</a></li>
<li><a href="pages/contact.php" title="Contact">Contact</a></li>
<li><a href="pages/publishing-team.php" title="Publishing Team">Publishing Team</a></li>
<li><a href="pages/faq.php" title="FAQ">FAQ</a></li>
<li><a href="pages/archives.php" title="Archives">Archives</a></li>
<li><a href="pages/404.php" title="404">404</a></li>
<li><a href="pages/html-sitemap.php" title="HTML Sitemap">HTML Sitemap</a></li>
<li><a href="pages/category-overview.php" title="Category Overview">Category Overview</a></li>
<li><a class="ajm" href="#" title="Reviews">Reviews</a>
<ul class="afc">
<li><a href="pages/reviews/review-percent-bar.php" title="Review - Percent Bar">Review - Percent Bar</a></li>
<li><a href="pages/reviews/review-star-rating.php" title="Review - Star Rating">Review - Star Rating</a></li>
</ul>
</li>
<li><a href="pages/sidebar-left.php" title="Sidebar Left">Sidebar Left</a></li>
<li><a href="pages/sidebar-right.php" title="Sidebar Right">Sidebar Right</a></li>
<li><a href="pages/sidebar-left-and-right.php" title="Sidebar Left &amp; Right">Sidebar Left &amp; Right</a></li>
<li><a href="pages/full-width-content.php" title="Full Width Content">Full Width Content</a></li>
</ul>
</li>
<li><a class="ajm" href="#" title="Elements">Elements</a>
<ul class="afc">
<li><a href="elements/buttons.php" title="Buttons">Buttons</a></li>
<li><a href="elements/alert-messages.php" title="Alert Messages">Alert Messages</a></li>
<li><a href="elements/font-icons.php" title="Font Icons">Font Icons</a></li>
<li><a href="elements/social-icons.php" title="Social Icons">Social Icons</a></li>
<li><a href="elements/call-to-action.php" title="Call To Action">Call To Action</a></li>
<li><a href="elements/columns.php" title="Columns">Columns</a></li>
<li><a href="elements/columns-no-gutter.php" title="Columns - No Gutter">Columns - No Gutter</a></li>
<li><a href="elements/lists.php" title="Lists">Lists</a></li>
<li><a href="elements/accordions-toggle-tabs.php" title="Accordions, Toggles &amp; Tabs">Accordions, Toggles &amp; Tabs</a></li>
<li><a href="elements/pricing-tables.php" title="Pricing Tables">Pricing Tables</a></li>
<li><a href="elements/misc-typography.php" title="Misc. Typography">Misc. Typography</a></li>
<li><a href="elements/slider-and-lightbox.php" title="Slider + Lightbox">Slider + Lightbox</a></li>
<li><a href="elements/media.php" title="Media">Media</a></li>
<li><a href="elements/tables.php" title="Tables">Tables</a></li>
</ul>
</li>
<li><a class="ajm" href="#" title="Blog Layouts">Blog</a>
<ul class="afc">
<li><a class="ajm" href="#" title="Blog Overview">Blog Overview</a>
<ul class="afc">
<li><a href="blog-layouts/blog-overview/full-width.php" title="Full Width">Full Width</a></li>
<li><a href="blog-layouts/blog-overview/sidebar-left.php" title="Sidebar Left">Sidebar Left</a></li>
<li><a href="blog-layouts/blog-overview/sidebar-right.php" title="Sidebar Right">Sidebar Right</a></li>
<li><a href="blog-layouts/blog-overview/2-col-grid.php" title="2 Col. Grid">2 Col. Grid</a></li>
<li><a href="blog-layouts/blog-overview/2-col-grid-sidebar-left.php" title="2 Col. Grid + Sidebar Left">2 Col. Grid + Sidebar Left</a></li>
<li><a href="blog-layouts/blog-overview/2-col-grid-sidebar-right.php" title="2 Col. Grid + Sidebar Right">2 Col. Grid + Sidebar Right</a></li>
</ul>
</li>
<li><a class="ajm" href="#" title="Blog Post">Blog Post</a>
<ul class="afc">
<li><a href="blog-layouts/blog-post/full-width.php" title="Full Width">Full Width</a></li>
<li><a href="blog-layouts/blog-post/sidebar-left.php" title="Sidebar Left">Sidebar Left</a></li>
<li><a href="blog-layouts/blog-post/sidebar-right.php" title="Sidebar Right">Sidebar Right</a></li>
</ul>
</li>
</ul>
</li>
<li><a class="ajm" href="#" title="Portfolio Layouts">Portfolio</a>
<ul class="afc">
<li><a class="ajm" href="#" title="Portfolio Overview">Portfolio Overview</a>
<ul class="afc">
<li><a href="portfolio-layouts/portfolio-overview/full-width.php" title="Full Width">Full Width</a></li>
<li><a href="portfolio-layouts/portfolio-overview/sidebar-left.php" title="Sidebar Left">Sidebar Left</a></li>
<li><a href="portfolio-layouts/portfolio-overview/sidebar-right.php" title="Sidebar Right">Sidebar Right</a></li>
<li><a href="portfolio-layouts/portfolio-overview/2-col-grid.php" title="2 Col. Grid">2 Col. Grid</a></li>
<li><a href="portfolio-layouts/portfolio-overview/2-col-grid-sidebar-left.php" title="2 Col. Grid + Sidebar Left">2 Col. Grid + Sidebar Left</a></li>
<li><a href="portfolio-layouts/portfolio-overview/2-col-grid-sidebar-right.php" title="2 Col. Grid + Sidebar Right">2 Col. Grid + Sidebar Right</a></li>
</ul>
</li>
<li><a class="ajm" href="#" title="Portfolio Post">Portfolio Post</a>
<ul class="afc">
<li><a href="portfolio-layouts/portfolio-post/full-width.php" title="Full Width">Full Width</a></li>
<li><a href="portfolio-layouts/portfolio-post/sidebar-left.php" title="Sidebar Left">Sidebar Left</a></li>
<li><a href="portfolio-layouts/portfolio-post/sidebar-right.php" title="Sidebar Right">Sidebar Right</a></li>
</ul>
</li>
</ul>
</li>
<li><a class="ajm" href="#" title="Gallery Layouts">Gallery</a>
<ul class="afc">
<li><a href="gallery-layouts/full-width.php" title="Full Width">Full Width</a></li>
<li><a href="gallery-layouts/2-col-grid.php" title="2 Col. Grid">2 Col. Grid</a></li>
<li><a href="gallery-layouts/3-col-grid.php" title="3 Col. Grid">3 Col. Grid</a></li>
<li><a href="gallery-layouts/4-col-grid.php" title="4 Col. Grid">4 Col. Grid</a></li>
<li><a href="gallery-layouts/5-col-grid.php" title="5 Col. Grid">5 Col. Grid</a></li>
</ul>
</li>
</ul>
</nav>
</div>
<div class="aga ajt">
<div id="aiw">
<div class="adi aiy">
<div class="afs ail">
<article class="ahf afo">
<div><img src="images/live-demo/homepage/1.jpg" alt="Template Demo Image"></div>
<div class="ain">
<h2 class="agf aid">Curabitur Eget Elit Sit Amet</h2>
<p class="agf aht">Lorem ipsum dolor sit amet, consectetur adipiscing elit maecenas libero nunc, volutpat eu erat sed, blandit elementum mi&hellip;</p>
<ul class="agf ahu aid acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
<footer><a href="#" class="aij ahw aei ads">Read more here</a></footer>
</div>
</article>
</div>
<div class="afs">
<article class="agf aiy aii ahf afo">
<div class="afs afg ail"><img src="images/live-demo/homepage/2.jpg" alt="Template Demo Image"></div>
<div class="afs afg">
<div class="ain">
<h3 class="agf aid">Curabitur Eget Elit</h3>
<p class="agf aht">Lorem ipsum dolor sit amet, consectetur adipiscing elit maecenas libero nunc, volutpat eu erat sed&hellip;</p>
<ul class="agf ahu aid acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
<footer><a href="#" class="aij ahw aei ads">Read more here</a></footer>
</div>
</div>
</article>
<article class="agf aiy ahf afo">
<div class="afs afg ail"><img src="images/live-demo/homepage/3.jpg" alt="Template Demo Image"></div>
<div class="afs afg">
<div class="ain">
<h3 class="agf aid">Curabitur Eget Elit</h3>
<p class="agf aht">Lorem ipsum dolor sit amet, consectetur adipiscing elit maecenas libero nunc, volutpat eu erat sed&hellip;</p>
<ul class="agf ahu aid acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
<footer><a href="#" class="aij ahw aei ads">Read more here</a></footer>
</div>
</div>
</article>
</div>
</div>
</div>
</div>
<div class="aga aju">
<main role="main" class="aeh">
<div class="aiy">
<section class="afu ail">
<h6 class="afm">Aenean semper elementum</h6>
<div class="aiy ade">
<div class="afs ail"><img src="images/live-demo/homepage/4.jpg" alt="Template Demo Image"></div>
<article class="afs">
<h2 class="agf aid">Curabitur Eget Elit Sit Amet</h2>
<p class="agf aht">Lorem ipsum dolor sit amet, consectetur adipiscing elit maecenas libero nunc, volutpat eu erat sed, blandit elementum quisque vehicula, urna sit amet pulvinar dapibus, dui leo egestas augue, eget molestie&hellip;</p>
<ul class="agf ahu aid acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
<footer><a href="#" class="aij ahw aei ads">Read more here</a></footer>
</article>
</div>
<ul class="agf">
<li class="afs ail">
<div class="aiy ade">
<div class="afv ail"><img src="images/live-demo/homepage/5.jpg" alt="Template Demo Image"></div>
<div class="afu">
<p class="agf aht akp"><a href="#">Aliquatjusto quisque nam consequat doloreet vest orna partur.</a></p>
<ul class="agf ahu acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
</div>
</div>
</li>
<li class="afs">
<div class="aiy ade">
<div class="afv ail"><img src="images/live-demo/homepage/6.jpg" alt="Template Demo Image"></div>
<div class="afu">
<p class="agf aht akp"><a href="#">Aliquatjusto quisque nam consequat doloreet vest orna partur.</a></p>
<ul class="agf ahu acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
</div>
</div>
</li>
<li class="afs ail">
<div class="aiy ade">
<div class="afv ail"><img src="images/live-demo/homepage/7.jpg" alt="Template Demo Image"></div>
<div class="afu">
<p class="agf aht akp"><a href="#">Aliquatjusto quisque nam consequat doloreet vest orna partur.</a></p>
<ul class="agf ahu acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
</div>
</div>
</li>
<li class="afs">
<div class="aiy ade">
<div class="afv ail"><img src="images/live-demo/homepage/8.jpg" alt="Template Demo Image"></div>
<div class="afu">
<p class="agf aht akp"><a href="#">Aliquatjusto quisque nam consequat doloreet vest orna partur.</a></p>
<ul class="agf ahu acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
</div>
</div>
</li>
</ul>
</section>
<section class="afv">
<h6 class="afm">Aenean semper elementum</h6>
<ul class="agf">
<li>
<div class="aiy ade">
<div class="afv ail"><img src="images/live-demo/homepage/9.jpg" alt="Template Demo Image"></div>
<div class="afu">
<p class="agf aht akp"><a href="#">Aliquatjusto quisque nam consequat doloreet vest orna partur.</a></p>
<ul class="agf ahu acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
</div>
</div>
</li>
<li>
<div class="aiy ade">
<div class="afv ail"><img src="images/live-demo/homepage/10.jpg" alt="Template Demo Image"></div>
<div class="afu">
<p class="agf aht akp"><a href="#">Aliquatjusto quisque nam consequat doloreet vest orna partur.</a></p>
<ul class="agf ahu acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
</div>
</div>
</li>
<li>
<div class="aiy ade">
<div class="afv ail"><img src="images/live-demo/homepage/11.jpg" alt="Template Demo Image"></div>
<div class="afu">
<p class="agf aht akp"><a href="#">Aliquatjusto quisque nam consequat doloreet vest orna partur.</a></p>
<ul class="agf ahu acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
</div>
</div>
</li>
<li>
<div class="aiy ade">
<div class="afv ail"><img src="images/live-demo/homepage/12.jpg" alt="Template Demo Image"></div>
<div class="afu">
<p class="agf aht akp"><a href="#">Aliquatjusto quisque nam consequat doloreet vest orna partur.</a></p>
<ul class="agf ahu acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
</div>
</div>
</li>
</ul>
</section>
</div>
<div class="acs aiy ahh">
<ul class="afw aiy">
<li><a href="#tab-1">Aenean</a></li>
<li><a href="#tab-2">Semper</a></li>
<li><a href="#tab-3">Elementum</a></li>
</ul>
<div class="acb">
<div id="tab-1" class="acy aiy">
<ul class="agf">
<li class="afv ail">
<div class="ael aig"><img src="images/live-demo/gallery/1.jpg" alt="Template Demo Image"></div>
<article>
<h3 class="agf aid">Curabitur Eget Elit Sit Amet</h3>
<p class="agf aht">Lorem ipsum dolor sit amet, consectetur adipiscing elit maecenas libero nunc, volutpat eu erat sed, blandit elementum quisque vehicula, urna sit amet pulvinar dapibus, dui leo egestas augue, eget molestie&hellip;</p>
<ul class="agf ahu aid acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
<footer><a href="#" class="aij ahw aei ads">Read more here</a></footer>
</article>
</li>
<li class="afv">
<div class="ael aig"><img src="images/live-demo/gallery/2.jpg" alt="Template Demo Image"></div>
<article>
<h3 class="agf aid">Curabitur Eget Elit Sit Amet</h3>
<p class="agf aht">Lorem ipsum dolor sit amet, consectetur adipiscing elit maecenas libero nunc, volutpat eu erat sed, blandit elementum quisque vehicula, urna sit amet pulvinar dapibus, dui leo egestas augue, eget molestie&hellip;</p>
<ul class="agf ahu aid acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
<footer><a href="#" class="aij ahw aei ads">Read more here</a></footer>
</article>
</li>
<li class="afv">
<div class="ael aig"><img src="images/live-demo/gallery/3.jpg" alt="Template Demo Image"></div>
<article>
<h3 class="agf aid">Curabitur Eget Elit Sit Amet</h3>
<p class="agf aht">Lorem ipsum dolor sit amet, consectetur adipiscing elit maecenas libero nunc, volutpat eu erat sed, blandit elementum quisque vehicula, urna sit amet pulvinar dapibus, dui leo egestas augue, eget molestie&hellip;</p>
<ul class="agf ahu aid acv">
<li style="margin-right:15px;"><span class="fa fa-calendar"></span>
<time datetime="2045-04-06T08:15+00:00">6<sup>th</sup> April 2045</time>
</li>
<li><span class="fa fa-comments"></span> <a href="#">26 Comments</a></li>
</ul>
<footer><a href="#" class="aij ahw aei ads">Read more here</a></footer>
</article>
</li>
</ul>
</div>
<div id="tab-2" class="acy aiy">
<p>Block 2 Content</p>
</div>
<div id="tab-3" class="acy aiy">
<p>Block 3 Content</p>
</div>
</div>
</div>
<div class="aiy">
<h6 class="afm">Aenean semper elementum</h6>
<div class="flex-container">
<div class="flexslider aev acm">
<ul class="flex-slides">
<li><a href="#"><img src="images/live-demo/gallery/6.jpg" alt="Template Demo Image"><br>
Lorem ipsum dolor sit amet, consectetur adipiscing&hellip;</a></li>
<li><a href="#"><img src="images/live-demo/gallery/5.jpg" alt="Template Demo Image"><br>
Lorem ipsum dolor sit amet, consectetur adipiscing&hellip;</a></li>
<li><a href="#"><img src="images/live-demo/gallery/4.jpg" alt="Template Demo Image"><br>
Lorem ipsum dolor sit amet, consectetur adipiscing&hellip;</a></li>
<li><a href="#"><img src="images/live-demo/gallery/3.jpg" alt="Template Demo Image"><br>
Lorem ipsum dolor sit amet, consectetur adipiscing&hellip;</a></li>
<li><a href="#"><img src="images/live-demo/gallery/2.jpg" alt="Template Demo Image"><br>
Lorem ipsum dolor sit amet, consectetur adipiscing&hellip;</a></li>
<li><a href="#"><img src="images/live-demo/gallery/1.jpg" alt="Template Demo Image"><br>
Lorem ipsum dolor sit amet, consectetur adipiscing&hellip;</a></li>
</ul>
</div>
</div>
</div>
<div class="aiy"></div>
</main>
</div>
<div class="aga ajr">
<footer role="contentinfo" id="afa" class="aiy">
<div class="adi aiy">
<div class="afv ail">
<h3 class="agf aig akp">Global Magazine</h3>
<p>Donec facilisis volutpat ligula nec egestas. Aliquam malesuada, lectus sed vestibulum sollicitudin, mi urna consequat velit, id ullamcorper risus lacus ut ante. Donec sed ultrices eros.</p>
<p>Nulla facilisi. Aliquam purus urna, porta non faucibus nec, luctus vitae ante.</p>
</div>
<div class="afv">
<h3 class="agf aig akp">Amet Pulvinar Dapibus</h3>
<address class="aix aig">
Street Name &amp; Number<br>
Town<br>
Postcode/Zip
</address>
<ul class="agf">
<li><span class="fa fa-phone"></span> 1001000 1101001</li>
<li><span class="fa fa-envelope"></span> info@youdomain.com</li>
</ul>
</div>
<div class="afv">
<h3 class="agf aig akp">Molestie Augue Diam</h3>
<p>Grab our newsletter by typing your email address in the box below:</p>
<form action="#" method="post">
<input class="aif" type="text" value="">
<input type="submit" value="Subscribe">
</form>
</div>
</div>
<nav id="aed" class="aiy">
<div class="ahc ail">
<h6>Aenean Semper</h6>
<ul>
<li><a href="#">&raquo; Lorem ipsum dolor</a></li>
<li><a href="#">&raquo; Nunc pulvinar turpis</a></li>
<li><a href="#">&raquo; Sed consectetur enim</a></li>
<li><a href="#">&raquo; Proin et magna eget</a></li>
<li><a href="#">&raquo; Maecenas pretium</a></li>
<li><a href="#">&raquo; Fusce pretium tortor</a></li>
<li><a href="#">&raquo; Pellentesque tristique</a></li>
<li><a href="#">&raquo; Maecenas laoreet mauris</a></li>
</ul>
</div>
<div class="ahc">
<h6>Aenean Semper</h6>
<ul>
<li><a href="#">&raquo; Vivamus semper lorem</a></li>
<li><a href="#">&raquo; Morbi facilisis dui</a></li>
<li><a href="#">&raquo; Maecenas eu massa</a></li>
<li><a href="#">&raquo; Praesent iaculis</a></li>
<li><a href="#">&raquo; Praesent molestie</a></li>
<li><a href="#">&raquo; Nullam egestas nibh</a></li>
<li><a href="#">&raquo; Vestibulum in elit</a></li>
<li><a href="#">&raquo; Aliquam nec diam in</a></li>
</ul>
</div>
<div class="ahc">
<h6>Aenean Semper</h6>
<ul>
<li><a href="#">&raquo; Vivamus non leo</a></li>
<li><a href="#">&raquo; Morbi adipiscing nisi</a></li>
<li><a href="#">&raquo; Aliquam viverra orci</a></li>
<li><a href="#">&raquo; Suspendisse consequat</a></li>
<li><a href="#">&raquo; Nullam id est condim</a></li>
<li><a href="#">&raquo; Praesent eget purus ut</a></li>
<li><a href="#">&raquo; Ut quis augue quis neque</a></li>
<li><a href="#">&raquo; Quisque varius erat sed</a></li>
</ul>
</div>
<div class="ahc">
<h6>Aenean Semper</h6>
<ul>
<li><a href="#">&raquo; Nullam id est condimen</a></li>
<li><a href="#">&raquo; Praesent eget purus ut</a></li>
<li><a href="#">&raquo; Ut quis augue quis neque</a></li>
<li><a href="#">&raquo; Quisque varius erat sed</a></li>
<li><a href="#">&raquo; Fusce quis dolor et</a></li>
<li><a href="#">&raquo; Nullam eget tortor</a></li>
<li><a href="#">&raquo; Nunc ultrices purus</a></li>
<li><a href="#">&raquo; Vestibulum condimentum</a></li>
</ul>
</div>
<div class="ahc">
<h6>Aenean Semper</h6>
<ul>
<li><a href="#">&raquo; Vivamus semper lorem</a></li>
<li><a href="#">&raquo; Morbi facilisis dui</a></li>
<li><a href="#">&raquo; Maecenas eu massa</a></li>
<li><a href="#">&raquo; Praesent iaculis</a></li>
<li><a href="#">&raquo; Praesent molestie</a></li>
<li><a href="#">&raquo; Sed consectetur enim</a></li>
<li><a href="#">&raquo; Proin et magna eget</a></li>
<li><a href="#">&raquo; Maecenas pretium</a></li>
</ul>
</div>
</nav>
</footer>
</div>
<div class="aga ajs">
<div id="aee" class="aiy">
<div class="agi">Copyright &copy; 2009 - 2016 <a href="http://www.os-templates.com/premium-website-templates">Global Magazine</a>. All Rights Reserved</div>
<div class="aex">
<ul class="agf ahu">
<li><a href="#">Link 1</a> / </li>
<li><a href="#">Link 2</a> / </li>
<li><a href="#">Link 3</a> / </li>
<li><a href="#">Link 4</a> / </li>
<li><a href="#">Link 5</a></li>
</ul>
</div>
</div>
</div>
<a href="#akq" id="acz" title="Back To Top"><span class="fa fa-arrow-up fa-2x"></span></a>
<div id="osfooter">
<div>
<div id="bsap_1244497" class="bsarocks bsap_2cdb89802e2deca5991138bb3e47b146"></div>
</div>
</div>
<script type="text/javascript">(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','UA-23865188-1','auto');ga('send','pageview');</script>
</body>
</html>