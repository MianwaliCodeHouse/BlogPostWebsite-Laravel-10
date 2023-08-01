<?php

namespace App\Http\Controllers;

use App\Models\UserRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerificationMail;

class ClientSideController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
    public function login()
    {
        return view('userlogin');
    }
    public function signUp()
    {
        return view('userSignUp');
    }
    public function signUpData(Request $r)
    {
        $r->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:user_registers',
                'password' => 'required|min:5',
                'c_password' => 'required|same:password'
            ]
        );
        $newUser = new UserRegister;
        $newUser->name = $r['name'];
        $newUser->email = $r['email'];
        $newUser->password = $r['password'];
        $newUser->save();
        $check=UserRegister::Where('email',$r['email'])->Where('password',$r['password'])->get();
        
        $user_id = $check[0]['user_id'];
        $mailData = [
            'email' => $user_id
        ];
        Mail::to($r['email'])->send(new EmailVerificationMail($mailData));
        echo "<h2>Email Verification Link has been sent to your email, plz verify your email before login";
    }

    public function emailVerify($email)
    {
        $getUserRecord = UserRegister::find($email);
        $check = $getUserRecord->toArray();
        if (!empty($check)) {

            $getUserRecord->is_verify = 1;
            $getUserRecord->save();
            session()->flash('verification','Your Account Successfully Verified, Now You can Login through Your Email and Password');
            return redirect(route('login'));
        }else{
            abort(404);
        }
    }
    public function emailRemove($email)
    {
        $getUserRecord = UserRegister::find($email);
        $check = $getUserRecord->toArray();
        if (!empty($check)) {
            if ($getUserRecord->is_verify == 0) {
                $getUserRecord->delete();
                echo "Your Account has been Deleted Successfully!";
            }else{
                echo "You cann't be able to delete your account after verification";
            }
        }else{
            abort(404);
        }
    }

    public function loginData(Request $r){
        $r->validate(
            [
                'email'=>'required',
                'password'=>'required'
            ]
            );
        $check=UserRegister::Where('email',$r['email'])->Where('password',$r['password'])->get();
        $check=$check->toArray();
        
        if($check){
            $name=$check[0]['name'];
            
            session(['userEmail'=>$r['email'],'userName'=>$name]);

            return redirect(route('home'));

        }else{
            session()->flash('LoginVerification','Login Verification fails to detect your account , Plz Enter the correct Data to login in the system');
            return redirect(route('login'));
        }
    }
    public function logout(){
        session()->flush();
        return redirect(route('home'));
    }
}
