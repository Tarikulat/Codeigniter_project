<?php 
namespace App\Models;
use CodeIgniter\Model;
class EmployModel extends Model
{
    protected $table = 'employs';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'email', 'phone', 'age', 'designation','image',]; 
}