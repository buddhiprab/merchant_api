<?

class Merchant_Api_Tests
{
    function test_api_get_category_list()
    {
        //set mandatory parameters
        $parameters = array();
        //set your api user id
        $parameters['user_id'] = 'apiuser@example.com';
        $parameters['version'] = '1';
        $parameters['time_stamp'] = date('c');
        //api endpoint
        $parameters['action'] = 'get_category_list';
        $private_key = 'b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        //calculate signature
        $signature = $this->signature($parameters, $private_key);
        //generate an api request id
        $parameters['api_request_id'] = md5(time());
        $parameters['signature'] = $signature;
        //api url
        $url = "http://api.asiadealgroup.com";
        // Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
        // Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . "?" . $queryString);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // Save response to the variable $data
        $data = curl_exec($ch);
        // Close Curl connection
        curl_close($ch);
        echo $data;
    }

    function test_api_get_currency_list()
    {
        $parameters = array();
        $parameters['user_id'] = 'apiuser@example.com';
        $parameters['version'] = '1';
        $parameters['time_stamp'] = date('c');
        $parameters['action'] = 'get_currency_list';
        $private_key = 'b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature = $this->signature($parameters, $private_key);
        $parameters['api_request_id'] = md5(time());
        $parameters['signature'] = $signature;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
// Open cURL connection
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url . "?" . $queryString);
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);

// Close Curl connection
        curl_close($ch);
        echo $data;
    }

    function test_api_get_offer_language_list()
    {
        $parameters = array();
        $parameters['user_id'] = 'apiuser@example.com';
        $parameters['version'] = '1';
        $parameters['time_stamp'] = date('c');
        $parameters['action'] = 'get_offer_language_list';
        $private_key = 'b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature = $this->signature($parameters, $private_key);
        $parameters['api_request_id'] = md5(time());
        $parameters['signature'] = $signature;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);

// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . "?" . $queryString);
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
// Close Curl connection
        curl_close($ch);
        echo $data;
    }

    function test_api_create_single_offer(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='create_offer';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        $offer=new stdClass();
        $offer->name="test deal - single offer";
        $offer->tagline="test tagline";
        $offer->category_id="205";
        $offer->price="10.4";
        $offer->value="13";
        $offer->available_qty="16";
        $offer->min_qty="0";
        $offer->max_qty="4";
        $offer->lot_size="2";
        $offer->offer_description="This Universal Elastic Chair Cover free, elastic, fit for many chairs. It available in 11 colors.<br><br><b><u>The Specifics:<br></u></b>- Material: 100% High Quality Polyester / Spandex<br>- Application: Home decor<br>- Size: free, elastic, fit for many chairs<br>- Color available: black, champagne, coffee, dark purple, gold, light purple, red, rose, royal blue, sky blue, burgundy<br><br><b><u>What's in the box:<br></u></b>- 1x Universal Elastic Chair Cover<div><br></div><div style='text-align: center;'><img src='http://www.freedigitalphotos.net/images/img/homepage/87357.jpg' width='400'><br></div><div style='text-align: center;'><br></div><div style='text-align: center;'><img src='http://www.imagenspng.com.br/wp-content/uploads/2015/02/small-super-mario.png' width='400'><br></div><div style='text-align: center;'><br></div>";
        $offer->merchant_fee="6";
        $offer->merchant_fee_currency="SGD";
        $offer->image_1="https://lh3.googleusercontent.com/C3kWbhDYJMFm5hDBzZFrU0J-vx-mAr18jzQKUiMuyiCkH9bloWXVdBBgx9yEMuYR6A=h900";
        $offer->image_2="https://c1.staticflickr.com/1/751/21642985766_73dc62fc53_o.jpg";
        $offer->image_3="https://upload.wikimedia.org/wikipedia/en/thumb/8/83/Brahmaputra_River.JPEG.jpg/640px-Brahmaputra_River.JPEG.jpg";
        $offer->image_4="http://mail.rsgc.on.ca/~ldevir/ICS3U/Chapter4/Images/tux.png";
        $highlights=array();
        $highlights[]='Total Duration: Approx. 70mins';
        $highlights[]='Restore fullness & suppleness to your bust';
        $highlights[]='Safe & effective proven Technology';
        $highlights[]='Best Bust Firming Treatment';
        $offer->highlights=$highlights;
        $conditions=array();
        $conditions[]='<b>Redemption period: 14 September 2016 - 14 December 2016</b>';
        $conditions[]='Redemption is strictly by appointment only. Please call hotline <b>@ Palais Renaissance (6738 8441) / Orchardgateway (6221 6612)/ Bugis (6238 0500)</b>to book you appointment in advance and quote StreetDeal.';
        $offer->conditions=$conditions;
        $offer->supplier_reference="jjj";
        $offer->offer_language="English";
        $offer->area_ids="1,2";
        $offer->brand_ids="1,2";
        $offer->colour_ids="1,2";
        $offer->delivery="0";

        $offer_json=json_encode($offer);
        $post_data=array();
        $post_data['offer']=$offer_json;
        $post_data_str = http_build_query($post_data, '', '&', PHP_QUERY_RFC3986);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$queryString.'&'.$post_data_str);//option
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);

