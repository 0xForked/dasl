<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Watershed::insert([
            ['name' => 'DAS Tambala', 'latitude' => 1.4083333,'longitude' => 124.6823578],
            ['name' => 'DAS Ritey', 'latitude' => 1.2179339,'longitude' => 124.625518],
            ['name' => 'DAS Kumu', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Popareng', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Nimanga', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Ranotuana', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Sosongea', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Ranowangko', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Lewet', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Ranoyapo', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Worotikan', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Liwason', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Tangop', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Molinow', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Sidate', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Impit', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Mosanti', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Batukapal', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Ongkaw', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Pinsan', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Makakilu', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Maintang', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Noit', 'latitude' => 1.99,'longitude' => 1.99],
            ['name' => 'DAS Poigar', 'latitude' => 1.99,'longitude' => 1.99],
        ]);
    }
}
