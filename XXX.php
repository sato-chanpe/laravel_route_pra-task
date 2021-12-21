<?php

Route::group(['prefix' => 'XXX'], function() {
    Route::get('YYY', 'Admin\AAAController@bbb'); //XXX配下のディレクトリ（news,profilen等のYYYへのアクセスがあった時にbbb Actionに渡す。
});