// Close Curl connection
        curl_close($ch);
        echo $data;
    }

    function test_api_create_single_offer_with_options(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='create_offer';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        $offer=new stdClass();
        $offer->name="test deal";
        $offer->main_name="test deal main name";
        $offer->tagline="test tagline";
        $offer->category_id="205";
        $offer->price="10.4";
        $offer->value="13";
        $offer->available_qty="16";
        $offer->min_qty="0";
        $offer->max_qty="4";
        $offer->lot_size="2";
        $offer->offer_description="This Universal Elastic Chair Cover free, elastic, fit for many chairs. It available in 11 colors.<br><br><b><u>The Specifics:<br></u></b>- Material: 100% High Quality Polyester / Spandex<br>- Application: Home decor<br>- Size: free, elastic, fit for many chairs<br>- Color available: black, champagne, coffee, dark purple, gold, light purple, red, rose, royal blue, sky blue, burgundy<br><br><b><u>What's in the box:<br></u></b>- 1x Universal Elastic Chair Cover<div><br></div><div style='text-align: center;'><img src='http://www.freedigitalphotos.net/images/img/homepage/87357.jpg' width='400'><br></div><div style='text-align: center;'><br></div><div style='text-align: center;'><img src='http://www.imagenspng.com.br/wp-content/uploads/2015/02/small-super-mario.png' width='400'><br></div><div style='text-align: center;'><br></div>";
        $offer->merchant_fee="6";
        $offer->merchant_fee_currency="SGD";
        $offer->image_1="https://lh3.googleusercontent.com/C3kWbhDYJMFm5hDBzZFrU0J-vx-mAr18jzQKUiMuyiCkH9bloWXVdBBgx9yEMuYR6A=h900";
        $offer->image_2="https://c1.staticflickr.com/1/751/21642985766_73dc62fc53_o.jpg";
        $offer->image_3="https://upload.wikimedia.org/wikipedia/en/thumb/8/83/Brahmaputra_River.JPEG.jpg/640px-Brahmaputra_River.JPEG.jpg";
        $offer->image_4="http://mail.rsgc.on.ca/~ldevir/ICS3U/Chapter4/Images/tux.png";
        $highlights=array();
        $highlights[]='Total Duration: Approx. 70mins';
        $highlights[]='Restore fullness & suppleness to your bust';
        $highlights[]='Safe & effective proven Technology';
        $highlights[]='Best Bust Firming Treatment';
        $offer->highlights=$highlights;
        $conditions=array();
        $conditions[]='<b>Redemption period: 14 September 2016 - 14 December 2016</b>';
        $conditions[]='Redemption is strictly by appointment only. Please call hotline <b>@ Palais Renaissance (6738 8441) / Orchardgateway (6221 6612)/ Bugis (6238 0500)</b>to book you appointment in advance and quote StreetDeal.';
        $offer->conditions=$conditions;
        $offer->supplier_reference="jjj";
        $offer->offer_language="English";
        $offer->area_ids="1,2";
        $offer->brand_ids="1,2";
        $offer->colour_ids="1,2";
        $offer->delivery="1";
        $op=new stdClass();
        $op->option_name="black";
        $op->max_qty="10";
        $op->supplier_reference="jjj1";
        $op2=new stdClass();
        $op2->option_name="white";
        $op2->max_qty="11";
        $op2->supplier_reference="jjj2";
        $offer->offer_options=array();
        $offer->offer_options[]=$op;
        $offer->offer_options[]=$op2;
        $offer_json=json_encode($offer);
        $post_data=array();
        $post_data['offer']=$offer_json;
        $post_data_str = http_build_query($post_data, '', '&', PHP_QUERY_RFC3986);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$queryString.'&'.$post_data_str);//option
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);

