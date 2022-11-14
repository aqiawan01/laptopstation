<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>Reset Form</h1>
	<p>To reset your password, Complete this form:</p>
	<a href="<?php echo site_url('password/reset/' . $token); ?>"><?php echo site_url('password/reset/' . $token); ?></a>
	<p>Thank you,</p>
</body>
</html>