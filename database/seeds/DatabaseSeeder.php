<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        DB::insert('insert into produtos(descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array('Arroz', 10, 11.99,'2018-12-01'));
        DB::insert('insert into produtos(descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array('Feijão', 35, 3.99, '2018-10-30'));
        DB::insert('insert into produtos(descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array('Açucar', 20, 4.99, '2018-10-15'));
        DB::insert('insert into produtos(descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array('Sal', 50, 1.99, '2018-11-25'));
        DB::insert('insert into produtos(descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array('Óleo', 50, 4.99, '2019-11-01'));

    }
}
