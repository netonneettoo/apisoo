# Análise, Projeto e Implementação de Sistemas Orientados a Objetos - APISOO
## Auxiliar os alunos no momento da matrícula

### Integrantes (peças boas)

* José Walter de Souza Neto (2012207180)
* Vitor Barros ()
* Paulo Sérgio Vianna (201224142)
* Gustavo Martim de Sousa (2012215117)

### Estrutura do banco de dados (simplificada)

| Tabelas do Laravel | Tabelas do Projeto |
| ------------------ | ------------------:|
| users              | courses            |
| password_resets    | disciplines        |
| migrations         | course_disciplines |
|                    | students           |
|                    | teachers           |
|                    | discipline_classes |
|                    | student_classes    |
|                    | student_courses    |
|                    | pre_registrations  |

### Explicando um pouco sobre o projeto

No início não sabíamos que essa seria fosse um pouco trabalhosa de fazer, mas aprendemos um pouco sobre a estrutura e/ou regras de negócio da uma faculdade.

Não chegamos nem perto de finalizarmos o sistema completo.

Fizemos apenas a parte que nos foi designada a fazer.

> Auxiliar os alunos em suas matrículas.

Todos sabemos que toda rematrícula é um pouco complicada, pois as disciplinas não possuem pré-requisitos.

**Vantagens do sistema:**

1. Disciplinas com pré-requisitos.
2. No período de pré-matrícula o aluno escolhe as disciplinas que quer cursar e no dia que quer cursar. *(Substituindo aquele formulário de pré-matrícula que sempre fizemos)*.

### Fluxo simples

1. No caso de alunos novatos

    1. A Faculdade irá cadastrar o aluno, após ser aprovado no vestibular.
    2. Um email será enviado ao aluno informando sua matrícula e senha.
    3. O aluno fará login no portal do aluno e poderá escolher as disciplinas que irá cursar.
    4. Só estarão disponíveis as disciplinas que não tem pré-requisitos.
    5. A coordenação da faculdade analisará as pré-matrículas de todos os alunos pra ver a necessidade do número de salas, disponibilidade dos professores, etc...
    6. Feito a análise a coordenação entrará em contato com o aluno para informá-lo de que sua pré-matrícula foi aceita como foi feita, no melhor dos casos, ou avisará ao mesmo que sua pré-matrícula foi alterada de acordo com a disponibilidade das turmas.

2. No caso de alunos veteranos

    1. No portal do aluno terá um menu chamado de matrícula 2016.1, por exemplo, pra identificar ao aluno que o mesmo poderá escolher as disciplinas que irá querer cursar no semestre informado.
    2. A coordenação da faculdade analisará as pré-matrículas de todos os alunos pra ver a necessidade do número de salas, disponibilidade dos professores, etc...
    3. Feito a análise a coordenação entrará em contato com o aluno para informá-lo de que sua pré-matrícula foi aceita como foi feita, no melhor dos casos, ou avisará ao mesmo que sua pré-matrícula foi alterada de acordo com a disponibilidade das turmas.

### Observações

Algumas funcionalidades não foram desenvolvidas por conta do escopo do projeto.