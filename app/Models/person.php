<?php 
namespace App\Models;
use CodeIgniter\Model;
class Person extends Model
{
    protected $table = 'person';
    protected $primaryKey = 'person_id';
    
    protected $allowedFields = ['personq'];
}