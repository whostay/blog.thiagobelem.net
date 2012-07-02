<?php get_header() ?>

	<div class="content">

		<section class="main">
		<?php
		while (have_posts()) {
			the_post();
		?>
			<article id="post-<?php the_ID() ?>" <?php post_class() ?> itemscope itemtype="http://schema.org/Article">
				<header>
					<h1 itemprop="name"><a href="<?php the_permalink() ?>" itemprop="url"><?php the_title() ?></a></h1>
					<time datetime="<?php the_time('c') ?>" itemprop="datePublished"><?php the_time(get_option('date_format')) ?></time>

					<?php the_post_thumbnail() ?>
				</header>

				<div itemprop="description">
					<?php the_content() ?>
				</div>

				<footer>
					<p class="categories">Categorias: <?php the_category(', ') ?></p>
					<p class="tags">Palavras-chave: <?php the_tags(false, ', ') ?> </p>
				</footer>
			</article>
		<?php } ?>
		</section>

		<?php get_sidebar() ?>
		
	</div>

<?php get_footer() ?>