<!--НАЧАЛО контакты/футер-->
<footer id="footer">

	<!--НАЧАЛО картя яндекса-->
	<?=get_field('map',4) ?>
	<!--КОНЕЦ картя яндекса-->

	<div class="text-section-container">
		<div class="text-section">
			<h2>КОНТАКТЫ</h2>
			<p class="address">Адрес: <?=get_field('address',4)?></p>
			<p class="phone-numbers">Телефон: <a href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a></p>
			<p class="email">E-mail: <a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a></p>
		</div>
	</div>

</footer>
<!--КОНЕЦ контакты/футер-->

<!--НАЧАЛО модальное окно статьи-->
<?php $args=array('category_name'=>'services','order'=>'ASC', 'orderby'=>'id', 'numberposts'=>-1 );
$posts=get_posts($args);
foreach ($posts as $key=> $post):
setup_postdata($post);
?>
<div id="modal-article-services-<?=$key?>" data-uk-modal="{center:true}" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-large uk-clearfix">
		<a class="uk-modal-close uk-close"></a>
		<h2><?=strip_tags(get_the_title())?></h2>
		<img src="<?=get_the_post_thumbnail_url()?>" class="float-right-img">
		<?=get_the_content()?>
	</div>
</div>
<?php endforeach; wp_reset_query(); ?>

<?php $post=get_post(39); setup_postdata($post);?>
<div id="modal-article-retro" data-uk-modal="{center:true}" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-large uk-clearfix">
		<a class="uk-modal-close uk-close"></a>
		<h2><?=strip_tags(get_the_title())?></h2>
		<img src="<?=get_the_post_thumbnail_url()?>" class="float-right-img">
		<?=get_the_content()?>
	</div>
</div>
<?php wp_reset_query(); ?>

<?php $post=get_post(42); setup_postdata($post);?>
<div id="modal-article-pneuma" data-uk-modal="{center:true}" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-large uk-clearfix">
		<a class="uk-modal-close uk-close"></a>
		<h2><?=strip_tags(get_the_title())?></h2>
		<img src="<?=get_the_post_thumbnail_url()?>" class="float-right-img">
		<?=get_the_content()?>
	</div>
</div>
<?php wp_reset_query(); ?>

</div>
<!--КОНЕЦ модальное окно статьи-->


<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slideshow.min.js"></script>
<script src="https://bsh.su/client/script/GET/"></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Получить консультацию'); $('.blink-mailer input,.blink-mailer textarea').prop('disabled', true); $('p.success-mail-text').html(success); /*$('.blink-mailer').hide(500); */ /*$('.success-mail-text').show(500); */ }, function(error) {console.log((error))});
</script>
<script>
	var el = document.querySelector('input[type="tel"]');
	console.log();
	VMasker(el).maskPattern("+9(999) 999-99-99"); // masking the input
</script>
<?=get_field('google',4)?>
<?=get_field('yandex',4)?>
<?php wp_footer() ?>
</body>
</html>