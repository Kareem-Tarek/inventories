<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\{RedirectResponse, Request};
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    /**
     * @return View
     */
    public function indexProfile() : View
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('dashboard.user-profile.index-profile', compact('user'));
    }

    /**
     * @return View
     */
    public function editProfile() : View
    {
        $user = User::findOrFail(auth()->user()->id);

        return view('dashboard.user-profile.edit', compact('user'));

    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request) : RedirectResponse
    {
        //Validate User
        $request->validate([

            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'phone' => ['required', 'numeric', 'regex:/^([0-9]{11})$/'],
            'address' => ['required', 'string', 'max:255']
                           ]);

        $user = user::findOrFail(auth()->user()->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return to_route('user-profile.edit', $user->id)->with('updated_user_successfully', "تم حفظ بياناتك بنجاح.");
    }

    /**
     * @return View
     */
    public function changePasswordView()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('dashboard.user-profile.index-change-password', compact('user'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function changePassword(Request $request) : RedirectResponse
    {
        $user = auth()->user();

        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('old_req_not_matching_db', 'كلمة المرور التي أدخلتها لا تطابق "كلمة المرور الحالية". حاول مرة اخرى!');
        } else if ($request->confirm_new_password != $request->new_password) {
            return redirect()->back()->with('confirm_not_matching_new', 'كلمة المرور الجديدة التي أدخلتها لا تتطابق مع "تأكيد كلمة المرور". حاول مرة اخرى!');
        } else
            return redirect()->back()->with('new_is_matching_old', 'كلمة المرور الجديدة التي أدخلتها يجب أن تكون مختلفة عن كلمة المرور الحالية!');
    }
}
