<?php

namespace Database\Seeders;

use App\Models\Foreign;
use Illuminate\Database\Seeder;

class ForeignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Foreign;
        $obj->country_id = '1';
        $obj->img = ('img/about/foreign/usa/usa-1.jpg');
        $obj->name = 'Iň çalt ösýän agac bambuk';
        $obj->title = 'Suw, ýer we biologik serişdelerini netijeli peýdalanmak, biologik köpdürliligi we tebigy landşaftlary goramak, çölleşmä we tokaýlaryň ýitmegine garşy göreşmek babatda uly işler geçirilýär.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '1';
        $obj->img = ('img/about/foreign/usa/usa-3.jpg');
        $obj->name = 'Tebigaty goraýan jemgyýet ýangyç-energetika toplumynyň kärhanalary bilen nähili özara hereket edýär?';
        $obj->title = 'Mälim bolşy ýaly, Balkan welaýaty nebit ülkesi hasaplanýar.   Bu ýerde bar bolan senagat kärhanalarynyň agramly bölegi nebitgaz pudagynyň kärhanalary bolup durýar. Häzir 40 müňe golaý adam Tebigaty goramak jemgyýetiniň agzasy bolup, olaryň 20 müňe golaýy nebitgaz senagatynda zähmet çekýär.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '2';
        $obj->img = ('img/about/foreign/usa/usa-3.jpg');
        $obj->name = 'Özüne we kökleriniň topragyna eýe bolan dub agajy';
        $obj->title = 'Dub, sosna, arça agaçlaryny köplenç ýyldyrym urýar. Derek agajyny bolsa hiç wagt ýyldyrym urmaýar.Ýer ýüzünde ösümlikleriň 375 müňüsi bar. Olaryň 250 müňüsi gülli ösümliklerdir.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '2';
        $obj->img = ('img/about/foreign/usa/usa-3.jpg');
        $obj->name = 'Tebigatyň ähli elementleri biri-biri bilen berk baglanyşyklydyr.';
        $obj->title = 'Bu ýerde bar bolan senagat kärhanalarynyň agramly bölegi nebitgaz pudagynyň kärhanalary bolup durýar. Häzir 40 müňe golaý adam Tebigaty goramak jemgyýetiniň agzasy bolup, olaryň 20 müňe golaýy nebitgaz senagatynda zähmet çekýär.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '3';
        $obj->img = ('img/about/foreign/usa/usa-3.jpg');
        $obj->name = 'Iň çalt ösýän agac bambuk';
        $obj->title = 'Emeli bambuk agajy boýy-150 sm - Ofis bezeginde tebigatdan ylham alyp, iş netijeliligiňizi ýokarlandyryň. Hakyky zat bilen tapawutlanmaýan emeli agaçlar, iş ýeriňize ýaşyl energiýany görkezer.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '3';
        $obj->img = ('img/about/foreign/usa/usa-3.jpg');
        $obj->name = 'Haýsy ösümlikler has gowudyr?';
        $obj->title = 'Möwsümiň ahyrynda ähli gök önümler we ösümlikler aýrylanda, bag garaňky görünýär: düşekler boş, ýalaňaç, şemal olaryň üstüne düşen ýapraklary öwüsýär.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '4';
        $obj->img = ('img/about/foreign/usa/usa-3.jpg');
        $obj->name = 'Amerikanyň Peru şäherinde 7.5 bal derejede ýer titremesi boldy..';
        $obj->title = 'ABŞ Geologiýa Gözleg gullugy (USGS) 7.5 ball ululykda ýer titremesiniň merkeziniň kenarýaka Barranca şäherinden 42 km demirgazyk-günbatarda bolandygyny habar berdi.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '4';
        $obj->img = ('img/about/foreign/england/england-1.jpg');
        $obj->name = 'Anglyada galla önümleri?';
        $obj->title = 'Gyşky çowdary haşal otlar bilen gowy bäsleşýär, ýerleri doly örtmek üçin ýeterlik ýaşyl massa alýar. Onuň çuňňur aralaşýan kökleri ýokumly gatlaklary ýokumly gatlaklara çykarýar we topragy kremniý bilen baýlaşdyrýar.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '5';
        $obj->img = ('img/about/foreign/cards/england-1.jpg');
        $obj->name = 'England';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();

        $obj = new Foreign;
        $obj->country_id = '5';
        $obj->img = ('img/about/foreign/cards/england-1.jpg');
        $obj->name = 'England';
        $obj->title = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolor tenetur perferendis modi dignissimos adipisci sunt nulla, enim eaque tempore consectetur? Voluptatibus saepe repellat nam, quidem dolorum tempora eveniet odit.';
        $obj->save();
    }
}
 