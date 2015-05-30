<div class="footer-wrap fullwidth">
	<footer class="row">
		<div class="columns medium-4">
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

		<div class="columns medium-4">
			<h4>Share Us</h4>
<a href="#" class="button" data-reveal-id="sharing">Like Us</a>
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

<script src="js/minified.min.js"></script>
<script>

function loadStyleSheet(src){
    if (document.createStyleSheet){
        document.createStyleSheet(src);
    }
    else {
        $("head").append($("<link rel='stylesheet' href='"+src+"' type='text/css' />"));
    }
}

$(document).ready(function(){
  $('.promotion').slick({});

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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="sharing" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Go Ahead, Give us a like!</h2>
  <p class="lead">Share your ice cream and snow cone experience with your friends.</p>
  <ul>
<li><div class="fb-like" data-href="http://www.snoejoes.com" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
<li><!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-href="http://www.snoejoes.com"></div></li>

<li><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.snoejoes.com" data-text="The best snow cones in louisville!" data-via="snoejoes" data-related="snoejoes" data-hashtags="snowconeslouisville">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
</ul>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
