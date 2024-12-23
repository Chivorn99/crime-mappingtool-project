<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Crime;
use App\Models\CrimeType;
use App\Models\CrimePending;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // User Data Table
    public function displayUser()
    {
        $users = User::all();
        return view('admin_page/users', ['users' => $users]);
    }

    //Displaa Approved Crime
    public function displayCrime()
    {
        $crimes = Crime::all();
        $crimeTypes = CrimeType::all();
        return view('admin_page/crimes', ['crimes' => $crimes, 'crimeTypes' => $crimeTypes]);
    }
    // Display Pending Crimes
    public function displayPendingCrime()
    {
        $crime_pendings = CrimePending::all();
        return view('admin_page/pending', ['crime_pendings' => $crime_pendings]);
    }

    public function displayCrimeReport(){
        return view('user/report');
    }

    public function displayRecently(){
        $recentUsers = User::where('created_at', '>=', now()->subDay(7))->get();
        $recentCrimes = Crime::where('created_at', '>=', now()->subDay(7))-> get();
        return view('admin_page/home', ['recentUsers' => $recentUsers], ['recentCrimes' => $recentCrimes]);
    }

    public function displayContacts(){
        $contacts = Contact::all();
        return view('admin_page/contacts', ['contacts' => $contacts]);
    }
}
