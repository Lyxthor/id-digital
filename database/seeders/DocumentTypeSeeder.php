<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $data =
    [
        [
            "name"=>"Kartu Keluarga",
            "alias"=>"kk"
        ],
                 [
            "name"=>"Akta Kelahiran",
            "alias"=>"ak"
        ],
        [
            "name"=>"Kartu Tanda Penduduk",
            "alias"=>"ktp"
        ]
    ];
    public function run(): void
    {
        foreach($this->data as $entry)
        {
            DocumentType::create($entry);
        }
    }
}
