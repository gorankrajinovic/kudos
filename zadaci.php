<?php


function racun($opr, $num1, $num2){
	switch ($opr) {
		case ($opr == ' + '):
		return $num1 + $num2;
		break;
		case ($opr == ' - '):
		return $num1 - $num2;
		break;
	}
}



echo '<input type=hidden id=broj_operatora value=' . $config['broj_operatora'] . ' />';
echo '<input type=hidden id=broj_izraza value=' . $config['broj_izraza'] . ' />';

$numbers_array = array();

for ($i=0; $i<=$config['broj_limit']; $i++){
	$numbers_array[] = $i;
}

$operation_array = array(' + ', ' - ' );

echo "<div class=container-fluid>";
echo "<div class=row><div class=col-xs-1></div><div class=col-xs-10><div class=row><div class=col-xs-9>";

for($i=0; $i<$config['broj_izraza']; $i++){

	$operacija = array_rand($operation_array, 1);

	
	shuffle($numbers_array);

	for($x=1;$x<=$config['broj_operatora'];$x++){
		
		${'num' . $x} = $numbers_array[$x];
	}

	

	$opr1 = $operation_array[$operacija];

	if($config['broj_operatora'] > 2){
		$operacija = array_rand($operation_array, 1);
		$opr2 = $operation_array[$operacija];
	}
	

	if(($num1 < $num2) AND ($opr1 == ' - ')){
		if($num1 <=10){
				$num1 = $num1 + 10;
			}
		do {
			

			shuffle($numbers_array);
			$num2 = $numbers_array[0];
			
		} while ($num1 <= $num2);

	}

	if(($opr1 == ' + ') AND ($num1 + $num2 > $config['broj_limit'])){
		do {
			
			shuffle($numbers_array);
			$num1 = $numbers_array[1];
			$num2 = $numbers_array[0];
			
		} while ($num1 + $num2 > $config['broj_limit']);
	}

	if($config['broj_operatora']>2){
		$prvi_par = racun($opr1, $num1, $num2);

	if(($prvi_par < $num3) AND ($opr2 == ' - ')){
		if($prvi_par <=10){
				$prvi_par = $prvi_par + 10;
			}
		do {
			
			shuffle($numbers_array);
			$num3 = $numbers_array[1];
		} while ($prvi_par <= $num3);
	}
	if(($prvi_par + $num3 > $config['broj_limit']) AND ($opr2 == ' + ')){
		do {
			
			shuffle($numbers_array);
			$num3 = $numbers_array[1];
		} while ($prvi_par + $num3 > $config['broj_limit']);
	}
	}
	

	

	echo "<div class=row><div class='broj col-xs-1 col-sm-1' id= prvi" . $i . ">" . $num1 . "</div>" . 
					"<div class='operacija col-xs-1 col-sm-1' id= prva_operacija" . $i .  ">".$opr1."</div>" . 
					"<div class='broj col-xs-1 col-sm-1' id= drugi" . $i . ">" . $num2 . "</div>";

	if($config['broj_operatora'] > 2){
		echo "<div class='operacija col-xs-1 col-sm-1' id= druga_operacija" . $i .  ">".$opr2."</div>" .
										"<div class='broj col-xs-1 col-sm-1' id= treci" . $i . ">" . $num3 . "</div>" . 
										"<div class='jednako col-xs-1 col-sm-1'>=</div>" . "<div class='form-group form-group-sm'><select class=form-control id= rezultat" . $i . "><option> </option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option><option>60</option><option>61</option><option>62</option><option>63</option><option>64</option><option>65</option><option>66</option><option>67</option><option>68</option><option>69</option><option>70</option><option>71</option><option>72</option><option>73</option><option>74</option><option>75</option><option>76</option><option>77</option><option>78</option><option>79</option><option>80</option><option>81</option><option>82</option><option>83</option><option>84</option><option>85</option><option>86</option><option>87</option><option>88</option><option>89</option><option>90</option><option>91</option><option>92</option><option>93</option><option>94</option><option>95</option><option>96</option><option>97</option><option>98</option><option>99</option><option>100</option></select></div>" . "<div id=ocjena" . $i . " class='ocjena col-xs-1 col-sm-1'></div><div class='t_rez col-sm-4 col-xs-4' id=tacan_rezultat".$i."></div>" . "</div>";
									}else{
										echo "<div class='jednako col-xs-1 col-sm-1'>=</div>" . "<div class='form-group form-group-sm'><select class=form-control id= rezultat" . $i . "><option> </option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option><option>60</option><option>61</option><option>62</option><option>63</option><option>64</option><option>65</option><option>66</option><option>67</option><option>68</option><option>69</option><option>70</option><option>71</option><option>72</option><option>73</option><option>74</option><option>75</option><option>76</option><option>77</option><option>78</option><option>79</option><option>80</option><option>81</option><option>82</option><option>83</option><option>84</option><option>85</option><option>86</option><option>87</option><option>88</option><option>89</option><option>90</option><option>91</option><option>92</option><option>93</option><option>94</option><option>95</option><option>96</option><option>97</option><option>98</option><option>99</option><option>100</option></select></div>" . "<div id=ocjena" . $i . " class='ocjena col-xs-1 col-sm-1'></div><div class='t_rez col-sm-4 col-xs-4' id=tacan_rezultat".$i."></div>" . "</div>";
									}
	

}

echo "</div><div class=col-xs-3></div></div><div class=row><div class=col-xs-9><div class=row><div class='col-xs-6 col-sm-6'><button type=button class='btn btn-default' id='pregledaj'>Pregledaj</button></div><div class='col-xs-6 col-sm-6'><button type=button class='btn btn-default' id=ponovo style='visibility: hidden' >Pokusaj ponovo</button></div></div><div class=col-xs-3></div></div></div></div>";

echo "<div class=col-xs-1></div></div></div>";


?>


