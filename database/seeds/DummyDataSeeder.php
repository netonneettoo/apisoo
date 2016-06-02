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
        $passDefault = 'senha123';
        $workload = 80;

        $walterUser = \App\User::create(['name' => 'José Walter de Souza Neto', 'email' => 'netonneettoo@gmail.com', 'password' => bcrypt('default')]);
        $walterStudent = \App\Student::create(['user_id' => $walterUser->getAttribute('id'), 'registration' => 2012207180, 'status' => 'active']);

//        $testUser = \App\User::create(['name' => 'Test User', 'email' => 'jw_netoa@hotmail.com', 'password' => bcrypt($passDefault)]);
//        $testStudent = \App\Student::create(['user_id' => $testUser->getAttribute('id'), 'registration' => rand($registrationMin, $registrationMin + 99999), 'status' => 'active']);

        $alexandreUser = \App\User::create(['name' => 'Alexandre Vieira', 'email' => 'alexandre@facevol.com.br', 'password' => bcrypt($passDefault)]);
        $alexandreTeacher = \App\Teacher::create(['user_id' => $alexandreUser->getAttribute('id'), 'cpf' => '000.000.000-00', 'status' => 'active']);
        $sergianaUser = \App\User::create(['name' => 'Sergiana Freitas', 'email' => 'sergiana@facevol.com.br', 'password' => bcrypt($passDefault)]);
        $sergianaTeacher = \App\Teacher::create(['user_id' => $sergianaUser->getAttribute('id'), 'cpf' => '111.111.111-11', 'status' => 'active']);
        $keteUser = \App\User::create(['name' => 'Kete Martins', 'email' => 'kete@facevol.com.br', 'password' => bcrypt($passDefault)]);
        $keteTeacher = \App\Teacher::create(['user_id' => $keteUser->getAttribute('id'), 'cpf' => '222.222.222-22', 'status' => 'active']);

        $systemsForInternet = \App\Course::create(['description' => 'Sistemas para Internet', 'status' => 'active']);
        $networkOfComputers = \App\Course::create(['description' => 'Redes de Computadores', 'status' => 'active']);

        $walterStudent->addCourse($systemsForInternet);
