Redovisning
====================================

Kmom01: PHP-baserade och MVC-inspirerade ramverk
------------------------------------

<strong>Vilken utvecklingsmiljö använder du?</strong>

Huvudsakligen använder jag en dator med Windows 8.1 och jobbar mot en Ubuntu server med LAMP installerat.
Jag skriver min kod i <em>Sublime Text</em>, laddar upp filer med <em>FileZilla</em> och hanterar Git repositories med <em>Git Bash</em>. Använder även <em>Git Bash</em> som generell terminal i Windows istället för cmd.
Jag debuggar mina webbsidor främst i <em>Chrome</em> men ibland även i <em>FireFox</em>.

<strong>Är du bekant med ramverk sedan tidigare?</strong>

Ja, jag har provat några php-ramverk tidigare, t.ex. <em>Laravel</em> och <em>CodeIgniter</em>.
Laravel är jag väldigt imponerad av då det är enkelt att komma igång med och har en logisk struktur.
Det finns gott om hjälpmedel och sättet man skriver koden på är riktigt snyggt och städat.
Phalcon har jag hört talas om men det har aldrig blivit av att jag har testat det.
Det verkar ha en stor fördel med sin prestanda vilket har blivit en viktig faktor i dagens webbappar.

<strong>Är du sedan tidigare bekant med de lite mer avancerade begrepp som introduceras?</strong>

Jodå det är jag, begrepp som t.ex. <em>namespaces</em> och <em>dependency injection</em> har jag hört talas om innan och har hyfsad koll på vad de innebär.
Gällande DI: när man vill unvivka att hårdkoda ett beroende, t.ex. till en databas, kan man skicka in databasobjektet i konstrukturn för klassen.
Namespaces har jag aldrig använt i praktiken men det är helt klart behövligt om man ska skriva kod som är kompatibel med externa paket eller ramverk.

<strong>Din uppfattning om Anax, och speciellt Anax-MVC?</strong>

Ramverket har helt klar en bra grund att stå på.
Jag hade dock gärna sett att strukturen var lite tydligare.
Exempelvis att man flyttar alla controllers till en controllers-mapp i `app/`.
Det hade blivit mycket snyggare.
Jag är lite osäker på hur <em>Models</em> kommer in i det hela men det visar sig kanske längre fram i kursen?
Sen blev jag lite förvirrad över `views/` då de egentligen inte innehåller alla html-delar utan de sätts ihop med det som finns i `theme/`.
Det kan vara praktiskt om man tänker sig ha en massa olika teman men annars hade det nog varit bättre att ha all html i `views/`.

<strong>Övrigt</strong>

Slutligen lade jag upp min me-sida på github: [https://github.com/adde/phpmvc](https://github.com/adde/phpmvc). Jag vet inte om hela kursen bygger på den här basen men om den gör det kan det kanske vara lämpligt att skapa en ny branch för varje moment i samma repository.