<?php

// app/Http/Controllers/UserController.php

    namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Http\Request;

    class UserController extends Controller
    {
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

        public function store(Request $request)
        {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            return redirect()->route('users.index');
        }
    }
