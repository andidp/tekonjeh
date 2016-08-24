<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('answers')->delete();

		$answers = [
			['id' => 1, 'question_id' => 1, 'title' => 'Work hard', 'body' => 'Lorem ipsum dolor sit amet', 'created_at' => new DateTime, 'updated_at' => new DateTime ],
			['id' => 2, 'question_id' => 1,  'title' => 'Work hard', 'body' => 'Lorem ipsum dolor sit amet', 'created_at' => new DateTime, 'updated_at' => new DateTime  ],
			['id' => 3, 'question_id' => 2,  'title' => 'Work hard', 'body' => 'Lorem ipsum dolor sit amet', 'created_at' => new DateTime, 'updated_at' => new DateTime  ],
			['id' => 4, 'question_id' => 2,  'title' => 'Work hard', 'body' => 'Lorem ipsum dolor sit amet', 'created_at' => new DateTime, 'updated_at' => new DateTime  ],
			['id' => 5, 'question_id' => 3,  'title' => 'Work hard', 'body' => 'Lorem ipsum dolor sit amet','created_at' => new DateTime, 'updated_at' => new DateTime  ],
			['id' => 6, 'question_id' => 3,  'title' => 'Work hard', 'body' => 'Lorem ipsum dolor sit amet','created_at' => new DateTime, 'updated_at' => new DateTime  ],
			['id' => 7, 'question_id' => 4,  'title' => 'Work hard', 'body' => 'Lorem ipsum dolor sit amet','created_at' => new DateTime, 'updated_at' => new DateTime  ],
			['id' => 8, 'question_id' => 4,  'title' => 'Work hard', 'body' => 'Lorem ipsum dolor sit amet','created_at' => new DateTime, 'updated_at' => new DateTime  ],
			['id' => 9, 'question_id' => 5,  'title' => 'Work hard', 'body' => 'Lorem ipsum dolor sit amet','created_at' => new DateTime, 'updated_at' => new DateTime  ],
			['id' => 10, 'question_id' => 5,  'title' => 'Work hard', 'body' => 'Lorem ipsum dolor sit amet','created_at' => new DateTime, 'updated_at' => new DateTime  ],
		];

		DB::table('answers')->insert($answers);
    }
}
