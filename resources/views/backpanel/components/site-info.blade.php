@include('backpanel.partials.text-input',
                            [
                                "id" => "site_name",
                                "title" => "Site Name"
                            ])

@include('backpanel.partials.text-input',
            [
                "id" => "site_email",
                "title" => "Site Email"
            ])

@include('backpanel.partials.text-input',
            [
                "id" => "site_phone",
                "title" => "Site Phone"
            ])

@include("backpanel.partials.textarea-input",
            [
               "id"     => "site_description",
               "title"  => "Site Description"
            ])

@include("backpanel.partials.file-input",
            [
               "id"     => "site_logo",
               "title"  => "Site Logo",
               "logo"   => getSiteLogo()
            ])
