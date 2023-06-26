<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function Data ($data) {
        if ($data == 1) {

            $data = [
                'page_title' => 'Hello World',
                'name' => 'Jason',
                'id' => '5254252',
            ];

            return view ('Data.app' ,$data);

        } else if ($data == 2) {

            $data = [
                'page_title' => 'Hello World',
                'name' => 'Smith',
                'id' => '345667',
            ];

            return view ('Data.app' ,$data);

        } else if ($data == 2) {

            $data = [
                'page_title' => 'Hello World',
                'name' => 'Smith',
                'id' => '345667',
            ];

            return view ('Data.app' ,$data);
            
    } else {
        return view ('Error.template1');
    };

   }

}
