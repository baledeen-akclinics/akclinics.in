<?php
$important_links = array();
$important_links_ht = array(
['name' => 'Hair Transplant', 'url' => 'https://www.akclinics.in/hair-transplant-in-bangalore/'],
['name' => 'Hair Loss Treatment', 'url' => 'https://www.akclinics.in/hair-loss-treatment-in-bangalore/'],
['name' => 'FUE Hair Transplant', 'url' => 'https://www.akclinics.in/fue-hair-transplant-in-bangalore/'],
['name' => 'FUT Hair Transplant', 'url' => 'https://www.akclinics.in/fut-hair-transplant-in-bangalore/'],
['name' => 'Beard Transplant', 'url' => 'https://www.akclinics.in/beard-transplant-in-bangalore/'],
['name' => 'Revision Hair Transplant', 'url' => 'https://www.akclinics.in/revision-hair-transplant-in-bangalore/'],
['name' => 'PR for Hair Loss Treatment', 'url' => 'https://www.akclinics.in/prp-treatment-for-hair-in-bangalore/'],
['name' => 'Laser Hair Removal', 'url' => 'https://www.akclinics.in/laser-hair-removal-in-bangalore/'],
['name' => 'Acne Treatment', 'url' => 'https://www.akclinics.in/acne-treatment-in-bangalore/'],
['name' => 'Tattoo Removal', 'url' => 'https://www.akclinics.in/tattoo-removal-in-bangalore/'],
['name' => 'Mole Removal', 'url' => 'https://www.akclinics.in/mole-removal-in-bangalore/'],
['name' => 'Pigmentation Treatment', 'url' => 'https://www.akclinics.in/pigmentation-treatment-in-bangalore/'],
['name' => 'Carbon Facial', 'url' => 'https://www.akclinics.in/carbon-peel-treatment-in-bangalore/'],
['name' => 'Botox Treatment', 'url' => 'https://www.akclinics.in/botox-treatment-in-bangalore/'],
['name' => 'Stretch Marks Treatment', 'url' => 'https://www.akclinics.in/stretch-marks-treatment-in-bangalore/'],
                        );
