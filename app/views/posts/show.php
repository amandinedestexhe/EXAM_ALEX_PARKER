

          <!-- Blog Post (Right Sidebar) Start -->
          
            <div class="col-md-12 page-body">
              <div class="row">
                <div class="sub-title">
                  <a href="index.html" title="Go to Home Page"
                    ><h2>Back Home</h2></a
                  >
                  <a href="#comment" class="smoth-scroll"
                    ><i class="icon-bubbles"></i
                  ></a>
                </div>

                <div class="col-md-12 content-page">
                  <div class="col-md-12 blog-post">
                    <div>
                      <img src="images/blog/1.jpg" alt="">
                    </div>

                    <!-- Post Headline Start -->
                    <div class="post-title">
                      <h1>
                      <?php echo $post['title']; ?>
                      </h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Post Detail Start -->
                    <div class="post-info">
                      <span><?php echo $post['created_at']; ?></span> | <span><?php echo $post['category_id']; ?></span>
                    </div>
                    <!-- Post Detail End -->

                    <p>
                    <?php echo $post['text']; ?>
                      <b
                        ><a
                          href="javascript:void(0)"
                          data-toggle="popover"
                          data-placement="top"
                          data-content="You can write any text here"
                          >Click me</a
                        ></b
                      >
                      sollicitudin sapien ut sapien fermentum aliquet mollis.
                      Curabitur ac quam orci sodales quam ut tempor.
                      <b
                        data-toggle="tooltip"
                        data-placement="top"
                        title="You can write any text here."
                        >Hover me</b
                      >
                      suspendisse, gravida in augue in, interdum bibendum dui.
                      Suspendisse sit amet justo sit amet diam fringilla
                      commodo. Praesent ac magna at metus malesuada tincidunt
                      non ac arcu. Nunc gravida eu felis vel elementum.
                      Vestibulum sodales quam ut tempor tempor. Donec
                      sollicitudin sapien ut sapien fermentum, non ultricies
                      nulla gravida.
                    </p>

                    <!-- Post Blockquote (Italic Style) Start -->
                    <blockquote class="margin-top-40 margin-bottom-40">
                      <p>
                      <?php echo $post['quote']; ?>
                      </p>
                    </blockquote>
                    <!-- Post Blockquote (Italic Style) End -->

                    <!-- Post Buttons -->
                    <div>
                      <a href="posts/<?php echo $post['postID']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>/edit/form.html" type="button" class="btn btn-primary"
                        >Edit Post</a
                      >
                      <a
                        href="posts/<?php echo $post['postID']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>/delete.html"
                        type="button"
                        class="btn btn-secondary"
                        role="button"
                        >Delete Post</a
                      >
                    </div>
                    <!-- Post Buttons End -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Footer Start -->
            <div class="col-md-12 page-body margin-top-50 footer">
              <footer>
                <ul class="menu-link">
                  <li><a href="index.html">My Blog</a></li>
                </ul>

                <p>© Copyright 2016 DevBlog. All rights reserved</p>

                <!-- UiPasta Credit Start -->
                <div class="uipasta-credit">
                  Design By
                  <a href="http://www.uipasta.com" target="_blank">UiPasta</a>
                </div>
                <!-- UiPasta Credit End -->
              </footer>
            </div>
            <!-- Footer End -->
          </div>
          <!-- Blog Post (Right Sidebar) End -->
        </div>
      </div>

      <!-- Endpage Box (Popup When Scroll Down) Start -->
    <div id="scroll-down-popup" class="endpage-box">
      <h4>Read Also</h4>
      <a href="#"
        >How to make your company website based on bootstrap framework...</a
      >
    </div>
    <!-- Endpage Box (Popup When Scroll Down) End -->
    

    

   