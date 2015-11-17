<?php
namespace Acme\Transformer;

use app\Models\Instructor;
use League\Fractal;

class InstructorTransformer extends Fractal\TransformerAbstract
{
	public function transform(Book $book)
	{
	    return [
	        'id'      => (int) $book->id,
	        'title'   => $book->title,
	        'year'    => (int) $book->yr,
            'links'   => [
                [
                    'rel' => 'self',
                    'uri' => '/books/'.$book->id,
                ]
            ],
	    ];
	}
}