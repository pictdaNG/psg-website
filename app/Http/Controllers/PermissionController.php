<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use App\Role;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $permissions = Permission::all();
        $roles = Role::all();
        return view('admin.permissions.index',compact('permissions'))->with(compact('roles'))
        ->with('i', ($request->input('page', 1) - 1) * 5)->with(compact('roles'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        $this->validate($request, [
            'name'=>'required|max:40',
        ]);

        $name = $request['name'];
        $permission = new Permission();
        $permission->name = $name;

        $roles = $request['roles'];

        $permission->save();

        if (!empty($request['roles'])) { //If one or more role
            foreach ($roles as $role) {
                $r = Role::where('id', '=', $role)->firstOrFail();
                $permission = Permission::where('name', '=', $name)->first();
                $r->givePermissionTo($permission);
            }
        }

        return redirect()->route('permissions.index')
        ->with('success','Permission created successfully');
    }

    public function update(Request $request, $id) 
    {
        $permission = Permission::findOrFail($id);
        $this->validate($request, [
            'name'=>'required|max:40',
        ]);
        $input = $request->all();
        $permission->fill($input)->save();

        return redirect()->route('permissions.index')
            ->with('success',
             'Permission'. $permission->name.' updated!');
    }

    public function delete($id) 
    {
        $permission = Permission::findOrFail($id);

        if ($permission->name == "Administer roles & permissions") {
            return redirect()->route('permissions.index')
            ->with('success',
             'Cannot delete this Permission!');
        }

        $permission->delete();

        return redirect()->route('permissions.index')
            ->with('success',
             'Permission deleted!');
    }
}
