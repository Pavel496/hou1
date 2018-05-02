<?php
use App\Events\Inst;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        // Create admin account
        DB::table('users')->insert([
            'usertype' => 'Admin',
            'name' => 'Country House Realty',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'image_icon' => null,
            'remember_token' => str_random(10),
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('Readinesses')->truncate();

        \DB::table('Readinesses')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'под ключ',
                'slug' => 'pod_kljuch',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'под отделку',
                'slug' => 'pod_otdelku',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'с мебелью',
                'slug' => 's_mebelju',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'без мебели',
                'slug' => 'bez_mebeli',
            ),
        ));


        \DB::table('Directions')->truncate();

        \DB::table('Directions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Рублево-Успенское шоссе',
                'slug' => 'rublevo-uspenskoe-shosse',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Новорижское шоссе',
                'slug' => 'novorizhskoe-shosse',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Минское шоссе',
                'slug' => 'minskoe-shosse',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Киевское шоссе',
                'slug' => 'kievskoe-shosse',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Алтуфьевское шоссе',
                'slug' => 'altufevskoe-shosse',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Боровское шоссе',
                'slug' => 'borovskoe-shosse',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Волоколамское шоссе',
                'slug' => 'volokolamskoe-shosse',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Дмитровское шоссе',
                'slug' => 'dmitrovskoe-shosse',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Ильинское шоссе',
                'slug' => 'ilinskoe-shosse',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Калужское шоссе',
                'slug' => 'kaluzhskoe-shosse',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Ленинградское шоссе',
                'slug' => 'leningradskoe-shosse',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Осташковское шоссе',
                'slug' => 'ostashkovskoe-shosse',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Пятницкое шоссе',
                'slug' => 'pyatnitskoe-shosse',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Симферопольское шоссе',
                'slug' => 'simferopolskoe-shosse',
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Сколковское шоссе',
                'slug' => 'skolkovskoe-shosse',
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Можайское шоссе',
                'slug' => 'mozhayskoe-shosse',
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Москва',
                'slug' => 'moskva',
            ),
        ));

        DB::table('settings')->insert([
            'site_name' => 'Country House Realty',
            'site_email' => 'admin@gmail.com',
            'site_logo' => 'logo.png',
            'site_favicon' => 'favicon.png',
            'google_map_key' => 'AIzaSyC3m_TyDp94bKpyOxWzojZgcUXYj8DdbBc',
            'site_description' => 'Country House Realty Агенство недвижимости',
            'site_copyright' => 'Copyright © 2018 Country House Realty. All rights reserved.',
            'footer_widget1_title' => 'О нас',
            'footer_widget1' => 'Наше агентство недвижимости предоставляет услуги по покупке, продаже, сдаче в аренду недвижимости в Москве и ближнем Подмосковье, в том числе осуществляет юридическое сопровождение сделок. Мы разрабатываем дизайн интерьеров, производим благоустройство территорий, осуществляем строительство и ремонт любой сложности.',
            'footer_widget2_title' => 'Follow Us',
            'footer_widget2' => '<img src=\"http://scriptscode7.com/follow.jpg\" width=\"325\"/>',
            'footer_widget3_title' => 'Оставайтесь на связи',
            'footer_widget3' => '<ul class=\"contact-info\">
            <li><i class=\"fa fa-map-marker\"></i>Real estate script.
9.5 Main Street, CA,USA</li><li class=\"phone\"><i class=\"fa fa-phone\"></i>+62-3456-78910</li>   <li><i class=\"fa fa-envelope\"></i>info@domain.com</li></ul>',
            'all_properties_layout' => 'grid',
            'map_latitude' => '55.80538201277453',
            'map_longitude' => '37.514888346679754',
            'home_properties_layout' => 'slider',
            'featured_properties_layout' => 'rows',
            'sale_properties_layout' => 'grid_side',
            'rent_properties_layout' => 'rows',
            'contact_lat' => '55.80538201277453',
            'contact_long' => '37.514888346679754',
            'contact_us_title' => 'Контакты',
            'contact_us_email' => 'info@example.com',
            'contact_us_phone' => '+62-3456-78910',
            'contact_us_address' => 'Real estate script. 9.5 Main Street, CA,USA',
            'about_us_title' => 'О нас',
            'about_us_description' => '<p>Наше агентство недвижимости предоставляет услуги по покупке, продаже,</p><p>сдаче в аренду недвижимости в Москве и ближнем Подмосковье, в том числе</p><p>осуществляет юридическое сопровождение сделок. Мы разрабатываем дизайн интерьеров,</p><p>производим благоустройство территорий, осуществляем строительство и ремонт любой сложности.</p><p>Более 15-ти лет на рынке, нас рекомендуют друзьям.</p><p>Основными клиентами являются физические лица, но также оказываем услуги и юридическим лицам.</p><p>Наше кредо - грамотная работа и&nbsp; конфиденциальность, гибкость&nbsp; к внешним условиям и их изменению.</p><p>Будем рады сотрудничеству!</p>',
            'currency_sign' => '$',
            'stripe_currency' => 'USD',
            'featured_property_price' => '10'
        ]);

        //Types set

        DB::table('property_types')->insert([
            'types' => 'Дом',
            'slug' => 'house'
        ]);

        DB::table('property_types')->insert([
            'types' => 'Таунхаус',
            'slug' => 'townhouse'
        ]);

        DB::table('property_types')->insert([
            'types' => 'Квартира',
            'slug' => 'apartment'
        ]);

        DB::table('property_types')->insert([
            'types' => 'Участок',
            'slug' => 'land'
        ]);


        //Types set

        DB::table('slider')->insert([
            'slider_title' => 'Slider 1',
            'slider_text1' => 'Vacation Rental',
            'slider_text2' => 'in San Francisco',
            'image_name' => 'slider-1-909481380b44adce572e160b5019c2c9'
        ]);

        DB::table('slider')->insert([
            'slider_title' => 'Slider 2',
            'slider_text1' => 'Luxury Apartment',
            'slider_text2' => 'in New York',
            'image_name' => 'slider-1-3393cfddb0e497749d7242a9c0269301'
        ]);

        DB::table('slider')->insert([
            'slider_title' => 'Slider 3',
            'slider_text1' => 'Family House',
            'slider_text2' => 'in Miami',
            'image_name' => 'slider-3-e2377e7ba15750b6ff3819ff38f5909c'
        ]);

    }
}
