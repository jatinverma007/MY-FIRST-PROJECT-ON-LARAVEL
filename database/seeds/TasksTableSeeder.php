<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('tasks')->delete();

        $tasks = array(
            ['id' => 1, 'name' => 'Task 1', 'slug' => 'task-1', 'project_id' => 1, 'completed' => false, 'description' => 'My first task', 'created_at' => ' 2015-02-05 01:25:43', 'updated_at' => ' 2015-02-05 01:25:43'],
            ['id' => 2, 'name' => 'Task 2', 'slug' => 'task-2', 'project_id' => 1, 'completed' => false, 'description' => 'My first task', 'created_at' => ' 2015-02-05 01:25:43', 'updated_at' => ' 2015-02-05 01:25:43'],
            ['id' => 3, 'name' => 'Task 3', 'slug' => 'task-3', 'project_id' => 1, 'completed' => false, 'description' => 'My first task', 'created_at' => ' 2015-02-05 01:25:43', 'updated_at' => ' 2015-02-05 01:25:43'],
            ['id' => 4, 'name' => 'Task 4', 'slug' => 'task-4', 'project_id' => 1, 'completed' => true, 'description' => 'My second task', 'created_at' => ' 2015-02-05 01:25:43', 'updated_at' => ' 2015-02-05 01:25:43'],
            ['id' => 5, 'name' => 'Task 5', 'slug' => 'task-5', 'project_id' => 1, 'completed' => true, 'description' => 'My third task', 'created_at' => ' 2015-02-05 01:25:43', 'updated_at' => ' 2015-02-05 01:25:43'],
            ['id' => 6, 'name' => 'Task 6', 'slug' => 'task-6', 'project_id' => 2, 'completed' => true, 'description' => 'My fourth task', 'created_at' => ' 2015-02-05 01:25:43', 'updated_at' => ' 2015-02-05 01:25:43'],
            ['id' => 7, 'name' => 'Task 7', 'slug' => 'task-7', 'project_id' => 2, 'completed' => false, 'description' => 'My fifth task', 'created_at' =>' 2015-02-05 01:25:43', 'updated_at' => ' 2015-02-05 01:25:43'],
        );

        //// Uncomment the below to run the seeder
        DB::table('tasks')->insert($tasks);
    }


}