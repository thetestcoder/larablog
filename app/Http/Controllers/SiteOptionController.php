<?php

namespace App\Http\Controllers;

use App\SiteOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteOptionController extends Controller
{
    public function index()
    {
        return view("backpanel.settings.index");
    }

    public function store(Request $request)
    {
        $options = [
            "site_name",
            "site_description",
            "site_logo",
            "copyright_text",
            "site_phone",
            "site_email",
            "site_owner_social_links",
            "site_social_links",
            "site_owner_bio",
            "site_owner_avatar"
        ];

        $this->saveSiteSetting($request, $options);

        return redirect()->route("setting.index")->with("success", "Setting Saved");

    }

    private function saveSiteSetting(Request $request, array $options)
    {
        foreach ($options as $option_name) {
            $siteOption = SiteOption::where('option_name', $option_name)->first();
            $request_option_value = $request->{$option_name};

            if ($request_option_value !== null) {
                if (is_array($request_option_value)) {
                    $siteOption->option_value = serialize($request_option_value);
                } elseif ($request->hasFile($option_name)) {
                    $file = $request->file($option_name);
                    Storage::disk("own")
                        ->put($file->getClientOriginalName(), file_get_contents($file));
                    $siteOption->option_value = $file->getClientOriginalName();
                } else {
                    $siteOption->option_value = $request_option_value;
                }
            }
            $siteOption->save();
        }
    }
}
