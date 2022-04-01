<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function get_survey_form_data()
    {

        $firstname =  $this->input->post('firstname');
        $secondname = $this->input->post('secondname');
        $email = $this->input->post('email');
        $number = $this->input->post('number');
        $gender = $this->input->post('gender');
        $dropdown = $this->input->post('dropdown');
        $inp = $this->input->post('inp');
        $confirmation = $this->input->post('confirmation');
        $comments = $this->input->post('comments');


        $post = $firstname.$secondname.$email.$number.$gender.$dropdown.$confirmation.$comments;



        $table = 'users';

        $where .= 'firstname, secondname,email,number, gender, dropdown, inp , confirmation, comments';

        $this->db->table($table);
        $this->db->where($where);
        $this->db->post($post);

        redirect('survey-form');

    }


}
