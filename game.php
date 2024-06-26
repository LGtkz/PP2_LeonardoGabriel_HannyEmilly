<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <META http-equiv="Content-Type" content="text/html; charset= ISO-8859-1">
    <title>2048</title>
</head>

<body>
    <?php
        include("header.php");
    ?>
    <div class="score-container">
        <div>Score : <span id="pontoAtual">0</span></div>
        <div>High Score : <span id="high-score">0</span></div>
    </div>

    <div class="game-container">
        <div class="grid">
            <div class="cell" data-row="0" data-col="0"></div>
            <div class="cell" data-row="0" data-col="1"></div>
            <div class="cell" data-row="0" data-col="2"></div>
            <div class="cell" data-row="0" data-col="3"></div>
            <div class="cell" data-row="1" data-col="0"></div>
            <div class="cell" data-row="1" data-col="1"></div>
            <div class="cell" data-row="1" data-col="2"></div>
            <div class="cell" data-row="1" data-col="3"></div>
            <div class="cell" data-row="2" data-col="0"></div>
            <div class="cell" data-row="2" data-col="1"></div>
            <div class="cell" data-row="2" data-col="2"></div>
            <div class="cell" data-row="2" data-col="3"></div>
            <div class="cell" data-row="3" data-col="0"></div>
            <div class="cell" data-row="3" data-col="1"></div>
            <div class="cell" data-row="3" data-col="2"></div>
            <div class="cell" data-row="3" data-col="3"></div>
        </div>
    </div>

    <div id="game-over">
        Game Over!
        <button id="restart-btn">Restart Game</button>
    </div>
        <?php  include("footer.php"); ?>
    <script src="js/game.js"></script>
</body>

</html>