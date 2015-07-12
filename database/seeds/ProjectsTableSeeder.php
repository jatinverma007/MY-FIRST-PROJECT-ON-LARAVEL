<?php


use illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->delete();

        $projects = array(

                ['id' => 1, 'name' => 'Project 1', 'slug' => 'project-1', 'created_at' => '2015-02-05 01:25:43', 'updated_at' => '2015-02-05 01:25:43'],
                ['id' => 2, 'name' => 'Project 2', 'slug' => 'project-2', 'created_at' => '2015-02-05 01:25:43 ', 'updated_at' => '2015-02-05 01:25:43'],
                ['id' => 3, 'name' => 'Project 3', 'slug' => 'project-3', 'created_at' => '2015-02-05 01:25:43', 'updated_at' => '2015-02-05 01:25:43'],


            );
        DB::table('projects')->insert($projects);

    }


}