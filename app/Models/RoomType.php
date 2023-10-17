<?php 
namespace App\Models;
use CodeIgniter\Model;
class RoomType extends Model
{
    protected $table = 'roomcatagory';
    protected $primaryKey = 'room_id';
    
    protected $allowedFields = ['type_name'];
}