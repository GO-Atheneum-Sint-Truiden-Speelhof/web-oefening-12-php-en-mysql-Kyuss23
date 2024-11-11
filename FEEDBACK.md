# Feedback #
## De opdrachten ##
| Opdracht | Goed (5) | Voldoende (3) | Onvoldoende (1) | Niet (0) | Score (35) |
| :------- | :---: | :---------: | :-----------: | :----: |---:|
| De leerling voorziet een startpagina waar de gebruiker moet akkoord gaan met het gebruik van cookies. De leerling start een cookie. | X | | | |5 |
| De leerling maakt een inschrijvingsformulier en kan dit uitlezen.  | X| | | | 5|
| De leerling bewaart de gegevens in een databank.  | X | | | | 5|
| De leerling kan de gegevens uitlezen uit de databank en tonen in een tabel of lijst.  | X | | | | 5|
| De leerling voorziet een loginpagina die een gebruiker en paswoord controleert in de databank. | X | | | | 5|
| De leerling voorziet paswoord-hashing om het paswoord veilig te bewaren.  | | | | X | 0|
| De leerling zorgt dat enkel een ingelogde persoon de lijst met gegevens kan bekijken. | | X | | |3 |
||||||28|


## Algemene feedback ##
* menu.php (2): Goed gevonden!
* menu.php (29): Het **endif** statement is al verouderd sinds PHP 4.0.0. Wij gebruiken steeds { } om blokken code te groeperen.
* function.php (50): Je voorziet geen beveiliging tegen SQL-injectie noch een paswoord-hash.
* inschrijvingen.php: Je voorziet geen controle om zeker te zijn dat er een ingelogde gebruiker is. Iedereen die de juiste link kent kan dus altijd de lijst bekijken.

Je behaalde een score van __28/35__
