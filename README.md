# Read Write CSV with PHP

Read and Write to CSV file using PHP

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
