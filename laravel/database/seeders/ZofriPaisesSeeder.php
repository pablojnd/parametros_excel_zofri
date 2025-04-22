<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriPaises;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriPaisesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '101', // Código
                'name' => 'SENEGAL', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '102', // Código
                'name' => 'GAMBIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '103', // Código
                'name' => 'GUINEA-BISSAU', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '104', // Código
                'name' => 'GUINEA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '105', // Código
                'name' => 'SIERRA LEONA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '106', // Código
                'name' => 'LIBERIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '107', // Código
                'name' => 'COSTA DE MARFIL', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '108', // Código
                'name' => 'GHANA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '109', // Código
                'name' => 'TOGO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '111', // Código
                'name' => 'NIGERIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '112', // Código
                'name' => 'SUDAFRICA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '113', // Código
                'name' => 'BOTSWANA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '114', // Código
                'name' => 'LESOTHO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '115', // Código
                'name' => 'MALAWI', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '116', // Código
                'name' => 'ZIMBABWE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '117', // Código
                'name' => 'ZAMBIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '118', // Código
                'name' => 'COMORAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '119', // Código
                'name' => 'MAURICIO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '120', // Código
                'name' => 'MADAGASCAR', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '121', // Código
                'name' => 'MOZAMBIQUE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '122', // Código
                'name' => 'SWAZILANDIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '123', // Código
                'name' => 'SUDAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '124', // Código
                'name' => 'EGIPTO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '125', // Código
                'name' => 'LIBIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '126', // Código
                'name' => 'TUNEZ', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '127', // Código
                'name' => 'ARGELIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '128', // Código
                'name' => 'MARRUECOS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '129', // Código
                'name' => 'CABO VERDE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '130', // Código
                'name' => 'CHAD', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '131', // Código
                'name' => 'NIGER', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '132', // Código
                'name' => 'ALTO VOLTA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '133', // Código
                'name' => 'MALI', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '134', // Código
                'name' => 'MAURITANIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '135', // Código
                'name' => 'TANZANIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '136', // Código
                'name' => 'UGANDA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '137', // Código
                'name' => 'KENIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '138', // Código
                'name' => 'SOMALIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '139', // Código
                'name' => 'ETIOPIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '140', // Código
                'name' => 'ANGOLA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '141', // Código
                'name' => 'BURUNDI', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '142', // Código
                'name' => 'RWANDA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '143', // Código
                'name' => 'REP.DEM. CONGO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '144', // Código
                'name' => 'CONGO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '145', // Código
                'name' => 'GABON', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '146', // Código
                'name' => 'S.TOM.PRINCIPE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '147', // Código
                'name' => 'GUINEA ECUATRL', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '148', // Código
                'name' => 'REP.CENT.AFRIC.', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '149', // Código
                'name' => 'CAMERUN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '150', // Código
                'name' => 'BENIN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '151', // Código
                'name' => 'TERR.BRIT.EN AF', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '152', // Código
                'name' => 'TER.ESPAN.EN AF', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '153', // Código
                'name' => 'TERR.FRAN.EN AF', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '154', // Código
                'name' => 'BOPHUTHATSWANA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '155', // Código
                'name' => 'DJIBOUTI', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '156', // Código
                'name' => 'SEYCHELLES', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '158', // Código
                'name' => 'VIENDA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '159', // Código
                'name' => 'NAMIBIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '161', // Código
                'name' => 'BURKINA FASO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '162', // Código
                'name' => 'CISKEY', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '163', // Código
                'name' => 'ERITREA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '164', // Código
                'name' => 'ISLAS MARSHALL', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '165', // Código
                'name' => 'SAHARAVI', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '166', // Código
                'name' => 'TRANSKEI', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '201', // Código
                'name' => 'VENEZUELA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '202', // Código
                'name' => 'COLOMBIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '203', // Código
                'name' => 'TRINID.Y TOBAGO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '204', // Código
                'name' => 'BARBADOS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '205', // Código
                'name' => 'JAMAICA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '206', // Código
                'name' => 'REP.DOMINICANA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '207', // Código
                'name' => 'BAHAMAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '208', // Código
                'name' => 'HAITI', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '209', // Código
                'name' => 'CUBA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '210', // Código
                'name' => 'PANAMA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '211', // Código
                'name' => 'COSTA RICA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '212', // Código
                'name' => 'NICARAGUA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '213', // Código
                'name' => 'EL SALVADOR', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '214', // Código
                'name' => 'HONDURAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '215', // Código
                'name' => 'GUATEMALA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '216', // Código
                'name' => 'MEXICO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '217', // Código
                'name' => 'GUYANA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '218', // Código
                'name' => 'ECUADOR', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '219', // Código
                'name' => 'PERU', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '220', // Código
                'name' => 'BRASIL', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '221', // Código
                'name' => 'BOLIVIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '222', // Código
                'name' => 'PARAGUAY', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '223', // Código
                'name' => 'URUGUAY', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '224', // Código
                'name' => 'ARGENTINA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '225', // Código
                'name' => 'U.S.A.', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '226', // Código
                'name' => 'CANADA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '227', // Código
                'name' => 'TERR.BRIT.EN AM', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '228', // Código
                'name' => 'TERR.FRAN.EN AM', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '229', // Código
                'name' => 'TER.HOLAN.EN AM', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '230', // Código
                'name' => 'TERR.D/DINAMARC', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '231', // Código
                'name' => 'DOMINICA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '232', // Código
                'name' => 'GRANADA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '233', // Código
                'name' => 'SANTA LUCIA(ISL', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '234', // Código
                'name' => 'S.VTE.Y GRANAD.', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '235', // Código
                'name' => 'SURINAM', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '236', // Código
                'name' => 'BELICE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '240', // Código
                'name' => 'ANTIGUA Y BBUDA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '241', // Código
                'name' => 'SNT.KIT & NEVIS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '242', // Código
                'name' => 'ANGUILA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '243', // Código
                'name' => 'ARUBA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '244', // Código
                'name' => 'BERMUDAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '245', // Código
                'name' => 'ISLAS VIRGENES', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '246', // Código
                'name' => 'ISLAS CAYMAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '247', // Código
                'name' => 'ANTILLAS NEERLA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '248', // Código
                'name' => 'TURCAS Y CAICOS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '249', // Código
                'name' => 'ISLAS VIRGENES', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '250', // Código
                'name' => 'MARTINICA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '251', // Código
                'name' => 'PUERTO RICO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '252', // Código
                'name' => 'MONSERRAT', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '253', // Código
                'name' => 'GROENLADIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '301', // Código
                'name' => 'JORDANIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '302', // Código
                'name' => 'ARABIA SAUDITA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '303', // Código
                'name' => 'KUWAIT', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '304', // Código
                'name' => 'OMAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '305', // Código
                'name' => 'CHIPRE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '306', // Código
                'name' => 'ISRAEL', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '307', // Código
                'name' => 'IRAK', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '308', // Código
                'name' => 'AFGHANISTAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '309', // Código
                'name' => 'IRAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '310', // Código
                'name' => 'SIRIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '311', // Código
                'name' => 'LIBANO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '312', // Código
                'name' => 'QATAR', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '313', // Código
                'name' => 'BAHREIN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '314', // Código
                'name' => 'SRI LANKA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '315', // Código
                'name' => 'CAMBODIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '316', // Código
                'name' => 'LAOS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '317', // Código
                'name' => 'INDIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '318', // Código
                'name' => 'BUTAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '319', // Código
                'name' => 'THAILANDIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '320', // Código
                'name' => 'NEPAL', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '321', // Código
                'name' => 'BANGLADESH', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '322', // Código
                'name' => 'YEMEN DEL NORTE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '323', // Código
                'name' => 'YEMEN DEL SUR', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '324', // Código
                'name' => 'PAKISTAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '325', // Código
                'name' => 'VIETNAM', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '326', // Código
                'name' => 'MYANMAR (EX BIR', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '327', // Código
                'name' => 'ISLAS MALDIVAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '328', // Código
                'name' => 'INDONESIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '329', // Código
                'name' => 'MALASIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '330', // Código
                'name' => 'TAIWAN (FORMOSA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '331', // Código
                'name' => 'JAPON', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '332', // Código
                'name' => 'SINGAPUR', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '333', // Código
                'name' => 'COREA DEL SUR', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '334', // Código
                'name' => 'COREA DEL NORTE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '335', // Código
                'name' => 'FILIPINAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '336', // Código
                'name' => 'CHINA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '337', // Código
                'name' => 'MONGOLIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '338', // Código
                'name' => 'HONG-KONG REGION ADM. ESPECIAL DE CHINA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '341', // Código
                'name' => 'EMIR.ARAB.UNID.', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '342', // Código
                'name' => 'HONG KONG', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '343', // Código
                'name' => 'TER.PORTUG.E/AS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '344', // Código
                'name' => 'BRUNEI', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '345', // Código
                'name' => 'MACAO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '346', // Código
                'name' => 'REPUBLICA DE YE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '401', // Código
                'name' => 'FIJI', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '402', // Código
                'name' => 'NAURU', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '403', // Código
                'name' => 'ISLAS TONGA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '404', // Código
                'name' => 'SAMOA OCC.', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '405', // Código
                'name' => 'NUEVA ZELANDIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '406', // Código
                'name' => 'AUSTRALIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '407', // Código
                'name' => 'TERR.BRIT.EN AU', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '408', // Código
                'name' => 'TERR.FRAN.EN AU', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '409', // Código
                'name' => 'T.NORTEAM.EN AU', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '412', // Código
                'name' => 'PPUA.NVA.GUINEA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '415', // Código
                'name' => 'VANUATU', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '416', // Código
                'name' => 'KIRIBATI', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '417', // Código
                'name' => 'MICRONESIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '418', // Código
                'name' => 'ISLAS SALOMON', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '419', // Código
                'name' => 'TUVALU', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '420', // Código
                'name' => 'BELAU', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '421', // Código
                'name' => 'NIUE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '422', // Código
                'name' => 'POLINESIA FRAN.', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '423', // Código
                'name' => 'NUEVA CALEDONIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '424', // Código
                'name' => 'ISLAS MARINAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '425', // Código
                'name' => 'GUAM', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '426', // Código
                'name' => 'TIMOR ORIENTAL', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '427', // Código
                'name' => 'ISLAS COOK', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '501', // Código
                'name' => 'PORTUGAL', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '502', // Código
                'name' => 'ALEMANIA R.F.', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '503', // Código
                'name' => 'ALEMANIA R.D.(N', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '504', // Código
                'name' => 'ITALIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '505', // Código
                'name' => 'FRANCIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '506', // Código
                'name' => 'IRLANDA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '507', // Código
                'name' => 'DINAMARCA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '508', // Código
                'name' => 'SUIZA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '509', // Código
                'name' => 'AUSTRIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '510', // Código
                'name' => 'REINO UNIDO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '511', // Código
                'name' => 'SUECIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '512', // Código
                'name' => 'FINLANDIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '513', // Código
                'name' => 'NORUEGA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '514', // Código
                'name' => 'BELGICA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '515', // Código
                'name' => 'HOLANDA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '516', // Código
                'name' => 'ISLANDIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '517', // Código
                'name' => 'ESPANA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '518', // Código
                'name' => 'ALBANIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '519', // Código
                'name' => 'RUMANIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '520', // Código
                'name' => 'GRECIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '521', // Código
                'name' => 'U.R.S.S.   (NO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '522', // Código
                'name' => 'TURQUIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '523', // Código
                'name' => 'MALTA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '524', // Código
                'name' => 'SANTA SEDE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '525', // Código
                'name' => 'ANDORRA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '526', // Código
                'name' => 'YUGOESLAVIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '527', // Código
                'name' => 'BULGARIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '528', // Código
                'name' => 'POLONIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '529', // Código
                'name' => 'CHECOESLOVAQUIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '530', // Código
                'name' => 'HUNGRIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '532', // Código
                'name' => 'LUXEMBURGO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '534', // Código
                'name' => 'LIECHTENSTEIN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '535', // Código
                'name' => 'MONACO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '536', // Código
                'name' => 'SAN MARINO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '540', // Código
                'name' => 'ARMENIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '541', // Código
                'name' => 'AZERBAIJAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '542', // Código
                'name' => 'BELARUS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '543', // Código
                'name' => 'BOSNIA HEZGVINA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '544', // Código
                'name' => 'REPUBLICA CHECA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '545', // Código
                'name' => 'REP.ESLOVACA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '547', // Código
                'name' => 'CROACIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '548', // Código
                'name' => 'ESLOVENIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '549', // Código
                'name' => 'ESTONIA (B)', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '550', // Código
                'name' => 'GEORGIA (B)', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '551', // Código
                'name' => 'KASAJSTAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '552', // Código
                'name' => 'KIRGISTAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '553', // Código
                'name' => 'LETONIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '554', // Código
                'name' => 'LITUANIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '555', // Código
                'name' => 'MACEDONIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '556', // Código
                'name' => 'MOLDOVA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '557', // Código
                'name' => 'TADJIKISTAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '558', // Código
                'name' => 'TURKMENISTAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '559', // Código
                'name' => 'UCRANIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '560', // Código
                'name' => 'UZBEKISTAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '562', // Código
                'name' => 'RUSIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '563', // Código
                'name' => 'ALEMANIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '564', // Código
                'name' => 'RF YUGOSLAVIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '565', // Código
                'name' => 'GIBRALTAR', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '566', // Código
                'name' => 'GUERNSEY', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '567', // Código
                'name' => 'ISLAS DE MAN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '568', // Código
                'name' => 'JERSEY', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '888', // Código
                'name' => 'LOS DEMAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '900', // Código
                'name' => 'RANCHO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '901', // Código
                'name' => 'COMB.Y LUBRIC.', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '902', // Código
                'name' => 'RANCHO DE NAVES', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '903', // Código
                'name' => 'PESCA EXTRA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '904', // Código
                'name' => 'ORIG.O DEST. NO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '905', // Código
                'name' => 'ZF.IQUIQUE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '906', // Código
                'name' => 'DEPOSITO FRANCO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '907', // Código
                'name' => 'ZF.PARENAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '910', // Código
                'name' => 'ZF.ARICA-ZF IND', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '913', // Código
                'name' => 'ZONA PRIMARIA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '997', // Código
                'name' => 'CHILE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '998', // Código
                'name' => 'NAC.REPUTADA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '999', // Código
                'name' => 'OTROS(PAIS DESC', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriPaises::insert($data);
    }
}
