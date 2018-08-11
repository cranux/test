<?php

namespace App\Http\Controllers;

use App\Repositories\MemberRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $memberRepository;

    /**
     * HomeController constructor.
     * @param MemberRepository $memberRepository
     */

    public function __construct(MemberRepository $memberRepository)
    {
//        $this->middleware('auth');
        $this->memberRepository = $memberRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        $member = $this->memberRepository->skipPresenter()->find(1);
//        dd($member);
        $token = auth()->guard('api')->login($member);
//        dd($token);
        return response_json('1001','成功',[
            'token' => $token
        ]);
    }

}
