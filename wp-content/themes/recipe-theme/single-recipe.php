<?php get_header()?>

  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>


<?php 

$miniRecipeTitle = get_field("mini-recipe-title");
$smallRecipeTitle = get_field("h1-recipe");
$desc = get_field("desc");
$cookingTime = get_field("cooking-time");
$calories = get_field("calories");
$difficulty = get_field("difficulty");
$recipePic= get_field("recipe-pic");
$instructions = get_field("instructions-bodytext");
$ingredients = get_field("ingredients-bodytext");
$recipeTitle = get_the_title();
?>

<section class="recipe_details">
      <div class="recipe_details_left">
        <div class="recipe-hero-text">
          <p class="recipe-hero-text-smallest color-primary"><?php echo esc_html($miniRecipeTitle) ?></p>
          <p class="recipe-hero-text-medium"><?php echo esc_html($smallRecipeTitle) ?></p>
          <p class="recipe-hero-text-large"><?php echo esc_html($recipeTitle) ?></p>
        </div>
        
        <!-- div element to contain 3 info, checkboxes and 2 buttons -->
        <div class="recipe_details_ingredient_block">

          <!-- Part I -->
          <!-- div element .recipe_details_ingredient_block_info_three + .recipe_details_ingredient_block_info_three_item*3 with i+p as children -->
          <div class="recipe_details_ingredient_block_info_three">
            <div class="recipe_details_ingredient_block_info_three_item">
                <i class="fas fa-clock"></i>
                <p><?php echo esc_html($cookingTime) ?></p>
            </div>
            <div class="recipe_details_ingredient_block_info_three_item">
                <i class="fas fa-fire"></i>
                <p><?php echo esc_html($calories) ?></p>
            </div>
            <div class="recipe_details_ingredient_block_info_three_item">
                <i class="fas fa-chart-simple"></i>
                <p><?php echo esc_html($difficulty) ?></p>
            </div>
          </div>



          <!-- Part III -->
          <!-- div element .recipe_details_ingredient_block_buttons with 2 buttons and i + a as children -->
          <div class="recipe_details_ingredient_block_buttons">
            <button class="button">
                <i class="fas fa-print"></i>
                <a href="#" class="button-text">Print</a>
            </button>
            <button class="button">
                <i class="fas fa-heart"></i>
                <a href="#" class="button-text">Favorite</a>
            </button>
          </div>

        </div>
      </div>

      <!-- right side contains image -->
      <div class="recipe_details_right">
        <div class="recipe_details_right_image">
          <img src="<?php echo esc_html($recipePic["url"]) ?>" alt="">
        </div>
      </div>
    </section>

    <!-- div element .recipe_instruction_one with .filler_block as child :: just to take up space for future ul>li -->
    <section class="recipe_instruction_two">
      <div class="recipeInstructionTwoBox">
        <div class="recipeInstructionTwoLeft">
          <div class="recipeInstructionTwoLeftHeadline">
            <h2>instructions</h2>
          </div>
          <div class="recipeInstructionTwoLeftText">
          <?php echo esc_html($instructions) ?>
          </div>
        </div>
        <div class="recipeInstructionOneRight">
          <div class="recipeInstructionOneRightHeadline">
            <h2>ingredients</h2>
          </div>
          <div class="recipeInstructionOneRightText">
            <?php echo esc_html($ingredients) ?>
          </div>
        </div>
      </div>
    </section>


    <?php endwhile ?>
  <?php endif ?> 
<?php get_footer()?>