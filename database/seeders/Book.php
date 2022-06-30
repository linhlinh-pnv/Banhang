<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Book extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title'=>"Giáo án",
                'author'=>"mr.Đình",
                'numberpage'=>300,
                'category_id'=>1,
                'public_date'=>"2022/06/20",
                'price'=>10000000,
                'image'=>"https://khasasco.com.vn/wp-content/uploads/2022/05/hinh-chibi-cute-de-ve.jpg",
                'discription'=>"tuyệt",
            ],
            [   
                'title'=>"Truyện tranh",
                'author'=>"LinhLinh",
                'numberpage'=>200,
                'category_id'=>2,
                'public_date'=>"2022/06/20",
                'price'=>20000000,
                'image'=>"https://khasasco.com.vn/wp-content/uploads/2022/05/hinh-chibi-cute-de-ve.jpg",
                'discription'=>"tuyệt",
            ],
        ]);
        
    }

}
