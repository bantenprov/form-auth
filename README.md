# form-auth
form-auth


### Install via composer 

```bash
$ composer require bantenprov/form-auth:dev-master
```

### Edit `config/app.php`

```php

'providers' => [

    //......
    Bantenprov\FormAuth\FormAuthServiceProvider::class,

```

### artisan command

```bash

$ php artisan vendor:publish --tag=form-auth-assets && php artisan migrate

```

```bash

$ php artisan form-auth:setup

```

### edit `app/User.php`

```php
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'photo_url',

        //=========
        'redirect',
    ];

    /* .................. */

    /**
     * Get the redirect attribute.
     *
     * @return string
     */
    public function getRedirectAttribute()
    {
        return 'pendaftaran-wizard';
    }
```

### edit `.evn`

```php

DEFAULT_USER_ROLE=siswa

```

### add new role 

### Vue trust > Role > [+]
```
+-------+--------------+
|  name | display name |
+-------+--------------+
| siswa |     Siswa    |
+-------+--------------+
```