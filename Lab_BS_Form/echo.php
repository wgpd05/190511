<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Echo</title>
</head>
<body>
    <?php if (count($_GET) > 0) { ?>
        <h3>GET:</h3>
        <pre>
        <?php print_r($_GET); ?>
        </pre>
    <?php } ?>
    
    <?php if (count($_POST) > 0) { ?>
        <h3>POST:</h3>
        <pre>
        <?php print_r($_POST); ?>
        </pre>
    <?php } ?>
</body>
</html>
