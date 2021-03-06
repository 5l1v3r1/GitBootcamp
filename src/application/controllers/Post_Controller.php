<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Post_Controller extends CI_Controller{
	
    public function index(){
       $this->load->view('post');
    }

    public function getAllPosts(){
    	$data = $this->post_Model->getAllPosts();
    	$HTML = "";

    	foreach ($data as $row) {
        $HTML .= '<div class="makale">
                    <div class="makale-resim"><img src="default.gif" alt=""/></div>
                    <h1><a href="#">'. $row["subject"] .'</a></h1>
                    <p>'. $row["content"] .'</p>
                    <div class="makale-alt">10 defa okundu |<a href="#">212 Yorum</a>|<a href="#">Konunun Devamı..</a></div>
                  </div>';
    	}
    	echo $HTML;
    } 

    public function getPostbyCategory($categoryID){
    	$data = $this->post_Model->getPostbyCategory($categoryID);
    	$HTML = "";
    	
    	foreach ($data as $row) {
    		$HTML .= "<tr role=\"row\" class=\"odd\">
                        <td class=\"sorting_1\">" .$row[id]."</td>
                        <td> ". $row["subject"] ."</td>
                        <td> ". $row["content"] ."</td>
                        <td> ". $row["created"] ."</td>
                        <td> ". $row["thread_id"] ."</td>
                        <td> ". $row["user_account_id"] ."</td>
                        <td> ". $row["postStatus"] ."</td>
                        <td> ". $row["status"] ."</td>
                        <td> ". $row["category_id"] ."</td>
                        <td> ". $row["id"] ."</td>
                        <td> ". $row["name"] ."</td>
                        <td> ". $row["description"] ."</td>
                        <td> ". $row["creator"] ."</td>
                        <td> ". $row["created"] ."</td>
                        <td> ". $row["statusID"] ."</td>
                        <td> ". $row["categoryID"] ."</td>
                        <td> ". $row["category_status"] ."</td>
       		    	</tr> ";

    	}
    	echo $HTML;
    }   

    public function getAllCategoryList(){
    	$data = $this->post_Model->getAllCategoryList();
    	$HTML = "";

        foreach ($data as $row) {
        $HTML .= '<a href="#">'. $row["name"] .'</a>
                    <ul>
                        <li class="altBolum"><a href="#">Python</a></li>
                        <li class="altBolum"><a href="#">C++</a></li>
                        <li class="altBolum"><a href="#">PHP</a></li>
                        <li class="altBolum"><a href="#">JavaScript</a></li>
                    </ul>';
    	}
    	echo $HTML;
    }

    public function getAllThreads(){
    	$data = $this->post_Model->getAllThreads();
    	$HTML = "";

    	foreach ($data as $row) {
    		$HTML .= "<tr role=\"row\" class=\"odd\">
			    		<td class=\"sorting_1\">" .$row[id]."</td>
			    		<td> ". $row["subject"] ."</td>
			    		<td> ". $row["created"] ."</td>
			    		<td> ". $row["userAccountID"] ."</td>
			    		<td> ". $row["threadStatus"] ."</td>
			    		<td> ". $row["status"] ."</td>
                        <td> ". $row["category_id"] ."</td>
    		    	</tr> ";
    	}
    	echo $HTML;
    }

     public function getAllThreadsByCategory($CategoryID){
    	$data = $this->post_Model->getAllThreadsByCategory($CategoryID);
    	$HTML = "";

    	foreach ($data as $row) {
    		$HTML .= "<tr role=\"row\" class=\"odd\">
			    		<td class=\"sorting_1\">" .$row[id]."</td>
			    		<td> ". $row["subject"] ."</td>
                        <td> ". $row["content"] ."</td>
			    		<td> ". $row["created"] ."</td>
                        <td> ". $row["thread_id"] ."</td>
			    		<td> ". $row["user_account_id"] ."</td>
			    		<td> ". $row["postStatus"] ."</td> 
                        <td> ". $row["insert_date"] ."</td>
                        <td> ". $row["update_date"] ."</td>
			    		<td> ". $row["status"] ."</td>
                        <td> ". $row["category_id"] ."</td>
                        <td >" .$row[id]."</td>
                        <td> ". $row["subject"] ."</td>
                        <td> ". $row["created"] ."</td>
                        <td> ". $row["UserAccountID"] ."</td>
                        <td> ". $row["threadStatus"] ."</td>
                        <td> ". $row["insert_date"] ."</td>
                        <td> ". $row["update_date"] ."</td>
                        <td> ". $row["status"] ."</td>
                        <td> ". $row["category_id"] ."</td>
                        <td >" .$row[id]."</td>
                        <td> ". $row["name"] ."</td>
                        <td> ". $row["description"] ."</td>
                        <td> ". $row["creator"] ."</td>
                        <td> ". $row["created"] ."</td>
                        <td> ". $row["statusID"] ."</td>
                        <td> ". $row["categoryID"] ."</td>
                        <td> ". $row["insert_date"] ."</td>
                        <td> ". $row["update_date"] ."</td>
                        <td> ". $row["category_status"] ."</td>
                	</tr> ";

    	}
    	echo $HTML;
    }

    public function getAllThreadsByCategoryIrreveland(){
    	$data = $this->post_Model->getAllThreadsByCategoryIrreveland();
    	$HTML = "";

    	foreach ($data as $row) {
    		$HTML .= "<tr role=\"row\" class=\"odd\">
			    		<td class=\"sorting_1\">" .$row[id]."</td>
			    		<td> ". $row["subject"] ."</td>
			    		<td> ". $row["created"] ."</td>
			    		<td> ". $row["userAccountID"] ."</td>
			    		<td> ". $row["threadStatus"] ."</td>
                        <td> ". $row["status"] ."</td>
                        <td> ". $row["category_id"] ."</td>
    		    	</tr> ";

    	}
    	echo $HTML;
    }

    public function getAllThreadsAndCategories(){
        $data = $this->post_Model->getAllThreadsAndCategories();
        $HTML = "";

        foreach ($data as $row) {
            $HTML .= "<tr role=\"row\" class=\"odd\">
                        <td> ". $row["thread"] ."</td>
                        <td> ". $row["categoryID"] ."</td>
                        <td> ". $row["category_name"] ."</td>
                    </tr> ";

        }
        echo $HTML;

    }    
} 
?>
