<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class teachercontroller extends Controller
{


    // add data in database table
    public function addteacher(Request $req){
        $req->validate([
            'image' => 'required|image|mimes:png,jpg,gif|max:2048'
        ]);

        if($req->hasFile('image')){
            $imagePath = $req->file('image')->store('images', 'public');
        }
        else {
            return redirect()->back()->with('error', 'Sorry, no image provided.');
        }

        $teacher = DB::table('teachers')->insert([
            'name' => $req->name,
            'image' => $imagePath,
        ]);

        if($teacher){
            return redirect()->route('teacherrecord');
        }
        return 'Failed to insert data';
    }
    // get data from table
    public function getteacher() {
        $teachers = DB::table('teachers')->paginate(3); // Adjust the pagination count as needed
        return view('teacherrecord', ['data' => $teachers]);
    }
    public function editteacher($id) {

        $teacher = DB::table('teachers')->find($id);
        return view('update', ['data' => $teacher]);
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Allow for updating without requiring a new image mimes is format of image
        ]);
        // Prepare the data to update
        $data = [
            'name' => $req->name,
        ];
        // Check if a new image is provided
        if ($req->hasFile('image')) {
            // Upload and update image only if a new image is provided
            $imagePath = $req->file('image')->store('images', 'public');

            $data = [
            'image' => $imagePath ,
            ];
        }
        else{
            echo "<h1>record not update successfully</h1>";
        }
        // Update the teacher record
        DB::table('teachers')->where('id', $id)->update($data);
        return redirect()->route('teacherrecord');
    }


    // get data from table
    // public function getteacher() {
    //     $teachers = DB::table('teachers')->paginate(3); // Assuming pagination is desired
    //     return view('teacherrecord' ,['data' => $teachers]);

        // return view('teacherrecord', ["dd" ,$teachers]);
    // }


    // controll view button

   public function viewteacher($id){
        $teacher = DB::table('teachers')->where('id' , $id)->get();
        // return $teacher;
        return view('views', ['data' => $teacher]);
    }
    // delete record
    public function deleteteacher(string $id){
        $teacher = DB::table('teachers')->where('id', $id)->delete();
        // $teacher = DB::table('teachers')->where('id', $id)->delete();

        if($teacher){
            return redirect()->route('teacherrecord');
        }
        else{
            return redirect()->back()->with('error','record not delete or not found');
        }
    }
    // public function deleteteacher(string $id)
    // {
    //     $teacher = DB::table('teachers')->where('id', $id)->delete();

    //     if($teacher) {
    //         return redirect()->route('teacherrecord');
    //     }
    //     else {
    //         return redirect()->back()->with('error', 'Record not deleted or not found');
    //     }
    // }

    public function deleteall(){
        DB::table('teachers')
       ->truncate();

   }


}
