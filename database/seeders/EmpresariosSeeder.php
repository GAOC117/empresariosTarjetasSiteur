<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empresarios')->insert([
            ['empresarios' => 'ACNUR GUADALAJARA', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'ACUARIO MICHIN S.A.P.I. DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'ADMINISTRADORA CENTRO COMERCIAL ANDARES', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'ADMINISTRADORA DE HOTELES GRT (CAMINO REAL)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'DM BOUTIQUE SERVICIOS TURISTICOS SAPI DE CV', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'AMBIENTA TUS MOMENTOS S. DE R.L. DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'CAJA DE AHORROS UNIFAM S.C. DE A.P. DE R.L. DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'CENTRO DE REFLEXIÓN Y ACCIÓN LABORAL A.C. (CEREAL)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'CENTROS CULTURALES DE MÉXICO, A.C.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'CENTURIÓN DE ALTA SEGURIDAD PRIVADA S.A. DE C.V', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'CHILDREN INTERNATIONAL-JALISCO', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'COSTCO DE MEXICO', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'CORPORATIVA DE FUNDACIONES A.C.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'EQUIPOS Y SISTEMAS PARA LIMPIEZA DE OCCIDENTE', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'DIGNIDAD Y JUSTICIA EN EL CAMINO A.C.FM4 PASO LIBRE', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'DISEÑO TECNOLOGÍA Y VANGUARDIA', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'DOLORES MAGDALENA ROSALES ROJAS', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'EMBUTIDOS CORONA S.A. DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'ESPAMOVIL', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'FESTMAYO A.C.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'FRACCIONAMIENTO JARDÍN REAL// SE FACTURA AL PÚBLICO EN GENERAL', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'GRUPO ARCEGA COMPUTERS S.A. DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'HOTEL QUINTA RIVERA GUADALAJARA S.A DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'HOTELERA OMS (AEROPUERTO)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'HOTELERA OMS (MICROTEL)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'INVERHOTELES S.A. DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'LAZO CORVERA', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'MANUEL MORA VELAZCO (CONSTRUCTORA VISTAMERICANA)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'MAYAMA', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'MOLDECO S.A. DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'MUNICIPIO DE GUADALAJARA', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'OPERADORA TURÍSTICA AURORA', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'OSCAR ADRIÁN GONZALEZ LOPEZ', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'ISA CORPORATIVO', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'PRODUCTOS KLYR S.A DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'PROFACE S.A. DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'PRO SOCIEDAD HACER BIEN EL BIEN', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'RECOCOM S.C. DE R.L. DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'REYNA MARMOLEJO', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'SARA EUGENIA FLORES GONZALEZ (REFACCIONARIA BULNES)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'SERVICIOS NORTE SUR', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'SERVICIOS PROFESIONALES Y EMPRESARIALES ESPECIALIZADOS DEL SURESTE S.A DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'SOLUCIONES AMBIENTALES DE MEXICO S.A. DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'SOPORTE Y SERVICIOS EMPRESARIALES GLOBALES S.A. DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'SUPER GUSTOSO', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'TELECABLE DE GUADALAJARA S.A. DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'TELEVIA METRO', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'TESMA PLASTICOS', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'TRANSPORTES J.E.M. Y/O DE JESUS MACIAS', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'TRASMEX S.A DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'TRESCETO S.A. DE C.V.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'UNIVERSIDAD AUTÓNOMA DE GUADALAJARA (PATRIOTISMO 1)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'VITRO CORPORATIVO', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['empresarios' => 'ZEST CAPITAL', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
