- git remote remove origin
  - Comando per rimuovere l-attuale origine del progetto e poterlo associare ad una nuova repository

- Clone progetto
  - cp .env.example .env
  - composer i
  - modifichiamo il .env per aggiornare i dati relativi al db 
  - php artisan key:gen
  - php artisan migrate => lancia le migrazioni che creano le tabelle nel nostro db
  - npm i

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
  _ documentazione laravel