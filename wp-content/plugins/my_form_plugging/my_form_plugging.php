<?php

/**
 * plugin Name: My Form Plugin
 */


function prefix_enqueue()
{       
    // JS
    wp_register_script('prefix_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js');
    wp_enqueue_script('prefix_bootstrap');

    // CSS
    wp_register_style('prefix_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
    wp_enqueue_style('prefix_bootstrap');
}

add_action('wp_enqueue_scripts', 'prefix_enqueue');

function my_form_plugin() 
{
    $content = '';
    $content .= '<h2>Contact Us</h2>';
    $content .= '<form methode ="Post" action ="http://localhost/ecommerce-o/thank-you/">';
    $content .= '<label for="name_an">Name</label>';
    $content .= '<input type="text" name="name_an" class="form-data form-control" placeholder="Enter your name" required>';
    $content .= '<label for="email_an">Email</label>';
    $content .= '<input type="email" name="email_an" class="form-data form-control" placeholder="Enter your email" required>';
    $content .= '<label for="subject">message subject</label>';
     $content .= '<input type="text" name= "subject" class="form-data form-control" placeholder="enter the message subject" required> ';
    $content .= '<label for="your_comments">message</label>';
    $content .= '<textarea name="comments_an" class="form-data form-control" placeholder="Enter your comments" required></textarea>';
    $content .= '<input type="submit" class="form-data form-control btn btn-primary" value="Send">';
    $content .= '</form>';
    return $content;
}

add_shortcode('my_form', 'my_form_plugin');


function example_form_capture()
{
     if(isset($_POST['my_form_plugin']))
     {
          $name = sanitize_text_field($_POST['name_an']);
          $email = sanitize_email($_POST['email_an']);
          $subject = sanitize_text_field($_POST['subject']);
          $comments = esc_textarea($_POST['comments_an']);
          
     }

}

add_action('wp_head', 'example_form_capture');

?>