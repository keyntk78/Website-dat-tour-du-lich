<?php

namespace App\Http\Controllers;
use App\Models\DiaDiem;
use App\Models\Tinh;
use Illuminate\Http\Request;

class DiaDiemController extends Controller
{
    
    private $diaDiem;
    private $tinh;
    
    public function __construct()
    {
        $this->diaDiem = new DiaDiem();
        $this->tinh = new Tinh();

    }

    public function index(){

        $diadiem = $this->diaDiem->getAllDiaDiem();
        
        return view('admin.diadiem.index', compact('diadiem'));
    }

    public function addDiaDiem(){

        $tinh = $this->tinh->getAllTinh();
        return view('admin.diadiem.add', compact('tinh'));
    }

    public function postaddDiaDiem(Request $request){

         $request->validate([
            'diem_den' => 'required',
            'mo_ta' => 'required',
            'id_tinh' => 'required',


        ],[
            'diem_den.required' => 'Điểm đến bắt buộc phải nhập',
            'mo_ta.required' => 'Mô tả bắt buộc phải nhập',
            'id_tinh.required' => 'Tỉnh phải bắt buộc phải chọn'
        ]);


        $dataInsert = [
            $request->diem_den,
            $request->id_tinh,
            $request->mo_ta,
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
        ];

        $this->diaDiem->addDiaDiem($dataInsert);
        
        return redirect()->route('diadiem.index')->with('thongbao','Thêm địa điểm thành công');

    }
}