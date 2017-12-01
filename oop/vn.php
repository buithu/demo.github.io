<?php 
class crawler{
	public $url;
	public $kq;
	public $sql;
	public $tits;
	public $contents;
	function posturl(){
		if (isset($_POST['geturls'])) {
			$ch = curl_init();	
			curl_setopt($ch,CURLOPT_URL,$this->url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
			$this->kq=curl_exec($ch);
			curl_close($ch);
		}
		 

	}
	function seturl($url){
		$this->url=$url;
	}
	function showcon(){
		global $sql;
		$conn = new PDO('mysql:host=localhost;dbname=vnx', 'root', '');
		$sql = $conn->prepare("SELECT * FROM post"); 
    	$sql->execute();
	}
	function save(){
	if (isset($_POST['save'])) {
	$a = $_POST['savetit'];
	$b = $_POST['savecont'];
	$conn = new PDO('mysql:host=localhost;dbname=vnx', 'root', '');
    $sql = "INSERT INTO post (tit, con)  VALUES ('$a', '$b')";
    $conn->exec($sql);
   	exit(header("Location: http://localhost/oop/post.php"));
	}
	}
	
}
class vnx extends crawler{
	
	function show(){
		if (isset($_POST['geturls'])) {
		$this->seturl($_POST['geturls']);  
	    echo $this->posturl();
		}
	}
	function settit(){
		
    	$this->show();
    	if (isset($_POST['geturls'])) {
    		global $tit;
    		global $content;
    	preg_match('/\<h1 class="title_news_detail mb10".*\>(.*)\<\/h1\>/isU', $this->kq, $tit);
		preg_match('/\<article class="content_detail fck_detail width_common block_ads_connect".*\>(.*)\<\/article\>/isU', $this->kq, $content);
    	$this->tits = $tit[1];
    	$this->contents=$content[1];
    	
    	}
		
		
		
	}
}




?>
