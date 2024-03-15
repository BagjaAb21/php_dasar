<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP Dasar</title>
    <style>
        .colour-line {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for ($i=1; $i <= 5; $i++) { 
                echo "<tr>";
                for ($j=1; $j <= 5; $j++) { 
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    <table border="1" cellpadding="10" cellspacing="0">

        <?php 
        echo "<br> <br>";
            for ($i=1; $i <= 5; $i++) { ?>
                <tr>
                    <?php for ($j=1; $j <= 5; $j++) { ?>
                        <td><?php echo "$i, $j"; ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
    </table>

    <div class="row">
        <div class="col">
            <h3>Table 1 Ganjil block</h3>
        <table border="1" cellpadding="10" cellspacing="0">

            <?php for ($i=1; $i <= 5; $i++) : ?>
                <?php if($i %2 == 1) : ?>
                    <tr class="colour-line">
                    <?php else : ?>
                        <tr>
                <?php endif; ?>
                <?php for ($j=1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php endfor ?>
                </tr>
            <?php endfor ?>
        </table>
        </div>
        <div class="col">
            <h3>Table 2 Genap Block</h3>
                    <table border="1" cellpadding="10" cellspacing="0">

            <?php for ($i=1; $i <= 5; $i++) : ?>
                <?php if($i %2 == 0) : ?>
                    <tr class="colour-line">
                    <?php else : ?>
                        <tr>
                <?php endif; ?>
                <?php for ($j=1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php endfor ?>
                </tr>
            <?php endfor ?>
        </table>
        </div>
    </div>
</body>
</html>