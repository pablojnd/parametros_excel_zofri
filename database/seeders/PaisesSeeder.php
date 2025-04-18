<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriPaises;

class PaisesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '101',
                'nombre' => 'SENEGAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '102',
                'nombre' => 'GAMBIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '103',
                'nombre' => 'GUINEA-BISSAU',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '104',
                'nombre' => 'GUINEA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '105',
                'nombre' => 'SIERRA LEONA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '106',
                'nombre' => 'LIBERIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '107',
                'nombre' => 'COSTA DE MARFIL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '108',
                'nombre' => 'GHANA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '109',
                'nombre' => 'TOGO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '111',
                'nombre' => 'NIGERIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '112',
                'nombre' => 'SUDAFRICA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '113',
                'nombre' => 'BOTSWANA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '114',
                'nombre' => 'LESOTHO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '115',
                'nombre' => 'MALAWI',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '116',
                'nombre' => 'ZIMBABWE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '117',
                'nombre' => 'ZAMBIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '118',
                'nombre' => 'COMORAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '119',
                'nombre' => 'MAURICIO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '120',
                'nombre' => 'MADAGASCAR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '121',
                'nombre' => 'MOZAMBIQUE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '122',
                'nombre' => 'SWAZILANDIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '123',
                'nombre' => 'SUDAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '124',
                'nombre' => 'EGIPTO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '125',
                'nombre' => 'LIBIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '126',
                'nombre' => 'TUNEZ',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '127',
                'nombre' => 'ARGELIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '128',
                'nombre' => 'MARRUECOS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '129',
                'nombre' => 'CABO VERDE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '130',
                'nombre' => 'CHAD',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '131',
                'nombre' => 'NIGER',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '132',
                'nombre' => 'ALTO VOLTA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '133',
                'nombre' => 'MALI',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '134',
                'nombre' => 'MAURITANIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '135',
                'nombre' => 'TANZANIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '136',
                'nombre' => 'UGANDA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '137',
                'nombre' => 'KENIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '138',
                'nombre' => 'SOMALIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '139',
                'nombre' => 'ETIOPIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '140',
                'nombre' => 'ANGOLA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '141',
                'nombre' => 'BURUNDI',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '142',
                'nombre' => 'RWANDA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '143',
                'nombre' => 'REP.DEM. CONGO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '144',
                'nombre' => 'CONGO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '145',
                'nombre' => 'GABON',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '146',
                'nombre' => 'S.TOM.PRINCIPE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '147',
                'nombre' => 'GUINEA ECUATRL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '148',
                'nombre' => 'REP.CENT.AFRIC.',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '149',
                'nombre' => 'CAMERUN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '150',
                'nombre' => 'BENIN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '151',
                'nombre' => 'TERR.BRIT.EN AF',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '152',
                'nombre' => 'TER.ESPAN.EN AF',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '153',
                'nombre' => 'TERR.FRAN.EN AF',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '154',
                'nombre' => 'BOPHUTHATSWANA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '155',
                'nombre' => 'DJIBOUTI',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '156',
                'nombre' => 'SEYCHELLES',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '158',
                'nombre' => 'VIENDA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '159',
                'nombre' => 'NAMIBIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '161',
                'nombre' => 'BURKINA FASO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '162',
                'nombre' => 'CISKEY',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '163',
                'nombre' => 'ERITREA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '164',
                'nombre' => 'ISLAS MARSHALL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '165',
                'nombre' => 'SAHARAVI',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '166',
                'nombre' => 'TRANSKEI',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '201',
                'nombre' => 'VENEZUELA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '202',
                'nombre' => 'COLOMBIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '203',
                'nombre' => 'TRINID.Y TOBAGO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '204',
                'nombre' => 'BARBADOS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '205',
                'nombre' => 'JAMAICA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '206',
                'nombre' => 'REP.DOMINICANA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '207',
                'nombre' => 'BAHAMAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '208',
                'nombre' => 'HAITI',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '209',
                'nombre' => 'CUBA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '210',
                'nombre' => 'PANAMA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '211',
                'nombre' => 'COSTA RICA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '212',
                'nombre' => 'NICARAGUA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '213',
                'nombre' => 'EL SALVADOR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '214',
                'nombre' => 'HONDURAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '215',
                'nombre' => 'GUATEMALA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '216',
                'nombre' => 'MEXICO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '217',
                'nombre' => 'GUYANA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '218',
                'nombre' => 'ECUADOR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '219',
                'nombre' => 'PERU',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '220',
                'nombre' => 'BRASIL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '221',
                'nombre' => 'BOLIVIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '222',
                'nombre' => 'PARAGUAY',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '223',
                'nombre' => 'URUGUAY',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '224',
                'nombre' => 'ARGENTINA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '225',
                'nombre' => 'U.S.A.',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '226',
                'nombre' => 'CANADA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '227',
                'nombre' => 'TERR.BRIT.EN AM',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '228',
                'nombre' => 'TERR.FRAN.EN AM',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '229',
                'nombre' => 'TER.HOLAN.EN AM',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '230',
                'nombre' => 'TERR.D/DINAMARC',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '231',
                'nombre' => 'DOMINICA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '232',
                'nombre' => 'GRANADA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '233',
                'nombre' => 'SANTA LUCIA(ISL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '234',
                'nombre' => 'S.VTE.Y GRANAD.',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '235',
                'nombre' => 'SURINAM',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '236',
                'nombre' => 'BELICE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '240',
                'nombre' => 'ANTIGUA Y BBUDA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '241',
                'nombre' => 'SNT.KIT & NEVIS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '242',
                'nombre' => 'ANGUILA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '243',
                'nombre' => 'ARUBA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '244',
                'nombre' => 'BERMUDAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '245',
                'nombre' => 'ISLAS VIRGENES',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '246',
                'nombre' => 'ISLAS CAYMAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '247',
                'nombre' => 'ANTILLAS NEERLA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '248',
                'nombre' => 'TURCAS Y CAICOS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '249',
                'nombre' => 'ISLAS VIRGENES',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '250',
                'nombre' => 'MARTINICA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '251',
                'nombre' => 'PUERTO RICO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '252',
                'nombre' => 'MONSERRAT',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '253',
                'nombre' => 'GROENLADIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '301',
                'nombre' => 'JORDANIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '302',
                'nombre' => 'ARABIA SAUDITA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '303',
                'nombre' => 'KUWAIT',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '304',
                'nombre' => 'OMAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '305',
                'nombre' => 'CHIPRE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '306',
                'nombre' => 'ISRAEL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '307',
                'nombre' => 'IRAK',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '308',
                'nombre' => 'AFGHANISTAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '309',
                'nombre' => 'IRAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '310',
                'nombre' => 'SIRIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '311',
                'nombre' => 'LIBANO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '312',
                'nombre' => 'QATAR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '313',
                'nombre' => 'BAHREIN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '314',
                'nombre' => 'SRI LANKA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '315',
                'nombre' => 'CAMBODIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '316',
                'nombre' => 'LAOS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '317',
                'nombre' => 'INDIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '318',
                'nombre' => 'BUTAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '319',
                'nombre' => 'THAILANDIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '320',
                'nombre' => 'NEPAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '321',
                'nombre' => 'BANGLADESH',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '322',
                'nombre' => 'YEMEN DEL NORTE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '323',
                'nombre' => 'YEMEN DEL SUR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '324',
                'nombre' => 'PAKISTAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '325',
                'nombre' => 'VIETNAM',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '326',
                'nombre' => 'MYANMAR (EX BIR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '327',
                'nombre' => 'ISLAS MALDIVAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '328',
                'nombre' => 'INDONESIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '329',
                'nombre' => 'MALASIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '330',
                'nombre' => 'TAIWAN (FORMOSA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '331',
                'nombre' => 'JAPON',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '332',
                'nombre' => 'SINGAPUR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '333',
                'nombre' => 'COREA DEL SUR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '334',
                'nombre' => 'COREA DEL NORTE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '335',
                'nombre' => 'FILIPINAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '336',
                'nombre' => 'CHINA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '337',
                'nombre' => 'MONGOLIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '338',
                'nombre' => 'HONG-KONG REGION ADM. ESPECIAL DE CHINA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '341',
                'nombre' => 'EMIR.ARAB.UNID.',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '342',
                'nombre' => 'HONG KONG',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '343',
                'nombre' => 'TER.PORTUG.E/AS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '344',
                'nombre' => 'BRUNEI',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '345',
                'nombre' => 'MACAO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '346',
                'nombre' => 'REPUBLICA DE YE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '401',
                'nombre' => 'FIJI',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '402',
                'nombre' => 'NAURU',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '403',
                'nombre' => 'ISLAS TONGA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '404',
                'nombre' => 'SAMOA OCC.',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '405',
                'nombre' => 'NUEVA ZELANDIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '406',
                'nombre' => 'AUSTRALIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '407',
                'nombre' => 'TERR.BRIT.EN AU',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '408',
                'nombre' => 'TERR.FRAN.EN AU',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '409',
                'nombre' => 'T.NORTEAM.EN AU',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '412',
                'nombre' => 'PPUA.NVA.GUINEA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '415',
                'nombre' => 'VANUATU',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '416',
                'nombre' => 'KIRIBATI',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '417',
                'nombre' => 'MICRONESIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '418',
                'nombre' => 'ISLAS SALOMON',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '419',
                'nombre' => 'TUVALU',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '420',
                'nombre' => 'BELAU',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '421',
                'nombre' => 'NIUE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '422',
                'nombre' => 'POLINESIA FRAN.',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '423',
                'nombre' => 'NUEVA CALEDONIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '424',
                'nombre' => 'ISLAS MARINAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '425',
                'nombre' => 'GUAM',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '426',
                'nombre' => 'TIMOR ORIENTAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '427',
                'nombre' => 'ISLAS COOK',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '501',
                'nombre' => 'PORTUGAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '502',
                'nombre' => 'ALEMANIA R.F.',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '503',
                'nombre' => 'ALEMANIA R.D.(N',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '504',
                'nombre' => 'ITALIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '505',
                'nombre' => 'FRANCIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '506',
                'nombre' => 'IRLANDA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '507',
                'nombre' => 'DINAMARCA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '508',
                'nombre' => 'SUIZA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '509',
                'nombre' => 'AUSTRIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '510',
                'nombre' => 'REINO UNIDO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '511',
                'nombre' => 'SUECIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '512',
                'nombre' => 'FINLANDIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '513',
                'nombre' => 'NORUEGA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '514',
                'nombre' => 'BELGICA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '515',
                'nombre' => 'HOLANDA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '516',
                'nombre' => 'ISLANDIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '517',
                'nombre' => 'ESPANA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '518',
                'nombre' => 'ALBANIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '519',
                'nombre' => 'RUMANIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '520',
                'nombre' => 'GRECIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '521',
                'nombre' => 'U.R.S.S.   (NO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '522',
                'nombre' => 'TURQUIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '523',
                'nombre' => 'MALTA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '524',
                'nombre' => 'SANTA SEDE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '525',
                'nombre' => 'ANDORRA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '526',
                'nombre' => 'YUGOESLAVIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '527',
                'nombre' => 'BULGARIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '528',
                'nombre' => 'POLONIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '529',
                'nombre' => 'CHECOESLOVAQUIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '530',
                'nombre' => 'HUNGRIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '532',
                'nombre' => 'LUXEMBURGO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '534',
                'nombre' => 'LIECHTENSTEIN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '535',
                'nombre' => 'MONACO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '536',
                'nombre' => 'SAN MARINO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '540',
                'nombre' => 'ARMENIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '541',
                'nombre' => 'AZERBAIJAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '542',
                'nombre' => 'BELARUS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '543',
                'nombre' => 'BOSNIA HEZGVINA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '544',
                'nombre' => 'REPUBLICA CHECA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '545',
                'nombre' => 'REP.ESLOVACA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '547',
                'nombre' => 'CROACIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '548',
                'nombre' => 'ESLOVENIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '549',
                'nombre' => 'ESTONIA (B)',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '550',
                'nombre' => 'GEORGIA (B)',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '551',
                'nombre' => 'KASAJSTAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '552',
                'nombre' => 'KIRGISTAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '553',
                'nombre' => 'LETONIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '554',
                'nombre' => 'LITUANIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '555',
                'nombre' => 'MACEDONIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '556',
                'nombre' => 'MOLDOVA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '557',
                'nombre' => 'TADJIKISTAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '558',
                'nombre' => 'TURKMENISTAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '559',
                'nombre' => 'UCRANIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '560',
                'nombre' => 'UZBEKISTAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '562',
                'nombre' => 'RUSIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '563',
                'nombre' => 'ALEMANIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '564',
                'nombre' => 'RF YUGOSLAVIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '565',
                'nombre' => 'GIBRALTAR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '566',
                'nombre' => 'GUERNSEY',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '567',
                'nombre' => 'ISLAS DE MAN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '568',
                'nombre' => 'JERSEY',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '888',
                'nombre' => 'LOS DEMAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '900',
                'nombre' => 'RANCHO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '901',
                'nombre' => 'COMB.Y LUBRIC.',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '902',
                'nombre' => 'RANCHO DE NAVES',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '903',
                'nombre' => 'PESCA EXTRA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '904',
                'nombre' => 'ORIG.O DEST. NO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '905',
                'nombre' => 'ZF.IQUIQUE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '906',
                'nombre' => 'DEPOSITO FRANCO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '907',
                'nombre' => 'ZF.PARENAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '910',
                'nombre' => 'ZF.ARICA-ZF IND',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '913',
                'nombre' => 'ZONA PRIMARIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '997',
                'nombre' => 'CHILE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '998',
                'nombre' => 'NAC.REPUTADA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '999',
                'nombre' => 'OTROS(PAIS DESC',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriPaises::create($item);
        }
    }
}
