classDiagram
 usuario --> Tela Login: passa pela  
 Tela Login --> PerfildeCliente: envia  
 Tela Login --> cadastro_clientes: envia 
 consulta --> cancelamento: realiza  
 consulta --> editar : permite 
 consulta --> agendamento : faz o  
 usuario --> consulta: passa pela 
 medico --> consulta 
 usuario --> Triagem : passa pela 
 Triagem --> medico: da o diagnostico ao  
 Tela Login --> consulta: informa  
 medico -->historico: consulta 
 usuario -->historico: consulta 
    class usuario {
        -int Usuario ID
        +String Usuario Nome
        +int Usuario CPF
        +String Tipo Sanguineo
        Prencher_Informacoes()
    }
        
    class medico {
        -int medicoedico ID
        +String medico Nome
        -int medico CPF
        +String medico especializacao
        -String CRM
        +Array local de atendimento
        Realizar_Consulta()
    }
        class consulta {
            -agenda
            -cancelamento_consulta
            -edicao consulta

             Atualizar_Consulta()
        }
            class Triagem {
                +string nome usuario
                +string CPF usuario 
                ChamareAvaliarUsuario() 
            }
            class Tela Login{
                -Login
                -Cadastro
                -DadosImportantes
                FazerLogin()
            }
                class PerfildeCliente{
                    Armazenar_Dados_Importantes()
    

                }
    class cadastro_clientes {
        ArmazenarInformacoes_de_cadastro()
    }
    class historico{
        exibir_Historico_cliente()
    }
    class cancelamento{
        Cancelar_consulta()
    }
    class agendamento{
        Agendar_Consulta()
    }
    class editar{
        Editar_Consultas()
    }
