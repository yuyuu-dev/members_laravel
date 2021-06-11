<?php

namespace App\Repositories\Member;

interface MemberRepositoryInterface
{
    /**
     * すべての会員レコードを取得
     *
     * @return Collection
     */
    public function findAll();

    /**
     * idで会員レコードを1件検索
     */
    public function findById($id);

    /**
     * 会員レコードを作成
     *
     * @return array
     */
    public function store(array $request);

    /**
     * 会員レコードを更新
     *
     * @return array
     */
    public function save(array $request);

    /**
     * 会員レコードを削除
     *
     */
    public function destroy($id);
}
