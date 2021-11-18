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

        public static function newsState($date1, $date2){
            $now = new DateTime("now");
            $date1 = new DateTime($date1);
            $date2 = new DateTime($date2);
            
            if($date1 < $now && $date2 > $now){
                return true;
            }else{
                return false;
            }
        }

        public static function isPublished($date){
            $now = new DateTime();
            $date = new DateTime($date);
            if($date > $now){
                return true;
            }
        }
    }
 ?>