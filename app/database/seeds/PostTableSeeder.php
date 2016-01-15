<?php
 class PostTableSeeder extends Seeder 
 {
 	public function run() 
 	{
 		$user = User::firstOrFail();

 		$post1 = new Post;
 		$post1->user_id = $user->id;
 		$post1->subject = 'Who Stole the Taco?';
 		$post1->body = 'I am the one who has stolen thy taco';
 		$post1->slug_title = Str::slug($post1->subject, $separator = '-');
 		$post1->save();

 		$post2 = new Post;
 		$post2->user_id = $user->id;
 		$post2->subject = 'Who is that man?';
 		$post2->body = 'I am the man';
 		$post2->slug_title = Str::slug($post2->subject, $separator = '-');
 		$post2->save();

 		$post3 = new Post;
 		$post3->user_id = $user->id;
 		$post3->subject = 'Hello?';
 		$post3->body = 'Hello';
 		$post3->slug_title = Str::slug($post3->subject, $separator = '-');
 		$post3->save();

 		$post4 = new Post;
 		$post4->user_id = $user->id;
 		$post4->subject = 'Why are my subjects longer than my bodies?';
 		$post4->body = 'I dont know';
 		$post4->slug_title = Str::slug($post4->subject, $separator = '-');
 		$post4->save();

 		$post5 = new Post;
 		$post5->user_id = $user->id;
 		$post5->subject = 'Who now carries the taco?';
 		$post5->body = 'I am the one who now carries thou taco';
 		$post5->slug_title = Str::slug($post5->subject, $separator = '-');
 		$post5->save();
 	}
 }