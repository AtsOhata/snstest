<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('posts')->insert([
            [
                'id' => '1',
                'user_id' => '1',
                'body' => 'あ',
                'created_at' => date('2022-01-01 00:00:03'),
                'updated_at' => date('2022-01-01 00:00:03'),
                'deleted_at' => null,
            ],
            [
                'id' => '2',
                'user_id' => '2',
                'body' => 'あいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえおかきくけこあいうえお',
                'created_at' => date('2022-01-01 00:00:02'),
                'updated_at' => date('2022-01-01 00:00:02'),
                'deleted_at' => null,
            ],
            [
                'id' => '3',
                'user_id' => '3',
                'body' => 'SNS本文',
                'created_at' => date('2022-01-01 00:00:01'),
                'updated_at' => date('2022-01-01 00:00:01'),
                'deleted_at' => null,
            ],
            [
                'id' => '4',
                'user_id' => '1',
                'body' => 'SNS本文だよ',
                'created_at' => date('2021-12-31 23:59:59'),
                'updated_at' => date('2021-12-31 23:59:59'),
                'deleted_at' => null,
            ],
            [
                'id' => '5',
                'user_id' => '2',
                'body' => 'SNS本文試験である',
                'created_at' => date('2022-01-01 00:00:00'),
                'updated_at' => date('2022-01-01 00:00:00'),
                'deleted_at' => null,
            ],
            [
                'id' => '6',
                'user_id' => '3',
                'body' => 'このメッセージが表示されたら報告してね',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
