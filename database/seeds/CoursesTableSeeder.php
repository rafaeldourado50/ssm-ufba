<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ADMINISTRAÇÃO   - SALVADOR',
                'code' => '316130',
                'curriculum' => '20111',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ARQUITETURA E URBANISMO   - NOTURNO - SALVADOR',
                'code' => '187140',
                'curriculum' => '20091',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ARQUITETURA E URBANISMO   - SALVADOR',
                'code' => '101140',
                'curriculum' => '20081',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ARQUIVOLOGIA   - NOTURNO - SALVADOR',
                'code' => '381140',
                'curriculum' => '20091',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ARQUIVOLOGIA - BACHARELADO  - SALVADOR',
                'code' => '317141',
                'curriculum' => '20091',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'ARQUIVOLOGIA - BACHARELADO  - SALVADOR',
                'code' => '317140',
                'curriculum' => '20141',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ARTES CÊNICAS - DIRECAO TEATRAL  - SALVADOR',
                'code' => '506140',
                'curriculum' => '20142',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ARTES CÊNICAS - INTERPRETACAO TEATRAL  - SALVADOR',
                'code' => '510140',
                'curriculum' => '20142',
                'area_id' => NULL,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-01 23:54:15',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'ARTES PLÁSTICAS   - SALVADOR',
                'code' => '501140',
                'curriculum' => '20092',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'BACHARELADO INTERDISCIPLINAR EM SAÚDE   - SALVADOR',
                'code' => '226140',
                'curriculum' => '20171',
                'area_id' => 6,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'BIBLIOTECONOMIA E DOCUMENTAÇÃO   - SALVADOR',
                'code' => '303140',
                'curriculum' => '20091',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'BIOTECNOLOGIA   - VITÓRIA DA CONQUISTA',
                'code' => '221140',
                'curriculum' => '20131',
                'area_id' => 7,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:53',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'CANTO   - SALVADOR',
                'code' => '508440',
                'curriculum' => '20111',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'CIÊNCIA DA COMPUTAÇÃO - BACHARELADO  - SALVADOR',
                'code' => '112140',
                'curriculum' => '20132',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'CIÊNCIAS BIOLÓGICAS - BACHARELADO  - VITÓRIA DA CONQUISTA',
                'code' => '220130',
                'curriculum' => '20131',
                'area_id' => 7,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:53',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'CIÊNCIAS BIOLÓGICAS - LICENCIATURA  - NOTURNO - SALVADOR',
                'code' => '280120',
                'curriculum' => '20141',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'CIÊNCIAS BIOLÓGICAS - LICENCIATURA  - SALVADOR',
                'code' => '202120',
                'curriculum' => '20141',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'CIÊNCIAS CONTÁBEIS   - NOTURNO - SALVADOR',
                'code' => '380140',
                'curriculum' => '20091',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'CIÊNCIAS CONTÁBEIS   - SALVADOR',
                'code' => '304140',
                'curriculum' => '20092',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'CIÊNCIAS ECONÔMICAS   - SALVADOR',
                'code' => '305140',
                'curriculum' => '20161',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'CIÊNCIAS SOCIAIS - LICENCIATURA  - SALVADOR',
                'code' => '306120',
                'curriculum' => '20092',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'COMPOSIÇÃO E REGÊNCIA - BACHARELADO - COMPOSIÇÃO - SALVADOR',
                'code' => '502141',
                'curriculum' => '20111',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'COMPOSIÇÃO E REGÊNCIA - REGÊNCIA  - SALVADOR',
                'code' => '502144',
                'curriculum' => '20111',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'COMPUTAÇÃO - LICENCIATURA  - NOTURNO - SALVADOR',
                'code' => '196120',
                'curriculum' => '20101',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'COMUNICAÇÃO - JORNALISMO  - SALVADOR',
                'code' => '307140',
                'curriculum' => '20091',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'COMUNICAÇÃO - PRODUCAO EM COMUNICACAO E CULTURA  - SALVADOR',
                'code' => '307141',
                'curriculum' => '20091',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'DANÇA - BACHARELADO  - SALVADOR',
                'code' => '503130',
                'curriculum' => '20111',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'DANÇA - LICENCIATURA  - NOTURNO - SALVADOR',
                'code' => '581120',
                'curriculum' => '20101',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'DANÇA - LICENCIATURA  - SALVADOR',
                'code' => '503120',
                'curriculum' => '20092',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'DESIGN - PROGRAMACAO VISUAL  - SALVADOR',
                'code' => '512140',
                'curriculum' => '20092',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'DIREITO   - NOTURNO - SALVADOR',
                'code' => '382140',
                'curriculum' => '20091',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'DIREITO   - SALVADOR',
                'code' => '308140',
                'curriculum' => '20151',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'EDUCAÇÃO FÍSICA - LICENCIATURA  - SALVADOR',
                'code' => '315110',
                'curriculum' => '20111',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'ENFERMAGEM - ENFERMEIRO  - SALVADOR',
                'code' => '203140',
                'curriculum' => '20172',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'ENFERMAGEM - ENFERMEIRO  - VITÓRIA DA CONQUISTA',
                'code' => '216140',
                'curriculum' => '20092',
                'area_id' => 7,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:53',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'ENGENHARIA CIVIL   - SALVADOR',
                'code' => '102140',
                'curriculum' => '20091',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'ENGENHARIA DE AGRIMENSURA E CARTOGRÁFICA - BACHARELADO  - NOTURNO - SALVADOR',
                'code' => '194140',
                'curriculum' => '20101',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'ENGENHARIA DE COMPUTAÇÃO - BACHARELADO  - NOTURNO - SALVADOR',
                'code' => '186140',
                'curriculum' => '20091',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'ENGENHARIA DE CONTROLE E AUTOMAÇÃO DE PROCESSOS   - NOTURNO - SALVADOR',
                'code' => '188140',
                'curriculum' => '20091',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'ENGENHARIA DE MINAS - LAVRA E BENEFICIAMENTO  - SALVADOR',
                'code' => '103140',
                'curriculum' => '20091',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'ENGENHARIA DE PRODUÇÃO   - NOTURNO - SALVADOR',
                'code' => '185140',
                'curriculum' => '20091',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'ENGENHARIA ELÉTRICA   - SALVADOR',
                'code' => '104140',
                'curriculum' => '20081',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'ENGENHARIA MECÂNICA   - SALVADOR',
                'code' => '105140',
                'curriculum' => '20081',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'ENGENHARIA QUÍMICA   - SALVADOR',
                'code' => '106140',
                'curriculum' => '20081',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'ENGENHARIA SANITÁRIA E AMBIENTAL   - SALVADOR',
                'code' => '107140',
                'curriculum' => '20121',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'ESTATÍSTICA - BACHARELADO  - SALVADOR',
                'code' => '116130',
                'curriculum' => '20112',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'FARMÁCIA   - NOTURNO - SALVADOR',
                'code' => '281143',
                'curriculum' => '20131',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'FARMÁCIA   - SALVADOR',
                'code' => '204143',
                'curriculum' => '20092',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'FARMÁCIA - FARMACEUTICO  - VITÓRIA DA CONQUISTA',
                'code' => '217140',
                'curriculum' => '20131',
                'area_id' => 7,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:53',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'FILOSOFIA - LICENCIATURA  - SALVADOR',
                'code' => '309120',
                'curriculum' => '20092',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'FÍSICA - BACHARELADO  - SALVADOR',
                'code' => '108130',
                'curriculum' => '20161',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'FÍSICA - LICENCIATURA  - NOTURNO - SALVADOR',
                'code' => '181120',
                'curriculum' => '20161',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'FISIOTERAPIA - BACHARELADO  - SALVADOR',
                'code' => '222140',
                'curriculum' => '20132',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'FONOAUDIOLOGIA   - SALVADOR',
                'code' => '210140',
                'curriculum' => '20161',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'GASTRONOMIA - BACHARELADO  - NOTURNO - SALVADOR',
                'code' => '282140',
                'curriculum' => '20092',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'GÊNERO E DIVERSIDADE - BACHARELADO  - NOTURNO - SALVADOR',
                'code' => '383130',
                'curriculum' => '20091',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'GEOFÍSICA - BACHARELADO  - SALVADOR',
                'code' => '118130',
                'curriculum' => '20072',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'GEOGRAFIA - LICENCIATURA  - NOTURNO - SALVADOR',
                'code' => '182120',
                'curriculum' => '20151',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'GEOGRAFIA - LICENCIATURA  - SALVADOR',
                'code' => '109120',
                'curriculum' => '20151',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'GEOLOGIA   - SALVADOR',
                'code' => '110140',
                'curriculum' => '20151',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'HISTÓRIA - LICENCIATURA  - NOTURNO - SALVADOR',
                'code' => '386120',
                'curriculum' => '20161',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'HISTÓRIA - LICENCIATURA  - SALVADOR',
                'code' => '310120',
                'curriculum' => '20161',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'INSTRUMENTO - VIOLÃO  - SALVADOR',
                'code' => '509441',
                'curriculum' => '20111',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'LETRAS - LETRAS VERNÁCULAS E INGLÊS -LICENCIATURA  - SALVADOR',
                'code' => '402200',
                'curriculum' => '20092',
                'area_id' => 4,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:51',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'LETRAS - LICENCIATURA  - NOTURNO - SALVADOR',
                'code' => '480120',
                'curriculum' => '20092',
                'area_id' => 4,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:51',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'LETRAS - LICENCIATURA- INGLÊS  - NOTURNO - SALVADOR',
                'code' => '481120',
                'curriculum' => '20092',
                'area_id' => 4,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:51',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'LETRAS - LICENCIATURA- INGLÊS  - SALVADOR',
                'code' => '403200',
                'curriculum' => '20092',
                'area_id' => 4,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:51',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'LETRAS - LICENCIATURA-PORTUGUES  - SALVADOR',
                'code' => '401200',
                'curriculum' => '20092',
                'area_id' => 4,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:51',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'LICENCIATURA EM DANÇA   - SALVADOR',
                'code' => '848120',
                'curriculum' => '20152',
                'area_id' => NULL,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-01 23:54:15',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'LICENCIATURA EM DESENHO E PLÁSTICA - LICENCIATURA  - SALVADOR',
                'code' => '505120',
                'curriculum' => '20092',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'LICENCIATURA EM MATEMÁTICA A DISTÂNCIA - LICENCIATURA  - SALVADOR',
                'code' => '127120',
                'curriculum' => '20082',
                'area_id' => NULL,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-01 23:54:15',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'LICENCIATURA EM TEATRO - LICENCIATURA  - SALVADOR',
                'code' => '511140',
                'curriculum' => '20142',
                'area_id' => NULL,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-01 23:54:15',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'MATEMÁTICA - BACHARELADO  - SALVADOR',
                'code' => '111130',
                'curriculum' => '20081',
                'area_id' => NULL,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-01 23:54:15',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'MATEMÁTICA - LICENCIATURA  - NOTURNO - SALVADOR',
                'code' => '183120',
                'curriculum' => '20092',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'MATEMÁTICA - LICENCIATURA  - SALVADOR',
                'code' => '111120',
                'curriculum' => '20092',
                'area_id' => NULL,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-01 23:54:15',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'MEDICINA   - SALVADOR',
                'code' => '205140',
                'curriculum' => '20092',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'MEDICINA   - VITÓRIA DA CONQUISTA',
                'code' => '847140',
                'curriculum' => '20152',
                'area_id' => 7,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:53',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'MEDICINA VETERINÁRIA   - SALVADOR',
                'code' => '206140',
                'curriculum' => '20151',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'MUSEOLOGIA - BACHARELADO  - SALVADOR',
                'code' => '311140',
                'curriculum' => '20111',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'MÚSICA - LICENCIATURA  - SALVADOR',
                'code' => '507120',
                'curriculum' => '20111',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'MÚSICA - PIANO  - SALVADOR',
                'code' => '507122',
                'curriculum' => '20111',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:15',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'MÚSICA POPULAR - BACHARELADO - COMPOSIÇÃO E ARRANJO  - SALVADOR',
                'code' => '514140',
                'curriculum' => '20091',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'NUTRIÇÃO   - SALVADOR',
                'code' => '207140',
                'curriculum' => '20122',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'NUTRIÇÃO   - VITÓRIA DA CONQUISTA',
                'code' => '218140',
                'curriculum' => '20131',
                'area_id' => 7,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:53',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'OCEANOGRAFIA - BACHARELADO  - SALVADOR',
                'code' => '119140',
                'curriculum' => '20091',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'ODONTOLOGIA   - SALVADOR',
                'code' => '208140',
                'curriculum' => '20072',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'PEDAGOGIA - LICENCIATURA  - NOTURNO - SALVADOR',
                'code' => '385120',
                'curriculum' => '20102',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'PEDAGOGIA - LICENCIATURA  - SALVADOR',
                'code' => '312140',
                'curriculum' => '20092',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'PEDAGOGIA - LICENCIATURA  - SALVADOR',
                'code' => '875120',
                'curriculum' => '20172',
                'area_id' => NULL,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-01 23:54:16',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'PSICOLOGIA - FORMACAO DE PSICOLOGO  - SALVADOR',
                'code' => '313133',
                'curriculum' => '20152',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'PSICOLOGIA - FORMACAO DE PSICOLOGO  - VITÓRIA DA CONQUISTA',
                'code' => '328140',
                'curriculum' => '20101',
                'area_id' => 7,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:53',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'QUÍMICA - BACHARELADO  - SALVADOR',
                'code' => '113130',
                'curriculum' => '20091',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'QUÍMICA - LICENCIATURA  - NOTURNO - SALVADOR',
                'code' => '184120',
                'curriculum' => '20092',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'SAÚDE COLETIVA   - NOTURNO - SALVADOR',
                'code' => '283140',
                'curriculum' => '20161',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'SECRETARIADO EXECUTIVO - BACHARELADO  - SALVADOR',
                'code' => '314140',
                'curriculum' => '20091',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'SERVIÇO SOCIAL - BACHARELADO  - SALVADOR',
                'code' => '325140',
                'curriculum' => '20101',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'SISTEMAS DE INFORMAÇÃO - BACHARELADO  - NOTURNO - SALVADOR',
                'code' => '195140',
                'curriculum' => '20122',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'SUPERIOR DE DECORAÇÃO   - SALVADOR',
                'code' => '513140',
                'curriculum' => '20091',
                'area_id' => 5,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:52',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'SUPERIOR DE TECNOLOGIA EM GESTÃO PÚBLICA   - NOTURNO - SALVADOR',
                'code' => '384140',
                'curriculum' => '20111',
                'area_id' => 3,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:49',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'SUPERIOR DE TECNOLOGIA EM SEGURANÇA PÚBLICA   - SALVADOR',
                'code' => '846140',
                'curriculum' => '20161',
                'area_id' => NULL,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-01 23:54:16',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'SUPERIOR DE TECNOLOGIA EM TRANSPORTE TERRESTRE   - NOTURNO - SALVADOR',
                'code' => '197140',
                'curriculum' => '20122',
                'area_id' => 1,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:48',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'ZOOTECNIA   - SALVADOR',
                'code' => '219140',
                'curriculum' => '20091',
                'area_id' => 2,
                'created_at' => '2018-03-01 23:54:16',
                'updated_at' => '2018-03-02 00:54:49',
            ),
        ));
        
        
    }
}
