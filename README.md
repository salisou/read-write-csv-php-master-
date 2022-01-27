# Read Write CSV with PHP

Read and Write to CSV file using command PHP


    <?php

    namespace App\Console\Commands;

    use UI\Draw\Path;
    use Illuminate\Http\File;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use Illuminate\Console\Command;

    class SitemapCommand extends Command
    {
        public $data = [];
        public $path = '';
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'generate:sitemap';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Command Will Generate Sitemap SEO Neprix';

        /**
         * Create a new command instance.
         *
         * @return void
         */
        public function __construct()
        {
            parent::__construct();
        }

        /**
         * Execute the console command.
         *
         * @return mixed
         */
        public function handle()
        {   
            $file = fopen("resources/csv/sitemap.csv", 'w');

            $filename = resource_path("csv/seo.csv");

            if (($handle = fopen($filename, 'r')) !== false) 
            {
                while (($data = fgetcsv($handle, 1000, ';')) !== false) 
                {
                    fputcsv($file, $data); 
                }
                fclose($handle);

                fclose($file);

                echo "CSV File Written Successfully!";
            }

        }
    }



Blog Article: [PHP: Read Write CSV](http://blog.chapagain.com.np/php-read-write-csv/)

Import csv 

    _<?php


    namespace App\Services;


    class importcsv
    {
        public function getSeoData(string $url)
        {
            $path = resource_path('csv/seo.csv');

            if (($handle = fopen($path, 'r')) !== false) 
            {
                while (($data = fgetcsv($handle, 1000, ';')) !== false) 
                {
                    if($data[0] === $url)
                    {
                        return [
                            'title' => $data[1],
                            'description' => $data[2],
                            'robots' => $data[5],
                        ];
                    }
                }

                fclose($handle);
            }

        }

    }
