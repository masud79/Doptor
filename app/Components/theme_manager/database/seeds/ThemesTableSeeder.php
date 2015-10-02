<?php

use Illuminate\Database\Seeder;

class ThemesTableSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();

        $themes = array(
                array(
                    'name'        => 'Default Public Theme',
                    'version'     => '1.0',
                    'author'      => '',
                    'description' => 'Default Public Theme',
                    'screenshot'  => '',
                    'directory'   => 'default',
                    'target'      => 'public',
                    'created_by'  => 1
                ),
                array(
                    'name'        => 'Default Admin Theme',
                    'version'     => '1.0',
                    'author'      => '',
                    'description' => 'Default Admin Theme',
                    'screenshot'  => '',
                    'directory'   => 'default',
                    'target'      => 'admin',
                    'created_by'  => 1
                ),
                array(
                    'name'        => 'Default Backend Theme',
                    'version'     => '1.0',
                    'author'      => '',
                    'description' => 'Default Backend Theme',
                    'screenshot'  => '',
                    'directory'   => 'default',
                    'target'      => 'backend',
                    'created_by'  => 1
                ),
                array(
                    'name'        => 'Default Public Theme 2',
                    'version'     => '1.0',
                    'author'      => '',
                    'description' => 'Default Public Theme 2',
                    'screenshot'  => '',
                    'directory'   => 'default2',
                    'target'      => 'public',
                    'created_by'  => 1
                ),
                array(
                    'name'        => 'Elos Theme',
                    'version'     => '1.0',
                    'author'      => '',
                    'description' => 'Elos Theme',
                    'screenshot'  => 'assets/public/elos/images/elos_screenshot.png',
                    'directory'   => 'elos',
                    'target'      => 'public',
                    'created_by'  => 1
                ),
            );

        DB::table('themes')->insert($themes);

    }

}
