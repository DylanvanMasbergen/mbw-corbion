<?php
namespace App\Classes;
use Illuminate\Support\Facades\Log;
use App\ShiftTimes;



class ShiftChecker
{
    private $shifts;
    private $currentTime;
    private $start1;
    private $end1;
    private $start2;
    private $end2;
    private $start3;
    private $end3;

    public function __construct()
    {
        date_default_timezone_set("Europe/Amsterdam");
        $this->shifts = ShiftTimes::all();
        $this->currentTime = date("H:i:s");
        $this->start1 = $this->shifts[0]->startTime;
        $this->end1 = $this->shifts[1]->endTime;
        $this->start2 = $this->shifts[2]->startTime;
        $this->end2 = $this->shifts[3]->endTime;
        $this->start3 = $this->shifts[4]->startTime;
        $this->end3 = $this->shifts[5]->endTime;
    }

    // Check scanned time with shifttimes and return current shift ID
    public function getCurrentShift($scantime)
    {
        if($scantime > $this->start1 && $scantime < $this->end1){
            return $this->shifts[0]->shift;
        }elseif($scantime > $this->start2 && $scantime < $this->end2){
            return $this->shifts[2]->shift;
        }elseif($scantime > $this->start3 && $scantime < $this->end3){
            return $this->shifts[4]->shift;
        }
    }
    // Check current time with shifttimes and return shift ID
    public function getShift()
    {
        if($this->currentTime > $this->start1 && $this->currentTime < $this->end1){
            return $this->shifts[0]->shift;
        }elseif($this->currentTime > $this->start2 && $this->currentTime < $this->end2){
            return $this->shifts[2]->shift;
        }elseif($this->currentTime > $this->start3 && $this->currentTime < $this->end3){
            return $this->shifts[4]->shift;
        }
    }
}