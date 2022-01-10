<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
            'name'=>'LG mobile',
            'price'=>'200',
            'description'=>'A Smart Phone With 4Gb Ram and Much More Feature',
              'category'=>'mobile',
              'gallery'=>'https://www.clker.com/cliparts/d/9/5/9/12065615561523400124Muga_Mobile_Phone.svg.hi.png'
        ],
        [
            'name'=>'1100 mobile',
            'price'=>'100',
            'description'=>'A Smart Phone With 4Gb Ram and Much More Feature',
              'category'=>'mobile',
              'gallery'=>'https://media.sciencephoto.com/image/t3000362/800wm/T3000362-WAP_mobile_telephone.jpg'
        ],
        [
            'name'=>'iphon mobile',
            'price'=>'200',
            'description'=>'A Smart Phone With 4Gb Ram and Much More Feature',
              'category'=>'mobile',
              'gallery'=>'https://www.clker.com/cliparts/8/3/0/f/1269412051580799207mobile_001-hi.png'
              ]
              ,
               [
                    'name'=>'samsong tv',
                    'price'=>'200',
                    'description'=>'A Smart tv  hd  and Much More Feature',
                    'category'=>'tv',
                    'gallery'=>'https://cairosales.com/39635-thickbox_default/lg-refrigerator-437-liters-no-frost-digital-gn-h562hlhu.jpg'
              ]
              ,
              [
                  'name'=>'benq tv',
                  'price'=>'200',
                  'description'=>'A Smart tv  hd  and Much More Feature',
                    'category'=>'tv',
                    'gallery'=>'https://cairosales.com/39635-thickbox_default/lg-refrigerator-437-liters-no-frost-digital-gn-h562hlhu.jpg'
              ], [
                'name'=>'Refrigerator lg',
                'price'=>'200',
                'description'=>'A Smart tv  Much More Feature',
                  'category'=>'frigerator',
                  'gallery'=>'https://cairosales.com/39635-thickbox_default/lg-refrigerator-437-liters-no-frost-digital-gn-h562hlhu.jpg'
            ],
            [
                'name'=>'Refrigerator lg',
                'price'=>'200',
                'description'=>'A Smart Refrigerator  Much More Feature',
                  'category'=>'Refrigeratorv',
                  'gallery'=>'https://www.canadianappliance.ca/img/xxlarge/lg/french-door-freestanding-refrigerator/LFXS30766D-reviews.jpg'
            ]
            ]);
    }
}
