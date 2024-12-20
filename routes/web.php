<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // composer install
    // cp .env.example .env
    // php artisan key:generate
    // php artisan migrate
    // php artisan db:seed
    //No 1.
    //tables User, Role, UserRole
    // display [
    //     [id] => 1,
    //     [name] => Alice,
    //     [roles] => [,
    //             [0] => 'Administrator',
    //             [1] => 'Content Editor',
    //         ],
    //     [id] => 2,
    //     [name] => John,
    //     [roles] => [,
    //             [0] => 'Administrator',
    //             [1] => 'Content Editor',
    //         ],
    //...
    // ]
    dump(
        User::all()
    );

    //NO 2. 
    // insert into user_description (id, user_id, name, role_ids, role_names) values (1, 1, 'Alice', [1, 2], ['Administrator', 'Content Editor']);

});
