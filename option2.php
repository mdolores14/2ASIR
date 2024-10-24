<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halloween Horror Night</title>
    <style>
        body {
            background-color: black;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
            overflow: auto;
        }

        .emoji {
            font-size: 45px;
        }

        .telarana {
            position: fixed;
            top: -20px;
            right: -20px;
            width: 250px;
            z-index: 1000;
        }

        .telarana2 {
            position: fixed;
            top: -20px;
            left: -20px;
            width: 250px;
            z-index: 1000;
        }

        .button {
            display: inline-block;
            padding: 10px 15px;
            margin: 10px 0;
            border: 2px solid white;
            border-radius: 5px;
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center; font-family: 'Creepster', cursive; color: orange; font-size:45px">&#127875; Welcome
        to Halloween Horror Night &#127875;</h1>
    <img src="img/telarana.png" alt="Web" class="telarana">
    <img src="img/telarana2.png" alt="Web" class="telarana2">
    <?php
    for ($i = 1; $i <= 20; $i++) {
        $emoji = rand(0, 4);
        if ($emoji == 0) {
            echo "<span class='emoji'>&#127875; </span>";
        } elseif ($emoji == 1) {
            echo "<span class='emoji'>&#128123;</span>";
        } elseif ($emoji == 2) {
            echo "<span class='emoji'>&#128128;</span>";
        } elseif ($emoji == 3) {
            echo "<span class='emoji'>&#129415;</span>";
        } else {
            echo "<span class='emoji'>&#128027;</span>";
        }
    }
    ?>
    <h2>You come across an abandoned house. You hear laughter and music.</h2>
    <p><a href="final1.php" class="button" style="color: orange; text-decoration: none;">Enter the house</a></p>
    <p><a href="final2.php" class="button" style="color: orange; text-decoration: none;">Keep walking</a></p>
    <img src="img/house.jpg" alt="Abandoned House" style="width: 100%; max-width: 600px;">

</body>

</html>