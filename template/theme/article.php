<?php tpl::pieces('header') ?>

<section class="content blog">
 
  
  <article>
 <h1><?php echo blog::title(); ?></h1>
 <?php echo blog::text(); ?>
  <small>von <?php echo blog::author(); ?> am <?php echo blog::date('d.m.Y'); ?></small>
  </article>



</section>
<?php tpl::pieces('footer') ?>