<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Event;
use App\Models\Blog;
use App\Models\Job;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // Checking Auth
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {

                $event = event::all();
                return view('user.index', compact('event'));
            } else {
                return view('admin.index');
            }
        } else {
            return redirect()->back();
        }
    }

    // show index page
    public function index()
    {
        if (Auth::id()) {
            return redirect('index');
        } else {
            $event = event::all();

            return view('user.index', compact('event'));
        }
    }

    // show about page
    public function about()
    {
        return view('user.about');
    }

    // show AcadmicsAdmissions page
    public function AcadmicsAdmissions()
    {
        return view('user.AcadmicsAdmissions');
    }

    // serviceCenter page
    public function serviceCenter()
    {
        return view('user.serviceCenter');
    }

    // researchPublication
    public function researchPublication()
    {
        return view('user.researchPublication');
    }

    // financialSupport
    public function financialSupport()
    {
        return view('user.financialSupport');
    }

    // rulesRegulation
    public function rulesRegulation()
    {
        return view('user.rulesRegulation');
    }

    // faculty
    public function faculty()
    {
        return view('user.faculty');
    }

    // show blog page
    public function blog()
    {
        $blog = DB::table('blogs')->orderBy('id', 'desc')->get();
        $blog = blog::all();
        if (Auth::id()) {
            return view('user.blog', compact('blog'));
        } else {
            return view('user.blog', compact('blog'));
        }
        return view('user.blog');
    }

    // show jobs page
    public function job()
    {
        if (Auth::id()) {
            return redirect('job');
        } else {
            $job = job::all();
            return view('user.job', compact('job'));
        }
        return view('user.job');
    }

    // show courses page
    public function schoolOfGbtevta()
    {
        if (Auth::id()) {
            return redirect('schoolOfGbtevta');
        } else {
            $course = course::all();
            return view('user.schoolOfGbtevta', compact('course'));
        }
        return view('user.schoolOfGbtevta');
    }

    // registrationform function goes here
    public function addregistrationform() {
        if (Auth::id()) {
            return redirect('registrationform');
        } else {
            $course = course::all();
            return view('user.registrationform', compact('course'));
        }
        return view('user.registrationform');
    }

    // show registrationform page
    public function registrationform(Request $request) {
        // print_r($request->all());
        $enrollment = new enrollment;

        $enrollment->First_Name=$request->First_Name;
        $enrollment->Last_Name=$request->Last_Name;
        $enrollment->Std_Gender=$request->Std_Gender;
        $enrollment->Std_Religion=$request->Std_Religion;
        $enrollment->Std_D_O_B=$request->Std_D_O_B;
        $enrollment->Std_CNIC=$request->Std_CNIC;
        $enrollment->Std_Nationality=$request->Std_Nationality;
        $enrollment->Std_Number=$request->Std_Number;
        $enrollment->Std_Email=$request->Std_Email;
        $enrollment->Course_select=$request->Course_select;
        $enrollment->Course_Knowledge=$request->Course_Knowledge;
        $enrollment->Guardian_Name=$request->Guardian_Name;
        $enrollment->Guardian_Occupation=$request->Guardian_Occupation;
        $enrollment->Guardian_Email=$request->Guardian_Email;
        $enrollment->Guardian_Number=$request->Guardian_Number;
        $enrollment->Guardian_Cnic=$request->Guardian_Cnic;
        $enrollment->Guardian_Relation=$request->Guardian_Relation;
        $enrollment->Std_Education=$request->Std_Education;
        $enrollment->Edu_Institute=$request->Edu_Institute;
        $enrollment->Y_O_P=$request->Y_O_P;
        $enrollment->undertaking=$request->undertaking;

        $Std_Pic=$request->Std_Pic;
        $Std_Pic_name=time().'.'.$Std_Pic->getClientoriginalExtension();
        $request->Std_Pic->move('studentimages', $Std_Pic_name);
        $enrollment->Std_Pic=$Std_Pic_name;
        
        $Std_Domicile=$request->Std_Domicile;
        $Std_Domicile_name=time().'.'.$Std_Domicile->getClientoriginalExtension();
        $request->Std_Domicile->move('studentDomicileimages', $Std_Domicile_name);
        $enrollment->Std_Domicile=$Std_Domicile_name;

        $enrollment->save();
        return redirect()->back()->with('message', 'Enrollment request Successful. We will contact you soon.');
        
    }

    // show contactus page
    public function contactus()
    {
        return view('user.contactus');
    }
}