// Close Curl connection
        curl_close($ch);
        echo $data;
    }
    function test_api_create_offer_with_child_offers(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='create_offer';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        $offer=new stdClass();
        $offer->name="test deal - offer with child offers";
        $offer->main_name="test deal main name";
        $offer->tagline="test tagline";
        $offer->category_id="205";
        $offer->price="10.4";
        $offer->value="13";
        $offer->available_qty="16";
        $offer->min_qty="0";
        $offer->max_qty="4";
        $offer->lot_size="2";
        $offer->offer_description="This Universal Elastic Chair Cover free, elastic, fit for many chairs. It available in 11 colors.<br><br><b><u>The Specifics:<br></u></b>- Material: 100% High Quality Polyester / Spandex<br>- Application: Home decor<br>- Size: free, elastic, fit for many chairs<br>- Color available: black, champagne, coffee, dark purple, gold, light purple, red, rose, royal blue, sky blue, burgundy<br><br><b><u>What's in the box:<br></u></b>- 1x Universal Elastic Chair Cover<div><br></div><div style='text-align: center;'><img src='http://www.freedigitalphotos.net/images/img/homepage/87357.jpg' width='400'><br></div><div style='text-align: center;'><br></div><div style='text-align: center;'><img src='http://www.imagenspng.com.br/wp-content/uploads/2015/02/small-super-mario.png' width='400'><br></div><div style='text-align: center;'><br></div>";
        $offer->merchant_fee="6";
        $offer->merchant_fee_currency="SGD";
        $offer->image_1="https://lh3.googleusercontent.com/C3kWbhDYJMFm5hDBzZFrU0J-vx-mAr18jzQKUiMuyiCkH9bloWXVdBBgx9yEMuYR6A=h900";
        $offer->image_2="https://c1.staticflickr.com/1/751/21642985766_73dc62fc53_o.jpg";
        $offer->image_3="https://upload.wikimedia.org/wikipedia/en/thumb/8/83/Brahmaputra_River.JPEG.jpg/640px-Brahmaputra_River.JPEG.jpg";
        $offer->image_4="http://mail.rsgc.on.ca/~ldevir/ICS3U/Chapter4/Images/tux.png";
        $highlights=array();
        $highlights[]='Total Duration: Approx. 70mins';
        $highlights[]='Restore fullness & suppleness to your bust';
        $highlights[]='Safe & effective proven Technology';
        $highlights[]='Best Bust Firming Treatment';
        $offer->highlights=$highlights;
        $conditions=array();
        $conditions[]='<b>Redemption period: 14 September 2016 - 14 December 2016</b>';
        $conditions[]='Redemption is strictly by appointment only. Please call hotline <b>@ Palais Renaissance (6738 8441) / Orchardgateway (6221 6612)/ Bugis (6238 0500)</b>to book you appointment in advance and quote StreetDeal.';
        $offer->conditions=$conditions;
        $offer->supplier_reference="jjj";
        $offer->offer_language="English";
        $offer->area_ids="1,2";
        $offer->brand_ids="1,2";
        $offer->colour_ids="1,2";
        $offer->delivery="1";
        $ch_deal=new stdClass();
        $ch_deal->name="test child 1 name";
        $ch_deal->tagline="test child 1 tagline";
        $ch_deal->price="14";
        $ch_deal->value="16";
        $ch_deal->merchant_fee="12";
        $ch_deal->available_qty="11";
        $ch_deal->min_qty="2";
        $ch_deal->max_qty="6";
        $ch_deal->lot_size="2";
        $ch_deal->supplier_reference="jjjc1";
        $highlights=array();
        $highlights[]='Total Duration: Approx. 70mins';
        $highlights[]='Restore fullness & suppleness to your bust';
        $highlights[]='Safe & effective proven Technology';
        $highlights[]='Best Bust Firming Treatment';
        $ch_deal->highlights=$highlights;
        $conditions=array();
        $conditions[]='<b>Redemption period: 14 September 2016 - 14 December 2016</b>';
        $conditions[]='Redemption is strictly by appointment only. Please call hotline <b>@ Palais Renaissance (6738 8441) / Orchardgateway (6221 6612)/ Bugis (6238 0500)</b>to book you appointment in advance and quote StreetDeal.';
        $ch_deal->conditions=$conditions;
        $ch_deal->delivery="1";
        $ch_deal1=new stdClass();
        $ch_deal1->name="test child 2 name";
        $ch_deal1->tagline="test child 2 tagline";
        $ch_deal1->price="15";
        $ch_deal1->value="17";
        $ch_deal1->merchant_fee="13";
        $ch_deal1->available_qty="13";
        $ch_deal1->min_qty="4";
        $ch_deal1->max_qty="8";
        $ch_deal1->lot_size="1";
        $ch_deal1->supplier_reference="jjjc2";
        $highlights=array();
        $highlights[]='Total Duration: Approx. 70mins';
        $highlights[]='Restore fullness & suppleness to your bust';
        $highlights[]='Safe & effective proven Technology';
        $highlights[]='Best Bust Firming Treatment';
        $ch_deal1->highlights=$highlights;
        $conditions=array();
        $conditions[]='<b>Redemption period: 14 September 2016 - 14 December 2016</b>';
        $conditions[]='Redemption is strictly by appointment only. Please call hotline <b>@ Palais Renaissance (6738 8441) / Orchardgateway (6221 6612)/ Bugis (6238 0500)</b>to book you appointment in advance and quote StreetDeal.';
        $ch_deal1->conditions=$conditions;
        $ch_deal1->delivery="1";
        $offer->child_offers=array();
        $offer->child_offers[]=$ch_deal;
        $offer->child_offers[]=$ch_deal1;
        $offer_json=json_encode($offer);
        $post_data=array();
        $post_data['offer']=$offer_json;
        $post_data_str = http_build_query($post_data, '', '&', PHP_QUERY_RFC3986);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$queryString.'&'.$post_data_str);//option
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);

