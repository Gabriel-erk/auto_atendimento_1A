# Documento de Arquitetura

## Histórico de Revisões desde Arquivo

| Data       | Versão | Descrição                | Autor   |
| ---------- | ------ | ------------------------ | --------|
| 20/05/2025 | 1.0    | Versão inicial           | Emanuel |


## 1. Introdução

### 1.1 Finalidade

A finalidade é ser um sistema de *Pronto atendimento* onde o cliente poderá dar entrada no hospital de forma online reservando um espaço na fila, dessa forma, ele receberá uma senha assim facilitando seu acesso sem ter que passar por uma recepção.

### 1.2 Escopo

[Descrição do escopo da arquitetura]

### 1.3 Definições, Acrônimos e Abreviações

[Lista de termos, definições, acrônimos e abreviações utilizados no documento]

## 2. Representação Arquitetural

### 2.1 Modelo Arquitetural

[Descrição do modelo arquitetural escolhido (ex: MVC, Microserviços, etc.)]

### 2.2 Justificativa

[Justificativa para a escolha do modelo arquitetural]

## 3. Metas e Restrições da Arquitetura

### 3.1 Metas

[Lista das metas arquiteturais]

### 3.2 Restrições

[Lista das restrições arquiteturais]

## 4. Visão de Casos de Uso

### 4.1 Diagrama de Casos de Uso

[Diagrama ou referência para o diagrama]

### 4.2 Descrição dos Casos de Uso Significativos

[Descrição dos casos de uso mais importantes para a arquitetura]

## 5. Visão Lógica

### 5.1 Visão Geral

[Descrição geral da organização lógica do sistema]

### 5.2 Pacotes de Design Significativos

[Descrição dos pacotes/módulos principais]

### 5.3 Diagramas de Classes

[Diagramas ou referências para os diagramas]

## 6. Visão de Processos

[Descrição dos processos e threads do sistema]

## 7. Visão de Implantação

### 7.1 Diagrama de Implantação

[Diagrama ou referência para o diagrama]

### 7.2 Descrição dos Nós

[Descrição dos nós de implantação]

## 8. Visão de Implementação

### 8.1 Visão Geral

[Visão geral da implementação]

### 8.2 Camadas

[Descrição das camadas da aplicação]

## 9. Visão de Dados

### 9.1 Modelo de Dados

[Descrição ou referência para o modelo de dados]

## 10. Tamanho e Performance

[Objetivos e restrições de tamanho e performance]

## 11. Qualidade

[Atributos de qualidade e como são atendidos pela arquitetura]

## 12. Princípios SOLID Aplicados
  - Princípio da Responsabilidade Unica: Para atender esse primeiro requisito, nosso diagrama de classes foi estruturado de uma forma que cada classe tenha apenas uma unica função. Para isso, classes grandes com muitas funções foram divididas em classes pequenas que herdaram essas funções delas. 

## 13. Padrões de Design Utilizados
- Espaçamento: Entre os elementos e o fim da tela é de 15 nas laterais, 50 de um elemento maior para o outro (como dos botões para outros grupos de itens)
- Fontes: Usamos a fonte Poppins: Titulo principal 32 | Subtitulo 24 | titulo auxiliar 16 | textos 14 | descrições 12|
- Cores: Utilizamos como base 4 cores (Azul piscina: #46BEBA | Azul escuro #0E4067 | Branco #FFFFFF | Azul claro #ECFAFA |)

>[!TIP]
>Ao longo do desenvolvimento, revise este documento para garantir que a implementação esteja alinhada com a arquitetura planejada. Documente as decisões arquiteturais importantes, incluindo as alternativas consideradas e os motivos da escolha final.
