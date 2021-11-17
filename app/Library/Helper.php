<?php 
    namespace App\Library;
    use Illuminate\Support\Facades\DB;
    use DateTime;
    use DateInterval;

    class Helper{
        public static function bloodGroup($id){
            return DB::table('others')
                            ->where('id', $id)
                            ->select('name')
                            ->get();
        }

        public static function bloodDonation($id){
            return DB::table('blood_donations')
                            ->where('blood_donor_id', $id)
                            ->orderBy('date', 'DESC')
                            ->select('date')
                            ->first();
        }

        public static function dayDiff($date1, $lifetime){
            $now = new DateTime("now");
            $date1 = new DateTime($date1);
            $date1 = $date1->add(new DateInterval("P".abs($lifetime)."D"));
            if($date1 > $now){
                return true;
            }else{
                return false;
            }
        }
    }
 ?>