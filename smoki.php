<?php
$condom = mysqli_connect("localhost", "root", "", "smoki");
if ($condom->errno) {
    echo "Nie połączono z bazą danych.";
    exit;
} else {
    echo "Połączono z bazą danyh." . "<br>";
    // wywalić potem z połączenia komunikat o procesie łączenia
}
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoki</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h2>Poznaj smoki!</h2>
    </header>

    <nav>
        <article onclick="changeOfSectionOne()" id="one">Baza</article>
        <article onclick="changeOfSectionTwo()" id="two">Opisy</article>
        <article onclick="changeOfSectionThree()" id="three">Galeria</article>
    </nav>

    <main>
        <section id="pierwsza">
            <h3>Baza smoków</h3>
            <form action="smoki.php" method="post">
                <select name="kraj">
                    <!-- wypelniona lista przez skrypt1 -->
                    <?php
                    $zapytanie2 = 'SELECT DISTINCT pochodzenie FROM smok ORDER BY pochodzenie;';
                    $sqlResult = $condom->query($zapytanie2);


                    while ($wiersz = $sqlResult->fetch_assoc()) {
                        echo "<option>";
                        echo $wiersz["pochodzenie"];
                        echo "</option>";
                    };
                    ?>
                </select>
                <button type="submit">Szukaj</button>
            </form>


            <table>
                <tr>
                    <th>Nazwa</th>
                    <th>Długość</th>
                    <th>Szerokość</th>
                </tr>

                <?php
                if (!empty($_POST["kraj"])) {
                    $pochodzenie = $_POST["kraj"];
                    $zapytanie1 = "SELECT nazwa, dlugosc, szerokosc FROM smok WHERE pochodzenie = '$pochodzenie';";

                    $sqlResult2 = $condom->query($zapytanie1);

                    while ($wiersz = $sqlResult2->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $wiersz["nazwa"] . "</td>";
                        echo "<td>" . $wiersz["dlugosc"] . "</td>";
                        echo "<td>" . $wiersz["szerokosc"] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </section>
        <section id="opisy">
            <h3>Opisy smoków</h3>

            <dl>
                <dt>Smok czerwony</dt>
                <dd>
                    Pochodzi z Chin. Ma 1000 lat. Żywi się mniejszymi zwierzętami.
                    Posiada łuski cenne na rynkach wschodnich do wyrabiania lekarstw.
                    Jest dziki i groźny.
                </dd>

                <dt>Smok zielony</dt>
                <dd>
                    Pochodzi z Bułgarii. Ma 10000 lat. Żywi się mniejszymi zwierzętami,
                    ale tylko w kolorze zielonym. Jest kosmaty. Z sierści zgubionej przez niego,
                    tka się najdroższe materiały.
                </dd>

                <dt>Smok niebieski</dt>
                <dd>
                    Pochodzi z Francji. Ma 100 lat. Żywi się owocami morza.
                    Jest natchnieniem dla najlepszych malarzy. Często im pozuje.
                    Smok ten jest przyjacielem ludzi i czasami im pomaga.
                    Jest jednak próżny i nie lubi się przepracowywać.
                </dd>
            </dl>
        </section>

        <section id="galeria">
            <h3>Galeria</h3>
            <img src="smok1.JPG" alt="Smok czerwony">
            <img src="smok2.JPG" alt="Smok wielki">
            <img src="smok3.JPG" alt="Smok łaciaty">
        </section>
    </main>

    <footer>
        <p>Stronę opracował: niggaWarrior13</p>
    </footer>
    <script src="skrypt.js"></script>
</body>

</html>