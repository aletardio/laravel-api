<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $types = [
            'Frontend',
            'Backend',
            'UI/UI',
            'Database',
            'Analisys',
            'Testing'
        ];

        foreach ($types as $type_name) {
            $type = new Type();
            $type->name = $type_name;
            $type->slug = Str::slug($type_name, '-');

            $type->save();
        }
    }
}
