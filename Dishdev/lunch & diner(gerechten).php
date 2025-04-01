<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Homepage voor Vegan food">
    <meta name="keywords" content="Restaurant : Vegan Food, Food, Vegan">
    <meta name="author" content="Bingyi Zhou">

    <title>Lunch & Diner</title>
    <link rel="stylesheet" href="Css/stylesheetdish.css">
</head>

<body>
 
    <header>

    <?php include "PHP/header.php"?>

    </header>

    <section class="banner">

    </section>
   
        <main>
            <br>
            <article>
                <p class="title">Lunch & Diner</p>
                <p class="paragraph">
                    Bij ons draait alles om heerlijke, voedzame en duurzame gerechten die je zowel lekker als goed doen. 
                    Al onze gerechten zijn 100% plantaardig, bereid met verse, seizoensgebonden ingrediënten, en hebben als doel om je smaakpapillen te verwennen en je lichaam te voeden. 
                    Of je nu op zoek bent naar een lichte lunch of een uitgebreid diner, je zult hier zeker iets vinden dat je hart sneller doet kloppen!</p>
            </article>

            <section id="menu">
                <button class="button"><a class="href" href="lunch & diner(gerechten).php">Gerechten</a></button>
                <button class="button"><a class="href" href="lunch & diner(drankjes).php">Drankjes</a></button>
                <button class="button"><a class="href" href="lunch & diner(dessert).php">Desserts</a></button>
                <br><br>
            <section class="gerechtenfood">
                <p class="paragraph">
                    **Brusche a Tricolore** •
                    <br> VOORGERECHT
                    <br>€8,00  
                    <br>Geroosterd zuurdesembrood met 
                    <br>drie toppings: avocado-spread, 
                    <br>gegrilde paprika tapenade,  en 
                    <br>tomaten-basilicum salsa</p>
                <p class="paragraph">
                    **Gefrituurde Ar sjok** • 
                    <br>VOORGERECHT
                    <br>€8,50  
                    <br>Knapperige ar sjokblaadjes geserveerd 
                    <br>met huisgemaakte aioli van aquafaba</p>
                <p class="paragraph">
                    **Romige Pompoensoep** • 
                    <br>VOORGERECHT
                    <br>€7,50  
                    <br>Fluweelzachte soep van biologische 
                    <br>pompoen met geroosterde pompoenpi en
                    <br> verse kruiden
                </p>
        </section>

            <article id="gerechten">
                <img src="IMG/brusche a tricolore.png" alt="brusche a tricolore">
                <img src="IMG/gefrituurde art sjork.png" alt="art sjork">
                <img src="IMG/romige pompoensoep.png" alt="pompoensoep">
            </article>

            <section class="gerechtenfood">
                <p class="paragraph">
                    **Portobello Wellington** • 
                    <br>HOOFDGERECHT
                    <br>€19,50 
                    <br>In bladerdeeg gebakken portobello 
                    <br>met duxelles van paddenstoelen, 
                    <br>geserveerd met seizoensgroenten en 
                    <br>rode wijnsaus
                </p>
                <p class="paragraph">
                    **Jackfruit Rendang** •
                    <br>HOOFDGERECHT
                    <br> €18,50 
                    <br>Indonesische curry van jonge jackfruit 
                    <br>met kokosrijst en gewokte groenten
                </p>
                <p class="paragraph">
                    **Gnocchi al Tartufo** • 
                    <br>€17,50 
                    <br>HOOFDGERECHT
                    <br>Huisgemaakte aardappelgnocchi met 
                    <br>truffelsaus, gebakken paddenstoelen 
                    <br>en rucola
                </p>
            </section>

            <article id="gerechten">
                <img src="IMG/Portobello-Mushroom-Wellington.webp" alt="Portobello-Mushroom-Wellington">
                <img src="IMG/indonesian food.jpg" alt="indonesian">
                <img src="IMG/gnocchie.jpg" alt="gnocchi">
            </article>
        </main>

        <footer>
        <?php include "PHP/footer.php"?>
    </footer>
    </body>
    </html>