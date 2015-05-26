<div class="footer-wrap fullwidth">
	<footer class="row">
		<div class="columns large-4">
			<h4>Information</h4>
			<h5>Address:</h5>

<div itemscope itemtype="http://schema.org/LocalBusiness">
<a itemprop="url" href="http://www.snoejoes.com"><div itemprop="name"><strong>Sno-E Joe's</strong></div>
</a>
<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
<span itemprop="streetAddress">5215 New Cut Rd</span><br>
<span itemprop="addressLocality">Louisville</span><br>
<span itemprop="addressRegion">KY</span><br>
<span itemprop="postalCode">40214</span><br>
<span itemprop="addressCountry">United States</span><br>
</div>
</div>
			<h5>Hours:</h5>
			<ul>
				<li>Mon - Thu: 1:00 pm - 7:00 pm</li>
				<li>Fri - Sat: 1:00 pm - 9:00 pm</li>
				<li>Sun: 1:00 pm - 8:00 pm</li>
			</ul>
		</div>

		<div class="columns large-4">
			<h4>Share Us</h4>
			<ul class="social inline-list">
				<li><a href="https://www.facebook.com/snoejoes"><i class="fi-social-facebook"></i></a></li>
				<li><a href="https://twitter.com/snoejoes"><i class="fi-social-twitter"></i></a></li>
				<li><a href="https://plus.google.com/108416075853917042468"><i class="fi-social-google-plus"></i></a></li>
			</ul>
		</div>
		<?php include('./partials/news.php'); ?>
	</footer>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-17007357-16', 'auto');
  ga('send', 'pageview');
</script>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/modernizr.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
$(document).ready(function(){
  $('.promotion').slick({

  });
  $(document).foundation();
});


wow = new WOW(
	{
		boxClass:     'wow',      // default
		animateClass: 'animated', // default
		offset:       200,          // default
		mobile:       false,       // default
		live:         true        // default
	}
)
wow.init();

</script>
