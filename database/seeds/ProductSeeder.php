<?php

namespace App;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Apple iPhone 6S 64GB SILVER GREY',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 699.99,
            'brand' => 'Apple',
            'color' => 'Sivá',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Lenovo A6 Note black',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 159.99,
            'brand' => 'Lenovo',
            'color' => 'Čierna',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S7 edge',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 499.99,
            'brand' => 'Samsung',
            'color' => 'Sivá',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Xiaomi Mi 9 6GB/128GB Dual Sim',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 99.99,
            'brand' => 'Xiaomi',
            'color' => 'Čierna',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Samsung Galaxy Star Advance',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 699.99,
            'brand' => 'Samsung',
            'color' => 'Čierna',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Xiaomi Mi 9T Pro 8GB RAM',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 699.99,
            'brand' => 'Xiaomi',
            'color' => 'Čierna',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Apple iPhone 7S 64GB SILVER GREY',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 1001.99,
            'brand' => 'Apple',
            'color' => 'Sivá',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Lenovo A47 black',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 259.99,
            'brand' => 'Lenovo',
            'color' => 'Čierna',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S8 edge',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 55.99,
            'brand' => 'Samsung',
            'color' => 'Biela',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Xiaomi Mi 10 Dual Sim',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 99.99,
            'brand' => 'Xiaomi',
            'color' => 'Modrá',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Samsung Galaxy Moon Advance',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 317.99,
            'brand' => 'Samsung',
            'color' => 'Čierna',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Land Rover Mi Pro 8GB RAM',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 254.99,
            'brand' => 'Land Rover',
            'color' => 'Čierna',
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Apple iPhone 5S 64GB SILVER GREY',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 699.99,
            'brand' => 'Apple',
            'color' => 'Sivá',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Lenovo A6 Note Blue',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 159.99,
            'brand' => 'Lenovo',
            'color' => 'Modrá',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Apple iPhone 5 16GB ',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 200.99,
            'brand' => 'Apple',
            'color' => 'Sivá',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Lenovo A6 Note Blue',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 159.99,
            'brand' => 'Lenovo',
            'color' => 'Modrá',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S4 Edge',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 199.99,
            'brand' => 'Samsung',
            'color' => 'Sivá',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Xiaomi Mi 5 Dual Sim',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 99.99,
            'brand' => 'Xiaomi',
            'color' => 'Čierna',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Samsung Galaxy Star Advance',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 699.99,
            'brand' => 'Samsung',
            'color' => 'Čierna',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Xiaomi Mi 9T Pro 8GB RAM',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 699.99,
            'brand' => 'Xiaomi',
            'color' => 'Čierna',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Apple iPhone X 128GB',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 1101.99,
            'brand' => 'Apple',
            'color' => 'Čierna',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Lenovo A27 Black ',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 259.99,
            'brand' => 'Lenovo',
            'color' => 'Čierna',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S2 edge',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 55.99,
            'brand' => 'Samsung',
            'color' => 'Čierna',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Xiaomi Mi 10 Dual Sim White',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 99.99,
            'brand' => 'Xiaomi',
            'color' => 'Biela',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Samsung Galaxy Moon Advance White',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 317.99,
            'brand' => 'Samsung',
            'color' => 'Biela',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Land Rover Mi Pro 16GB RAM',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 454.99,
            'brand' => 'Land Rover',
            'color' => 'Čierna',
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Apple iPhone 4S 64GB SILVER GREY',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 299.99,
            'brand' => 'Apple',
            'color' => 'Sivá',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Lenovo A6 Note White',
            'description' => 'Nástupca minuloročného tabletofónu dostal výkonnejší procesor Apple A9, 5,5 Full HD displej s technológiou 3D Touch, \n 12 Mpix fotoaparát s optickou stabilizáciou obrazu a nahrávaním 4K videí a vylepšenou 5 Mpix prednou kamerou.
            Základné parametre: Operačný systém iOS 9, procesor dvojjadrový, M9 motion coprocessor, rozmery 138 x 67 x 7,1 mm,
            hmotnosť 143 gramov, displej LCD IPS, Retina HD, dotykový (kapacitný), 16 mil. farieb, 750 x 1 334 b., 326 ppi, 4,7 (119 mm),
            fotoaparát: 12 Mpix (4:3), dvojfarebný LED blesk, predná kamera: 5 Mpix (4:3), HD video, clona f/2.2, pamäť 64 GB + 2 GB RAM,
            čítačka odtlačkov, batéria 1715 mAh.',
            'price' => 259.99,
            'brand' => 'Lenovo',
            'color' => 'Biela',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Lenovo IdeaPad Gaming 3 15IMH05 Onyx Black',
            'description' => 'Herný notebook – Intel Core i7 10750H Comet Lake, 15.6" IPS antireflexný 1920 × 1080 120Hz, RAM 16GB DDR4, NVIDIA GeForce GTX 1650 Ti 4GB, SSD 512GB, numerická klávesnica, podsvietená klávesnica, webkamera, USB 3.2 Gen 1, USB-C, WiFi 802.11ac, 45 Wh batéria, bez operačného systému',
            'price' => 1099.99,
            'brand' => 'Lenovo',
            'color' => 'Čierna',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Macbook Pro 16" US',
            'description' => 'Herný notebook – Intel Core i7 10750H Comet Lake, 15.6" IPS antireflexný 1920 × 1080 120Hz, RAM 16GB DDR4, NVIDIA GeForce GTX 1650 Ti 4GB, SSD 512GB, numerická klávesnica, podsvietená klávesnica, webkamera, USB 3.2 Gen 1, USB-C, WiFi 802.11ac, 45 Wh batéria, bez operačného systému',
            'price' => 7000.99,
            'brand' => 'Apple',
            'color' => 'Sivá',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Lenovo IdeaPad Gaming 3 15IMH05 Onyx',
            'description' => 'Herný notebook – Intel Core i7 10750H Comet Lake, 15.6" IPS antireflexný 1920 × 1080 120Hz, RAM 16GB DDR4, NVIDIA GeForce GTX 1650 Ti 4GB, SSD 512GB, numerická klávesnica, podsvietená klávesnica, webkamera, USB 3.2 Gen 1, USB-C, WiFi 802.11ac, 45 Wh batéria, bez operačného systému',
            'price' => 1299.99,
            'brand' => 'Lenovo',
            'color' => 'Čierna',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Macbook Pro 12" US',
            'description' => 'Herný notebook – Intel Core i7 10750H Comet Lake, 15.6" IPS antireflexný 1920 × 1080 120Hz, RAM 16GB DDR4, NVIDIA GeForce GTX 1650 Ti 4GB, SSD 512GB, numerická klávesnica, podsvietená klávesnica, webkamera, USB 3.2 Gen 1, USB-C, WiFi 802.11ac, 45 Wh batéria, bez operačného systému',
            'price' => 6520.99,
            'brand' => 'Apple',
            'color' => 'Sivá',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Lenovo IdeaPad Gaming 5 15IMH05 Onyx Black',
            'description' => 'Herný notebook – Intel Core i7 10750H Comet Lake, 15.6" IPS antireflexný 1920 × 1080 120Hz, RAM 16GB DDR4, NVIDIA GeForce GTX 1650 Ti 4GB, SSD 512GB, numerická klávesnica, podsvietená klávesnica, webkamera, USB 3.2 Gen 1, USB-C, WiFi 802.11ac, 45 Wh batéria, bez operačného systému',
            'price' => 1099.99,
            'brand' => 'Lenovo',
            'color' => 'Čierna',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Macbook 16" US',
            'description' => 'Herný notebook – Intel Core i7 10750H Comet Lake, 15.6" IPS antireflexný 1920 × 1080 120Hz, RAM 16GB DDR4, NVIDIA GeForce GTX 1650 Ti 4GB, SSD 512GB, numerická klávesnica, podsvietená klávesnica, webkamera, USB 3.2 Gen 1, USB-C, WiFi 802.11ac, 45 Wh batéria, bez operačného systému',
            'price' => 5000.99,
            'brand' => 'Apple',
            'color' => 'Sivá',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Lenovo IdeaPad ',
            'description' => 'Herný notebook – Intel Core i7 10750H Comet Lake, 15.6" IPS antireflexný 1920 × 1080 120Hz, RAM 16GB DDR4, NVIDIA GeForce GTX 1650 Ti 4GB, SSD 512GB, numerická klávesnica, podsvietená klávesnica, webkamera, USB 3.2 Gen 1, USB-C, WiFi 802.11ac, 45 Wh batéria, bez operačného systému',
            'price' => 1099.99,
            'brand' => 'Lenovo',
            'color' => 'Čierna',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Macbook Semipro 16" US',
            'description' => 'Herný notebook – Intel Core i7 10750H Comet Lake, 15.6" IPS antireflexný 1920 × 1080 120Hz, RAM 16GB DDR4, NVIDIA GeForce GTX 1650 Ti 4GB, SSD 512GB, numerická klávesnica, podsvietená klávesnica, webkamera, USB 3.2 Gen 1, USB-C, WiFi 802.11ac, 45 Wh batéria, bez operačného systému',
            'price' => 2000.99,
            'brand' => 'Apple',
            'color' => 'Sivá',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Lenovo IdeaPad 2 ',
            'description' => 'Herný notebook – Intel Core i7 10750H Comet Lake, 15.6" IPS antireflexný 1920 × 1080 120Hz, RAM 16GB DDR4, NVIDIA GeForce GTX 1650 Ti 4GB, SSD 512GB, numerická klávesnica, podsvietená klávesnica, webkamera, USB 3.2 Gen 1, USB-C, WiFi 802.11ac, 45 Wh batéria, bez operačného systému',
            'price' => 99.99,
            'brand' => 'Lenovo',
            'color' => 'Biela',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Macbook Semipro 16" US',
            'description' => 'Herný notebook – Intel Core i7 10750H Comet Lake, 15.6" IPS antireflexný 1920 × 1080 120Hz, RAM 16GB DDR4, NVIDIA GeForce GTX 1650 Ti 4GB, SSD 512GB, numerická klávesnica, podsvietená klávesnica, webkamera, USB 3.2 Gen 1, USB-C, WiFi 802.11ac, 45 Wh batéria, bez operačného systému',
            'price' => 580.99,
            'brand' => 'Apple',
            'color' => 'Biela',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Magic Keyboard',
            'description' => 'Klávesnica kancelárska, bezdrôtová, nízkoprofilové klávesy, česká lokalizácia klávesov, rozhranie: bluetooth, vesmírna sivá',
            'price' => 144.99,
            'brand' => 'Apple',
            'color' => 'Čierna',
            'category_id' => 3
        ]);

        Product::create([
            'name' => 'Lenovo ThinkPad Bluetooth Silent Mouse',
            'description' => 'Myš bezdrôtová, optická, 3 tlačidlá, tiché a zmena DPI, 2400DPI, bluetooth, vhodná pre pravákov, čierna',
            'price' => 31.99,
            'brand' => 'Lenovo',
            'color' => 'Čierna',
            'category_id' => 3
        ]);
        Product::create([
            'name' => 'Magic Keyboard',
            'description' => 'Klávesnica kancelárska, bezdrôtová, nízkoprofilové klávesy, česká lokalizácia klávesov, rozhranie: bluetooth, vesmírna sivá',
            'price' => 144.99,
            'brand' => 'Apple',
            'color' => 'Čierna',
            'category_id' => 3
        ]);

        Product::create([
            'name' => 'Lenovo ThinkPad Bluetooth Silent Mouse',
            'description' => 'Myš bezdrôtová, optická, 3 tlačidlá, tiché a zmena DPI, 2400DPI, bluetooth, vhodná pre pravákov, čierna',
            'price' => 31.99,
            'brand' => 'Lenovo',
            'color' => 'Čierna',
            'category_id' => 3
        ]);
        Product::create([
            'name' => 'Magic Keyboard 5',
            'description' => 'Klávesnica kancelárska, bezdrôtová, nízkoprofilové klávesy, česká lokalizácia klávesov, rozhranie: bluetooth, vesmírna sivá',
            'price' => 144.99,
            'brand' => 'Apple',
            'color' => 'Čierna',
            'category_id' => 3
        ]);

        Product::create([
            'name' => 'Lenovo Silent Mouse',
            'description' => 'Myš bezdrôtová, optická, 3 tlačidlá, tiché a zmena DPI, 2400DPI, bluetooth, vhodná pre pravákov, čierna',
            'price' => 31.99,
            'brand' => 'Lenovo',
            'color' => 'Čierna',
            'category_id' => 3
        ]);
        Product::create([
            'name' => 'Magic Keyboard 50',
            'description' => 'Klávesnica kancelárska, bezdrôtová, nízkoprofilové klávesy, česká lokalizácia klávesov, rozhranie: bluetooth, vesmírna sivá',
            'price' => 144.99,
            'brand' => 'Apple',
            'color' => 'Čierna',
            'category_id' => 3
        ]);

        Product::create([
            'name' => 'Lenovo ThinkPad Bluetooth Silent Mouse',
            'description' => 'Myš bezdrôtová, optická, 3 tlačidlá, tiché a zmena DPI, 2400DPI, bluetooth, vhodná pre pravákov, čierna',
            'price' => 31.99,
            'brand' => 'Lenovo',
            'color' => 'Čierna',
            'category_id' => 3
        ]);
        Product::create([
            'name' => 'Magic Keyboard',
            'description' => 'Klávesnica kancelárska, bezdrôtová, nízkoprofilové klávesy, česká lokalizácia klávesov, rozhranie: bluetooth, vesmírna sivá',
            'price' => 144.99,
            'brand' => 'Apple',
            'color' => 'Čierna',
            'category_id' => 3
        ]);

        Product::create([
            'name' => 'Lenovo ThinkPad Bluetooth Mouse',
            'description' => 'Myš bezdrôtová, optická, 3 tlačidlá, tiché a zmena DPI, 2400DPI, bluetooth, vhodná pre pravákov, čierna',
            'price' => 31.99,
            'brand' => 'Lenovo',
            'color' => 'Modrá',
            'category_id' => 3
        ]);
        Product::create([
            'name' => 'Magic Keyboard',
            'description' => 'Klávesnica kancelárska, bezdrôtová, nízkoprofilové klávesy, česká lokalizácia klávesov, rozhranie: bluetooth, vesmírna sivá',
            'price' => 144.99,
            'brand' => 'Apple',
            'color' => 'Biela',
            'category_id' => 3
        ]);

        Product::create([
            'name' => 'Lenovo ThinkPad Mouse',
            'description' => 'Myš bezdrôtová, optická, 3 tlačidlá, tiché a zmena DPI, 2400DPI, bluetooth, vhodná pre pravákov, čierna',
            'price' => 31.99,
            'brand' => 'Lenovo',
            'color' => 'Čierna',
            'category_id' => 3
        ]);
    }
}
