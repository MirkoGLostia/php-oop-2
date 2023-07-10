<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/style.css">
    <title>pet shop</title>

    <?php require_once("./data/db.php"); ?>

</head>
<body>
    
    <body>

        <h2>
            food
        </h2>

        <section class="card-container"> 
            <!-- food -->
            <?php

                foreach ($foods as $food) {
                    
                    ?> 
                    
                        <div class="card">
                            <h3>
                                <?php echo $food -> getName(); ?>
                            </h3>
                            <div>Peso: <?php echo $food -> getWeight() ?>Kg</div>
                            <div>Prezzo: <?php echo $food -> getPrice() ?>E</div>
                            <div>Data scadenza: <?php echo $food -> getExpiretion() ?></div>
                        </div>
                    
                    <?php
                }

            ?>
        </section>

        <h2>
            toys
        </h2>

        <section class="card-container"> 
            <!-- toys -->
            <?php

                foreach ($toys as $toy) {
                    
                    ?> 
                    
                        <div class="card">
                            <h3>
                                <?php echo $toy -> getName(); ?>
                            </h3>
                            <div>Peso: <?php echo $toy -> getWeight() ?>Kg</div>
                            <div>Prezzo: <?php echo $toy -> getPrice() ?>E</div>
                            <div>Età consigliata: <?php echo $toy -> getAge() ?></div>
                        </div>
                    
                    <?php
                }

            ?>
        </section>
        
    </body>

</body>
</html>