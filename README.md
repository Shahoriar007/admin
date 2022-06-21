# Inventiro App

### running instruction 

Step 1: Clone the repo <br>
Step 2: Start docker desktop app <br>
Step 3: cd to the project folder <br>
Step 4: Copy _.env.example_ to _.env_ <br>
Step 5: Install composer dependency and packages 
```shell
    composer install
```
Step 6: Run docker-compose with sail

```shell
    ./vendor/bin/sail up
```

Step 7: Migrate Database

```shell
    sail artisan migrate
```

Step 8: Run database seeder 

```shell
    sail artisan db:seed
```

Application will be start on http://127.0.0.1:8005 and phpmyadmin will start on http://127.0.0.1:8080.
Use *_root_* and *_password_* for phpmyadmin login credentials. <br>

_you can change app port and phpmyadmin port from .env *APP_PORT* and *PHPMYADMIN_PORT*_
