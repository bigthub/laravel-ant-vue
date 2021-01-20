<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\ApiController;
use App\Models\v1\Admin;
use App\Models\v1\AdminLog;
use App\Models\v1\AuthRule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function test()
    {
        //
        return $this->data (22);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login (Request $request)
    {
        $all =$request->all();

        if(empty($all['username'])||empty($all['password'])){
            return $this->error('密码和账号都不能为空');
        }
        $admin = Admin::query()->where('name',$all['username'])->first();
        if (!$admin) {
            return $this->error('账号不存在');
        }
        if (!Hash::check($all['password'], $admin->password)) {
            return $this->error('账号或密码错误');
        }
        $admin->last_login_at = Carbon::now()->toDateTimeString();
        if(!$admin->save()){
            return $this->error();
        }

        $access_token = auth('api')->login($admin);

        //日志记录
        $log = new AdminLog();
        $log->admin_id = $admin->id;
        $log->path = $request->path();
        $log->method = $request->method();
        $log->ip = $request->ip();
        $log->input = json_encode($all, JSON_UNESCAPED_UNICODE);
        // 记录日志
        if(!$log->save()){
            return $this->error();
        }
        return $this->data([
            'access_token'=>$access_token
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //获取管理员信息
    public function userInfo(Request $request){
        $user=auth('api')->user();
        $data['name']=$user->name;
        if($user->portrait){
            $data['avatar']=$user->portrait;
        }else{
            $data['avatar']=request()->root().'/storage/image/avatar/1.gif';
        }
//        dd($data);
//        dd(request()->root());

        $group=auth('api')->user()->authGroup;
        //权限名只取一个（多个权限名称太长）
        $data['introduction']=$group[0]['introduction'];
        foreach($group as $u){
            $data['roles'][]=$u['roles'];
        }
        //获取该权限组的菜单
        $AuthRule=AuthRule::with(['AuthGroup' => function ($query){
            $query->select('roles');
        }])->orderBy('pid','ASC')->orderBy('sort','ASC')->orderBy('id','ASC')->get();
        $data['asyncRouterMap'] = [];   //菜单
        $data['jurisdiction'] = []; //权限列表
        $asyncRouterMap = [];
        foreach($AuthRule as $id => $rule){
            $rolesArray = [];
            if(count($rule->AuthGroup)>0){
                foreach($rule->AuthGroup as $group){
                    $rolesArray[]=$group->roles;
                    $data['jurisdiction'][$rule->api][]=$group->roles;
                }

            }
            if($rule->type == 0){
                $asyncRouterMap[]=array(
                    'id'=>$rule->id,
                    'pid'=>$rule->pid,
                    'path'=>$rule->pid > 0 ?lcfirst($rule->api):'/'.lcfirst($rule->api),
                    'component'=>$rule->pid > 0 ? $rule->api : 'Layout',
                    'redirect'=>$rule->pid >0 ? $rule->url : 'noredirect',
                    'alwaysShow'=> $rule->pid > 0 ? false :true,
                    'name'=>$rule->api,
                    'hidden'=>$rule->state == 1 && array_intersect($data['roles'], $rolesArray)? false : true,
                    'meta'=>array(
                        'title'=>$rule->title,
                        'icon'=>$rule->icon,
                        'roles'=>$rolesArray,
                        'noCache'=> true,
                        'breadcrumb'=> true
                    ),
                );
            }
        }
        $data['asyncRouterMap'] = genTree($asyncRouterMap,'pid');
        return $this->data([
            'access_token'=>$data
        ]);
    }
}
