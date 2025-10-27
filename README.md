1-Prerequisiti:

-PHP (versione 8.4.12).

-Composer (gestore di dipendenze PHP).

-Symfony CLI (lo strumento da riga di comando ufficiale di Symfony).

-MariaDb versione (12.0 o successive)

-Docker dekstop

2-Installazione dipendenze:

Nella cartella del progetto usare il comando "composer install" all'interno del terminale per installare le dipendenze

3-Configurazione del File .env

Nel file .env DATABASE_URL è configurato per usare MariaDb

4-Creazione migrazioni:

php bin/console doctrine:migrations:migrate

5-Avviare docker

Aprire docker dekstop e usare il camando docker compose -f compose up -d (-d avvia i srvizi in backround)
 
 




