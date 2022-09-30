<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data=[];
        foreach($this->getUserData() as [$first_name,$last_name,$email,$password,$address,$date_of_birth,$gender,$annual_income,$occupation,$family_type,$Manglik,$is_admin,$p_occupation,$p_family_type,$p_annual_income,$p_Manglik]) {
        	$password=Hash::make($password);
        	$date_of_birth=date('Y-m-d', strtotime($date_of_birth));
        $data[]=['first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'password'=>$password,'date_of_birth'=>$date_of_birth,'gender'=>$gender,'annual_income'=>$annual_income,'occupation'=>$occupation,'family_type'=>$family_type,'Manglik'=>$Manglik,'is_admin'=>$is_admin,'p_occupation'=>$p_occupation,'p_family_type'=>$p_family_type,'p_annual_income'=>$p_annual_income,'p_Manglik'=>$p_Manglik];
       }
    User::insert($data);

    }

    public function getUserData()
    {

        return [
            // ;
            [ 'admin','admin', 'admin@admin.com','admin','adminaddress','22-10-1993','Male','5L-10L','Business','Nuclear family','No','1','Government Job','Nuclear family','','No'],
            ['Jignesh','joshi', 'jignesh@user.com','1234','goregaon','23-09-1992','Male','10L','Private job','Nuclear family','No','0','Government Job','Nuclear family','75 - 150','Yes'],
            ['Maya','jain', 'maya@user.com','12345','goregaon','23-09-1996','Female','10L','Private job','Nuclear family','No','0','Government Job','Nuclear family','75 - 150','Yes']
        ];
    }
}
