<?php

namespace Database\Factories;

use App\Models\Person;
use App\Models\Status;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class LeaveFactory extends Factory
{
    /**
     * Ajoute un nombre de jours ouvrables à une date
     *
     * @param Carbon $start
     * @param int $businessDays
     * @return Carbon
     */
    protected function addBusinessDays(Carbon $start, int $businessDays): Carbon
    {
        $date = $start->copy();

        while ($businessDays > 0) {
            $date->addDay();
            if ($date->isWeekday()) {
                $businessDays--;
            }
        }

        return $date;
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $faker = $this->faker;

        // ✅ Personne aléatoire
        $person = Person::inRandomOrder()->first();

        if (!$person) {
            // Sécurité si aucune personne en base
            return [];
        }

        // ✅ Type de congé aléatoire
        $type = Type::inRandomOrder()->first();

        if (!$type) {
            // Sécurité si aucun type
            return [];
        }

        // ✅ Status par défaut
        $status = Status::where('name', 'En attente')->first() ?? Status::first();

        // ✅ Durées fixes pour les congés exceptionnels
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

        // ✅ Détermination du nombre de jours
        if ($type->id == 12) {
            // Congé ordinaire annuel
            $joursDisponibles = $person->joursCongesAnnuelsDisponibles();

            if ($joursDisponibles <= 0) {
                // Simuler un minimum si plus de solde (pour faker)
                $numberOfDays = 1;
            } else {
                // Prendre un nombre réaliste dans le solde
                $numberOfDays = $faker->numberBetween(1, $joursDisponibles);
            }

        } else {
            // Congé exceptionnel : durée fixe
            $numberOfDays = $dureesExceptionnelles[$type->id] ?? 1;
        }

        // ✅ Date de début aléatoire réaliste
        $start = Carbon::instance($faker->dateTimeBetween('-1 year', '+1 month'));

        // ✅ Date de fin en excluant samedi/dimanche
        $end = $this->addBusinessDays($start, $numberOfDays);

        return [
            'start' => $start->format('Y-m-d'),
            'end' => $end->format('Y-m-d'),
            'number' => $numberOfDays,
            'type_id' => $type->id,
            'status_id' => $status->id,
            'person_id' => $person->id,
        ];
    }
}
