<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state = State::where('name', 'منطقة الرياض')->first()->id;

        $cities = [
            ['state_id' => $state, 'en_name' => 'Riyadh', 'name' => 'الرياض' ],
            ['state_id' => $state, 'en_name' => 'Ad Diriyah', 'name' => 'الدرعية' ],
            ['state_id' => $state, 'en_name' => 'Al-Kharj', 'name' => 'الخرج' ],
            ['state_id' => $state, 'en_name' => 'Dawadmi', 'name' => 'الدودامي' ],
            ['state_id' => $state, 'en_name' => 'Al Majma`ah', 'name' => 'المجمعة' ],
            ['state_id' => $state, 'en_name' => 'Al-Gwei\'iyyah', 'name' => 'القويعية' ],
            ['state_id' => $state, 'en_name' => 'Layla', 'name' => 'الافلاج' ],
            ['state_id' => $state, 'en_name' => 'Wadi Al-Dawasir', 'name' => 'وادي الدواسر' ],
            ['state_id' => $state, 'en_name' => 'Zulfi', 'name' => 'الزلفي' ],
            ['state_id' => $state, 'en_name' => 'Shaqraa', 'name' => 'شقراء' ],
            ['state_id' => $state, 'en_name' => 'Howtat Bani Tamim', 'name' => 'حوصة بني تميم' ],
            ['state_id' => $state, 'en_name' => 'Afif', 'name' => 'عفيف' ],
            ['state_id' => $state, 'en_name' => 'Al Ghat', 'name' => 'الغاط' ],
            ['state_id' => $state, 'en_name' => 'As Sulayyil', 'name' => 'السليل' ],
            ['state_id' => $state, 'en_name' => 'Dhurma', 'name' => 'ضرما' ],
            ['state_id' => $state, 'en_name' => 'Al-Muzahmiya', 'name' => 'المزاحمية' ],
            ['state_id' => $state, 'en_name' => 'Rumah', 'name' => 'رماح' ],
            ['state_id' => $state, 'en_name' => 'Thadiq', 'name' => 'ثادق' ],
            ['state_id' => $state, 'en_name' => 'Huraymila', 'name' => 'حريملاء' ],
            ['state_id' => $state, 'en_name' => 'Al Hariq', 'name' => 'الحريق' ],
            ['state_id' => $state, 'en_name' => 'Murat', 'name' => 'مرات' ],
            ['state_id' => $state, 'en_name' => 'Ar Rayn', 'name' => 'الرين' ],
            ['state_id' => $state, 'en_name' => 'Ad-Dilam', 'name' => 'الدلم' ],
        ];

        City::insert($cities);

        $state = State::where('name', 'منطقة مكة المكرمة')->first()->id;
        $cities = [
            ['state_id' => $state, 'en_name' => 'Mecca', 'name' => 'العاصمة المقدسة'],
            ['state_id' => $state, 'en_name' => 'Jeddah', 'name' => 'جدة' ],
            ['state_id' => $state, 'en_name' => 'Taif', 'name' => 'الطائف' ],
            ['state_id' => $state, 'en_name' => 'Al Qunfudhah', 'name' => 'القنفذة' ],
            ['state_id' => $state, 'en_name' => 'Al Lith', 'name' => 'الليث' ],
            ['state_id' => $state, 'en_name' => 'Khulais', 'name' => 'خليص' ],
            ['state_id' => $state, 'en_name' => 'Al Khurma', 'name' => 'الخرمة' ],
            ['state_id' => $state, 'en_name' => 'Ranyah', 'name' => 'رنية' ],
            ['state_id' => $state, 'en_name' => 'Turbah', 'name' => 'تربة' ],
            ['state_id' => $state, 'en_name' => 'Al-Jumum', 'name' => 'الجموم' ],
            ['state_id' => $state, 'en_name' => 'Al Kamil', 'name' => 'الكامل' ],
            ['state_id' => $state, 'en_name' => 'Al Muwayh', 'name' => 'المويه' ],
            ['state_id' => $state, 'en_name' => 'Maysaan', 'name' => 'ميسان' ],
            ['state_id' => $state, 'en_name' => 'Adham', 'name' => 'أضم' ],
            ['state_id' => $state, 'en_name' => 'Al-Ardiyat', 'name' => 'العرضيات' ],
            ['state_id' => $state, 'en_name' => 'Bahrah', 'name' => 'بحرة' ]

        ];

        City::insert($cities);

        $state = State::where('name', 'منطقة المدينة المنورة')->first()->id;
        $cities = [
            ['state_id' => $state, 'en_name' => 'Medina', 'name' => 'المدينة المنورة'],
            ['state_id' => $state, 'en_name' => 'Yanbu', 'name' => 'ينبع' ],
            ['state_id' => $state, 'en_name' => 'AlUla', 'name' => 'العلا' ],
            ['state_id' => $state, 'en_name' => 'Mahd adh Dhahab', 'name' => 'المهد' ],
            ['state_id' => $state, 'en_name' => 'Al Hinakiyah', 'name' => 'الحناكية' ],
            ['state_id' => $state, 'en_name' => 'Badr', 'name' => 'بدر' ],
            ['state_id' => $state, 'en_name' => 'Khaybar', 'name' => 'خيبر' ],
            ['state_id' => $state, 'en_name' => 'Al Ais', 'name' => 'العيص' ],
            ['state_id' => $state, 'en_name' => 'Wadi Al Fora\'a', 'name' => 'وادي الفرع' ],

        ];

        City::insert($cities);

        $state = State::where('name', 'منطقة القصيم')->first()->id;
        $cities = [
            ['state_id' => $state, 'en_name' => 'Buraydah', 'name' => 'بريدة' ],
            ['state_id' => $state, 'en_name' => 'Unaizah', 'name' => 'عنيزة' ],
            ['state_id' => $state, 'en_name' => 'Ar Rass', 'name' => 'الرس' ],
            ['state_id' => $state, 'en_name' => 'Al Mithnab', 'name' => 'المذنب' ],
            ['state_id' => $state, 'en_name' => 'Al Bukayriyah', 'name' => 'البكيرية' ],
            ['state_id' => $state, 'en_name' => 'Al Badayea', 'name' => 'البدائع' ],
            ['state_id' => $state, 'en_name' => 'Asyah', 'name' => 'الأسياح' ],
            ['state_id' => $state, 'en_name' => 'An Nabhaniyah', 'name' => 'النبهانية' ],
            ['state_id' => $state, 'en_name' => 'Al Shimasiyah', 'name' => 'الشماسية' ],
            ['state_id' => $state, 'en_name' => 'Uyun Al Jawa', 'name' => 'عيون الجواء' ],
            ['state_id' => $state, 'en_name' => 'Riyadh Al Khabra', 'name' => 'رياض الخبراء' ],
            ['state_id' => $state, 'en_name' => 'Uglat Asugour', 'name' => 'عقلة الصقور' ],
            ['state_id' => $state, 'en_name' => 'Dariyah', 'name' => 'ضرية' ],
        ];

        City::insert($cities);

        $state = State::where('name', 'منطقة الشرقية')->first()->id;
        $cities = [
            ['state_id' => $state, 'en_name' => 'Dammam', 'name' => 'الدمام' ],
            ['state_id' => $state, 'en_name' => 'Al-Ahsa', 'name' => 'الأحساء' ],
            ['state_id' => $state, 'en_name' => 'Hafar Al Batin', 'name' => 'حفر الباطن' ],
            ['state_id' => $state, 'en_name' => 'Al Jubail', 'name' => 'الجبيل' ],
            ['state_id' => $state, 'en_name' => 'Al Qatif', 'name' => 'القطيف' ],
            ['state_id' => $state, 'en_name' => 'El Khabar', 'name' => 'الخبر' ],
            ['state_id' => $state, 'en_name' => 'Khafji', 'name' => 'الخفجي' ],
            ['state_id' => $state, 'en_name' => 'Ras Tanura', 'name' => 'رأس تنورة' ],
            ['state_id' => $state, 'en_name' => 'Buqayq', 'name' => 'بقيق' ],
            ['state_id' => $state, 'en_name' => 'Nairyah', 'name' => 'النعيرية' ],
            ['state_id' => $state, 'en_name' => 'Qaryat Al Ulya', 'name' => 'قرية العليا' ],
            ['state_id' => $state, 'en_name' => 'Inland Sea', 'name' => 'العديد' ],
        ];

        City::insert($cities);

        $state = State::where('name', 'منطقة عسير')->first()->id;
        $cities = [
            ['state_id' => $state, 'en_name' => 'Abha', 'name' => 'أبها' ],
            ['state_id' => $state, 'en_name' => 'Khamis Mushait', 'name' => 'خميس مشيط' ],
            ['state_id' => $state, 'en_name' => 'Bisha', 'name' => 'بيشة' ],
            ['state_id' => $state, 'en_name' => 'Al Namas', 'name' => 'النماص' ],
            ['state_id' => $state, 'en_name' => 'Muhayil', 'name' => 'محايل عسير' ],
            ['state_id' => $state, 'en_name' => 'Dhahran Al Janub', 'name' => 'ظهران الجنوب' ],
            ['state_id' => $state, 'en_name' => 'تثليث', 'name' => 'تثليث' ],
            ['state_id' => $state, 'en_name' => 'Sarat Abidah', 'name' => 'سراة عبيدة' ],
            ['state_id' => $state, 'en_name' => 'Rijal Almaa', 'name' => 'رجال ألمع' ],
            ['state_id' => $state, 'en_name' => 'Balqarn', 'name' => 'بلقرن' ],
            ['state_id' => $state, 'en_name' => 'Ahad Rafidah', 'name' => 'أحد رفيدة' ],
            ['state_id' => $state, 'en_name' => 'Al Majaridah', 'name' => 'المجاردة' ],
            ['state_id' => $state, 'en_name' => 'Al Birk', 'name' => 'البرك' ],
            ['state_id' => $state, 'en_name' => 'Bariq', 'name' => 'بارق' ],
            ['state_id' => $state, 'en_name' => 'Tanomah', 'name' => 'تنومة' ],
            ['state_id' => $state, 'en_name' => 'Tereeb', 'name' => 'طريب' ],
            ['state_id' => $state, 'en_name' => 'Al Harajah', 'name' => 'الحرجة' ],
        ];

        City::insert($cities);

        $state = State::where('name', 'منطقة تبوك')->first()->id;
        $cities = [
            ['state_id' => $state, 'en_name' => 'Tabuk', 'name' => 'تبوك' ],
            ['state_id' => $state, 'en_name' => 'Al Wajh', 'name' => 'الوجه' ],
            ['state_id' => $state, 'en_name' => 'Duba', 'name' => 'ضبا' ],
            ['state_id' => $state, 'en_name' => 'Tayma', 'name' => 'تيماء' ],
            ['state_id' => $state, 'en_name' => 'Umluj', 'name' => 'أملج' ],
            ['state_id' => $state, 'en_name' => 'Haql', 'name' => 'حقل' ],
            ['state_id' => $state, 'en_name' => 'Al-Bad', 'name' => 'البدع' ],
        ];

        City::insert($cities);

        $state = State::where('name', 'منطقة حائل')->first()->id;
        $cities = [
            ['state_id' => $state, 'en_name' => 'Hail', 'name' => 'حائل' ],
            ['state_id' => $state, 'en_name' => 'Baqaa', 'name' => 'بقعاء' ],
            ['state_id' => $state, 'en_name' => 'Al Ghazalah', 'name' => 'الغزالة' ],
            ['state_id' => $state, 'en_name' => 'Ash Shinan', 'name' => 'الشنان' ],
            ['state_id' => $state, 'en_name' => 'Al Hait', 'name' => 'الحائط' ],
            ['state_id' => $state, 'en_name' => 'Al Sulaimi', 'name' => 'السليمي' ],
            ['state_id' => $state, 'en_name' => 'Ash Shamli', 'name' => 'الشملي' ],
            ['state_id' => $state, 'en_name' => 'Mawqaq', 'name' => 'موقق' ],
            ['state_id' => $state, 'en_name' => 'Sumaira\'a', 'name' => 'سميراء' ],
        ];

        City::insert($cities);

        $state = State::where('name', 'منطقة الحدود الشمالية')->first()->id;
        $cities = [
            ['state_id' => $state, 'en_name' => 'Arʿar', 'name' => 'عرعر' ],
            ['state_id' => $state, 'en_name' => 'Rafha', 'name' => 'رفحاء' ],
            ['state_id' => $state, 'en_name' => 'Turaif', 'name' => 'طريف' ],
            ['state_id' => $state, 'en_name' => 'Al Uwayqilah', 'name' => 'العويقيلة' ],
        ];

        City::insert($cities);

        $state = State::where('name', 'منطقة جازان')->first()->id;
        $cities = [
            ['state_id' => $state, 'en_name' => 'Jazan', 'name' => 'جازان' ],
            ['state_id' => $state, 'en_name' => 'Sabya', 'name' => 'صبيا' ],
            ['state_id' => $state, 'en_name' => 'Abu Arish', 'name' => 'أبو عريش' ],
            ['state_id' => $state, 'en_name' => 'Samtah', 'name' => 'صامطة' ],
            ['state_id' => $state, 'en_name' => 'Baish', 'name' => 'بيش' ],
            ['state_id' => $state, 'en_name' => 'Ad Darb', 'name' => 'الدرب' ],
            ['state_id' => $state, 'en_name' => 'Al Harth', 'name' => 'الحرث' ],
            ['state_id' => $state, 'en_name' => 'Damad', 'name' => 'ضمد' ],
            ['state_id' => $state, 'en_name' => 'Al Reeth', 'name' => 'الريث' ],
            ['state_id' => $state, 'en_name' => 'Farasan', 'name' => 'فرسان' ],
            ['state_id' => $state, 'en_name' => 'Addayer', 'name' => 'الدائر' ],
            ['state_id' => $state, 'en_name' => 'Al Aridhah', 'name' => 'العارضة' ],
            ['state_id' => $state, 'en_name' => 'Ahad Al Masarihah', 'name' => 'أحد المسارحة' ],
            ['state_id' => $state, 'en_name' => 'Al Edabi', 'name' => 'العيدابي' ],
            ['state_id' => $state, 'en_name' => 'Fayfa', 'name' => 'فيفاء' ],
            ['state_id' => $state, 'en_name' => 'Al Tuwal', 'name' => 'الطوال' ],
            ['state_id' => $state, 'en_name' => 'Fugitive', 'name' => 'هروب' ],
        ];

        City::insert($cities);

        $state = State::where('name', 'منطقة نجران')->first()->id;
        $cities = [
            ['state_id' => $state, 'en_name' => 'Najran', 'name' => 'نجران' ],
            ['state_id' => $state, 'en_name' => 'Sharorah', 'name' => 'شرورة' ],
            ['state_id' => $state, 'en_name' => 'Hubuna', 'name' => 'حبونا' ],
            ['state_id' => $state, 'en_name' => 'Badr Al Janoub', 'name' => 'بدر الجنوب' ],
            ['state_id' => $state, 'en_name' => 'Yadamah', 'name' => 'يدمه' ],
            ['state_id' => $state, 'en_name' => 'Thar', 'name' => 'ثار' ],
            ['state_id' => $state, 'en_name' => 'Khbash', 'name' => 'خباش' ],
            ['state_id' => $state, 'en_name' => 'Al Kharkhir', 'name' => 'الخرخير' ],
        ];

        City::insert($cities);

        $state = State::where('name', 'منطقة الباحة')->first()->id;
        $cities = [
            ['state_id' => $state, 'en_name' => 'Al Bahah', 'name' => 'الباحة' ],
            ['state_id' => $state, 'en_name' => 'Baljurashi', 'name' => 'بلجرشي' ],
            ['state_id' => $state, 'en_name' => 'Al Mandaq', 'name' => 'المندق' ],
            ['state_id' => $state, 'en_name' => 'Al Makhwah', 'name' => 'المخواة' ],
            ['state_id' => $state, 'en_name' => 'Qilwah', 'name' => 'قلوة' ],
            ['state_id' => $state, 'en_name' => 'Al Aqiq', 'name' => 'العقيق' ],
            ['state_id' => $state, 'en_name' => 'Al Qara', 'name' => 'القرى' ],
            ['state_id' => $state, 'en_name' => 'Ghamed Al-Zinad', 'name' => 'غامد الزناد' ],
            ['state_id' => $state, 'en_name' => 'Hajrah', 'name' => 'الحجرة' ],
            ['state_id' => $state, 'en_name' => 'Bani Hasan', 'name' => 'بني حسن' ],
        ];

        City::insert($cities);

        $state = State::where('name', 'منطقة الجوف')->first()->id;
        $cities = [
            ['state_id' => $state, 'en_name' => 'Sakakah', 'name' => 'سكاكا' ],
            ['state_id' => $state, 'en_name' => 'Al Qurayyat', 'name' => 'القريات' ],
            ['state_id' => $state, 'en_name' => 'Dumat Al-Jandal', 'name' => 'دومة الجندل' ],
            ['state_id' => $state, 'en_name' => 'Tabarjal', 'name' => 'طبرجل' ],
        ];

        City::insert($cities);
    }
}
