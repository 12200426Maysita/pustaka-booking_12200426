<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
        'nama'     => 'maysita',
        'password' => md5('12200426')
        ],
        [
        'nama'      =>'admin',
        'password'  =>md5('12345')
        ],
        [
        'nama'      =>'12200426',
        'password'  =>md5('maysitautamifadlina')
        ]
        ];
    $p = new Pengguna_12200426();
    $p->inserBatch($data);
    }
}