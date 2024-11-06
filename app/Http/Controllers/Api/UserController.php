<?php
    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Http\Resources\UserResource;
    use App\Models\User;
    use Illuminate\Http\Request;

    class UserController extends Controller
    {
        public function index(Request $request, $username)
        {
            $user = User::where('username', $username)->first();
            return new UserResource($user);
        }
    }
