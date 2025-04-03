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
            </section>
<br><br>
            <section class="gerechtenfood">
                <p class="paragraph">
                    Desserts 
                    <br>**Chocolade Lava Cake** • 
                    <br>€8,50 
                    <br>Warme chocoladecake met een vloeibare 
                    <br>kern, geserveerd met vanille-ijs van 
                    <br>kokosmelk
                </p>
                <p class="paragraph">
                    <p class="paragraph">
                        Desserts 
                        <br>**Cheesecake van de Dag** • €7,50 
                        <br>Vraag onze bediening naar de smaak 
                        <br>van vandaag
                </p>
                <p class="paragraph">
                    Desserts
                    <br>**Crème Brûlée** • €8,00 
                    <br>Op basis van vanille custard van cashewnoten 
                    <br>met een krokant laagje gekarameliseerde suiker
                </p>
            </section>

            <article id="gerechten">
                <img src="IMG/choco lava cake.jpg" alt="chocoladecake">
                <img src="IMG/cheesecake.jpg" alt="cheesecake">
                <img src="IMG/creme brulee.jpg" alt="creme brulee">
            </article>

        </main>

    <footer>
        <?php include "PHP/footer.php"?>
    </footer>
</body>
</html>