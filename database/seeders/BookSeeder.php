<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'user_id' => 1,
                'title' => '数学的思考の構造',
                'due_date' => '2022/12/10',
                'start_date' => '2022/11/20',
                'page' => '300',
                'page_per_day' => '20',
            ],
            [
                'user_id' => 1,
                'title' => 'TOEIC L & R TEST 出る単特急 金のフレーズ',
                'due_date' => '2022/12/01',
                'start_date' => '2022/11/10',
                'page' => '288',
                'page_per_day' => '30',
            ],
            [
                'user_id' => 1,
                'title' => '理系大学受験 化学の新研究',
                'due_date' => '2022/12/10',
                'start_date' => '2022/11/10',
                'page' => '832',
                'page_per_day' => '25',
            ],
            [
                'user_id' => 1,
                'title' => '1冊ですべて身につくHTML ＆ CSSとWebデザイン入門講座',
                'due_date' => '2023/01/15',
                'start_date' => '2022/12/20',
                'page' => '283',
                'page_per_day' => '20',
            ],
            [
                'user_id' => 1,
                'title' => 'Excel VBA塾: 初心者OK！　仕事をマクロで自動化する12のレッスン',
                'due_date' => '2022/12/11',
                'start_date' => '2022/11/15',
                'page' => '400',
                'page_per_day' => '22',
            ],
            [
                'user_id' => 1,
                'title' => 'ビジネスの現場で使えるAI&データサイエンスの全知識',
                'due_date' => '2022/12/25',
                'start_date' => '2022/11/19',
                'page' => '272',
                'page_per_day' => '29',
            ],
            [
                'user_id' => 2,
                'title' => 'DXビジネスモデル 80事例に学ぶ利益を生み出す攻めの戦略',
                'due_date' => '2022/12/10',
                'start_date' => '2022/11/10',
                'page' => '272',
                'page_per_day' => '45',
            ],
            [
                'user_id' => 2,
                'title' => 'ファイナンスへの数学',
                'due_date' => '2022/12/30',
                'start_date' => '2022/11/25',
                'page' => '501',
                'page_per_day' => '15',
            ],
            [
                'user_id' => 2,
                'title' => '折戸の独習物理',
                'due_date' => '2022/12/10',
                'start_date' => '2022/11/10',
                'page' => '448',
                'page_per_day' => '20',
            ],
        ]);
    }
}
