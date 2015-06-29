<?php

if (Session::get('userType') == 'admin') {
	echo Session::get('userType');
}

echo Auth::user();