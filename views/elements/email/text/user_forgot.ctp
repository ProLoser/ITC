Hello <?php echo $name ?>.
You have requested to reset the password. Click the link below into your web browser to reset your password.
<?php echo $html->url('/users/fPass/', true); echo $forgot_code ?>
This link will expire by the end of today.

Thank You
-The ProCode Team