<section class="hero">
      <div class="hero-container">

        <?php 
        $heroImg = get_field("hero-image");
        $miniText = get_field("mini-text");
        $recipeTitle = get_field("recipe-title");
        $recipeTitleBold = get_field("recipe-title-bold");
        $shortDesc = get_field("short-desc");
        $searchText = get_field("search-text");
        ?>


        <div class="hero-text">
          <p class="hero-text-small-header"><?php echo esc_html($miniText) ?></p>
          <p class="hero-text-big-header"><?php echo esc_html($recipeTitle) ?><br><span class="hero-text-bold"><?php echo esc_html($recipeTitleBold) ?></span></p>
          <p class="hero-text-small-header"><?php echo esc_html($shortDesc) ?></p>
        </div>
        <div class="hero-search">
          <input type="search" name="" class="search-box" placeholder="Search">
          <p><?php echo esc_html($searchText) ?></p>
        </div>
      </div>

    </section>

    <section class="todays_recipe">
      <div class="todays_recipes_headline">
        <h2>Recipes of the day</h2>
      </div>

      <div class="todays_recipes_content">
        <?php
            $arguments = array(
                "post_type" => "recipe",
                "posts_per_page" => 4
            );

            $loop = new WP_Query($arguments);
            ?>

            <?php if($loop->have_posts()): ?>
                <?php while($loop->have_posts()): $loop->the_post() ?>

                    <?php
                    $recipeTitle = get_the_title();
                    $recipeDesc = get_field("desc");
                    $recipeCategory = get_field("category");
                    $recipePic = get_field("recipe-pic");
/*                     $recipeLink = get_the_permalink(); */
                    ?>
                    
            

        <div class="todays_recipes_content_block">
          <div class="todays_recipes_content_block_image">
            <img src="<?php echo esc_url($recipePic["url"]) ?>" alt="<?php echo esc_attr($recipeTitle) ?> Image">
          </div>
          <div class="todays_recipes_content_block_text">
            <div class="todays_recipes_content_block_text_top">
              <h5><?php echo esc_html($recipeTitle) ?></h5>
              <p><?php echo esc_html($recipeDesc) ?></p>
            </div>
            <div class="todays_recipes_content_block_text_bottom">
              <div class="todays_recipes_content_block_bottom_area line-seafood">
                <div class="todays_recipes_content_block_bottom_area_left">
                  <p class="category-color <?php echo esc_html($categoryCSS)?>"><?php echo esc_html($recipeCategory[0]->post_title) ?></p>
                  <p>Recipe</p>
                </div>
                <div class="todays_recipes_content_block_bottom_area_right">
                  <button>
                    <a href="#">How to</a>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile ?>
        <?php endif ?>
        
      </div>
    </section>

    <section class="categories">
      <div class="category_selection_headline">
        <h2>category selection</h2>
      </div>

      <div class="category_selection_box">
      <?php
            $arguments = array(
                "post_type" => "food-category",
                "posts_per_page" => -1
            );

            $loop = new WP_Query($arguments);
            ?>

                <?php if($loop->have_posts()): ?>
                <?php while($loop->have_posts()): $loop->the_post() ?>

                <?php 
                $categoryIcon = get_field("icon");
                $categoryName = get_the_title();
                $categoryCSS = get_field("css_color");

                ?>


        <div class="category_selection_box_food">
          <div class="category_selection_box_food_icon <?php echo esc_html($categoryCSS)?>">
            <i class="<?php echo esc_attr($categoryIcon)?>"></i>
          </div>
          <div class="category_selection_box_food_text <?php echo esc_html($categoryCSS)?>">
            <p><?php echo esc_html($categoryName) ?></p>
          </div>
        </div>

        <?php endwhile ?>
        <?php endif ?>
      </div>
    </section>

    <section class="content_image">
        <div class="content_image_container">
          <div class="content_image_container_textbox">
            <p class="content_image_container_textbox_top_text">In the kitchen</p>
            <h5>All-star showdown</h5>
            <p>Big brawl in kitchen. Who takes it? <br>
              Winner gets to take home the desserts! <br>
              Losers can wave goodbye! </p>
          </div>
        </div>
    </section>

    <section class="content_area">
      <div class="content_area_headline">
        <h2>In the kitchen</h2>
      </div>

      <div class="content_area_container">
        <div class="content_area_box box_top_left">
          <div class="content_area_box_text">
            <p class="content_area_fat_text">In the kitchen</p>
            <h5>How to plate as a pro</h5>
            <p class="content_area_box_text_text">Plating techniques - no salt bae crap.
              See how to properly arrange and design 
              a plate.</p>
              <button><a href="#">plating</a></button>
          </div>
        </div>
        <div class="content_area_box box_top_right"></div>
        <div class="content_area_box box_middle_left"></div>
        <div class="content_area_box box_middle_right">
          <div class="content_area_box_text">
            <p class="content_area_fat_text">In the kitchen</p>
            <h5>Recipes are for...</h5>
            <p class="content_area_box_text_text">Big brawl in kitchen. Who takes it?
              Winner gets to take home the desserts!
              Losers can wave goodbye!</p>
              <button><a href="#">recipe</a></button>
          </div>
        </div>
        <div class="content_area_box box_bottom_left">
          <div class="content_area_box_text">
            <p class="content_area_fat_text">In the kitchen</p>
            <h5>Meats - how to baste</h5>
            <p class="content_area_box_text_text">Big brawl in kitchen. Who takes it?
              Winner gets to take home the desserts!
              Very scrumptious!</p>
              <button><a href="#">guides</a></button>
          </div>
        </div>
        <div class="content_area_box box_bottom_right"></div>
      </div>
    </section>