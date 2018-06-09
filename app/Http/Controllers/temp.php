<?php

if (($purpose == 'Продажа') && ($currency <> '₽$€')) {
  $properties = Properties::SearchByKeyword($keyword,$direction,$type)
              ->where("price", ">=", (int)$pricemin)
              ->where("price", "<=", (int)$pricemax)
              ->where("range", ">=", (int)$rangemin)
              ->where("range", "<=", (int)$rangemax)
              ->where("land_area", ">=", (int)$landmin)
              ->where("land_area", "<=", (int)$landmax)
              ->where("build_area", ">=", (int)$buildmin)
              ->where("build_area", "<=", (int)$buildmax)

              ->where("currency", $currency)
              ->where("property_purpose", $purpose)
              ->paginate();
              // ->paginate(getcong('pagination_limit'));
  return view('pages.sale_properties_grid',compact('properties', 'data'));
} elseif (($purpose == 'Продажа') && ($currency == '₽$€')) {
  $properties = Properties::SearchByKeyword($keyword,$direction,$type)
              ->where("price", ">=", (int)$pricemin)
              ->where("price", "<=", (int)$pricemax)
              ->where("range", ">=", (int)$rangemin)
              ->where("range", "<=", (int)$rangemax)
              ->where("land_area", ">=", (int)$landmin)
              ->where("land_area", "<=", (int)$landmax)
              ->where("build_area", ">=", (int)$buildmin)
              ->where("build_area", "<=", (int)$buildmax)

              ->where("property_purpose", $purpose)
              ->paginate();
              // ->paginate(getcong('pagination_limit'));
  return view('pages.sale_properties_grid',compact('properties', 'data'));
} elseif (($purpose == 'Аренда') && ($currency <> '₽$€')) {
  $properties = Properties::SearchByKeyword($keyword,$direction,$type)
              ->where("price", ">=", (int)$pricemin)
              ->where("price", "<=", (int)$pricemax)
              ->where("range", ">=", (int)$rangemin)
              ->where("range", "<=", (int)$rangemax)
              ->where("land_area", ">=", (int)$landmin)
              ->where("land_area", "<=", (int)$landmax)
              ->where("build_area", ">=", (int)$buildmin)
              ->where("build_area", "<=", (int)$buildmax)

              ->where("currency", $currency)
              ->where("property_purpose", $purpose)
              ->paginate();
              // ->paginate(getcong('pagination_limit'));
  return view('pages.rent_properties_grid',compact('properties', 'data'));
} elseif (($purpose == 'Аренда') && ($currency == '₽$€')) {
  $properties = Properties::SearchByKeyword($keyword,$direction,$type)
              ->where("price", ">=", (int)$pricemin)
              ->where("price", "<=", (int)$pricemax)
              ->where("range", ">=", (int)$rangemin)
              ->where("range", "<=", (int)$rangemax)
              ->where("land_area", ">=", (int)$landmin)
              ->where("land_area", "<=", (int)$landmax)
              ->where("build_area", ">=", (int)$buildmin)
              ->where("build_area", "<=", (int)$buildmax)

              ->where("property_purpose", $purpose)
              ->paginate();
              // ->paginate(getcong('pagination_limit'));
  return view('pages.rent_properties_grid',compact('properties', 'data'));
} else {
  if ($currency == '₽$€') {
    $propertieslist = Properties::SearchByKeyword($keyword,$direction,$type)
              ->where("status", "1")
              ->where("price", ">=", (int)$pricemin)
              ->where("price", "<=", (int)$pricemax)
              ->where("range", ">=", (int)$rangemin)
              ->where("range", "<=", (int)$rangemax)
              ->where("land_area", ">=", (int)$landmin)
              ->where("land_area", "<=", (int)$landmax)
              ->where("build_area", ">=", (int)$buildmin)
              ->where("build_area", "<=", (int)$buildmax)
              ->paginate();
              // ->paginate(getcong('pagination_limit'));
    return view('pages.index',compact('propertieslist', 'data'));
  } else {
    $propertieslist = Properties::SearchByKeyword($keyword,$direction,$type)
              ->where("status", "1")
              ->where("price", ">=", (int)$pricemin)
              ->where("price", "<=", (int)$pricemax)
              ->where("range", ">=", (int)$rangemin)
              ->where("range", "<=", (int)$rangemax)
              ->where("land_area", ">=", (int)$landmin)
              ->where("land_area", "<=", (int)$landmax)
              ->where("build_area", ">=", (int)$buildmin)
              ->where("build_area", "<=", (int)$buildmax)

              ->where("currency", $currency)
              ->paginate();
              // ->paginate(getcong('pagination_limit'));
    return view('pages.index',compact('propertieslist', 'data'));
  }


}
