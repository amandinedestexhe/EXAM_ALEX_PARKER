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
                    <!-- Post Headline Start -->
                    <div class="post-title">
                      <h1>Post Form</h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Form Start -->
                    <form action="posts/add/insert.html" method="posrt">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input
                          type="text"
                          name="title"
                          id="title"
                          class="form-control"
                          placeholder="Enter your title here"
                        />
                      </div>
                      <div class="form-group">
                        <label for="text">Text</label>
                        <textarea
                          id="text"
                          name="text"
                          class="form-control"
                          rows="5"
                          placeholder="Enter your text here"
                        ></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1"> Image</label>
                        <input type="file" class="form-control-file btn btn-primary" id="exampleFormControlFile1">
                      </div>
                      <div class="form-group">
                        <label for="text">Quote</label>
                        <textarea
                          id="quote"
                          name="quote"
                          class="form-control"
                          rows="5"
                          placeholder="Enter your quote here"
                        ></textarea>
                      </div>
                      <div class="form-group">
                        <label for="category">Category</label>
                        <select
                          id="category"
                          name="category_id"
                          class="form-control"
                        >
                        <option disabled selected>
                            Select your category
                          </option>
                        <?php foreach ($categories as $category): ?>
                          
                          <option value="<?php echo $category['id'] ?>"><?php echo $category['category_name'] ?>

                          </option>
                        <?php endforeach; ?>
                        </select>
                      </div>
                      <div>
                        <input
                          class="btn btn-primary"
                          type="submit"
                          value="submit"
                        />
                        <input
                          class="btn btn-secondary"
                          type="reset"
                          value="reset"
                        />
                      </div>
                    </form>
                    <!-- Form End -->
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
