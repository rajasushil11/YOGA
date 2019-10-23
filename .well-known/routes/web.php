<?php
use App\Subscription;
use App\Review;
use App\Enquiry;
use App\Detail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shivalayayttc', 'MainController@shivalayayttc');
Route::get('/shivalaya-yttc', 'MainController@shivalayayttc');

Route::get('/shivalaya200', 'MainController@shivalaya200');
Route::get('/ryt-200-hour-yoga-teacher-training', 'MainController@shivalaya200');

Route::get('/shivalaya300', 'MainController@shivalaya300');
Route::get('/ryt-300-hour-yoga-teacher-training', 'MainController@shivalaya300');

Route::get('/shivalaya500', 'MainController@shivalaya500');
Route::get('/ryt-500-hour-yoga-teacher-training', 'MainController@shivalaya500');

/** Enable this only when there is a course. If, then enable on all Navigaton menu as well.
Route::get('/shivalaya200tantra', 'MainController@shivalaya200tantra');
Route::get('/200-hour-tantra-yoga-teacher-training', 'MainController@shivalaya200tantra');
**/

Route::get('/curriculum200', 'MainController@curriculum200');
Route::get('/200-hour-yttc-curriculum', 'MainController@curriculum200');

Route::get('/curriculum300', 'MainController@curriculum300');
Route::get('/300-hour-yttc-curriculum', 'MainController@curriculum300');

Route::get('/curriculum500', 'MainController@curriculum500');
Route::get('/500-hour-yttc-curriculum', 'MainController@curriculum500');

//Retreats DropDown Start
Route::get('/RetreatYogaSadhana', 'MainController@RetreatYogaSadhana');
Route::get('/yoga-sadhana-retreat', 'MainController@RetreatYogaSadhana');

Route::get('/RetreatJourneyBackToNature', 'MainController@RetreatJourneyBackToNature');
Route::get('/journey-back-to-nature-retreat', 'MainController@RetreatJourneyBackToNature');

Route::get('/RetreatChakraAwakening', 'MainController@RetreatChakraAwakeningRetreatChakraAwakening');
Route::get('/chakra-awakening-retreat', 'MainController@RetreatChakraAwakening');
//Retreats DropDown End

Route::get('/gallery', 'MainController@gallery');

Route::get('/contact-us', 'MainController@contact');
Route::get('/about-us', 'MainController@about');
Route::get('/accommodation', 'MainController@accommodation');
Route::get('/location', 'MainController@location');


Route::post('/emails/welcomeMail', 'MailController@welcomeMail');
Route::post('/emails/subscribe', 'MailController@subscribe');
Route::post('/emails/review', 'MailController@userreview');
Route::post('/emails/enquiry', 'MailController@userenquiry');

Route::post('/register/check', 'RegisterController@check')->name('register.check');

Route::post('auth/register', 'MainController@register');
Route::post('/user/store', 'RegController@store');

Route::get('/details', 'MainController@detailForm');
Route::post('/user-details', 'MailController@updateDetails');
Route::get('/thank-you', 'MainController@thankYou');
Route::get('/teachers-bio', 'MainController@teachersBio');
Route::get('/organic-garden', 'MainController@organicGarden');

// Test URL - Remove this when you're done

Route::get('/t235', 'MainController@t235');

// Unused URL
Route::get('/beginnersyoga', 'MainController@beginnersyoga');
Route::get('/meditation', 'MainController@meditation');
Route::get('/features', 'MainController@features');
Route::get('/trek', 'MainController@trek');