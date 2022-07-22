# BIT SPRINT 9 TRAVEL CRUD BACKEND PART

An application was made for learning purposes. This is backend part.

### About project

* This application was developed with:
    - backend part: PHP **Laravel** framework,
    - frontend part: JavaScript **React** library.
    
* Styling was made with CSS and Bootstrap. 

* For database I was using MySQL Workbench.

* In this application you can:
    - add new country, town or customer,
    - edit country, town or customer,
    - delete country, town or customer.

### Launch procedure

1. For this project you need to clone backend part as well. You can find it right here: https://github.com/giedrebi/bit-sprint-9-travel-crud-frontend.git

2.  To install this project you need to have GIT BASH, XAMPP, Composer and MySQL Workbench.

3. In XAMPP folder you need to navigate to folder `htdocs`.

4. Then you need to clone repository. Copy link of repository:

https://github.com/giedrebi/BIT_SPRINT_9_TRAVEL_CRUD_backend.git

5. Open GIT BASH in `htdocs` folder.

6. Type `git clone`, then paste the URL you copied earlier and press Enter to create your local clone:

`$ git clone https://github.com/giedrebi/BIT_SPRINT_9_TRAVEL_CRUD_backend.git` 

7. Open MySQL Workbench and create database named `travelsite`.  

8. Open your project in VSCode.

9. Start "Apache" and "MySQL" servers in "XAMMP".

10. Open terminal and type:

`$ php <path there is your composer>/composer.phar install`

11. Then in your cloned project find `.env.example` file, copy and change it to `.env`.

12. Open `.env` file, find database line and change it to created database:

 `DB_DATABASE=travelsite`

 13. Now run migrations and seeders by typing in terminal:

`$ php artisan migrate`
`$ php artisan db:seed`

14. Run application by typing in terminal:

`$ php artisan serve`

### Author

This project was created by me [Giedre Bielske](https://giedrebi.github.io/)

As well, you can find me in [LinkedIn](https://www.linkedin.com/in/giedr%C4%97-bielsk%C4%97-1a8996107/)