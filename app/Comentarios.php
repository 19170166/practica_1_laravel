<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comentarios';

    public function comentarios()
    {
        return $this->hasOne('app\Producto');
    }
    
}
