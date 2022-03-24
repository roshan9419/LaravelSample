<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class FormController extends Controller
{
    public function form()
    {
        $states = ['Andaman and Nicobar (UT)', 'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chandigarh (UT)', 'Chhattisgarh', 'Dadra and Nagar Haveli (UT)', 'Daman and Diu (UT)', 'Delhi', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jammu and Kashmir', 'Jharkhand', 'Karnataka', 'Kerala', 'Lakshadweep (UT)', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Orissa', 'Puducherry (UT)', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal'];
        $ageGroups = ['Below < 18 yrs', '18 to 23 yrs', '24 to 34 yrs', '35 to 44 yrs', '45 to 54 yrs', 'Above 65+'];
        return view('profile.form', ['states' => $states, 'ageGroups' => $ageGroups]);
    }

    public function addDetails(Request $req)
    {
        // dd($request);
        $req->validate([
            "firstName" => "required",
            "lastName" => "required",
            "email" => "required",
            "phoneCode" => "required",
            "phoneNumber" => "required",
            "gender" => "required",
            "ageGroup" => "required",
            "maritalStatus" => "required",
            "state" => "required",
            "city" => "required",
            "pincode" => "required",
            "about" => "required",
            "workDays" => "required",
            "experience" => "required"
        ]);

        echo "<h1>Your information has been saved, here are the details</h1><hr>";
       
        $name = $req->firstName;
        if ($req->middleName) $name .= " " . $req->middleName;
        $name .= " " . $req->lastName;

        $this->showItem("Full Name", $name);
        $this->showItem("E-mail", $req->email);
        $this->showItem("Phone number", $req->phoneCode . " " . $req->phoneNumber);
        $this->showItem("Gender", $req->gender);
        $this->showItem("Age Group", $req->ageGroup);
        $this->showItem("Marital Status", $req->maritalStatus);
        $this->showItem("Address", join(", ", [$req->city, $req->state, $req->pincode]));
        $this->showItem("About you", $req->about);
        $this->showItem("Working days", join(", ", $req->workDays));
        $this->showItem("Experience", $req->experience . " years");

        echo "<br># Your social handles:<br>";
        if ($req->website) $this->showItem("Website", "<a href='" . $req->website . "'>" . $req->website . "</a>");
        if ($req->linkedin) $this->showItem("LinkedIn", "<a href='" . $req->linkedin . "'>" . $req->linkedin . "</a>");
        if ($req->github) $this->showItem("GitHub", "<a href='" . $req->github . "'>" . $req->github . "</a>");
    }

    private function showItem($key, $value)
    {
        echo "<b>" . $key . ":</b> " . $value . "<br>";
    }
}
