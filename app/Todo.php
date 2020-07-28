<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    // protected $fillable 를 통해 디비 필드 요소에 접근을 허용한다.
//        protected $fillable = ['title', 'content'];

        // 접근허용 설정이 귀찮으신 분들은
        // 이렇게 guarded 로 퉁치시면 됩니다.
        protected $guarded = [];

}
