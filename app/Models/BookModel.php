<?php 
namespace App\Models;
use CodeIgniter\Model;


class BookModel extends Model{
    protected $table = 'book';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['address', 'roomtype', 'guests',
     'first', 'last', 'contract', 'arridate', 'arritime', 'depdate', 'deptime', 'stay', 'status',];
     }