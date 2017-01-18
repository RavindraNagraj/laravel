<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Nagraj;
use DB;
use Illuminate\Mail\Mailable;
use Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       dd("helloravi");
            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    $myuser =new Nagraj();
        $myuser->name=$name;
        $myuser->email=$email;
        $myuser->password=$password;
  
       $myuser->save();
        
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $employee=Nagraj::all();
        dd($employee);
            }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $id=3;
        $name="Ravi";
        $email="00002canopus@gmail.com";
        DB::table('nagrajs')
            ->where('id', $id)
            ->update(['name' =>$name,'email'=>$email]); 
                }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            }



 public function sendEmailReminder(Request $request, $id=1)
    {
        $user = Nagraj::findOrFail($id);
       Mail::send('checkmail', ['user' => $user], function ($m) use ($user) {
            $m->from('nag@gmail.com', 'Canopus');

     $check=$m->to($user->email, $user->name)->subject('Ravindra');
        if($check){
            echo 'mail is sent';
        }
        else{
            echo 'mail not be sent';
        }
        });
    }
}