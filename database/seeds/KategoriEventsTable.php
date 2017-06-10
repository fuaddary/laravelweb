<?php

use Illuminate\Database\Seeder;

use App\Kategori;

class KategoriEventsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori= new Kategori();
        $kategori->nama_kategori="Hiburan";
        $kategori->save();
        $kategori= new Kategori();
        $kategori->nama_kategori="Sosial";
        $kategori->save();
        $kategori= new Kategori();
        $kategori->nama_kategori="Kompetisi";
        $kategori->save();
        $kategori= new Kategori();
        $kategori->nama_kategori="Seminar";
        $kategori->save();
        $kategori= new Kategori();
        $kategori->nama_kategori="Festival";
        $kategori->save();
        $kategori= new Kategori();
        $kategori->nama_kategori="Lainnya";
        $kategori->save();
    }
}
