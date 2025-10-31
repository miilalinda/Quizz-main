<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pergunta;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pergunta::create([
            'texto' => 'Qual a função do prime na maquiagem?',
            'opcao_a' => 'Dar cor à pele',
            'opcao_b' => 'Fixar e preparar a pele para a base',
            'opcao_c' => 'Substituir o hidratante',
            'opcao_d' => 'Iluminar o rosto',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual o tipo de base é mais indicado para pele oleosa?',
            'opcao_a' => 'Base cremosa',
            'opcao_b' => 'Base líquida com acabamento luminoso',
            'opcao_c' => 'Base em pó ou matte',
            'opcao_d' => 'Base em bastão hidratante ',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'O que é contorno?',
            'opcao_a' => 'Técnica para escurecer áreas do rosto e definir traços',
            'opcao_b' => 'Ilumminador em pó',
            'opcao_c' => 'Tipo de delineado',
            'opcao_d' => 'Pó translúcido',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Para que serve o corretivo?',
            'opcao_a' => 'Dar brilho ao rosto',
            'opcao_b' => 'Corrigir imperfeições e olheiras',
            'opcao_c' => 'Fixar a maquiagem',
            'opcao_d' => 'Colorir os lábios',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é a ordem correta de aplicação dos produtos?',
            'opcao_a' => 'Base -> Primer -> Corretivo',
            'opcao_b' => 'Primer -> Base -> Corretivo',
            'opcao_c' => 'Corretivo -> Base -> Pó',
            'opcao_d' => 'Primer -> Corretivo -> Base',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual pincel é ideal para aplicar blush?',
            'opcao_a' => 'Pincel chanfrado',
            'opcao_b' => 'Pincel kabuki',
            'opcao_c' => 'Pincel leque',
            'opcao_d' => 'Pincel fino de delinear',
            'resposta_correta' => 'D',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Oque é "baking" na maquiagem?',
            'opcao_a' => 'Técnica para aquecer produtos',
            'opcao_b' => 'Técnica de deixar o pó solto agir sobre o corretivo para selar e iluminar',
            'opcao_c' => 'Aplicar base com esponja molhada',
            'opcao_d' => 'Contornar o rosto com bronzer',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual produto é usado para preencher e definir sobrancelha?',
            'opcao_a' => 'Máscara de cílios',
            'opcao_b' => 'Lápis ou sombra para sobrancelhas',
            'opcao_c' => 'Batom',
            'opcao_d' => 'Iluminador',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Oque é um iluminador?',
            'opcao_a' => 'Produto que matifica a pele',
            'opcao_b' => 'Produto usado para dar brilho e destacar pontos altos do rosto',
            'opcao_c' => 'Corretivo colorido',
            'opcao_d' => 'Tipo de primer',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual dessas opções NÃO é delineado?',
            'opcao_a' => 'Gatinho',
            'opcao_b' => 'Esfumado',
            'opcao_c' => 'Asa dupla',
            'opcao_d' => 'Francês',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Oque é "Setting spray"?',
            'opcao_a' => 'Spray para modelar o cabelo',
            'opcao_b' => 'Spray fixador que ajuda a maquiagem durar mais',
            'opcao_c' => 'Spray para limpar pincéis',
            'opcao_d' => 'Perfume social',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual cor de corretivo é indicado para neutralizar olheiras arroxeadas?',
            'opcao_a' => 'Verde',
            'opcao_b' => 'Amarelo',
            'opcao_c' => 'Salmão ou pêssego',
            'opcao_d' => ' Azul',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual produto é usado para selar a base e o corretivo?',
            'opcao_a' => 'Pó compacto ou pó solto',
            'opcao_b' => 'Primer',
            'opcao_c' => 'Iluminador',
            'opcao_d' => 'Gloss',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Oque é uma "make glow"?',
            'opcao_a' => 'super matte',
            'opcao_b' => 'brilho natural e aparência saudável',
            'opcao_c' => 'Artística e com gliter',
            'opcao_d' => 'Para ser usada em palco',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Objetivo do blush?',
            'opcao_a' => 'Afinar Nariz',
            'opcao_b' => 'Dar aparência corada e saudável ás bochechas',
            'opcao_c' => 'Iluminar a pele',
            'opcao_d' => 'Corrigir imperfeições',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);




    }
}
