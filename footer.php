	<?php get_template_part('part-sponsors'); ?>
  
  </div>
</section>

<footer class="footer">
	<div class="row">
		<?php do_action('foundationPress_before_footer'); ?>
		<?php dynamic_sidebar("footer-widgets"); ?>
		<?php do_action('foundationPress_after_footer'); ?>
	</div>
</footer>
<a class="exit-off-canvas"></a>
	
  <?php do_action('foundationPress_layout_end'); ?>
  </div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
<script class="source" type="text/javascript">
        $('.countdown').downCount({
            date: '10/25/2014 9:00:00',
            offset: +10
        }, function () {
            alert('InfoCamp is here!');
        });
</script>
</body>
</html>