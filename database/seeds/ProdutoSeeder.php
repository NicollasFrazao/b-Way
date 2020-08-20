<?php

use App\Produto;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::insert
        (
            [
                ['nm_produto' => 'Bolacha'],
                ['nm_produto' => 'Leite'],
                ['nm_produto' => 'Arroz'],
                ['nm_produto' => 'Feijão'],
                ['nm_produto' => 'Macarrão'],
                ['nm_produto' => 'Óleo'],
                ['nm_produto' => 'Azeite'],
                ['nm_produto' => 'Tempero'],
                ['nm_produto' => 'Maionese'],
                ['nm_produto' => 'Extrato de tomate'],
                ['nm_produto' => 'Enlatados'],
                ['nm_produto' => 'Farinha'],
                ['nm_produto' => 'Café'],
                ['nm_produto' => 'Chá'],
                ['nm_produto' => 'Atum'],
                ['nm_produto' => 'Sardinha'],
                ['nm_produto' => 'Milho'],
                ['nm_produto' => 'Ervilha'],
                ['nm_produto' => 'Banana'],
                ['nm_produto' => 'Mussarela'],
                ['nm_produto' => 'Tomate'],
                ['nm_produto' => 'Alface'],
                ['nm_produto' => 'Requeijão'],
                ['nm_produto' => 'Cebola'],
                ['nm_produto' => 'Oregano'],
                ['nm_produto' => 'Pimenta do Reino'],
                ['nm_produto' => 'Pimentão'],
                ['nm_produto' => 'Salsa'],
                ['nm_produto' => 'Coentro'],
                ['nm_produto' => 'Batata'],
                ['nm_produto' => 'Batata Doce'],
                ['nm_produto' => 'Mandioca'],
                ['nm_produto' => 'Mandioquinha'],
                ['nm_produto' => 'Brócolis'],
                ['nm_produto' => 'Arroz Integral'],
                ['nm_produto' => 'Farofas'],
                ['nm_produto' => 'Macarrão Integral'],
                ['nm_produto' => 'Leite Desnatado'],
                ['nm_produto' => 'Morango'],
                ['nm_produto' => 'Salsichão'],
                ['nm_produto' => 'Frango'],
                ['nm_produto' => 'Lasanha'],
                ['nm_produto' => 'Pizza'],
                ['nm_produto' => 'Salsicha'],
                ['nm_produto' => 'Petiscos'],
                ['nm_produto' => 'Produtos Para Churrasco'],
                ['nm_produto' => 'Hambúrguer'],
                ['nm_produto' => 'Linguiça'],
                ['nm_produto' => 'Pão de Queijo'],
                ['nm_produto' => 'Batata Palito'],
                ['nm_produto' => 'Pratos Prontos'],
                ['nm_produto' => 'Manteiga'],
                ['nm_produto' => 'Margarina'],
                ['nm_produto' => 'Apresuntado'],
                ['nm_produto' => 'Leite Fermentado'],
                ['nm_produto' => 'Queijo'],
                ['nm_produto' => 'Presunto'],
                ['nm_produto' => 'Mortadela'],
                ['nm_produto' => 'Peito de Frango Defumado'],
                ['nm_produto' => 'Melancia'],
                ['nm_produto' => 'Cenoura'],
                ['nm_produto' => 'Couve'],
                ['nm_produto' => 'Alho'],
                ['nm_produto' => 'Polpas de Frutas Congeladas'],
                ['nm_produto' => 'Vegetais Congelados'],
                ['nm_produto' => 'Abacaxi'],
                ['nm_produto' => 'Manga'],
                ['nm_produto' => 'Maçã'],
                ['nm_produto' => 'Beterraba'],
                ['nm_produto' => 'Couve-flor'],
                ['nm_produto' => 'Repolho'],
                ['nm_produto' => 'Frutas'],
                ['nm_produto' => 'Legumes'],
                ['nm_produto' => 'Verduras'],
                ['nm_produto' => 'Temperos'],
                ['nm_produto' => 'Cebolinha'],
                ['nm_produto' => 'Ervas'],
                ['nm_produto' => 'Picles'],
                ['nm_produto' => 'Destilados'],
                ['nm_produto' => 'Limão'],
                ['nm_produto' => 'Gelo'],
                ['nm_produto' => 'Salgadinhos'],
                ['nm_produto' => 'Sorvetes'],
                ['nm_produto' => 'Farinha de Trigo'],
                ['nm_produto' => 'Fígado'],
                ['nm_produto' => 'Fermento'],
                ['nm_produto' => 'Achocolatados em Pó'],
                ['nm_produto' => 'Vegetais'],
                ['nm_produto' => 'Pão de Forma'],
                ['nm_produto' => 'pão de Cachorro Quente'],
                ['nm_produto' => 'Pão de Hambúrguer'],
                ['nm_produto' => 'Bisnaguinha'],
                ['nm_produto' => 'Biscoitos'],
                ['nm_produto' => 'Massa Pronta Para Bolo'],
                ['nm_produto' => 'Broinha de Milho'],
                ['nm_produto' => 'Pães de Queijo'],
                ['nm_produto' => 'Água'],
                ['nm_produto' => 'Chás Prontos'],
                ['nm_produto' => 'Iogurtes'],
                ['nm_produto' => 'Suco'],
                ['nm_produto' => 'Refrigerante'],
                ['nm_produto' => 'Vitamina'],
                ['nm_produto' => 'Achocolatado'],
                ['nm_produto' => 'Cerveja'],
                ['nm_produto' => 'Vinho'],
                ['nm_produto' => 'Vodka'],
                ['nm_produto' => 'Água Sanitária'],
                ['nm_produto' => 'Desinfetante'],
                ['nm_produto' => 'Detergente'],
                ['nm_produto' => 'Esponja de Aço'],
                ['nm_produto' => 'Sabão em Pó'],
                ['nm_produto' => 'Sabão em Barra'],
                ['nm_produto' => 'Amaciante'],
                ['nm_produto' => 'Alvejante'],
                ['nm_produto' => 'Escovinhas'],
                ['nm_produto' => 'Vassoura'],
                ['nm_produto' => 'Rodo'],
                ['nm_produto' => 'Pano de Chão'],
                ['nm_produto' => 'Pano de Prato'],
                ['nm_produto' => 'Luvas de Borracha'],
                ['nm_produto' => 'Shampoo'],
                ['nm_produto' => 'Condicionador'],
                ['nm_produto' => 'Creme de Pentear'],
                ['nm_produto' => 'Escova de Cabelo'],
                ['nm_produto' => 'Pente'],
                ['nm_produto' => 'Desodorante'],
                ['nm_produto' => 'Lâmina de Barbear'],
                ['nm_produto' => 'Creme Dental'],
                ['nm_produto' => 'Escova de Dentes'],
                ['nm_produto' => 'Enxaguante Bucal'],
                ['nm_produto' => 'Creme Hidratante Para o Corpo'],
                ['nm_produto' => 'Sabonete'],
                ['nm_produto' => 'Papel Higiênico'],
                ['nm_produto' => 'Absorvente'],
                ['nm_produto' => 'Nuggets'],
                ['nm_produto' => 'Carne Moída'],
                ['nm_produto' => 'Sucrilhos'],
                ['nm_produto' => 'Bolinho'],
                ['nm_produto' => 'Coca-Cola'],
                ['nm_produto' => 'Energético'],
                ['nm_produto' => 'Saco de Lixo'],
                ['nm_produto' => 'Pratos Descartaveis'],
                ['nm_produto' => 'Cotonetes'],
                ['nm_produto' => 'Lenço Umidecido'],
                ['nm_produto' => 'Ração de Cachorro'],
                ['nm_produto' => 'Geléias'],
                ['nm_produto' => 'Pilhas'],
                ['nm_produto' => 'Absorventes'],
                ['nm_produto' => 'Gelatina'],
                ['nm_produto' => 'Chicletes'],
                ['nm_produto' => 'Cachaça'],
                ['nm_produto' => 'Peixe'],
                ['nm_produto' => 'Chinelo'],
                ['nm_produto' => 'Fio Dental'],
                ['nm_produto' => 'Algodão'],
                ['nm_produto' => 'Bolo'],
                ['nm_produto' => 'Agua de Coco'],
                ['nm_produto' => 'Isotônico'],
                ['nm_produto' => 'Gatorade'],
                ['nm_produto' => 'Creme de Barbear'],
                ['nm_produto' => 'Preservativos'],
                ['nm_produto' => 'Pá de Lixo'],
                ['nm_produto' => 'Pipoca'],
                ['nm_produto' => 'Carnes'],
                ['nm_produto' => 'Peito de Peru'],
                ['nm_produto' => 'Torta Salgada'],
                ['nm_produto' => 'Limpeza e embelezamento automotivo'],
                ['nm_produto' => 'Cereais'],
                ['nm_produto' => 'Leite Condensado'],
                ['nm_produto' => 'Creme de leite'],
                ['nm_produto' => 'Pão de Alho'],
                ['nm_produto' => 'Palmito'],
                ['nm_produto' => 'Molho de Tomate'],
                ['nm_produto' => 'Chocolate'],
                ['nm_produto' => 'Vinagre'],
                ['nm_produto' => 'Whisky'],
                ['nm_produto' => 'Rúcula'],
                ['nm_produto' => 'Agrião'],
                ['nm_produto' => 'Escarola'],
                ['nm_produto' => 'Maracujá'],
                ['nm_produto' => 'Uva'],
                ['nm_produto' => 'Guardanapo'],
                ['nm_produto' => 'Toalha de Papel'],
                ['nm_produto' => 'Inseticidas'],
                ['nm_produto' => 'Repelente'],
                ['nm_produto' => 'Toalha umedecida'],
                ['nm_produto' => 'Farinha Láctea'],
                ['nm_produto' => 'Leite em Pó'],
                ['nm_produto' => 'Açúcar'],
                ['nm_produto' => 'Adoçante'],
                ['nm_produto' => 'Fralda Descartável'],
                ['nm_produto' => 'Acelga'],
                ['nm_produto' => 'Abacate'],
                ['nm_produto' => 'Kiwi'],
                ['nm_produto' => 'Mamão'],
                ['nm_produto' => 'Melão'],
                ['nm_produto' => 'Laranja'],
                ['nm_produto' => 'Pêssego'],
                ['nm_produto' => 'Pêra'],
                ['nm_produto' => 'Tangerina'],
                ['nm_produto' => 'Abóbora'],
                ['nm_produto' => 'Abobrinha'],
                ['nm_produto' => 'Alcachofra'],
                ['nm_produto' => 'Ovo'],
                ['nm_produto' => 'Vagem'],
                ['nm_produto' => 'Berinjela'],
                ['nm_produto' => 'Goiaba'],
                ['nm_produto' => 'Pepino'],
                ['nm_produto' => 'Cogumelo'],
                ['nm_produto' => 'Espumante'],
                ['nm_produto' => 'Molho Inglês'],
                ['nm_produto' => 'Aguardente']
            ]
        );
    }
}
