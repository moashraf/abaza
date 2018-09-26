<?php

namespace App\Http\Controllers;

 use App\Models\Categories_Products;
use App\Models\SERVICE;
 use App\Models\projects_cat;
use App\Models\NEWS;
 
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        App()->setLocale('ar');

    }

    public function done()
    {
     
       return view('main.thankspage');
    }


	
	
	public function orders_get()
    {
                return view('main.orders');

    }
	
	
	
	public function orders( request $request)
    {
        $input = $request->all();

        $order = order::create($input);

 
        return redirect(route('done'));
    }
	
	
    public function  form(Request $request) 
    {

        $to = "mohamed.be4em@gmail.com  , a.badr.be4em@gmail.com";
        $subject = "بامبو نيو هاوس        ";
        $neme = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['mail'];
         $message="<html><head><title> بامبو نيو هاوس         </title>
        </head><body><table>
        <tr><th>Firstname</th><th>phone</th><th>email</th></tr>
        <tr> <td>$neme  </td><td>$phone  </td><td>$email  </td> </tr>
        </table></body></html> ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <info@scpc-eg.com>' . "\r\n";

           if(isset($_POST['phone'])){
        if(mail($to,$subject,$message,$headers)){
           header("Location: http://scpc-eg.com/");
        }else{  echo "Mail Not Sent"; } }  
        


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
 		 return view('main.index',
            [
                 'SERVICE' => $SERVICE 
            ]);
    }
	
	  
	
	
	
	   public function news()
    {
 
 $SERVICE = SERVICE::limit(12)->get();
		 return view('main.news',
            [
                 'SERVICE' => $SERVICE 
            ]);
    }
	
	
	
	   public function singel_news($id)
    {
 
  $NEWS = NEWS::where('id', $id)->first();
                if (!is_null($NEWS)) {
                 		 return view('main.singel_news',
                        [
                            'NEWS' => $NEWS,
                        ]);
                } else {
                   // return redirect('/');

                }
		  }
	
	
	   public function singel_services($id)
    {
 
  $services = SERVICE::where('id', $id)->first();
                if (!is_null($services)) {
                 		 return view('main.singel_services',
                        [
                            'services' => $services,
                        ]);
                } else {
                   // return redirect('/');

                }
		  }
	
	
	
	
	
	
	 public function About()
    {
 
 		 return view('main.about_us' );
    }
	
	 public function Contact()
    {
 
 $SERVICE = SERVICE::limit(12)->get();
		 return view('main.contact',
            [
                 'SERVICE' => $SERVICE 
            ]);
    }
	
	
	
	
	  public function projects()
    {
       $Categories_Products = projects_cat::limit(50)->get();

 $projects = slider::limit(40)->get();
		 return view('main.all_projects',
            [
			             'Categories_Products' => $Categories_Products, 

                 'projects' => $projects 
            ]);
    }
	
	
	
	
	public function services()
    {
 
 $SERVICE = SERVICE::limit(50)->get();
		 return view('main.services',
            [
                 'SERVICE' => $SERVICE 
            ]);
    }
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
