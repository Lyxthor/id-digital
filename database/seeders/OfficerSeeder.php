<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Officer;
use App\Models\Authority;
use App\Models\Userable;
use Illuminate\Support\Arr;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $data =
    [
        [
            "name"=>"Wiwik Suhadi",
            "authorities"=>
            [
                [
                    "authorizable_type"=>"kelurahan",
                    "authorizable_id"=>1
                ],
                [
                    "authorizable_type"=>"rt",
                    "authorizable_id"=>2
                ]
            ]
        ],
        [
            "name"=>"Joko Susilo",
            "authorities"=>
            [
                [
                    "authorizable_type"=>"rw",
                    "authorizable_id"=>1
                ],
            ]
        ],
        [
            "name"=>"Rahadi Sunaryo",
            "authorities"=>
            [
                [
                    "authorizable_type"=>"rt",
                    "authorizable_id"=>2
                ],
            ]
        ]
    ];
    private $models =
    [
        'kelurahan'=>\App\Models\Kelurahan::class,
        'rw'=>\App\Models\Rw::class,
        'rt'=>\App\Models\Rt::class
    ];
    public function run(): void
    {
        foreach($this->data as $d)
        {
            $user = $this->generateUser($d);
            $officer = Officer::create(Arr::except($d, ['authorities']));
            $user['userable_type'] = 'officer';
            $user['userable_id'] = $officer->id;
            $user = User::create($user);

            foreach($d['authorities'] as $a)
            {
                $a['officer_id'] = $officer->id;
                Authority::create($a);
            }
        }
    }
    private function generateUser($data)
    {
        // r
        $cleaned_name = strtolower($data["name"]);
        $cleaned_name = join(explode(" ", $cleaned_name));

        $username = $cleaned_name;
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
