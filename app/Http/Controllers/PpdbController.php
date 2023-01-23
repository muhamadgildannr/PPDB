<?php

namespace App\Http\Controllers;

use App\Models\ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\pembayaran;


use App\Models\User;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],[
            'email.exists' => "This email doesn't exists"
        ]);

        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect()->route('dashboard');
        } else {
            return redirect('/login')->with('fail', "Gagal login, periksa dan coba lagi!");
        }
    }

     public function print()
     {
         $item = Ppdb::latest()->first();
 
         return view('tampilan.print' , compact('item'));
     }

     public function login()
     {
         return view('tampilan.login');
     }
    public function register()
     {
         return view('tampilan.register');
     }
    public function home(){
        return view('tampilan.index');
    }
    public function users()
     {
         $users=User::all();
         return view('tampilan.users' , compact('users'));
     }
    public function index()
    {
        $users=User::all();
        return view('tampilan.index' , compact('users'));
    }
    public function profileUpload()
     {
         return view('tampilan.upload-profile');
     }
     public function profile()
     {
         $users=User::where('id', Auth::user()->id)->first();
         return view('tampilan.profile' , compact('users'));
     }

     public function validasi($user_id){
   
        Pembayaran::where('user_id', '=', $user_id)->update([
            'status' => 1,
        ]);
        return redirect()->back()->with('done', 'Berhasil Validasi');
    }

    public function tolak($user_id){
        Pembayaran::where('user_id', '=', $user_id)->update([
            'status' => 2,
        ]);
        return redirect()->back()->with('done', 'Permintaan Di tolak');
    }
     public function changeProfile (Request $request)
     {
         $request->validate([
             'image_profile' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
         ]);
 
         $image = $request->file('image_profile');
         $imgName = time().'.'.$image->extension();
         if(!file_exists(public_path('/assets/img/'.$image->getClientOriginalName()))){
             $destinationPath = public_path('/assets/img/');
             $image->move($destinationPath, $imgName);
             $uploaded = $imgName;
         }else{
             $uploaded = $image->getClientOriginalName();
         }
 
         User::where('id', Auth::user()->id)->update([
             'image_profile' => $uploaded
         ]);
 
         return redirect()->route('dashboard.profile')->with('successUploadImg', 'Foto Profile Berhasil diperbarui');
     }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'jk' => 'required',
            'name' => 'required',
            'asal_sekolah' => 'required',
            'asal_sekolah_text' => 'nullable',
            'email' => 'required',
            'no_hp' => 'required',
            'no_hp_ayah' => 'required',
            'no_hp_ibu' => 'required',
        ]);

        Ppdb::create($request->all());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->nisn),
        ]);

        return redirect()->route('print')->with('success', 'Data pendaftaran siswa berhasil dibuat!');
    }

    public function error()
     {
         return view('tampilan.error');
     }
    public function dashboard()
    {
        return view('tampilan.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function pembayaran()
     {
        // $users=User::all();
        $users = Pembayaran::with('user')->paginate(5);
        $item = Pembayaran::where('user_id', '=', Auth::user()->id)->first();
         return view('tampilan.pembayaran' , compact('item' , 'users'));
     }
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function show(ppdb $ppdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit(ppdb $ppdb)
    {
        $item = Pembayaran::where('user_id', '=', Auth::user()->id)->first();
        return view('tampilan.pembayaran', compact('item'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function uploadPembayaran (Request $request)
     {
         $request->validate([
             'nama_bank' => 'required',
             'nama_pemilik' => 'required',
             'nominal' => 'required',
             'foto_pembayaran' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
             'nama_bank_text' => 'nullable',
         ]);
 
         $image = $request->file('foto_pembayaran');
          $imgName = time().'.'.$image->extension();
          if(!file_exists(public_path('/assets/img/'.$image->getClientOriginalName()))){
              $destinationPath = public_path('/assets/img/');
              $image->move($destinationPath, $imgName);
              $uploaded = $imgName;
          }else{
              $uploaded = $image->getClientOriginalName();
          }
 
         pembayaran::create([
             'nama_bank' => $request->nama_bank,
             'nama_pemilik' => $request->nama_pemilik,
             'nominal' => $request->nominal,
             'nama_bank_text' => $request->nama_bank_text,
             'foto_pembayaran' => $uploaded,
             'status' => 0,
             'user_id' => Auth::user()->id,
         ]);
 
         return redirect()->route('dashboard')->with('successUploadBayar', 'Pembayaran telah dilakukan silahkan menunggu admin untuk melakukan validasi');
     }
     public function lihat($user_id)
     { 
        $detailUser = User::findOrFail($user_id);
        $pem = Pembayaran::where('user_id', $user_id)->first();
        return view('tampilan.lihat' , compact('pem', 'detailUser'));
     }
     public function detail($user_id)
     {
        $detailUser = ppdb::findOrFail($user_id);
        return view('tampilan.detail', compact('detailUser'));
     }

     public function update(Request $request, ppdb $ppdb)
     {
         $request->validate([
             'nama_bank' => 'required',
             'nama_pemilik' => 'required',
             'nominal' => 'required',
             'foto_pembayaran' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
             'nama_bank_text' => 'nullable',
         ]);
 
         $image = $request->file('foto_pembayaran');
           $imgName = time().'.'.$image->extension();
           if(!file_exists(public_path('/assets/img/'.$image->getClientOriginalName()))){
               $destinationPath = public_path('/assets/img/');
               $image->move($destinationPath, $imgName);
               $uploaded = $imgName;
           }else{
               $uploaded = $image->getClientOriginalName();
           }
 
           pembayaran::create([
             'nama_bank' => $request->nama_bank,
             'nama_pemilik' => $request->nama_pemilik,
             'nominal' => $request->nominal,
             'nama_bank_text' => $request->nama_bank_text,
             'foto_pembayaran' => $uploaded,
             'status' => 0,
             'user_id' => Auth::user()->id,
         ]);
 
         return redirect()->route('dashboard')->with('successUploadBayar', 'Pembayaran telah dilakukan silahkan menunggu admin untuk melakukan validasi');
         
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(ppdb $ppdb)
    {
        //
    }
}
