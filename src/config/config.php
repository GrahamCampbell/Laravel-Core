<?php

/*
 * This file is part of Laravel Core by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at http://bit.ly/UWsjkb.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Site Name
    |--------------------------------------------------------------------------
    |
    | This defines the site name.
    |
    | Default to 'Laravel Application'.
    |
    */

    'name' => 'Laravel Application',

    /*
    |--------------------------------------------------------------------------
    | Home Page URL
    |--------------------------------------------------------------------------
    |
    | This defines the url to use for the home page.
    |
    | Default to '/'.
    |
    */

    'home' => '/',

    /*
    |--------------------------------------------------------------------------
    | Page Layout
    |--------------------------------------------------------------------------
    |
    | This specifies the your views should extend.
    |
    | Default to 'layouts.default'.
    |
    */

    'default' => 'layouts.default',

    /*
    |--------------------------------------------------------------------------
    | Email Layout
    |--------------------------------------------------------------------------
    |
    | This specifies the view that your email views should extend.
    |
    | Default to 'layouts.email'.
    |
    */

    'email' => 'layouts.email',

    /*
    |--------------------------------------------------------------------------
    | Enable Commands
    |--------------------------------------------------------------------------
    |
    | This enables the install/update/reset commands and bindings shipped with
    | this package. Other packages can read this config to save time by not
    | registering event command event listeners if command are disabled.
    |
    | Default to true.
    |
    */

    'commands' => true,

];
