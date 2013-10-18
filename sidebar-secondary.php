<?php
/**
 * The right, additional Sidebar containing the secondary widget areas.
 */
?>

<div id="sidebar-secondary">
<h3>About</h3>
<p>Walmik is a frontend developer / UX designer. <a href="http://walmik.info">View</a> profile.</p>
<?php
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

			<ul class="sidebar">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>

<!--begin follow me button-->
<a href="https://twitter.com/_walmik" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @_walmik</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!--end of follow me button-->

<!--<p><a href="http://trackosaur.com"><img src="http://walmik.info/are-you-productive.png"></a></p>-->
<?php endif; ?>

</div>
<!--end Sidebar Secondary-->
