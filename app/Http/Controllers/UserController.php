<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Socialite;


class UserController extends Controller
{
    public function user_register(Request $request)
    {
      //dd($request->all());
        $user_info=\Validator::make($request->all(),[
             'first_name'=>['required','string'],
             'last_name'=>['required','string'],
             'email'=>['required'],
             'password'=>['required'],
             'dob'=>['required'],
             'annual_income'=>['required'],
             'gender'=>['required','string']]);
       if($user_info->fails()) {
            return redirect('/')
                        ->withErrors($user_info)
                        ->withInput();
        }
        $date_of_birth=date('Y-m-d', strtotime($request->dob));
         $email=User::where('email',$request->email)->first();
         if($email){
          User::where('email',$request->email)->update(['first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => Hash::make($request->password),
            'date_of_birth'=>$date_of_birth,
            'gender'=>$request->gender,
            'annual_income'=>$request->annual_income,
            'occupation'=>$request->occupation,
            'family_type'=>$request->family_type,
            'Manglik'=>$request->Manglik,
            'p_annual_income'=>$request->p_annual_income,
            'p_occupation'=>$request->p_occupation,
            'p_family_type'=>$request->p_family_type,
            'p_Manglik'=>$request->p_manglik,
            'is_admin'=>0]);
         }else{
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'date_of_birth'=>$date_of_birth,
            'gender'=>$request->gender,
            'annual_income'=>$request->annual_income,
            'occupation'=>$request->occupation,
            'family_type'=>$request->family_type,
            'Manglik'=>$request->Manglik,
            'p_annual_income'=>$request->p_annual_income,
            'p_occupation'=>$request->p_occupation,
            'p_family_type'=>$request->p_family_type,
            'p_Manglik'=>$request->p_manglik,
            'is_admin'=>0
        ]);
      }
        return Redirect::back()->with('message', 'You have succefully registered');
    }

    public function user_login(Request $request)
    {

         $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
      $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('userdashboard');
        }

      return redirect("/")->with('message_login', 'Invalid credentials');

    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

    public function list_matching(User $user)
    {
      $match_user=$user->newQuery();
        if(Auth::check()){
            $user=Auth::user();
            if($user->gender=='Male'){
               if(!empty($user->p_annual_income)){
                  $match_user=User::where('gender','Female')
                                  ->where('is_admin',0)
                                  ->where('p_annual_income',$user->p_annual_income);
                }if(!empty($user->occupation)){
                 $match_user=User::where('gender','Female')
                                  ->where('is_admin',0)
                                  ->where('p_occupation',$user->p_occupation);
                }if(!empty($user->p_family_type)){
                    $match_user=User::where('gender','Female')
                                  ->where('is_admin',0)
                                  ->where('p_family_type',$user->p_family_type);
                }if(!empty($user->p_Manglik)){
                  $match_user=User::where('gender','Female')
                                  ->where('is_admin',0)
                                  ->where('p_Manglik',$user->p_Manglik);
                }

            }else{
                if(!empty($user->p_annual_income)){
                  $match_user=User::where('gender','Male')
                                  ->where('is_admin',0)
                                  ->where('p_annual_income',$user->p_annual_income);
                }if(!empty($user->occupation)){
                 $match_user=User::where('gender','Male')
                                  ->where('is_admin',0)
                                  ->where('p_occupation',$user->p_occupation);
                }if(!empty($user->p_family_type)){
                    $match_user=User::where('gender','Male')
                                  ->where('is_admin',0)
                                  ->where('p_family_type',$user->p_family_type);
                }if(!empty($user->p_Manglik)){
                  $match_user=User::where('gender','Male')
                                  ->where('is_admin',0)
                                  ->where('p_Manglik',$user->p_Manglik);
                }
              }
              $match_user=$match_user->get();
            }
             //dd($match_user);
            return view('listing',compact('match_user'));
        }
     public function redirectToGoogle()
        {

      return Socialite::driver('google')->stateless()->redirect();

       }
    public function handleGoogleCallback()

    {
            $user = Socialite::driver('google')->stateless()->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect()->route('userdashboard');

            }else{

                 $name_ar=explode(" ",$user->name);
                 $first_name=$name_ar[0];

                 $last_name=$name_ar[1];
                  $g_id=$user->id;


                   $newUser = new User();

                    $newUser->first_name =$first_name;
                    $newUser->last_name = $last_name;

                   $newUser->email = $user->email;

                  $newUser->google_id= $g_id;
                  $newUser->save();

                Auth::login($newUser);

                return redirect()->route('userdashboard');
              }
        }

  }

