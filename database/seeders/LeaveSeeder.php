<?php

namespace Database\Seeders;

use App\Models\Leave;
use App\Models\Person;
use Illuminate\Database\Seeder;
use App\Models\Status;
use App\Models\Type;
use Illuminate\Support\Carbon;
use Faker\Factory as Faker;

class LeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Statut par défaut
        $status = Status::where('name', 'En attente')->first() ?? Status::first();

        // Types exceptionnels : ID 1 à 11
        $typesExceptionnels = Type::whereBetween('id', [1, 11])->get()->keyBy('id');

        // Durées fixes des congés exceptionnels
        $dureesExceptionnelles = [
            1 => 4,
            2 => 3,
            3 => 3,
            4 => 3,
            5 => 2,
            6 => 2,
            7 => 2,
            8 => 2,
            9 => 2,
            10 => 2,
            11 => 1,
        ];

        // Type congé ordinaire
        $typeAnnuel = Type::find(12);

        if (!$typeAnnuel) {
            $this->command->error("⚠️ Type ID 12 (congé ordinaire) introuvable. Abandon.");
            return;
        }

        $people = Person::all();

        foreach ($people as $person) {

            // ✅ Génération des congés ANNUELS (type_id=12)
            $droitTotal = $person->calculerDureeCongeAnnuel();

            if ($droitTotal > 0) {
                $nombreConges = rand(1, 2);
                $joursRestants = $droitTotal;

                for ($i = 0; $i < $nombreConges && $joursRestants > 0; $i++) {
                    $numberOfDays = rand(1, $joursRestants);
                    $joursRestants -= $numberOfDays;

                    $start = $faker->dateTimeBetween('first day of january this year', 'last day of december this year');
                    $end = (clone $start)->modify("+{$numberOfDays} days");

                    Leave::create([
                        'start' => Carbon::instance($start)->format('Y-m-d'),
                        'end' => Carbon::instance($end)->format('Y-m-d'),
                        'number' => $numberOfDays,
                        'type_id' => $typeAnnuel->id,
                        'status_id' => $status->id,
                        'person_id' => $person->id,
                    ]);
                }
            }

            // ✅ Génération des congés EXCEPTIONNELS (0 à 2)
            $nombreCongesExceptionnels = rand(0, 2);
            if ($nombreCongesExceptionnels > 0) {
                for ($i = 0; $i < $nombreCongesExceptionnels; $i++) {
                    $type = $typesExceptionnels->random();

                    $numberOfDays = $dureesExceptionnelles[$type->id];

                    $start = $faker->dateTimeBetween('-1 year', 'now');
                    $end = (clone $start)->modify("+{$numberOfDays} days");

                    Leave::create([
                        'start' => Carbon::instance($start)->format('Y-m-d'),
                        'end' => Carbon::instance($end)->format('Y-m-d'),
                        'number' => $numberOfDays,
                        'type_id' => $type->id,
                        'status_id' => $status->id,
                        'person_id' => $person->id,
                    ]);
                }
            }
        }

        $this->command->info("✅ Fakes congés générés pour toutes les personnes !");
    }
}