// Close Curl connection
        curl_close($ch);
        echo $data;
    }
    function test_api_create_offer_with_child_offers_and_options(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='create_offer';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        $offer=new stdClass();
        $offer->name="test deal";
        $offer->main_name="test deal main name";
        $offer->tagline="test tagline";
        $offer->category_id="205";
        $offer->price="10.4";
        $offer->value="13";
        $offer->available_qty="16";
        $offer->min_qty="0";
        $offer->max_qty="4";
        $offer->lot_size="2";
        $offer->offer_description="This Universal Elastic Chair Cover free, elastic, fit for many chairs. It available in 11 colors.<br><br><b><u>The Specifics:<br></u></b>- Material: 100% High Quality Polyester / Spandex<br>- Application: Home decor<br>- Size: free, elastic, fit for many chairs<br>- Color available: black, champagne, coffee, dark purple, gold, light purple, red, rose, royal blue, sky blue, burgundy<br><br><b><u>What's in the box:<br></u></b>- 1x Universal Elastic Chair Cover<div><br></div><div style='text-align: center;'><img src='http://www.freedigitalphotos.net/images/img/homepage/87357.jpg' width='400'><br></div><div style='text-align: center;'><br></div><div style='text-align: center;'><img src='http://www.imagenspng.com.br/wp-content/uploads/2015/02/small-super-mario.png' width='400'><br></div><div style='text-align: center;'><br></div>";
        $offer->merchant_fee="6";
        $offer->merchant_fee_currency="SGD";
        $offer->image_1="https://lh3.googleusercontent.com/C3kWbhDYJMFm5hDBzZFrU0J-vx-mAr18jzQKUiMuyiCkH9bloWXVdBBgx9yEMuYR6A=h900";
        $offer->image_2="https://c1.staticflickr.com/1/751/21642985766_73dc62fc53_o.jpg";
        $offer->image_3="https://upload.wikimedia.org/wikipedia/en/thumb/8/83/Brahmaputra_River.JPEG.jpg/640px-Brahmaputra_River.JPEG.jpg";
        $offer->image_4="http://mail.rsgc.on.ca/~ldevir/ICS3U/Chapter4/Images/tux.png";
        $highlights=array();
        $highlights[]='Total Duration: Approx. 70mins';
        $highlights[]='Restore fullness & suppleness to your bust';
        $highlights[]='Safe & effective proven Technology';
        $highlights[]='Best Bust Firming Treatment';
        $offer->highlights=$highlights;
        $conditions=array();
        $conditions[]='<b>Redemption period: 14 September 2016 - 14 December 2016</b>';
        $conditions[]='Redemption is strictly by appointment only. Please call hotline <b>@ Palais Renaissance (6738 8441) / Orchardgateway (6221 6612)/ Bugis (6238 0500)</b>to book you appointment in advance and quote StreetDeal.';
        $offer->conditions=$conditions;
        $offer->supplier_reference="jjj";
        $offer->offer_language="English";
        $offer->area_ids="1,2";
        $offer->brand_ids="1,2";
        $offer->colour_ids="1,2";
        $offer->delivery="1";
        $op=new stdClass();
        $op->option_name="black";
        $op->max_qty="10";
        $op->supplier_reference="jjj1";
        $op2=new stdClass();
        $op2->option_name="white";
        $op2->max_qty="11";
        $op2->supplier_reference="jjj2";
        $offer->offer_options=array();
        $offer->offer_options[]=$op;
        $offer->offer_options[]=$op2;
        $ch_deal=new stdClass();
        $ch_deal->name="test child 1 name";
        $ch_deal->tagline="test child 1 tagline";
        $ch_deal->price="14";
        $ch_deal->value="16";
        $ch_deal->merchant_fee="12";
        $ch_deal->available_qty="11";
        $ch_deal->min_qty="2";
        $ch_deal->max_qty="6";
        $ch_deal->lot_size="2";
        $ch_deal->supplier_reference="jjjc1";
        $highlights=array();
        $highlights[]='Total Duration: Approx. 70mins';
        $highlights[]='Restore fullness & suppleness to your bust';
        $highlights[]='Safe & effective proven Technology';
        $highlights[]='Best Bust Firming Treatment';
        $ch_deal->highlights=$highlights;
        $conditions=array();
        $conditions[]='<b>Redemption period: 14 September 2016 - 14 December 2016</b>';
        $conditions[]='Redemption is strictly by appointment only. Please call hotline <b>@ Palais Renaissance (6738 8441) / Orchardgateway (6221 6612)/ Bugis (6238 0500)</b>to book you appointment in advance and quote StreetDeal.';
        $ch_deal->conditions=$conditions;
        $ch_deal->delivery="1";
        $op=new stdClass();
        $op->option_name="black1";
        $op->max_qty="12";
        $op->supplier_reference="jjjc1op1";
        $op2=new stdClass();
        $op2->option_name="white1";
        $op2->max_qty="14";
        $op2->supplier_reference="jjjc1op2";
        $ch_deal->offer_options=array();
        $ch_deal->offer_options[]=$op;
        $ch_deal->offer_options[]=$op2;
        $ch_deal1=new stdClass();
        $ch_deal1->name="test child 2 name";
        $ch_deal1->tagline="test child 2 tagline";
        $ch_deal1->price="15";
        $ch_deal1->value="17";
        $ch_deal1->merchant_fee="13";
        $ch_deal1->available_qty="13";
        $ch_deal1->min_qty="4";
        $ch_deal1->max_qty="8";
        $ch_deal1->lot_size="1";
        $ch_deal1->supplier_reference="jjjc2";
        $highlights=array();
        $highlights[]='Total Duration: Approx. 70mins';
        $highlights[]='Restore fullness & suppleness to your bust';
        $highlights[]='Safe & effective proven Technology';
        $highlights[]='Best Bust Firming Treatment';
        $ch_deal1->highlights=$highlights;
        $conditions=array();
        $conditions[]='<b>Redemption period: 14 September 2016 - 14 December 2016</b>';
        $conditions[]='Redemption is strictly by appointment only. Please call hotline <b>@ Palais Renaissance (6738 8441) / Orchardgateway (6221 6612)/ Bugis (6238 0500)</b>to book you appointment in advance and quote StreetDeal.';
        $ch_deal1->conditions=$conditions;
        $ch_deal1->delivery="1";
        $op=new stdClass();
        $op->option_name="black1c";
        $op->max_qty="13";
        $op->supplier_reference="jjjc2op1";
        $op2=new stdClass();
        $op2->option_name="white1c";
        $op2->max_qty="15";
        $op2->supplier_reference="jjjc2op2";
        $ch_deal1->offer_options=array();
        $ch_deal1->offer_options[]=$op;
        $ch_deal1->offer_options[]=$op2;
        $offer->child_offers=array();
        $offer->child_offers[]=$ch_deal;
        $offer->child_offers[]=$ch_deal1;
        $offer_json=json_encode($offer);
        $post_data=array();
        $post_data['offer']=$offer_json;
        $post_data_str = http_build_query($post_data, '', '&', PHP_QUERY_RFC3986);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$queryString.'&'.$post_data_str);//option
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);

