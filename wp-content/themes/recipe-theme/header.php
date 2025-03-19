<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo("name")?></title>
<!--   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <?php wp_head(); ?> 
</head>
<body <?php body_class()?>>
  <div class="container">

    <nav class="navigation">
      <div class="menu-container">
        <ul>
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="soup.html">Recipes</a>
          </li>
          <li>
            <a href="about.html">About us</a>
          </li>
        </ul>
      </div>
    </nav>
    