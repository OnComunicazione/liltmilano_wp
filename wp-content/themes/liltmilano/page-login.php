<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Login
 */

if (is_user_logged_in()) wp_redirect(home_url() . '/iscrizioni');

$user = $_POST['username'];
$pw = $_POST['password'];

if (isset($user) && isset($pw)) {
  $creds = array(
        'user_login'    => $user,
        'user_password' => $pw,
        'remember'      => true
    );
  wp_signon($creds);
  wp_redirect(home_url() . '/iscrizioni');
}

get_header(); ?>

<div class="container-fluid login">
    <a href="./">
      <div class="logo logo-home"></div>
    </a>

    <form class="login-form" action="./" method="post">
      <label>Username</label><br>
      <input type="text" name="username" class="ninja-forms-field nf-element"><br>
      <label>Password</label><br>
      <input type="password" name="password" class="ninja-forms-field nf-element"><br>
      <input type="submit" value="LOGIN" class="formBtn">
    </form>
</div>

<?php wp_footer(); ?>

</body>
</html>
