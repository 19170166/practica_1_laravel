<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'productos';

    public function productos()
    {
        return $this->hasMany('app/Comentarios');
    }
}
