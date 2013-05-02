<?php get_template_part("header"); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <div class="container">
    <div class="row">
      <article class="eight columns offset-two">
        <header>
          <time class="post_time" datetime="<?php the_time('c'); ?>" pubdate><?php the_time("F j, Y"); ?> at <?php the_time("g:i a"); ?></time>
          <h1 class="post_title"><?php the_title(); ?></h1>
        </header>
        <div class="content">
          <?php the_content(); ?>
        </div>
        <div class="tilde">~</div>
      </article>
    </div>
  </div>
<?php endwhile; endif; ?>

<?php get_template_part("footer"); ?>