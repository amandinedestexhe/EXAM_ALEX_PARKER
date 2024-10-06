
<?php include_once '../app/views/templates/partials/_button_add_post.php'?>
        <!-- Blog Post Start -->
            <div class="col-md-12 blog-post row">
                <?php foreach ($posts as $post): ?>
                    <div class="post-title">
                      <a href="posts/<?php echo $post['id']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>.html"
                        ><h1>
                        <?php echo $post['title']; ?>
                        </h1></a
                      >
                    </div>
                    <div class="post-info">
                      <span><?php echo \Core\Helpers\date_formater($post['created_at'], 'd-m-Y'); ?></span> | <span><?php echo $post['category_id']; ?></span>
                    </div>
                    <p>
                    <?php echo \Core\Helpers\truncate($post['text'], 150); ?>
                    </p>
                    <a
                      href="posts/<?php echo $post['id']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>.html"
                      class="
                        button button-style button-anim
                        fa fa-long-arrow-right
                      "
                      ><span>Read More</span></a
                    >
                <?php endforeach; ?>  
            </div>
        <!-- Blog Post End -->
<?php include_once '../app/views/templates/partials/_pagination.php'?>
