# Agência API
## Rotas:
1. Hotel
    * Listar
        * Caminho: host/api/hotel
        * Tipo: POST
        * Resposta:
            * Lista todos os hoteis cadastrados
    * Mostrar
        * Caminho: host/api/hotel/mostrar
        * Tipo: POST
        * Parâmetros:
            * id
        * Resposta:
            * Exibe os dados de um hotel específico
    * Criar
        * Caminho: host/api/hotel/criar
        * Tipo: POST
        * Parâmetros:
            * nome
    * Atualizar
        * Caminho: host/api/hotel/atualizar
        * Tipo: POST
        * Parâmetros:
            * id
            * nome
    * Excluir
        * Caminho: host/api/hotel/excluir
        * Tipo: POST
        * Parâmetros:
            * id
2. Tipo de Quarto
    * Listar
        * Caminho: host/api/tipo_quarto
        * Tipo: POST
        * Resposta:
            * Lista todos os tipos de quarto cadastrados
    * Mostrar
        * Caminho: host/api/tipo_quarto/mostrar
        * Tipo: POST
        * Parâmetros:
            * id
        * Resposta:
            * Exibe os dados de um tipo de quarto específico
    * Criar
        * Caminho: host/api/tipo_quarto/criar
        * Tipo: POST
        * Parâmetros:
            * nome
    * Atualizar
        * Caminho: host/api/tipo_quarto/atualizar
        * Tipo: POST
        * Parâmetros:
            * id
            * nome
    * Excluir
        * Caminho: host/api/tipo_quarto/excluir
        * Tipo: POST
        * Parâmetros:
            * id
3. Moeda
    * Listar
        * Caminho: host/api/moeda
        * Tipo: POST
        * Resposta:
            * Lista todos as moedas cadastradas
    * Mostrar
        * Caminho: host/api/moeda/mostrar
        * Tipo: POST
        * Parâmetros:
            * id
        * Resposta:
            * Exibe os dados de uma moeda específica
    * Criar
        * Caminho: host/api/moeda/criar
        * Tipo: POST
        * Parâmetros:
            * nome
            * cambio
    * Atualizar
        * Caminho: host/api/moeda/atualizar
        * Tipo: POST
        * Parâmetros:
            * id
            * nome
            * cambio
    * Excluir
        * Caminho: host/api/moeda/excluir
        * Tipo: POST
        * Parâmetros:
            * id
4. Modo de Compra
    * Listar
        * Caminho: host/api/modo_compra
        * Tipo: POST
        * Resposta:
            * Lista todos os modos de compra cadastrados
    * Mostrar
        * Caminho: host/api/modo_compra/mostrar
        * Tipo: POST
        * Parâmetros:
            * id
        * Resposta:
            * Exibe um modo de compra específico
    * Criar
        * Caminho: host/api/modo_compra/criar
        * Tipo: POST
        * Parâmetros:
            * nome
            * percentual_aumento
    * Atualizar
        * Caminho: host/api/modo_compra/atualizar
        * Tipo: POST
        * Parâmetros:
            * id
            * nome
            * percentual_aumento
    * Excluir
        * Caminho: host/api/modo_compra/excluir
        * Tipo: POST
        * Parâmetros:
            * id
5. Tarifa
    * Listar
        * Caminho: host/api/tarifa
        * Tipo: POST
        * Resposta:
            * Lista todos as tarifas cadastradas
    * Mostrar
        * Caminho: host/api/tarifa/mostrar
        * Tipo: POST
        * Parâmetros:
            * id
        * Resposta:
            * Exibe os dados de uma tarifa específica
    * Criar
        * Caminho: host/api/tarifa/criar
        * Tipo: POST
        * Parâmetros:
            * tipo_quarto_id
            * hotel_id
            * moeda_id
            * valor
    * Atualizar
        * Caminho: host/api/tarifa/atualizar
        * Tipo: POST
        * Parâmetros:
            * id
            * tipo_quarto_id
            * hotel_id
            * moeda_id
            * valor
    * Excluir
        * Caminho: host/api/tarifa/excluir
        * Tipo: POST
        * Parâmetros:
            * id
6. Margem Lucro
    * Listar
        * Caminho: host/api/margem_lucro
        * Tipo: POST
        * Resposta:
            * Lista todos margens de lucro cadastradas
    * Mostrar
        * Caminho: host/api/margem_lucro/mostrar
        * Tipo: POST
        * Parâmetros:
            * id
        * Resposta:
            * Exibe os dados de uma margem de lucro específica
    * Criar
        * Caminho: host/api/margem_lucro/criar
        * Tipo: POST
        * Parâmetros:
            * modo_compra_id
            * percentual
            * moeda_id
    * Atualizar
        * Caminho: host/api/margem_lucro/atualizar
        * Tipo: POST
        * Parâmetros:
            * id
            * modo_compra_id
            * percentual
            * moeda_id
    * Excluir
        * Caminho: host/api/margem_lucro/excluir
        * Tipo: POST
        * Parâmetros:
            * id
7. Valor Final
    * Listar
        * Caminho: host/api/valor_final
        * Tipo: POST
        * Parâmetros:
            * modo_compra_id
            * moeda_id
            * hotel_id
            * tipo_quarto_id
            * diarias
        * Resposta:
            * Retorna o valor final do hotel de acordo com os parâmetros passados e cadastrados nas outras rotas

**OBS: As tabelas se encontram na pasta database/migrations/ foram criados seeds que estão na pasta database/seeds/**
