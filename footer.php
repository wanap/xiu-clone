<?php if( _hui('layout') == 'ui-navtop' ){ ?>
</div>
</section>
<div class="rollto"><a href="javascript:;"></a></div>
<?php } ?>
<footer class="footer">
    &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &nbsp; <?php echo _hui('footer_seo') ?>
    <?php echo _hui('trackcode') ?>
</footer>
<?php if( _hui('layout') !== 'ui-navtop' ){ ?>
</section>
<?php } ?>

<?php  
$roll = 0;
if( is_home() && _hui('sideroll_index_s') ){
	$roll = _hui('sideroll_index');
}else if( (is_category() || is_tag() || is_search()) && _hui('sideroll_list_s') ){
	$roll = _hui('sideroll_list');
}else if( is_single() && _hui('sideroll_post_s') ){
	$roll = _hui('sideroll_post');
}else if( is_page() && _hui('sideroll_page_s') ){
	$roll = _hui('sideroll_page');
}
if( $roll ) $roll = json_encode(explode(' ', $roll));
?>
<script>
window.jui = {
	uri: '<?php echo THEME_URI ?>',
	roll: <?php print_r($roll) ?>,
	ajaxpager: '<?php echo _hui('ajaxpager') ?>'
}
</script>
<?php wp_footer(); ?>
</body>
</html>