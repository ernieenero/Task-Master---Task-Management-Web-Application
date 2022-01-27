// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    
        User::create(array(
            'name' => 'Ernesto Enero',
            'email'=> 'ernieenero@gmail.com',
            'password'=> Hash::make('HULAANMO'),
        ));
    }
}
