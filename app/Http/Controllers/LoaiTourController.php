<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiTour;

class LoaiTourController extends Controller
{
    private $loaiTour;
    
    public function __construct()
    {
        $this->loaiTour = new LoaiTour();
    }

    public function index(){

        $loaitour = $this->loaiTour->getAllLoaiTour();
        
        return view('admin.loaitour.index', compact('loaitour'));
    }

    public function addLoaiTour(){

        
        return view('admin.loaitour.add');
    }

    public function postaddLoaiTour(Request $request){

        $request->validate([
            'ten_loai_tour' => 'required',
        ],[
            'ten_loai_tour.required' => 'Tên loại tour bắt buộc phải nhập',
        ]);

        
        $dataInsert = [
            $request->ten_loai_tour,
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
        ];

        $this->loaiTour->addLoaiTour($dataInsert);
        
        return back()->with('thongbao','Thêm loại tour thành công');
    }
}