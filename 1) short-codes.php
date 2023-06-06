<?php 
// Copy and paste the function below into your functions.php
function i_like_pizza($atts, $content)
{
    return "<h1>I LIKE PIZZA</h1>";
}
add_shortcode('pizza', 'i_like_pizza');

// Don't copy this line
?>
