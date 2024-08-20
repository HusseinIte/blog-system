<?php

require_once __DIR__ . '/../Model/Post.php';
require_once __DIR__ . '/../Validator/PostValidator.php';

$postController = new PostController();
// routing 
$action = $_GET["action"];
switch ($action) {
    case 'index': {
            $postController->index();
        }
        break;
    case 'create': {
            $postController->create();
        }
        break;
    case "delete": {
            $id = $_GET['id'];
            $postController->delete($id);
        }
        break;
    case 'edite': {
            $id = $_GET['id'];
            $postController->edite($id);
        }
        break;
    case 'readmore': {
            $id = $_GET['id'];
            $postController->read($id);
        }
        break;
}

class PostController
{
    private $post;
    public function __construct()
    {
        $this->post = new Post();
    }
    public function index()
    {
        $posts = $this->post->getAll();
        require_once __DIR__ . '/../View/homePage.php';
    }
    public function create()
    {
        $errors = [];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $postData = [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'auther' => $_POST['auther']
            ];
            $validator = new PostValidator($postData);
            $validator->required();
            $errors = $validator->getErrors();
            if (empty($errors)) {
                $this->post->create($postData);
                header('Location:PostController.php?action=index');
            }
        }
        require_once __DIR__ . '/../View/createPost.php';
    }
    public function read($id)
    {
        $post = $this->post->get($id);
        $title = $post['title'];
        $content = $post['content'];
        $auther = $post['auther'];
        require_once __DIR__ . '/../View/viewPost.php';
    }
    public function edite($postId)
    {
        $errors = [];
        $post = $this->post->get($postId);
        // القيم القديمة التي تظهر في الحقول 
        $postData = [
            'title' => $post['title'],
            'auther' => $post['auther'],
            'content' => $post['content']
        ];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // القيم الجديدة 
            $newData = [
                'id' => $postId,
                'title' => $_POST['title'],
                'auther' => $_POST['auther'],
                'content' => $_POST['content']
            ];
            $validator = new PostValidator($newData);
            $validator->required();
            $errors = $validator->getErrors();
            if (empty($errors)) {
                $this->post->update($newData);
                header('Location:PostController.php?action=index');
            }
        }
        require_once __DIR__ . '/../View/editPost.php';
    }
    public function delete($id)
    {
        $this->post->delete($id);
        $this->index();
    }
}
