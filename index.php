<?php 
include __DIR__ . "/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- HEADER -->
    <?php include __DIR__ .  "/partials/header.php" ?>
    <!-- /HEADER -->

    <main>
        <div class="faqs-container">
            <?php foreach($faqs as $faq => $content) {?>
                <?php echo $content["question"]; ?>

                <?php foreach($content["answers"] as $paragraph) {?>

                    <?php echo $paragraph ?>

                <?php } ?>
            <?php } ?>
        </div>
    </main>

    <!-- FOOTER -->
    <footer></footer>
    <!-- /FOOTER -->

</body>
</html>