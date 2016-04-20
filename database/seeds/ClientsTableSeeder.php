<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::truncate();

        Client::create([
                'serial' => '1',
                'info' => 'Ulica: mileticeva 28, pib:2000394885',
                'created_on' => '2016-04-20',
                'public_book' => 'Sluzbeni Glasnik',
            ]);
        Client::create([
                'serial' => '2',
                'info' => 'Ulica: mileticeva 222, pib:20003923885',
                'created_on' => '2016-03-20',
                'public_book' => 'Sluzbeni Glasnik',
            ]);
        Client::create([
                'serial' => '3',
                'info' => 'Ulica: Proleterska 23, pib:00066661848',
                'created_on' => '2016-04-18',
                'public_book' => 'Zute Strane',
            ]);
    }
}
