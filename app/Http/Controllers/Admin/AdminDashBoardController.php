<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\General;
use App\Models\Sponsorship;
use App\Models\Study;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminDashBoardController extends Controller
{
    public function index()
    {
        $general = General::where('created_at', '>', auth()->user()->last_sign_out_at)->get();
        $study = Study::where('created_at', '>', auth()->user()->last_sign_out_at)->get();
        $sponsorship = Sponsorship::where('created_at', '>', auth()->user()->last_sign_out_at)->get();
        $business = Business::where('created_at', '>', auth()->user()->last_sign_out_at)->get();        
        $latestAssessments = collect();
        // Add 'model' and 'showRoute' fields to each item in the respective collections
        $generalWithModel = $general->map(function ($item) {
            $item->model = 'General';
            $item->showRoute = route('admin.assessment.show', [$item->id]);
            return $item;
        });

        $studyWithModel = $study->map(function ($item) {
            $item->model = 'Study';
            $item->showRoute = route('admin.study_assessment.show', [$item->id]);
            return $item;
        });

        $sponsorshipWithModel = $sponsorship->map(function ($item) {
            $item->model = 'Sponsorship';
            $item->showRoute = route('admin.sponsorship_assessment.show', [$item->id]);
            return $item;
        });

        $businessWithModel = $business->map(function ($item) {
            $item->model = 'Business';
            $item->showRoute = route('admin.business_assessment.show', [$item->id]);
            return $item;
        });

        $newAssessments = $latestAssessments->merge($generalWithModel)
        ->merge($studyWithModel)
        ->merge($sponsorshipWithModel)
        ->merge($businessWithModel)
        ->sortByDesc('created_at')
        ->values()
        ->where('created_at', '>', auth()->user()->last_sign_out_at)
        ->count();

        $latestAssessments = $latestAssessments->merge($generalWithModel)
            ->merge($studyWithModel)
            ->merge($sponsorshipWithModel)
            ->merge($businessWithModel)
            ->sortByDesc('created_at')
            ->values()
            ->take(7);
        
        return view('admin.dashboard')->with(
            [
                'latestAssessments' => $latestAssessments,
                'newAssessments' => $newAssessments,
                'general' => $general,
                'business' => $business,
                'sponsorship' => $sponsorship,
                'study' => $study
            ]
        );
    }

    public function resetpwd()
    {
        return view('admin.resetpwd');
    }

    public function reset(Request $request)
    {
        request()->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'confirmed', Rules\Password::defaults()]
        ]);

        if (!Hash::check($request->current_password, $request->user()->password)) {
            return back()->with([
                'error' => 'The provided password does not match our records.',
            ]);
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('admin.resetpwd')->with(['success' => 'password changed successfully']);
    }

    public function readNotifications($id)
    {
        $admin = User::find(auth()->user()->id);
        if ($id == 'all') {
            $notifications = $admin->unreadNotifications;
            $notifications->markAsRead();
        } else {
            $notification = $admin->unreadNotifications()->where('notifications.id', $id)->first();
            $notification->markAsRead();
        }

        return redirect()->back();
    }
}
