<?php
class Post extends QueryBuilder
{
    public $newPostStatus = NULL;
    public $updatePostStatus = NULL;

    public function createPost()
    {
        $title = $_POST['post_title'];
        $description = $_POST['post_description'];
        $user_id = $_SESSION['loggedUser']->id;
        $createdAt = date('Y-m-d');

        $sql = "INSERT INTO posts VALUES (NULL, ?, ?, ?, ?)";
        $query = $this->db->prepare($sql);
        $query->execute([$title, $description, $user_id, $createdAt]);

        if ($query) {
            $this->newPostStatus = true;
        } else {
            $this->newPostStatus = false;
        }
    }
    public function deletePost($id)
    {
        $sql = "DELETE FROM posts WHERE id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
    }

    public function updatePost()
    {
        $title = $_POST['post_title'];
        $description = $_POST['post_description'];
        $post_id = $_POST['post_id'];
        $sql = "UPDATE posts SET title=?, description=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $query->execute([$title, $description, $post_id]);
        if ($query) {
            $this->updatePostStatus = true;
        } else {
            $this->updatePostStatus = false;
        }
    }
}
