<?php


function getSiteOption(string $option_name): ?string
{
    if (str_contains($option_name, ".")) {
        $option_array = explode(".", $option_name);
        $option = \App\SiteOption::where("option_name", $option_array[0])
            ->first();
        if ($option->option_value !== null) {
            $option_values = unserialize($option->option_value);
            return $option_values[$option_array[1]];
        } else {
            return "";
        }
    } else {
        $option = \App\SiteOption::where("option_name", $option_name)
            ->first();
        if ($option == null) return null;

        return $option->option_value;
    }
}

function getSiteLogo(): ?string
{
    return getSiteOptionPhoto("site_logo");
}

function getSiteOwnerAvatar(): ?string
{
    return getSiteOptionPhoto("site_owner_avatar");
}

function getSiteOptionPhoto(string $photoOf): ?string
{
    $file_name = \App\SiteOption::where("option_name", $photoOf)
        ->first()
        ->option_value;

    if ($file_name == null) return null;

    return asset("front-assets/logo/" . $file_name);
}