//        $testStudent->addCourse($administration);

        // sistemas para internet
        $DISCIPLINE_01 = \App\Discipline::create(['description' => 'Fundamentos de Computação e Arquitetura de Computadores', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_02 = \App\Discipline::create(['description' => 'Lógica de Programação', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_03 = \App\Discipline::create(['description' => 'Redes de Computadores', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_04 = \App\Discipline::create(['description' => 'Design e Programação de Interfaces Para Web', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_05 = \App\Discipline::create(['description' => 'Matemática Aplicada à Computação', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_06 = \App\Discipline::create(['description' => 'Banco de Dados', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_07 = \App\Discipline::create(['description' => 'Metodologia do Trabalho Científico', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_08 = \App\Discipline::create(['description' => 'Sistemas Operacionais', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_09 = \App\Discipline::create(['description' => 'Linguagem de Programação Orientada a Objetos I', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_10 = \App\Discipline::create(['description' => 'Introdução aos Sistemas de Informação', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_11 = \App\Discipline::create(['description' => 'Inglês Técnico', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_12 = \App\Discipline::create(['description' => 'Engenharia de Software', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_13 = \App\Discipline::create(['description' => 'Linguagem de Programação Orientada a Objetos II', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_14 = \App\Discipline::create(['description' => 'Programação para Web I', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_15 = \App\Discipline::create(['description' => 'Modelagem de Sistemas de Banco de Dados para Web', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Programador de Aplicações para a WEB
        $DISCIPLINE_16 = \App\Discipline::create(['description' => 'Arquiteturas WEB e Sistemas Distribuídos', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_17 = \App\Discipline::create(['description' => 'Desenvolvimento de Aplicações Para Dispositivos Móveis', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_18 = \App\Discipline::create(['description' => 'Análise, Projeto e Implementação de Sistemas Orientados a Objetos', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_19 = \App\Discipline::create(['description' => 'Programação para Web II', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_20 = \App\Discipline::create(['description' => 'Gerenciamento de Projetos', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Projetista de Aplicações para a WEB
        $DISCIPLINE_21 = \App\Discipline::create(['description' => 'Segurança e Auditoria de Sistemas na Web', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_22 = \App\Discipline::create(['description' => 'Arquitetura de Sistemas Web e Padrões de Projeto', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_23 = \App\Discipline::create(['description' => 'Web Services e Frameworks Para Aplicações Web', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_24 = \App\Discipline::create(['description' => 'Gestão de Negócios e Empreendedorismo', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_25 = \App\Discipline::create(['description' => 'Projeto Prático em Análise e Desenvolvimento Web', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);

        $systemsForInternet->addDisciplines([$DISCIPLINE_01, $DISCIPLINE_02, $DISCIPLINE_03, $DISCIPLINE_04, $DISCIPLINE_05,
            $DISCIPLINE_06, $DISCIPLINE_07, $DISCIPLINE_08, $DISCIPLINE_09, $DISCIPLINE_10, $DISCIPLINE_11, $DISCIPLINE_12,
            $DISCIPLINE_13, $DISCIPLINE_14, $DISCIPLINE_15, $DISCIPLINE_16, $DISCIPLINE_17, $DISCIPLINE_18, $DISCIPLINE_19,
            $DISCIPLINE_20, $DISCIPLINE_21, $DISCIPLINE_22, $DISCIPLINE_23, $DISCIPLINE_24, $DISCIPLINE_25]);

        // redes de computadores
        $DISCIPLINE_26 = \App\Discipline::create(['description' => 'Tecnologias de Sistemas Proprietários', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_27 = \App\Discipline::create(['description' => 'Tecnologias de Sistemas Abertos', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_28 = \App\Discipline::create(['description' => 'Servidores de Redes com Sistemas Proprietários', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_29 = \App\Discipline::create(['description' => 'Servidores de Redes com Sistemas Abertos', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_30 = \App\Discipline::create(['description' => 'Roteamento de Redes de Computadores', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Administrador de Sistemas
        $DISCIPLINE_31 = \App\Discipline::create(['description' => 'Administração de Redes com Sistemas Proprietários', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_32 = \App\Discipline::create(['description' => 'Administração de Redes com Sistemas Abertos', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_33 = \App\Discipline::create(['description' => 'Switching de Redes de Computadores', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Administrador de Redes Locais de Computadores
        $DISCIPLINE_34 = \App\Discipline::create(['description' => 'Soluções de Segurança de Redes com Sistemas Proprietários', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_35 = \App\Discipline::create(['description' => 'Soluções de Segurança de Redes com Sistemas Abertos', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_36 = \App\Discipline::create(['description' => 'Redes de Longa Distância – WAN’s', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_37 = \App\Discipline::create(['description' => 'Redes sem fio', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Analista de Segurança de Redes de Computadores
        $DISCIPLINE_38 = \App\Discipline::create(['description' => 'Implementação de Projetos de Tecnologia da Informação', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_39 = \App\Discipline::create(['description' => 'Projeto Prático em Redes de Computadores', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_40 = \App\Discipline::create(['description' => 'Soluções Avançadas em Plataforma Aberta', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $DISCIPLINE_41 = \App\Discipline::create(['description' => 'Redes de Alta Velocidade', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);

        $networkOfComputers->addDisciplines([$DISCIPLINE_01, $DISCIPLINE_02, $DISCIPLINE_03, $DISCIPLINE_06, $DISCIPLINE_07, $DISCIPLINE_11,
            $DISCIPLINE_16, $DISCIPLINE_20, $DISCIPLINE_24, $DISCIPLINE_26, $DISCIPLINE_27, $DISCIPLINE_28, $DISCIPLINE_29, $DISCIPLINE_30,
            $DISCIPLINE_31, $DISCIPLINE_32, $DISCIPLINE_33, $DISCIPLINE_34, $DISCIPLINE_35, $DISCIPLINE_36, $DISCIPLINE_37,
            $DISCIPLINE_38, $DISCIPLINE_39, $DISCIPLINE_40, $DISCIPLINE_41]);

        \App\DisciplineClass::addHistoryToWalter($walterStudent);

        \App\DisciplineClass::addAllDisciplineClasses();
    }
}
