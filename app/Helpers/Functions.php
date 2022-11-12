<?php 

    use App\Models\Tinh;
    use App\Models\LoaiTour;
    use App\Models\DiaDiem;


    function getAllTinh(){
        $tinhs = new Tinh();
        return $tinhs->getAll();
    }

    function getAllLoaiTour(){
        $loaitours = new LoaiTour();
        return $loaitours->getAll();
    }

    function getAllDiaDiem(){
        $diadiems = new DiaDiem();
        return $diadiems->getAll();
    }
?>