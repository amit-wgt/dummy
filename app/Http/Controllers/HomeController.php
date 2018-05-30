<?php

namespace App\Http\Controllers;
use App\Events\HelloPusherEvent;
use Illuminate\Http\Request;
use GeoIP;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $requst)
    {
        
        return view('home');
    }

    public function geo(Request $requst)
    {
        $clientIP = \Request::ip(); //get the ip address of user

        $geo =  geoip();//all object body from geo

        $ip = geoip()->getLocation('58.218.199.147'); // get the perticular location data from that ip
        /*Example respose from china ip*/

        /*
        Torann\GeoIP\Location Object
        (
            [attributes:protected] => Array
                (
                    [ip] => 58.218.199.147
                    [iso_code] => CN
                    [country] => China
                    [city] => Nanjing
                    [state] => JS
                    [state_name] => Jiangsu
                    [postal_code] => 
                    [lat] => 32.0617
                    [lon] => 118.7778
                    [timezone] => Asia/Shanghai
                    [continent] => Unknown
                    [currency] => CNY
                    [default] => 
                )
        )
        */
        pre($ip->toArray());die;
    }

    public function comment(Request $request)
    {
       

        $comment = $request->comment;

        event(new HelloPusherEvent($comment)); 
        return redirect('feed');

    }



}
