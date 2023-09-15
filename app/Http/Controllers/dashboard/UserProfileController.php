<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    public function indexProfile($id)
    {
        $loggedInUser = auth()->user()->id;
        $user         = User::findOrFail($loggedInUser);
        return view('dashboard.user-profile.index-profile', compact('user'));
    }

    public function editProfile($id)
    {
        $loggedInUser = auth()->user()->id;
        $user = User::findOrFail($loggedInUser);
        if($user){
            return view('dashboard.user-profile.edit', compact('user'));
        }
        else{
            return abort('404');
        }
    }

    public function update(Request $request, $id)
    {
        //Validate User
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['nullable', 'string', 'email', 'max:255'],
            'phone'    => ['required','regex:/^([0-9]+)$/', 'min:11'],
            'address'  => ['required', 'string', 'max:255']
        ]);

        //updating logged in user
        $loggedInUser  = auth()->user()->id;
        $user_old      = user::findOrFail($loggedInUser);
        $user          = user::findOrFail($loggedInUser);

        if($user->name == $request->name){
            $user->name = $user->name;
        }
        else{
            $user->name = $request->name;
        }
        if($user->email == $request->email){
            $user->email = $user->email;
        }
        else{
            $user->email = $request->email;
        }
        $user->phone   = $request->phone;
        $user->address = $request->address;
        $user->save();

        return redirect()->route('user-profile.edit', $user->id)
            ->with('updated_user_successfully', "تم حفظ بياناتك بنجاح.");
    }

    public function changePasswordView($id)
    {
        $loggedInUser = auth()->user()->id;
        $user = User::findOrFail($loggedInUser);
        return view('dashboard.user-profile.index-change-password', compact('user'));
    }

    public function changePassword(Request $request)
    {
        $user = auth()->user();

        if(!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('old_req_not_matching_db', 'Old password did not match "the Current Password". Please try again!');
        }
        elseif($request->confirm_new_password != $request->new_password) {
            return redirect()->back()->with('confirm_not_matching_new', 'New Password did not match "Confirm Password". Please try again!');
        }
        elseif(Hash::check($request->new_password, $user->password)) {
            return redirect()->back()->with('new_is_matching_old', 'New Password must be different than the old password');
        }
        elseif(Hash::check($request->old_password, $user->password) && $request->old_password != "" && $request->new_password != "") {
            $user->password = bcrypt($request->new_password);
            $user->save();
            return redirect()->back()->with('password_changed_successfully', 'Your password has been updated successfully!');
        }
    }

    // public function destroy($id)
    // {
    //     $category = User::findOrFailOrFail($id);
    //     $category->delete();

    //     return redirect()->route('categories.index')
    //         ->with('deleted_category_successfully', "تم حذف الفئة ($category->title) بنجاح.");
    // }

}