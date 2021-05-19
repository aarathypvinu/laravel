<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ChairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chairs')->insert([
            [    'Model'=>"Avro chair(2 Nos)",
                'Description'=>"Gives you a perfect mix of functionality with aesthetics.",
                'Material'=>"Plastic",
                'Dimension_inch'=>"20.87 L x 20.47 W x 29.93 H",
                'Price'=>"612",
                'Gallery'=>"https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRUIYsy7j7A9-tyV2JDMFf7s4Aun6AvZmQX2j3Icwa2OQKKpJtUH8J9fmexLAzfxEMnJ55H7hGoQy8pfBTM3cq_Qrc-NrFyna_nZ3eTCXeLEW36VU7dvIIJQ9m17I5h&usqp=CAE"
            ],
            [    'Model'=>"Godrej chair(6 Nos)",
                'Description'=>"The chair gives you the chance to mix and match with the rest of your home furnitures.",
                'Material'=>"Plastic",
                'Dimension_inch'=>"20 L x 20 W x 29 H",
                'Price'=>"2505",
                'Gallery'=>"https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQeiR2wLXIPAlOfcSKJS4CcPS0nkTEDJm6n-VkhMKG8GdNfXtzZubiNZJ5rf9OOtlowQilyQa8-kbqEX7O6neZzU2JeVB9kBFTUaJ7_S8zkwFf5EE3Xf-NAAC8_yFk&usqp=CAE"
            ],
            [    'Model'=>"Mango chair(3 Nos)",
                'Description'=>"Finest quality and rest assured to get the best in terms of both durability and performance",
                'Material'=>"Plastic",
                'Dimension_inch'=>"32 L x 18 W x 20 H",
                'Price'=>"1720",
                'Gallery'=>"https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTD03rfNMigPMKsnYOuG9LpGD0Atl892p_t8wh7xSshCNpeGo9UluyI8H5k3BT5BIukYglsrC8kNqARdPYhnwWamL0_b_KUe0rHxeJpKOHHaNcA_KJeeFSbaOeN4n0&usqp=CAE"
            ],
            [    'Model'=>"Unwind chair(1 Nos)",
                'Description'=>"Quality of Chair is strong, amazing and aesthetically pleasing. Cost is reasonable and assembling is very easy ",
                'Material'=>"Wood",
                'Dimension_inch'=>"15 W x 29 D x 23 H",
                'Price'=>"3700",
                'Gallery'=>"https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQ-JSZJlLzv9CSkNQi8PsUeUuwjaTQ4jvsSwj18q7fYGcvH2dWMG_7QwYYasr3efx63Bs2hslI02fQ1dhdo8ykrKxTp1mOBG9j608tImvVBRqyfEv67Vp8kcrBC-HgKWjM&usqp=CAE"
            ],
            [    'Model'=>"Nilkamal chair(4 Nos)",
                'Description'=>"Its simplistic design and wooden make contribute to making it a blend of contemporary and classic addition to your dinner.",
                'Material'=>"Wood",
                'Dimension_inch'=>"15 W x 29 D x 23 H",
                'Price'=>"13348",
                'Gallery'=>"https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTwMC0T0DaSWD5O5hY3QFrgtl1jL5p407wRYBDqtjv0M2KaMWAigzJCJ76x-mgHPLVgPUlMqJHIlqQsBabQo3UgG05WMQRCCNgzVhHI-t7D-XaRzQA&usqp=CAE"
            ],
            [    'Model'=>"Supreme chair(4 Nos)",
                'Description'=>"The combination of dark wood and light materials give the chair an elegant appearance that won't fall out of fashion.",
                'Material'=>"Wood",
                'Dimension_inch'=>"15 W x 29 D x 23 H",
                'Price'=>"19991",
                'Gallery'=>"https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTJWrFIfddwRkiAtNCYGahQFz-ocyCuo9mD3dwj010Qgq5a3xsEg9aa2s0JV6CZhZeVeG_l8aqXrCmtHHz8BRJYpTbrzx1DOCVI9ZSupbjBs9bfMwk&usqp=CAE"
            ]
            ]); 
    }
}
