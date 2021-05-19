<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tables')->insert([
            [    'Model'=>"Avro table",
                'Description'=>"This 6 seater dining table will ensure that you are comfortable every time you sit to enjoy your meal.",
                'Material'=>"Wood",
                'Dimension_inch'=>"35 L x 35 W x 30 H",
                'Price'=>"16696",
                'Gallery'=>"https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRrs2Wy7pLvNNIXLWw3dI9I331-SDF-R7Zxkg-YnwxwhZLcGRA9shxOK4g8HcTcvz3FnoHCDl_LYh9oU5_nwrRXPCxfj65GT_w2hymJUbjdWMsZPA&usqp=CAc"
            ],
            [    'Model'=>"Supreme",
                'Description'=>"This is one of the modest and elegant design of study table. It renders a comfortable looks with the footrest at the bottom",
                'Material'=>"Wood",
                'Dimension_inch'=>"42 L x 20 W x 30 H",
                'Price'=>"12989",
                'Gallery'=>"https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTpBOtdfbXmjol0BDbfj24RWf9AvqZ7B3Z6P7SrhxQu4h7zNkLOPXxyLSinjb4Z9MtvrXrJjITSMWLyP8Q7bQRT4-U91HMszLXkssvHbzFOQQ5RvUQ&usqp=CAc"
            ],
            [    'Model'=>"Avro table",
                'Description'=>"Place it in the dining space or in the kitchen, wherever you want. Its classic minimal design lends itself well to all kinds of interior décor styles- contemporary, transitional, antique and modern, too.",
                'Material'=>"Wood",
                'Dimension_inch'=>"59 W x 35 D x 29 H",
                'Price'=>"29500",
                'Gallery'=>"https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSbNy6WGMnEaa6UpSo978UXPu8eWnBVQgHV9vpemstZDHEKw0yFjeJlxQjTD7q_gs-O0kwfbobWHM8mlODHC1cHpIlXuqAh8RPnBmT2fhA0lwJIyfE&usqp=CAc"
            ],
            [    'Model'=>"mango table",
                'Description'=>"This furniture is bound to be the star in your dining room and the center of every family get-together. There’s also an additional shelf space below the table you can keep the newspapers or tissue boxes.",
                'Material'=>"Steel",
                'Dimension_inch'=>"35 L x 35 W x 29 H ",
                'Price'=>"11693",
                'Gallery'=>"https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQSyEwMWxoraqYdPn_RtNYt0UsVdxGH9dEDA1m2bMH0Cp8zKW4TGUBSVrkYoT50quwmwRKvfytgcoflPX50vFqRD4_SNz2kaZL_rP7vLFvtyvktx4I&usqp=CAc"
            ],
            [    'Model'=>"Godrej table",
                'Description'=>"Very comfortable study table and will be satisfied with the design, structure, sturdiness assembling and its durability.",
                'Material'=>"Steel",
                'Dimension_inch'=>"42 W x 21 D x 35 H",
                'Price'=>"9750",
                'Gallery'=>"https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSWdQfKAyF0EVWXkLn2fJ61X6N-dRsPdh5n4HpPfgd17xKZdCHYGLxco4wWnSY31Zunf-g4RNb6cCLcsWLD2Em4LKN8lU92GINh&usqp=CAc"
            ],
            [    'Model'=>"Godrej table",
                'Description'=>"Its beautiful .It looks so classy .sturdy and strong",
                'Material'=>"Plywood",
                'Dimension_inch'=>"39 L x 21 D x 38 H",
                'Price'=>"13999",
                'Gallery'=>"https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcS3qI2bSW9JQnl9TEcFOHRlt1lDhPpUUrxNxtjsbmVHqaV8b4s2I7u7lTzzFkx8gEK4Pk8XSIYG1UPyN9OQDdr2CRG02qyoqrIKlJmvdjMmWwSilZE&usqp=CAc"
            ],
            [    'Model'=>"Unwind table",
                'Description'=>"Computers and other accessories can be placed safely.",
                'Material'=>"Plywood",
                'Dimension_inch'=>"39 L x 35 W x 29 H",
                'Price'=>"7348",
                'Gallery'=>"https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSLOMRh5u-j3BK9fHN8cZWLW6GruArD-_oNBa4OLx6fBgUEVnxyNeFS_R6tOzBcmkgcMUYva8tNrQJkQlSZYgSbK_QaOc4meprJ4npUhlMctvTTJv_ZZp26unRWpm39&usqp=CAE"
            ],
            [    'Model'=>"Unwind table",
                'Description'=>"Table rates and quality assured products only from the best of brands with exclusive brand discounts",
                'Material'=>"Plastic",
                'Dimension_inch'=>"39 L x 21 D x 35 H",
                'Price'=>"1085",
                'Gallery'=>"https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQHbhl6gDybn-wF1uF49v5o5QHZRRXFz8mwT9KWXbzbgfMcMmDk-tQDSbVG1cgzP_mXy4v0hisHrIQGHcpbluuieWMRNrn-dNZqP1u_gcZNsac883-fOMb-Ccgn-_4V&usqp=CAE"
            ],
            [    'Model'=>"Nilkamal table",
                'Description'=>"This Table is made of Highly Durable Plastic Multi-purpose Table which can be used in living room, Garden,Patio, Office and Party ",
                'Material'=>"Plastic",
                'Dimension_inch'=>"28 W x 48 H x 28 D",
                'Price'=>"2300",
                'Gallery'=>"https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSHk5pp4xX_M1-x5Ff9PkNriLiUVt_Fm0zoEtuCcp5OeHJ3YKiw6GjuksbThyMDl_nK7WJrH-9dnKheRQxhYzG8owY_IlVvhw9rHW42loWhvACnGw&usqp=CAE"
            ]
            
           
            ]); 
    }
}
