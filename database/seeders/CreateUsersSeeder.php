<?php
  
use Illuminate\Database\Seeder;
use App\Models\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
               'password'=> bcrypt('admin'),
            ],
            [
               'name'=>'User',
               'email'=>'sajid@gmail.com',
               'password'=> bcrypt('sajid'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}