<?php 
    namespace App\Library;
    use Illuminate\Support\Facades\DB;

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
    }
 ?>