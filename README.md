# ls_networks
small social network API's 

After cloning the project from developer branch you just need to do 4 little things and those are:

1. Run "composer update" command as we don't upload vendor folder to git.
2. Create a databse named "lsnetworks".
3. Run "php artisan migrate" command and it will generate all datatables that we need.
4. Run "php artisan db:seed" command for generating required records in datatables so that you can save your time when testing.


After doing all of those the project will be ready for testing. In the main project folder you will found a postman collection called "LS NETWORK.postman_collection.json" for testing api's easily.
