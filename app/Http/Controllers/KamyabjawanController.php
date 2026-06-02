<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kamyabjawan;
use App\Models\Assesment;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;

class KamyabjawanController extends Controller
{
    function addregistration(Request $req)
    {
        $Kamyabjawans= new Kamyabjawan;

        $Kamyabjawans->Name=$req->name;
        $Kamyabjawans->Gender=$req->gender;
        $Kamyabjawans->Cnic=$req->cnic;
        $Kamyabjawans->Fathername=$req->fname;
        $Kamyabjawans->Father_income_montly=$req->fmonthlyincome;
        $Kamyabjawans->Father_occupation=$req->foccupation;
        $Kamyabjawans->Mobile_no=$req->mobileno;
        $Kamyabjawans->Domicile=$req->domicile;
        $Kamyabjawans->Dob=$req->dateofbirth;
        $Kamyabjawans->Religion=$req->religion;
        $Kamyabjawans->District=$req->district;
        $Kamyabjawans->Email=$req->email;
        $Kamyabjawans->Present_address=$req->presentaddress;
        $Kamyabjawans->Matric_year=$req->primarymiddlematricyear1;
        $Kamyabjawans->Matric_grade=$req->primarymiddlematricgrade1;
        $Kamyabjawans->Matric_school=$req->primarymiddlematricschool1;
        $Kamyabjawans->Intermediate_year=$req->intermediatediplomayear1;
        $Kamyabjawans->Intermediate_grade=$req->intermediatediplomagrade1;
        $Kamyabjawans->Intermediate_school=$req->intermediatediplomaschool1;
        $Kamyabjawans->BSC_year=$req->babscyear1;
        $Kamyabjawans->BSC_grade=$req->babscgrade1;
        $Kamyabjawans->BSC_school=$req->babscschool1;
        $Kamyabjawans->Other_year=$req->otheryear1;
        $Kamyabjawans->Other_grade=$req->othergrade1;
        $Kamyabjawans->Other_school=$req->otherschool1;
        $Kamyabjawans->Rank1=$req->rank1;
        $Kamyabjawans->Exp_Name_of_Institution1=$req->nameintitution1;
        $Kamyabjawans->Duration1=$req->duration1;
        $Kamyabjawans->Rank2=$req->rank2;
        $Kamyabjawans->Exp_Name_of_Institution2=$req->nameintitution2;
        $Kamyabjawans->Duration2=$req->duration2;
        $Kamyabjawans->Rank3=$req->rank3;
        $Kamyabjawans->Exp_Name_of_Institution3=$req->nameintitution3;
        $Kamyabjawans->Duration3=$req->duration3;
        $Kamyabjawans->Preferences1=$req->prefernce1;
        $Kamyabjawans->Course_Name_of_Institution1=$req->coursenameintitution1;
        $Kamyabjawans->Trade_Name1=$req->tradename1;
        $Kamyabjawans->District1=$req->coursedistrict1;
        $Kamyabjawans->Preferences2=$req->prefernce2;
        $Kamyabjawans->Course_Name_of_Institution2=$req->coursenameintitution2;
        $Kamyabjawans->Trade_Name2=$req->tradename2;
        $Kamyabjawans->District2=$req->coursedistrict2;
        $Kamyabjawans->Preferences3=$req->prefernce3;
        $Kamyabjawans->Course_Name_of_Institution3=$req->coursenameintitution3;
        $Kamyabjawans->Trade_Name3=$req->tradename3;
        $Kamyabjawans->District3=$req->coursedistrict3;
        $Kamyabjawans->Sports_person=$req->sportsperson;
        $Kamyabjawans->Hafiz_quran=$req->hafizquran;
        $Kamyabjawans->Physical_disability=$req->physicaldisale;
        $Kamyabjawans->Other_data=$req->otherdata;
        if ($req->file('image')) {
            $file = $req->file('image');
            // foreach ($request->file('images') as $index => $file) {
                $fileOriginalName = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileName  = md5(time()) . '.' . $extension;
                $file->storeAs('careerimg/', $fileName);
            // }
            $Kamyabjawans->Image=$fileName;
        }

        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ];

        $Kamyabjawans->save();
        $data = $req->all();
        $data = [
            "name" => $req->name,
            "cfma" => $req->cfma,
        ];


        $to_name = $req->name;
        $to_email = $req->email;
        $to_email_one = 'info@youexceltraining.com';
        $to_email_two = 'youexceltraining@gmail.com';
        $to_email_three = 'youexcel.connect@gmail.com';
        $to_email_four = 'muneera.amer@youexceltraining.com';

        Mail::send("emails.navttc_form", ["email_data" => $data], function ($message) use ($to_name, $to_email, $req) {
            $message->to($to_email, $to_name)->subject("NAVTTC-Skills for All-Registration form");
            $message->from("info@youexceltraining.com", "YouExcel Training");
        });

//        Mail::send("emails.navttc_form", ["email_data" => $data], function ($message) use ($to_name, $to_email_one, $req) {
//            $message->to($to_email_one, $to_name)->subject("NAVTTC-Skills for All-Registration form");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });

//        Mail::send("emails.navttc_form", ["email_data" => $data], function ($message) use ($to_name, $to_email_two, $req) {
//            $message->to($to_email_two, $to_name)->subject("NAVTTC-Skills for All-Registration form");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });

        Mail::send("emails.navttc_form", ["email_data" => $data], function ($message) use ($to_name, $to_email_three, $req) {
            $message->to($to_email_three, $to_name)->subject("NAVTTC-Skills for All-Registration form");
            $message->from("info@youexceltraining.com", "YouExcel Training");
        });

//        Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_four, $req) {
//            $message->to($to_email_four, $to_name)->subject("NAVTTC-Skills for All-Registration form");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });

            Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
            return redirect('NAVTTC-Skills-for-All-Registration-form');

        // Mail::to($req)->send(new ContactMail($data));
        // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        // $Kamyabjawans->save();
        // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        // return redirect('Kamyab-Jawan-Form');
    }
    function showtable()
    {
        $data= Kamyabjawan::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.View-kamyabjawan-form', compact('data'));
    }
    
    function asseststable()
    {
        $data= Assesment::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-assestment-data', compact('data'));
    }
    
    function delete($id)
    {
        $data= Kamyabjawan::find($id);
        $data->delete();
        return redirect('View-kamyabjawan-form');
    }
}
