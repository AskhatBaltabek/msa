<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class AlphaCodesForCountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $alpha_codes = [
            ['Австралия', 'AUS', 36],
            ['Австрия', 'AUT', 40],
            ['Азербайджан', 'AZE', 31],
            ['Аландскиеострова', 'ALA', 248],
            ['Албания', 'ALB', 8],
            ['Алжир', 'DZA', 12],
            ['ВиргинскиеОстрова(США)', 'VIR', 850],
            ['АмериканскоеСамоа', 'ASM', 16],
            ['Ангилья', 'AIA', 660],
            ['Ангола', 'AGO', 24],
            ['Андорра', 'AND', 20],
            ['Антарктика', 'ATA', 10],
            ['АнтигуаиБарбуда', 'ATG', 28],
            ['Аргентина', 'ARG', 32],
            ['Армения', 'ARM', 51],
            ['Аруба', 'ABW', 533],
            ['Афганистан', 'AFG', 4],
            ['БагамскиеОстрова', 'BHS', 44],
            ['Бангладеш', 'BGD', 50],
            ['Барбадос', 'BRB', 52],
            ['Бахрейн', 'BHR', 48],
            ['Белиз', 'BLZ', 84],
            ['Белоруссия', 'BLR', 112],
            ['Бельгия', 'BEL', 56],
            ['Бенин', 'BEN', 204],
            ['Бермуды', 'BMU', 60],
            ['Болгария', 'BGR', 100],
            ['Боливия', 'BOL', 68],
            ['Бонэйр,Синт-ЭстатиусиСаба', 'BES', 535],
            ['БоснияиГерцеговина', 'BIH', 70],
            ['Ботсвана', 'BWA', 72],
            ['Бразилия', 'BRA', 76],
            ['БританскаятерриториявИндийскомокеане', 'IOT', 86],
            ['ВиргинскиеОстрова(Великобритания)', 'VGB', 92],
            ['Бруней', 'BRN', 96],
            ['Буркина-Фасо', 'BFA', 854],
            ['Бурунди', 'BDI', 108],
            ['Бутан', 'BTN', 64],
            ['Вануату', 'VUT', 548],
            ['Ватикан', 'VAT', 336],
            ['Великобритания', 'GBR', 826],
            ['Венгрия', 'HUN', 348],
            ['Венесуэла', 'VEN', 862],
            ['ВнешниемалыеостроваСША', 'UMI', 581],
            ['ВосточныйТимор', 'TLS', 626],
            ['Вьетнам', 'VNM', 704],
            ['Габон', 'GAB', 266],
            ['Гаити', 'HTI', 332],
            ['Гайана', 'GUY', 328],
            ['Гамбия', 'GMB', 270],
            ['Гана', 'GHA', 288],
            ['Гваделупа', 'GLP', 312],
            ['Гватемала', 'GTM', 320],
            ['Гвиана', 'GUF', 254],
            ['Гвинея', 'GIN', 324],
            ['Гвинея-Бисау', 'GNB', 624],
            ['Германия', 'DEU', 276],
            ['Гернси', 'GGY', 831],
            ['Гибралтар', 'GIB', 292],
            ['Гондурас', 'HND', 340],
            ['Гонконг', 'HKG', 344],
            ['Гренада', 'GRD', 308],
            ['Гренландия', 'GRL', 304],
            ['Греция', 'GRC', 300],
            ['Грузия', 'GEO', 268],
            ['Гуам', 'GUM', 316],
            ['Дания', 'DNK', 208],
            ['Джерси', 'JEY', 832],
            ['Джибути', 'DJI', 262],
            ['Доминика', 'DMA', 212],
            ['ДоминиканскаяРеспублика', 'DOM', 214],
            ['ДРКонго', 'COD', 180],
            ['Египет', 'EGY', 818],
            ['Замбия', 'ZMB', 894],
            ['САДР', 'ESH', 732],
            ['Зимбабве', 'ZWE', 716],
            ['Израиль', 'ISR', 376],
            ['Индия', 'IND', 356],
            ['Индонезия', 'IDN', 360],
            ['Иордания', 'JOR', 400],
            ['Ирак', 'IRQ', 368],
            ['Иран', 'IRN', 364],
            ['Ирландия', 'IRL', 372],
            ['Исландия', 'ISL', 352],
            ['Испания', 'ESP', 724],
            ['Италия', 'ITA', 380],
            ['Йемен', 'YEM', 887],
            ['Кабо-Верде', 'CPV', 132],
            ['Казахстан', 'KAZ', 398],
            ['ОстроваКайман', 'CYM', 136],
            ['Камбоджа', 'KHM', 116],
            ['Камерун', 'CMR', 120],
            ['Канада', 'CAN', 124],
            ['Катар', 'QAT', 634],
            ['Кения', 'KEN', 404],
            ['Кипр', 'CYP', 196],
            ['Киргизия', 'KGZ', 417],
            ['Кирибати', 'KIR', 296],
            ['КитайскаяРеспублика(Тайвань)', 'TWN', 158],
            ['КНДР (КорейскаяНародно-ДемократическаяРеспублика)', 'PRK', 408],
            ['Китай (КитайскаяНароднаяРеспублика)', 'CHN', 156],
            ['Кокосовыеострова', 'CCK', 166],
            ['Колумбия', 'COL', 170],
            ['Коморы', 'COM', 174],
            ['Коста-Рика', 'CRI', 188],
            ['Кот-д’Ивуар', 'CIV', 384],
            ['Куба', 'CUB', 192],
            ['Кувейт', 'KWT', 414],
            ['Кюрасао', 'CUW', 531],
            ['Лаос', 'LAO', 418],
            ['Латвия', 'LVA', 428],
            ['Лесото', 'LSO', 426],
            ['Либерия', 'LBR', 430],
            ['Ливан', 'LBN', 422],
            ['Ливия', 'LBY', 434],
            ['Литва', 'LTU', 440],
            ['Лихтенштейн', 'LIE', 438],
            ['Люксембург', 'LUX', 442],
            ['Маврикий', 'MUS', 480],
            ['Мавритания', 'MRT', 478],
            ['Мадагаскар', 'MDG', 450],
            ['Майотта', 'MYT', 175],
            ['Макао', 'MAC', 446],
            ['СевернаяМакедония', 'MKD', 807],
            ['Малави', 'MWI', 454],
            ['Малайзия', 'MYS', 458],
            ['Мали', 'MLI', 466],
            ['Мальдивы', 'MDV', 462],
            ['Мальта', 'MLT', 470],
            ['Марокко', 'MAR', 504],
            ['Мартиника', 'MTQ', 474],
            ['МаршалловыОстрова', 'MHL', 584],
            ['Мексика', 'MEX', 484],
            ['Микронезия', 'FSM', 583],
            ['Мозамбик', 'MOZ', 508],
            ['Молдавия', 'MDA', 498],
            ['Монако', 'MCO', 492],
            ['Монголия', 'MNG', 496],
            ['Монтсеррат', 'MSR', 500],
            ['Мьянма', 'MMR', 104],
            ['Намибия', 'NAM', 516],
            ['Науру', 'NRU', 520],
            ['Непал', 'NPL', 524],
            ['Нигер', 'NER', 562],
            ['Нигерия', 'NGA', 566],
            ['Нидерланды', 'NLD', 528],
            ['Никарагуа', 'NIC', 558],
            ['Ниуэ', 'NIU', 570],
            ['НоваяЗеландия', 'NZL', 554],
            ['НоваяКаледония', 'NCL', 540],
            ['Норвегия', 'NOR', 578],
            ['ОАЭ', 'ARE', 784],
            ['Оман', 'OMN', 512],
            ['ОстровБуве', 'BVT', 74],
            ['ОстровМэн', 'IMN', 833],
            ['ОстроваКука', 'COK', 184],
            ['ОстровНорфолк', 'NFK', 574],
            ['ОстровРождества', 'CXR', 162],
            ['ОстроваПиткэрн', 'PCN', 612],
            ['ОстроваСвятойЕлены,ВознесенияиТристан-да-Кунья', 'SHN', 654],
            ['Пакистан', 'PAK', 586],
            ['Палау', 'PLW', 585],
            ['ГосударствоПалестина', 'PSE', 275],
            ['Панама', 'PAN', 591],
            ['Папуа—НоваяГвинея', 'PNG', 598],
            ['Парагвай', 'PRY', 600],
            ['Перу', 'PER', 604],
            ['Польша', 'POL', 616],
            ['Португалия', 'PRT', 620],
            ['Пуэрто-Рико', 'PRI', 630],
            ['РеспубликаКонго', 'COG', 178],
            ['РеспубликаКорея', 'KOR', 410],
            ['Реюньон', 'REU', 638],
            ['Россия', 'RUS', 643],
            ['Руанда', 'RWA', 646],
            ['Румыния', 'ROU', 642],
            ['Сальвадор', 'SLV', 222],
            ['Самоа', 'WSM', 882],
            ['Сан-Марино', 'SMR', 674],
            ['Сан-ТомеиПринсипи', 'STP', 678],
            ['СаудовскаяАравия', 'SAU', 682],
            ['Эсватини', 'SWZ', 748],
            ['СеверныеМарианскиеОстрова', 'MNP', 580],
            ['СейшельскиеОстрова', 'SYC', 690],
            ['Сен-Бартелеми(Карибы)', 'BLM', 652],
            ['Сен-Мартен', 'MAF', 663],
            ['Сен-ПьериМикелон', 'SPM', 666],
            ['Сенегал', 'SEN', 686],
            ['Сент-ВинсентиГренадины', 'VCT', 670],
            ['Сент-КитсиНевис', 'KNA', 659],
            ['Сент-Люсия', 'LCA', 662],
            ['Сербия', 'SRB', 688],
            ['Сингапур', 'SGP', 702],
            ['Синт-Мартен', 'SXM', 534],
            ['Сирия', 'SYR', 760],
            ['Словакия', 'SVK', 703],
            ['Словения', 'SVN', 705],
            ['СоломоновыОстрова', 'SLB', 90],
            ['Сомали', 'SOM', 706],
            ['Судан', 'SDN', 729],
            ['Суринам', 'SUR', 740],
            ['США', 'USA', 840],
            ['Сьерра-Леоне', 'SLE', 694],
            ['Таджикистан', 'TJK', 762],
            ['Таиланд', 'THA', 764],
            ['Танзания', 'TZA', 834],
            ['ТерксиКайкос', 'TCA', 796],
            ['Того', 'TGO', 768],
            ['Токелау', 'TKL', 772],
            ['Тонга', 'TON', 776],
            ['ТринидадиТобаго', 'TTO', 780],
            ['Тувалу', 'TUV', 798],
            ['Тунис', 'TUN', 788],
            ['Туркмения', 'TKM', 795],
            ['Турция', 'TUR', 792],
            ['Уганда', 'UGA', 800],
            ['Узбекистан', 'UZB', 860],
            ['Украина', 'UKR', 804],
            ['УоллисиФутуна', 'WLF', 876],
            ['Уругвай', 'URY', 858],
            ['Фарерскиеострова', 'FRO', 234],
            ['Фиджи', 'FJI', 242],
            ['Филиппины', 'PHL', 608],
            ['Финляндия', 'FIN', 246],
            ['Фолклендскиеострова', 'FLK', 238],
            ['Франция', 'FRA', 250],
            ['ФранцузскаяПолинезия', 'PYF', 258],
            ['ФранцузскиеЮжныеиАнтарктическиетерритории', 'ATF', 260],
            ['ХердиМакдональд', 'HMD', 334],
            ['Хорватия', 'HRV', 191],
            ['ЦАР', 'CAF', 140],
            ['Чад', 'TCD', 148],
            ['Черногория', 'MNE', 499],
            ['Чехия', 'CZE', 203],
            ['Чили', 'CHL', 152],
            ['Швейцария', 'CHE', 756],
            ['Швеция', 'SWE', 752],
            ['ШпицбергениЯн-Майен', 'SJM', 744],
            ['Шри-Ланка', 'LKA', 144],
            ['Эквадор', 'ECU', 218],
            ['ЭкваториальнаяГвинея', 'GNQ', 226],
            ['Эритрея', 'ERI', 232],
            ['Эстония', 'EST', 233],
            ['Эфиопия', 'ETH', 231],
            ['ЮАР', 'ZAF', 710],
            ['ЮжнаяГеоргияиЮжныеСандвичевыОстрова', 'SGS', 239],
            ['ЮжныйСудан', 'SSD', 728],
            ['Ямайка', 'JAM', 388],
            ['Япония', 'JPN', 392],
        ];

        foreach ($alpha_codes as $value) {
            $country = Country::firstWhere('code', $value[2]);
            if ($country) {
                $country->alpha_code = $value[1];
                $country->update();
            }
        }
    }
}