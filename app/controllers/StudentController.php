<?php
    require_once __DIR__ . '/../core/BaseController.php';
    require_once __DIR__ . '/../core/Database.php';
    require_once __DIR__ . '/../models/Student.php';
//commit
    class StudentController extends BaseController{

        public function index(){
            $this->render('home');
        }

        public function students(){
            $model = new Student();
            $students = $model->all();

            $this->render('students',['students'=>$students]);
        } 

        public function addStudentForm(){
            $this->render('students_add');
        }

        public function storeStudent(){
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $pass = trim($_POST['password'] ?? '');

            if($name !== '' && $email !== '' && $pass !== ''){
                $model = new Student();
                $model->create($name , $email ,$pass);
            }

            header('Location: /students');
            exit;
        }

        public function showStudent(){
            $id = $_GET['id'] ?? null;
            $model = new Student();
            $student = $id ? $model->find($id) : null;

            if(!$id){
                echo "ID is required";
                return;
            }

            if(!$student){
                http_response_code(404);
            }

            $this->render('student' , ['student'=>$student]);
        }
    }
?>