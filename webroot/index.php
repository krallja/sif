<!DOCTYPE HTML>
<?php include 'funcs.php'; ?>
<html>
<head>
    <title>Should I follow?</title>
</head>
<body>
    <h1>Should I follow?</h1>
    <form method='POST'>
        <label for='username'>Username</label>
        <input type='text' name='username' id='username' value='<?php echo username_clean() ?>' />
        <input type='submit' value='Analyze' />
    </form>
<?php if(username_clean()) {?>
    Results for <?php echo username_clean() ?>
<?php } ?>
</body>
</html>
