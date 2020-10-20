<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

    private $num_rows = 20;

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('admin/Brands_model');
    }

    public function index($page = 0)
    {
        

        $data = array();
        $head = array();
        $arrSeo = $this->Public_model->getSeo('home');
        $head['title'] = @$arrSeo['title'];
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);
        $all_categories = $this->Public_model->getShopCategories();
        $data['home_categories'] = $this->getHomeCategories($all_categories);
        $data['all_categories'] = $all_categories;
        $data['countQuantities'] = $this->Public_model->getCountQuantities();
        $data['bestSellers'] = $this->Public_model->getbestSellers();
        $data['newProducts'] = $this->Public_model->getNewProducts();
        
   
        $data['Gaming_accessories'] = $this->Public_model->Gaming_accessories();
        
        $data['Game'] = $this->Public_model->Game();

        $data['Console'] = $this->Public_model->Console();
        $data['Feature_console'] = $this->Public_model->feature_console();
        
        $data['Super_deal'] = $this->Public_model->Super_deal();

        $data['Best_Gaming_accessories'] = $this->Public_model->Best_Gaming_accessories();
        $data['Best_game'] = $this->Public_model->Best_Gaming();
      
        $data['Best_console'] = $this->Public_model->Best_Console();

        $data['sliderProducts'] = $this->Public_model->getSliderProducts();
        $data['lastBlogs'] = $this->Public_model->getLastBlogs();
        $data['products'] = $this->Public_model->getProducts($this->num_rows, $page, $_GET);
        $rowscount = $this->Public_model->productsCount($_GET);
        $data['shippingOrder'] = $this->Home_admin_model->getValueStore('shippingOrder');
        $data['showOutOfStock'] = $this->Home_admin_model->getValueStore('outOfStock');
        $data['showBrands'] = $this->Home_admin_model->getValueStore('showBrands');
        $data['brands'] = $this->Brands_model->getBrands();
        $data['links_pagination'] = pagination('home', $rowscount, $this->num_rows);
        $this->render('home', $head, $data);
    }

    /*
     * Used from greenlabel template
     * shop page
     */

    public function shop($page = 0)
    {
        $data = array();
        $head = array();
        $arrSeo = $this->Public_model->getSeo('shop');
        $head['title'] = @$arrSeo['title'];
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);
        $all_categories = $this->Public_model->getShopCategories();
        $data['home_categories'] = $this->getHomeCategories($all_categories);
        $data['all_categories'] = $all_categories;
        $data['showBrands'] = $this->Home_admin_model->getValueStore('showBrands');
        $data['brands'] = $this->Brands_model->getBrands();
        $data['showOutOfStock'] = $this->Home_admin_model->getValueStore('outOfStock');
        $data['shippingOrder'] = $this->Home_admin_model->getValueStore('shippingOrder');
        $data['products'] = $this->Public_model->getProducts($this->num_rows, $page, $_GET);
        $rowscount = $this->Public_model->productsCount($_GET);
        $data['links_pagination'] = pagination('home', $rowscount, $this->num_rows);

        $this->render('shop', $head, $data);
    }

    private function getHomeCategories($categories)
    {

        /*
         * Tree Builder for categories menu
         */

        function buildTree(array $elements, $parentId = 0)
        {
            $branch = array();
            foreach ($elements as $element) {
                if ($element['sub_for'] == $parentId) {
                    $children = buildTree($elements, $element['id']);
                    if ($children) {
                        $element['children'] = $children;
                    }
                    $branch[] = $element;
                }
            }
            return $branch;
        }

        return buildTree($categories);
    }

    /*
     * Called to add/remove quantity from cart
     * If is ajax request send POST'S to class ShoppingCart
     */

    public function manageShoppingCart()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        $this->shoppingcart->manageShoppingCart();
    }


    
    public function WishList(){
            

        if(!$this->input->is_ajax_request()){
            exit('No direct script access allowed');
        }

        $this->shoppingcart->manageWishlist();
    
    }



    /*
     * Called to remove product from cart
     * If is ajax request and send $_GET variable to the class
     */

    
    public function removeFromCart()
    {
        $backTo = $_GET['back-to'];
        $this->shoppingcart->removeFromCart();
        $this->session->set_flashdata('deleted', lang('deleted_product_from_cart'));
        redirect(LANG_URL . '/' . $backTo);
    }

    public function clearShoppingCart()
    {
        $this->shoppingcart->clearShoppingCart();
    }


    public function clearWishlistCart()
    {
        $this->shoppingcart->clearWishlistCart();
    }





    public function viewProduct($id)
    {
        $data = array();
        $head = array();
        $data['product'] = $this->Public_model->getOneProduct($id);
        $data['sameCagegoryProducts'] = $this->Public_model->sameCagegoryProducts($data['product']['shop_categorie'], $id);
        if ($data['product'] === null) {
            show_404();
        }
        $vars['publicDateAdded'] = $this->Home_admin_model->getValueStore('publicDateAdded');
        $this->load->vars($vars);
        $head['title'] = $data['product']['title'];
        $description = url_title(character_limiter(strip_tags($data['product']['description']), 130));
        $description = str_replace("-", " ", $description) . '..';
        $head['description'] = $description;
        $head['keywords'] = str_replace(" ", ",", $data['product']['title']);
        $head['image'] = null;
        if(isset($data['product']['image'])) {
            $head['image'] = base_url('/attachments/shop_images/' . $data['product']['image']);
        }
        $this->render('view_product', $head, $data);
    }


    public function confirmLink($md5)
    {
        if (preg_match('/^[a-f0-9]{32}$/', $md5)) {
            $result = $this->Public_model->confirmOrder($md5);
            if ($result === true) {
                $data = array();
                $head = array();
                $head['title'] = '';
                $head['description'] = '';
                $head['keywords'] = '';
                $this->render('confirmed', $head, $data);
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }

    public function discountCodeChecker()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        $result = $this->Public_model->getValidDiscountCode($_POST['enteredCode']);
        if ($result == null) {
            echo 0;
        } else {
            echo json_encode($result);
        }
    }

    public function sitemap()
    {
        header("Content-Type:text/xml");
        echo '<?xml version="1.0" encoding="UTF-8"?>
                <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        $products = $this->Public_model->sitemap();
        $blogPosts = $this->Public_model->sitemapBlog();

        foreach ($blogPosts->result() as $row1) {
            echo '<url>

      <loc>' . base_url('blog/' . $row1->url) . '</loc>

      <changefreq>monthly</changefreq>

      <priority>0.1</priority>

   </url>';
        }

        foreach ($products->result() as $row) {
            echo '<url>

      <loc>' . base_url($row->url) . '</loc>

      <changefreq>monthly</changefreq>

      <priority>0.1</priority>

   </url>';
        }

        echo '</urlset>';
    }
    
    
    public function category_list($cat_id){
        $data= array();
        $head= array();

        $head['title'] ="Product Category list page";
        $head['description'] = "Product Category Description Page ..!!";
        $data['category_data'] = $this->Public_model->Get_category($cat_id);
        
        // echo "<pre>";
        // var_dump($data['category_data']);
        // die();
        $this->render('category_list',$head,$data);
    }
    
    public function Bundle_offer(){
        
        $data = array();
        $head['title']= "Bundle Offer ";
        $head['description'] = "Bundle offer Nyc Games..!!";
        $data['bundle_offer'] = $this->Public_model->Bundle_offer();
        
        $this->render('bundle_offer',$head,$data);
        
        
    }
    
    
    public function Unboxing_videos(){
        
        $data = array();
        $head['title']= "Unboxing_videos ";
        $head['description'] = "Bundle offer Nyc Games..!!";
        //$data['bundle_offer'] = $this->Public_model->Bundle_offer();
        
        $this->render('Unboxing_videos',$head,$data);
        
        
    }

    public function product_search() {
            
            $product = $this->input->post('title');
            $Cateogry_id = $this->input->post('category_id');
            $SQL ="SELECT products.shop_categorie as category_id,vendors.url as vendor_url, products_translations.description as description, products.id, products.quantity,products.image,products.url,products_translations.price,products_translations.title,products_translations.old_price FROM products left JOIN vendors ON vendors.id=products.vendor_id 
            LEFT JOIN products_translations ON products_translations.for_id =products.id
            WHERE (products_translations.title LIKE '%$product%' OR products_translations.description LIKE '%$product%' OR shop_categorie LIKE '%$product%') AND (products.shop_categorie LIKE '%$Cateogry_id%') AND (visibility=1) AND(products.in_slider=0) ORDER BY ID DESC";
            $query=$this->db->query($SQL);
            $result_product = $query->result_array();
            $head['tittle'] ="Search cateogry and product..!!";
            $head['description'] ="To find ";
            $data['serach_data'] =$result_product;
            $this->render('search_product',$head,$data);
        }



    public function review(){
         
        // if(!$this->session->userdata('logged_in')){
        //     $this->session->set_flashdata('Error', 'PLease login first to submit the review');
        //     redirect(site_url('home'),'refresh');
        // }
        
        $rating = $this->input->post('rating');
        $user_id= $_SESSION['logged_user'];
        $review= $this->input->post('review');
        $product_id = $this->input->post('product_id');

        $review_data= array(
            'rating' => $rating,
            'user_id' => $user_id,
            'product_id' => $product_id,
            'review' => $review
        );

        $rating_data =$this->db->insert('rating' ,$review_data);
        if($rating_data){
            
            $this->session->set_flashdata('success' ,'Your Review has been submitted..!!');
            redirect(site_url('home'),'refresh');

        } else{
            $this->session->set_flashdata('error_message' ,'Something went wrong');
            redirect(site_url('home'),'refresh');
            
        }
    }


}
