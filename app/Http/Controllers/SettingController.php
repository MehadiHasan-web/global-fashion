<?php

namespace App\Http\Controllers;

use App\Models\Admin\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function setting() {
        $setting = Setting::first();
         return view('admin.partials.settings.setting', compact('setting'));
    }

    public function  logo( Request $request, $optional = null) {

        $logo = $request->file('logo');
        $setting = Setting::first();
        if ($setting->logo) {
            if ($logo) {
                $uniqueName = Str::uuid()->toString() . '.' . $logo->getClientOriginalExtension();
                $oldImagePath = public_path('storage/settings/' . $setting->logo);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                $logo->move(public_path('storage/settings/'), $uniqueName);
                $setting->update(['logo' => $uniqueName]);
                flash()->addSuccess('Logo updated successfully');
                return redirect()->back();
            }
        }else{
            if ($logo) {
                $uniqueName = Str::uuid()->toString() . '.' . $logo->getClientOriginalExtension();
                $logo->move(public_path('storage/settings/'), $uniqueName);
                Setting::create([
                    'logo' => $uniqueName,
                ]);
            } else {
                return back()->with('error', 'No file uploaded for the logo.');
            }
        }

        return back()->with('success', 'Logo uploaded successfully.');
    }
}
