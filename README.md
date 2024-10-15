# registratie-applicatie

## Introductie
Gedurende dit project hebben wij gewerkt aan een registratie applicatie. Het doel van de applicatie is dat je Fieldlab projecten kan inleveren en dat docenten die kunnen goedkeuren of afkeuren. 

## Teamleden👥️
- Abbi Sinnathamby [github](https://github.com/Abbi159357)
- Chris Groen [github](https://github.com/166389)
- Bruno Dijkhuis [github](https://github.com/Bruntho2802)

## Hoe start je deze applicatie op?
 1. Ga naar deze link en clone de applicatie: https://github.com/horizoncollege/registratie-applicatie+
 2. Navigeer naar de source map
 3. Open je terminal in deze src map. Vul het volgende commando in:
   ```
   composer update
   ```
 4. Kopieer de .env-example en hernoem deze naar .env
 5. In de nieuwe aangemaakte .env file uncomment je het alles van het blokje "DB_CONNECTION". Verander/vul hier gelijk je eigen gegevens in.
 6. Open opnieuw een terminal in de src map. Vul nu het volgende commando in:
   ```
   docker-compose up -d --build
   ````
 7. In dezelfde src map vul je het volgende commando in:
   ```
   php artisan key:generate
   ```
8. Als laatste voer je nog een commando in de src map:
   ```
   php artisan migrate
   ```
   Als gevolg zou er nu een vraag gesteld moeten worden. Beantwoord deze vraag met "Yes"

   Als alles correct is ingevuld werkt de applicatie nu.

  


