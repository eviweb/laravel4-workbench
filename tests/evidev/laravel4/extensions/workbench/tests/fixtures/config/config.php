<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Workbench Composer Related Information
    |--------------------------------------------------------------------------
    |
    | When you create new packages via the Artisan "workbench" command
    | a composer.json configuration is generated. Use the following to
    | initialize it with defaults values
    |
    */
    'composer' => array(

        /*
        |----------------------------------------------------------------------
        | Composer Authors
        |----------------------------------------------------------------------
        |
        | Set here authors details : name, email, homepage, role
        | duplicate the default array structure below to add a new author in
        | the list of authors
        |
        */
        'authors' => array(

            /*
            |------------------------------------------------------------------
            | Author information array
            |------------------------------------------------------------------
            | duplicate it to add a new author
            |
            */
            array(
                'name' => 'Author 1',

                'email' => 'Email 1',

                'homepage' => 'Homepage 1',

                'role' => 'Role',
            ),

            array(
                'name' => 'Author 2',

                'email' => 'Email 2',

                'homepage' => 'Homepage 2',

                'role' => 'Role',
            ),
        ),

        /*
        |----------------------------------------------------------------------
        | License
        |----------------------------------------------------------------------
        |
        | set here the license name under which your plugin will be distribute
        |
        */
        'license' => 'MIT',
    )
);
