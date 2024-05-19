<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Student;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        // $contactData = Contact::all();
        // return $contactData;

        // $studentData = Student::all();
        // $studentData = Student::withWhereHas('contact', function($query){
        //     $query->where('phone', 'like', '91983%');
        // })->get();

        $studentData = Contact::with('student')->get();

        return $studentData;
    }
}
