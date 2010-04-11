Hello <?php echo $name ?>.<br>
You have requested to reset the password. Click the link below into your web browser to reset your password.<br>
<a href=" <?php echo $html->url('/users/fPass/', true); echo $forgot_code ?>"> Reset Password </a><br>
This link will expire by the end of today.<br><br>
Thank You<br>
-The ProCode Team