<?php

use App\Models\UserProfile;

use Illuminate\Http\Request;
use App\Models\UserProfile;

$userProfile = new UserProfile();
$userProfile->full_name = 'Kevin Anderson';
$userProfile->about = 'Sunt est soluta temporibus...'; // Your about text
$userProfile->company = 'Lueilwitz, Wisoky and Leuschke';
$userProfile->job = 'Web Designer';
$userProfile->country = 'USA';
$userProfile->address = 'A108 Adam Street, New York, NY 535022';
$userProfile->phone = '(436) 486-3538 x29071';
$userProfile->email = 'k.anderson@example.com';
$userProfile->twitter = 'https://twitter.com/#';
$userProfile->facebook = 'https://facebook.com/#';
$userProfile->instagram = 'https://instagram.com/#';
$userProfile->linkedin = 'https://linkedin.com/#';
$userProfile->save();
