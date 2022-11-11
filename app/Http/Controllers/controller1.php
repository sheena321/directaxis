<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_detail;

class controller1 extends Controller
{
    function insertion(Request $req){
$name1=$req->name;
$email1=$req->email;
$phone1=$req->ph;
$date1=$req->date;
$addr1=$req->add;
$ob1=new user_detail([
'name'=>$name1,
'email'=>$email1,
'phone'=>$phone1,
'date'=>$date1,
'address'=>$addr1
    ]);
    $chk=$ob1->save();
         if($chk){
        echo "data inserted successfully";
        return redirect("insert");
        }
    }


    function showall(){
    
       $data=user_detail::all();
    //    print_r($data);
 return view('showall',['key1'=>$data]);
    }

   
   
    function del($id){
        user_detail::find($id)->delete();
        return redirect("showall"); 
    }


    function update($id){
       $data=user_detail::find($id);
       return view('update_page',['key2'=>$data]);
    }

    function update_new(Request $req,$id){
        $name1=$req->name;
        $email1=$req->email;
        $phone1=$req->ph;
        $date1=$req->date;
        $addr1=$req->add;
        user_detail::find($id)->update([
            'name'=>$name1,
            'email'=>$email1,
            'phone'=>$phone1,
            'date'=>$date1,
            'address'=>$addr1
        ]);
return redirect("showall");
    }

    function file_upload(Request $req){
        $name1=$req->name;
        $img1="img".time().".".$req->file1->getClientOriginalExtension();
        // echo $img1;
        $req->file1->storeAs("public/img_file",$img1);
        $ob2=new user_detail([
            'uname'=>$name1,
            'image_file'=>$img1
        ]);
        // return view('laravelcrud/file_upload',['key_value'=>"insert successfuly"]);
        return redirect("fileupload");
    
        }
    


}
