# Procedural PHP : Conatcts Management App

### Install instructions
* database : contacts

### Test application
* Go to application dir with your terminal  to type these commands
* create database: ` mysql -u root -p -e "create database contacts" ` to create your database in the terminal
.You can use any other application you want
* Create application tables :
    * `php bin/migrate `
        * Choose 1 for create tables
        * choose 2 for create admin user
    * NB: You  can to just create table with `php bin/migrate migrate-tables`
* Now start application with command ` php -S 127.0.0.2:80 -t webroot `
* Launch application on URL `http://127.0.0.2`

Note: Use this code for **lean php coding**  or code a **demonstration application**