$loc_arr = array('indiranagar','rajaji nagar', 'malleswaram', 'shivaji nagar', 'ulsoor', 'vasanth nagar', 'bellandur', 'whitefield', 'girinagar', 'j p nagar', 'jaya nagar', 'uttarahalli', 'marathahalli', 'anjanapura', 'vijayanagar', 'rajaji nagar', 'kengeri', 'banaswadi', 'kalyan nagar', 'r t nagar', 'koramangala');
$loc_inurl = "";
$location_inpage = "";
$city_inpage = "bangalore";
$req_url = '/' . trim(uri_string(), '/') . '/';
if(stristr($req_url, '/hair-transplant-in-'))
{
    $loc_inurl = str_replace('/hair-transplant-in-', '', $req_url);
    $important_links = $important_links_ht;
}
else if(stristr($req_url, '/prp-treatment-for-hair-in-'))
{
    $loc_inurl = str_replace('/prp-treatment-for-hair-in-', '', $req_url);
    $important_links = array(
['name' => 'Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/hair-transplant-in-bangalore/'],
['name' => 'Hair Loss Treatment in Bangalore', 'url' => 'https://www.akclinics.in/hair-loss-treatment-in-bangalore/'],
['name' => 'FUE Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/fue-hair-transplant-in-bangalore/'],
['name' => 'FUT Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/fut-hair-transplant-in-bangalore/'],
['name' => 'Beard Transplant in Bangalore', 'url' => 'https://www.akclinics.in/beard-transplant-in-bangalore/'],
['name' => 'Revision Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/revision-hair-transplant-in-bangalore/'],
['name' => 'PR for Hair Loss Treatment in Bangalore', 'url' => 'https://www.akclinics.in/prp-treatment-for-hair-in-bangalore/'],
['name' => 'Laser Hair Removal in Bangalore', 'url' => 'https://www.akclinics.in/laser-hair-removal-in-bangalore/'],
['name' => 'Acne Treatment in Bangalore', 'url' => 'https://www.akclinics.in/acne-treatment-in-bangalore/'],
['name' => 'Tattoo Removal in Bangalore', 'url' => 'https://www.akclinics.in/tattoo-removal-in-bangalore/'],
['name' => 'Mole Removal in Bangalore', 'url' => 'https://www.akclinics.in/mole-removal-in-bangalore/'],
['name' => 'Pigmentation Treatment in Bangalore', 'url' => 'https://www.akclinics.in/pigmentation-treatment-in-bangalore/'],
['name' => 'Carbon Facial in Bangalore', 'url' => 'https://www.akclinics.in/carbon-peel-treatment-in-bangalore/'],
['name' => 'Botox Treatment in Bangalore', 'url' => 'https://www.akclinics.in/botox-treatment-in-bangalore/'],
['name' => 'Stretch Marks Treatment in Bangalore', 'url' => 'https://www.akclinics.in/stretch-marks-treatment-in-bangalore/'],
                        );
}
else if(stristr($req_url, '/laser-hair-removal-in-'))
{
    $loc_inurl = str_replace('/laser-hair-removal-in-', '', $req_url);
    $important_links = array(
['name' => 'Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/hair-transplant-in-bangalore/'],
['name' => 'Hair Loss Treatment in Bangalore', 'url' => 'https://www.akclinics.in/hair-loss-treatment-in-bangalore/'],
['name' => 'FUE Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/fue-hair-transplant-in-bangalore/'],
['name' => 'FUT Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/fut-hair-transplant-in-bangalore/'],
['name' => 'Beard Transplant in Bangalore', 'url' => 'https://www.akclinics.in/beard-transplant-in-bangalore/'],
['name' => 'Revision Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/revision-hair-transplant-in-bangalore/'],
['name' => 'PR for Hair Loss Treatment in Bangalore', 'url' => 'https://www.akclinics.in/prp-treatment-for-hair-in-bangalore/'],
['name' => 'Laser Hair Removal in Bangalore', 'url' => 'https://www.akclinics.in/laser-hair-removal-in-bangalore/'],
['name' => 'Acne Treatment in Bangalore', 'url' => 'https://www.akclinics.in/acne-treatment-in-bangalore/'],
['name' => 'Tattoo Removal in Bangalore', 'url' => 'https://www.akclinics.in/tattoo-removal-in-bangalore/'],
['name' => 'Mole Removal in Bangalore', 'url' => 'https://www.akclinics.in/mole-removal-in-bangalore/'],
['name' => 'Pigmentation Treatment in Bangalore', 'url' => 'https://www.akclinics.in/pigmentation-treatment-in-bangalore/'],
['name' => 'Carbon Facial in Bangalore', 'url' => 'https://www.akclinics.in/carbon-peel-treatment-in-bangalore/'],
['name' => 'Botox Treatment in Bangalore', 'url' => 'https://www.akclinics.in/botox-treatment-in-bangalore/'],
['name' => 'Stretch Marks Treatment in Bangalore', 'url' => 'https://www.akclinics.in/stretch-marks-treatment-in-bangalore/'],
                        );
}
else if(stristr($req_url, '/acne-treatment-in-'))
{
    $loc_inurl = str_replace('/acne-treatment-in-', '', $req_url);
    $important_links = array(
['name' => 'Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/hair-transplant-in-bangalore/'],
['name' => 'Hair Loss Treatment in Bangalore', 'url' => 'https://www.akclinics.in/hair-loss-treatment-in-bangalore/'],
['name' => 'FUE Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/fue-hair-transplant-in-bangalore/'],
['name' => 'FUT Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/fut-hair-transplant-in-bangalore/'],
['name' => 'Beard Transplant in Bangalore', 'url' => 'https://www.akclinics.in/beard-transplant-in-bangalore/'],
['name' => 'Revision Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/revision-hair-transplant-in-bangalore/'],
['name' => 'PR for Hair Loss Treatment in Bangalore', 'url' => 'https://www.akclinics.in/prp-treatment-for-hair-in-bangalore/'],
['name' => 'Laser Hair Removal in Bangalore', 'url' => 'https://www.akclinics.in/laser-hair-removal-in-bangalore/'],
['name' => 'Acne Treatment in Bangalore', 'url' => 'https://www.akclinics.in/acne-treatment-in-bangalore/'],
['name' => 'Tattoo Removal in Bangalore', 'url' => 'https://www.akclinics.in/tattoo-removal-in-bangalore/'],
['name' => 'Mole Removal in Bangalore', 'url' => 'https://www.akclinics.in/mole-removal-in-bangalore/'],
['name' => 'Pigmentation Treatment in Bangalore', 'url' => 'https://www.akclinics.in/pigmentation-treatment-in-bangalore/'],
['name' => 'Carbon Facial in Bangalore', 'url' => 'https://www.akclinics.in/carbon-peel-treatment-in-bangalore/'],
['name' => 'Botox Treatment in Bangalore', 'url' => 'https://www.akclinics.in/botox-treatment-in-bangalore/'],
['name' => 'Stretch Marks Treatment in Bangalore', 'url' => 'https://www.akclinics.in/stretch-marks-treatment-in-bangalore/'],
                        );
}
else if(stristr($req_url, '/tattoo-removal-in-'))
{
    $loc_inurl = str_replace('/tattoo-removal-in-', '', $req_url);
    $important_links = array(
['name' => 'Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/hair-transplant-in-bangalore/'],
['name' => 'Hair Loss Treatment in Bangalore', 'url' => 'https://www.akclinics.in/hair-loss-treatment-in-bangalore/'],
['name' => 'FUE Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/fue-hair-transplant-in-bangalore/'],
['name' => 'FUT Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/fut-hair-transplant-in-bangalore/'],
['name' => 'Beard Transplant in Bangalore', 'url' => 'https://www.akclinics.in/beard-transplant-in-bangalore/'],
['name' => 'Revision Hair Transplant in Bangalore', 'url' => 'https://www.akclinics.in/revision-hair-transplant-in-bangalore/'],
['name' => 'PR for Hair Loss Treatment in Bangalore', 'url' => 'https://www.akclinics.in/prp-treatment-for-hair-in-bangalore/'],
['name' => 'Laser Hair Removal in Bangalore', 'url' => 'https://www.akclinics.in/laser-hair-removal-in-bangalore/'],
['name' => 'Acne Treatment in Bangalore', 'url' => 'https://www.akclinics.in/acne-treatment-in-bangalore/'],
['name' => 'Tattoo Removal in Bangalore', 'url' => 'https://www.akclinics.in/tattoo-removal-in-bangalore/'],
['name' => 'Mole Removal in Bangalore', 'url' => 'https://www.akclinics.in/mole-removal-in-bangalore/'],
['name' => 'Pigmentation Treatment in Bangalore', 'url' => 'https://www.akclinics.in/pigmentation-treatment-in-bangalore/'],
['name' => 'Carbon Facial in Bangalore', 'url' => 'https://www.akclinics.in/carbon-peel-treatment-in-bangalore/'],
['name' => 'Botox Treatment in Bangalore', 'url' => 'https://www.akclinics.in/botox-treatment-in-bangalore/'],
['name' => 'Stretch Marks Treatment in Bangalore', 'url' => 'https://www.akclinics.in/stretch-marks-treatment-in-bangalore/'],
                        );
}
else if(stristr($req_url, '/hair-loss-treatment-in-bangalore') || stristr($req_url, '/fue-hair-transplant-in-bangalore') || stristr($req_url, '/fut-hair-transplant-in-bangalore') || stristr($req_url, '/beard-transplant-in-bangalore') || stristr($req_url, '/revision-hair-transplant-in-bangalore'))
{
    $important_links = $important_links_ht;
}

if($loc_inurl != '')
{
    $loc_inurl = str_replace('-bangalore/', '', $loc_inurl);
	$loc_inurl = str_replace('-', ' ', $loc_inurl);
	if(in_array($loc_inurl, $loc_arr))
    {
        $location_inpage = $loc_inurl;
    }
}
$location_inpage = "";
?>