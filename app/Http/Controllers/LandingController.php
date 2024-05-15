<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Kategori;
use App\Models\ObjekWisata;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $datas = ObjekWisata::orderBy('created_at','DESC')->get();
        $datas3 = ObjekWisata::orderBy('created_at', 'DESC')->paginate(3);
        $kategoris = Kategori::orderBy('created_at','desc')->get();
        return view('index',compact('datas','datas3','kategoris'));
    }

    public function about(){
        $kategoris = Kategori::orderBy('created_at', 'desc')->get();
        return view('about',compact('kategoris'));
    }

    public function destination(){
        $kategoris = Kategori::orderBy('created_at', 'desc')->get();
        $datas = ObjekWisata::orderBy('created_at','DESC')->get();
        return view('destination',compact('datas', 'kategoris'));
    }

    public function destinationkategori($id)
    {
        $kategoris = Kategori::orderBy('created_at', 'desc')->get();
        $kategori = Kategori::find($id);
        $datas = ObjekWisata::where('kategori_id', $id)->orderBy('created_at', 'DESC')->get();
        return view('destinationkategori', compact('datas', 'kategoris','kategori'));
    }

    public function detail($id){
        $kategoris = Kategori::orderBy('created_at', 'desc')->get();
        $data = ObjekWisata::find($id);
        $images = Image::where('objek_wisata_id', $id)->get();
        return view('detail',compact('data','images', 'kategoris'));
    }

    public function contact(){
        $kategoris = Kategori::orderBy('created_at', 'desc')->get();
        return view('contact',compact('kategoris'));
    }

    public function search(Request $request){
        $kategoris = Kategori::orderBy('created_at', 'desc')->get();
        $key = $request->key;
        $datas = ObjekWisata::
            where('nama', 'like', "%{$key}%")
            ->orWhere('alamat', 'like', "%{$key}%")
            ->orWhereHas('kategori', function ($q) use ($key) {
                $q->where('nama_kategori', 'like', "%{$key}%");
            })
            ->orderBy('created_at', 'DESC')->get();
        return view('destination', compact('datas', 'kategoris', 'key'));
    }
}
