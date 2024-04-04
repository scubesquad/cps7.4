<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CommonService;
use App\Services\LogService;
use Storage;

class DatabaseBackupController extends Controller
{
    protected $commonService;
    protected $logService;

    public function __construct(CommonService $commonService, LogService $logService){
        parent::__construct();
        $this->middleware(['permission:backup']);
        $this->commonService = $commonService;
        $this->logService = $logService;
    }

    public function backup(){
        return view('backup.view');
    }

    public function getDatabaseBackup(){
        //ENTER THE RELEVANT INFO BELOW
        $mysqlHostName = env('DB_HOST');
        $mysqlUserName = env('DB_USERNAME');
        $mysqlPassword = env('DB_PASSWORD');
        $DbName = env('DB_DATABASE');
        $tables = [];

        $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8", "$mysqlUserName", "$mysqlPassword",array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $get_all_table_query = "SHOW TABLES";
        $statement = $connect->prepare($get_all_table_query);
        $statement->execute();
        $results = $statement->fetchAll();
        foreach($results as $result){
            $tables[] = $result[0];
        }

        $output = '';
        foreach($tables as $table)
        {
            $show_table_query = "SHOW CREATE TABLE " . $table . "";
            $statement = $connect->prepare($show_table_query);
            $statement->execute();
            $show_table_result = $statement->fetchAll();

            foreach($show_table_result as $show_table_row)
            {
                $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
            }
            $select_query = "SELECT * FROM " . $table . "";
            $statement = $connect->prepare($select_query);
            $statement->execute();
            $total_row = $statement->rowCount();

            for($count=0; $count<$total_row; $count++)
            {
                $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
                $table_column_array = array_keys($single_result);
                $table_value_array = array_values($single_result);
                $output .= "\nINSERT INTO $table (";
                $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
                $output .= "'" . implode("','", $table_value_array) . "');\n";
            }
        }

        $domain = \Request::getHost();
        $subdomain = explode('.', $domain);
        // $backupPath = $subdomain[0];
        //$backupPath = '/sjsbbank';
        // check if file not exist create new
        // if(!Storage::disk('public')->exists($backupPath.'/backup')) {

        //     Storage::disk('public')->makeDirectory($backupPath.'/backup', 0775, true); //creates directory

        // }

        // $file_name = Storage::disk('public')->path($backupPath.'/backup'.'/database_backup_on_' . date('d-m-Y_h-i-s') . '.sql');
        $file_name = public_path().'/backup'.'/database_backup_on_' . date('d-m-Y_h-i-s') . '.sql';
        $file_handle = fopen($file_name, 'w+');
        fwrite($file_handle, $output);
        fclose($file_handle);

        // backup log when insert
        $this->logService->insertLog('', 'Database Backup', '', 'backup', [], []);

        return response()->json([
            'status' => 200,
            'message' => 'Database backup successfully in backup directory'
        ]);
      
    }
}
