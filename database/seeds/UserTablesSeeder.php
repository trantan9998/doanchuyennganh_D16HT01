<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'hovaten' =>'Hoàng Phúc',
            'diachi' =>'binhduong',
            'sdt' =>'09876522',
            'email' =>'phuc@gmail.com',
            'matkhau' =>Hash::make ('12345'),
        ]);

    }
}
