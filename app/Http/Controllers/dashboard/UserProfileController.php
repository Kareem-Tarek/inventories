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
        $user         = User::find($loggedInUser);
        return view('dashboard.user-profile.index-profile', compact('user'));
    }

    public function editProfile($id)
    {
        $loggedInUser = auth()->user()->id;
        $user = User::find($loggedInUser);
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
            'email'    => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
            'phone'    => ['required', 'numeric','regex:/^([0-9]+)$/', 'min:11'],
            'address'  => ['required', 'string', 'max:255']
        ]);

        //updating logged in user
        $loggedInUser  = auth()->user()->id;
        $user_old      = user::find($loggedInUser);
        $user          = user::find($loggedInUser);

        if($user->name == $request->name){
            $user->name = $user->name;
        }
        else{
            $user->name = $request->name;
        }
        $user->email   = $request->email;
        $user->phone   = $request->phone;
        $user->address = $request->address;
        $user->save();

        return redirect()->route('user-profile.edit', $user->id)
            ->with('updated_user_successfully', "تم حفظ بياناتك بنجاح.");
    }

    public function destroy($id)
    {
        $category = User::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')
            ->with('deleted_category_successfully', "تم حذف الفئة ($category->title) بنجاح.");
    }

}
