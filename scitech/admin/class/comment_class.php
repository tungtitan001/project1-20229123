<?php
// include "../lib/database.php";
// include "../helper/format.php"
?>

<?php
class comment
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this ->db = new Database();
        $this ->fm = new Format();
    }
    public function show_comment(){
        $query = "SELECT * FROM tbl_comment ORDER BY comment_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function show_question(){
        $query = "SELECT * FROM tbl_question ORDER BY question_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function show_answer() {
        $query = "SELECT * FROM tbl_question_answer ORDER BY question_answer_id  DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function show_member(){
        $query = "SELECT * FROM tbl_user ORDER BY userA_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function delete_comment($comment_id){
        $query = "DELETE  FROM tbl_comment WHERE comment_id = '$comment_id'";
        $result = $this -> db ->delete($query);
        return $result;
    }
    public function delete_question($question_id) {
        $query = "DELETE  FROM tbl_question WHERE question_id = '$question_id'";
        $result = $this -> db ->delete($query);
        return $result;
    }
    public function delete_answer($question_answer_id){
        $query = "DELETE  FROM tbl_question_answer WHERE question_answer_id = '$question_answer_id'";
        $result = $this -> db ->delete($query);
        return $result;
    }
    public function insert_member($user_ten,$user_password,$user_img){
        $query = "INSERT INTO tbl_user (user_ten,user_password,user_img) VALUES ('$user_ten','$user_password','$user_img')";
        $result = $this ->db ->insert($query);
        return $result;   
    }
    public function delete_member($userA_id){
        $query = "DELETE  FROM tbl_user WHERE userA_id = '$userA_id'";
        $result = $this -> db ->delete($query);
        return $result;
    }     
}
?>