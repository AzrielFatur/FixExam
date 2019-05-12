<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // SERVICE
        $service = DB::table('service')->get();
        return view('index',['service' =>$service]);
        
        // DATA PT
        $datapt = DB::table('datapt')->get();
        return view('index',['datapt' =>$datapt]);
    }

    public function myabout()
    {
        
        // DATA PT
        $about = DB::table('about')->get();
        return view('myabout',['about' =>$about]);
    }

    public function datapt()
    {
        
        // DATA PT
        $datapt = DB::table('datapt')->get();
        return view('datapt',['datapt' =>$datapt]);
    }
    
    public function gallery()
    {
        
        // DATA PT
        $gallery = DB::table('gallery')->get();
        return view('gallery',['gallery' =>$gallery]);
    }

    public function about()
    {
        
        // DATA PT
        $about = DB::table('about')->get();
        return view('about',['about' =>$about]);
    }

    public function tambah()
    {
        // Manggil view tambah
        return view('tambah');
    }

    public function store(Request $request)
    {
        // Tambah data ke table service
        DB::table('service')->insert([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan

            ]);            
        // Alihkan kehalaman service
        return redirect('/service');
    }

    public function ubah($id) 
    {
        // mengambil data berdasarkan id
        $service = DB::table('service')->where('id',$id)->get();

        // Passing data service yang didapat dari view ubah.blade.php
        return view('ubah',['service' => $service]);
    }

    // DATA PT
    public function ubahdatapt($id) 
    {
        // mengambil data berdasarkan id
        $datapt = DB::table('datapt')->where('id',$id)->get();

        // Passing data service yang didapat dari view datapt.blade.php
        return view('ubahdatapt',['datapt' => $datapt]);
    }
    
    // ABOUT PT
    public function ubahabout($id) 
    {
        // mengambil data berdasarkan id
        $about = DB::table('about')->where('id',$id)->get();

        // Passing data service yang didapat dari view datapt.blade.php
        return view('ubahabout',['about' => $about]);
    }

    // GALLERY
    public function ubahgallery($id) 
    {
        // mengambil data berdasarkan id
        $gallery = DB::table('gallery')->where('id',$id)->get();

        // Passing data service yang didapat dari view datapt.blade.php
        return view('ubahgallery',['gallery' => $gallery]);
    }

    // DATA SERVICE
    public function update(Request $request )   
    {
        // Perbarui data service
        DB::table('service')->where('id',$request->id)->update([
        'judul' => $request->judul,
        'keterangan' => $request->keterangan,
        'gambar' => $request->pilihgambar
        ]);        
        

        // Alihkan halaman ke halaman service
        return redirect('/service');
    }

    public function updatedatapt(Request $request )   
    {
        // Perbarui data datapt
        DB::table('datapt')->where('id',$request->id)->update([
        'location' => $request->location,
        'telp' => $request->telp,
        'fax' => $request->fax,
        'mail' => $request->mail    
        ]);

        // Alihkan halaman ke halaman service
        return redirect('/data');
    }

    public function updateabout(Request $request )   
    {
        // Perbarui data datapt
        DB::table('about')->where('id',$request->id)->update([
        'text' => $request->text,
        'gambar' => $request->pilihgambar,
        'visi' => $request->visi,
        'misi' => $request->misi
        ]);

        // Alihkan halaman ke halaman service
        return redirect('/about');
    }

    public function updategallery(Request $request )   
    {
        // Perbarui data Gallery
        DB::table('gallery')->where('id',$request->id)->update([
        'gallery' => $request->gallery,
        ]);

        // Alihkan halaman ke halaman service
        return redirect('/gallery');
    }

    public function hapus($id)
    {
        // Menghapus data service berdasarkan id
        DB::table('service')->where('id',$id)->delete();

        // Alihkan data ke halaman service
        return redirect('/service');
    }

    public function welcome()
    {
        $service = DB::table('service')->get();

        return view('welcome',['service' =>$service]);
    }
}