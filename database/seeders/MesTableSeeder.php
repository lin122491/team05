<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;




class MesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRegion(){
        $region=array( 
            '新北市教育部', 
            '臺北市教育部', 
            '桃園市教育部', 
            '臺中市教育部', 
            '臺南市教育部', 
            '高雄市教育部', 
            '宜蘭縣教育部', 
            '新竹縣教育部', 
            '苗栗縣教育部', 
            '彰化縣教育部', 
            '南投縣教育部', 
            '雲林縣教育部', 
            '嘉義縣教育部', 
            '屏東縣教育部', 
            '臺東縣教育部', 
            '花蓮縣教育部', 
            '澎湖縣教育部', 
            '基隆市教育部', 
            '新竹市教育部', 
            '嘉義市教育部', 
            '金門縣教育部', 
         );
        return $region[rand(0,count($region)-1)];
    }
    public function generateUrl(){
        $url=array( 
            'https://www.ntpc.edu.tw/', 
            'https://www.doe.gov.taipei/', 
            'https://www.tyc.edu.tw/', 
            'https://www.tc.edu.tw/', 
            'https://www.tn.edu.tw/', 
            'https://www.kh.edu.tw/', 
            'https://www.ilc.edu.tw/', 
            'https://doe.hcc.edu.tw/doe_front/index.php', 
            'https://www.mlc.edu.tw/System/main/Home/Index.php', 
            'https://education.chcg.gov.tw/00home/index02.aspx', 
            'https://www.ntct.edu.tw/', 
            'https://education.ylc.edu.tw/', 
            'https://www.cyc.edu.tw/', 
            'https://www.ptc.edu.tw/nss/p/index', 
            'https://www.boe.ttct.edu.tw/indexw.php', 
            'https://www.hlc.edu.tw/home/', 
            'https://www.penghu.gov.tw/edu/', 
            'https://www.klcg.gov.tw/tw/education', 
            'https://www.hc.edu.tw/', 
            'https://edu.chiayi.gov.tw/', 
            'https://www.km.edu.tw/ischool/publish_page/0/', 
           
        );
            return $url[rand(0,count($url)-1)];
    }
    
    public function run(){
        for ($i=0; $i<500; $i++) {
            $region = $this->generateRegion();
            $url = $this->generateUrl();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('mes')->insert([
                
                'region' => $region,
                'url' => $url,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    } 
}
