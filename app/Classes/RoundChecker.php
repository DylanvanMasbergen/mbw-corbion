<?php
namespace App\Classes;
use Illuminate\Support\Facades\Log;
use App\ShiftTimes;
use App\Scanpoint;
use App\ScannedPoint;
use App\ScanRound;
use App\Classes\ShiftChecker;
use App\Employee;

class RoundChecker
{
    private $today;

    function __construct() {
        date_default_timezone_set("Europe/Amsterdam");

        $this->now = date("Y-m-d H:i:s");
        $this->today = date("Y-m-d");
        $this->rounds = ScanRound::all();

        $this->startTimes = [
            '0' => date("Y-m-d 22:00:00", strtotime("yesterday")),
            '1' => date("Y-m-d 02:00:00"),
            '2' => date("Y-m-d 06:00:00"),
            '3' => date("Y-m-d 10:00:00"),
            '4' => date("Y-m-d 14:00:00"),
            '5' => date("Y-m-d 18:00:00"),
        ];
        $this->endTimes = [
            '0' => date("Y-m-d 01:59:59"),
            '1' => date("Y-m-d 05:59:59"),
            '2' => date("Y-m-d 09:59:59"),
            '3' => date("Y-m-d 13:59:59"),
            '4' => date("Y-m-d 17:59:59"),
            '5' => date("Y-m-d 21:59:59"),
        ];
    }
    
    public static function splicer($request)
    {
        $count = 0;
        $scannedPoints;

        foreach($request->input() as $row)
        {
            $exploded = explode(',', $row);
            $scannedPoints[$count] = array( 
                'barcode'  => $exploded[0],
                'time'  =>  substr($exploded[1],2,-1),
                'date' => substr( $exploded[2],1,-1),
             );
            $count++;
        }
        return $scannedPoints;  
    }

    public function ScanroundBuilder($data)
    {
        $employee = $this->findEmployee($data);
        $count = 0;
        foreach($data as $scanpoint)
        {
            $scannedPoints[$count] = array( 
                'barcode'  => $scanpoint['barcode'],
                'time'  => $scanpoint['time'],
                'date' => $scanpoint['date'],
                'scanpoint_id' => $this->getPointID($scanpoint['barcode']),
                'employee_id' => $employee->id,
             );
            $count++;
        }
        $this->putDatabase($scannedPoints);
    }
    public function putDatabase($scannedPoints)
    {
        foreach($scannedPoints as $scannedPoint)
        {
            if($scannedPoint['scanpoint_id'] == null)
            { 
            }
            else{
                $scanned = new Scannedpoint;
                $scanned->scanned_time = $scannedPoint['time'];
                $scanned->scanround_id = 3;
                $scanned->operator_id =  $scannedPoint['employee_id'];
                $scanned->Scanpoint_id = $scannedPoint['scanpoint_id'];
                $scanned->save();
            }
        }
    }

    public function findEmployee($data)
    {
        foreach($data as $scannedcode)
        {
           $code= substr($scannedcode['barcode'] ,-5,1);
           if($code === "E"){
               $id = Employee::findOrFail(1);
               $id = Employee::where('employeecode',  $scannedcode['barcode'])->firstOrFail();
               unset($scannedcode);
               return($id);
           }
        }
    }

    public function getPointID($barcode)
    {
        foreach(Scanpoint::all() as $Scanpoint)
        {
            if($barcode == $Scanpoint->barcode)
            {
                return($Scanpoint->id);
            }
        }
    }

    public function createRound()
    {
        $round = 1;
        $count = 0;
        foreach($this->startTimes as $startTime){
            //echo "Count is " . $count;
            //echo " Start tijd is " . $startTime;
            //echo "<br>";
            if($this->now > $startTime && $this->now < $this->endTimes[$count]){
                $scanRound = ScanRound::firstOrCreate([
                    "day" => $this->today,
                    "round" => $round,
                ],[
                    "start" => $startTime,
                    "end" => $this->endTimes[$count],
                    "shifttime_id" => $round,
                ]);
                return $scanRound->id;
            }
            $count++;
            $round++;
        }
    }
}