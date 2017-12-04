<?php 
class crawler{
	public $url;
	public $kq;
	public $sql;
	public $tits;
	public $contents;
	public $conn;
	public function __construct()
    {
        $methods = get_class_methods($this);
        // Vòng lặp gọi các hàm
        forEach($methods as $method)
        {
            if($method != '__construct')
            {
                echo $this->{$method}();
            }
            
        }
    }
    function conndb(){	
    	$servername = "localhost";
		$username = "root";
		$password = "";
    	//Kết nối DB
    	$this->conn = new PDO("mysql:host=$servername;dbname=vnx", $username, $password);
    	
    }
	function posturl(){
		if (isset($_POST['geturls'])) {
			$ch = curl_init();	
			curl_setopt($ch,CURLOPT_URL,$this->url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
			ini_set('max_execution_time', 300);
			$this->kq=curl_exec($ch);
			curl_close($ch);
		}
	}

	function showdb(){
		global $sql;
		$sql = $this->conn->prepare("SELECT * FROM post"); 
    		$sql->execute();
	}
	function savedb(){
		if (isset($_POST['save'])) {
		$a = $_POST['savetit'];
		$b = $_POST['savecont'];
		// Lưu thông tin vào db
	    $sql = "INSERT INTO post (tit, con)  VALUES ('$a', '$b')";
	    $this->conn->exec($sql);
	    // quay lại trang chủ
	   	exit(header("Location: http://localhost/oop/test.php"));
	}
	}
	function showpost(){
		if (isset($_POST['geturls'])) {
			$this->url=$_POST['geturls'];
			echo $this->posturl();
		}
	}

}
class swap{
	 function swapurl(){
		$crawler_sources = array ('vnexpress' => 'vnx','vietnamnnet' => 'vnnet');
		if (isset($_POST['swap'])) {
			if($_POST['swap'] == 1){
				$source = 'vnexpress';
			
			}
			else if($_POST['swap'] == 2){
				$source = 'vietnamnnet';
			}
			// khởi tạo trang cần lấy 
			$crawler = new $crawler_sources[$source]();
		}
	}
}
class vnx extends crawler{
	function get_info(){
    	$this->showpost();
    	if (isset($_POST['geturls'])) {
    		global $tit;
    		global $content;
	    	preg_match('/\<h1 class="title_news_detail mb10".*\>(.*)\<\/h1\>/isU', $this->kq, $tit);
			preg_match('/\<article class="content_detail fck_detail width_common block_ads_connect".*\>(.*)\<\/article\>/isU', $this->kq, $content);
			// bóc tách title và content
	    	$this->tits = $tit[1];
	    	$this->contents=$content[1];
    	}
	}
}
class vnnet extends crawler{
	function get_info(){
    	$this->showpost();
    	if (isset($_POST['geturls'])) {
    		global $tit;
    		global $content;
	    	preg_match('/\<h1 class="title".*\>(.*)\<\/h1\>/isU', $this->kq, $tit);
			preg_match('/\<div id="ArticleContent" class="ArticleContent".*\>(.*)\<\/div\>/isU', $this->kq, $content);
			//bóc tách tittle và content
	    	$this->tits = $tit[1];
	    	$this->contents=$content[1];
    	}
	}
}

?>
