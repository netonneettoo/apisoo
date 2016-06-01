<?php

use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $half = 1;
        $year = date('Y');
        $registrationMin = intval($year . $half) * 100000;

        $walterUser = \App\User::create(['name' => 'José Walter de Souza Neto', 'email' => 'netonneettoo@gmail.com', 'password' => 'default']);
        $walterStudent = \App\Student::create(['user_id' => $walterUser->getAttribute('id'), 'registration' => rand($registrationMin, $registrationMin + 99999), 'status' => 'active']);

        $administration = \App\Course::create(['description' => 'Administração', 'status' => 'active']);
        $systemsForInternet = \App\Course::create(['description' => 'Sistemas para Internet', 'status' => 'active']);
        $networkOfComputers = \App\Course::create(['description' => 'Redes de Computadores', 'status' => 'active']);

        // administração
        $DISCIPLINE_01 = \App\Discipline::create(['description' => 'Redação Técnica e Empresarial', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_02 = \App\Discipline::create(['description' => 'Teoria Geral da Administração I', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_03 = \App\Discipline::create(['description' => 'Introdução a Contabilidade', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_04 = \App\Discipline::create(['description' => 'Sociologia das Organizações', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_05 = \App\Discipline::create(['description' => 'Matemática Aplicada', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_06 = \App\Discipline::create(['description' => 'Economia Empresarial', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_07 = \App\Discipline::create(['description' => 'Contabilidade Gerencial', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_08 = \App\Discipline::create(['description' => 'Metodologia do Trabalho Científico', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_09 = \App\Discipline::create(['description' => 'Matemática Financeira', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_10 = \App\Discipline::create(['description' => 'Instituições de Direito', 'requirements' => json_encode([]), 'status' => 'active']);

//        Formação Parcial: Certificado de Qualificação Profissional em Auxiliar Administrativo
        $DISCIPLINE_11 = \App\Discipline::create(['description' => 'Ética e Responsabilidade Social', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_12 = \App\Discipline::create(['description' => 'Teoria Geral da Administração II', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_13 = \App\Discipline::create(['description' => 'Informática Aplicada à Administração', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_14 = \App\Discipline::create(['description' => 'Estatística Aplicada à Administração', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_15 = \App\Discipline::create(['description' => 'Direito Empresarial', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_16 = \App\Discipline::create(['description' => 'Legislação Trabalhista e Previdenciária', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_17 = \App\Discipline::create(['description' => 'Organização, Sistemas e Métodos', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_18 = \App\Discipline::create(['description' => 'Mercado Financeiros e de Capitais', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_19 = \App\Discipline::create(['description' => 'Sistemas de Informações Gerenciais', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_20 = \App\Discipline::create(['description' => 'Gestão Ambiental', 'requirements' => json_encode([]), 'status' => 'active']);

//        Formação Parcial: Certificado de Qualificação Profissional em Assistente Administrativo
        $DISCIPLINE_21 = \App\Discipline::create(['description' => 'Administração Financeira e Orçamentária', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_22 = \App\Discipline::create(['description' => 'Comércio Internacional', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_23 = \App\Discipline::create(['description' => 'Gestão e Análise de Custo', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_24 = \App\Discipline::create(['description' => 'Gestão da Qualidade', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_25 = \App\Discipline::create(['description' => 'Psicologia Aplicada à Administração', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_26 = \App\Discipline::create(['description' => 'Controladoria', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_27 = \App\Discipline::create(['description' => 'Elaboração e Análise de Projeto', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_28 = \App\Discipline::create(['description' => 'Administração de Recursos Humanos', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_29 = \App\Discipline::create(['description' => 'Administração de Recursos de Materiais', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_30 = \App\Discipline::create(['description' => 'Marketing', 'requirements' => json_encode([]), 'status' => 'active']);

//        Formação Parcial: Certificado de Qualificação Profissional em Assessor Administrativo
        $DISCIPLINE_31 = \App\Discipline::create(['description' => 'Planejamento Estratégico e Orçamentário', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_32 = \App\Discipline::create(['description' => 'Diagnóstico e Consultoria', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_33 = \App\Discipline::create(['description' => 'Logística Empresarial', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_34 = \App\Discipline::create(['description' => 'Pesquisa e Análise de Mercado', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_35 = \App\Discipline::create(['description' => 'Estágio Supervisionado I', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_36 = \App\Discipline::create(['description' => 'Administração da Produção', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_37 = \App\Discipline::create(['description' => 'Gerência Comercial e de Vendas', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_38 = \App\Discipline::create(['description' => 'Jogos de Empresas', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_39 = \App\Discipline::create(['description' => 'Trabalho de Conclusão de Curso', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_40 = \App\Discipline::create(['description' => 'Estágio Supervisionado II', 'requirements' => json_encode([]), 'status' => 'active']);

        $administration->addDisciplines([$DISCIPLINE_01, $DISCIPLINE_02, $DISCIPLINE_03, $DISCIPLINE_04, $DISCIPLINE_05,
            $DISCIPLINE_06, $DISCIPLINE_07, $DISCIPLINE_08, $DISCIPLINE_09, $DISCIPLINE_10, $DISCIPLINE_11, $DISCIPLINE_12,
            $DISCIPLINE_13, $DISCIPLINE_14, $DISCIPLINE_15, $DISCIPLINE_16, $DISCIPLINE_17, $DISCIPLINE_18, $DISCIPLINE_19,
            $DISCIPLINE_20, $DISCIPLINE_21, $DISCIPLINE_22, $DISCIPLINE_23, $DISCIPLINE_24, $DISCIPLINE_25, $DISCIPLINE_26,
            $DISCIPLINE_27, $DISCIPLINE_28, $DISCIPLINE_29, $DISCIPLINE_30, $DISCIPLINE_31, $DISCIPLINE_32, $DISCIPLINE_33,
            $DISCIPLINE_34, $DISCIPLINE_35, $DISCIPLINE_36, $DISCIPLINE_37, $DISCIPLINE_38, $DISCIPLINE_39, $DISCIPLINE_40]);

        // sistemas para internet
        $DISCIPLINE_42 = \App\Discipline::create(['description' => 'Fundamentos de Computação e Arquitetura de Computadores', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_43 = \App\Discipline::create(['description' => 'Lógica de Programação', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_44 = \App\Discipline::create(['description' => 'Redes de Computadores', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_45 = \App\Discipline::create(['description' => 'Design e Programação de Interfaces Para Web', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_46 = \App\Discipline::create(['description' => 'Matemática Aplicada à Computação', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_47 = \App\Discipline::create(['description' => 'Banco de Dados', 'requirements' => json_encode([]), 'status' => 'active']);
//        $DISCIPLINE_ = \App\Discipline::create(['description' => 'Metodologia do Trabalho Científico', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_48 = \App\Discipline::create(['description' => 'Sistemas Operacionais', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_49 = \App\Discipline::create(['description' => 'Linguagem de Programação Orientada a Objetos I', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_50 = \App\Discipline::create(['description' => 'Introdução aos Sistemas de Informação', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_51 = \App\Discipline::create(['description' => 'Inglês Técnico', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_52 = \App\Discipline::create(['description' => 'Engenharia de Software', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_53 = \App\Discipline::create(['description' => 'Linguagem de Programação Orientada a Objetos II', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_54 = \App\Discipline::create(['description' => 'Programação para Web I', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_55 = \App\Discipline::create(['description' => 'Modelagem de Sistemas de Banco de Dados para Web', 'requirements' => json_encode([]), 'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Programador de Aplicações para a WEB
        $DISCIPLINE_56 = \App\Discipline::create(['description' => 'Arquiteturas WEB e Sistemas Distribuídos', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_57 = \App\Discipline::create(['description' => 'Desenvolvimento de Aplicações Para Dispositivos Móveis', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_58 = \App\Discipline::create(['description' => 'Análise, Projeto e Implementação de Sistemas Orientados a Objetos', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_59 = \App\Discipline::create(['description' => 'Programação para Web II', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_60 = \App\Discipline::create(['description' => 'Gerenciamento de Projetos', 'requirements' => json_encode([]), 'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Projetista de Aplicações para a WEB
        $DISCIPLINE_61 = \App\Discipline::create(['description' => 'Segurança e Auditoria de Sistemas na Web', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_62 = \App\Discipline::create(['description' => 'Arquitetura de Sistemas Web e Padrões de Projeto', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_63 = \App\Discipline::create(['description' => 'Web Services e Frameworks Para Aplicações Web', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_64 = \App\Discipline::create(['description' => 'Empreendedorismo', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_65 = \App\Discipline::create(['description' => 'Projeto Prático em Análise e Desenvolvimento Web', 'requirements' => json_encode([]), 'status' => 'active']);

        $systemsForInternet->addDisciplines([$DISCIPLINE_08, $DISCIPLINE_42, $DISCIPLINE_43, $DISCIPLINE_44, $DISCIPLINE_45,
            $DISCIPLINE_46, $DISCIPLINE_47, $DISCIPLINE_48, $DISCIPLINE_49, $DISCIPLINE_50, $DISCIPLINE_51, $DISCIPLINE_52,
            $DISCIPLINE_53, $DISCIPLINE_54, $DISCIPLINE_55, $DISCIPLINE_56, $DISCIPLINE_57, $DISCIPLINE_58, $DISCIPLINE_59,
            $DISCIPLINE_60, $DISCIPLINE_61, $DISCIPLINE_62, $DISCIPLINE_63, $DISCIPLINE_64, $DISCIPLINE_65]);

        // redes de computadores
//        $DISCIPLINE_ = \App\Discipline::create(['description' => 'Fundamentos da Computação e Arquitetura de Computadores', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_66 = \App\Discipline::create(['description' => 'Tecnologias de Sistemas Proprietários', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_67 = \App\Discipline::create(['description' => 'Tecnologias de Sistemas Abertos', 'requirements' => json_encode([]), 'status' => 'active']);
//        $DISCIPLINE_ = \App\Discipline::create(['description' => 'Redes de Computadores', 'requirements' => json_encode([]), 'status' => 'active']);
//        $DISCIPLINE_ = \App\Discipline::create(['description' => 'Lógica de Programação', 'requirements' => json_encode([]), 'status' => 'active']);
//        $DISCIPLINE_ = \App\Discipline::create(['description' => 'Metodologia do Trabalho Científico', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_68 = \App\Discipline::create(['description' => 'Servidores de Redes com Sistemas Proprietários', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_69 = \App\Discipline::create(['description' => 'Servidores de Redes com Sistemas Abertos', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_70 = \App\Discipline::create(['description' => 'Roteamento de Redes de Computadores', 'requirements' => json_encode([]), 'status' => 'active']);
//        $DISCIPLINE_ = \App\Discipline::create(['description' => 'Banco de Dados', 'requirements' => json_encode([]), 'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Administrador de Sistemas
//        $DISCIPLINE_ = \App\Discipline::create(['description' => 'Inglês Técnico', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_71 = \App\Discipline::create(['description' => 'Administração de Redes com Sistemas Proprietários', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_72 = \App\Discipline::create(['description' => 'Administração de Redes com Sistemas Abertos', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_73 = \App\Discipline::create(['description' => 'Switching de Redes de Computadores', 'requirements' => json_encode([]), 'status' => 'active']);
//        $DISCIPLINE_ = \App\Discipline::create(['description' => 'Arquiteturas WEB e Sistemas Distribuídos', 'requirements' => json_encode([]), 'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Administrador de Redes Locais de Computadores
//        $DISCIPLINE_ = \App\Discipline::create(['description' => 'Gerenciamento de Projetos', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_74 = \App\Discipline::create(['description' => 'Soluções de Segurança de Redes com Sistemas Proprietários', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_75 = \App\Discipline::create(['description' => 'Soluções de Segurança de Redes com Sistemas Abertos', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_76 = \App\Discipline::create(['description' => 'Redes de Longa Distância – WAN’s', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_77 = \App\Discipline::create(['description' => 'Redes sem fio', 'requirements' => json_encode([]), 'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Analista de Segurança de Redes de Computadores
        $DISCIPLINE_78 = \App\Discipline::create(['description' => 'Implementação de Projetos de Tecnologia da Informação', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_79 = \App\Discipline::create(['description' => 'Projeto Prático em Redes de Computadores', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_80 = \App\Discipline::create(['description' => 'Soluções Avançadas em Plataforma Aberta', 'requirements' => json_encode([]), 'status' => 'active']);
        $DISCIPLINE_81 = \App\Discipline::create(['description' => 'Redes de Alta Velocidade', 'requirements' => json_encode([]), 'status' => 'active']);
//        $DISCIPLINE_ = \App\Discipline::create(['description' => 'Empreendedorismo', 'requirements' => json_encode([]), 'status' => 'active']);

        $networkOfComputers->addDisciplines([$DISCIPLINE_42, $DISCIPLINE_43, $DISCIPLINE_44, $DISCIPLINE_47, $DISCIPLINE_51,
            $DISCIPLINE_56, $DISCIPLINE_60, $DISCIPLINE_64, $DISCIPLINE_66, $DISCIPLINE_67, $DISCIPLINE_68, $DISCIPLINE_69,
            $DISCIPLINE_70, $DISCIPLINE_71, $DISCIPLINE_72, $DISCIPLINE_73, $DISCIPLINE_74, $DISCIPLINE_75, $DISCIPLINE_76,
            $DISCIPLINE_77, $DISCIPLINE_78, $DISCIPLINE_79, $DISCIPLINE_80, $DISCIPLINE_81]);
    }
}
