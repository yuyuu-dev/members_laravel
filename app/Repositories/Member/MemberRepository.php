<?php

namespace App\Repositories\Member;

use App\Repositories\Member\RepositoryInterface;
use App\Models\Member;

class MemberRepository implements MemberRepositoryInterface
{
    /**
     * すべての会員レコードを取得
     *
     * @return Collection
     */
    public function findAll()
    {
      return Member::orderBy('created_at', 'asc')->get();
    }

    /**
     * idで会員レコードを1件検索
     */
    public function findById($id) {
      return Member::find($id);
    }

    /**
     * 会員レコードを作成
     *
     * @return object
     */
    public function store(array $request) {
      return Member::create($request);
    }

    /**
     * 会員レコードを更新
     *
     * @return array
     */
    public function save(array $request) {
      $member = Member::find($request['id']);
      $member->name = $request['name'];
      $member->phone = $request['phone'];
      $member->email = $request['email'];
      $member->save();
    }

    /**
     * 会員レコードを削除
     *
     */
    public function destroy($id) {
      Member::destroy($id);
    }
}
