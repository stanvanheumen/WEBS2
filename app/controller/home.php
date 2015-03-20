<?php

class Home extends Controller {

	public function index() {
		// Require models
		require_once ('app/model/product.inc.php');
		$this->smart('Home');

		// Database requests
		$products = $this->db->queryArray("SELECT * FROM product LIMIT 9", 'Product');

		$this->smarty->assign('products', $products);

		// Render view
		$this->view('home/index');
	}
	
	public function about() {
		// Require models
		$this->smart('Over ons');

		// Render view
		$this->view('home/about');
	}
	
	public function search() {
		// Require models
		require_once ('app/model/product.inc.php');
		$this->smart('Zoeken');

		// Database requests
		if (isset($_GET['search-query']))
			$products = $this->db->queryArray("SELECT * FROM product WHERE productnaam LIKE '%" . $this->db->escape($_GET['search-query']) . "%'", 'Product');

		$this->smarty->assign('products', $products);
		$this->smarty->assign('amount', count($products));
		$this->smarty->assign('searchquery', $_GET['search-query']);
		// Render view
		$this->view('home/search');
	}

	public function addtocart() {
		$id = $this->db->escape($_POST['value']);

		if (!isset($_SESSION['shoppingcart']))
			$_SESSION['shoppingcart'] = [];

		if (!in_array($id, $_SESSION['shoppingcart'])) 
			array_push($_SESSION['shoppingcart'], $id);

		$this->redirect('/home/account');
	}

	public function removefromcart() {
		if (!isset($_SESSION['shoppingcart']))
			$_SESSION['shoppingcart'] = [];
		$id = $_GET['id'];
		$_SESSION['shoppingcart'] = array_diff($_SESSION['shoppingcart'], array($id));
		$this->redirect('/home/account');
	}
	
	public function assortment() {
		// Require models
		require_once ('app/model/categorie.inc.php');
		require_once ('app/model/product.inc.php');
		$this->smart('Assortiment');

		// Database requests
		$search_category = false;
	
		if (isset($_GET['categorie']) && is_numeric($_GET['categorie']))
			$search_category = $this->db->queryObject("SELECT * FROM categorie WHERE id = '" . $this->db->escape($_GET['categorie']) . "'", 'Categorie');
		
		$categories = $this->db->queryArray("SELECT * FROM categorie ORDER BY naam", 'Categorie');
		
		$category = ($search_category ? $search_category->getNaam () : "Producten");
		
		if($search_category) {
			$producten = $this->db->queryArray("SELECT * FROM product WHERE categorie_id = '" . $this->db->escape($search_category->getId()) . "'", 'Product');
			$this->smarty->assign('products', $producten);
			$this->smarty->assign('last_product', end($producten));
		}
		
		$this->smarty->assign('category', $category);
		$this->smarty->assign('currcategory', $_GET['categorie']);
		$this->smarty->assign('categories', $categories);
		
		// Render view
		$this->view('home/assortment');
	}
	
	public function productdetails() {
		// Require models
		require_once ('app/model/product.inc.php');
		$this->smart('Product Details');

		// Database requests
		$product_id = $_GET['product_id'];
		$product = $this->db->queryObject("SELECT * FROM product WHERE id = '" . $product_id . "'", 'Product');
		
		$this->smarty->assign('product', $product);
		
		// Render view
		$this->view('home/productdetails');
	}
	
	public function register() {
		// Require models
		$this->smart('Registreren'); 

		// Render view
		$this->view('home/register');
	}

	public function register_post() {
		require_once ('app/model/account.inc.php');
		$first_name 	= $this->db->escape($_POST['first_name']);
		$infix_name 	= $this->db->escape($_POST['infix_name']);
		$last_name 		= $this->db->escape($_POST['last_name']);
		$street 		= $this->db->escape($_POST['street']);
		$postal_code 	= $this->db->escape($_POST['postal_code']);
		$place 			= $this->db->escape($_POST['place']);
		$gender			= $this->db->escape($_POST['gender']);
		$number 		= $this->db->escape($_POST['number']);
		$email 			= $this->db->escape($_POST['email']);
		$password 		= $this->getHash($this->db->escape($_POST['password']));
		$acc = $this->db->queryObject("SELECT * FROM account WHERE gebruikersnaam = '$email'", 'Account');
		if($acc != null) {
			$this->redirect('/home/register');
			return;
		}
		$this->db->query("INSERT INTO account VALUES (NULL, 'member', '$email', '$password', '$first_name', '$infix_name', '$last_name', '$street', '$postal_code', '$place', '$number', '$gender')");
		$this->redirect('/home/index');
	}
	
	public function login() {
		// Require models
		$this->smart('Login'); 

		// Render view
		$this->view('home/login');
	}

	public function account() {
		if(!$this->authenticate_check()) {
			$this->redirect('/home/login');
			return;
		}

		// Require models
		require_once ('app/model/product.inc.php');
		$this->smart('Mijn Account');

		$temp = '';

		if (!isset($_SESSION['shoppingcart']))
			$_SESSION['shoppingcart'] = [];

		foreach ($_SESSION['shoppingcart'] as $value) {
			if (end($_SESSION['shoppingcart']) == $value)
				$temp .= $value;
			else 
				$temp .= $value . ' OR ';
		}
		$products = [];
		if (strlen($temp) != 0)
			$products = $this->db->queryArray("SELECT * FROM product WHERE id = $temp", 'Product');

		$this->smarty->assign('products', $products);

		// Render view
		$this->view('home/account');
	}
	
	public function login_post() {
		require_once ('app/model/account.inc.php');

		if (isset($_POST['email']) && isset($_POST['password'])) {
			$username = $this->db->escape($_POST['email']);
			$user = $this->db->queryObject("SELECT * FROM account WHERE gebruikersnaam = '$username'", 'Account');
			if ($user != null && $user->getRankNaam() == 'member') {
				if(password_verify($this->db->escape($_POST['password']), $user->getHash())) {
					$_SESSION['home_authenticated'] = 1;
					$this->redirect('/home/index');
					return;
				}
			}
		}
		$this->redirect('/home/login');
	}

	public function view($view, $data = []) {
		require_once ('app/model/categorie.inc.php');
		require_once ('app/model/product.inc.php');
		
		$categories = $this->db->queryArray('SELECT * FROM categorie ORDER BY naam', 'Categorie');
		$games 		= $this->db->queryArray('SELECT * FROM product WHERE categorie_id = 6 LIMIT 8', 'Product');
		$computers 	= $this->db->queryArray('SELECT * FROM product WHERE categorie_id = 2 LIMIT 8', 'Product');
		$toys 		= $this->db->queryArray('SELECT * FROM product WHERE categorie_id = 7 LIMIT 8', 'Product');
		
		$this->smarty->assign('categories', $categories);
		$this->smarty->assign('games', $games);
		$this->smarty->assign('computers', $computers);
		$this->smarty->assign('toys', $toys);
		$this->smarty->display('app/view/home/partial/header.tpl');
		
		$this->smarty->display('app/view/' . $view . '.tpl');
		
		$this->smarty->display('app/view/home/partial/footer.tpl');
	}

	public function authenticate_check() {
		if(!isset($_SESSION['home_authenticated']) || $_SESSION['home_authenticated'] != 1)
			return false;
		else
			return true;
	}

	public function logout() {
		unset($_SESSION['home_authenticated']);
		$this->redirect('/home/index');
	}

	
}