<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('projects')->insert([
			[
				'id' => '00000000-0000-0000-0000-000000000001',
				'slug' => 'diner',
				'icon' => '/img/portfolio/cabin.png',
				'name' => 'Diner',
				'location' => 'http://diner.think-knot.com',
				'description' => '',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id' => '00000000-0000-0000-0000-000000000002',
				'slug' => 'gallery',
				'icon' => '/img/portfolio/circus.png',
				'name' => 'Gallery',
				'location' => 'http://gallery.think-knot.com',
				'description' => '',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id' => '00000000-0000-0000-0000-000000000003',
				'slug' => 'cakephp-blog',
				'icon' => '/img/portfolio/cake.png',
				'name' => 'CakePHP Blog',
				'location' => 'http://cakephp-blog.think-knot.com',
				'description' => '',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id' => '00000000-0000-0000-0000-000000000004',
				'slug' => 'laravel-blog',
				'icon' => '/img/portfolio/safe.png',
				'name' => 'Laravel Blog',
				'location' => 'http://blog.think-knot.com',
				'description' => '',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id' => '00000000-0000-0000-0000-000000000005',
				'slug' => 'symfony-blog',
				'icon' => '/img/portfolio/submarine.png',
				'name' => 'Symfony Blog',
				'location' => 'http://symfony-blog.think-knot.com',
				'description' => '',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
		]);
	}
}
