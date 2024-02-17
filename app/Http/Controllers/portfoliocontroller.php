<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\confirm;

class portfoliocontroller extends Controller
{
    public function add(Request $req){
       $port= DB::table('portfolio')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->msg
        ]);
        if($port){
            return redirect()->route('portfolio.view')->with('record_added', true);
            // echo 'insert successfuly';
            // confirm('record add');
            // return redirect()->route('portfolio.view');
        }
        else{
            echo 'not insert successfuly';
        }
    }
    // public function record(){
    //     $dawood = DB::table('portfolio')->paginate(3);
    //     return view('record' ,['data' => $dawood]);
    // }
    public function record(){
        $dawood = DB::table('portfolio')->paginate(1); // Adjust 10 as per your desired per-page count
        return view('record',['data' => $dawood]);
    }

    public function deleteall(){
        DB::table('portfolio')->truncate();
    }
    public function delete(string $id){
       $delete = DB::table('portfolio')->where('id',$id)->delete();
       if($delete){
        return redirect()->route('record');
       }
    }
    // public function update($id) {
    //     $update = DB::table('portfolio')->where('id', $id)->get();
    //     return view('pupdate', ['data' => $update]);
    // }
    public function update($id) {
        $data = DB::table('portfolio')->where('id', $id)->first(); // Use 'first()' instead of 'get()'
        return view('pupdate', ['data' => $data]);
    }

    public function updaterecord(Request $req, $id) {
        $req->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            // other validation rules...
        ]);

        $updated = DB::table('portfolio')->where('id', $id)->update([
            'name' => $req->name,
            'email' => $req->email,
            // update other fields as needed...
        ]);

        if ($updated) {
            return redirect()->route('record');
        } else {
            return "<h1>Record not updated successfully</h1>";
        }
    }
    // public function update($id){
    //   $update = DB::table('portfolio')->where('id', $id)->get();

    //     return view('pupdate', ['data' => $update]);

    // }
    // public function updaterecord(Request $req, $id){
    //     // 'name' =>$req->name,
    //     DB::table('portfolio')->where('id', $id);
    // }
}

// DB::table('portfolio')->get()
