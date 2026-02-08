1-Prerequisiti:

-PHP (versione 8.4.12).

-Composer (gestore di dipendenze PHP).

-Symfony CLI (lo strumento da riga di comando ufficiale di Symfony).

-MariaDb versione (12.0 o successive)

-Docker dekstop

2-Clonare il repository

Apri il terminale e naviga nella cartella dove vuoi clonare il progetto. Esegui il comando seguente per clonare il repository:

git clone https://github.com/matteo318/Prova-Symfony.git

3-Installazione dipendenze:

Nella cartella del progetto usare il comando "composer install" all'interno del terminale per installare le dipendenze

4-Configurazione del File .env

Nel file .env DATABASE_URL è configurato per usare MariaDb

5-Avviare docker

Aprire docker dekstop e usare il camando docker compose up -d (-d avvia i servizi in backround)

6-Creazione migrazioni:

docker exec -it symfony_php php bin/console doctrine:migrations:migrate

7-Per accedere all'applicazione

http://localhost

Importazione Database(dump.sql)

1-Assicurati che i container siano in esecuzione con:

docker compose up -d


2-Importa il dump nel database MariaDB:

docker exec -i symfony_mariadb mysql -u user -ppassword symfony < dump.sql


3-Verifica l'importazione entrando nel container MariaDB:

docker exec -it symfony_mariadb
mysql -u user -ppassword symfony

 




