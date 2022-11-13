<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChiTietTourr;


class PageController extends Controller
{


    private $chitiettours;


    public function __construct()
    {
        $this->chitiettours = new ChiTietTourr();
    }

      //lấy all
    public function index(){
        $chitiettour = $this->chitiettours->getCTTTrangChu();
        return view('pages.trangchu', compact('chitiettour'));
    }

    public function chitiettour(Request $request){
        
        $id = $request->route('id');
        $toptourlienquan = $this->chitiettours->getCTTTrangChu();
        $chitiettour =   $this->chitiettours->getXemChiTietTour($id);
        $chitiettour = $chitiettour[0];
        
        return view('pages.chitiettour', compact('chitiettour', 'toptourlienquan'));
    }

    public function loaitour(){
        
        return view('pages.loaitour');
    }

    public function dangnhap(){
        
        return view('pages.dangnhap');
    }

     public function dangky(){
        
        return view('pages.dangky');
    }
}