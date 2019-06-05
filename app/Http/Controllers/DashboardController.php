<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Dashboard\DashboardContract;
	use Sentinel;

	class DashboardController extends Controller {

		protected $repo;

		public function __construct(DashboardContract $dashboardContract) {
			$this->repo = $dashboardContract;
		}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    	if(!Sentinel::check()) {
        return redirect()->route('get_login');
      }
      else {
        $authUser = Sentinel::getUser();
        return view('admin.dashboard.index')->with('user', $authUser);
      }      
    }	    
	}
