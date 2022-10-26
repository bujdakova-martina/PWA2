<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::insert([
            ['type' => 1, 'title' => 'Analytická chémia', 'department' => '4180', 'credit' => '4', 'semester' => '4', 'supervisor_id' => '1', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Chemická a potravinárska technológia', 'department' => '4120', 'credit' => '3', 'semester' => '5', 'supervisor_id' => '1', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Organická chémia I', 'department' => '4140', 'credit' => '4', 'semester' => '3', 'supervisor_id' => '1', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Laboratórne cvičenia z organickej chémie I', 'department' => '4140', 'credit' => '3', 'semester' => '3', 'supervisor_id' => '1', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Organická chémia II', 'department' => '4140', 'credit' => '2', 'semester' => '4', 'supervisor_id' => '1', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Analytická chémia', 'department' => '4180', 'credit' => '4', 'semester' => '4', 'supervisor_id' => '1', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Laboratórne cvičenie z analytickej chémie', 'department' => '4180', 'credit' => '2', 'semester' => '4', 'supervisor_id' => '1', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Bakalársky projekt', 'department' => '4220', 'credit' => '9', 'semester' => '6', 'supervisor_id' => '1', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Anorganická chémia', 'department' => '4190', 'credit' => '7', 'semester' => '1', 'supervisor_id' => '1', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Proseminár z chémie', 'department' => '4190', 'credit' => '0', 'semester' => '1', 'supervisor_id' => '1', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Laboratórne cvičenie z anorganickej chémie', 'department' => '4190', 'credit' => '2', 'semester' => '2', 'supervisor_id' => '1', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Fyzikálna chémia I', 'department' => '4210', 'credit' => '5', 'semester' => '3', 'supervisor_id' => '1', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Laboratórne cvičenie z fyzikálnej chémie I', 'department' => '4210', 'credit' => '2', 'semester' => '3', 'supervisor_id' => '1', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Fyzikálna chémia II', 'department' => '4210', 'credit' => '5', 'semester' => '4', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Laboratórne cvičenie z fyzikálnej chémie II', 'department' => '4210', 'credit' => '2', 'semester' => '4', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Riadenie procesov', 'department' => '4220', 'credit' => '3', 'semester' => '6', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Laboratórne cvičenia z riadenia procesov', 'department' => '4220', 'credit' => '2', 'semester' => '6', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Metódy počítačového spracovania dát', 'department' => '4220', 'credit' => '3', 'semester' => '6', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Riadenie procesov', 'department' => '4220', 'credit' => '3', 'semester' => '6', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Optimalizácia', 'department' => '4220', 'credit' => '6', 'semester' => '2', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Metódy počítačového spracovania dát', 'department' => '4220', 'credit' => '2', 'semester' => '2', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Operačné systémy', 'department' => '4220', 'credit' => '4', 'semester' => '4', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Modelovanie', 'department' => '4220', 'credit' => '7', 'semester' => '4', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Projektovanie informačných a riadiacich systémov', 'department' => '4220', 'credit' => '6', 'semester' => '5', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Riadenie procesov', 'department' => '4220', 'credit' => '3', 'semester' => '5', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Laboratórne cvičenia z riadenia procesov', 'department' => '4220', 'credit' => '2', 'semester' => '5', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Integrované riadenie v procesnom priemysle', 'department' => '4220', 'credit' => '7', 'semester' => '6', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Informatizácia a informačné systémy', 'department' => '4220', 'credit' => '3', 'semester' => '6', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Lab. cvičenie z informatizácie a inf. systémov', 'department' => '4220', 'credit' => '1', 'semester' => '6', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Semestrálny projekt', 'department' => '4220', 'credit' => '4', 'semester' => '6', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Základy automatizácie', 'department' => '4220', 'credit' => '2', 'semester' => '6', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Laboratórne cvičenia zo základov automatizácie', 'department' => '4220', 'credit' => '2', 'semester' => '6', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Metódy počítačového spracovania dát', 'department' => '4220', 'credit' => '2', 'semester' => '5', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Chemické inžinierstvo I', 'department' => '4230', 'credit' => '5', 'semester' => '5', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Laboratórne cvičenia z chemického inžinierstva I', 'department' => '4230', 'credit' => '2', 'semester' => '5', 'supervisor_id' => '2', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Materiálové bilancie', 'department' => '4230', 'credit' => '2', 'semester' => '1', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Chemické inžinierstvo II', 'department' => '4230', 'credit' => '5', 'semester' => '6', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Laboratórne cvičenia z chemického inžinierstva II', 'department' => '4230', 'credit' => '2', 'semester' => '6', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Filozofia', 'department' => '4240', 'credit' => '2', 'semester' => '1', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Základy práva', 'department' => '4240', 'credit' => '2', 'semester' => '1', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Ekonomika a manažment podniku', 'department' => '4240', 'credit' => '5', 'semester' => '3', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Základy všeobecnej ekonomickej teórie', 'department' => '4240', 'credit' => '5', 'semester' => '2', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Základy logistiky', 'department' => '4240', 'credit' => '4', 'semester' => '4', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Podnikové financie', 'department' => '4240', 'credit' => '5', 'semester' => '5', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Manažment kvality', 'department' => '4240', 'credit' => '4', 'semester' => '5', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Personálny manažment', 'department' => '4240', 'credit' => '3', 'semester' => '6', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Účtovníctvo', 'department' => '4240', 'credit' => '4', 'semester' => '6', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Matematika I.', 'department' => '4270', 'credit' => '9', 'semester' => '1', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Matematika II.', 'department' => '4270', 'credit' => '9', 'semester' => '2', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Matematika I', 'department' => '4270', 'credit' => '6', 'semester' => '1', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Základy informatiky', 'department' => '4270', 'credit' => '2', 'semester' => '2', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Informatika', 'department' => '4270', 'credit' => '3', 'semester' => '1', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Matematika III.', 'department' => '4270', 'credit' => '3', 'semester' => '5', 'supervisor_id' => '3', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Matematika III', 'department' => '4270', 'credit' => '4', 'semester' => '3', 'supervisor_id' => '4', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Matematika II', 'department' => '4270', 'credit' => '5', 'semester' => '2', 'supervisor_id' => '4', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Matematika I', 'department' => '4270', 'credit' => '6', 'semester' => '1', 'supervisor_id' => '4', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Informatika a algoritmy', 'department' => '4270', 'credit' => '3', 'semester' => '1', 'supervisor_id' => '4', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Programovanie I', 'department' => '4270', 'credit' => '3', 'semester' => '2', 'supervisor_id' => '4', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Matematika III', 'department' => '4270', 'credit' => '3', 'semester' => '3', 'supervisor_id' => '4', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Aplikovaná štatistika', 'department' => '4270', 'credit' => '2', 'semester' => '3', 'supervisor_id' => '4', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Programovanie II', 'department' => '4270', 'credit' => '4', 'semester' => '3', 'supervisor_id' => '4', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Informatika', 'department' => '4270', 'credit' => '3', 'semester' => '1', 'supervisor_id' => '4', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Aplikovaná štatistika', 'department' => '4270', 'credit' => '3', 'semester' => '4', 'supervisor_id' => '4', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Semestrálny projekt', 'department' => '4270', 'credit' => '4', 'semester' => '6', 'supervisor_id' => '4', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Proseminár z matematiky', 'department' => '4270', 'credit' => '0', 'semester' => '1', 'supervisor_id' => '4', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Programovanie v jazyku C a algoritmy', 'department' => '4270', 'credit' => '4', 'semester' => '6', 'supervisor_id' => '4', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Fyzika I', 'department' => '4280', 'credit' => '5', 'semester' => '1', 'supervisor_id' => '5', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Fyzika II', 'department' => '4280', 'credit' => '4', 'semester' => '2', 'supervisor_id' => '5', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Laboratórne cvičenia z fyziky', 'department' => '4280', 'credit' => '2', 'semester' => '2', 'supervisor_id' => '5', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Proseminár z fyziky', 'department' => '4280', 'credit' => '0', 'semester' => '1', 'supervisor_id' => '5', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Základy ekológie a environmentalistiky', 'department' => '4290', 'credit' => '2', 'semester' => '1', 'supervisor_id' => '5', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Technická angličtina I', 'department' => '4330', 'credit' => '0', 'semester' => '1', 'supervisor_id' => '5', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Technická angličtina', 'department' => '4330', 'credit' => '4', 'semester' => '2', 'supervisor_id' => '5', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Technická angličtina II', 'department' => '4330', 'credit' => '0', 'semester' => '2', 'supervisor_id' => '6', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Technická nemčina II', 'department' => '4330', 'credit' => '0', 'semester' => '2', 'supervisor_id' => '6', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Technická nemčina I', 'department' => '4330', 'credit' => '0', 'semester' => '1', 'supervisor_id' => '6', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Technická nemčina', 'department' => '4330', 'credit' => '4', 'semester' => '2', 'supervisor_id' => '6', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Telesná výchova', 'department' => '4340', 'credit' => '0', 'semester' => '1', 'supervisor_id' => '6', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Telesná výchova', 'department' => '4340', 'credit' => '0', 'semester' => '2', 'supervisor_id' => '6', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Telesná výchova', 'department' => '4340', 'credit' => '0', 'semester' => '3', 'supervisor_id' => '6', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Telesná výchova', 'department' => '4340', 'credit' => '0', 'semester' => '4', 'supervisor_id' => '6', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Telesná výchova', 'department' => '4340', 'credit' => '0', 'semester' => '5', 'supervisor_id' => '6', 'created_at' => now(),],
            ['type' => 1, 'title' => 'Telesná výchova', 'department' => '4340', 'credit' => '0', 'semester' => '6', 'supervisor_id' => '6', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Spektrálne metódy kontroly technol. procesov', 'department' => '4140', 'credit' => '5', 'semester' => '8', 'supervisor_id' => '6', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Techniky separácií zmesí', 'department' => '4180', 'credit' => '5', 'semester' => '8', 'supervisor_id' => '6', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Termodynamika', 'department' => '4210', 'credit' => '5', 'semester' => '7', 'supervisor_id' => '6', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Kinetika a katalýza', 'department' => '4210', 'credit' => '5', 'semester' => '7', 'supervisor_id' => '7', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Operačné systémy počítačov', 'department' => '4220', 'credit' => '3', 'semester' => '7', 'supervisor_id' => '7', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Optimalizácia', 'department' => '4220', 'credit' => '5', 'semester' => '8', 'supervisor_id' => '7', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Informačné technológie I', 'department' => '4220', 'credit' => '2', 'semester' => '7', 'supervisor_id' => '7', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Informačné technológie II', 'department' => '4220', 'credit' => '2', 'semester' => '9', 'supervisor_id' => '7', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Dynamika procesov', 'department' => '4220', 'credit' => '3', 'semester' => '7', 'supervisor_id' => '7', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Meranie prevádzkových veličín', 'department' => '4220', 'credit' => '3', 'semester' => '7', 'supervisor_id' => '7', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Špeciálne jazykové prostriedky počítačov', 'department' => '4220', 'credit' => '3', 'semester' => '7', 'supervisor_id' => '7', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Technické prostriedky automatizovaného riad.', 'department' => '4220', 'credit' => '4', 'semester' => '7', 'supervisor_id' => '7', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Teória riadenia I.', 'department' => '4220', 'credit' => '5', 'semester' => '8', 'supervisor_id' => '7', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Laboratórne cvičenie z teórie riadenia I', 'department' => '4220', 'credit' => '2', 'semester' => '8', 'supervisor_id' => '7', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Experimentálna identifikácia', 'department' => '4220', 'credit' => '3', 'semester' => '8', 'supervisor_id' => '8', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Diplomová práca', 'department' => '4220', 'credit' => '30', 'semester' => '10', 'supervisor_id' => '8', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Riadenie technologických procesov 310Z', 'department' => '4220', 'credit' => '4', 'semester' => '9', 'supervisor_id' => '8', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Odborná prax', 'department' => '4220', 'credit' => '0', 'semester' => '8', 'supervisor_id' => '8', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Riadenie procesov', 'department' => '4220', 'credit' => '4', 'semester' => '7', 'supervisor_id' => '8', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Dynamika procesov', 'department' => '4220', 'credit' => '2', 'semester' => '8', 'supervisor_id' => '8', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Laboratórne cvičenia z dynamiky procesov', 'department' => '4220', 'credit' => '1', 'semester' => '8', 'supervisor_id' => '8', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Laboratórium špecializácie I.', 'department' => '4220', 'credit' => '6', 'semester' => '7', 'supervisor_id' => '9', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Modelovanie a riadenie technologických procesov', 'department' => '4220', 'credit' => '6', 'semester' => '8', 'supervisor_id' => '9', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Laboratórium špecializácie II', 'department' => '4220', 'credit' => '4', 'semester' => '8', 'supervisor_id' => '9', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Teória riadenia II.', 'department' => '4220', 'credit' => '4', 'semester' => '9', 'supervisor_id' => '9', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Riadenie technologických proc. anorg. výr. 210', 'department' => '4220', 'credit' => '3', 'semester' => '9', 'supervisor_id' => '9', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Inteligentné systémy riadenia', 'department' => '4220', 'credit' => '3', 'semester' => '9', 'supervisor_id' => '9', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Semestralny projekt', 'department' => '4220', 'credit' => '6', 'semester' => '9', 'supervisor_id' => '9', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Priemyselná aplikácia riadenia procesov', 'department' => '4220', 'credit' => '4', 'semester' => '9', 'supervisor_id' => '9', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Robust. riad. procesov', 'department' => '4220', 'credit' => '4', 'semester' => '9', 'supervisor_id' => '9', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Navrhovanie a projektovanie systémov aut.riad.', 'department' => '4220', 'credit' => '4', 'semester' => '9', 'supervisor_id' => '10', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Lab. cvič.z teórie riadenia II.', 'department' => '4220', 'credit' => '2', 'semester' => '9', 'supervisor_id' => '10', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Reaktorové inžinierstvo I', 'department' => '4230', 'credit' => '6', 'semester' => '8', 'supervisor_id' => '10', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Chemickoinžinierska termodynamika', 'department' => '4230', 'credit' => '7', 'semester' => '7', 'supervisor_id' => '10', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Nákladové inžinierstvo priemyselných projektov', 'department' => '4230', 'credit' => '2', 'semester' => '9', 'supervisor_id' => '10', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Kapitálový trh a podnikové financie', 'department' => '4240', 'credit' => '3', 'semester' => '8', 'supervisor_id' => '10', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Základy obchodného a finančného práva', 'department' => '4240', 'credit' => '2', 'semester' => '9', 'supervisor_id' => '10', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Teóra grúp a symetria', 'department' => '4270', 'credit' => '3', 'semester' => '7', 'supervisor_id' => '10', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Diskrétna matematika', 'department' => '4270', 'credit' => '3', 'semester' => '7', 'supervisor_id' => '10', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Programovanie a algoritmy', 'department' => '4270', 'credit' => '3', 'semester' => '7', 'supervisor_id' => '10', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Numerická matematika', 'department' => '4270', 'credit' => '3', 'semester' => '7', 'supervisor_id' => '11', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Laboratórium odboru I.', 'department' => '4270', 'credit' => '8', 'semester' => '7', 'supervisor_id' => '11', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Architektúra počítačov', 'department' => '4270', 'credit' => '3', 'semester' => '7', 'supervisor_id' => '11', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Umelá inteligencia v chémii', 'department' => '4270', 'credit' => '4', 'semester' => '8', 'supervisor_id' => '11', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Štatistika', 'department' => '4270', 'credit' => '4', 'semester' => '8', 'supervisor_id' => '11', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Laboratórium odboru II.', 'department' => '4270', 'credit' => '4', 'semester' => '8', 'supervisor_id' => '11', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Spracovanie textu a obrazu', 'department' => '4270', 'credit' => '3', 'semester' => '8', 'supervisor_id' => '11', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Odborná prax', 'department' => '4270', 'credit' => '0', 'semester' => '8', 'supervisor_id' => '11', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Databázové systémy', 'department' => '4270', 'credit' => '4', 'semester' => '9', 'supervisor_id' => '11', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Symbolické programovanie v chémii', 'department' => '4270', 'credit' => '4', 'semester' => '9', 'supervisor_id' => '11', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Laboratórium špecializácie', 'department' => '4270', 'credit' => '9', 'semester' => '9', 'supervisor_id' => '11', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Chemické informačné systémy', 'department' => '4270', 'credit' => '3', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Počítačová chémia', 'department' => '4270', 'credit' => '3', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Finančná matematika', 'department' => '4270', 'credit' => '3', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Diplomová práca', 'department' => '4270', 'credit' => '30', 'semester' => '10', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Hodnotenie vplyvov tech. na živ.prostr. a legisl.', 'department' => '4290', 'credit' => '3', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Rizikové vlastnosti látok', 'department' => '4290', 'credit' => '2', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Zneškod&#328;ovanie a zužitkovanie odpadov', 'department' => '4290', 'credit' => '2', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Teória automatického riadenia III', 'department' => '4220', 'credit' => '6', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Informatizácia a priemyselné informačné systémy II', 'department' => '4220', 'credit' => '3', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Laboratórne cvičenia z informatizácie a priemyselných informačných systémov II', 'department' => '4220', 'credit' => '2', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Optimalizácia procesov a výrob', 'department' => '4220', 'credit' => '5', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Diplomový projekt', 'department' => '4220', 'credit' => '6', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Základy obchodného a finančného práva', 'department' => '4240', 'credit' => '2', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Bezpečnostné inžinierstvo', 'department' => '4230', 'credit' => '3', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Teória chemických reaktorov', 'department' => '4230', 'credit' => '3', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Daňový systém', 'department' => '4240', 'credit' => '3', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Elektrochemické meranie procesných veličín', 'department' => '4220', 'credit' => '3', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Optické meranie procesných veličín', 'department' => '4220', 'credit' => '3', 'semester' => '9', 'supervisor_id' => '12', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Diplomová práca', 'department' => '4220', 'credit' => '24', 'semester' => '10', 'supervisor_id' => '13', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Inteligentné riadenie', 'department' => '4220', 'credit' => '3', 'semester' => '10', 'supervisor_id' => '13', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Neurónové siete', 'department' => '4220', 'credit' => '3', 'semester' => '10', 'supervisor_id' => '13', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Robustné riadenie', 'department' => '4220', 'credit' => '3', 'semester' => '10', 'supervisor_id' => '13', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Riadenie zložitých systémov', 'department' => '4220', 'credit' => '3', 'semester' => '10', 'supervisor_id' => '13', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Prediktívne riadenie', 'department' => '4220', 'credit' => '3', 'semester' => '10', 'supervisor_id' => '13', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Vybrané kapitoly z matematiky', 'department' => '4270', 'credit' => '5', 'semester' => '7', 'supervisor_id' => '13', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Teória automatického riadenia I', 'department' => '4220', 'credit' => '6', 'semester' => '7', 'supervisor_id' => '13', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Modelovanie v procesnom priemysle', 'department' => '4220', 'credit' => '3', 'semester' => '7', 'supervisor_id' => '14', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Laboratórne cvičenia z modelovania v procesnom priemysle', 'department' => '4220', 'credit' => '2', 'semester' => '7', 'supervisor_id' => '14', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Technické prostriedky automatizácie', 'department' => '4220', 'credit' => '3', 'semester' => '7', 'supervisor_id' => '14', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Laboratórne cvičenia z technických prostriedkov automatizácie', 'department' => '4220', 'credit' => '2', 'semester' => '7', 'supervisor_id' => '14', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Programovanie sieťových aplikácií', 'department' => '4220', 'credit' => '4', 'semester' => '7', 'supervisor_id' => '14', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Semestrálny projekt I', 'department' => '4220', 'credit' => '5', 'semester' => '7', 'supervisor_id' => '14', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Objektovo orientované programovanie', 'department' => '4220', 'credit' => '5', 'semester' => '8', 'supervisor_id' => '14', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Teória automatického riadenia II', 'department' => '4220', 'credit' => '6', 'semester' => '8', 'supervisor_id' => '14', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Identifikácia', 'department' => '4220', 'credit' => '3', 'semester' => '8', 'supervisor_id' => '14', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Laboratórne cvičenia z identifikácie', 'department' => '4220', 'credit' => '2', 'semester' => '8', 'supervisor_id' => '15', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Informatizácia a priemyselné informačné systémy I', 'department' => '4220', 'credit' => '2', 'semester' => '8', 'supervisor_id' => '15', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Laboratórne cvičenia z informatizácie a priemyselných informačných systémov I', 'department' => '4220', 'credit' => '2', 'semester' => '8', 'supervisor_id' => '15', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Semestrálny projekt II', 'department' => '4220', 'credit' => '6', 'semester' => '8', 'supervisor_id' => '15', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Finančný trh a podnikové financie', 'department' => '4240', 'credit' => '2', 'semester' => '8', 'supervisor_id' => '15', 'created_at' => now(),],
            ['type' => 2, 'title' => 'Marketing', 'department' => '4240', 'credit' => '2', 'semester' => '8', 'supervisor_id' => '15', 'created_at' => now(),],
        ]);
    }
}
