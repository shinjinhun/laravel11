<?php

// app/Http/Controllers/UserController.php

    namespace App\Http\Controllers;

    use App\Http\Requests\UserStoreRequest;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Log;

    class UserController extends Controller
    {
        public function create()
        {
            return view('www.user.create');
        }

        public function store(UserStoreRequest $request)
        {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt('password'), // 실제 사용 시 사용자 입력 받기
            ]);

            return redirect()->route('user.create')->with('success', '사용자가 등록되었습니다.');
        }

        public function index()
        {
            $users = User::all();  // 사용자 전체 조회
            return view('users.index', compact('users'));
        }

        public function show($id)
        {
            $user = User::find($id);  // 특정 사용자 조회
            return view('users.show', compact('user'));
        }
/*
        public function store(Request $request)
        {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            return redirect()->route('users.index');
        }
*/

    }
