<!DOCTYPE html>
<html>
    <head>
        <title>Employees</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Employees</h1>
        <div>
            <?php foreach ($employees as $emp){ ?>
            <a href="index.php?id=<?=$emp->id?>"><?=$emp->name?></a><br>
            <?php } ?>
        </div>
        <script type="text/javascript" src="assets/js/calculator.js"></script>
    </body>
</html>
