<?php

namespace App\Commands;

use App\Commands\Command;

class BlogCreateCommand extends Command
{
    public $title;
    public $content;


    public function __construct($title, $content, )
    {
    $this->title = $title;
        $this->content= $content;
    }
}
