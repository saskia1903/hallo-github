<!DOCTYPE html>
<html lang="de">
    <?php include("head.php")?>
    
    <body>
        <div>
            <!--Das Navigatinsmenue-->
            <nav>
                <ul>
                    <li><a href="start.php">Quiz</a></li>
                    <li><a href="ergebnis_2WK.php">Auswertung</a></li>
                    <li><a href="quellen_2WK.html">Quellen</a></li>
                </ul>
            </nav>

            <!--Der Header-->
            <header>
                <h1>Wissensumfrage zum 2. Weltkrieg und zu Deutschland</h1>
                <p>Diese Umfrage dient dazu, ein wenig Allgmeinwissen aufzufrischen und auch zu erweitern.
                    Bitte genau lesen. Es können eine, mehrere oder auch alle Fragen richtig sein. </p>
            </header>

            <!--PHP Auswertung der Antworten, bezueglich der Richtigkeit und des Durchschnitts der richtig beantworteten Fragen-->
            <?php
                    // Verbindung zur Datenbank erstellen
                    $dbname = 'quiz';
                    $password = 'quiz';
                    $server = 'localhost';
                    $user = 'quiz';

                    $connection = mysqli_connect($server, $dbname, $user, $password) or die("Verbindung zur Datenbank kann nicht aufgebaut werden!");

                    //Auswertung der Frage
                    if(isset($_POST['submit']))
                    {
                        //Die Values der ausgewählten Radiobuttons werden in Variablen und zusätzlich in einem Array gespeichert
                        $antwort = array($_POST['antwort1'], $_POST['antwort2'], $_POST['antwort3'], $_POST['antwort4'], $_POST['antwort5'], $_POST['antwort6']);

                        $antwort1 = $antwort[0];
                        $antwort2 = $antwort[1];
                        $antwort3 = $antwort[2];
                        $antwort4 = $antwort[3];
                        $antwort5 = $antwort[4];
                        $antwort6 = $antwort[5];

                        //Datensatz wird vorbereitet
                        $insert = "INSERT INTO quizzer_datensaetze (Antwort1, Antwort2, Antwort3, Antwort4, Antwort5, Antwort6) 
                                    VALUES ('$antwort1','$antwort2','$antwort3','$antwort4','$antwort5','$antwort6')";
                        
                        //Datensatz wird an die Datenbank übergeben und dort gespeichert.
                        $insert = mysqli_query($connection, $insert) or die("Konnte nicht eingefügt werden");

                        //Antworten abgleichen
                        for($i = 0; $i < count($antwort); $i++)
                        {
                            if($antwort[$i] === "Silbermark" || $antwort[$i] === "Pilotin" || $antwort[$i] === "Anne Frank" || $antwort[$i] === "Mechanikerin" || $antwort[$i] === "Georgy Zhukov" || $antwort[$i] === "Schlacht am Chanassee")
                            {
                                // $fragenr = $i+1, um die entsprechende Spalte zu der bestimmten Frage abzufragen und Vorbereitung der Abfrage
                                $fragenr = $i+1;
                                $richtigeA_Anz = "SELECT richtig_beantwortet FROM quiz WHERE FrageNr = $fragenr";
                                
                                //Abfrage wird ausgeführt, die Abfrage wird als Wert in einem Array gespeichert (= eine Integer-Zahl), dieser wird dann um eins erhoeht
                                $ant = mysqli_query($connection, $richtigeA_Anz);
                                $ant = mysqli_fetch_row($ant);
                                $richtig = $ant[0]+1;

                                //Vorbereitung den neuen Wert der richtig beantworteten Fragen in die Datenbank zu schreiben und Ausfuehrung des Befehls
                                $insert = "UPDATE quiz SET richtig_beantwortet = '$richtig' WHERE FrageNr = $fragenr";
                                $insert = mysqli_query($connection, $insert);
                            }
                            else
                            {
                                // $fragenr = $i+1, um die entsprechende Spalte zu der bestimmten Frage abzufragen und Vorbereitung der Abfrage
                                $fragenr = $i+1;
                                $falschA_Anz = "SELECT falsch_beantwortet FROM quiz WHERE FrageNr = $fragenr";
                                
                                //Abfrage wird ausgeführt, die Abfrage wird als Wert in einem Array gespeichert (= eine Integer-Zahl), dieser wird dann um eins erhoeht
                                $ant = mysqli_query($connection, $falschA_Anz);
                                $ant = mysqli_fetch_row($ant);
                                $falsch = $ant[0]+1;

                                //Vorbereitung den neuen Wert der falsch beantworteten Fragen in die Datenbank zu schreiben und Ausfuehrung des Befehls
                                $insert = "UPDATE quiz SET falsch_beantwortet = '$falsch' WHERE FrageNr = $fragenr";
                                $insert = mysqli_query($connection, $insert);
                            }
                        }  
                    }

                    //Verbindung zur Datenbank wird geschlossen
                    $connection -> close();
                ?>

            <!--Die Fusszeile-->
            <?php include("footer.php")?>

        </div>
    </body>
</html>