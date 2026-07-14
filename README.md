# relation-app-practice

## 概要

COACHTECH 教材 Tutorial 9-5「リレーション ハンズオン演習」で作成した成果物です。  
ポスト・コメント・タグのリレーションが紐づいたブログシステムを作成しました。

## 使用技術

- PHP 8.x
- Laravel 10.x
- Eloquent ORM（hasMany / belongsTo / belongsToMany）
- MySQL

## 学んだこと

- MySQLで学習したテーブルのリレーション（1対多や多対多）についてLaravelでの定義を理解できた。
- Eager Loading（with()、withCount()）を用いた、データベースへの多重クエリ発行の回避について
- has()やwhereHas()を用いたリレーションにおける条件の絞り込みについて

## 動作確認

http://localhost/posts にアクセス

## 動作のgifファイル

<img width="1886" height="954" alt="Image" src="https://github.com/user-attachments/assets/e0ad8585-a321-403f-9887-ddc8fd3c3fc7" />
