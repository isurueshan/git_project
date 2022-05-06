<html>
    <head>
        <title>Git Test</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
<h1 class="h1">Isuru Eshan</h1>
<div class="align">
<table border="1">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>AGE</td>
    </tr>
    <?php 
    for($i=0;$i<100;$i++) {
        ?>
    <tr>
        <td><?php echo $i;?></td>
        <td>Eshan</td>
        <td>3<?php echo $i;?></td>
    </tr>
    <?php }?>
</table>
</div>
    </body>
</html>