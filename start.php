<!DOCTYPE html>
<html lang="de">
    <!--Der Head steht in der Datei head.php-->
    <head>
        <?php include("head.php")?>
        <link rel="stylesheet" href="start.css">
    </head>
    
    <body>
        <div id="wrapper">
            <!--Das Navigatinsmenue-->
            <nav>
                <ul>
                    <li class="hier"><a href="start.php">Quiz</a></li>
                    <li><a href="auswertung.php">Auswertung</a></li>
                </ul>
            </nav>

            <!--Der Header-->
            <header>
                <h1>Wissensumfrage zum 2. Weltkrieg und zu Deutschland</h1>
            </header>

            <!--Die Fragen-->
            <form action="auswertung.php" method="POST">
                <!--Frage 1-->
                <section class="section">
                    <div class="question">1.</div>
                    <article class="frage"> 
                        <h4>Welche dieser Währungen wurden nicht durch Währungsreformen seit der Reichsgründung 1871 in Deutschland eingeführt?</h4> 
                        <input class="f" type="radio" name="antwort1" value="Rentenmark"> Rentenmark <br>
                        <input class="f" type="radio" name="antwort1" value="Goldmark"> Goldmark <br>
                        <input class="f" type="radio" name="antwort1" value="Reichsmark"> Papiermark <br>
                        <input class="t" type="radio" name="antwort1" value="Silbermark"> Silbermark <br>
                    </article>
                </section>

                <!--Frage 2-->
                <section class="section">
                    <div class="question">2.</div>
                    <article class="frage"> 
                        <h4>Die Geschäftsfrau Beate Uhse, die 1962 den ersten Sexshop der Welt eröffnete, führte während des 2. Weltkriegs welche berufliche Tätigkeit aus?</h4> 
                        <input class="f" type="radio" name="antwort2" value="Einzelhandelskauffrau"> Einzelhandelskauffrau <br>
                        <input class="f" type="radio" name="antwort2" value="Schiffsmechanikerin"> Schiffsmechanikerin <br>
                        <input class="t" type="radio" name="antwort2" value="Pilotin"> Pilotin <br>
                        <input class="f" type="radio" name="antwort2" value="Musik-Lehrerin"> Musik-Lehrerin <br>
                    </article>
                </section>

                <!--Frage 3-->
                <section class="section">
                    <div class="question">3.</div>
                    <article class="frage"> 
                        <h4>Wer schrieb ein heutzutage sehr bekanntes Buch zu Zeiten des 2. Weltkriegs zwischen 1942 und 1944 selbst?</h4>
                        <input class="t" type="radio" name="antwort3" value="Anne Frank"> Anne Frank <br>
                        <input class="f" type="radio" name="antwort3" value="Judith Kehr"> Judith Kehr <br>
                        <input class="f" type="radio" name="antwort3" value="Adolf Hitler"> Adolf Hitler <br>
                        <input class="f" type="radio" name="antwort3" value="Albert Einstein"> Albert Einstein <br>
                    </article>
                </section>

                <!--Frage 4-->
                <section class="section">
                    <div class="question">4.</div>
                    <article class="frage"> 
                        <h4>Welchen Beruf oder welche Berufe übte die heutige Queen Elizabetz II. von Großbritannien zur Zeit des 2. Weltkriegs aus?</h4> 
                        <input class="f" type="radio" name="antwort4" value="Prinzessin"> Prinzessin <br>
                        <input class="f" type="radio" name="antwort4" value="Königin"> Königin <br>
                        <input class="t" type="radio" name="antwort4" value="Mechanikerin"> Mechanikerin <br>
                        <input class="f" type="radio" name="antwort4" value="Physikerin"> Physikerin <br>
                    </article>
                </section>              

                <!--Frage 5-->
                <section class="section">
                    <div class="question">5.</div>
                    <article class="frage"> 
                        <h4>Wer war der erfolgreichste Kommandant der Sowjetischen Armee, der in der Nacht zum 09. Mai 1945 die bedingungslose Kapitulation der deutschen Wehrmacht entgegennahm?</h4> 
                        <input class="f" type="radio" name="antwort5" value="Leo Trotzki"> Leo Trotzki<br>
                        <input class="f" type="radio" name="antwort5" value="Josef Stalin"> Josef Stalin<br>
                        <input class="t" type="radio" name="antwort5" value="Georgy Zhukov"> Georgy Zhukov <br>
                        <input class="f" type="radio" name="antwort5" value="Michail Nitschstin"> Michail Mischustin <br>
                    </article>
                </section>

                <!--Frage 6-->
                <section class="section">
                    <div class="question">6.</div>
                    <article class="frage"> 
                        <h4>Welcher Vorfall hat Zweiten Japanisch-Chinsesichen Krieg am 07. Juli 1937, der mit dem 2. Weltkrieg am 09. September 1945 endete ausgelöst?</h4> 
                        <input class="f" type="radio" name="antwort6" value="Schlacht am Chanassee"> Schlacht am Chanassee <br>
                        <input class="t" type="radio" name="antwort6" value="Kampf an der Marco Polo Brücke"> Kampf an der Marco Polo Brücke <br>
                        <input class="f" type="radio" name="antwort6" value="Fall von Nanjing"> Fall von Nanjing <br>
                        <input class="f" type="radio" name="antwort6" value="Krieg an der Chinesischen Mauer"> Krieg an der chinesischen Mauer <br>                            
                    </article>
                </section>

                <div class="button">
                    <input class="input" type="submit" value="auswertung"> <br>
                </div>
            </form>

            <!--Die Fusszeile-->
            <?php include("footer.php")?>

        </div>
    </body>
</html>