// Close Curl connection
        curl_close($ch);
        echo $data;
    }
    function test_api_get_area_list(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='get_area_list';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."?".$queryString);
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
// Close Curl connection
        curl_close($ch);
        echo $data;
    }
    function test_api_get_brand_list(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='get_brand_list';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."?".$queryString);
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
// Close Curl connection
        curl_close($ch);
        echo $data;
    }
    function test_api_get_color_list(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='get_color_list';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."?".$queryString);
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
// Close Curl connection
        curl_close($ch);
        echo $data;
    }
    function test_api_get_orders(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='get_orders';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;
        $parameters['redeemed']='no';
        $parameters['order_status']='active';
        $parameters['limit']=100;
        $parameters['offset']=20;
        $parameters['bu_id']=3;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."?".$queryString);
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
// Close Curl connection
        curl_close($ch);
        echo $data;
//        echo '<br>';
    }
    function test_api_get_order(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='get_order';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;
        $parameters['order_id']='1151760';
        $parameters['bu_id']=3;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."?".$queryString);
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
// Close Curl connection
        curl_close($ch);
        echo $data;
    }
    function test_api_get_bu_list(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='get_bu_list';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."?".$queryString);
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
// Close Curl connection
        curl_close($ch);
        echo $data;
    }
    function test_api_update_qty(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='update_qty';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;

        $offer=new stdClass();
        $offer->offer_id=86500;
        $offer->qty=15;
        $offer->bu_id=3;
        $offer_json=json_encode($offer);
        $post_data=array();
        $post_data['offer']=$offer_json;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query(array_merge($parameters,$post_data), '', '&', PHP_QUERY_RFC3986);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$queryString);//option
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);

