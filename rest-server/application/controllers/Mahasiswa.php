<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Mahasiswa extends RestController {

    public function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Mahasiswa_model', 'mahasiswa');
        $this->methods['index_get']['limit'] = 2;
    }


    public function index_get() {
        $id = $this->get('id');
        if($id) {
        $mahasiswa = $this->mahasiswa->getMahasiswa($id);
    } else {
        $mahasiswa = $this->mahasiswa->getMahasiswa();
        }
        if($mahasiswa) {
            $this->response([
                'status' => true,
                'data' => $mahasiswa
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data not found'
            ], RestController::HTTP_NOT_FOUND);
        }
    }
    
    public function index_delete() {
        $id = $this->delete('id');

        if($id) {
            if($this->mahasiswa->deleteMahasiswa($id) > 0) {
                $this->response([
                    'status' => true,
                    'data' => $id,
                    'message' => 'Delete'
                ], RestController::HTTP_NO_CONTENT);
            } else {
            $this->response([
                'status' => false,
                'message' => 'Id not found'
            ], RestController::HTTP_NOT_FOUND);
            }
        } else {
            $this->response([
                'status' => false,
                'message' => 'Provide an id!'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function index_post() {
        $data = [
            'nrp' => $this->post('nrp'),
            'nama' => $this->post('nama'),
            'email' => $this->post('email'),
            'jurusan' => $this->post('jurusan')
        ];
        var_dump($data);die;
        if($this->mahasiswa->createMahasiswa($data) > 0) {
            $this->response([
                'status' => true,
                'data' => $id,
                'message' => 'New mahasiswa has been created'
            ], RestController::HTTP_CREATED);
        } else {
        $this->response([
            'status' => false,
            'message' => 'Failed to create new data'
        ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function index_put($id) {
        $id = $this->put('id');
        $data = [
            'nrp' => $this->put('nrp'),
            'nama' => $this->put('nama'),
            'email' => $this->put('email'),
            'jurusan' => $this->put('jurusan')
        ];
        
        if($this->mahasiswa->updateMahasiwa($id, $data) > 0) {
            $this->response([
                'status' => true,
                'data' => $id,
                'message' => 'Data mahasiswa has been updated'
            ], RestController::HTTP_NO_CONTENT);
        } else {
        $this->response([
            'status' => false,
            'message' => 'Failed to update data'
        ], RestController::HTTP_NOT_FOUND);
        }

    }
    
    // public function users_get()
    // {
    //     // Users from a data store e.g. database
    //     $users = [
    //         ['id' => 0, 'name' => 'John', 'email' => 'john@example.com'],
    //         ['id' => 1, 'name' => 'Jim', 'email' => 'jim@example.com'],
    //     ];

    //     $id = $this->get( 'id' );

    //     if ( $id === null )
    //     {
    //         // Check if the users data store contains users
    //         if ( $users )
    //         {
    //             // Set the response and exit
    //             $this->response( $users, 200 );
    //         }
    //         else
    //         {
    //             // Set the response and exit
    //             $this->response( [
    //                 'status' => false,
    //                 'message' => 'No users were found'
    //             ], 404 );
    //         }
    //     }
    //     else
    //     {
    //         if ( array_key_exists( $id, $users ) )
    //         {
    //             $this->response( $users[$id], 200 );
    //         }
    //         else
    //         {
    //             $this->response( [
    //                 'status' => false,
    //                 'message' => 'No such user found'
    //             ], 404 );
    //         }
    //     }
    // }
}