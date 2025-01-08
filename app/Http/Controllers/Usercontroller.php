<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class Usercontroller extends Controller
{
    public function showForm(){
        return view('register');
    }
    public function registerdata(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        Post::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password']),
            'phone' => $validate['phone'],
            'address' => $validate['address'],
            'image' => $imagePath,
        ]);
        return redirect()->route('login');
    }

    public function showContacts(){
        $contacts = Post::paginate(5);
        return view('show_all_data', compact('contacts'));
    }

    public function updateformshow($id){
        $post = Post::findOrFail($id);
        return view('update_form', compact('post'));
    }
    public function searchdata(Request $request){
            $studentdata=Post::where('name','like',"%$request->search%")->get();
            return view('show_all_data',['contacts'=>$studentdata]);
    }

    public function updatedata(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
        ]);


        $posted = Post::findOrFail($id);

        // Update the post with the validated data
        $posted->name = $validated['name'];
        $posted->email = $validated['email'];
        $posted->phone = $validated['phone'];
        $posted->address = $validated['address'];


        $posted->save();

        return redirect()->route('show_all_data')->with('success', 'Student updated successfully.');
 }

 public function deleteData($id){
        $post = Post::findOrFail($id); // Find the post by ID
        $post->delete(); // Delete the record
        return redirect()->route('show_all_data')->with('success', 'Post deleted successfully!');
}

public function loginpage(){
        return view('login');
}

// login submit data
public function loginsubmit(Request $request){
        $validate=$request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $email=$validate['email'];
        $password=$validate['password'];

        $user = Post::where('email', $email)->first();

        $request->session()->put('email',$request->input('email'));

        if($user && Hash::check($password,$user->password)){
            return redirect()->route('homed');
        }
        else{
            return back()->withErrors([
                'email'=>'Invalid credencials',
            ]);
        }

}

public function deletemultiple(Request $request){
    $data=Post::destroy($request->id);
    if($data){
        return redirect('showdetails');
    }
    else{
        return "Student Record is not deleted";
    }

}
public function homes(){
    return view('home');
}
public function landing(){
    return view('landingpage');
}



public function api()
{
    $response = Http::withOptions([
        'curl' => [
            CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_2,
        ],
    ])->withoutVerifying()->get('https://jsonplaceholder.typicode.com/posts');

    $data = json_decode($response->body(), true);

    return view('userpage', ['data' => $data]);

}
    }
