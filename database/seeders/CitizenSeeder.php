<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Citizen;
use App\Models\User;

class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $data =
    [
        [
            'nik' => '3201010101010001',
            'name' => 'Ahmad Syahputra',
            'birth_place' => 'Jakarta',
            'birth_date' => '1995-08-12 00:00:00',
            'current_address' => 'Jl. Sudirman No. 45, Jakarta',
            'user_id' => 1,
            'no_kk' => '320101010101',
            'family_role' => 'Father',
        ],
        [
            'nik' => '3201010101010002',
            'name' => 'Dewi Santika',
            'birth_place' => 'Bandung',
            'birth_date' => '1998-05-15 00:00:00',
            'current_address' => 'Jl. Ahmad Yani No. 12, Bandung',
            'user_id' => 2,
            'no_kk' => '320101010102',
            'family_role' => 'Mother',
        ],
        [
            'nik' => '3201010101010003',
            'name' => 'Rian Saputra',
            'birth_place' => 'Jakarta',
            'birth_date' => '2015-03-10 00:00:00',
            'current_address' => 'Jl. Sudirman No. 45, Jakarta',
            'user_id' => 3,
            'no_kk' => '320101010101',
            'family_role' => 'Son',
        ],
        [
            'nik' => '3201010101010004',
            'name' => 'Siti Aminah',
            'birth_place' => 'Surabaya',
            'birth_date' => '2000-12-22 00:00:00',
            'current_address' => 'Jl. Pemuda No. 20, Surabaya',
            'user_id' => 4,
            'no_kk' => '320101010103',
            'family_role' => 'Daughter',
        ],
        [
            'nik' => '3201010101010005',
            'name' => 'Bayu Pratama',
            'birth_place' => 'Semarang',
            'birth_date' => '1992-07-01 00:00:00',
            'current_address' => 'Jl. Pandanaran No. 8, Semarang',
            'user_id' => 5,
            'no_kk' => '320101010104',
            'family_role' => 'Father',
        ],
        [
            'nik' => '3201010101010006',
            'name' => 'Tari Wulandari',
            'birth_place' => 'Denpasar',
            'birth_date' => '1994-03-17 00:00:00',
            'current_address' => 'Jl. Teuku Umar No. 14, Denpasar',
            'user_id' => 6,
            'no_kk' => '320101010105',
            'family_role' => 'Mother',
        ],
        [
            'nik' => '3201010101010007',
            'name' => 'Agus Wijaya',
            'birth_place' => 'Makassar',
            'birth_date' => '1988-10-10 00:00:00',
            'current_address' => 'Jl. Pettarani No. 9, Makassar',
            'user_id' => 7,
            'no_kk' => '320101010106',
            'family_role' => 'Father',
        ],
        [
            'nik' => '3201010101010008',
            'name' => 'Maya Lestari',
            'birth_place' => 'Medan',
            'birth_date' => '1990-06-25 00:00:00',
            'current_address' => 'Jl. Iskandar Muda No. 18, Medan',
            'user_id' => 8,
            'no_kk' => '320101010107',
            'family_role' => 'Mother',
        ],
        [
            'nik' => '3201010101010009',
            'name' => 'Rifki Hidayat',
            'birth_place' => 'Bandung',
            'birth_date' => '2003-09-09 00:00:00',
            'current_address' => 'Jl. Dago No. 5, Bandung',
            'user_id' => 9,
            'no_kk' => '320101010108',
            'family_role' => 'Son',
        ],
        [
            'nik' => '3201010101010010',
            'name' => 'Rina Permata',
            'birth_place' => 'Yogyakarta',
            'birth_date' => '1997-11-19 00:00:00',
            'current_address' => 'Jl. Malioboro No. 3, Yogyakarta',
            'user_id' => 10,
            'no_kk' => '320101010109',
            'family_role' => 'Daughter',
        ],
        [
            'nik' => '3201010101010011',
            'name' => 'Bambang Hermawan',
            'birth_place' => 'Jakarta',
            'birth_date' => '1975-05-23 00:00:00',
            'current_address' => 'Jl. Merdeka No. 23, Jakarta',
            'user_id' => 11,
            'no_kk' => '320101010110',
            'family_role' => 'Father',
        ],
        [
            'nik' => '3201010101010012',
            'name' => 'Ayu Melati',
            'birth_place' => 'Bali',
            'birth_date' => '1980-03-30 00:00:00',
            'current_address' => 'Jl. Sunset Road No. 7, Bali',
            'user_id' => 12,
            'no_kk' => '320101010111',
            'family_role' => 'Mother',
        ],
        [
            'nik' => '3201010101010013',
            'name' => 'Fikri Fauzan',
            'birth_place' => 'Padang',
            'birth_date' => '2005-12-13 00:00:00',
            'current_address' => 'Jl. Adinegoro No. 15, Padang',
            'user_id' => 13,
            'no_kk' => '320101010112',
            'family_role' => 'Son',
        ],
        [
            'nik' => '3201010101010014',
            'name' => 'Dian Pertiwi',
            'birth_place' => 'Malang',
            'birth_date' => '2000-01-17 00:00:00',
            'current_address' => 'Jl. Ijen No. 10, Malang',
            'user_id' => 14,
            'no_kk' => '320101010113',
            'family_role' => 'Daughter',
        ],
        [
            'nik' => '3201010101010015',
            'name' => 'Andi Setiawan',
            'birth_place' => 'Makassar',
            'birth_date' => '1978-07-19 00:00:00',
            'current_address' => 'Jl. Sultan Alauddin No. 20, Makassar',
            'user_id' => 15,
            'no_kk' => '320101010114',
            'family_role' => 'Father',
        ],
        [
            'nik' => '3201010101010016',
            'name' => 'Linda Kusuma',
            'birth_place' => 'Palembang',
            'birth_date' => '1985-11-07 00:00:00',
            'current_address' => 'Jl. Rajawali No. 25, Palembang',
            'user_id' => 16,
            'no_kk' => '320101010115',
            'family_role' => 'Mother',
        ],
        [
            'nik' => '3201010101010017',
            'name' => 'Joko Subagyo',
            'birth_place' => 'Solo',
            'birth_date' => '1969-02-14 00:00:00',
            'current_address' => 'Jl. Slamet Riyadi No. 8, Solo',
            'user_id' => 17,
            'no_kk' => '320101010116',
            'family_role' => 'Father',
        ],
        [
            'nik' => '3201010101010018',
            'name' => 'Maria Sari',
            'birth_place' => 'Manado',
            'birth_date' => '1976-08-20 00:00:00',
            'current_address' => 'Jl. Piere Tendean No. 3, Manado',
            'user_id' => 18,
            'no_kk' => '320101010117',
            'family_role' => 'Mother',
        ],
        [
            'nik' => '3201010101010019',
            'name' => 'Yusuf Alfi',
            'birth_place' => 'Balikpapan',
            'birth_date' => '2008-04-25 00:00:00',
            'current_address' => 'Jl. Sudirman No. 6, Balikpapan',
            'user_id' => 19,
            'no_kk' => '320101010118',
            'family_role' => 'Son',
        ],
        [
            'nik' => '3201010101010020',
            'name' => 'Lia Novitasari',
            'birth_place' => 'Pontianak',
            'birth_date' => '2010-09-14 00:00:00',
            'current_address' => 'Jl. Gajah Mada No. 11, Pontianak',
            'user_id' => 20,
            'no_kk' => '320101010119',
            'family_role' => 'Daughter',
        ],
    ];

    public function run(): void
    {
        foreach($this->data as $d)
        {
            $user = $this->generateUser($d);
            User::create($user);
            Citizen::create($d);
        }
    }
    private function generateUser($data)
    {
        // r
        $cleaned_name = strtolower($data["name"]);
        $cleaned_name = join(explode(" ", $cleaned_name));

        $username = $cleaned_name.$data["user_id"];
        $email = $username."@gmail.com";
        $mobile = $this->generateRandMobile();
        $password = bcrypt("1234567");
        return
        [
            "username"=>$username,
            "email"=>$email,
            "mobile"=>$mobile,
            "password"=>$password,
        ];

    }
    private function generateRandMobile()
    {
        $prefix = "085";
        $remaining_digits = "";
        for($i=0;$i<9;$i++)
        {
            $remaining_digits .= rand(0,9);
        }
        return $prefix.$remaining_digits;
    }
}
