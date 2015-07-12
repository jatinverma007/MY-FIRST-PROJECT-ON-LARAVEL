<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class MemberController extends Controller
{
   use DispatchesCommands;
    public function profile()
    {
        return view('user.profile');
    }

    public function saveprofile(SaveProfileRequest $request)

    {
        $this->dispatchFrom(SaveProfileCommand::class,$request);
        return redirect()->route('member.profile');
    }

}
