<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //make seeder for category table (name, slug, img, description) name(flowmeter, level sensor, alat ukur, dll)
        $category = [
            [
                'name' => 'Flowmeter',
                'slug' => 'flowmeter',
                'description' => 'Flowmeter adalah alat untuk mengukur aliran fluida baik gas maupun cair. Flowmeter banyak digunakan di industri untuk mengukur aliran fluida dalam pipa-pipa. Flowmeter juga digunakan di laboratorium untuk mengukur aliran gas atau cairan dalam tabung-tabung tertutup. Flowmeter juga digunakan di rumah sakit untuk mengukur aliran oksigen dan gas medis lainnya. Flowmeter juga digunakan di rumah tangga untuk mengukur aliran gas seperti LPG. Flowmeter juga digunakan di kendaraan untuk mengukur aliran bahan bakar.',
            ],
            [
                'name' => 'Level Sensor',
                'slug' => 'level-sensor',
                'description' => 'Level sensor adalah alat yang digunakan untuk mendeteksi level atau ketinggian suatu benda. Level sensor dapat digunakan untuk mendeteksi level cairan, level padatan, level bubuk, level granular, level bahan bakar, level minyak, level air, level limbah, level lumpur, level lumpur, level pasir, level semen, level tanah, level batu, level biji-bijian, level gula, level garam, level tepung, level kopi, level susu, level coklat, level beras, level tepung, level gandum, level jagung, level kacang, level kacang tanah, level kacang kedelai'
            ],
            [
                'name' => 'Alat Ukur',
                'slug' => 'alat-ukur',
                'description' => 'Alat ukur adalah alat yang digunakan untuk mengukur suatu besaran. Alat ukur dapat digunakan untuk mengukur besaran panjang, besaran massa, besaran waktu, besaran suhu, besaran tekanan, besaran kecepatan, besaran volume, besaran debit, besaran daya, besaran energi, besaran tegangan, besaran arus, besaran frekuensi, besaran sudut, besaran sudut, besaran kelembaban, besaran intensitas cahaya, besaran kekuatan medan magnet, besaran kekuatan medan listrik, besaran kekuatan medan gravitasi, besaran kekuatan medan elektromagnetik, besaran kekuatan medan elektrostatik, besaran kekuatan medan gravitasi, besaran kekuatan medan magnetik, besaran kekuatan medan listrik, besaran kekuatan medan elektromagnetik, besaran kekuatan medan elektrostatik, besaran kekuatan medan gravitasi, besaran kekuatan medan magnetik, besaran kekuatan medan listrik, besaran kekuatan medan elektromagnetik, besaran kekuatan medan elektrostatik, besaran kekuatan medan gravitasi, besaran kekuatan medan magnetik, besaran kekuatan medan listrik, besaran kekuatan medan elektromagnetik, besaran kekuatan medan elektrostatik, besaran kekuatan medan gravitasi, besaran kekuatan medan magnetik, besaran kekuatan medan listrik, besaran kekuatan medan elektromagnetik, besaran kekuatan medan elektrostatik, besaran kekuatan medan gravitasi, besaran kekuatan medan magnetik, besaran kekuatan meda'
            ],
            [
                'name' => 'Alat Safety',
                'slug' => 'alat-safety',
                'description' => 'Alat safety adalah alat yang digunakan untuk keamanan. Alat safety dapat digunakan untuk keamanan di rumah, keamanan di kantor, keamanan di pabrik, keamanan di gudang, keamanan di sekolah, keamanan di universitas, keamanan di mall, keamanan di hotel,'
            ],
            [
                'name' => 'Alat Laboratorium',
                'slug' => 'alat-laboratorium',
                'description' => 'Alat laboratorium adalah alat yang digunakan untuk keperluan laboratorium. Alat laboratorium dapat digunakan untuk keperluan laboratorium di rumah sakit, keperluan laboratorium di klinik, keperluan laboratorium di universitas, keperluan laboratorium di sekolah, keperluan laboratorium di pabrik, keperluan laboratorium di gudang, keperluan laboratorium di mall, keperluan laboratorium di hotel, keperluan laboratorium di kantor, keperluan laboratorium di rumah, keperluan laboratorium di kantor, keperluan laboratorium di rumah sakit, keperluan laboratorium di klinik, keperluan laboratorium di universitas, keperluan laboratorium di sekolah, keperluan laboratorium di pabrik, keperluan laboratorium di gudang, keperluan laboratorium di mall, keperluan laboratorium di hotel, keperluan laboratorium di kantor, keperluan laboratorium di rumah, keperluan laboratorium di kantor, keperluan laboratorium di rumah sakit, keperluan laboratorium di klinik, keperluan laboratorium di universitas, keperluan laboratorium di sekolah, keperluan laboratorium di pabrik, keperluan laboratorium di gudang, keperluan laboratorium di mall, keperluan laboratorium di hotel, keperluan laboratorium di kantor, keperluan laboratorium di rumah, keperluan laboratorium di kantor, keperluan laboratorium di rumah sakit, keperluan laboratorium di klinik, keperluan laboratorium di universitas, keperluan laboratorium di sekolah, keperluan laboratorium di pabrik, keperluan laboratorium di gudang, keperluan laboratorium di mall, keperluan laboratorium di hotel, keperluan laboratorium di kantor, keperluan laboratorium di rumah, keperluan'
            ],
            [
                'name' => 'Alat Pertanian',
                'slug' => 'alat-pertanian',
                'description' => 'Alat pertanian adalah alat yang digunakan untuk keperluan pertanian. Alat pertanian dapat digunakan untuk keperluan pertanian di rumah sakit, keperluan pertanian di klinik, keperluan pertanian di universitas, keperluan pertanian di sekolah, keperluan pertanian di pabrik, keperluan pertanian di gudang, keperluan pertanian di mall, keperluan pertanian di hotel, keperluan pertanian di kantor, keperluan pertanian di rumah, keperluan pertanian di kantor, keperluan pertanian di rumah sakit, keperluan pertanian di klinik, keperluan pertanian di universitas, keperluan pertanian di sekolah, keperluan pertanian di pabrik, keperluan pertanian di gudang, keperluan pertanian di mall, keperluan pertanian di hotel, keperluan pertanian di kantor, keperluan pertanian di rumah, keperluan pertanian di kantor, keperluan pertanian di rumah sakit, keperluan pertanian di klinik, keperluan pertanian di universitas, keperluan pertanian di sekolah, keperluan pertanian di pabrik, keperluan pertanian di gudang, keperluan pertanian di mall, keperluan pertanian di hotel, keperluan pertanian di kantor, keperluan pertanian di rumah, keperluan pertanian di kantor, keperluan pertanian di rumah sakit, keperluan pertanian di klinik, keperluan pertanian di universitas, keperluan pertanian di sekolah, keperluan pertanian di pabrik, keperluan pertanian di gudang, keperluan pertanian di mall, keperluan pertanian di hotel, keperluan pertanian di kantor, keperluan pertanian di rumah, keperluan'
            ],
            [
                'name' => 'Alat Perkebunan',
                'slug' => 'alat-perkebunan',
                'description' => 'Alat perkebunan adalah alat yang digunakan untuk keperluan perkebunan. Alat perkebunan dapat digunakan untuk keperluan perkebunan di rumah sakit, keperluan perkebunan di klinik, keperluan perkebunan di universitas, keperluan perkebunan di sekolah, keperluan perkebunan di pabrik, keperluan perkebunan di gudang, keperluan perkebunan di mall, keperluan perkebunan di hotel, keperluan perkebunan di kantor, keperluan perkebunan di rumah, keperluan perkebunan di kantor, keperluan perkebunan di rumah sakit, keperluan perkebunan di klinik, keperluan perkebunan di universitas, keperluan perkebunan di sekolah, keperluan perkebunan di pabrik, keperluan '
            ],
            [
                'name' => 'Alat Perikanan',
                'slug' => 'alat-perikanan',
                'description' => 'Alat perikanan adalah alat yang digunakan untuk keperluan perikanan. Alat perikanan dapat digunakan untuk keperluan perikanan di rumah sakit, keperluan perikanan di klinik, keperluan perikanan di universitas, keperluan perikanan di sekolah, keperluan perikanan di pabrik, keperluan perikanan di gudang, keperluan perikanan di mall, keperluan perikanan di hotel, keperluan perikanan di kantor, keperluan perikanan di rumah, keperluan perikanan di kantor, keperluan perikanan di rumah sakit, keperluan perikanan di klinik, keperluan perikanan di universitas, keperluan perikanan di sekolah, keperluan perikanan di pabrik, keperluan perikanan di gudang, keperluan perikanan di mall, keperluan perikanan di hotel, keperluan perikanan di kantor, keperluan perikanan di rumah, keperluan perikanan di kantor, keperluan perikanan di rumah sakit, keperluan perikanan di klinik, keperluan perikanan di universitas, keperluan perikanan di sekolah, keperluan perikanan di pabrik, keperluan perikanan di gudang, keperluan perikanan di mall, keperluan perikanan di hotel, keperluan perikanan di kantor, keperluan perikanan di rumah, keperluan perikanan di kantor, keperluan perikanan di rumah sakit, keperluan perikanan di klinik, keperluan perikanan di universitas, keperluan perikanan di sekolah, keperluan perikanan di pabrik, keperluan perikanan '
            ],


        ];
        DB::table('categories')->insert($category);

    }
}