<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dor_master
 */

?>

<article>
	<!--НАЧАЛО main-->
	<div class="main" style=" background:  linear-gradient(115deg, transparent 0%, transparent 40%, rgba(0, 0, 0, 0.75) 40%, rgba(0, 0, 0, 0.75) 100%), 50% 50%/100% auto url('<?=get_the_post_thumbnail_url()?>')">
		<div class="uk-container uk-container-center">
			<p>
                <?=get_field('slogan',4)?>
			</p>
		</div>
	</div>
	<!--КОНЕЦ main-->

	<!--НАЧАЛО отзывы-->
	<div class="services" id="services">
		<div class="uk-container uk-container-center">
			<div class="uk-slidenav-position" data-uk-slider="{autoplay:true, pauseOnHover:true, autoplayInterval:5000}">
				<div class="uk-slider-container">
					<ul class="uk-slider uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid">
						<?php $args=array('category_name'=>'services','order'=>'ASC', 'orderby'=>'id', 'numberposts'=>-1 );
						$posts=get_posts($args);
						foreach ($posts as $key=> $post):
						setup_postdata($post);
						?>
						<li>
							<a href="#modal-article-services-<?=$key?>" data-uk-modal>
								<img src="<?=get_the_post_thumbnail_url()?>">
								<p class="service-name">
									<?=get_the_title()?>
								</p>
							</a>
						</li>
						<?php endforeach;  ?>
					</ul>
				</div>
				<a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
				<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
			</div>
		</div>
	</div>
	<!--КОНЕЦ отзывы-->

	<!--НАЧАЛО about-->
	<?php $post=get_post(21); setup_postdata($post);?>
	<div class="about" id="about">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-medium-6-10 text-section">
					<h2><?=get_the_title()?></h2>
					<?=get_the_content()?>
				</div>
				<div class="uk-width-medium-4-10 staff-photo">
					<img src="<?=get_the_post_thumbnail_url()?>" alt="О нас">
				</div>
			</div>
		</div>
	</div>
	<?php wp_reset_query(); ?>
	<!--КОНЕЦ about-->

	<!--НАЧАЛО retro-cars-->
	<?php $post=get_post(39); setup_postdata($post);?>
	<div class="retro-cars">
		<div class="uk-container uk-container-center">
			<p>
				<?=get_the_title()?>
			</p> <br>
			<a href="#modal-article-retro" class="read-more" data-uk-modal>Подробнее</a>
		</div>
	</div>
	<?php wp_reset_query(); ?>
	<!--КОНЕЦ retro-cars-->
	<!--НАЧАЛО вместо пневмы-->
	<?php $post=get_post(42); setup_postdata($post);?>
	<div class="instead-of-pneuma" style="background: linear-gradient(105deg, rgba(8, 23, 35, 0.67) 0%, rgba(8, 23, 35, 0.67) 50%, transparent 50%, transparent 100%), 50% 50%/100% auto url('<?=get_the_post_thumbnail_url()?>');">
		<div class="uk-container uk-container-center">
			<p>
				<?=get_the_title()?>
			</p> <br>
			<a href="#modal-article-pneuma" class="read-more" data-uk-modal>Подробнее</a>
		</div>
	</div>
	<!--КОНЕЦ вместо пневмы-->
</article><!-- #post-## -->
