<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoaiTour extends Model
{
    use HasFactory;

    protected $table = 'loaitour';
    
    public function getAllLoaiTour(){
        //  lấy tất cả bản ghi table
        $list = DB::select('SELECT * FROM '.$this->table.' ORDER BY updated_at DESC');

        //$list = DB::table($this->table)->get();
        return $list;
    }

    public function addLoaiTour($data)
    {
      return  DB::insert('INSERT INTO '.$this->table.' (ten_loai_tour, created_at, updated_at) VALUES (?,?,?)', $data);
    }

     // lấy danh sách loaij tour sắp xếp theo họ tên
    public function getAll()
    {
       $loaitours = DB::table($this->table)
       ->orderBy('ten_loai_tour', 'ASC')
       ->get();

       return $loaitours;
    }

}