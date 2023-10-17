<?php 
namespace App\Models;
use CodeIgniter\Model;
class RoomaddModel extends Model
{
    protected $table = 'roomadd';
    protected $primaryKey = 'roomadd_id';
    
    protected $allowedFields = ['category_name'];
}