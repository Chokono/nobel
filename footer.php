<?php ?>

	</div><!-- #content -->

	<section class="main_footer">
		<div class="container">
			<div class="row">

				<div class="col-xs-6 col-sm-3">
					<aside class="sidebarfooter1-">
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
					</aside>
				</div>

				<div class="col-xs-6 col-sm-3">
					<aside class="sidebar-footer2">
					<?php dynamic_sidebar( 'sidebar-6' ); ?>
					</aside>
				</div>
				<div class="col-xs-6 col-sm-3">
					<aside class="sidebar-footer3">
					<?php dynamic_sidebar( 'sidebar-7' ); ?>
					</aside>
				</div>
				<div class="col-xs-6 col-sm-3">
					<aside class="sidebar-footer4">
					<?php dynamic_sidebar( 'sidebar-8' ); ?>
					</aside>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</section>

</div>

<?php wp_footer(); ?>
<script>
	//jQuery('#space_video').stellar();
 jQuery(document).ready(function () {
    jQuery.stellar({
        horizontalScrolling: false,
        verticalOffset: 0,
        responsive: true,
    });
});
</script>
</body>
</html>
