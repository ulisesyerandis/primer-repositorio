<?php 
 
namespace App\Models; 
 
use Illuminate\Database\Eloquent\Model; 
 
class StudentModel extends Model 
{ 
    protected $table = 'students'; // Nombre de la tabla en la base de datos 
    protected $primaryKey = 'id'; // Nombre de la columna de clave primaria 
    protected $string = 'name';
    public $timestamps = true; // Indica si el modelo debe tener timestamps 
 
    // Aquí puedes definir atributos adicionales, relaciones con otros modelos, etc. 
}