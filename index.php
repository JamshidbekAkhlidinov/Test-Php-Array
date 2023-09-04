<?php
include_once 'data.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tests for JK</title>
</head>

<body>
    <h1>Test sinovi</h1>

    <form method="post" action="check.php">

        <ol>
            <?php foreach($data as $key=>$test):?>
            <li>
                <ul>
                    <h3><?=$test['question']?></h3>
                    <?php foreach($test['answers'] as $id=>$answer): ?>
                    <li>
                        <label for="answer[<?=$key?>][<?=$id?>]">
                            <input value="<?=$id?>" type="radio" name="answer[<?=$key?>]" id="answer[<?=$key?>][<?=$id?>]">
                            <?=$answer['text']?>
                        </label>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <?php endforeach; ?>
        </ol>
        <input type="submit" value="CHeck Test. My Question">
    </form>
</body>
</html>