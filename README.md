1-Prerequisiti:

-PHP (versione 8.4.12).

-Composer (gestore di dipendenze PHP).

-Symfony CLI (lo strumento da riga di comando ufficiale di Symfony).

2-Installazione dipendenze:

Nella cartella del progetto usare il comando "composer install" all'interno del terminale per installare le dipendenze

3-Configurazione del File .env

Nel file .env DATABASE_URL è configurato per usare SQLite

4-Creazione migrazioni:

php bin/console doctrine:migrations:migrate
 
 
5-Avviare server locale

Nella cartella del progetto usare il comando "symfony serve" all'interno del terminale per avviare il server




