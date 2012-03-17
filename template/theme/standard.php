<?php tpl::pieces('header') ?>

<section class="content blog">
 
 <?php foreach (blog::getArticle() as $article) { ?>
  
  <article>
    <h1><a class="headline" href="<?php echo blog::permalink(); ?>"><?php echo blog::title(); ?></a></h1>
    <?php echo blog::preview(); ?>
    <a class="more" href="<?php echo blog::permalink(); ?>">[...]</a>
    <time datetime="<?php echo blog::date(); ?>" pubdate="pubdate"><?php echo blog::date('d. M'); ?><br /><span><?php echo blog::date('Y'); ?></span></time>
  </article>

 <?php } ?>


</section>
<?php tpl::pieces('footer') ?>