# Dentechno

Dectechnoは世界中の歯科技工を学びたい人が登録できるYoutubeのようなプラットフォームで動画を見ながら学べるサイトです。
まだまだ動画は少ないですが、これからどんどんあげていこうと思ってるところです。

# DEMO

https://dentakuno2.herokuapp.com/index.php 

上記のURLがこのサイトにログインするURLですが、ログインしないと入れなくなってます。

テストアカウント

Username: sample

Password: sample

下記がサイトの見た目でこんな感じで教授ごとに動画がみれます。

https://gyazo.com/95f12c2f12c8f7d9b286a8d226989b90

# 制作背景
前まではVimeoという動画サイトを用いて、動画で学べるサイトを学生の皆さんに提供していたのですが、そのVimeoのサイト事態が見にくいとの指摘を学生の方からいただき、検索のところもうまく連動していなかった。ですので、もっと簡単で見やすいサイトを作りたいと思い、今回このような動画サイトアプリを作成しました。


# 特徴
検索バーから動画のタイトルを検索できるようになっています。
また教授ごとに動画を分けているのでサイドバーから教授のボタンを押すと各教授ごとのプロフィールに飛べます。

# Requirement
PHP 7.3.11
Installation
https://www.apachefriends.org/download.html

上記からxamppをダウンロードしました。

# Author
hirokiiiknn
hiroki.world1214@gmail.com


# DB

# usersテーブル

|Column|Type|Options|
|------|----|-------|
|id|int|null: false|
|firstName|string|null: false|
|lastName|string|null: false|
|email|string|null: false, unique: true|
|password|string|null: false|
|signUpDate|timestamp|null: false|
|profilePic|string|null: false|


## videosテーブル

|Column|Type|Options|
|------|----|-------|
|id|int|null: false|
|uploadedBy|string|null: false|
|title|string|null: false|
|videoUrl|string|null: false|
