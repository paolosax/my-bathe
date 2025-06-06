<div class="grid grid-cols-3 gap-4 content-start">
	<img class="object-cover" src="https://picsum.photos/800/600?random=1" />  
	<img class="object-cover" src="https://picsum.photos/800/600?random=2" />  
	<img class="object-cover" src="https://picsum.photos/800/600?random=3" />  
	<img class="object-cover" src="https://picsum.photos/800/600?random=4" />  
	<img class="object-cover" src="https://picsum.photos/800/600?random=5" />  
	<img class="object-cover" src="https://picsum.photos/800/600?random=6" />  
	<img class="object-cover" src="https://picsum.photos/800/600?random=7" />  
</div>

<?php if ( have_posts() ) : ?>

	<ul>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<li>
				<h1 class="text-2xl font-bold hover:underline">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h1>
				<?php the_content(); ?>
			</li>

		<?php endwhile; ?>

	</ul>

	<?php
endif;
