<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    protected $table='aviones';

    protected $primaryKey = 'serie';

    protected $fillable =['modelo','longitud','capacidad','velocidad','alcance'];

    protected $hidden =['updated_at','created_at'];

    // Definimos a continuación la relación de esta tabla con otras.
	// Ejemplos de relaciones:
	// 1 usuario tiene 1 teléfono   ->hasOne()
	// 1 teléfono pertenece a 1 usuario   ->belongsTo()
	// 1 post tiene muchos comentarios  -> hasMany()
	// 1 comentario pertenece a 1 post ->belongsTo()
	// 1 usuario puede tener muchos roles  ->belongsToMany()
	//  etc..

    public function fabricante(){
    	return  $this->belongsTo('App\Fabricante');
    }

}
