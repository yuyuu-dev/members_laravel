<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Repositories\Member\MemberRepositoryInterface;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $memberRepository;

    /**
     * 新しいコントローラーインスタンスの生成
     */
    public function __construct(MemberRepositoryInterface $memberRepository)
    {
        $this->memberRepository = $memberRepository;
    }

    /**
     * 会員登録画面 初期表示
     *
     * @param Request $request
     * @return Response
     */
    public function register() {
        return view('members.register');
    }

    /**
     * 会員情報を作成
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:15',
            'phone' => 'required|max:15',
            'email' => 'required|email|max:254'
        ]);

        // 会員情報の作成
        $this->memberRepository->store([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect('/');
    }
}
