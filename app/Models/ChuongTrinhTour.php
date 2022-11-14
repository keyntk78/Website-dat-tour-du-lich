<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ChuongTrinhTour extends Model
{
    use HasFactory;
    protected $table = 'chuongtrinhtour';

    public function addChuongTrinhTour($data)
    {
       return DB::table($this->table)->insert($data);
    }


    // lấy danh sách chuongtrinhtour theo id_tour
    public function getAllChuongTrinhTourIDTour($id)
    {
       return DB::table($this->table)->where('id_tour',$id)->get();
    }
}