<?php

namespace App\Console\Commands;

use App\Product;
use Illuminate\Console\Command;

class productData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add products data to the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        /*$CSVFile = public_path('products.csv');
        if (!file_exists($CSVFile) || !is_readable($CSVFile)) {
        return false;
        }

        $header = null;
        $data   = array();

        if (($handle = fopen($CSVFile, 'r')) !== false) {
        while (($row = fgetcsv($handle, 1000, ',')) !== false) {
        if (!$header) {
        $header = $row;
        } else {
        $data[] = array_combine($header, $row);
        }

        }
        fclose($handle);
        }

        $dataCount = count($data);
        for ($i = 0; $i < $dataCount; $i++) {
        Product::firstOrCreate($data[$i]);
        }*/
        $data['name']        = $this->ask('Please provide product name');
        $data['description'] = $this->ask('Please provide description');
        $data['quantity']    = $this->ask('Please provide quantity');
        Product::firstOrCreate($data);

        echo "Products data added successfully" . "\n";
    }

}
