<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    // public function Index($controller = "welcome" ,$name = "Xin chào :))"){
    //     $data['name'] = $name;
    //     $data['fullname'] = "Day la full name trang chu";
    //     $data['lastname'] = $name;
    //     return view($controller, $data);
    // }
    public function admin($id){
        return "hello admin";
    }

   
    public function index(){
        return view('tc');
    }
    public function login(){
        return view('login');
    }

    // public function TrangChu($name = "Đây là trang chủ"){
    //     $data['name'] = 'Đây là trang chủ vip pro';
    //     return view('trangchu', $data);
    // }
    // public function GioiThieu(){
    //     return view('gioithieu');
    // }
    // public function LienHe(){
    //     return view('lienhe');
    // }
    // public function SanPham($product = "Bàn và ghế"){
    //     $data['name'] = "Bàn và Ghế!";
    //     if($product == "ban"){
    //         $data['name'] = "Đây là sản phẩm bàn!";
    //     }
    //     if($product == "ghe"){
    //         $data['name'] = "Đây là sản phẩm ghế!";
    //     }
    //     return view('sanpham', $data);
    // }
}
