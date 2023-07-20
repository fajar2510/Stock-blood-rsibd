<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datamaster extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Master');
    } 

    // FUNCTION USER START
    public function user()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        // Load Model User Role
        $data['user_role'] = $this->Master->getRole();


        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('datamaster/user', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.png',
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role_id' => htmlspecialchars($this->input->post('role', true)),
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Congratulation! user account has been created. </div>');
            redirect('datamaster/user');
        }
    }
    // FUNCTION USER END

    // FUNCTION DOCTOR START
    public function doctor()
    {
       
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
          $data['doctor'] = $this->db->get('doctor')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('specialist', 'Specialist', 'required|trim');
        $this->form_validation->set_rules('contact', 'Contact', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('age', 'Age', 'required|trim');
        $this->form_validation->set_rules('work_unit_office', 'work_unit_office', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Doctor Info';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('datamaster/doctor', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => $this->input->post('name', true),
                'specialist' => $this->input->post('specialist', true),
                'contact' => $this->input->post('contact', true),
                'address' => $this->input->post('address', true),
                'age' => $this->input->post('age', true),
                'work_unit_office' => $this->input->post('work_unit_office', true),
            ];
            // cek jika ada gambar yang akan di upload
            // masih salah dan belum bisa upload gambar
            // cek jika ada gambar yang akan di upload

             $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '5000';
                $config['upload_path']   = './assets/img/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
  
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('datamaster/doctor');
                }
            }

            $this->db->insert('doctor', $data);

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Congratulation! Profile has been added succesfully. </div>');
            redirect('datamaster/doctor');
        }
    }
    // FUNCTION DOCTOR END

    // function blood group start
     public function blood_group()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['blood_group'] = $this->db->get('blood_group')->result_array();

        $this->form_validation->set_rules('group_name', 'Group', 'required|trim');
        $this->form_validation->set_rules('information', 'Info', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Blood Group';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('datamaster/blood_group', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'group_name' => htmlspecialchars($this->input->post('group_name', true)),
                'information' => htmlspecialchars($this->input->post('information', true)),
               

            ];
            $this->db->insert('blood_group', $data);

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Congratulation! Blood Group has been created. </div>');
            redirect('datamaster/blood_group');
        }
    }
    // FUNCTION BLOOD GROUP END

    // FUNCTION PACKAGE START
    public function specific_room()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['specific_room'] = $this->db->get('specific_room')->result_array();

        $this->form_validation->set_rules('room_name', 'Specificroom', 'required|trim');
        $this->form_validation->set_rules('function', 'Function', 'required|trim');
        $this->form_validation->set_rules('type', 'Type', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Room Specific';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('datamaster/specific_room', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'room_name' => htmlspecialchars($this->input->post('room_name', true)),
                'function' => htmlspecialchars($this->input->post('function', true)),
                'type' => htmlspecialchars($this->input->post('type', true)),

            ];
            $this->db->insert('specific_room', $data);

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Congratulation! Room has been created. </div>');
            redirect('datamaster/specific_room');
        }
    }
    // FUNCTION PACKAGE END

    // FUNCTION blood_group problem START
    public function blood_type()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['blood_type'] = $this->db->get('blood_type')->result_array();

        $this->form_validation->set_rules('category_name', 'Category Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Blood Type';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('datamaster/blood_type', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'category_name' => htmlspecialchars($this->input->post('category_name', true)),

            ];
            $this->db->insert('blood_type', $data);

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Congratulation! New Blood Type has been created. </div>');
            redirect('datamaster/blood_type');
        }
    }

    public function pressure()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['blood_pressure'] = $this->db->get('blood_pressure')->result_array();

        $this->form_validation->set_rules('level', 'Level', 'required|trim');
        $this->form_validation->set_rules('details', 'Detail Information', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Blood Pressure Result';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('datamaster/pressure', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'level' => htmlspecialchars($this->input->post('level', true)),
                'details' => htmlspecialchars($this->input->post('details', true)),
               

            ];
            $this->db->insert('blood_pressure', $data);

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Congratulation! Blood Pressure has been created. </div>');
            redirect('datamaster/pressure');
        }
    }

    public function region()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['region'] = $this->db->get('region')->result_array();

        $this->form_validation->set_rules('region_name', 'Region Name', 'required|trim');
        $this->form_validation->set_rules('area', 'Area', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Region';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('datamaster/region', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'region_name' => htmlspecialchars($this->input->post('region_name', true)),
                'area' => htmlspecialchars($this->input->post('area', true)),

            ];
            $this->db->insert('region', $data);

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Congratulation! New Blood Type has been created. </div>');
            redirect('datamaster/region');
        }
    }
    
    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');

        $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Your selected user has succesfully deleted, be carefull for manage data. </div>');
        redirect('datamaster/user');
    }
    public function deleteBloodGroup($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blood_group');

        $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Blood Group has succesfully deleted, be carefull for manage data. </div>');
        redirect('datamaster/blood_group');
    }
    public function deleteBloodType($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blood_type');

        $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Blood type has succesfully deleted, be carefull for manage data. </div>');
        redirect('datamaster/blood_type');
    }
    public function deleteRoom($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('specific_room');

        $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Your selected Room has succesfully deleted, be carefull for manage data. </div>');
        redirect('datamaster/specific_room');
    }
    public function deleteDoctor($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('doctor');

        $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Your selected Doctor has succesfully deleted, be carefull for manage data. </div>');
        redirect('datamaster/doctor');
    }
     public function deleteRegion($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('region');

        $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Your selected Region has succesfully deleted, be carefull for manage data. </div>');
        redirect('datamaster/region');
    }

     public function deletePressure($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blood_pressure');

        $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Your selected Pressure has succesfully deleted, be carefull for manage data. </div>');
        redirect('datamaster/pressure');
    }
      // Function Delete Data Master end


    public function editUser($id)
    { 
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('bio', 'Bio', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('datamaster/edit_user', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name',$id);
            $email = $this->input->post('email',$id);
            $bio = $this->input->post('bio',$id);

            // cek jika ada gambar yang akan di upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2500';
                $config['upload_path']   = './assets/img/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('user');
                }
            }

            $this->db->set('name', $name );
            $this->db->set('bio',$bio );
            
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Your Profile has been updated! </div>');
            redirect('datamaster/editUser');
        }
    }
}