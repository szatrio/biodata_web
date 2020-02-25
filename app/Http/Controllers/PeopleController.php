<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\People;
use App\Religion;
use App\Gender;
use App\Hobby;
use App\HobbyList;

class PeopleController extends Controller
{
    public function add(){
        $religion = Religion::all();
        $gender = Gender::all();
        $hobby = Hobby::all();
        // dd($gender);
        $data = [
            'religion' => $religion,
            'gender' => $gender,
            'hobby' => $hobby
        ];
        return view('people/add', $data );
    }

    public function store(Request $req){
        $this->validate($req, [
            // 'name' => 'required',
            // 'dob' => 'required',
            // 'address' => 'required',
            // 'religion' => 'required',
            // 'gender' => 'required',
            // 'photo' => 'required',
        ]);
        
        // dd($req);
 
 
		// menyimpan data file yang diupload ke variabel $file
		$photo = $request->file('photo');
 
      	        // nama file
		echo 'File Name: '.$photo->getClientOriginalName();
		echo '<br>';
 
      	        // ekstensi file
		echo 'File Extension: '.$photo->getClientOriginalExtension();
		echo '<br>';
 
      	        // real path
		echo 'File Real Path: '.$photo->getRealPath();
		echo '<br>';
 
      	        // ukuran file
		echo 'File Size: '.$photo->getSize();
		echo '<br>';
 
      	        // tipe mime
		echo 'File Mime Type: '.$photo->getMimeType();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$destination = 'data_file';
 
                // upload file
        $photo->move($destination,$photo->getClientOriginalName());
        
        $id = Uuid::uuid1();
 
		People::create([
            'id_people' => $id,
            'name' => $req->name,
            'dob' => $req->dob,
            'address' => $req->address,
            'religion' => $req->input('religion'),
            'gender' => $req->input('gender'),
            'photo' => $fileName,
        ]);

        HobbyList::create([
            'id_people'=> $id,
            'id_hobby'=>$req->hobby
        ]);
 
		return redirect()->back();
    }
}