// Close Curl connection
        curl_close($ch);
        echo $data;
    }
    function test_api_update_price(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='update_price';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;

        $offer=new stdClass();
        $offer->offer_id=86500;
        $offer->qty=15;
        $offer->bu_id=3;
        $offer_json=json_encode($offer);
        $post_data=array();
        $post_data['offer']=$offer_json;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query(array_merge($parameters,$post_data), '', '&', PHP_QUERY_RFC3986);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$queryString);//option
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);

// Close Curl connection
        curl_close($ch);
        echo $data;
    }
    function test_api_redeem(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='redeem';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f8';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
        $redeem=new stdClass();
        $redeem->order_id="559027";
        $redeem->voucher_number="STR532G9S2";
        $redeem->security_code="TQJ";
        $redeem->comment="test redeem";
        $redeem->bu_id="3";
        $redeem_json=json_encode($redeem);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        $post_data=array();
        $post_data['redeem_details']=$redeem_json;
//        echo $redeem_json;
        $post_data_str = http_build_query($post_data, '', '&', PHP_QUERY_RFC3986);
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$queryString.'&'.$post_data_str);//option
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
// Close Curl connection
        curl_close($ch);
        echo $data;
    }
    function test_api_create_brand(){
        $parameters=array();
        $parameters['user_id']='apiuser@example.com';
        $parameters['version']='1';
        $parameters['time_stamp']=date('c');
        $parameters['action']='create_brand';
        $private_key='b8e7ae12510bdfb1812e463a7f086122cf37e4f8';
        $signature=$this->signature($parameters,$private_key);
        $parameters['api_request_id']=md5(time());
        $parameters['signature']=$signature;
        $url = "http://api.asiadealgroup.com";
// Build Query String
        $queryString = http_build_query($parameters, '', '&', PHP_QUERY_RFC3986);
        $brand=new stdClass();
        $brand->name="test brand 1";
        $brand_json=json_encode($brand);
// Open cURL connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        $post_data=array();
        $post_data['brand_details']=$brand_json;
//        echo $redeem_json;
        $post_data_str = http_build_query($post_data, '', '&', PHP_QUERY_RFC3986);
// Save response to the variable $data
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$queryString.'&'.$post_data_str);//option
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
// Close Curl connection
        curl_close($ch);
        echo $data;
    }

    private function signature(array $payload, $private_key)
    {
        ksort($payload);
        $encoded = array();
        foreach ($payload as $name => $value) {
            $encoded[] = rawurlencode($name) . '=' . rawurlencode($value);
        }
        $concatenated = implode('&', $encoded);
        return hash_hmac('sha256', $concatenated, $private_key);
    }
}
