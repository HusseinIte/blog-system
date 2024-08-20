<?php
require_once __DIR__ . '/Model.php';
class Post extends Model
{
    // إنشاء بوست جديد
    public function create($postData)
    {
        $stmt = $this->db->prepare("INSERT INTO posts (title, auther, content) VALUES (:title, :auther, :content)");
        $stmt->bindParam(':title', $postData['title']);
        $stmt->bindParam(':auther', $postData['auther']);
        $stmt->bindParam(':content', $postData['content']);
        return $stmt->execute();
    }

    // قراءة جميع البوستات
    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM posts");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // id قراء بوست بالاعتماد على 
    public function get($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM posts WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // تحديث بيانات بوست
    public function update($postData)
    {
        $stmt = $this->db->prepare("UPDATE posts SET title = :title, auther = :auther, content = :content WHERE id = :id");
        $stmt->bindParam(':id', $postData['id']);
        $stmt->bindParam(':title', $postData['title']);
        $stmt->bindParam(':auther', $postData['auther']);
        $stmt->bindParam(':content', $postData['content']);
        return $stmt->execute();
    }

    // حذف بوست
    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM posts WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
