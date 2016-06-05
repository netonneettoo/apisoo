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
        $gustavoUser = \App\User::create(['name' => 'Gustavo Martim de Sousa', 'email' => 'gul.sousa20@hotmail.com', 'password' => bcrypt('default')]);
        $gustavoStudent = \App\Student::create(['user_id' => $gustavoUser->getAttribute('id'), 'registration' => 2012215117, 'status' => 'active']);
        $vitorUser = \App\User::create(['name' => 'Vitor Barros', 'email' => 'vrab46@gmail.com', 'password' => bcrypt('default')]);
        $vitorStudent = \App\Student::create(['user_id' => $vitorUser->getAttribute('id'), 'registration' => 2012207181, 'status' => 'active']);
        $pauloSergioUser = \App\User::create(['name' => 'Paulo Sérgio', 'email' => 'paulo.sergio.cv@hotmail.com', 'password' => bcrypt('default')]);
        $pauloSergioStudent = \App\Student::create(['user_id' => $pauloSergioUser->getAttribute('id'), 'registration' => 201224142, 'status' => 'active']);

        $alexandreUser = \App\User::create(['name' => 'Alexandre Vieira', 'email' => 'alexandre@facevol.com.br', 'password' => bcrypt($passDefault)]);
        $alexandreTeacher = \App\Teacher::create(['user_id' => $alexandreUser->getAttribute('id'), 'cpf' => '000.000.000-00', 'status' => 'active']);
        $sergianaUser = \App\User::create(['name' => 'Sergiana Freitas', 'email' => 'sergiana@facevol.com.br', 'password' => bcrypt($passDefault)]);
        $sergianaTeacher = \App\Teacher::create(['user_id' => $sergianaUser->getAttribute('id'), 'cpf' => '111.111.111-11', 'status' => 'active']);
        $keteUser = \App\User::create(['name' => 'Kete Martins', 'email' => 'kete@facevol.com.br', 'password' => bcrypt($passDefault)]);
        $keteTeacher = \App\Teacher::create(['user_id' => $keteUser->getAttribute('id'), 'cpf' => '222.222.222-22', 'status' => 'active']);
        $savioUser = \App\User::create(['name' => 'Sávio Miranda', 'email' => 'savio@facevol.com.br', 'password' => bcrypt($passDefault)]);
        $savioTeacher = \App\Teacher::create(['user_id' => $savioUser->getAttribute('id'), 'cpf' => '333.333.333-33', 'status' => 'active']);

        $systemsForInternet = \App\Course::create(['description' => 'Sistemas para Internet', 'status' => 'active']);
        $networkOfComputers = \App\Course::create(['description' => 'Redes de Computadores', 'status' => 'active']);

        $walterStudent->addCourse($systemsForInternet);
        $gustavoStudent->addCourse($systemsForInternet);
        $vitorStudent->addCourse($systemsForInternet);
        $pauloSergioStudent->addCourse($systemsForInternet);

        // sistemas para internet
        $discipline_01 = \App\Discipline::create(['description' => 'Fundamentos de Computação e Arquitetura de Computadores', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_02 = \App\Discipline::create(['description' => 'Lógica de Programação', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_03 = \App\Discipline::create(['description' => 'Redes de Computadores', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_04 = \App\Discipline::create(['description' => 'Design e Programação de Interfaces Para Web', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_05 = \App\Discipline::create(['description' => 'Matemática Aplicada à Computação', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_06 = \App\Discipline::create(['description' => 'Banco de Dados', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_07 = \App\Discipline::create(['description' => 'Metodologia do Trabalho Científico', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_08 = \App\Discipline::create(['description' => 'Sistemas Operacionais', 'requirements' => json_encode([1]), 'workload' => $workload,  'status' => 'active']);
        $discipline_09 = \App\Discipline::create(['description' => 'Linguagem de Programação Orientada a Objetos I', 'requirements' => json_encode([2, 6]), 'workload' => $workload,  'status' => 'active']);
        $discipline_10 = \App\Discipline::create(['description' => 'Introdução aos Sistemas de Informação', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_11 = \App\Discipline::create(['description' => 'Inglês Técnico', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_12 = \App\Discipline::create(['description' => 'Engenharia de Software', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_13 = \App\Discipline::create(['description' => 'Linguagem de Programação Orientada a Objetos II', 'requirements' => json_encode([9]), 'workload' => $workload,  'status' => 'active']);
        $discipline_14 = \App\Discipline::create(['description' => 'Programação para Web I', 'requirements' => json_encode([2, 6]), 'workload' => $workload,  'status' => 'active']);
        $discipline_15 = \App\Discipline::create(['description' => 'Modelagem de Sistemas de Banco de Dados para Web', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Programador de Aplicações para a WEB
        $discipline_16 = \App\Discipline::create(['description' => 'Arquiteturas WEB e Sistemas Distribuídos', 'requirements' => json_encode([9, 13]), 'workload' => $workload,  'status' => 'active']);
        $discipline_17 = \App\Discipline::create(['description' => 'Desenvolvimento de Aplicações Para Dispositivos Móveis', 'requirements' => json_encode([9, 13]), 'workload' => $workload,  'status' => 'active']);
        $discipline_18 = \App\Discipline::create(['description' => 'Análise, Projeto e Implementação de Sistemas Orientados a Objetos', 'requirements' => json_encode([9, 13]), 'workload' => $workload,  'status' => 'active']);
        $discipline_19 = \App\Discipline::create(['description' => 'Programação para Web II', 'requirements' => json_encode([14]), 'workload' => $workload,  'status' => 'active']);
        $discipline_20 = \App\Discipline::create(['description' => 'Gerenciamento de Projetos', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Projetista de Aplicações para a WEB
        $discipline_21 = \App\Discipline::create(['description' => 'Segurança e Auditoria de Sistemas na Web', 'requirements' => json_encode([3, 19]), 'workload' => $workload,  'status' => 'active']);
        $discipline_22 = \App\Discipline::create(['description' => 'Arquitetura de Sistemas Web e Padrões de Projeto', 'requirements' => json_encode([9, 13, 19]), 'workload' => $workload,  'status' => 'active']);
        $discipline_23 = \App\Discipline::create(['description' => 'Web Services e Frameworks Para Aplicações Web', 'requirements' => json_encode([9, 13, 19]), 'workload' => $workload,  'status' => 'active']);
        $discipline_24 = \App\Discipline::create(['description' => 'Gestão de Negócios e Empreendedorismo', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_25 = \App\Discipline::create(['description' => 'Projeto Prático em Análise e Desenvolvimento Web', 'requirements' => json_encode([9, 13, 19]), 'workload' => $workload,  'status' => 'active']);

        $systemsForInternet->addDisciplines([$discipline_01, $discipline_02, $discipline_03, $discipline_04, $discipline_05,
            $discipline_06, $discipline_07, $discipline_08, $discipline_09, $discipline_10, $discipline_11, $discipline_12,
            $discipline_13, $discipline_14, $discipline_15, $discipline_16, $discipline_17, $discipline_18, $discipline_19,
            $discipline_20, $discipline_21, $discipline_22, $discipline_23, $discipline_24, $discipline_25]);

        // redes de computadores
        $discipline_26 = \App\Discipline::create(['description' => 'Tecnologias de Sistemas Proprietários', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_27 = \App\Discipline::create(['description' => 'Tecnologias de Sistemas Abertos', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_28 = \App\Discipline::create(['description' => 'Servidores de Redes com Sistemas Proprietários', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_29 = \App\Discipline::create(['description' => 'Servidores de Redes com Sistemas Abertos', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_30 = \App\Discipline::create(['description' => 'Roteamento de Redes de Computadores', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Administrador de Sistemas
        $discipline_31 = \App\Discipline::create(['description' => 'Administração de Redes com Sistemas Proprietários', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_32 = \App\Discipline::create(['description' => 'Administração de Redes com Sistemas Abertos', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_33 = \App\Discipline::create(['description' => 'Switching de Redes de Computadores', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Administrador de Redes Locais de Computadores
        $discipline_34 = \App\Discipline::create(['description' => 'Soluções de Segurança de Redes com Sistemas Proprietários', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_35 = \App\Discipline::create(['description' => 'Soluções de Segurança de Redes com Sistemas Abertos', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_36 = \App\Discipline::create(['description' => 'Redes de Longa Distância – WAN’s', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_37 = \App\Discipline::create(['description' => 'Redes sem fio', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
//        Formação Parcial: Qualificação Profissional de Nível Tecnológico como Analista de Segurança de Redes de Computadores
        $discipline_38 = \App\Discipline::create(['description' => 'Implementação de Projetos de Tecnologia da Informação', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_39 = \App\Discipline::create(['description' => 'Projeto Prático em Redes de Computadores', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_40 = \App\Discipline::create(['description' => 'Soluções Avançadas em Plataforma Aberta', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);
        $discipline_41 = \App\Discipline::create(['description' => 'Redes de Alta Velocidade', 'requirements' => json_encode([]), 'workload' => $workload,  'status' => 'active']);

        $networkOfComputers->addDisciplines([$discipline_01, $discipline_02, $discipline_03, $discipline_06, $discipline_07, $discipline_11,
            $discipline_16, $discipline_20, $discipline_24, $discipline_26, $discipline_27, $discipline_28, $discipline_29, $discipline_30,
            $discipline_31, $discipline_32, $discipline_33, $discipline_34, $discipline_35, $discipline_36, $discipline_37,
            $discipline_38, $discipline_39, $discipline_40, $discipline_41]);

        $dayOfWeeks = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];
        $needsLaboratory = [true, false];
        $teachers = \App\Teacher::all();

        $dc_2012_2_01 = \App\DisciplineClass::addDisciplineClass(2012, 2, $dayOfWeeks[0], $needsLaboratory[array_rand($needsLaboratory)], $discipline_01, $teachers->shuffle()->first()); //w
        $dc_2012_2_05 = \App\DisciplineClass::addDisciplineClass(2012, 2, $dayOfWeeks[1], $needsLaboratory[array_rand($needsLaboratory)], $discipline_05, $teachers->shuffle()->first()); //w
        $dc_2012_2_03 = \App\DisciplineClass::addDisciplineClass(2012, 2, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_03, $teachers->shuffle()->first()); //w

        $dc_2013_1_06 = \App\DisciplineClass::addDisciplineClass(2013, 1, $dayOfWeeks[0], $needsLaboratory[array_rand($needsLaboratory)], $discipline_06, $teachers->shuffle()->first()); //w
        $dc_2013_1_02 = \App\DisciplineClass::addDisciplineClass(2013, 1, $dayOfWeeks[1], $needsLaboratory[array_rand($needsLaboratory)], $discipline_02, $teachers->shuffle()->first()); //w
        $dc_2013_1_08 = \App\DisciplineClass::addDisciplineClass(2013, 1, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_08, $teachers->shuffle()->first()); //w
        $dc_2013_1_07 = \App\DisciplineClass::addDisciplineClass(2013, 1, $dayOfWeeks[0], $needsLaboratory[array_rand($needsLaboratory)], $discipline_07, $teachers->shuffle()->first()); //g

        $dc_2013_2_04 = \App\DisciplineClass::addDisciplineClass(2013, 2, $dayOfWeeks[0], $needsLaboratory[array_rand($needsLaboratory)], $discipline_04, $teachers->shuffle()->first()); //w
        $dc_2013_2_14 = \App\DisciplineClass::addDisciplineClass(2013, 2, $dayOfWeeks[1], $needsLaboratory[array_rand($needsLaboratory)], $discipline_14, $teachers->shuffle()->first()); //w
        $dc_2013_2_23 = \App\DisciplineClass::addDisciplineClass(2013, 2, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_23, $teachers->shuffle()->first()); //w
        $dc_2013_2_06 = \App\DisciplineClass::addDisciplineClass(2013, 2, $dayOfWeeks[0], $needsLaboratory[array_rand($needsLaboratory)], $discipline_06, $teachers->shuffle()->first()); //g
        $dc_2013_2_10 = \App\DisciplineClass::addDisciplineClass(2013, 2, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_10, $teachers->shuffle()->first()); //g
        $dc_2013_2_15 = \App\DisciplineClass::addDisciplineClass(2013, 2, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_15, $teachers->shuffle()->first()); //v

        $dc_2014_1_12 = \App\DisciplineClass::addDisciplineClass(2014, 1, $dayOfWeeks[0], $needsLaboratory[array_rand($needsLaboratory)], $discipline_12, $teachers->shuffle()->first()); //w
        $dc_2014_1_09 = \App\DisciplineClass::addDisciplineClass(2014, 1, $dayOfWeeks[1], $needsLaboratory[array_rand($needsLaboratory)], $discipline_09, $teachers->shuffle()->first()); //w
        $dc_2014_1_15 = \App\DisciplineClass::addDisciplineClass(2014, 1, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_15, $teachers->shuffle()->first()); //w
        $dc_2014_1_04 = \App\DisciplineClass::addDisciplineClass(2014, 1, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_04, $teachers->shuffle()->first()); //g
        $dc_2014_1_17 = \App\DisciplineClass::addDisciplineClass(2014, 1, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_17, $teachers->shuffle()->first()); //v

        $dc_2014_2_11 = \App\DisciplineClass::addDisciplineClass(2014, 2, $dayOfWeeks[0], $needsLaboratory[array_rand($needsLaboratory)], $discipline_11, $teachers->shuffle()->first()); //w
        $dc_2014_2_13 = \App\DisciplineClass::addDisciplineClass(2014, 2, $dayOfWeeks[1], $needsLaboratory[array_rand($needsLaboratory)], $discipline_13, $teachers->shuffle()->first()); //w
        $dc_2014_2_19 = \App\DisciplineClass::addDisciplineClass(2014, 2, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_19, $teachers->shuffle()->first()); //w
        $dc_2014_2_15 = \App\DisciplineClass::addDisciplineClass(2014, 2, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_15, $teachers->shuffle()->first()); //g
        $dc_2014_2_07 = \App\DisciplineClass::addDisciplineClass(2014, 2, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_07, $teachers->shuffle()->first()); //v

        $dc_2015_1_17 = \App\DisciplineClass::addDisciplineClass(2015, 1, $dayOfWeeks[0], $needsLaboratory[array_rand($needsLaboratory)], $discipline_17, $teachers->shuffle()->first()); //w
        $dc_2015_1_10 = \App\DisciplineClass::addDisciplineClass(2015, 1, $dayOfWeeks[1], $needsLaboratory[array_rand($needsLaboratory)], $discipline_10, $teachers->shuffle()->first()); //w
        $dc_2015_1_07 = \App\DisciplineClass::addDisciplineClass(2015, 1, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_07, $teachers->shuffle()->first()); //w
        $dc_2015_1_19 = \App\DisciplineClass::addDisciplineClass(2015, 1, $dayOfWeeks[1], $needsLaboratory[array_rand($needsLaboratory)], $discipline_19, $teachers->shuffle()->first()); //g
        $dc_2015_1_20 = \App\DisciplineClass::addDisciplineClass(2015, 1, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_20, $teachers->shuffle()->first()); //g
        $dc_2015_1_16 = \App\DisciplineClass::addDisciplineClass(2015, 1, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_16, $teachers->shuffle()->first()); //v

        $dc_2015_2_18 = \App\DisciplineClass::addDisciplineClass(2015, 2, $dayOfWeeks[0], $needsLaboratory[array_rand($needsLaboratory)], $discipline_18, $teachers->shuffle()->first()); //w
        $dc_2015_2_25 = \App\DisciplineClass::addDisciplineClass(2015, 2, $dayOfWeeks[1], $needsLaboratory[array_rand($needsLaboratory)], $discipline_25, $teachers->shuffle()->first()); //w
        $dc_2015_2_21 = \App\DisciplineClass::addDisciplineClass(2015, 2, $dayOfWeeks[2], $needsLaboratory[array_rand($needsLaboratory)], $discipline_21, $teachers->shuffle()->first()); //w
        $dc_2015_2_23 = \App\DisciplineClass::addDisciplineClass(2015, 2, $dayOfWeeks[1], $needsLaboratory[array_rand($needsLaboratory)], $discipline_23, $teachers->shuffle()->first()); //g
        $dc_2015_2_22 = \App\DisciplineClass::addDisciplineClass(2015, 2, $dayOfWeeks[0], $needsLaboratory[array_rand($needsLaboratory)], $discipline_22, $teachers->shuffle()->first()); //v

        $walterStudent->addStudentClasses([$dc_2012_2_01, $dc_2012_2_05, $dc_2012_2_03, $dc_2013_1_06, $dc_2013_1_02,
            $dc_2013_1_08, $dc_2013_2_04, $dc_2013_2_14, $dc_2013_2_23, $dc_2014_1_12, $dc_2014_1_09, $dc_2014_1_15,
            $dc_2014_2_11, $dc_2014_2_13, $dc_2014_2_19, $dc_2015_1_17, $dc_2015_1_10, $dc_2015_1_07, $dc_2015_2_18,
            $dc_2015_2_25, $dc_2015_2_21]);

        $gustavoStudent->addStudentClasses([$dc_2012_2_01, $dc_2012_2_05, $dc_2012_2_03, $dc_2013_1_02, $dc_2013_1_08,
            $dc_2013_1_07, $dc_2013_2_14, $dc_2013_2_06, $dc_2013_2_10, $dc_2014_1_12, $dc_2014_1_09, $dc_2014_1_04,
            $dc_2014_2_11, $dc_2014_2_13, $dc_2014_2_15, $dc_2015_1_17, $dc_2015_1_19, $dc_2015_1_20, $dc_2015_2_18,
            $dc_2015_2_23, $dc_2015_2_21]);

        $vitorStudent->addStudentClasses([$dc_2012_2_01, $dc_2012_2_05, $dc_2012_2_03, $dc_2013_1_06, $dc_2013_1_02,
            $dc_2013_1_08, $dc_2013_2_04, $dc_2013_2_14, $dc_2013_2_15, $dc_2014_1_09, $dc_2014_1_12, $dc_2014_1_17,
            $dc_2014_2_07, $dc_2014_2_11, $dc_2014_2_13, $dc_2015_1_10, $dc_2015_1_16, $dc_2015_1_19, $dc_2015_2_21,
            $dc_2015_2_22, $dc_2015_2_23]);

//        2014.1 fiz Disp. Móveis(Não fiz projeto - reprovei), qualquer coisa Walter, tira ele, pois fica em duplicidade.

    }
}
