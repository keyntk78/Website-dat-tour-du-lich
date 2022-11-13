<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ChiTietTourr extends Model
{
    use HasFactory;
    protected $table = 'chitiettour';

    //$filters = [], $keyword = null, $perpage = null
    public function getAllChiTietTour ($filters = [], $keyword = null, $perpage = null){
        $chitiettours = DB::table($this->table)
        ->select('chitiettour.*','tour.ten_tour as tour',)
        ->join('tour', 'chitiettour.id_tour', '=', 'tour.id')
        ->orderBy('tour.updated_at', 'DESC');
        
        if (!empty($filters)) {
            $chitiettours = $chitiettours->where($filters);
        }

         if (!empty($keyword)) {
            $chitiettours = $chitiettours->where(function($query) use ($keyword) {
                $query->orwhere('ten_tour', 'like', '%'.$keyword.'%');
            });
        }

        if(!empty($perpage)){
             $chitiettours = $chitiettours->paginate($perpage); // $perpage bản ghi trên 1 trang
        } else {
            $chitiettours = $chitiettours->get();
        }

        // $chitiettours= $chitiettours->get();
   
        return $chitiettours;
    }

    public function addChiTietTour($data)
    {
       return DB::table($this->table)->insert($data);
    }


    // lấy danh sách các chi tiết tour và tên tour // trang chủ
    public function getCTTTrangChu()
    {
       $list = DB::table($this->table)
        ->select('chitiettour.*','tour.ten_tour as tour', 'tour.lich_trinh as lich_trinh')
        ->join('tour', 'chitiettour.id_tour', '=', 'tour.id')
        ->orderBy('tour.updated_at', 'DESC')
        ->take(5)
        ->get();
        
       return $list;
    }

    // Lấy thông tin chi tiết tour theo id
     public function getXemChiTietTour($id)
    {
       $deltail = DB::table($this->table)
        ->select('chitiettour.*','tour.ten_tour as tour', 'tour.lich_trinh as lich_trinh','tour.mo_ta_tour as mo_ta_tour','tour.gia_nguoi_lon as gia_nguoi_lon','tour.gia_tre_em as gia_tre_em', 'tour.so_ngay as so_ngay', 'tour.so_dem as so_dem', 'tour.phuong_tien as phuong_tien', 'tour.so_luong_toi_da as so_luong_toi_da' )
        ->join('tour', 'chitiettour.id_tour', '=', 'tour.id')
        ->where('chitiettour.id', '=', $id)
        ->get();

      
       return $deltail;
    }




}