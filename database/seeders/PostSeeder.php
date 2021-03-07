<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Aenean aliquet sapien',
                'content' => 'Video thumbnail has a link to another HTML page. Categories <span class="tm-text-secondary">do not need</span> any JS. They are just separated HTML pages. Paging is at the bottom to extend the list as long as you want. This can be a large catalog.',
                'video' => 'img/tn-01.jpg',
                'draft' => 0
            ],
            [
                'title' => 'Mauris in odio vel odio',
                'content' => 'You may need TemplateMo for a quick chat or send an email if you have any question about this CSS template. <span class="tm-text-secondary">font-family: "Source Sans Pro", sans-serif; for this template.</span>',
                'video' => 'img/tn-02.jpg',
                'draft' => 0
            ],
            [
                'title' => 'Sagittis sodales enim',
                'content' => 'You are allowed to use this video catalog for your business websites. Please do not make a re-distribution of our template ZIP file on any template collection website.',
                'video' => 'img/tn-03.jpg',
                'draft' => 0
            ],
            [
                'title' => 'Nam tincidunt consectetur',
                'content' => 'You can apply this template for your commercial CMS theme. Nam sem leo, imperdiet non lacinia eget, volutpat ac massa. Donec mattis in velit quis commodo. Cras nec rutrum arcu.',
                'video' => 'img/tn-04.jpg',
                'draft' => 0
            ],
            [
                'title' => 'Praesent posuere rhoncus',
                'content' => 'Duis vulputate nisl metus, eget dapibus nunc ultricies id. Ut augue mauris, varius quis nulla non, sollicitudin consectetur nisl. Donec eget arcu placerat, ullamcorper.',
                'video' => 'img/tn-05.jpg',
                'draft' => 0
            ],
            [
                'title' => 'Turpis massa aliquam',
                'content' => 'Nunc neque risus, ultrices sed luctus at, iaculis at arcu. Pellentesque rutrum velit nec sapien ullamcorper ultrices. Vestibulum lectus risus, laoreet pretium ipsum',
                'video' => 'img/tn-06.jpg',
                'draft' => 0
            ],
            [
                'title' => 'Class aptent taciti sociosqu',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum orci sit amet dignissim rhoncus. Pellentesque pretium faucibus vestibulum.',
                'video' => 'img/tn-07.jpg',
                'draft' => 0
            ],
            [
                'title' => 'Donec ac nisl ul elit',
                'content' => 'Suspendisse in odio congue, lobortis metus sed, venenatis nisl. In dapibus et massa feugiat facilisis. Maecenas venenatis aliquet nulla, a tincidunt erat suscipit eget.',
                'video' => 'img/tn-08.jpg',
                'draft' => 0
            ],
            [
                'title' => 'Sed mattis nisi erat',
                'content' => 'Integer ultricies mi eu aliquet cursus. Nam sem leo, imperdiet non lacinia eget, volutpat ac massa. Donec mattis in velit quis commodo. Cras nec rutrum arcu.',
                'video' => 'img/tn-09.jpg',
                'draft' => 0
            ],
        ];
        DB::table('posts')->insert($data);
    }
}
