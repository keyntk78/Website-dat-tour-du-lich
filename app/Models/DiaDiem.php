<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DiaDiem extends Model
{
    use HasFactory;
    protected $table = 'diadiem';
    
    public function getAllDiaDiem(){
        //  lấy tất cả bản ghi table
      //  $list = DB::select('SELECT * FROM '.$this->table.' ORDER BY updated_at DESC');
        $list = DB::select('SELECT * FROM diadiem JOIN tinh ON diadiem.id_tinh = tinh.id_tinh ORDER BY diadiem.updated_at DESC');


        //$list = DB::table($this->table)->get();
        return $list;
    }

    
    public function addDiaDiem($data)
    {
      return  DB::insert('INSERT INTO diadiem (diem_den, id_tinh, mo_ta, created_at, updated_at) VALUES (?,?,?,?,?)', $data);
    }

      // lấy danh sách  dia diem sắp xếp theo diem den
    public function getAll()
    {
       $diadiems = DB::table($this->table)
       ->orderBy('diem_den', 'ASC')
       ->get();

       return $diadiems;
    }

}