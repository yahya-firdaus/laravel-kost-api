<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TemporarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('temporary')->insert([
            'description'  => '> 5 orang/ kamar',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Ada jam malam',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Ada jam malam untuk tamu',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Akses 24 Jam',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Bawa hasil tes antigen saat check-in (sewa harian)',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Boleh bawa anak',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Boleh bawa hewan',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Boleh pasutri',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Check-in pukul 14:00-21:00 (sewa harian)',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Check-out maks. pukul 12:00 (sewa harian)',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Denda kerusakan barang kos',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Dilarang bawa hewan',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Dilarang menerima tamu',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Dilarang merokok di kamar',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Harga termasuk listrik (sewa harian)',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kamar hanya bagi penyewa',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Khusus Mahasiswa',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Khusus karyawan',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kriteria umum',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Lawan jenis dilarang ke kamar',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Maks. 1 orang/ kamar',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Maks. 2 orang/ kamar',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Maks. 3 orang/ kamar',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Maks. 4 orang/ kamar',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Maksimal 2 orang (sewa harian)',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Menunjukan bukti (-) Swab saat check-in',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Pasutri wajib membawa surat nikah (sewa harian)',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Tambah biaya untuk alat elektronik',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Tamu bebas berkunjung',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Tamu boleh menginap',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Tamu dilarang menginap',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Tamu menginap dikenakan biaya',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Tanpa deposit (sewa harian)',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Termasuk listrik',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Tidak bisa DP (sewa harian)',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Tidak boleh bawa anak',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Tidak untuk pasutri',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Wajib ikut piket',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Wajib lampirkan KTP saat check-in (sewa harian)',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Wajib sertakan KTP saat pengajuan sewa',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Wajib sertakan buku nikah saat pengajuan sewa',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Wajib sertakan kartu keluarga saat pengajuan sewa',
            'tipe' => 'peraturan_kost'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Balcon',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'CCTV',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Dapur',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Dispenser',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Duplikat Gerbang Kos',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Gazebo',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Jemuran',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Joglo',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Jual Makanan',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'K. Mandi Luar',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kamar Mandi Luar - WC Duduk',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kamar Mandi Luar - WC Jongkok',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kartu Akses',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kompor',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kulkas',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Laundry',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Locker',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Mesin Cuci',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Mushola',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Pengurus Kos',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Penjaga Kos',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'R. Cuci',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'R. Jemur',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'R. Keluarga',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'R. Makan',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'R. Santai',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'R. Tamu',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Rice Cooker',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Rooftop',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'TV',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Taman',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'WiFi',
            'tipe' => 'fasilitas_umum'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'AC',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Bantal',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Cermin',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Cleaning service',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Dapur Pribadi',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Dispenser',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Guling',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Jendela',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kasur',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Keset Toilet (untuk sewa harian)',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kipas Angin',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kos Higienis Mingguan',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kulkas',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kursi',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Lemari Baju',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Maks. 5 orang/ kamar',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Meja',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Meja Rias',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Meja makan',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Sofa',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'TV',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'TV Kabel',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Tidak ada Kasur',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Ventilasi',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Wastafel',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Water Heater',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'microwave',
            'tipe' => 'fasilitas_kamar'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Air panas',
            'tipe' => 'fasilitas_kamar_mandi'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Bak mandi',
            'tipe' => 'fasilitas_kamar_mandi'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Bathtub',
            'tipe' => 'fasilitas_kamar_mandi'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Ember mandi',
            'tipe' => 'fasilitas_kamar_mandi'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'K. Mandi Dalam',
            'tipe' => 'fasilitas_kamar_mandi'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'K. Mandi Luar',
            'tipe' => 'fasilitas_kamar_mandi'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kloset Duduk',
            'tipe' => 'fasilitas_kamar_mandi'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Kloset Jongkok',
            'tipe' => 'fasilitas_kamar_mandi'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Shower',
            'tipe' => 'fasilitas_kamar_mandi'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Wastafel',
            'tipe' => 'fasilitas_kamar_mandi'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Parkir Mobil',
            'tipe' => 'parkir'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Parkir Motor',
            'tipe' => 'parkir'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Parkir Motor & Sepeda',
            'tipe' => 'parkir'
        ]);
        DB::table('temporary')->insert([
            'description'  => 'Parkir Sepeda',
            'tipe' => 'parkir'
        ]);
    }
}
