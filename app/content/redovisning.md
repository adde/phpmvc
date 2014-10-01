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



Kmom02: Kontroller och modeller
------------------------------------

<strong>Hur känns det att jobba med Composer?</strong>

<em>Composer</em> hade jag installerat sedan tidigare så det var bara att tuta och köra.
Det är ett smidigt verktyg för att dra in diverse paket i sitt projekt.
Det enda man behöver hålla koll på är `composer.json` och se till att inkludera composers autoloader så sköter det sig självt.
<em>Composer</em> i sig är väldigt enkelt att använda, det gäller bara att veta vilka paket man ska installera.

<strong>Vad tror du om de paket som finns i Packagist, är det något du kan tänka dig att använda och hittade du något spännande att inkludera i ditt ramverk?</strong>

Det finns en hel del paket på <em>Packagist</em>, man behöver som sagt veta lite vad man är ute efter.
Jag har ingen aning om kvaliteten på paketen som ligger uppe men en metod som brukar fungera är att sortera efter popläritet.
Spontant har jag inte hittat något på <em>Packagist</em> som jag skulle behöva.
Jag skulle dock kunna tänka mig att installera Laravels ORM-modul <em>Eloquent</em>. Ett trevligt paket för att hantera objektrelaterade databaser.

<strong>Hur var begreppen att förstå med klasser som kontroller som tjänster som dispatchas, fick du ihop allt?</strong>

Jag måste erkänna att det var lite rörigt till en början men efter att ha läst guiden några gånger fick jag ordning på det.
Det kändes bara en aning konstigt att ha kontroller lite var som helst och att de var tvungna att registreras som tjänster i `CDIFactoryDefault.php`.
Med andra ramverk är man van vid att skapa kontrollern i en viss mapp, sedan registrera en route som pekar på den kontrollern och så fungerar allt.
Det går ju helt klart bra så här också, det blir möjligtvis en aning mer flexibelt.

<strong>Hittade du svagheter i koden som följde med phpmvc/comment? Kunde du förbättra något?</strong>

Jag hittade inget direkt fel i koden som jag behövde fixa.
Man kan kanske lägga in lite fler och bättre felkontroller av data vid add/update/delete av kommentarer.
Sedan hade man självklart kunnat lägga till kod för att hindra spam men det blir ju inte aktuellt förrän en databas är inblandad.
Inom tidsramen för det här momentet kändes det lagom med kraven för kommentarsystemet.
Fokus låg ju trots allt på att få ihop kontroller och modeller.

<strong>Övrigt</strong>

När jag väl hade kommit underfund med hur det fungerar med DI-Factoryn, Dispatchern i relation till kontrollerna var det inga problem att lägga till de nya metoder som behövdes för edit och remove.
Ändrade lite grand i formulären för att kunna formatera kommentarerna med CSS. Sedan lade jag till knappar för edit och delete som pekar på kontrollerns actions.
Jag gjorde inga drastiska ändringar i CSS:n men snyggade till formulärfälten en aning då standardfälten är rätt så tråkiga.

För att få till unika kommentarer per sida valde jag att använda sidans adress som nyckel i sessionen.
Eftersom man kan lägga till eller ta bort ett slash i url:n valde jag att alltid trimma bort ett eventuellt slash innan man använder strängen.
Då blir det en aning stabilare.
<em>Disqus</em> använder sig i och för sig också av url (tillsammans med ett par andra parametrar) för att identifiera rätt tråd för rätt sida så det bör ju vara en beprövad metod.