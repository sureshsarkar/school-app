<?php

namespace App\Http\Controllers\Voter\Auth;
use App\Helper\MailHelper;
use ModelHelper;
use App\Http\Controllers\Controller;
use App\Models\Voter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LoginRegisterController extends Controller
{
    public function __construct()
    {
      //  $this->middleware('guest')->except([
       //     'logout'
      //  ]);
    }

    public function userId(Request $request, $type='password')
    {
        if(filter_var($request->email, FILTER_VALIDATE_EMAIL))
            return 'email';
        else
            return 'mobile';
    }
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
           // 'password' => 'required|string',
        ]);

       /* $request->validate([
            'email' => $this->userId($request)=='email'?'required|email|string,email':'required|string',
            'password' => 'required|string',
        ]);*/
    }


    public function login(Request $request)
    {
        $this->validateLogin($request);
//return $request->all();
        if ($token=$this->attemptLogin($request)) {
            return $this->sendLoginResponse($this->getCustomer($request), $token);
        }
        return redirect()->back()->with("danger","Login credentials failed");
        /*return [
            'status'=>'failed',
            'token'=>'',
            'message'=>'Credentials are not correct'
        ];*/

    }
    protected function attemptLogin(Request $request)
    {
        return Auth::guard('voter')->attempt(
            ['email'=>$request->email, 'password'=>$request->email]
        );
    }

    protected function getCustomer(Request $request){
        return Voter::where('email',$request->email)->first();
    }


    protected function sendLoginResponse($user, $token){
        if($user->status==0){
            return redirect()->back()->with("danger","Your provided credentials do not match in our records");

            /*return back()->withErrors([
                'email' => 'Your provided credentials do not match in our records.',
            ])->onlyInput('email');*/
        }
        else if($user->status==1)
            return redirect()->route('front-home')->with("success","You have successfully logged in!");
        /*return redirect()->route('front-home')
            ->withSuccess('You have successfully logged in!');*/
           // return ['status'=>'success', 'message'=>'Login Successfull', 'token'=>$token];
        else
            return redirect()->back()->with("danger","Your provided credentials do not match in our records");
    }



    public function register(Request $request)
    {
         $request->validate([
            //'role' => 'required',
          //  'name' => 'required|string|max:250',
            'email' => 'required|email|max:250',
          //  'password' => 'required|min:4'
        ]);

       $user=Voter::where('email',$request->email)->first();
        if ($user) {
            if ($token=$this->attemptLogin($request)) {
                return $this->sendRegisterResponse($this->getCustomer($request), $token);
            }
           // return redirect()->back()->with("danger","This Email Already Registered");
        } else {
            Voter::create([
                //  'name' => $request->name,
                'email' => $request->email,
                //// 'address' => $request->address,
                // 'city' => $request->city,
                // 'country' => $request->country,
                // 'username' => $request->username,
                'status' => 1,
                'password' => Hash::make($request->email)
            ]);


            if ($token = $this->attemptLogin($request)) {
                return $this->sendRegisterResponse($this->getCustomer($request), $token);
            }
        }
        return redirect()->back()->with("danger","Your provided credentials do not match in our records");
    }

    protected function sendRegisterResponse($user, $token)
    {
        if ($user->status == 0) {
            return redirect()->back()->with("danger", "Your provided credentials do not match in our records");
        } else if ($user->status == 1)
            return redirect()->to('category')->with("success", "You have successfully Registered in!");

        /* return redirect()->route('front-home')
             ->withSuccess('You have successfully Registered in!');*/
        // return ['status'=>'success', 'message'=>'Login Successfull', 'token'=>$token];
        else
            return redirect()->back()->with("danger", "Your provided credentials do not match in our records");
    }

    public function forgotpassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with("danger", "Email Field Required");
        }
        $data = Customer::where("email", $request->email)->first();
        if (!$data) {
            // return  response()->json(["status"=>400,"message"=>'Already subscribe']);
            return redirect()->back()->with("danger", "This Email Is Not Registered");

        } else {
            $password = mt_rand();
            $mailData = [
                "type" => "forgotpassword",
                'password' => $password,
                "to" => $request->email
            ];
            $data->update(['password'=>Hash::make($password)]);
            MailHelper::emailSender($mailData);
            return redirect()->back()->with("success", "New Password Send Successfully");

        }
    }
    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');

    }*/

    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function dashboard()
    {
        if(Auth::check())
        {
            return view('auth.dashboard');
        }

        return redirect()->route('login')
            ->withErrors([
                'email' => 'Please login to access the dashboard.',
            ])->onlyInput('email');
    }*/

    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
       // Auth::logout();
        Auth::guard('voter')->logout();

      //  $request->session()->invalidate();
      //  $request->session()->regenerateToken();
        return redirect()->route('front-home')
            ->withSuccess('You have logged out successfully!');
    }

}
