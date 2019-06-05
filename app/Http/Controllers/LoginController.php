<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Login\LoginContract;
	use Sentinel;

	class LoginController extends Controller
	{

		protected $repo;

		public function __construct(LoginContract $loginContract) {
			$this->repo = $loginContract;
		}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      return view('admin.auth.login');
    }

    public function doLogin(Request $request) {        
      $this->validate($request, [
        'email' => 'required',
        'password' => 'required'
      ]);

      // dd($request->all());

      $credentials = [
        'email'    => $request->email,
        'password' => $request->password,
      ];        
      
      try {
        if(Sentinel::authenticate($credentials)) {
          $authUser = Sentinel::getUser();
          try {
            if(Sentinel::getUser()->roles()->first()->slug == 'superadmin') {
              return redirect()->route('super_admin_dash');
            }
            else if (Sentinel::getUser()->roles()->first()->slug == 'admin') {
              return redirect()->route('admin_dash');
            }
            else if (Sentinel::getUser()->roles()->first()->slug == 'user') {
            	return redirect()->route('user_dash');
            }
          } catch (\BadMethodCallException $e) {
            return redirect()->route('get_login')->with('error', 'Your Session has expired. Please login again!');
           }
        } else {
          return redirect()->back()->withInput()->with('error', 'Your Login Credentials did not match');
        }
      } catch(ThrottlingException $e) {
        $delay = $e->getDelay();
        return redirect()->back()->with(['error' => "Ops.. You have been banned for $delay seconds."]);
      } catch(NotActivatedException $e){
        return redirect()->back()->with(['error' => 'Ops... Your account is not yet activated, please check your email for activation code or link']);
      }
    }

    public function logout() {
      Sentinel::logout(null, true);
      return redirect()->route('get_login');
    }
	   
	}
