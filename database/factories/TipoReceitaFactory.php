<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TipoReceitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $receitas = [
            ['tipo_receita' => 'Salário', 'descricao_tipo_receita' => 'Pagamento mensal referente ao trabalho assalariado realizado.'],
            ['tipo_receita' => 'Bônus Anual', 'descricao_tipo_receita' => 'Recebimento de bônus anual baseado em metas atingidas pela equipe.'],
            ['tipo_receita' => 'Freelance', 'descricao_tipo_receita' => 'Pagamento por serviços prestados como freelancer em projetos pontuais.'],
            ['tipo_receita' => 'Aluguel de Imóvel', 'descricao_tipo_receita' => 'Renda obtida com o aluguel de um apartamento no centro da cidade.'],
            ['tipo_receita' => 'Venda de Produtos', 'descricao_tipo_receita' => 'Lucros da venda de produtos artesanais em feiras locais.'],
            ['tipo_receita' => 'Dividendos de Ações', 'descricao_tipo_receita' => 'Recebimento de dividendos por participação acionária em uma empresa de tecnologia.'],
            ['tipo_receita' => 'Investimentos', 'descricao_tipo_receita' => 'Retorno sobre investimentos em fundos de renda fixa e variável.'],
            ['tipo_receita' => 'Royalties de Livro', 'descricao_tipo_receita' => 'Ganhos por direitos autorais de um livro publicado e vendido online.']
        ];
    
        return $this->faker->unique()->randomElement($receitas);
    }
}
