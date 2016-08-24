<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->delete();

		$questions = [
			['id' => 1, 'title' => 'How to become a best programmer?', 'body' => 'Lorem ipsum dolor sit amet', 'created_at' => new DateTime, 'updated_at' => new DateTime ],
			['id' => 2, 'title' => 'How to become a best writter?', 'body' => 'Lorem ipsum dolor sit amet', 'created_at' => new DateTime, 'updated_at' => new DateTime  ],
			['id' => 3, 'title' => 'How to become a best business manager?', 'body' => 'Lorem ipsum dolor sit amet', 'created_at' => new DateTime, 'updated_at' => new DateTime  ],
			['id' => 4, 'title' => 'How to become a best project manager?', 'body' => 'Lorem ipsum dolor sit amet', 'created_at' => new DateTime, 'updated_at' => new DateTime  ],
			['id' => 5, 'title' => 'How to become a best designer?', 'body' => 'Lorem ipsum dolor sit amet','created_at' => new DateTime, 'updated_at' => new DateTime  ],
		];

		DB::table('questions')->insert($questions);
    }
}
