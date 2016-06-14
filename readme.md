To install locally, pease follow these instructions:

1. Clone repo locally.
2. Set up on Homestead
3. Set up database credentials
4. Run the migration

        php artisan migrate

5. Run the database seeder

        php artisan db:seed

6. Run factory seeder for testing (Optional)

        php artisan tinker
        faker('App\User', 20)->create()
