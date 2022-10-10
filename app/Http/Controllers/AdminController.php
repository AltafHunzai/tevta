<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Course;
use App\Models\Blog;
use App\Models\Job;

class AdminController extends Controller
{
    // event functions goes here
    public function addevent()
    {
        return view('admin.add_event');
    }

    public function event(Request $request)
    {

        $event = new event;

        $event_image = $request->event_image;
        $imagename = time() . '.' . $event_image->getClientoriginalExtension();
        $request->event_image->move('eventimage', $imagename);
        $event->event_Image = $imagename;

        $event->event_tag = $request->event_tag;
        $event->event_date = $request->event_date;
        $event->event_title = $request->event_title;
        $event->event_detail = $request->event_detail;

        $event->save();
        return redirect()->back()->with('message', 'Event added Successfully');
    }

    public function showevent()
    {
        $data = event::all();
        return view('admin.showevent', compact('data'));
    }

    public function deleteevent($id)
    {
        $data = event::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function updateevent($id)
    {
        $data = event::find($id);
        return view('admin.update_event', compact('data'));
    }

    public function editEvent(Request $request, $id)
    {
        $event = event::find($id);
        $event_image = $request->event_image;
        if ($event_image) {
            $imagename = time() . '.' . $event_image->getClientoriginalExtension();
            $request->event_image->move('eventimage', $imagename);
            $event->event_Image = $imagename;
        }

        $event->event_tag = $request->event_tag;
        $event->event_date = $request->event_date;
        $event->event_title = $request->event_title;
        $event->event_detail = $request->event_detail;

        $event->save();
        return redirect()->back()->with('message', 'Event has been updated Successfully');
    }

    // course functions goes here
    public function addcourse()
    {
        return view('admin.add_course');
    }

    public function course(Request $request)
    {
        $course = new course;

        $course_image = $request->course_image;
        $courseimagename = time() . '.' . $course_image->getClientoriginalExtension();
        $request->course_image->move('courseimage', $courseimagename);
        $course->course_image = $courseimagename;

        $course->course_name = $request->course_name;
        $course->course_overview = $request->course_overview;
        $course->course_criteria1 = $request->course_criteria1;
        $course->course_criteria2 = $request->course_criteria2;
        $course->course_criteria3 = $request->course_criteria3;
        $course->course_criteria4 = $request->course_criteria4;
        $course->course_criteria5 = $request->course_criteria5;
        $course->course_criteria6 = $request->course_criteria6;
        $course->course_criteria7 = $request->course_criteria7;
        $course->course_criteria8 = $request->course_criteria8;
        $course->course_criteria9 = $request->course_criteria9;
        $course->course_curriculum = $request->course_curriculum;

        $course->save();
        return redirect()->back()->with('message', 'Course added successfully');
    }

    public function showcourse()
    {
        $data = course::all();
        return view('admin.showcourse', compact('data'));
    }

    public function deletecourse($id)
    {
        $data = course::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatecourse($id)
    {
        $data = course::find($id);
        return view('admin.update_course', compact('data'));
    }

    public function editCourse(Request $request, $id)
    {
        $course = course::find($id);

        $course_image = $request->course_image;
        if ($course_image) {
            $courseimagename = time() . '.' . $course_image->getClientoriginalExtension();
            $request->course_image->move('courseimage', $courseimagename);
            $course->course_Image = $courseimagename;
        }

        $course->course_name = $request->course_name;
        $course->course_overview = $request->course_overview;
        $course->course_criteria1 = $request->course_criteria1;
        $course->course_criteria2 = $request->course_criteria2;
        $course->course_criteria3 = $request->course_criteria3;
        $course->course_criteria4 = $request->course_criteria4;
        $course->course_criteria5 = $request->course_criteria5;
        $course->course_criteria6 = $request->course_criteria6;
        $course->course_criteria7 = $request->course_criteria7;
        $course->course_criteria8 = $request->course_criteria8;
        $course->course_criteria9 = $request->course_criteria9;
        $course->course_curriculum = $request->course_curriculum;

        $course->save();

        return redirect()->back()->with('message', 'Course has been updated Successfully');
    }

    // job functions goes here
    public function addjob()
    {
        return view('admin.add_job');
    }

    public function job(Request $request)
    {

        $job = new job;

        $job->job_title = $request->job_title;
        $job->job_information = $request->job_information;
        $job->job_post_date = $request->job_post_date;
        $job->job_last_date = $request->job_last_date;
        $job->job_eligibility = $request->job_eligibility;

        $job->save();

        return redirect()->back()->with('message', 'Job added successfully');
    }

    public function showjob()
    {
        $data = job::all();
        return view('admin.showjob', compact('data'));
    }

    public function deletejob($id)
    {
        $data=job::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatejob($id) {
        $data=job::find($id);
        return view('admin.update_job', compact('data'));
        
    }

    public function editJob(Request $request, $id) {
        $job=job::find($id);

        $job->job_title=$request->job_title;
        $job->job_information=$request->job_information;
        $job->job_post_date=$request->job_post_date;
        $job->job_last_date=$request->job_last_date;
        $job->job_eligibility=$request->job_eligibility;

        $job->save();
        return redirect()->back()->with('message', 'Job has been updated Successfully.');
    }

    // blog function goes here
    public function addblog()
    {
        return view('admin.add_blog');
    }

    public function blog(Request $request)
    {
        $blog = new blog;

        $blog_image = $request->blog_image;
        $blogimagename = time() . '.' . $blog_image->getClientoriginalExtension();
        $request->blog_image->move('blogimage', $blogimagename);
        $blog->blog_image = $blogimagename;

        $blog->blog_date = $request->blog_date;
        $blog->blog_title = $request->blog_title;
        $blog->blog_detail = $request->blog_detail;

        $blog->save();
        return redirect()->back()->with('message', 'Blog added Successfully');
    }

    public function showblog() {
        $data=blog::all();
        return view('admin.showblog', compact('data'));
    }

    public function deleteblog($id) {
        $data=blog::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateblog($id) {
        $data=blog::find($id);
        return view('admin.update_blog', compact('data'));
    }

    public function editBlog(Request $request, $id) {
        $blog=blog::find($id);

        $blog_image=$request->blog_image;
        if($blog_image) {
            $blogimagename=time().'.'.$blog_image->getClientoriginalExtension();
            $request->blog_image->move('blogimage', $blogimagename);
            $blog->blog_Image = $blogimagename;
        }

        $blog->blog_date=$request->blog_date;
        $blog->blog_title=$request->blog_title;
        $blog->blog_detail=$request->blog_detail;

        $blog->save();
        return redirect()->back()->with('message', 'Blog has been updated Successfully.');
    }
}
