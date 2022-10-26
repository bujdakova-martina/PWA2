<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Departments;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departments::insert([
            ['id' => 4110, 'title_sk' => 'Oddelenie keramiky skla a cementu', 'title_en' => 'Department of Ceramics Glass and Cement', 'created_at' => now()],
            ['id' => 4120, 'title_sk' => 'Oddelenie anorganickej technológie', 'title_en' => 'Department of Inorganic Technology', 'created_at' => now()],
            ['id' => 4130, 'title_sk' => 'Oddelenie organickej technológie', 'title_en' => 'Department of Organic Technology', 'created_at' => now()],
            ['id' => 4140, 'title_sk' => 'Oddelenie organickej chémie', 'title_en' => 'Department of Organic Chemistry', 'created_at' => now()],
            ['id' => 4150, 'title_sk' => 'Oddelenie vlákien a textilu', 'title_en' => 'Department of Fibres and Textile Chemistry', 'created_at' => now()],
            ['id' => 4160, 'title_sk' => 'Oddelenie polygrafie a aplikovanej fotochémie', 'title_en' => 'Department of Graphic Art Technology and Applied Photochemistry', 'created_at' => now()],
            ['id' => 4170, 'title_sk' => 'Oddelenie technológie ropy a petrochémie', 'title_en' => 'Department of Petroleum Technology and Petrochemistry', 'created_at' => now()],
            ['id' => 4180, 'title_sk' => 'Oddelenie analytickej chémie', 'title_en' => 'Department of Analytical Chemistry', 'created_at' => now()],
            ['id' => 4190, 'title_sk' => 'Oddelenie anorganickej chémie', 'title_en' => 'Department of Inorganic Chemistry', 'created_at' => now()],
            ['id' => 4210, 'title_sk' => 'Oddelenie fyzikálnej chémie', 'title_en' => 'Department of Physical Chemistry', 'created_at' => now()],
            ['id' => 4220, 'title_sk' => 'Oddelenie informatizácie a riadenia procesov', 'title_en' => 'Department of Information Engineering and Process Control', 'created_at' => now()],
            ['id' => 4230, 'title_sk' => 'Oddelenie chemického a biochemického inžinierstva', 'title_en' => 'Department of Chemical and Biochemical Engineering', 'created_at' => now()],
            ['id' => 4240, 'title_sk' => 'Oddelenie manažmentu', 'title_en' => 'Department of Management', 'created_at' => now()],
            ['id' => 4250, 'title_sk' => 'Oddelenie potravinárskej technológie', 'title_en' => 'Department of Food Science and Technology', 'created_at' => now()],
            ['id' => 4260, 'title_sk' => 'Oddelenie biochémie a mikrobiológie', 'title_en' => 'Department of Biochemistry and Microbiology', 'created_at' => now()],
            ['id' => 4270, 'title_sk' => 'Oddelenie matematiky', 'title_en' => 'Department of Mathematics', 'created_at' => now()],
            ['id' => 4280, 'title_sk' => 'Oddelenie chemickej fyziky', 'title_en' => 'Department of Chemical Physics', 'created_at' => now()],
            ['id' => 4290, 'title_sk' => 'Oddelenie environmentálneho inžinierstva', 'title_en' => 'Department of Enviromental Sciences', 'created_at' => now()],
            ['id' => 4310, 'title_sk' => 'Oddelenie biochemickej technológie', 'title_en' => 'Department of Biochemical Technology', 'created_at' => now()],
            ['id' => 4330, 'title_sk' => 'Oddelenie jazykov', 'title_en' => 'Department of Languages', 'created_at' => now()],
            ['id' => 4340, 'title_sk' => 'Oddelenie telesnej výchovy', 'title_en' => 'Department of Physical Education', 'created_at' => now()],
            ['id' => 4360, 'title_sk' => 'Oddelenie výživy a hodnotenia potravín', 'title_en' => 'Department of Nutrition and Food Assessment', 'created_at' => now()],
            ['id' => 4370, 'title_sk' => 'Oddelenie plastov a kaučuku', 'title_en' => 'Department of Plastics and Rubber', 'created_at' => now()],
            ['id' => 4380, 'title_sk' => 'Oddelenie chemickej technológie dreva celulózy a papiera', 'title_en' => 'Department of Chemical Technology of Wood Pulp and Paper', 'created_at' => now()],
            ['id' => 4630, 'title_sk' => 'Oddelenie NMR a hmotnostnej spektrometrie', 'title_en' => 'Department of NMR Spectroscopy and Mass Spectroscopy', 'created_at' => now()],
        ]);
    }
}
