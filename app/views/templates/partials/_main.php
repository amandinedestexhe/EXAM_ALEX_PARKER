    <div id="main">
      <div class="container">
        <div class="row">
        <?php include_once '../app/views/templates/partials/_aside.php'?>
          <!-- Blog Post (Right Sidebar) Start -->
          <div class="col-md-9">
            <div class="col-md-12 page-body">
              <div class="row">
                <div class="col-md-12 content-page">
                    <?php include_once '../app/views/templates/partials/_button_add_post.php'?>
                    <?php echo $content; ?>
                    <?php include_once '../app/views/templates/partials/_pagination.php'?>
                </div>
              </div>
            </div>
            <?php include_once '../app/views/templates/partials/_footer.php'?>
          </div>
          <!-- Blog Post (Right Sidebar) End -->
        </div>
      </div>
    </div>