<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sections')->delete();
        
        \DB::table('sections')->insert(array (
            0 => 
            array (
                'id' => 5,
                'htmlid' => 'clients',
            ),
            1 => 
            array (
                'id' => 6,
                'htmlid' => 'contact',
            ),
            2 => 
            array (
                'id' => 4,
                'htmlid' => 'feedback',
            ),
            3 => 
            array (
                'id' => 2,
                'htmlid' => 'guideline',
            ),
            4 => 
            array (
                'id' => 3,
                'htmlid' => 'services',
            ),
            5 => 
            array (
                'id' => 1,
                'htmlid' => 'welcome',
            ),
        ));
        
        
    }
}