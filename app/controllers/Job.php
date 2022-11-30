<?php

class Job extends Controller{
    public function detail($id){
        $data['title'] = "Detail";
        $data['id'] = $id;
        $data['joblist'] = $this->model("job_model")->getJobs($id);
        $this->view('templates/header', $data);
        $this->view('job/detail', $data);
        $this->view('templates/footer');
    }
}