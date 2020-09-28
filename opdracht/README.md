# PHP-EXPERT Moduleopdracht

## Voetbalclub ASD `20

## Toelichting

De voetbalclub moet een administratiesysteem hebben van wie in welk team speelt maar ook of het lid betaald heeft of niet. Kortom een administratiesysteem voor leden. Daarnaast wil de club ook verschillende totaaloverzichten kunnen maken van de verschillende teams.

## Leerdoelen

> 1. [ ] Ik maak een applicatie om de leden administratie van de voetbalclub te kunnen beheren

## Opdracht

- Je mag gebruik maken van een CSS framework

### Database

- [x ] Maak een database: `voetbalclubASD`

- [ x] Maak een database tabel: `gebruikers`
- [x ] Maak de volgende _kolommen_ aan:
      - id (int:11)
      - voornaam (varchar:100)
      - achternaam (varchar:100)
      - email (varchar:200)
      - wachtwoord (varchar:60)
      - team (int:3)
      - contributie (int:1)
- [x ] Zet gegevens in deze tabel.

- [x ] Maak nog een tabel: `teams`
- [x ] Maak de volgende _kolommen_ aan:
  - id (int:11)
  - naam (varchar:100)
- [ x] Zet zelf bedachte gegevens in deze tabel.

- [x ] Maak een database bestand: db.conn.php
- [ x] Maak een pagina om alle leden te kunnen tonen (overzichtspagina met een tabel)
- [ x] Maak een pagina om teams te kunnen bekijken   (overzichtspagina met een tabel)
- [ x] Maak een pagina om de gegevens van een enkele gebruiker te kunnen tonen (overzicht van een enkele rij)
- [ ] Maak een pagina om de gegevens van een enkel team te kunnen tonen       (overzicht van een enkele rij)
- [ ] Maak op elke regel van de eerder gemaakte tabellen een link waarmee je de rij kunt verwijderen
- [ ] Maak een nog link op de gegenereerde rijen om naar een aparte pagina te gaan om deze data te kunnen updaten.

## Eindresultaat

Het eindresultaat is een volledig werkende webapplicatie die de overzichten van `teams` en van `gebruikers` kan tonen. Daarnaast ook de _profiel_ pagina's van individuele entiteiten.

## Bronnen

Een lijstje van links naar externe bronnen

> Bijvoorbeeld:  
> [W3 Schools - PHP Functions](https://www.w3schools.com/php/php_functions.asp)  
> [Jaap van der Veen - PHP Basiscursus Les3: Functies](https://phpbasis.jaapvdveen.nl/basiscursus-php/les-3-inleiding-functies/)
