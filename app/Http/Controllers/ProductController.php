<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $productList = [
            ['slug' => 'ironman-action-figure',
            'pics' => 'ironman.jpg',
            'name' => 'IronMan Action Figure',
            'status' => 'SSR',
            'price' => 7982638
            ],
            ['slug' => 'ff7-cloud-action-figure',
            'pics' => 'ff_cloud.jpg',
            'name' => 'FF7 Cloud Action Figure',
            'status' => 'SR',
            'price' => 5067920
            ],
            ['slug' => 'dinosaurus-toy-kids',
            'pics' => 'dinosaurus.jpg',
            'name' => 'Dinosaurus Toy Kids',
            'status' => 'R',
            'price' => 491684
            ]
        ];

        return view('products')->with('products', $productList);
    }

    public function show($slug){
        $productList = [
            ['slug' => 'ironman-action-figure',
            'pics' => 'ironman.jpg',
            'name' => 'IronMan Action Figure',
            'status' => 'SSR',
            'price' => 7982638,
            'desc' => 'The figure stands at around 6-7 inches tall and has multiple articulation points, allowing for various poses and movements to be achieved. Some versions of the figure may also come with light-up features or sound effects, which enhance the interactive experience for collectors and fans.'
            ],
            ['slug' => 'ff7-cloud-action-figure',
            'pics' => 'ff_cloud.jpg',
            'name' => 'FF7 Cloud Action Figure',
            'status' => 'SR',
            'price' => 5067920,
            'desc' => 'The Final Fantasy Kai Play Arts Action Figure is a highly detailed and articulated action figure based on the characters from the popular Final Fantasy video game series. Produced by Square Enix, these figures are designed to bring the characters from the games to life in a physical form.'
            ],
            ['slug' => 'dinosaurus-toy-kids',
            'pics' => 'dinosaurus.jpg',
            'name' => 'Dinosaurus Toy Kids',
            'status' => 'R',
            'price' => 491684,
            'desc' => 'Dinosaur toys for kids are toys designed to resemble the prehistoric creatures that roamed the earth millions of years ago. These toys come in a variety of sizes, shapes, and colors, and are typically made of plastic or rubber materials that are safe for children to play with.'
            ]
        ];

        $detail_product = [];

        foreach ($productList as $p) {
            if ($p['slug'] === $slug) {
                $detail_product = $p;
            }
        }

        return view('detailProduct')->with('product', $detail_product);
    }

}
