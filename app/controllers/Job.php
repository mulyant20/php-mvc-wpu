<?php

class Job extends Controller{
    //Testing
    public function detail($id){
        $data['title'] = "Detail";
        $data['id'] = $id;
        $data['joblist'] = $this->model("job_model")->getJobs($id);
        $this->view('templates/header', $data);
        $this->view('job/detail', $data);
        $this->view('templates/footer');
    }
    public function delete($id){
        $data = "Hello";
        echo "delete";
    }
}