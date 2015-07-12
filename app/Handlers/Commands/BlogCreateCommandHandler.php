<?php

namespace App\Handlers\Commands;

use App\Commands\BlogCreateCommand;
use Illuminate\Queue\InteractsWithQueue;

class BlogCreateCommandHandler
{
    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the command.
     *
     * @param  BlogCreateCommand  $command
     * @return void
     */
    public function handle(BlogCreateCommand $command)
    {
        $blog = new Blog();
        $blog->title = $command->title;
        $blog->content = $command->content;
        $blog->save();
        $blog->tags()->attach($command->);
        $blog->save();
    }
}
