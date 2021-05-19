<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SofaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sofas')->insert([
            [    'Model'=>"Amanda Sofa",
                'Description'=>"Compact in size with traditional style and curved legs.",
                'Material'=>"Wood",
                'Dimension_inch'=>"75 L x 36 W x 31 H",
                'Price'=>"23989",
                'Gallery'=>"https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQb7h5LvvQetDLe0Do5iL3--KAF3nW7yoH7AcjWNqdli3k4yx6kICfvLcuGOwBoS1hVrnq7864IRAncn_UMIXapha0mf9WOm0qUL-Ln5KKuKjgtCfQ&usqp=CAc"
            ],
            [    'Model'=>"Regina Sofa",
                'Description'=>"The Solace L-Shaped Wooden Sofa is worth adding in the home as its sharp and smooth features make this sofa elegant and attractive",
                'Material'=>"Wood",
                'Dimension_inch'=>"86 L x 30 W x 31 H",
                'Price'=>"68699",
                'Gallery'=>"https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQDIOequoj56CGujO4G0suF-Istix-GGfM1uerWuKq9xzJyWUW8V6-GopKdLAGqkSQT--kF74kB_dQouBtwWe5WbAsycfkbchV8bD-Ny7dfXiNG3g&usqp=CAE"
            ],
            [    'Model'=>"Lara Sofa",
                'Description'=>"Single seater sofa with upholstered cushions",
                'Material'=>"Wood",
                'Dimension_inch'=>"37 L x 29 W x 29 H",
                'Price'=>"40999",
                'Gallery'=>"https://ii1.pepperfry.com/media/catalog/product/a/m/800x400/amanda-3-seater-sofa-in-charcoal-grey-colour-by-casacraft-amanda-3-seater-sofa-in-charcoal-grey-colo-apob1l.jpg"
            ],
            [    'Model'=>"Santiago Sofa",
                'Description'=>"Very comfortable to sit and easy to move ",
                'Material'=>"Synthetic",
                'Dimension_inch'=>" 76 W x 31 D x 18 H",
                'Price'=>"8600",
                'Gallery'=>"https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSTT-bXBd7_lTSaHVW-Kxrtq9daA8-nHVgUSrsskohPkeO6UVYMmlK-EF3fPTNb4de0_k7-arrCN24XMUJ0eE10ODiow7gYRwHV2_fX&usqp=CAE"
            ],
            [    'Model'=>"Serene Sofa",
                'Description'=>"Convertible version.",
                'Material'=>"Fabric",
                'Dimension_inch'=>" H 31 x W 79 x D 33",
                'Price'=>"25000",
                'Gallery'=>"https://ii1.pepperfry.com/media/catalog/product/a/l/800x400/allison-2-seater-sofa-in-charcoal-grey-colour---casacraft-by-pepperfry-allison-2-seater-sofa-in-char-qex1pb.jpg"
            ],
            [    'Model'=>"Alfredo Sofa",
                'Description'=>".A Sofa cum Bed is a multi-functional piece of furniture, it s a sofa or divan by day, flipped into a double bed at night.",
                'Material'=>"Steel",
                'Dimension_inch'=>" H 36 x W 72 x D 24",
                'Price'=>"31999",
                'Gallery'=>"https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcT4PBSFuPbksh-tFgv4nFoQdGac4rGDaHEeQ1FGp1OycvR6Cl66sar8ZwSbXh2Ut2Kwt0PHSaGEl0LA4XtOBD5Y_R1XGl_ewU11o6T4bt2TCR81Mqc&usqp=CAE"
            ],
            [    'Model'=>"Nova Sofa",
                'Description'=>"In this style you can see nods to modern, traditional, art deco and even futuristic design.",
                'Material'=>"Wood",
                'Dimension_inch'=>"H 24 x W 54 x D 26",
                'Price'=>"27999",
                'Gallery'=>"https://ii1.pepperfry.com/media/catalog/product/r/o/800x400/rory-solid-wood-2-seater-sofa-with-back-cushion-in-natural-finish-by-woodsworth-rory-solid-wood-2-se-bsmu9r.jpg"
            ]
           
            ]); 
    }
}
