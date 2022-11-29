<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2022-11-29 13:04:51',
                'updated_at' => '2022-11-29 13:04:51',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_sections',
                'table_name' => 'sections',
                'created_at' => '2022-11-29 13:07:23',
                'updated_at' => '2022-11-29 13:07:23',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_sections',
                'table_name' => 'sections',
                'created_at' => '2022-11-29 13:07:23',
                'updated_at' => '2022-11-29 13:07:23',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_sections',
                'table_name' => 'sections',
                'created_at' => '2022-11-29 13:07:23',
                'updated_at' => '2022-11-29 13:07:23',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_sections',
                'table_name' => 'sections',
                'created_at' => '2022-11-29 13:07:23',
                'updated_at' => '2022-11-29 13:07:23',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_sections',
                'table_name' => 'sections',
                'created_at' => '2022-11-29 13:07:23',
                'updated_at' => '2022-11-29 13:07:23',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_contents',
                'table_name' => 'contents',
                'created_at' => '2022-11-29 13:07:40',
                'updated_at' => '2022-11-29 13:07:40',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_contents',
                'table_name' => 'contents',
                'created_at' => '2022-11-29 13:07:40',
                'updated_at' => '2022-11-29 13:07:40',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_contents',
                'table_name' => 'contents',
                'created_at' => '2022-11-29 13:07:40',
                'updated_at' => '2022-11-29 13:07:40',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_contents',
                'table_name' => 'contents',
                'created_at' => '2022-11-29 13:07:40',
                'updated_at' => '2022-11-29 13:07:40',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_contents',
                'table_name' => 'contents',
                'created_at' => '2022-11-29 13:07:40',
                'updated_at' => '2022-11-29 13:07:40',
            ),
        ));
        
        
    }
}