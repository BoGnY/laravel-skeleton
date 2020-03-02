<?php

use TCG\Voyager\Facades\Voyager;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
