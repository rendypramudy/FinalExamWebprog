<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU',
                'name' => 'Sayuran 1',
                'price' => '7000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui a consequuntur fuga quod iure voluptates ullam nemo earum eligendi, minus, corrupti laudantium, ea asperiores dolores ab repellendus enim obcaecati iusto! ',
            ],
            [
                'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU',
                'name' => 'Sayuran 2',
                'price' => '7000',
                'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis eos aliquam expedita nisi porro nesciunt cum ipsam fugit blanditiis unde aliquid earum explicabo tempore voluptatibus, asperiores temporibus assumenda aperiam deleniti? ',
            ],
            [
                'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU',
                'name' => 'Sayuran 3',
                'price' => '7000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui a consequuntur fuga quod iure voluptates ullam nemo earum eligendi, minus, corrupti laudantium, ea asperiores dolores ab repellendus enim obcaecati iusto! ',
            ],
            [
                'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU',
                'name' => 'Sayuran 4',
                'price' => '7000',
                'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis eos aliquam expedita nisi porro nesciunt cum ipsam fugit blanditiis unde aliquid earum explicabo tempore voluptatibus, asperiores temporibus assumenda aperiam deleniti? ',
            ],
            [
                'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU',
                'name' => 'Sayuran 5',
                'price' => '7000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui a consequuntur fuga quod iure voluptates ullam nemo earum eligendi, minus, corrupti laudantium, ea asperiores dolores ab repellendus enim obcaecati iusto! ',
            ],
            [
                'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU',
                'name' => 'Sayuran 6',
                'price' => '7000',
                'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis eos aliquam expedita nisi porro nesciunt cum ipsam fugit blanditiis unde aliquid earum explicabo tempore voluptatibus, asperiores temporibus assumenda aperiam deleniti? ',
            ],
            [
                'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU',
                'name' => 'Sayuran 7',
                'price' => '7000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui a consequuntur fuga quod iure voluptates ullam nemo earum eligendi, minus, corrupti laudantium, ea asperiores dolores ab repellendus enim obcaecati iusto! ',
            ],
            [
                'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU',
                'name' => 'Sayuran 8',
                'price' => '7000',
                'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis eos aliquam expedita nisi porro nesciunt cum ipsam fugit blanditiis unde aliquid earum explicabo tempore voluptatibus, asperiores temporibus assumenda aperiam deleniti? ',
            ],
            [
                'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU',
                'name' => 'Sayuran 9',
                'price' => '7000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui a consequuntur fuga quod iure voluptates ullam nemo earum eligendi, minus, corrupti laudantium, ea asperiores dolores ab repellendus enim obcaecati iusto! ',
            ],
            [
                'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU',
                'name' => 'Sayuran 10',
                'price' => '7000',
                'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis eos aliquam expedita nisi porro nesciunt cum ipsam fugit blanditiis unde aliquid earum explicabo tempore voluptatibus, asperiores temporibus assumenda aperiam deleniti? ',
            ],
            ]);
    }
}
