<?php
    require_once __DIR__ . '/../core/BaseController.php';
    require_once __DIR__ . '/../core/Database.php';
    require_once __DIR__ . '/../models/Student.php';
    
    class StudentController extends BaseController{

        public function index(){
            $this->render('home');
        }

        public function students(){
            $students = Student::all();

            $this->render('students',compact('students'));
        } 

        public function addStudentForm(){
            $this->render('student_add');
        }

        public function login(){
            $this->render('login');
        }

        public function register(){
            $this->render('register');
        }

        public function storeStudent(){
            $result = Student::create(
                $_POST['nom'],
                $_POST['email'],
                $_POST['password']
            );

            if($result == "Email_exist"){
                $error = "Email deja existe";
                $this->render('student_add' , compact('error'));
                return;
            }

            header('Location: ' .BASE_URL. '/students');
            exit;
        }

        public function showStudent(){
            $id = $_GET['id'] ?? null;
            $student = Student::find($id);

            if(!$id){
                echo "ID is required";
                return;
            }

            if(!$student){
                http_response_code(404);
            }

            $this->render('student' , compact('student'));
        }
    }
?>