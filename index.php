<?php 
get_header();

 ?>

<div class="container">
<div class="col-md-8">
	<?php //if(have_posts()) :

	 while (have_posts()) : ?>

	
		<?php 
		the_post();

    get_template_part('content');// appelle le fichier content.php
	/* comments_template();

  comment_form();*/
		 ?>

	
<?php endwhile;// endif;?>
</div>

<div class="col-md-4"> 
<?php get_sidebar() ?>
	

</div>
</div>
<?php  
get_footer();
  ?>