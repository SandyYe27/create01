<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;


class AccountController extends Controller
{

    public function index()//將所有資料從資料庫提出來，並輸出到列表上
    {
        $user = User::get();
        $header = '帳號管理-列表頁';
        $slot = '';
        return view('account.index', compact('user','header','slot'));
    }


    public function create()
    {
        //準備新增用的表單給使用者填寫->導去一個頁面
        $header = '帳號管理-新增頁';
        $slot = '';
        return view('account.create', compact('header','slot'));

    }

    public function store(Request $request)
    {
        // Laravel內建的帳號註冊防呆，檢查輸入是否錯誤(RegisteredUserController)
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // if($validator->fails()){
        //     return redirect('/account/create')->with('problem','輸入資訊錯誤，請重新檢查');
        // };

        // if ($request->password != $request->password_confirmed){
        //     return redirect('/account/create')->with('problem','密碼不相同，請重新輸入');
        // }

        // $data = User::where('email',$request->email)->first();
        // if($data){
        //     return redirect('/account/create')->with('problem','此信箱已存在');
        // }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'power' =>1,
        ]);

        return redirect('/account')->with('success','新增成功');
    }


    public function edit($id)
    {
        $user = User::find($id);//model抓資料
        $header = '帳號管理-編輯頁';
        $slot = '';

        return view('account.edit',compact('user','header','slot'));
    }


    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $user->name = $request->user_name;
        $user->power = $request->user_power;
        //needsRehash檢查是否已經做過Hash運算了，如果沒有才會執行裡面的程式
        //如果使用者沒有修改密碼，傳到後端的就是原本的、且已經hash過的密碼

        if (Hash::needsRehash($request->user_password)){
            $user->password = Hash::make($request->user_password);
        };

        $user->save();

        return redirect('/account');
        // return redirect('/account')->with('success','編輯成功');
    }


    public function destroy($id)
    {
        $account = User::find($id);

        $account->delete();

        return redirect('/account')->with('success','刪除成功');//刪掉東西後，重新導入列表頁

    }

}


