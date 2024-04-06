<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Faker\Factory as Faker;

$faker = Faker::create();
$table = new UsersTable(new MySQL);

echo "Data sample inserting......<br>";
for($i=0; $i<20; $i++) {
    $table->insert([
        "name" => $faker->name,
        "email" => $faker->email,
        "phone" => $faker->phoneNumber,
        "address" => $faker->address,
        "password" => "password",
    ]);
}
echo "Done";


$password = "apple";
$hash = password_hash($password, [PASSWORD_DEFAULT]);

if(password_verify("apple", $hash)) {
    echo "Correct password";
} else {
    echo "incorrect password !!!";
}


