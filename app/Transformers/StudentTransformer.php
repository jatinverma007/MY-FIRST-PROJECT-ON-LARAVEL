<?php namespace App\Transformers;
/**
 * Created by PhpStorm.
 * User: jatin
 * Date: 2/7/15
 * Time: 10:50 AM
 */

namespace App\Transformers;


use App\student;
use League\Fractal\TransformerAbstract;

class StudentTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['qualification'];
    protected $defaultIncludes = ['phones'];
    public function transformer(student $student)
    {

        return [
            'id' => (int)$student->id,
          'name' => $student->first_name . ' ' .$student->last_name,
            'email' => $student->email,

        ];
    }
    public function IncludePhone($phones)
    {

    }
}