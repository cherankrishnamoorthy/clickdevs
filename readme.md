1. Once you Vagrant up / setup the host - do the git clone - https://github.com/cherankrishnamoorthy/clickdevs.git
2. Rename the .env.example to .env and setup the mysql there.
3. Go to site root and - run php artisan db:migrate
4. Accesss the site  by / or /auth/register  and create a user account
5. Run php artisan db:seed
6. login tothe site via /auth/login 