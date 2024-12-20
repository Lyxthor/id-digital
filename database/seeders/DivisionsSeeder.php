<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $kelurahans = [
        'Banyumanik',
        'Gedawang',
        'Jabungan',
        'Ngesrep',
        'Padangsari',
        'Pedalangan',
        'Pudakpayung',
        'Srondol Kulon',
        'Srondol Wetan',
        'Sumurboto',
        'Tinjomoyo',
        'Candisari',
        'Karangroto',
        'Kebonagung',
        'Kemijen',
        'Mlatibaru',
        'Bangunharjo',
        'Brumbungan',
        'Gabahan',
        'Jagalan',
        'Karangkidul',
        'Kauman',
        'Kembangsari',
        'Kranggan',
        'Miroto',
        'Pandansari',
        'Pekunden',
        'Pendrikan Kidul',
        'Pendrikan Lor',
        'Purwodinatan',
        'Sekayu',
        'Bugangan',
        'Kemijen',
        'Mlatibaru',
        'Mlatiharjo',
        'Rejomulyo',
        'Rejosari',
        'Sarirejo',
        'Bulustalan',
        'Randusari',
        'Barusari',
        'Mugassari',
        'Pleburan',
        'Wonodri',
        'Peterongan',
        'Lamper Lor',
        'Lamper Kidul',
        'Lamper Tengah',
        'Wonotingal',
        'Wonodri',
        'Wonolopo',
        'Wonoplumbon',
        'Wonorejo',
        'Wonotunggal',
        'Wonoyoso',
        'Wonoyoso',
        'Wonoyoso',
        'Wonoyoso',
        'Muktiharjo Lor',
        'Muktiharjo Kidul',
        'Terboyo Kulon',
        'Terboyo Wetan',
        'Genuksari',
        'Genuk',
        'Kalipancur',
        'Purwoyoso',
        'Tambakaji',
        'Gondoriyo',
        'Ngaliyan',
        'Kalipancur',
        'Purwoyoso',
        'Tambakaji',
        'Gondoriyo',
        'Podorejo',
        'Wates',
        'Bringin',
        'Bambankerep',
        'Wonosari',
        'Pedurungan Kidul',
        'Pedurungan Lor',
        'Kalisegoro',
        'Sukorejo',
        'Jatirejo',
        'Nongkosawit',
        'Karangroto',
        'Karangtempel',
        'Karangturi',
    ];
    private $rw_count = 2;
    private $rt_count = 4;

    public function run(): void
    {
        $kelurahans = array_unique($this->kelurahans);
        foreach($kelurahans as $k)
        {

            $kelurahan = \App\Models\Kelurahan::create(["name"=>$k]);
            for($i=1;$i<=$this->rw_count;$i++)
            {
                $rw = \App\Models\Rw::create([
                    "name"=>"Rw 0".$i,
                    "kelurahan_id"=>$kelurahan->id
                ]);
                for($j=1;$j<=$this->rt_count;$j++)
                {
                    \App\Models\Rt::create([
                        "name"=>"Rt 0".$j,
                        "rw_id"=>$rw->id
                    ]);
                }
            }
        }
    }
}
