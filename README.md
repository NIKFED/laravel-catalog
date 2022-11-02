## Laravel Catalog

- install composer dependencies
  ```composer i```
- enable docker
- start sail
  ```./vendor/bin/sail up -d```
- make migrations
  ```./vendor/bin/sail artisan migrate```
- seed db
  ```./vendor/bin/sail artisan db:seed```
- generate api documentation
  ```./vendor/bin/sail artisan l5-swagger:generate```

host: [localhost](http://localhost)

documentation: [documentation](http://localhost/api/documentation)
