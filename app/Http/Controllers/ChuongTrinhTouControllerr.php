<?php

namespace App\Http\Controllers;

use App\Models\ChuongTrinhTour;
use Illuminate\Http\Request;

class ChuongTrinhTouControllerr extends Controller
{

    private $chuongtrinhtour;

    const _PER_PAGE = 5;

    public function __construct()
    {
        $this->chuongtrinhtour = new ChuongTrinhTour();
    }


    // get
    public function addChuongTrinhTour()
    {
        return view('admin.chuongtrinhtour.add');
    }

     public function postaddChuongTrinhTour(Request $request)
    {
        $request->validate([
            'tieu_de' => 'required',
            'id_tour' => 'not_in:0',
            'ngay_thu' => 'required|numeric',
            'mo_ta' => 'required',
           

        ],[
            'tieu_de.required' => 'Tiêu đề bắt buộc phải nhập',
            'id_tour.not_in' => 'Phải chọn tour',
            'ngay_thu.required' => 'Ngày thứ bắt buộc phải nhập',
            'ngay_thu.numeric' => 'Phải là số',
            'mo_ta.required' => 'Mô tả bắt buộc phải nhập',
        ]);

         $dataInsert = [
            'tieu_de' => $request->tieu_de,
            'id_tour' => $request->id_tour,
            'ngay_thu' => $request->ngay_thu,
            'mo_ta' => $request->mo_ta,          
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'),
        ];
        
        $this->chuongtrinhtour->addChuongTrinhTour($dataInsert);
        return back()->with('thongbao','Thêm chương trình tour  thành công');
    }

}