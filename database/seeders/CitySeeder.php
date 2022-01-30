<?php

namespace Database\Seeders;

use App\Models\City;
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
        $obj = new City;
        $obj->welayat_id = '1';
        $obj->img = ('img/about/ourcountry/1.jpg');
        $obj->name = 'Aşgabatda BMG-niň Biologik dürlülik hakyndaky konwensiýasy geçirldi';
        $obj->title = 'Paýtagtymyz Aşgabatda BMG-niň wekilhanasy 1994-nji ýylda açyldy. Bu wekilhananyň taýsyz tagallarynyň netijesinde, 1995–1997-nji ýyllarda BMG-niň diňe Ösüş maksatnamasynyň hünärmenleri Türkmenistanda jemagat hojalygynda, poçta aragatnaşygynda saglygy goraýyş we bilim ulgamyndaky özgertmeler boýunça düzülen taslamalary durmuşa geçirdiler.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '1';
        $obj->img = ('img/about/ourcountry/2.jpg');
        $obj->name = 'Tebigaty aýawly saklamak – mukaddes borç';
        $obj->title = 'Eziz Watanymyzyň tebigy baýlygyny we gözelligini aýawly saklamak, ony geljek nesillerimize ýetirmek – hormatly Prezidentimiz Gurbanguly Berdimuhamedowyň alyp barýan döwlet syýasatynyň esasy ugurlarynyň biridir. Tebigaty goramagyň milli maksatnamasy ykdysady, durmuş we ekologiýa ulgamlarynda goýlan wezipeleriň toplumlaýyn çözülmegine esaslanýar, bu bolsa adamlaryň abadan durmuşynyň möhüm şerti bolup durýar. ';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '1';
        $obj->img = ('img/about/ourcountry/bagul.jpg');
        $obj->name = 'Daşky gurşawy goramak häzirki we geljekki nesiller barada aladadyr';
        $obj->title = '- Tebigat adam üçin nämäni aňladýar? Bu – biziň dem alýan howamyz, içýän suwumyz, hasyl alýan topragymyz... Ol biziň saglygymyzyň we maddy durmuşymyzyň çeşmesidir, çünki adam tebigy serişdelerden – nebitden, gazdan, minerallardan we beýlekilerden durmuş üçin zerur bolan zatlaryny öndürýär, jaý gurýar, egin-eşik, döwrebap tehnikalary öndürýär…';
        $obj->save();

        
        $obj = new City;
        $obj->welayat_id = '1';
        $obj->img = ('img/about/ourcountry/main-2.jpg');
        $obj->name = 'Ekologiýa howup abanýar';
        $obj->title = 'Türkmenistanda eýeçiliginiň görnüşine garamazdan, işiň ekologik taýdan howply görnüşlerini amala aşyrýan edaralar, kärhanalar, guramalar, şol sanda daşary ýurt edara görnüşli taraplar, olaryň şahamçalary, wekilhanalary, şeýle hem edara görnüşli tarapy döretmezden telekeçilik işi bilen meşgullanýan şahsy taraplar üçin hökmany ekologik ätiýaçlandyrmasy girizildi.  ';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '2';
        $obj->img = ('img/about/ourcountry/main-3.jpg');
        $obj->name = 'Ahal welaýatynda ekologiýa çäresi geçirildi';
        $obj->title = 'Ekologiýa çäresi Milli bahar baýramynyň hormatyna geçirilen dabaralaryň möhüm bölegine öwrüldi. Bu çäräni geçirmek üçin Ahalyň dag etegindäki jülgesindäki Nowruz ýaýlasynyň ajaýyp künjegi seçilip alyndy.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '2';
        $obj->img = ('img/about/ourcountry/main.jpg');
        $obj->name = 'Tebigaty aýawly saklamak – mukaddes borç';
        $obj->title = 'Eziz Watanymyzyň tebigy baýlygyny we gözelligini aýawly saklamak, ony geljek nesillerimize ýetirmek – hormatly Prezidentimiz Gurbanguly Berdimuhamedowyň alyp barýan döwlet syýasatynyň esasy ugurlarynyň biridir. Tebigaty goramagyň milli maksatnamasy ykdysady, durmuş we ekologiýa ulgamlarynda goýlan wezipeleriň toplumlaýyn çözülmegine esaslanýar, bu bolsa adamlaryň abadan durmuşynyň möhüm şerti bolup durýar. ';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '2';
        $obj->img = ('img/about/ourcountry/1.jpg');
        $obj->name = 'Ahal welaýatynda bag ekiş möwsümi';
        $obj->title = 'Gurluşyk we binagärlik ministrligi hem-de Energetika ministrligi tarapyndan Ahal welaýatynyň Bäherden etrabynda, paýtagtymyzyň Büzmeýin etrabynda, Ýanbaş-Gökdere zolagynda hem-de Garagum derýasynyň ugrunda giň möçberli bag ekmek işleri ýerine ýetirildi. Umumy meýdany 138,5 gektar meýdanda agaçlaryň, üzümiň we sazagyň 20 müňden gowrak düýbi oturdyldy. ';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '2';
        $obj->img = ('img/about/ourcountry/2.jpg');
        $obj->name = 'Ekologik abadançylygyny goramaga';
        $obj->title = 'Ýurdumyzyň ylmy-tehniki kuwwatynyň artmagy ekologik abadançylygyny goramaga hemmetaraplaýyn ýardam edýär. Milli ykdysadyýetimiziň ähli pudaklarynda innowasion, serişde tygşytlaýjy tehnologiýalar ornaşdyrylýar, howanyň arassalygyna, gurulýan zawodlaryň we fabrikleriň, beýleki desgalaryň ekologik standartlaryna we talaplaryna laýyklygyna gözegçiligiň netijeliligini artdyrmak maksadynda çäreler görülýär.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '3';
        $obj->img = ('img/about/ourcountry/bagul.jpg');
        $obj->name = 'Balkan welaýatynda ýeralma we sogan ekişi tamamlandy';
        $obj->title = 'Döwlet Baştutanymyzyň importuň ornuny tutýan we eksporta gönükdirilen önümçilik baradaky tabşyryklaryna Balkan welaýatynyň ekerançylary öz sallamly goşandyny goşýarlar. “Türkmenistan” gazetiniň ýazmagyna görä, Balkan welaýatynda 600 gektar ýerde ýeralma, 500 gektar ýerde bolsa sogan ekmek işleri alnyp baryldy.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '3';
        $obj->img = ('img/about/ourcountry/main.jpg');
        $obj->name = 'Suw, ýer we biologik serişdelerini netijeli peýdalanmak';
        $obj->title = 'Biologik köpdürliligi we tebigy landşaftlary goramak, çölleşmä we tokaýlaryň ýitmegine garşy göreşmek babatda uly işler geçirilýär. Türkmenistanda eýeçiliginiň görnüşine garamazdan...';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '3';
        $obj->img = ('img/about/ourcountry/main-2.jpg');
        $obj->name = 'Daşky gurşawy goramak häzirki we geljekki nesiller barada aladadyr';
        $obj->title = '- Tebigat adam üçin nämäni aňladýar? Bu – biziň dem alýan howamyz, içýän suwumyz, hasyl alýan topragymyz... Ol biziň saglygymyzyň we maddy durmuşymyzyň çeşmesidir, çünki adam tebigy serişdelerden – nebitden, gazdan, minerallardan we beýlekilerden durmuş üçin zerur bolan zatlaryny öndürýär, jaý gurýar, egin-eşik, döwrebap tehnikalary öndürýär…';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '3';
        $obj->img = ('img/about/ourcountry/main-3.jpg');
        $obj->name = 'BMG-niň halkara ekologiýa konwensiýalarynyň hatarynda';
        $obj->title = 'Türkmenistanyň goşulan BMG-niň halkara ekologiýa konwensiýalarynyň hatarynda Orhus konwensiýasyna möhüm orun degişlidir. Bu Konwensiýa her bir adamyň sagdyn daşky gurşawa bolan hukugyny ykrar edýär, şeýle hem ony goramak boýunça borçlaryny kesgitleýär. Ol üç sany esasy bölekden ybarat bolup, jemgyýetiň ekologik maglumatlaryna elýeterliligi, jemgyýetiň daşky gurşawa degişli meseleler boýunça çözgütleri kabul etmek işine gatnaşmagy we adyl kazyýetlilige mümkinçilik ýaly meseleleri gurşap alýar.    ';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '4';
        $obj->img = ('img/about/ourcountry/main.jpg');
        $obj->name = 'Daşoguz welaýatynda bag ekmek işleri ýokary guramaçylykly geçirildi.';
        $obj->title = '21-nji martda Türkmenistan döwletiniň ähli ýerinde ählihalk ýowary geçirildi. Türkmenistanyň Prezidentiniň Kararyna laýyklykda, şol gün Türkmenistanyň ähli raýatlary ýokary ruhubelentlikde ir sagat 7-de ählihalk ýowaryna gatnaşmak üçin ýörite bellenilen ýerlere ýygnanyşdylar.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '4';
        $obj->img = ('img/about/ourcountry/1.jpg');
        $obj->name = 'Daşoguz welaýatynda ählihalk bag ekmek dabarasy';
        $obj->title = 'Ýurdumyzyň demirgazyk bölegi bolan Daşoguz welaýatynda ählihalk ýowary - köpçülikleýin bag ekmek dabarasy S.A.Nyýazow adyndaky etrabyň J.Hudaýbergenow adyndaky geňeşliginiň çägindäki meýdanynda geçirildi. Bu ýerde agaç nahallaryny oturtmaga welaýat we şäher häkimlikleriniň ýolbaşçylary, jemgyýetçilik guramalarynyň wekilleri, aksakgal ýaşylulardyr mährem eneler, talyp ýaşlar işjeň gatnaşdylar.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '4';
        $obj->img = ('img/about/ourcountry/2.jpg');
        $obj->name = 'Tebigaty aýawly saklamak – mukaddes borç';
        $obj->title = 'Eziz Watanymyzyň tebigy baýlygyny we gözelligini aýawly saklamak, ony geljek nesillerimize ýetirmek – hormatly Prezidentimiz Gurbanguly Berdimuhamedowyň alyp barýan döwlet syýasatynyň esasy ugurlarynyň biridir. Tebigaty goramagyň milli maksatnamasy ykdysady, durmuş we ekologiýa ulgamlarynda goýlan wezipeleriň toplumlaýyn çözülmegine esaslanýar, bu bolsa adamlaryň abadan durmuşynyň möhüm şerti bolup durýar. ';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '4';
        $obj->img = ('img/about/ourcountry/bagul.jpg');
        $obj->name = 'Ýurdumyzda howpsuzlyk we hyzmatdaşlyk';
        $obj->title = 'Aşgabatda we ýurdumyzyň beýleki şäherlerinde Ýewropada Howpsuzlyk we hyzmatdaşlyk baradaky guramanyň goldaw bermeginde ýörite Orhus merkezleri döredildi. Günbatar welaýatda Internete çykylýan meýdançasy bolan şeýle maglumat merkezi Türkmenbaşy şäherinde açyldy. Merkeziň işinde döwletiň tebigaty goramak syýasatyny giňden wagyz etmäge uly üns berilýär. ';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '5';
        $obj->img = ('img/about/ourcountry/main-3.jpg');
        $obj->name = 'Suw, ýer we biologik serişdelerini netijeli peýdalanmak';
        $obj->title = 'Biologik köpdürliligi we tebigy landşaftlary goramak, çölleşmä we tokaýlaryň ýitmegine garşy göreşmek babatda uly işler geçirilýär. Türkmenistanda eýeçiliginiň görnüşine garamazdan...';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '5';
        $obj->img = ('img/about/ourcountry/main-2.jpg');
        $obj->name = 'Suw, ýer we biologik serişdelerini netijeli peýdalanmak';
        $obj->title = 'Biologik köpdürliligi we tebigy landşaftlary goramak, çölleşmä we tokaýlaryň ýitmegine garşy göreşmek babatda uly işler geçirilýär. Türkmenistanda eýeçiliginiň görnüşine garamazdan...';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '5';
        $obj->img = ('img/about/ourcountry/bagul.jpg');
        $obj->name = 'Tebigaty goramak babatda esasy ýörelgeler';
        $obj->title = 'Döwlet Baştutanymyzyň nygtaýşy ýaly, Merkezi Aziýa ýurtlarynda suw serişdeleri bilen bagly meseleler sebit işleriniň möhüm şerti bolup durýar. Merkezi Aziýa döwletleriniň, olaryň ykdysadyýetleriniň, durmuş ulgamlarynyň ösüşi, adamlaryň abadançylygynyň derejesi we ýaşaýyş-durmuşynyň hili suwdan rejeli we netijeli peýdalanmaga gönüden-göni baglydyr.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '5';
        $obj->img = ('img/about/ourcountry/1.jpg');
        $obj->name = 'Tebigaty goramak we jemgyýet';
        $obj->title = 'Tebigaty goramak baradaky jemgyýetiň adamlary meýletin esasda birleşdirýän gurama bolup durýandygyny bellemek gerek. Jemgyýetiň agzalary agzalyk tölegini – bir ýylda 10 manat töleýärler. Biz bu serişdeleri dürli tebigaty goraýyş, ekologik çärelerini geçirmek üçin ulanýarys. Mysal üçin, kärhanalaryň, okuw mekdepleriniň, çagalar baglarynyň çäklerinde, köçeleriň ugrunda, seýilgählerde, seýil baglarynda köpçülikleýin bag oturtmak boýunça ýowarlary geçirmek indi ýurdumyzda asylly däbe öwrüldi.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '6';
        $obj->img = ('img/about/ourcountry/2.jpg');
        $obj->name = 'Lebap welaýatynda geçen bag ekmek çäresi';
        $obj->title = 'Nowruz baýramynyň ilkinji gününe gabat gelen bag ekmek dabaralaryna 281 müňden gowrak adam gatnaşdy. Çäräniň dowamynda 265 müň agaç oturdyldy. Aşgabat şäheri boýunça çärä gatnaşanlaryň sany 34 müň töweregi, oturdylan agaçlaryň sany bolsa 93 müňden gowrak boldy. Welaýatlarda bi işlere 247,5 müň adam gatnaşyp, 172 müň agaç oturdyldy.';
        $obj->save();

        $obj = new City;
        $obj->welayat_id = '6';
        $obj->img = ('img/about/ourcountry/bagul.jpg');
        $obj->name = 'Daşky gurşawy goramagyň bütindünýä güni mynasybetli ylmy-amaly maslahat';
        $obj->title = 'Türkmenistanyň goşulan BMG-niň halkara ekologiýa konwensiýalarynyň hatarynda Orhus konwensiýasyna möhüm orun degişlidir. Bu Konwensiýa her bir adamyň sagdyn daşky gurşawa bolan hukugyny ykrar edýär, şeýle hem ony goramak boýunça borçlaryny kesgitleýär.';
        $obj->save();
        
        $obj = new City;
        $obj->welayat_id = '6';
        $obj->img = ('img/about/ourcountry/main.jpg');
        $obj->name = 'Tebigaty goramak bilen baglanşykly edilýän işler';
        $obj->title = ' Ekologiýa meseleleri, daşky gurşawy ýaramaz tehniki täsirlerden goramak bu gün tutuş dünýäde möhüm meseleleriň birine öwrüldi. Hormatly Prezidentimiz Gurbanguly Berdimuhamedow bu meselä uly üns berýär. Türkmenistan BMG-niň tebigaty goramak baradaky esasy konwensiýalaryny tassyklady. BMG-niň Ösüş maksatnamasy, BMG-niň Daşky gurşaw boýunça maksatnamasy, Dünýäniň Ekologiýa Gaznasy hem-de beýleki abraýly halkara düzümleri bilen bilelikde milli we sebit derejelerinde ekologiýa maksatnamalarynyň we taslamalarynyň onlarçasy amala aşyrylýar.  ';
        $obj->save();
    }
}
