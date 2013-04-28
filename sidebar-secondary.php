<?php
/**
 * The right, additional Sidebar containing the secondary widget areas.
 */
?>

<div id="sidebar-secondary">
<h3>About</h3>
<p>Walmik is a frontend developer / UX designer. <a href="http://walmik.info">View</a> complete profile.</p>
<?php
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

			<ul class="sidebar">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>

<p><a href="http://trackosaur.com"><img src="http://walmik.info/are-you-productive.png"></a></p><?php endif; ?>

</div>
<!--end Sidebar Secondary-->
