<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Repositories\Member\MemberRepositoryInterface;
use Illuminate\Http\Request;

class IndexController extends Controller
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
     * すべての会員をリスト表示
     *
     * @param Request $request
     * @return Response
     */
    public function index() {
        return view('members.index', [
            'members' => $this->memberRepository->findAll(),
        ]);
    }
}
