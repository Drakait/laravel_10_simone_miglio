- git remote remove origin
  - Comando per rimuovere l-attuale origine del progetto e poterlo associare ad una nuova repository

- Clone progetto
  - cp .env.example .env
  - composer i
  - modifichiamo il .env per aggiornare i dati relativi al db 
  - php artisan key:gen
  - php artisan migrate => lancia le migrazioni che creano le tabelle nel nostro db
  - npm i
  - se un progetto gestisce immagini caricate , dopo il git clone serve anche php artisan storage:link e copiare manualmente il contenuto di storage/app/public

# Storage 
- la memoria adibita a contenere i media del nostro progetto (img , video, file , etc)
- Locale o Esterno
  - Un servizio famoso esterno è S3 di AWS
  
# Validation
- php artisan make:request NomeRequest
  - Crea una nuova request che può essere customizzata 
  - in authorize si cambia il return in true per far si che venga utilizzata
  - in rules c'è un array chiave valore, la chiave sarà il campo input da validare, il valore la regola che vuoi validare

- Display Errors 
 - documentazione laravel utilizzato errors

- List Validation errors 
  - documentazione laravel



# Fortify

- E' un pacchetto (libreria) first party di Laravel che serve a gestire l'autenticazione
 - Per autenticazione intendiamo un sistema di accesso e registrazione al nostro sito

- Installazione => Seguiremo tutti procedimenti passo passo (doc laravel Fortify)
 - composer require laravel/fortify
  - installazione delle dipendenze PHP
- php artisan fortify:install 
 - abbiamo reso disponibile al nostro progetto dei file di configurazione e delle lofiche di Fortify per poter effettuare delle modifiche al comportamento di base di Fortify
- php artisan migrate 
 - per lanciare la nuova migrazione che il comando precedente ci ha pubblicato

- Regsitrazione
 - Andiamo a definire nel FortifyServiceProvider la logica per poter visualizzare il form di registrazione 
 - Copiamo la logica del nostro link (boots)
 - Creaimo la cartella auth con dentro il file register.blade.php

- Utilizziamo il comando php artisan route:list per vedere le rotte del nostro progetto e recuperare quelle di Fortify

- Logout 
 - Utilizziamo la rotta POST fornita da Fortify per creare un form che mi permetta di scollegare la sessione dell'utente registrato

 - Accesso (Login)
  - Andiamo a definire nel FortifyServiceProvider la logica per poter visualizzare il form di accesso 
   - Copiamo la logica del nostro link documentazione (boots)
   - Creaimo la cartella auth con dentro il file login.blade.php

# Middleware

- i middleware sono delle logiche che io scelgo di interporre a determinate richieste
 - 'auth' è l'alias del middleware che controlla se l'utente è autenticato
 

# CRUD 

C - Create
R - Read
U - Update
D - Delete

Sono le 4 operazioni di base che si possono effettuare in un Database



# laravel_10_simone_miglio
