<a aria-label="<?php echo($article_list['article_title'])?>" alt="<?php echo($article_list['article_title'])?>" class="articlelist-box" 
href="<?php echo($article_list['article_link'])?>">
  <div class="articlelist-thumb">
    <div class="articlelist-photo flex_ori thumb-loading">
      <img alt="<?php echo($article_list['article_title'])?>" class="lazyload" data-original="img/content/article-default-small.jpg"
        data-srcset="img/content/article-bg-small.jpg 567w,
        img/content/article-default-medium.jpg 1920w"
      />
    </div>
  </div>
  <div class="articlelist-info">
    <div class="articlelist-date"><?php echo($article_list['article_date'])?></div>
    <h2 class="articlelist-title"><?php echo($article_list['article_title'])?></h2>
    <div class="articlelist-desc"><?php echo($article_list['article_desc'])?></div>
    <div class="articlelist-more">Read More</div>
  </div>
</a>