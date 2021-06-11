<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Repositories\Member\MemberRepositoryInterface;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

class EditController extends Controller
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
    public function edit($id) {
        Log::debug('call function edit.');

        $member = $this->memberRepository->findById($id);
        if (!$member) {
            Log::debug('edit member id not found. ID:' .$id);
            return redirect('/');
        }

        return view('members.edit', [
            'member' => $member,
        ]);
    }

    /**
     * 会員情報を作成
     *
     * @param Request $request
     * @return Response
     */
    public function save(Request $request) {
        Log::debug('call function save.');

        $this->validate($request, [
            'name' => 'required|max:15',
            'phone' => 'required|max:15',
            'email' => 'required|email|max:254'
        ]);

        // 会員情報の作成
        $this->memberRepository->save([
            'id' => $request->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect('/');
    }

    /**
     * 会員情報を削除
     *
     * @param Request $request
     * @return Response
     */
    public function destroy(Request $request) {
        Log::debug('call function destroy.');

        $this->memberRepository->destroy($request->id);
        return redirect('/');
    }
}
