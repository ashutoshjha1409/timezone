<?php

Route::get('timezones/{timezone?}', 
  'paket\timezones\TimezonesController@index');