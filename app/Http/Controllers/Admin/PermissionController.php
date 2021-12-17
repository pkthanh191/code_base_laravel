<?php

namespace App\Http\Controllers\Admin;

use App\Services\AdminService;
use App\Services\PermissionService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PermissionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;


class PermissionController extends Controller
{
    protected $admin;
    protected $permission;

    public function __construct(AdminService $adminService, PermissionService $permissionService)
    {
        $this->admin = $adminService;
        $this->permission = $permissionService;
    }

    public function index(){
        if (Gate::forUser(auth('admin')->user())->denies('admin-pms', Route::currentRouteName())) {
            return redirect()->route('admin.home.dashboard')->with('error_message','Bạn không có quyền vào trang này!');
        }
        $data = $this->permission->getAll();
        return view('backend.permission.index')
            ->with('data', $data);
    }

    public function getCreate($id = 0){
        if (Gate::forUser(Auth::guard('admin')->user())->denies('admin-pms', Route::currentRouteName())) {
            return redirect()->route('admin.home.dashboard')->with('error_message','Bạn không có quyền vào trang này!');
        }
        $data = [];
        if($id > 0){
            $data = $this->permission->getGroupById($id);
        }
        return view('backend.permission.edit')
            ->with('id', $id)
            ->with('data', $data);
    }

    public function postCreate(PermissionRequest $request, $id = 0){
        if (Gate::forUser(Auth::guard('admin')->user())->denies('admin-pms', Route::currentRouteName())) {
            return redirect()->route('admin.home.dashboard')->with('error_message','Bạn không có quyền vào trang này!');
        }
        $data = $request->all();
        $mess = '';
        if($id == 0){
            $res = $this->permission->create($data);
            if($res){
                $mess = 'Tạo nhóm quyền thành công';
            }
        } else {
            $res = $this->permission->update($id, $data);
            if($res){
                $mess = 'Cập nhật nhóm quyền thành công';
            }
        }
        return redirect()->route('admin.permission.getList')->with('success_message', $mess);
    }

    public function editPermission(Request $request){
        $id = (int)$request->input('id',0);
        $data = $request->only('name', 'code', 'group_id');
        $response['success'] = 0;
        $response['msg'] = 'Lỗi hệ thống';
        $res = array();
        if($id == 0){
            $res = $this->permission->createPermission($data);

        } else {
            $res = $this->permission->updatePermission($id, $data);
        }
        if($res){
            $permission = $this->permission->getPermissionByGroupId($res->group_id);
            $response['success'] = 1;
            $response['msg'] = $id == 0 ? 'Tạo quyền thành công' : 'Sửa quyền thành công';
            $response['html'] = view('backend.permission.listPermission')->with('data', $permission)->render();
        }
        return response()->json($response);
    }

    public function removePermission(Request $request){
        $id = (int)$request->input('id',0);
        $groupId = (int)$request->input('group_id', 0);
        $response['success'] = 0;
        $response['msg'] = 'Lỗi hệ thống';
        $res = array();
        $res = $this->permission->removePermission($id);
        if($res){
            $permission = $this->permission->getPermissionByGroupId($groupId);
            $response['success'] = 1;
            $response['msg'] = 'Xóa quyền thành công';
            $response['html'] = view('backend.permission.listPermission')->with('data', $permission)->render();
        }
        return response()->json($response);
    }

    public function removeGroup(Request $request){
        $id = (int)$request->input('id',0);
        $res = $this->permission->removeGroup($id);
        $msg = '';
        if($res){
            $msg = 'Xóa nhóm quyền thành công';
        }
        return redirect()->route('admin.permission.getList')->with('success_message', $msg);
    }
}
