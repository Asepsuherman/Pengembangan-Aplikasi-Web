<?php
namespace App\Models;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstPangkat extends Model
{
 protected $table = 'mst_pangkat';
 protected $primaryKey = 'id';

 static $rules = ['nama_pangkat' => 'required',
 'pangkat_gol' => 'required'];
 protected $perPage = 10;
 /**
 * Attributes that should be mass-assignable.
 *
 * @var array
 */
 protected $fillable = ['nama_pangkat','pangkat_gol'];
 /**
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
 /*public function riwayatPangkats()
 {
 return $this->hasMany('App\Models\RiwayatPangkat', 'mst_pangkat_id', 'id');
 }*/

}