<?php
    //session_start();
    //echo $_SESSION['membership']; // individual
	/**
	 * Gets the current URL of the web server running the sample code
	 *
	 * @return array
	 */
	$membershipType = '';
  $amount = '';
  $cartTotal = '';
function getMembershipAmount($membership){

        $membershipType = $membership;

        if('individual' == $membership){
            $amount = 100;
            $cartTotal = $amount;
        }else if($membership == 'student'){
            $amount = 75;
            $cartTotal = $amount;
        } else if ($membership == 'business'){
            $amount = 200;
            $cartTotal = $amount;
        }
        setCartTotal($cartTotal);
        return $amount;
}

function setMembershipAmount($amount){
    $amount = amount;
}

function setCartTotal($cartTotal){
  console.log('Cart total set to ' + $cartTotal);
  this.$cartTotal = $cartTotal;
}

function returnCartTotal(){
  return $GLOBALS['cartTotal'];
}

$membershipAmount = getMembershipAmount($membershipType);
