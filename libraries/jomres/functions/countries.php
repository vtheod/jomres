<?php
/**
 *
 * Contains countries related functions
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 *
 * @package Jomres\Core\Functions
*
* Uses the jomres_countries singleton to get country names
* 
* Returns translated country names when passed a country code (e.g. GB or ES )
*
*/
function getSimpleCountry($selectedCountry = '')
{
	if ($selectedCountry == '') {
		return false;
	}

	$jomres_countries = jomres_singleton_abstract::getInstance('jomres_countries');
	
	$selectedCountry = strtoupper($selectedCountry);

	if (strlen($selectedCountry) > 3) {
		// Neither two-letter country code (ISO 3166-1 alpha-2) nor three-letter country code ISO 3166-1 alpha-3
		return $selectedCountry;
	}

	if (isset($jomres_countries->used_countries[$selectedCountry]['countryname'])) {
		return $jomres_countries->used_countries[$selectedCountry]['countryname'];
	} else { //this shouldn`t usually happen
		$jomres_countries->get_all_countries();
		
		if (isset($jomres_countries->countries[$selectedCountry]['countryname'])) {
			return $jomres_countries->countries[$selectedCountry]['countryname'];
		}
	}
	
	return false;
}

/**
 *
 * @package Jomres\Core\Functions
*
* Used in property configuration - booking form tab to create a dropdown of countries
* 
* This property configuration dropdown allows the property manager to choose the default country to be shown in the booking form. If not already set, the system will attempt to use the geo-located country of the user as the default
*
*/
function configCountries()
{
	$mrConfig = getPropertySpecificSettings();
	
	if (!isset($mrConfig[ 'defaultcountry' ]) || empty($mrConfig[ 'defaultcountry' ])) {
		$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
		$selectedCountry = $tmpBookingHandler->user_settings[ 'geolocated_country' ];
	} else {
		$selectedCountry = $mrConfig[ 'defaultcountry' ];
	}
	
	$selectedCountry = strtoupper($selectedCountry);
	
	$jomres_countries = jomres_singleton_abstract::getInstance('jomres_countries');
	$jomres_countries->get_all_countries();

	$options = array();
	foreach ($jomres_countries->countries as $country) {
		$options[] = jomresHTML::makeOption($country['countrycode'], $country['countryname']);
	}

	$countryDropdown = jomresHTML::selectList($options, 'cfg_defaultcountry', 'class="inputbox"', 'value', 'text', $selectedCountry);

	return $countryDropdown;
}

/**
 *
 * @package Jomres\Core\Functions
*
* Creates a countries dropdown
* 
* Used in numerous places, pass it the country code and an optional input name for the form element. The jomres_countries singleton creates a list of countries (including translation of the country names ). 
*
*/
function createSimpleCountriesDropdown($selectedCountry = '', $input_name = 'guest_country')
{
	$mrConfig = getPropertySpecificSettings();
	
	if (!isset($selectedCountry) || $selectedCountry == '') {
		$selectedCountry = $mrConfig[ 'defaultcountry' ];
	}
	
	$selectedCountry = strtoupper($selectedCountry);
	
	$jomres_countries = jomres_singleton_abstract::getInstance('jomres_countries');
	$jomres_countries->get_all_countries();

	$options = array();
	foreach ($jomres_countries->countries as $country) {
		$options[] = jomresHTML::makeOption($country['countrycode'], $country['countryname']);
	}

	$countryDropdown = jomresHTML::selectList($options, $input_name, '', 'value', 'text', $selectedCountry);

	return $countryDropdown;
}

/**
 *
 * @package Jomres\Core\Functions
*
* Creates a countries dropdown
* 
* Used in Site Configuration. Allows the site manager to configure a single country that all properties must existing in when they are created or modified.
*
*/
function limitCountriesDropdown()
{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig = $siteConfig->get();
	
	$jomres_countries = jomres_singleton_abstract::getInstance('jomres_countries');
	$jomres_countries->get_all_countries();

	$options = array();
	foreach ($jomres_countries->countries as $country) {
		$options[] = jomresHTML::makeOption($country['countrycode'], $country['countryname']);
	}
	
	$countryDropdown = jomresHTML::selectList($options, 'cfg_limit_property_country_country', 'class="inputbox" ', 'value', 'text', $jrConfig[ 'limit_property_country_country' ]);

	return $countryDropdown;
}

/**
 *
 * @package Jomres\Core\Functions
*
* Creates a countries dropdown that adds onChange javascript so that an associated region dropdown will be updated 
*
*/
function createCountriesDropdown($selectedCountry, $input_name = 'country', $include_onchange = true)
{
	$selectedCountry = strtoupper($selectedCountry);
	
	$jomres_countries = jomres_singleton_abstract::getInstance('jomres_countries');
	$jomres_countries->get_all_countries();

	$countryDropdown = '<select id="'.$input_name.'" name="'.$input_name.'" class="form-control" ';
	
	if ($include_onchange) {
		$countryDropdown .= 'onchange="OnChange(this.form.'.$input_name.')">';
	} else {
		$countryDropdown .= '>';
	}
	
	foreach ($jomres_countries->countries as $country) {
		if ($selectedCountry != '' && $selectedCountry == $country['countrycode']) {
			$selected = 'selected';
		} else {
			$selected = '';
		}
		$countryDropdown .= '<option value="'.$country['countrycode'].'" '.$selected.' >'.$country['countryname'].'</option>';
	}
	
	$countryDropdown .= '</select>';

	return $countryDropdown;
}

/**
 *
 * @package Jomres\Core\Functions
*
* Builds a region name dropdown
* 
* Pass country code and the current region. First blank allows you to have the first region to be blank, and an optional input name
*
*/
function setupRegions($countryCode = 'GB', $currentRegion = 'Pembrokeshire', $firstBlank = false, $input_name = 'region')
{
	$regionArray = array();
	$regionDropdown = '';
	
	if ($countryCode == '') {
		$mrConfig = getPropertySpecificSettings();
		
		$countryCode = $mrConfig[ 'defaultcountry' ];
	}
	
	$jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
	$regionArray = $jomres_regions->get_country_regions($countryCode);

	if (!is_numeric($currentRegion)) { // This allows us to transition from using region names in the dropdown's value field, to region ids.
		foreach ($regionArray as $id => $r) {
			if ($r == $currentRegion) {
				$currentRegion = $id;
			}
		}
	} else {
		$currentRegion = jomres_decode($currentRegion);
	}

	if (!empty($regionArray)) {
		natcasesort($regionArray);
		if ($firstBlank) {
			$regions[ ] = jomresHTML::makeOption('', '');
		}

		foreach ($regionArray as $k => $v) {
			$regions[ ] = jomresHTML::makeOption($k, $v);
		}
		$regionDropdown = jomresHTML::selectList($regions, $input_name, 'class="inputbox"', 'value', 'text', $currentRegion);
	}

	return $regionDropdown;
}

/**
 *
 * @package Jomres\Core\Functions
*
* Returns region names grouped by country codes
* 
* Used by the installer when creating a new installation of Jomres.
*
*/
function regionNamesArray()
{
	$FIPS = array('AD' => array('Canillo', 'Encamp', 'La Massana', 'Ordino', 'Sant Julia de Loria', 'Andorra la Vella', 'Escaldes-Engordany'), 'AE' => array('Abu Dhabi', 'Dubai', 'Ajman', 'Fujairah', 'Ras al-Khaimah', 'Sharjah', 'Umm al-Quwain'), 'AF' => array('Badakhshan', 'Badghis', 'Baghlan', 'Bamian', 'Farah', 'Faryab', 'Ghazni', 'Ghowr', 'Helmand', 'Herat', 'Kabol', 'Kapisa', 'Konar', 'Laghman', 'Lowgar', 'Nangarhar', 'Nimruz', 'Oruzgan', 'Paktia', 'Parvan', 'Kandahar', 'Kondoz', 'Takhar', 'Vardak', 'Zabol', 'Paktika', 'Balkh', 'Jowzjan', 'Samangan', 'Sar-e Pol'), 'AG' => array('Barbuda', 'St. George', 'St. John', 'St. Mary', 'St. Paul', 'St. Peter', 'St. Philip'), 'AL' => array('Berat', 'Diber', 'Durres', 'Elbasan', 'Fier', 'Gjirokaster', 'Gramsh', 'Kolonje', 'Korce', 'Kruje', 'Kukes', 'Lezhe', 'Librazhd', 'Lushnje', 'Mat', 'Mirdite', 'Permet', 'Pogradec', 'Puke', 'Sarande', 'Shkoder', 'Skrapar', 'Tepelene', 'Tropoje', 'Vlore', 'Tirane', 'Bulqize', 'Delvine', 'Devoll', 'Has', 'Kavaje', 'Kucove', 'Kurbin', 'Malesi e Madhe', 'Mallakaster', 'Peqin', 'Tirane'), 'AM' => array('Aragatsotn', 'Ararat', 'Armavir', "Geghark'unik'", "Kotayk'", 'Lorri', 'Shirak', "Syunik'", 'Tavush', "Vayots' Dzor", 'Yerevan'), 'AO' => array('Benguela', 'Bie', 'Cabinda', 'Cuando Cubango', 'Cuanza Norte', 'Cuanza Sul', 'Cunene', 'Huambo', 'Huila', 'Malanje', 'Moxico', 'Uige', 'Zaire', 'Lunda Norte', 'Lunda Sul', 'Bengo', 'Luanda'), 'AR' => array('Buenos Aires', 'Catamarca', 'Chaco', 'Chubut', 'Cordoba', 'Corrientes', 'Distrito Federal', 'Entre Rios', 'Formosa', 'Jujuy', 'La Pampa', 'La Rioja', 'Mendoza', 'Misiones', 'Neuquen', 'Rio Negro', 'Salta', 'San Juan', 'San Luis', 'Santa Cruz', 'Santa Fe', 'Santiago del Estero', 'Tierra del Fuego', 'Tucuman'), 'AT' => array('Burgenland', 'Karnten', 'Niederosterreich', 'Oberosterreich', 'Salzburg', 'Steiermark', 'Tirol', 'Vorarlberg', 'Wien'), 'AU' => array('Australian Capital Territory', 'New S. Wales', 'N. Territory', 'Queensland', 'S. Australia', 'Tasmania', 'Victoria', 'W. Australia'), 'AZ' => array('Abseron', 'Agcabadi', 'Agdam', 'Agdas', 'Agstafa', 'Agsu', 'Ali Bayramli', 'Astara', 'Baki', 'Balakan', 'Barda', 'Beylaqan', 'Bilasuvar', 'Cabrayil', 'Calilabad', 'Daskasan', 'Davaci', 'Fuzuli', 'Gadabay', 'Ganca', 'Goranboy', 'Goycay', 'Haciqabul', 'Imisli', 'Ismayilli', 'Kalbacar', 'Kurdamir', 'Lacin', 'Lankaran', 'Lankaran', 'Lerik', 'Masalli', 'Mingacevir', 'Naftalan', 'Naxcivan', 'Neftcala', 'Oguz', 'Qabala', 'Qax', 'Qazax', 'Qobustan', 'Quba', 'Qubadli', 'Qusar', 'Saatli', 'Sabirabad', 'Saki', 'Saki', 'Salyan', 'Samaxi', 'Samkir', 'Samux', 'Siyazan', 'Sumqayit', 'Susa', 'Tartar', 'Tovuz', 'Ucar', 'Xacmaz', 'Xankandi', 'Xanlar', 'Xizi', 'Xocali', 'Xocavand', 'Yardimli', 'Yevlax', 'Yevlax', 'Zangilan', 'Zaqatala', 'Zardab'), 'BA' => array('Federation of Bosnia Herz', 'R.ublika Srpska'), 'BB' => array('Christ Church', 'St. Andrew', 'St. George', 'St. James', 'St. John', 'St. Joseph', 'St. Lucy', 'St. Michael', 'St. Peter', 'St. Philip', 'St. Thomas'), 'BD' => array('Barisal', 'Bandarban', 'Comilla', 'Mymensingh', 'Noakhali', 'Patuakhali', 'Bagerhat', 'Bhola', 'Bogra', 'Barguna', 'Brahmanbaria', 'Chandpur', 'Chapai Nawabganj', 'Chattagram', 'Chuadanga', "Cox's Bazar", 'Dhaka', 'Dinajpur', 'Faridpur', 'Feni', 'Gaibandha', 'Gazipur', 'Gopalganj', 'Habiganj', 'Jaipurhat', 'Jamalpur', 'Jessore', 'Jhalakati', 'Jhenaidah', 'Khagrachari', 'Khulna', 'Kishorganj', 'Kurigram', 'Kushtia', 'Laksmipur', 'Lalmonirhat', 'Madaripur', 'Magura', 'Manikganj', 'Meherpur', 'Moulavibazar', 'Munshiganj', 'Naogaon', 'Narail', 'Narayanganj', 'Narsingdi', 'Nator', 'Netrakona', 'Nilphamari', 'Pabna', 'Panchagar', 'Parbattya Chattagram', 'Pirojpur', 'Rajbari', 'Rajshahi', 'Rangpur', 'Satkhira', 'Shariyatpur', 'Sherpur', 'Sirajganj', 'Sunamganj', 'Sylhet', 'Tangail', 'Thakurgaon'), 'BE' => array('Antwerpen', 'Brabant', 'Hainaut', 'Liege', 'Limburg', 'Luxembourg', 'Namur', 'Oost-Vlaanderen', 'West-Vlaanderen', 'Brabant Wallon', 'Brussels Hoofdstedelijk Gewest', 'Vlaams-Brabant'), 'BF' => array('Bam', 'Bazega', 'Bougouriba', 'Boulgou', 'Boulkiemde', 'Ganzourgou', 'Gnagna', 'Gourma', 'Houet', 'Kadiogo', 'Kenedougou', 'Komoe', 'Kossi', 'Kouritenga', 'Mouhoun', 'Namentenga', 'Naouri', 'Oubritenga', 'Oudalan', 'Passore', 'Poni', 'Sanguie', 'Sanmatenga', 'Seno', 'Sissili', 'Soum', 'Sourou', 'Tapoa', 'Yatenga', 'Zoundweogo'), 'BG' => array('Mikhaylovgrad', 'Blagoevgrad', 'Burgas', 'Dobrich', 'Gabrovo', 'Grad Sofiya', 'Khaskovo', 'Kurdzhali', 'Kyustendil', 'Lovech', 'Montana', 'Pazardzhik', 'Pernik', 'Pleven', 'Plovdiv', 'Razgrad', 'Ruse', 'Shumen', 'Silistra', 'Sliven', 'Smolyan', 'Sofiya', 'Stara Zagora', 'Turgovishte', 'Varna', 'Veliko Turnovo', 'Vidin', 'Vratsa', 'Yambol'), 'BH' => array('Al Hadd', 'Al Manamah', 'Al Muharraq', 'Jidd Hafs', 'Sitrah', 'Al Mintaqah al Gharbiyah', 'Mintaqat Juzur Hawar', 'Al Mintaqah ash Shamaliyah', 'Al Mintaqah al Wusta', 'Madinat', 'Ar Rifa', 'Madinat Hamad'), 'BI' => array('Bujumbura', 'Bubanza', 'Bururi', 'Cankuzo', 'Cibitoke', 'Gitega', 'Karuzi', 'Kayanza', 'Kirundo', 'Makamba', 'Muyinga', 'Ngozi', 'Rutana', 'Ruyigi', 'Muramvya', 'Mwaro'), 'BJ' => array('Atakora', 'Atlantique', 'Borgou', 'Mono', 'Oueme', 'Zou'), 'BM' => array('Devonshire', 'Hamilton', 'Hamilton', 'Paget', 'Pembroke', 'St. George', "St. George's", 'Sandys', 'Smiths', 'S.ampton', 'Warwick'), 'BN' => array('Belait', 'Brunei and Muara', 'Temburong', 'Tutong'), 'BO' => array('Chuquisaca', 'Cochabamba', 'El Beni', 'La Paz', 'Oruro', 'Pando', 'Potosi', 'Santa Cruz', 'Tarija'), 'BR' => array('Acre', 'Alagoas', 'Amapa', 'Amazonas', 'Bahia', 'Ceara', 'Distrito Federal', 'Espirito Santo', 'Mato Grosso do Sul', 'Maranhao', 'Mato Grosso', 'Minas Gerais', 'Para', 'Paraiba', 'Parana', 'Piaui', 'Rio de Janeiro', 'Rio Grande do Norte', 'Rio Grande do Sul', 'Rondonia', 'Roraima', 'Santa Catarina', 'Sao Paulo', 'Sergipe', 'Goias', 'Pernambuco', 'Tocantins'), 'BS' => array('Bimini', 'Cat Is.', 'Exuma', 'Inagua', 'Long Is.', 'Mayaguana', 'Ragged Is.', 'Harbour Is.', 'New Providence', 'Acklins and Crooked Is.', 'Freeport', 'Fresh Creek', "Governor's Harbour", 'Green Turtle Cay', 'High Rock', 'Kemps Bay', 'Marsh Harbour', 'Nichollstown and Berry Is.', 'Rock Sound', 'Sandy Point', 'San Salvador and Rum Cay'), 'BT' => array('Bumthang', 'Chhukha', 'Chirang', 'Daga', 'Geylegphug', 'Ha', 'Lhuntshi', 'Mongar', 'Paro', 'Pemagatsel', 'Punakha', 'Samchi', 'Samdrup', 'Shemgang', 'Tashigang', 'Thimphu', 'Tongsa', 'Wangdi Phodrang'), 'BW' => array('Central', 'Chobe', 'Ghanzi', 'Kgalagadi', 'Kgatleng', 'Kweneng', 'Ngamiland', 'North-East', 'S.-East', 'S.ern'), 'BY' => array("Brestskaya Voblasts'", "Homyel'skaya Voblasts'", "Hrodzyenskaya Voblasts'", 'Minsk', "Minskaya Voblasts'", "Mahilyowskaya Voblasts'", "Vitsyebskaya Voblasts'"), 'BZ' => array('Belize', 'Cayo', 'Corozal', 'Orange Walk', 'Stann Creek', 'Toledo'), 'CA' => array('Alberta', 'British Columbia', 'Manitoba', 'New Brunswick', 'Newfoundland', 'Nova Scotia', 'Nunavut', 'Ontario', 'Prince Edward Is.', 'Quebec', 'Saskatchewan', 'Northwest Territories', 'Yukon Territory'), 'CF' => array('Bamingui-Bangoran', 'Basse-Kotto', 'Haute-Kotto', 'Haute-Sangha', 'Haut-Mbomou', 'Kemo-Gribingui', 'Lobaye', 'Mbomou', 'Nana-Mambere', 'Ouaka', 'Ouham', 'Ouham-Pende', 'Vakaga', 'Gribingui', 'Sangha', 'Ombella-Mpoko', 'Bangui'), 'CG' => array('Bouenza', 'Cuvette', 'Kouilou', 'Lekoumou', 'Likouala', 'Niari', 'Plateaux', 'Sangha', 'Pool', 'Brazzaville'), 'CH' => array('Aargau', 'Ausser-Rhoden', 'Basel-Landschaft', 'Basel-Stadt', 'Bern', 'Fribourg', 'Geneve', 'Glarus', 'Graubunden', 'Inner-Rhoden', 'Luzern', 'Neuchatel', 'Nidwalden', 'Obwalden', 'Sankt Gallen', 'Schaffhausen', 'Schwyz', 'Solothurn', 'Thurgau', 'Ticino', 'Uri', 'Valais', 'Vaud', 'Zug', 'Zurich', 'Jura'), 'CI' => array('Abengourou', 'Dabakala', 'Adzope', 'Agboville', 'Biankouma', 'Bouna', 'Boundiali', 'Danane', 'Divo', 'Ferkessedougou', 'Gagnoa', 'Katiola', 'Korhogo', 'Odienne', 'Seguela', 'Touba', 'Bongouanou', 'Issia', 'Lakota', 'Mankono', 'Oume', 'Soubre', 'Tingrela', 'Zuenoula', 'Bangolo', 'Beoumi', 'Bondoukou', 'Bouafle', 'Bouake', 'Daloa', 'Daoukro', 'Duekoue', 'Grand-Lahou', 'Man', 'Mbahiakro', 'Sakassou', 'San Pedro', 'Sassandra', 'Sinfra', 'Tabou', 'Tanda', 'Tiassale', 'Toumodi', 'Vavoua', 'Abidjan', 'Aboisso', 'Adiake', 'Alepe', 'Bocanda', 'Dabou', 'Dimbokro', 'Grand-Bassam', 'Guiglo', 'Jacqueville', 'Tiebissou', 'Toulepleu', 'Yamoussoukro'), 'CL' => array('Valparaiso', 'Aisen del General Carlos Ibanez del Campo', 'Antofagasta', 'Araucania', 'Atacama', 'Bio-Bio', 'Coquimbo', "Libertador General Bernardo O'Higgins", 'Los Lagos', 'Magallanes y de la Antartica Chilena', 'Maule', 'Region Metropolitana', 'Tarapaca'), 'CM' => array('Est', 'Littoral', 'Nord-Ouest', 'Ouest', 'Sud-Ouest', 'Adamaoua', 'Centre', 'Extreme-Nord', 'Nord', 'Sud'), 'CN' => array('Anhui', 'Zhejiang', 'Jiangxi', 'Jiangsu', 'Jilin', 'Qinghai', 'Fujian', 'Heilongjiang', 'Henan', 'Hebei', 'Hunan', 'Hubei', 'Xinjiang', 'Xizang', 'Gansu', 'Guangxi', 'Guizhou', 'Liaoning', 'Nei Mongol', 'Ningxia', 'Beijing', 'Shanghai', 'Shanxi', 'Shandong', 'Shaanxi', 'Sichuan', 'Tianjin', 'Yunnan', 'Guangdong', 'Hainan'), 'CO' => array('Amazonas', 'Antioquia', 'Arauca', 'Atlantico', 'Caqueta', 'Cauca', 'Cesar', 'Choco', 'Cordoba', 'Guaviare', 'Guainia', 'Huila', 'La Guajira', 'Meta', 'Narino', 'Norte de Santander', 'Putumayo', 'Quindio', 'Risaralda', 'San Andres y Providencia', 'Santander', 'Sucre', 'Tolima', 'Valle del Cauca', 'Vaupes', 'Vichada', 'Casanare', 'Cundinamarca', 'Distrito Especial', 'Bolivar', 'Boyaca', 'Caldas', 'Magdalena'), 'CR' => array('Alajuela', 'Cartago', 'Guanacaste', 'Heredia', 'Limon', 'Puntarenas', 'San Jose'), 'CU' => array('Pinar del Rio', 'Ciudad de la Habana', 'Matanzas', 'Isla de la Juventud', 'Camaguey', 'Ciego de Avila', 'Cienfuegos', 'Granma', 'Guantanamo', 'La Habana', 'Holguin', 'Las Tunas', 'Sancti Spiritus', 'Santiago de Cuba', 'Villa Clara'), 'CV' => array('Boa Vista', 'Brava', 'Fogo', 'Maio', 'Paul', 'Praia', 'Ribeira Grande', 'Sal', 'Santa Catarina', 'Sao Nicolau', 'Sao Vicente', 'Tarrafal'), 'CY' => array('Famagusta', 'Kyrenia', 'Larnaca', 'Nicosia', 'Limassol', 'Paphos'), 'CZ' => array('Hlavni Mesto Praha', 'Jihomoravsky Kraj', 'Jihocesky Kraj', 'Vysocina', 'Karlovarsky Kraj', 'Kralovehradecky Kraj', 'Liberecky Kraj', 'Olomoucky Kraj', 'Moravskoslezsky Kraj', 'Pardubicky Kraj', 'Plzensky Kraj', 'Stredocesky Kraj', 'Ustecky Kraj', 'Zlinsky Kraj'), 'DE' => array('Baden-Wurttemberg', 'Bayern', 'Bremen', 'Hamburg', 'Hessen', 'Niedersachsen', 'Nordrhein-Westfalen', 'Rheinland-Pfalz', 'Saarland', 'Schleswig-Holstein', 'Brandenburg', 'Mecklenburg-Vorpommern', 'Sachsen', 'Sachsen-Anhalt', 'Thuringen', 'Berlin'), 'DJ' => array('Dikhil', 'Djibouti', 'Obock', 'Tadjoura'), 'DK' => array('Arhus', 'Bornholm', 'Frederiksborg', 'Fyn', 'Kobenhavn', 'Staden Kobenhavn', 'Nordjylland', 'Ribe', 'Ringkobing', 'Roskilde', 'Sonderjylland', 'Storstrom', 'Vejle', 'Vestsjalland', 'Viborg'), 'DM' => array('St. Andrew', 'St. David', 'St. George', 'St. John', 'St. Joseph', 'St. Luke', 'St. Mark', 'St. Patrick', 'St. Paul', 'St. Peter'), 'DO' => array('Azua', 'Baoruco', 'Barahona', 'Dajabon', 'Distrito Nacional', 'Duarte', 'Espaillat', 'Independencia', 'La Altagracia', 'Elias Pina', 'La Romana', 'Maria Trinidad Sanchez', 'Monte Cristi', 'Pedernales', 'Peravia', 'Puerto Plata', 'Salcedo', 'Samana', 'Sanchez Ramirez', 'San Juan', 'San Pedro De Macoris', 'Santiago', 'Santiago Rodriguez', 'Valverde', 'El Seibo', 'Hato Mayor', 'La Vega', 'Monsenor Nouel', 'Monte Plata', 'San Cristobal'), 'DZ' => array('Alger', 'Batna', 'Constantine', 'Medea', 'Mostaganem', 'Oran', 'Saida', 'Setif', 'Tiaret', 'Tizi Ouzou', 'Tlemcen', 'Bejaia', 'Biskra', 'Blida', 'Bouira', 'Djelfa', 'Guelma', 'Jijel', 'Laghouat', 'Mascara', "M'sila", 'Oum el Bouaghi', 'Sidi Bel Abbes', 'Skikda', 'Tebessa', 'Adrar', 'Ain Defla', 'Ain Temouchent', 'Annaba', 'Bechar', 'Bordj Bou Arreridj', 'Boumerdes', 'Chlef', 'El Bayadh', 'El Oued', 'El Tarf', 'Ghardaia', 'Illizi', 'Khenchela', 'Mila', 'Naama', 'Ouargla', 'Relizane', 'Souk Ahras', 'Tamanghasset', 'Tindouf', 'Tipaza', 'Tissemsilt'), 'EC' => array('Galapagos', 'Azuay', 'Bolivar', 'Canar', 'Carchi', 'Chimborazo', 'Cotopaxi', 'El Oro', 'Esmeraldas', 'Guayas', 'Imbabura', 'Loja', 'Los Rios', 'Manabi', 'Morona-Santiago', 'Pastaza', 'Pichincha', 'Tungurahua', 'Zamora-Chinchipe', 'Sucumbios', 'Napo', 'Orellana'), 'EE' => array('Harjumaa', 'Hiiumaa', 'Ida-Virumaa', 'Jarvamaa', 'Jogevamaa', 'Kohtla-Jarve', 'Laanemaa', 'Laane-Virumaa', 'Narva', 'Parnu', 'Parnumaa', 'Polvamaa', 'Raplamaa', 'Saaremaa', 'Sillamae', 'Tallinn', 'Tartu', 'Tartumaa', 'Valgamaa', 'Viljandimaa', 'Vorumaa'), 'EG' => array('Ad Daqahliyah', 'Al Bahr al Ahmar', 'Al Buhayrah', 'Al Fayyum', 'Al Gharbiyah', 'Al Iskandariyah', "Al Isma'iliyah", 'Al Jizah', 'Al Minufiyah', 'Al Minya', 'Al Qahirah', 'Al Qalyubiyah', 'Al Wadi al Jadid', 'Ash Sharqiyah', 'As Suways', 'Aswan', 'Asyut', 'Bani Suwayf', "Bur Sa'id", 'Dumyat', 'Kafr ash Shaykh', 'Matruh', 'Qina', 'Suhaj', "Janub Sina'", "Shamal Sina'"), 'ES' => array('Islas Baleares', 'La Rioja', 'Madrid', 'Murcia', 'Navarra', 'Asturias', 'Cantabria', 'Andalucia', 'Aragon', 'Canarias', 'Castilla-La Mancha', 'Castilla y Leon', 'Cataluna', 'Extremadura', 'Galicia', 'Pais Vasco', 'Valenciana'), 'ET' => array('Amhara', 'Somali', 'Gambella', 'Addis Ababa', 'S.ern', 'Tigray', 'Benishangul', 'Afar', 'Adis Abeba', 'Afar', 'Amara', 'Binshangul Gumuz', 'Dire Dawa', 'Gambela Hizboch', 'Hareri Hizb', 'Oromiya', 'Sumale', 'Tigray', 'YeDebub Biheroch Bihereseboch na Hizboch'), 'FI' => array('Ã?land', 'Lapland', 'Oulu', 'S.ern Finland', 'Eastern Finland', 'W. Finland'), 'FJ' => array('Central', 'Eastern', 'N.', 'Rotuma', 'W.'), 'FM' => array('Kosrae', 'Pohnpei', 'Chuuk', 'Yap'), 'FR' => array('Aquitaine', 'Auvergne', 'Basse-Normandie', 'Bourgogne', 'Bretagne', 'Centre', 'Champagne-Ardenne', 'Corse', 'Franche-Comte', 'Haute-Normandie', 'Ile-de-France', 'Languedoc-Roussillon', 'Limousin', 'Lorraine', 'Midi-Pyrenees', 'Nord-Pas-de-Calais', 'Pays de la Loire', 'Picardie', 'Poitou-Charentes', "Provence-Alpes-Cote d'Azur", 'Rhone-Alpes', 'Alsace'), 'GA' => array('Estuaire', 'Haut-Ogooue', 'Moyen-Ogooue', 'Ngounie', 'Nyanga', 'Ogooue-Ivindo', 'Ogooue-Lolo', 'Ogooue-Maritime', 'Woleu-Ntem'), 'GB' => array('Avon', 'Berkshire', 'Cleveland', 'Cornwall', 'Cumbria', 'Greater London', 'Greater Manchester', 'Hereford and Worcester', 'Humberside', 'Merseyside', 'S. Yorkshire', 'Tyne and Wear', 'West Midlands', 'West Yorkshire', 'Central', 'Grampian', 'Lothian', 'Strathclyde', 'Tayside', 'Clwyd', 'Dyfed', 'Gwent', 'Mid Glamorgan', 'S. Glamorgan', 'West Glamorgan', 'Barking and Dagenham', 'Barnet', 'Barnsley', 'Bath and North East Somerset', 'Bedfordshire', 'Bexley', 'Birmingham', 'Blackburn with Darwen', 'Blackpool', 'Bolton', 'Bournemouth', 'Bracknell Forest', 'Bradford', 'Brent', 'Brighton and Hove', 'Bristol, City of', 'Bromley', 'Buckinghamshire', 'Bury', 'Calderdale', 'Cambridgeshire', 'Camden', 'Cheshire', 'Coventry', 'Croydon', 'Darlington', 'Derby', 'Derbyshire', 'Devon', 'Doncaster', 'Dorset', 'Dudley', 'Durham', 'Ealing', 'East Riding of Yorkshire', 'East Sussex', 'Enfield', 'Essex', 'Gateshead', 'Gloucestershire', 'Greenwich', 'Hackney', 'Halton', 'Hammersmith and Fulham', 'Hampshire', 'Haringey', 'Harrow', 'Hartlepool', 'Havering', 'Herefordshire', 'Hertford', 'Hillingdon', 'Hounslow', 'Isle of Wight', 'Islington', 'Kensington and Chelsea', 'Kent', 'Kingston upon Hull, City of', 'Kingston upon Thames', 'Kirklees', 'Knowsley', 'Lambeth', 'Lancashire', 'Leeds', 'Leicester', 'Leicestershire', 'Lewisham', 'Lincolnshire', 'Liverpool', 'London, City of', 'Luton', 'Manchester', 'Medway', 'Merton', 'Middlesbrough', 'Milton Keynes', 'Newcastle upon Tyne', 'Newham', 'Norfolk', 'Northamptonshire', 'North East Lincolnshire', 'North Lincolnshire', 'North Somerset', 'North Tyneside', 'Northumberland', 'North Yorkshire', 'Nottingham', 'Nottinghamshire', 'Oldham', 'Oxfordshire', 'Peterborough', 'Plymouth', 'Poole', 'Portsmouth', 'Reading', 'Redbridge', 'Redcar and Cleveland', 'Richmond upon Thames', 'Rochdale', 'Rotherham', 'Rutland', 'Salford', 'Shropshire', 'Sandwell', 'Sefton', 'Sheffield', 'Slough', 'Solihull', 'Somerset', 'S.ampton', 'S.end-on-Sea', 'S. Gloucestershire', 'S. Tyneside', 'S.wark', 'Staffordshire', 'St. Helens', 'Stockport', 'Stockton-on-Tees', 'Stoke-on-Trent', 'Suffolk', 'Sunderland', 'Surrey', 'Sutton', 'Swindon', 'Tameside', 'Telford and Wrekin', 'Thurrock', 'Torbay', 'Tower Hamlets', 'Trafford', 'Wakefield', 'Walsall', 'Waltham Forest', 'Wandsworth', 'Warrington', 'Warwickshire', 'West Berkshire', 'Westminster', 'West Sussex', 'Wigan', 'Wiltshire', 'Windsor and Maidenhead', 'Wirral', 'Wokingham', 'Wolverhampton', 'Worcestershire', 'York', 'Antrim', 'Ards', 'Armagh', 'Ballymena', 'Ballymoney', 'Banbridge', 'Belfast', 'Carrickfergus', 'Castlereagh', 'Coleraine', 'Cookstown', 'Craigavon', 'Down', 'Dungannon', 'Fermanagh', 'Larne', 'Limavady', 'Lisburn', 'Derry', 'Magherafelt', 'Moyle', 'Newry and Mourne', 'Newtownabbey', 'North Down', 'Omagh', 'Strabane', 'Aberdeen City', 'Aberdeenshire', 'Angus', 'Argyll and Bute', 'Scottish Borders, The', 'Clackmannanshire', 'Dumfries and Galloway', 'Dundee City', 'East Ayrshire', 'East Dunbartonshire', 'East Lothian', 'East Renfrewshire', 'Edinburgh, City of', 'Falkirk', 'Fife', 'Glasgow City', 'Highland', 'Inverclyde', 'Midlothian', 'Moray', 'North Ayrshire', 'North Lanarkshire', 'Orkney', 'Perth and Kinross', 'Renfrewshire', 'Shetland Is.', 'S. Ayrshire', 'S. Lanarkshire', 'Stirling', 'West Dunbartonshire', 'Eilean Siar', 'West Lothian', 'Isle of Anglesey', 'Blaenau Gwent', 'Bridgend', 'Caerphilly', 'Cardiff', 'Ceredigion', 'Carmarthenshire', 'Conwy', 'Denbighshire', 'Flintshire', 'Gwynedd', 'Merthyr Tydfil', 'Monmouthshire', 'Neath Port Talbot', 'Newport', 'Pembrokeshire', 'Powys', 'Rhondda Cynon Taff', 'Swansea', 'Torfaen', 'Vale of Glamorgan, The', 'Wrexham'), 'GD' => array('St. Andrew', 'St. David', 'St. George', 'St. John', 'St. Mark', 'St. Patrick'), 'GE' => array('Abashis Raioni', 'Abkhazia', 'Adigenis Raioni', 'Ajaria', 'Akhalgoris Raioni', "Akhalk'alak'is Raioni", "Akhalts'ikhis Raioni", 'Akhmetis Raioni', 'Ambrolauris Raioni', 'Aspindzis Raioni', "Baghdat'is Raioni", 'Bolnisis Raioni', 'Borjomis Raioni', "Chiat'ura", "Ch'khorotsqus Raioni", "Ch'okhatauris Raioni", "Dedop'listsqaros Raioni", 'Dmanisis Raioni', "Dushet'is Raioni", 'Gardabanis Raioni', 'Gori', 'Goris Raioni', 'Gurjaanis Raioni', 'Javis Raioni', "K'arelis Raioni", 'Kaspis Raioni', 'Kharagaulis Raioni', 'Khashuris Raioni', 'Khobis Raioni', 'Khonis Raioni', "K'ut'aisi", 'Lagodekhis Raioni', "Lanch'khut'is Raioni", 'Lentekhis Raioni', 'Marneulis Raioni', 'Martvilis Raioni', 'Mestiis Raioni', "Mts'khet'is Raioni", 'Ninotsmindis Raioni', 'Onis Raioni', "Ozurget'is Raioni", "P'ot'i", 'Qazbegis Raioni', 'Qvarlis Raioni', "Rust'avi", "Sach'kheris Raioni", 'Sagarejos Raioni', 'Samtrediis Raioni', 'Senakis Raioni', 'Sighnaghis Raioni', "T'bilisi", "T'elavis Raioni", "T'erjolis Raioni", "T'et'ritsqaros Raioni", "T'ianet'is Raioni", 'Tqibuli', "Ts'ageris Raioni", 'Tsalenjikhis Raioni', 'Tsalkis Raioni', 'Tsqaltubo', 'Vanis Raioni', "Zestap'onis Raioni", 'Zugdidi', 'Zugdidis Raioni'), 'GH' => array('Greater Accra', 'Ashanti', 'Brong-Ahafo', 'Central', 'Eastern', 'N.', 'Volta', 'W.', 'Upper East', 'Upper West'), 'GL' => array('Nordgronland', 'Ostgronland', 'Vestgronland'), 'GM' => array('Banjul', 'Lower River', 'MacCarthy Is.', 'Upper River', 'W.', 'North Bank'), 'GN' => array('Beyla', 'Boffa', 'Boke', 'Conakry', 'Dabola', 'Dalaba', 'Dinguiraye', 'Faranah', 'Forecariah', 'Fria', 'Gaoual', 'Gueckedou', 'Kerouane', 'Kindia', 'Kissidougou', 'Koundara', 'Kouroussa', 'Macenta', 'Mali', 'Mamou', 'Pita', 'Telimele', 'Tougue', 'Yomou', 'Coyah', 'Dubreka', 'Kankan', 'Koubia', 'Labe', 'Lelouma', 'Lola', 'Mandiana', 'Nzerekore', 'Siguiri'), 'GQ' => array('Annobon', 'Bioko Norte', 'Bioko Sur', 'Centro Sur', 'Kie-Ntem', 'Litoral', 'Wele-Nzas'), 'GR' => array('Evros', 'Rodos', 'Rhodes', 'Tilos', 'Kos', 'Kalymnos', 'Karpathos', 'Leros', 'Patmos', 'Lipsi', 'Nissiros', 'Kastelorizo', 'Symi', 'Halki', 'Amorgos', 'Santorini', 'Paros', 'Siros', 'Mikonos', 'Tinos', 'Andros', 'Naxos', 'Hios', 'Lesvos', 'Ikaria', 'Samos', 'Kalinos', 'Nissilos', 'Karpothos', 'Kassos', 'Eosos', 'Astipalea', 'Kea', 'Kithnos', 'Serisos', 'Milos', 'Creta', 'Crete', 'Kithira', 'Salamina', 'Egina', 'Spetsas', 'Idra', 'Poros', 'Skiros', 'Skopolos', 'Skiathos', 'Kalonissos', 'Limnos', 'Samothraki', 'Thasos', 'Kefalonia', 'Ithaki', 'Lefkaea', 'Corfu', 'Paxi', 'Sifnos', 'Rodhopi', 'Xanthi', 'Drama', 'Serrai', 'Kilkis', 'Pella', 'Florina', 'Kastoria', 'Grevena', 'Kozani', 'Imathia', 'Thessaloniki', 'Kavala', 'Khalkidhiki', 'Pieria', 'Ioannina', 'Thesprotia', 'Preveza', 'Arta', 'Larisa', 'Trikala', 'Kardhitsa', 'Magnisia', 'Kerkira', 'Levkas', 'Kefallinia', 'Zakinthos', 'Fthiotis', 'Evritania', 'Aitolia kai Akarnania', 'Fokis', 'Voiotia', 'Evvoia', 'Attiki', 'Argolis', 'Korinthia', 'Akhaia', 'Ilia', 'Messinia', 'Arkadhia', 'Lakonia', 'Khania', 'Rethimni', 'Iraklion', 'Lasithi', 'Dhodhekanisos', 'Samos', 'Kikladhes', 'Khios', 'Lesvos'), 'GT' => array('Alta Verapaz', 'Baja Verapaz', 'Chimaltenango', 'Chiquimula', 'El Progreso', 'Escuintla', 'Guatemala', 'Huehuetenango', 'Izabal', 'Jalapa', 'Jutiapa', 'Peten', 'Quetzaltenango', 'Quiche', 'Retalhuleu', 'Sacatepequez', 'San Marcos', 'Santa Rosa', 'Solola', 'Suchitepequez', 'Totonicapan', 'Zacapa'), 'GW' => array('Bafata', 'Quinara', 'Oio', 'Bolama', 'Cacheu', 'Tombali', 'Gabu', 'Bissau', 'Biombo'), 'GY' => array('Barima-Waini', 'Cuyuni-Mazaruni', 'Demerara-Mahaica', 'East Berbice-Corentyne', 'Essequibo Is.-West Demerara', 'Mahaica-Berbice', 'Pomeroon-Supenaam', 'Potaro-Siparuni', 'Upper Demerara-Berbice', 'Upper Takutu-Upper Essequibo'), 'HN' => array('Atlantida', 'Choluteca', 'Colon', 'Comayagua', 'Copan', 'Cortes', 'El Paraiso', 'Francisco Morazan', 'Gracias a Dios', 'Intibuca', 'Islas de la Bahia', 'La Paz', 'Lempira', 'Ocotepeque', 'Olancho', 'Santa Barbara', 'Valle', 'Yoro'), 'HR' => array('Bjelovarsko-Bilogorska', 'Brodsko-Posavska', 'Dubrovacko-Neretvanska', 'Istarska', 'Karlovacka', 'Koprivnicko-Krizevacka', 'Krapinsko-Zagorska', 'Licko-Senjska', 'Medimurska', 'Osjecko-Baranjska', 'Pozesko-Slavonska', 'Primorsko-Goranska', 'Sibensko-Kninska', 'Sisacko-Moslavacka', 'Splitsko-Dalmatinska', 'Varazdinska', 'Viroviticko-Podravska', 'Vukovarsko-Srijemska', 'Zadarska', 'Zagrebacka', 'Grad Zagreb'), 'HT' => array('Nord-Ouest', 'Artibonite', 'Centre', "Grand' Anse", 'Nord', 'Nord-Est', 'Ouest', 'Sud', 'Sud-Est'), 'HU' => array('Bacs-Kiskun', 'Baranya', 'Bekes', 'Borsod-Abauj-Zemplen', 'Budapest', 'Csongrad', 'Debrecen', 'Fejer', 'Gyor-Moson-Sopron', 'Hajdu-Bihar', 'Heves', 'Komarom-Esztergom', 'Miskolc', 'Nograd', 'Pecs', 'Pest', 'Somogy', 'Szabolcs-Szatmar-Bereg', 'Szeged', 'Jasz-Nagykun-Szolnok', 'Tolna', 'Vas', 'Veszprem', 'Zala', 'Gyor', 'Bekescsaba', 'Dunaujvaros', 'Eger', 'Hodmezovasarhely', 'Kaposvar', 'Kecskemet', 'Nagykanizsa', 'Nyiregyhaza', 'Sopron', 'Szekesfehervar', 'Szolnok', 'Szombathely', 'Tatabanya', 'Veszprem', 'Zalaegerszeg'), 'ID' => array('Aceh', 'Bali', 'Bengkulu', 'Jakarta Raya', 'Jambi', 'Jawa Tengah', 'Jawa Timur', 'Papua', 'Yogyakarta', 'Kalimantan Barat', 'Kalimantan Selatan', 'Kalimantan Tengah', 'Kalimantan Timur', 'Lampung', 'Nusa Tenggara Barat', 'Nusa Tenggara Timur', 'Riau', 'Sulawesi Selatan', 'Sulawesi Tengah', 'Sulawesi Tenggara', 'Sumatera Barat', 'Sumatera Utara', 'Timor Timur', 'Maluku', 'Maluku Utara', 'Jawa Barat', 'Sulawesi Utara', 'Sumatera Selatan', 'Banten', 'Gorontalo', 'Kepulauan Bangka Belitung'), 'IE' => array('Carlow', 'Cavan', 'Clare', 'Cork', 'Donegal', 'Dublin', 'Galway', 'Kerry', 'Kildare', 'Kilkenny', 'Leitrim', 'Laois', 'Limerick', 'Longford', 'Louth', 'Mayo', 'Meath', 'Monaghan', 'Offaly', 'Roscommon', 'Sligo', 'Tipperary', 'Waterford', 'Westmeath', 'Wexford', 'Wicklow'), 'IL' => array('HaDarom', 'HaMerkaz', 'HaZafon', 'Hefa', 'Tel Aviv', 'Yerushalayim'), 'IN' => array('Andaman and Nicobar Is.', 'Andhra Pradesh', 'Assam', 'Chandigarh', 'Dadra and Nagar Haveli', 'Delhi', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jammu and Kashmir', 'Kerala', 'Lakshadweep', 'Maharashtra', 'Manipur', 'Meghalaya', 'Karnataka', 'Nagaland', 'Orissa', 'Pondicherry', 'Punjab', 'Rajasthan', 'Tamil Nadu', 'Tripura', 'West Bengal', 'Sikkim', 'Arunachal Pradesh', 'Mizoram', 'Daman and Diu', 'Goa', 'Bihar', 'Madhya Pradesh', 'Uttar Pradesh', 'Chhattisgarh', 'Jharkhand', 'Uttaranchal'), 'IQ' => array('Al Anbar', 'Al Basrah', 'Al Muthanna', 'Al Qadisiyah', 'As Sulaymaniyah', 'Babil', 'Baghdad', 'Dahuk', 'Dhi Qar', 'Diyala', 'Arbil', "Karbala'", "At Ta'mim", 'Maysan', 'Ninawa', 'Wasit', 'An Najaf', 'Salah ad Din'), 'IR' => array('Azarbayjan-e Bakhtari', 'Azarbayjan-e Khavari', 'Chahar Mahall va Bakhtiari', 'Sistan va Baluchestan', 'Kohkiluyeh va Buyer Ahmadi', 'Fars', 'Gilan', 'Hamadan', 'Ilam', 'Hormozgan', 'Bakhtaran', 'Khuzestan', 'Kordestan', 'Bushehr', 'Lorestan', 'Semnan', 'Tehran', 'Esfahan', 'Kerman', 'Khorasan', 'Yazd', 'Markazi', 'Mazandaran', 'Zanjan', 'Golestan', 'Qazvin', 'Qom'), 'IS' => array('Akranes', 'Akureyri', 'Arnessysla', 'Austur-Bardastrandarsysla', 'Austur-Hunavatnssysla', 'Austur-Skaftafellssysla', 'Borgarfjardarsysla', 'Dalasysla', 'Eyjafjardarsysla', 'Gullbringusysla', 'Hafnarfjordur', 'Husavik', 'Isafjordur', 'Keflavik', 'Kjosarsysla', 'Kopavogur', 'Myrasysla', 'Neskaupstadur', 'Nordur-Isafjardarsysla', 'Nordur-Mulasysla', 'Nordur-Tingeyjarsysla', 'Olafsfjordur', 'Rangarvallasysla', 'Reykjavik', 'Saudarkrokur', 'Seydisfjordur', 'Siglufjordur', 'Skagafjardarsysla', 'Snafellsnes- og Hnappadalssysla', 'Strandasysla', 'Sudur-Mulasysla', 'Sudur-Tingeyjarsysla', 'Vestmannaeyjar', 'Vestur-Bardastrandarsysla', 'Vestur-Hunavatnssysla', 'Vestur-Isafjardarsysla', 'Vestur-Skaftafellssysla'), 'IT' => array('Abruzzo', 'Basilicata', 'Calabria', 'Campania', 'Emilia-Romagna', 'Friuli-Venezia Giulia', 'Lazio', 'Liguria', 'Lombardia', 'Marche', 'Molise', 'Piemonte', 'Puglia', 'Sardegna', 'Sicilia', 'Toscana', 'Trentino-Alto Adige', 'Umbria', "Valle d'Aosta", 'Veneto'), 'JM' => array('Clarendon', 'Hanover', 'Manchester', 'Portland', 'St. Andrew', 'St. Ann', 'St. Catherine', 'St. Elizabeth', 'St. James', 'St. Mary', 'St. Thomas', 'Trelawny', 'Westmoreland', 'Kingston'), 'JO' => array("Al Balqa'", 'Ma', 'Al Karak', 'Al Mafraq', 'At Tafilah', 'Az Zarqa', 'Irbid'), 'JP' => array('Aichi', 'Akita', 'Aomori', 'Chiba', 'Ehime', 'Fukui', 'Fukuoka', 'Fukushima', 'Gifu', 'Gumma', 'Hiroshima', 'Hokkaido', 'Hyogo', 'Ibaraki', 'Ishikawa', 'Iwate', 'Kagawa', 'Kagoshima', 'Kanagawa', 'Kochi', 'Kumamoto', 'Kyoto', 'Mie', 'Miyagi', 'Miyazaki', 'Nagano', 'Nagasaki', 'Nara', 'Niigata', 'Oita', 'Okayama', 'Osaka', 'Saga', 'Saitama', 'Shiga', 'Shimane', 'Shizuoka', 'Tochigi', 'Tokushima', 'Tokyo', 'Tottori', 'Toyama', 'Wakayama', 'Yamagata', 'Yamaguchi', 'Yamanashi', 'Okinawa'), 'KE' => array('Central', 'Coast', 'Eastern', 'Nairobi Area', 'North-Eastern', 'Nyanza', 'Rift Valley', 'W.'), 'KG' => array('Batken'), 'KH' => array('Kampong Cham', 'Kampong Chhnang', 'Kampong Spoe', 'Kampong Thum', 'Kampot', 'Kandal', 'Kaoh Kong', 'Kracheh', 'Mondol Kiri', 'Phnum Penh', 'Pouthisat', 'Preah Vihear', 'Prey Veng', 'Rotanokiri', 'Siemreab-Otdar Meanchey', 'Stoeng Treng', 'Svay Rieng', 'Takev', 'Batdambang', 'Pailin'), 'KI' => array('Gilbert Is.', 'Line Is.', 'Phoenix Is.'), 'KM' => array('Anjouan', 'Grande Comore', 'Moheli'), 'KN' => array('Christ Church Nichola Town', 'St. Anne Sandy Point', 'St. George Basseterre', 'St. George Gingerland', 'St. James Windward', 'St. John Capisterre', 'St. John Figtree', 'St. Mary Cayon', 'St. Paul Capisterre', 'St. Paul Charlestown', 'St. Peter Basseterre', 'St. Thomas Lowland', 'St. Thomas Middle Is.', 'Trinity Palmetto Point'), 'KP' => array('Chagang-do', 'Hamgyong-namdo', 'Hwanghae-namdo', 'Hwanghae-bukto', 'Kaesong-si', 'Kangwon-do', "P'yongan-bukto", "P'yongyang-si", 'Yanggang-do', "Namp'o-si", "P'yongan-namdo", 'Hamgyong-bukto', 'Najin Sonbong-si'), 'KR' => array('Cheju-do', 'Cholla-bukto', "Ch'ungch'ong-bukto", 'Kangwon-do', 'Pusan-jikhalsi', "Soul-t'ukpyolsi", "Inch'on-jikhalsi", 'Kyonggi-do', 'Kyongsang-bukto', 'Taegu-jikhalsi', 'Cholla-namdo', "Ch'ungch'ong-namdo", 'Kwangju-jikhalsi', 'Taejon-jikhalsi', 'Kyongsang-namdo', 'Ulsan-gwangyoksi'), 'KW' => array('Al Ahmadi', 'Al Kuwayt', 'Hawalli'), 'KY' => array('Creek', 'Eastern', 'Midland', 'S. Town', 'Spot Bay', 'Stake Bay', 'West End', 'W.'), 'KZ' => array('Almaty', 'Almaty City', 'Aqmola', 'AqtÃ¶be', 'Astana', 'Atyrau', 'West Kazakhstan', 'Bayqonyr', 'Mangghystau', 'S. Kazakhstan', 'Pavlodar', 'Qaraghandy', 'Qostanay', 'Qyzylorda', 'East Kazakhstan', 'North Kazakhstan', 'Zhambyl'), 'LA' => array('Attapu', 'Champasak', 'Houaphan', 'Khammouan', 'Louang Namtha', 'Louangphrabang', 'Oudomxai', 'Phongsali', 'Saravan', 'Savannakhet', 'Vientiane', 'Xaignabouri', 'Xiangkhoang'), 'LB' => array('Beqaa', 'Liban-Nord', 'Beyrouth', 'Mont-Liban', 'Liban-Sud', 'Nabatiye'), 'LC' => array('Anse-la-Raye', 'Dauphin', 'Castries', 'Choiseul', 'Dennery', 'Gros-Islet', 'Laborie', 'Micoud', 'Soufriere', 'Vieux-Fort', 'Praslin'), 'LI' => array('Balzers', 'Eschen', 'Gamprin', 'Mauren', 'Planken', 'Ruggell', 'Schaan', 'Schellenberg', 'Triesen', 'Triesenberg', 'Vaduz'), 'LK' => array('Amparai', 'Anuradhapura', 'Badulla', 'Batticaloa', 'Galle', 'Hambantota', 'Kalutara', 'Kandy', 'Kegalla', 'Kurunegala', 'Matale', 'Matara', 'Moneragala', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura', 'Trincomalee', 'Colombo', 'Gampaha', 'Jaffna', 'Mannar', 'Mullaittivu', 'Vavuniya'), 'LR' => array('Bong', 'Grand Jide', 'Grand Bassa', 'Grand Cape Mount', 'Lofa', 'Maryland', 'Monrovia', 'Montserrado', 'Nimba', 'Sino'), 'LS' => array('Berea', 'Butha-Buthe', 'Leribe', 'Mafeteng', 'Maseru', 'Mohales Hoek', 'Mokhotlong', 'Qachas Nek', 'Quthing', 'Thaba-Tseka'), 'LT' => array('Alytaus Apskritis', 'Kauno Apskritis', 'Klaipedos Apskritis', 'Marijampoles Apskritis', 'Panevezio Apskritis', 'Siauliu Apskritis', 'Taurages Apskritis', 'Telsiu Apskritis', 'Utenos Apskritis', 'Vilniaus Apskritis'), 'LU' => array('Diekirch', 'Grevenmacher', 'Luxembourg'), 'LV' => array('Aglona Municipality', 'Aizkraukle Municipality', 'Aizpute Municipality', 'Akniste Municipality', 'Aloja Municipality', 'Alsunga Municipality', 'Aluksne Municipality', 'Amata Municipality', 'Ape Municipality', 'Auce Municipality', 'Adazi Municipality', 'Babite Municipality', 'Baldone Municipality', 'Baltinava Municipality', 'Balvi Municipality', 'Bauska Municipality', 'Beverina Municipality', 'Broceni Municipality', 'Burtnieki Municipality', 'Carnikava Municipality', 'Cesis Municipality', 'Cesvaine Municipality', 'Cibla Municipality', 'Dagda Municipality', 'Daugavpils city', 'Daugavpils Municipality', 'Dobele Municipality', 'Dundaga Municipality', 'Durbe Municipality', 'Engure Municipality', 'Ergli Municipality', 'Garkalne Municipality', 'Grobina Municipality', 'Gulbene Municipality', 'Iecava Municipality', 'Ikskile Municipality', 'Incukalns Municipality', 'Ilukste Municipality', 'Jaunjelgava Municipality', 'Jaunpiebalga Municipality', 'Jaunpils Municipality', 'Jekabpils city', 'Jekabpils Municipality', 'Jelgava city', 'Jelgava Municipality', 'Jurmala city', 'Kandava Municipality', 'Karsava Municipality', 'Koknese Municipality', 'Kraslava Municipality', 'Krimulda Municipality', 'Krustpils Municipality', 'Kuldiga Municipality', 'Kegums Municipality', 'Kekava Municipality', 'Lielvarde Municipality', 'Liepaja city', 'Ligatne Municipality', 'Limbazi Municipality', 'Livani Municipality', 'Lubana Municipality', 'Ludza Municipality', 'Madona Municipality', 'Malpils Municipality', 'Marupe Municipality', 'Mazsalaca Municipality', 'Naukseni Municipality', 'Nereta Municipality', 'Nica Municipality', 'Ogre Municipality', 'Olaine Municipality', 'Ozolnieki Municipality', 'Pargauja Municipality', 'Pavilosta Municipality', 'Plavinas Municipality', 'Preili Municipality', 'Priekule Municipality', 'Priekuli Municipality', 'Rauna Municipality', 'Rezekne city', 'Rezekne Municipality', 'Riebini Municipality', 'Riga city', 'Roja Municipality', 'Ropazi Municipality', 'Rucava Municipality', 'Rugaji Municipality', 'Rundale Municipality', 'Rujiena Municipality', 'Salacgriva Municipality', 'Sala Municipality', 'Salaspils Municipality', 'Saldus Municipality', 'Saulkrasti Municipality', 'Seja Municipality', 'Sigulda Municipality', 'Skriveri Municipality', 'Skrunda Municipality', 'Smiltene Municipality', 'Stopini Municipality', 'Strenci Municipality', 'Talsi Municipality', 'Tervete Municipality', 'Tukums Municipality', 'Vainode Municipality', 'Valka Municipality', 'Valmiera Municipality', 'Varaklani Municipality', 'Varkava Municipality', 'Vecpiebalga Municipality', 'Vecumnieki Municipality', 'Ventspils city', 'Ventspils Municipality', 'Viesite Municipality', 'Vilaka Municipality', 'Vilani Municipality', 'Zilupe Municipality'), 'LY' => array('Al', 'Al Jufrah', 'Al Kufrah', "Ash Shati'", 'Murzuq', 'Sabha', 'Tarhunah', 'Tubruq', 'Zlitan', 'Ajdabiya', 'Al Fatih', 'Al Jabal al Akhdar', 'Al Khums', 'An Nuqat al Khams', 'Awbari', 'Az Zawiyah', 'Banghazi', 'Darnah', 'Ghadamis', 'Gharyan', 'Misratah', 'Sawfajjin', 'Surt', 'Tarabulus', 'Yafran'), 'MA' => array('Agadir', 'Al Hoceima', 'Azilal', 'Ben Slimane', 'Beni Mellal', 'Boulemane', 'Casablanca', 'Chaouen', 'El Jadida', 'El Kelaa des Srarhna', 'Er Rachidia', 'Essaouira', 'Fes', 'Figuig', 'Kenitra', 'Khemisset', 'Khenifra', 'Khouribga', 'Marrakech', 'Meknes', 'Nador', 'Ouarzazate', 'Oujda', 'Rabat-Sale', 'Safi', 'Settat', 'Tanger', 'Tata', 'Taza', 'Tiznit', 'Guelmim', 'Ifrane', 'Laayoune', 'Tan-Tan', 'Taounate', 'Sidi Kacem', 'Taroudannt', 'Tetouan', 'Larache'), 'MC' => array('La Condamine', 'Monaco', 'Monte-Carlo'), 'MD' => array('Balti', 'Cahul', 'Chisinau', 'Stinga Nistrului', 'Edinet', 'Gagauzia', 'Lapusna', 'Orhei', 'Soroca', 'Tighina', 'Ungheni'), 'MG' => array('Antsiranana', 'Fianarantsoa', 'Mahajanga', 'Toamasina', 'Antananarivo', 'Toliara'), 'MK' => array('Aracinovo', 'Bac', 'Belcista', 'Berovo', 'Bistrica', 'Bitola', 'Blatec', 'Bogdanci', 'Bogomila', 'Bogovinje', 'Bosilovo', 'Brvenica', 'Cair', 'Capari', 'Caska', 'Cegrane', 'Centar', 'Centar Zupa', 'Cesinovo', 'Cucer-Sandevo', 'Debar', 'Delcevo', 'Delogozdi', 'Demir Hisar', 'Demir Kapija', 'Dobrusevo', 'Dolna Banjica', 'Dolneni', 'Dorce Petrov', 'Drugovo', 'Dzepciste', 'Gazi Baba', 'Gevgelija', 'Gostivar', 'Gradsko', 'Ilinden', 'Izvor', 'Jegunovce', 'Kamenjane', 'Karbinci', 'Karpos', 'Kavadarci', 'Kicevo', 'Kisela Voda', 'Klecevce', 'Kocani', 'Konce', 'Kondovo', 'Konopiste', 'Kosel', 'Kratovo', 'Kriva Palanka', 'Krivogastani', 'Krusevo', 'Kuklis', 'Kukurecani', 'Kumanovo', 'Labunista', 'Lipkovo', 'Lozovo', 'Lukovo', 'Makedonska Kamenica', 'Makedonski Brod', 'Mavrovi Anovi', 'Meseista', 'Miravci', 'Mogila', 'Murtino', 'Negotino', 'Negotino-Polosko', 'Novaci', 'Novo Selo', 'Oblesevo', 'Ohrid', 'Orasac', 'Orizari', 'Oslomej', 'Pehcevo', 'Petrovec', 'Plasnica', 'Podares', 'Prilep', 'Probistip', 'Radovis', 'Rankovce', 'Resen', 'Rosoman', 'Rostusa', 'Samokov', 'Saraj', 'Sipkovica', 'Sopiste', 'Sopotnica', 'Srbinovo', 'Staravina', 'Star Dojran', 'Staro Nagoricane', 'Stip', 'Struga', 'Strumica', 'Studenicani', 'Suto Orizari', 'Sveti Nikole', 'Tearce', 'Tetovo', 'Topolcani', 'Valandovo', 'Vasilevo', 'Veles', 'Velesta', 'Vevcani', 'Vinica', 'Vitoliste', 'Vranestica', 'Vrapciste', 'Vratnica', 'Vrutok', 'Zajas', 'Zelenikovo', 'Zelino', 'Zitose', 'Zletovo', 'Zrnovci'), 'ML' => array('Bamako', 'Gao', 'Kayes', 'Mopti', 'Segou', 'Sikasso', 'Koulikoro', 'Tombouctou'), 'MM' => array('Rakhine State', 'Chin State', 'Irrawaddy', 'Kachin State', 'Karan State', 'Kayah State', 'Magwe', 'Mandalay', 'Pegu', 'Sagaing', 'Shan State', 'Tenasserim', 'Mon State', 'Rangoon'), 'MN' => array('Andrijevica', 'Bar', 'Berane', 'Bijelo Polje', 'Budva', 'Cetinje', 'Danilovgrad', 'Herceg Novi', 'Kolašin', 'Kotor', 'Mojkovac', 'Nikšić', 'Plav', 'Plužine', 'Pljevlja', 'Podgorica', 'Golubovci', 'Tuzi', 'Rožaje', 'Šavnik', 'Tivat', 'Ulcinj', 'Žabljak'), 'MO' => array('Ilhas', 'Macau'), 'MR' => array('Hodh Ech Chargui', 'Hodh El Gharbi', 'Assaba', 'Gorgol', 'Brakna', 'Trarza', 'Adrar', 'Dakhlet Nouadhibou', 'Tagant', 'Guidimaka', 'Tiris Zemmour', 'Inchiri'), 'MS' => array('St. Anthony', 'St. Georges', 'St. Peter'), 'MU' => array('Black River', 'Flacq', 'Grand Port', 'Moka', 'Pamplemousses', 'Plaines Wilhems', 'Port Louis', 'Riviere du Rempart', 'Savanne', 'Agalega Is.', 'Cargados Carajos', 'Rodrigues'), 'MV' => array('Seenu', 'Aliff', 'Laviyani', 'Waavu', 'Laamu', 'Haa Aliff', 'Thaa', 'Meemu', 'Raa', 'Faafu', 'Daalu', 'Baa', 'Haa Daalu', 'Shaviyani', 'Noonu', 'Kaafu', 'Gaafu Aliff', 'Gaafu Daalu', 'Naviyani'), 'MW' => array('Chikwawa', 'Chiradzulu', 'Chitipa', 'Thyolo', 'Dedza', 'Dowa', 'Karonga', 'Kasungu', 'Machinga', 'Lilongwe', 'Mangochi', 'Mchinji', 'Mulanje', 'Mzimba', 'Ntcheu', 'Nkhata Bay', 'Nkhotakota', 'Nsanje', 'Ntchisi', 'Rumphi', 'Salima', 'Zomba', 'Blantyre', 'Mwanza'), 'MX' => array('Aguascalientes', 'Baja California', 'Baja California Sur', 'Campeche', 'Chiapas', 'Chihuahua', 'Coahuila de Zaragoza', 'Colima', 'Distrito Federal', 'Durango', 'Guanajuato', 'Guerrero', 'Hidalgo', 'Jalisco', 'Mexico', 'Michoacan de Ocampo', 'Morelos', 'Nayarit', 'Nuevo Leon', 'Oaxaca', 'Puebla', 'Queretaro de Arteaga', 'Quintana Roo', 'San Luis Potosi', 'Sinaloa', 'Sonora', 'Tabasco', 'Tamaulipas', 'Tlaxcala', 'Veracruz-Llave', 'Yucatan', 'Zacatecas'), 'MY' => array('Johor', 'Kedah', 'Kelantan', 'Melaka', 'Negeri Sembilan', 'Pahang', 'Perak', 'Perlis', 'Pulau Pinang', 'Sarawak', 'Selangor', 'Terengganu', 'Wilayah Persekutuan', 'Labuan', 'Sabah'), 'MZ' => array('Cabo Delgado', 'Gaza', 'Inhambane', 'Maputo', 'Sofala', 'Nampula', 'Niassa', 'Tete', 'Zambezia', 'Manica'), 'NA' => array('Bethanien', 'Caprivi Oos', 'Boesmanland', 'Gobabis', 'Grootfontein', 'Kaokoland', 'Karibib', 'Keetmanshoop', 'Luderitz', 'Maltahohe', 'Okahandja', 'Omaruru', 'Otjiwarongo', 'Outjo', 'Owambo', 'Rehoboth', 'Swakopmund', 'Tsumeb', 'Karasburg', 'Windhoek', 'Damaraland', 'Hereroland Oos', 'Hereroland Wes', 'Kavango', 'Mariental', 'Namaland'), 'NE' => array('Agadez', 'Diffa', 'Dosso', 'Maradi', 'Niamey', 'Tahoua', 'Zinder'), 'NG' => array('Lagos', 'Abuja Capital Territory', 'Ogun', 'Akwa Ibom', 'Cross River', 'Kaduna', 'Katsina', 'Anambra', 'Benue', 'Borno', 'Imo', 'Kano', 'Kwara', 'Niger', 'Oyo', 'Adamawa', 'Delta', 'Edo', 'Jigawa', 'Kebbi', 'Kogi', 'Osun', 'Taraba', 'Yobe', 'Abia', 'Bauchi', 'Enugu', 'Ondo', 'Plateau', 'Rivers', 'Sokoto', 'Bayelsa', 'Ebonyi', 'Ekiti', 'Gombe', 'Nassarawa', 'Zamfara'), 'NI' => array('Boaco', 'Carazo', 'Chinandega', 'Chontales', 'Esteli', 'Granada', 'Jinotega', 'Leon', 'Madriz', 'Managua', 'Masaya', 'Matagalpa', 'Nueva Segovia', 'Rio San Juan', 'Rivas', 'Zelaya'), 'NL' => array('Drenthe', 'Friesland', 'Gelderland', 'Groningen', 'Limburg', 'Noord-Brabant', 'Noord-Holland', 'Overijssel', 'Utrecht', 'Zeeland', 'Zuid-Holland', 'Dronten', 'Zuidelijke IJsselmeerpolders', 'Lelystad', 'Overijssel', 'Flevoland'), 'NO' => array('Agder', 'Innlandet', 'Møre og Romsdal', 'Nordland', 'Oslo', 'Rogaland', 'Troms og Finnmark', 'Trøndelag', 'Vestfold og Telemark', 'Vestland', 'Viken'), 'NP' => array('Bagmati', 'Bheri', 'Dhawalagiri', 'Gandaki', 'Janakpur', 'Karnali', 'Kosi', 'Lumbini', 'Mahakali', 'Mechi', 'Narayani', 'Rapti', 'Sagarmatha', 'Seti'), 'NR' => array('Aiwo', 'Anabar', 'Anetan', 'Anibare', 'Baiti', 'Boe', 'Buada', 'Denigomodu', 'Ewa', 'Ijuw', 'Meneng', 'Nibok', 'Uaboe', 'Yaren'), 'NZ' => array('Northland', 'Auckland', 'Waikato', 'Bay of Plenty', 'East Cape', "Hawke's Bay", 'Taranaki', 'Manawatu-Wanganui', 'Wellington', 'Tasman', 'Nelson', 'Marlborough', 'West Coast', 'Canterbury', 'Otago', 'Southland'), 'OM' => array('Ad Dakhiliyah', 'Al Batinah', 'Al Wusta', 'Ash Sharqiyah', 'Az Zahirah', 'Masqat', 'Musandam', 'Zufar'), 'PA' => array('Bocas del Toro', 'Chiriqui', 'Cocle', 'Colon', 'Darien', 'Herrera', 'Los Santos', 'Panama', 'San Blas', 'Veraguas'), 'PE' => array('Amazonas', 'Ancash', 'Apurimac', 'Arequipa', 'Ayacucho', 'Cajamarca', 'Callao', 'Cusco', 'Huancavelica', 'Huanuco', 'Ica', 'Junin', 'La Libertad', 'Lambayeque', 'Lima', 'Loreto', 'Madre de Dios', 'Moquegua', 'Pasco', 'Piura', 'Puno', 'San Martin', 'Tacna', 'Tumbes', 'Ucayali'), 'PG' => array('Central', 'Gulf', 'Milne Bay', 'N.', 'S.ern Highlands', 'W.', 'North Solomons', 'Chimbu', 'Eastern Highlands', 'East New Britain', 'East Sepik', 'Madang', 'Manus', 'Morobe', 'New Ireland', 'W. Highlands', 'West New Britain', 'Sandaun', 'Enga', 'National Capital'), 'PH' => array('Abra', 'Agusan del Norte', 'Agusan del Sur', 'Aklan', 'Albay', 'Antique', 'Bataan', 'Batanes', 'Batangas', 'Benguet', 'Bohol', 'Bukidnon', 'Bulacan', 'Cagayan', 'Camarines Norte', 'Camarines Sur', 'Camiguin', 'Capiz', 'Catanduanes', 'Cavite', 'Cebu', 'Basilan', 'Eastern Samar', 'Davao', 'Davao del Sur', 'Davao Oriental', 'Ifugao', 'Ilocos Norte', 'Ilocos Sur', 'Iloilo', 'Isabela', 'Kalinga-Apayao', 'Laguna', 'Lanao del Norte', 'Lanao del Sur', 'La Union', 'Leyte', 'Marinduque', 'Masbate', 'Mindoro Occidental', 'Mindoro Oriental', 'Misamis Occidental', 'Misamis Oriental', 'Mountain', 'Negros Oriental', 'Nueva Ecija', 'Nueva Vizcaya', 'Palawan', 'Pampanga', 'Pangasinan', 'Rizal', 'Romblon', 'Samar', 'Maguindanao', 'North Cotabato', 'Sorsogon', 'S.ern Leyte', 'Sulu', 'Surigao del Norte', 'Surigao del Sur', 'Tarlac', 'Zambales', 'Zamboanga del Norte', 'Zamboanga del Sur', 'N. Samar', 'Quirino', 'Siquijor', 'S. Cotabato', 'Sultan Kudarat', 'Tawitawi', 'Angeles', 'Bacolod', 'Bago', 'Baguio', 'Bais', 'Basilan City', 'Batangas City', 'Butuan', 'Cabanatuan', 'Cadiz', 'Cagayan de Oro', 'Calbayog', 'Caloocan', 'Canlaon', 'Cavite City', 'Cebu City', 'Cotabato', 'Dagupan', 'Danao', 'Dapitan', 'Davao City', 'Dipolog', 'Dumaguete', 'General Santos', 'Gingoog', 'Iligan', 'Iloilo City', 'Iriga', 'La Carlota', 'Laoag', 'Lapu-Lapu', 'Legaspi', 'Lipa', 'Lucena', 'Mandaue', 'Manila', 'Marawi', 'Naga', 'Olongapo', 'Ormoc', 'Oroquieta', 'Ozamis', 'Pagadian', 'Palayan', 'Pasay', 'Puerto Princesa', 'Quezon City', 'Roxas', 'San Carlos', 'San Jose', 'San Pablo', 'Silay', 'Surigao', 'Tacloban', 'Tagaytay', 'Tagbilaran', 'Tangub', 'Toledo', 'Trece Martires', 'Zamboanga', 'Aurora', 'Quezon', 'Negros Occidental'), 'PK' => array('Federally Administered Tribal Areas', 'Balochistan', 'North-West Frontier', 'Punjab', 'Sindh', 'Azad Kashmir', 'N. Areas', 'Islamabad'), 'PL' => array('Dolnośląskie', 'Kujawsko-pomorskie', 'Lubelskie', 'Lubuskie', 'Łódzkie', 'Małopolskie', 'Mazowieckie', 'Opolskie', 'Podkarpackie', 'Podlaskie', 'Pomorskie', 'Śląskie', 'Świętokrzyskie', 'Warmińsko-mazurskie', 'Wielkopolskie', 'Zachodniopomorskie'), 'PT' => array('Algarve', 'Alto Alentejo', 'Baixo Alentejo', 'Beira Alta', 'Beira Baixa', 'Beira Litoral', 'Douro Litoral', 'Estremadura', 'Minho', 'Ribatejo', 'Trás-os-Montes e Alto Douro'), 'PY' => array('Alto Parana', 'Amambay', 'Boqueron', 'Caaguazu', 'Caazapa', 'Central', 'Concepcion', 'Cordillera', 'Guaira', 'Itapua', 'Misiones', 'Neembucu', 'Paraguari', 'Presidente Hayes', 'San Pedro', 'Alto Paraguay', 'Canindeyu', 'Chaco', 'Nueva Asuncion'), 'QA' => array('Ad Dawhah', 'Al Ghuwariyah', 'Al Jumaliyah', 'Al Khawr', 'Al Wakrah', 'Ar Rayyan', 'Jariyan al Batnah', 'Madinat ach Shamal', 'Umm Salal'), 'RO' => array('Alba', 'Arad', 'Arges', 'Bacau', 'Bihor', 'Bistrita-Nasaud', 'Botosani', 'Braila', 'Brasov', 'Bucuresti', 'Buzau', 'Caras-Severin', 'Cluj', 'Constanta', 'Covasna', 'Dambovita', 'Dolj', 'Galati', 'Gorj', 'Harghita', 'Hunedoara', 'Ialomita', 'Iasi', 'Maramures', 'Mehedinti', 'Mures', 'Neamt', 'Olt', 'Prahova', 'Salaj', 'Satu Mare', 'Sibiu', 'Suceava', 'Teleorman', 'Timis', 'Tulcea', 'Vaslui', 'Valcea', 'Vrancea', 'Calarasi', 'Giurgiu'), 'RU' => array('Adygey', 'Aga Buryat', 'Gorno-Altay', 'Altay', 'Amur', "Arkhangel'sk", "Astrakhan'", 'Bashkortostan', 'Belgorod', 'Bryansk', 'Buryat', 'Chechnya', 'Chelyabinsk', 'Chita', 'Chukot', 'Chuvash', 'Dagestan', 'Evenk', 'Ingush', 'Irkutsk', 'Ivanovo', 'Kabardin-Balkar', 'Kaliningrad', 'Kalmyk', 'Kaluga', 'Kamchatka', 'Karachay-Cherkess', 'Karelia', 'Kemerovo', 'Khabarovsk', 'Khakass', 'Khanty-Mansiy', 'Kirov', 'Komi', 'Komi-Permyak', 'Koryak', 'Kostroma', 'Krasnodar', 'Krasnoyarsk', 'Kurgan', 'Kursk', 'Leningrad', 'Lipetsk', 'Magadan', 'Mariy-El', 'Mordovia', 'Moskva', 'Moscow City', 'Murmansk', 'Nenets', 'Nizhegorod', 'Novgorod', 'Novosibirsk', 'Omsk', 'Orenburg', 'Orel', 'Penza', "Perm'", "Primor'ye", 'Pskov', 'Rostov', "Ryazan'", 'Sakha', 'Sakhalin', 'Samara', 'St. Petersburg City', 'Saratov', 'North Ossetia', 'Smolensk', "Stavropol'", 'Sverdlovsk', 'Tambov', 'Tatarstan', 'Taymyr', 'Tomsk', 'Tula', "Tver'", "Tyumen'", 'Tuva', 'Udmurt', "Ul'yanovsk", 'Ust-Orda Buryat', 'Vladimir', 'Volgograd', 'Vologda', 'Voronezh', 'Yamal-Nenets', "Yaroslavl'", 'Yevrey'), 'RW' => array('Butare', 'Byumba', 'Cyangugu', 'Gikongoro', 'Gisenyi', 'Gitarama', 'Kibungo', 'Kibuye', 'Kigali', 'Ruhengeri'), 'SA' => array('Al Bahah', 'Al Jawf', 'Al Madinah', 'Ash Sharqiyah', 'Al Qasim', 'Al Qurayyat', 'Ar Riyad', "Ha'il", 'Makkah', 'Al Hudud ash Shamaliyah', 'Najran', 'Jizan', 'Tabuk'), 'SB' => array('Malaita', 'W.', 'Central', 'Guadalcanal', 'Isabel', 'Makira', 'Temotu'), 'SC' => array('Anse aux Pins', 'Anse Boileau', 'Anse Etoile', 'Anse Louis', 'Anse Royale', 'Baie Lazare', 'Baie St.e Anne', 'Beau Vallon', 'Bel Air', 'Bel Ombre', 'Cascade', 'Glacis', "Grand' Anse", "Grand' Anse", 'La Digue', 'La Riviere Anglaise', 'Mont Buxton', 'Mont Fleuri', 'Plaisance', 'Pointe La Rue', 'Port Glaud', 'St. Louis', 'Takamaka'), 'SD' => array('Al Wusta', "Al Istiwa'iyah", 'Al Khartum', 'Ash Shamaliyah', 'Ash Sharqiyah', 'Bahr al Ghazal', 'Darfur', 'Kurdufan'), 'SE' => array('Alvsborgs Lan', 'Blekinge Lan', 'Gavleborgs Lan', 'Goteborgs och Bohus Lan', 'Gotlands Lan', 'Hallands Lan', 'Jamtlands Lan', 'Jonkopings Lan', 'Kalmar Lan', 'Kopparbergs Lan', 'Kristianstads Lan', 'Kronobergs Lan', 'Malmohus Lan', 'Norrbottens Lan', 'Orebro Lan', 'Ostergotlands Lan', 'Skaraborgs Lan', 'Sodermanlands Lan', 'Uppsala Lan', 'Varmlands Lan', 'Vasterbottens Lan', 'Vasternorrlands Lan', 'Vastmanlands Lan', 'Stockholms Lan', 'Skane Lan', 'Vastra Gotaland'), 'SH' => array('Ascension', 'St. Helena', 'Tristan da Cunha'), 'SI' => array('Mura','Drava','Carinthia','Savinja','Central Sava','Lower Sava','Southeast Slovenia','Littoral–Inner Carniola','Central Slovenia','Upper Carniola','Gorizia','Coastal–Karst'), 'SK' => array('Banska Bystrica', 'Bratislava', 'Kosice', 'Nitra', 'Presov', 'Trencin', 'Trnava', 'Zilina'), 'SL' => array('Eastern', 'N.', 'S.ern', 'W. Area'), 'SM' => array('Acquaviva', 'Chiesanuova', 'Domagnano', 'Faetano', 'Fiorentino', 'Borgo Maggiore', 'San Marino', 'Monte Giardino', 'Serravalle'), 'SN' => array('Dakar', 'Diourbel', 'St.-Louis', 'Tambacounda', 'Thies', 'Louga', 'Fatick', 'Kaolack', 'Kolda', 'Ziguinchor'), 'SO' => array('Bakool', 'Banaadir', 'Bari', 'Bay', 'Galguduud', 'Gedo', 'Hiiraan', 'Jubbada Dhexe', 'Jubbada Hoose', 'Mudug', 'Nugaal', 'Sanaag', 'Shabeellaha Dhexe', 'Shabeellaha Hoose', 'Togdheer', 'Woqooyi Galbeed'), 'SR' => array('Brokopondo', 'Commewijne', 'Coronie', 'Marowijne', 'Nickerie', 'Para', 'Paramaribo', 'Saramacca', 'Sipaliwini', 'Wanica'), 'ST' => array('Principe', 'Sao Tome'), 'SV' => array('Ahuachapan', 'Cabanas', 'Chalatenango', 'Cuscatlan', 'La Libertad', 'La Paz', 'La Union', 'Morazan', 'San Miguel', 'San Salvador', 'Santa Ana', 'San Vicente', 'Sonsonate', 'Usulutan'), 'SY' => array('Al Hasakah', 'Al Ladhiqiyah', 'Al Qunaytirah', 'Ar Raqqah', "As Suwayda'", 'Dar', 'Dayr az Zawr', 'Rif Dimashq', 'Halab', 'Hamah', 'Hims', 'Idlib', 'Dimashq', 'Tartus'), 'SZ' => array('Hhohho', 'Lubombo', 'Manzini', 'Shiselweni', 'Praslin'), 'TD' => array('Batha', 'Biltine', 'Borkou-Ennedi-Tibesti', 'Chari-Baguirmi', 'Guera', 'Kanem', 'Lac', 'Logone Occidental', 'Logone Oriental', 'Mayo-Kebbi', 'Moyen-Chari', 'Ouaddai', 'Salamat', 'Tandjile'), 'TG' => array('Amlame', 'Aneho', 'Atakpame', 'Bafilo', 'Bassar', 'Dapaong', 'Kante', 'Klouto', 'Lama-Kara', 'Lome', 'Mango', 'Niamtougou', 'Notse', 'Kpagouda', 'Badou', 'Sotouboua', 'Tabligbo', 'Tsevie', 'Tchamba', 'Tchaoudjo', 'Vogan'), 'TH' => array('Mae Hong Son', 'Chiang Mai', 'Chiang Rai', 'Nan', 'Lamphun', 'Lampang', 'Phrae', 'Tak', 'Sukhothai', 'Uttaradit', 'Kamphaeng Phet', 'Phitsanulok', 'Phichit', 'Phetchabun', 'Uthai Thani', 'Nakhon Sawan', 'Nong Khai', 'Loei', 'Udon Thani', 'Sakon Nakhon', 'Nakhon Phanom', 'Khon Kaen', 'Kalasin', 'Maha Sarakham', 'Roi Et', 'Chaiyaphum', 'Nakhon Ratchasima', 'Buriram', 'Surin', 'Sisaket', 'Narathiwat', 'Chai Nat', 'Sing Buri', 'Lop Buri', 'Ang Thong', 'Phra Nakhon Si Ayutthaya', 'Saraburi', 'Nonthaburi', 'Pathum Thani', 'Krung Thep', 'Phayao', 'Samut Prakan', 'Nakhon Nayok', 'Chachoengsao', 'Prachin Buri', 'Chon Buri', 'Rayong', 'Chanthaburi', 'Trat', 'Kanchanaburi', 'Suphan Buri', 'Ratchaburi', 'Nakhon Pathom', 'Samut Songkhram', 'Samut Sakhon', 'Phetchaburi', 'Prachuap Khiri Khan', 'Chumphon', 'Ranong', 'Surat Thani', 'Phangnga', 'Phuket', 'Krabi', 'Nakhon Si Thammarat', 'Trang', 'Phatthalung', 'Satun', 'Songkhla', 'Pattani', 'Yala', 'Ubon Ratchathani', 'Yasothon'), 'TM' => array('Ahal', 'Balkan', 'Dashoguz', 'Lebap', 'Mary'), 'TN' => array('El Kef', 'Mahdia', 'Mounastir', 'Kasserine', 'Kairouan', 'Ariana', 'Beja', 'Bizerte', 'Jendouba', 'Mednine', 'Nabeul', 'Gabes', 'Gafsa', 'Guebelli', 'Sfax', 'Sidi Bouzid', 'Siliana', 'Sousse', 'Tataouin', 'Tozeur', 'Zaghouen'), 'TO' => array('Ha', 'Tongatapu', 'Vava'), 'TR' => array('Adiyaman', 'Afyon', 'Agri', 'Amasya', 'Antalya', 'Artvin', 'Aydin', 'Balikesir', 'Bilecik', 'Bingol', 'Bitlis', 'Bolu', 'Burdur', 'Bursa', 'Canakkale', 'Corum', 'Denizli', 'Diyarbakir', 'Edirne', 'Elazig', 'Erzincan', 'Erzurum', 'Eskisehir', 'Giresun', 'Hatay', 'Icel', 'Isparta', 'Istanbul', 'Izmir', 'Kastamonu', 'Kayseri', 'Kirklareli', 'Kirsehir', 'Kocaeli', 'Kutahya', 'Malatya', 'Manisa', 'Kahramanmaras', 'Mugla', 'Mus', 'Nevsehir', 'Ordu', 'Rize', 'Sakarya', 'Samsun', 'Sinop', 'Sivas', 'Tekirdag', 'Tokat', 'Trabzon', 'Tunceli', 'Sanliurfa', 'Usak', 'Van', 'Yozgat', 'Ankara', 'Gumushane', 'Hakkari', 'Konya', 'Mardin', 'Nigde', 'Siirt', 'Aksaray', 'Batman', 'Bayburt', 'Karaman', 'Kirikkale', 'Sirnak', 'Adana', 'Cankiri', 'Gaziantep', 'Kars', 'Zonguldak', 'Ardahan', 'Bartin', 'Igdir', 'Karabuk', 'Kilis', 'Osmaniye', 'Yalova'), 'TT' => array('Arima', 'Caroni', 'Mayaro', 'Nariva', 'Port-of-Spain', 'St. Andrew', 'St. David', 'St. George', 'St. Patrick', 'San Fernando', 'Tobago', 'Victoria'), 'TW' => array('Fu-chien', 'Kao-hsiung', "T'ai-pei", "T'ai-wan"), 'TZ' => array('Arusha', 'Pwani', 'Dodoma', 'Iringa', 'Kigoma', 'Kilimanjaro', 'Lindi', 'Mara', 'Mbeya', 'Morogoro', 'Mtwara', 'Mwanza', 'Pemba North', 'Ruvuma', 'Shinyanga', 'Singida', 'Tabora', 'Tanga', 'Kagera', 'Pemba S.', 'Zanzibar Central', 'Zanzibar North', 'Dar es Salaam', 'Rukwa', 'Zanzibar Urban'), 'UA' => array("Cherkas'ka Oblast'", "Chernihivs'ka Oblast'", "Chernivets'ka Oblast'", "Dnipropetrovs'ka Oblast'", "Donets'ka Oblast'", "Ivano-Frankivs'ka Oblast'", "Kharkivs'ka Oblast'", "Khersons'ka Oblast'", "Khmel'nyts'ka Oblast'", "Kirovohrads'ka Oblast'", 'Krym', 'Kyyiv', "Kyyivs'ka Oblast'", "Luhans'ka Oblast'", "L'vivs'ka Oblast'", "Mykolayivs'ka Oblast'", "Odes'ka Oblast'", "Poltavs'ka Oblast'", "Rivnens'ka Oblast'", "Sevastopol'", "Sums'ka Oblast'", "Ternopil's'ka Oblast'", "Vinnyts'ka Oblast'", "Volyns'ka Oblast'", "Zakarpats'ka Oblast'", "Zaporiz'ka Oblast'", "Zhytomyrs'ka Oblast'"), 'UG' => array('Busoga', 'Karamoja', 'S. Buganda', 'Central', 'Eastern', 'Nile', 'North Buganda', 'N.', 'S.ern', 'W.', 'Adjumani', 'Bugiri', 'Busia', 'Katakwi', 'Nakasongola', 'Sembabule'), 'US' => array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'District of Columbia', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennyslvania', 'Rhode Is.', 'S. Carolina', 'S. Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'), 'UY' => array('Artigas', 'Canelones', 'Cerro Largo', 'Colonia', 'Durazno', 'Flores', 'Florida', 'Lavalleja', 'Maldonado', 'Montevideo', 'Paysandu', 'Rio Negro', 'Rivera', 'Rocha', 'Salto', 'San Jose', 'Soriano', 'Tacuarembo', 'Treinta y Tres'), 'UZ' => array('Andijon', 'Bukhoro', 'Farghona', 'Jizzakh', 'Khorazm', 'Namangan', 'Nawoiy', 'Qashqadaryo', 'Qoraqalpoghiston', 'Samarqand', 'Sirdaryo', 'Surkhondaryo', 'Toshkent', 'Toshkent'), 'VC' => array('Charlotte', 'St. Andrew', 'St. David', 'St. George', 'St. Patrick', 'Grenadines'), 'VE' => array('Amazonas', 'Anzoategui', 'Apure', 'Aragua', 'Barinas', 'Bolivar', 'Carabobo', 'Cojedes', 'Delta Amacuro', 'Falcon', 'Guarico', 'Lara', 'Merida', 'Miranda', 'Monagas', 'Nueva Esparta', 'Portuguesa', 'Sucre', 'Tachira', 'Trujillo', 'Yaracuy', 'Zulia', 'Territorio Insular Francisco de Miranda', 'Distrito Federal', 'Vargas'), 'VN' => array('Bac Thai', 'Ben Tre', 'Cao Bang', 'Ha Bac', 'Hai Hung', 'Hai Phong', 'Lai Chau', 'Lam Dong', 'Long An', 'Quang Nam-Da Nang', 'Quang Ninh', 'Son La', 'Tay Ninh', 'Thanh Hoa', 'Thai Binh', 'Tien Giang', 'Lang Son', 'An Giang', 'Dac Lac', 'Dong Nai', 'Dong Thap', 'Kien Giang', 'Minh Hai', 'Song Be', 'Vinh Phu', 'Ha Noi', 'Ho Chi Minh', 'Ba Ria-Vung Tau', 'Binh Dinh', 'Binh Thuan', 'Can Tho', 'Gia Lai', 'Ha Giang', 'Ha Tay', 'Ha Tinh', 'Hoa Binh', 'Khanh Hoa', 'Kon Tum', 'Lao Cai', 'Nam Ha', 'Nghe An', 'Ninh Binh', 'Ninh Thuan', 'Phu Yen', 'Quang Binh', 'Quang Ngai', 'Quang Tri', 'Soc Trang', 'Thua Thien', 'Tra Vinh', 'Tuyen Quang', 'Vinh Long', 'Yen Bai'), 'VU' => array('Ambrym', 'Aoba', 'Banks', 'Efate', 'Epi', 'Malakula', 'Paama', 'Pentecote', 'Santo', 'Shepherd', 'Tafea'), 'WS' => array('Aiga-i-le-Tai', 'Atua', 'Fa', 'Gaga', 'Va', 'Gagaifomauga', 'Palauli', 'Satupa', 'Tuamasaga', 'Vaisigano'), 'YE' => array('Abyan', 'Al Mahrah', 'Hadramawt', 'Shabwah', 'Lahij', "Al Bayda'", 'Al Hudaydah', 'Al Jawf', 'Al Mahwit', 'Dhamar', 'Hajjah', 'Ibb', "Ma'rib", 'Sa', 'San', 'Ta'), 'ZA' => array('W. Cape', 'N. Cape', 'Eastern Cape', 'Free State', 'Limpopo', 'North West', 'KwaZulu-Natal', 'Gauteng', 'Mpumalanga'), 'ZM' => array('W.', 'Central', 'Eastern', 'Luapula', 'N.', 'North-W.', 'S.ern', 'Copperbelt', 'Lusaka'), 'ZR' => array('Bandundu', 'Equateur', 'Kasai-Occidental', 'Kasai-Oriental', 'Shaba', 'Kinshasa', 'Kivu', 'Bas-Zaire', 'Haut-Zaire'), 'ZW' => array('Manicaland', 'Midlands', 'Mashonaland Central', 'Mashonaland East', 'Mashonaland West', 'Matabeleland North', 'Matabeleland S.', 'Masvingo', 'Bulawayo', 'Harare'), 'CW' => array('Curaçao'), 'AW' => array('Aruba'), 'BQ' => array('Bonaire, Sint Eustatius and Saba'));

	return $FIPS;
}

/**
 *
 * @package Jomres\Core\Functions
*
* Returns an array of country names
* 
* Not currently used. Was used when building dropdowns but has now been superceeded by the jomres_countries singleton
*
* @depreciated
*
*/
function countryNameArray()
{
	$countryNames = array('Andorra', 'United A. Emir.', 'Afghanistan', 'Antigua', 'Anguilla', 'Albania', 'Armenia', 'Neth. Ant.', 'Angola', 'Antarctica', 'Argentina', 'Am. Samoa', 'Austria', 'Australia', 'Aruba', 'Azerbaijan', 'Bosnia Herz', 'Barbados', 'Bangladesh', 'Belgium', 'Burkina Faso', 'Bulgaria', 'Bahrain', 'Burundi', 'Benin', 'Bermuda', 'Brunei', 'Bolivia', 'Brazil', 'Bahamas', 'Bhutan', 'Bouvet Is.', 'Botswana', 'Belarus', 'Belize', 'Canada', 'Cocos Is.', 'Congo D. R.', 'Central Af. R.', 'Congo', 'Switzerland', "Cote D'Ivoire", 'Cook
	Is.', 'Chile', 'Cameroon', 'China', 'Colombia', 'Costa Rica', 'Cuba', 'Cape
	Verde', 'Christmas Is.', 'Cyprus', 'Czech R.ublic', 'Germany', 'Djibouti', 'Denmark', 'Dominica', 'Dominican R.', 'Algeria', 'Ecuador', 'Estonia', 'Egypt', 'W. Sahara', 'Eritrea', 'Spain', 'Ethiopia', 'Finland', 'Fiji', 'Falkland Is.', 'Micronesia', 'Faroe
	Is.', 'France', 'France, Metro.', 'Gabon', 'United Kingdom', 'Grenada', 'Georgia', 'Fr. Guiana', 'Ghana', 'Gibraltar', 'Greenland', 'Gambia', 'Guinea', 'Guadeloupe', 'Eq. Guinea', 'Greece', 'S. Georgia', 'Guatemala', 'Guam', 'Guinea-Bissau', 'Guyana', 'Hong Kong', 'Heard Is.', 'Honduras', 'Croatia', 'Haiti', 'Hungary', 'Indonesia', 'Ireland', 'Israel', 'India', 'B. Ind. Oc. Tr.', 'Iraq', 'Iran', 'Iceland', 'Italy', 'Jamaica', 'Jordan', 'Japan', 'Kenya', 'Kyrgyzstan', 'Cambodia', 'Kiribati', 'Comoros', 'St. Kitts and Nevis', 'Korea, D. R.', 'Korea, R.', 'Kuwait', 'Cayman Is.', 'Kazakstan', 'Lao P.Democratic R.ublic', 'Lebanon', 'St. Lucia', 'Liechtenstein', 'Sri Lanka', 'Liberia', 'Lesotho', 'Lithuania', 'Luxembourg', 'Latvia', 'Libyan A. J.', 'Morocco', 'Monaco', 'Moldova, R.ublic
	of', 'Madagascar', 'Marshall Is.', 'Macedonia', 'Mali', 'Myanmar', 'Mongolia', 'Macau', 'N. Mariana Is.', 'Martinique', 'Mauritania', 'Montserrat', 'Malta', 'Mauritius', 'Maldives', 'Malawi', 'Mexico', 'Malaysia', 'Mozambique', 'Namibia', 'New Caledonia', 'Niger', 'Norfolk Is.', 'Nigeria', 'Nicaragua', 'Netherlands', 'Norway', 'Nepal', 'Nauru', 'Niue', 'New Zealand', 'Oman', 'Panama', 'Peru', 'Fr.
	Polynesia', 'Pap. N. Guinea', 'Philippines', 'Pakistan', 'Poland', 'St.
	Pierre and Miquelon', 'Pitcairn', 'Puerto Rico', 'Palestinian Tr.', 'Portugal', 'Palau', 'Paraguay', 'Qatar', 'Reunion', 'Romania', 'Russian Fed.', 'Rwanda', 'Saudi Arabia', 'Solomon Is.', 'Seychelles', 'Sudan', 'Sweden', 'Singapore', 'St. Helena', 'Slovenia', 'Svalbard JM', 'Slovakia', 'Sierra Leone', 'San Marino', 'Senegal', 'Somalia', 'Suriname', 'Sao Tome', 'El Salvador', 'Syria', 'Swaziland', 'Turks Caicos Is.', 'Chad', 'Fr. S.
	Tr.', 'Togo', 'Thailand', 'Tajikistan', 'Tokelau', 'Turkmenistan', 'Tunisia', 'Tonga', 'East Timor', 'Turkey', 'Trinidad Tob.', 'Tuvalu', 'Taiwan', 'Tanzania', 'Ukraine', 'Uganda', 'U. States Minor Out. Is.', 'United States', 'Uruguay', 'Uzbekistan', 'Vatican City', 'St. Vincent', 'Venezuela', 'Virgin Is., British', 'Virgin Is., U.S.', 'Vietnam', 'Vanuatu', 'Wallis', 'Samoa', 'Yemen', 'Mayotte', 'Yugoslavia', 'S. Africa', 'Zambia', 'Zaire', 'Zimbabwe', 'Serbia', 'Montenegro', 'Curaçao', 'Aruba', 'Bonaire, Sint Eustatius and Saba');

	return $countryNames;
}

/**
 *
 * @package Jomres\Core\Functions
*
* Replaces the older countryCodes array, which is now only used for importing into the #__jomres_countries table
* 
*/
function countryCodesArray()
{
	$jomres_countries = jomres_singleton_abstract::getInstance('jomres_countries');
	$jomres_countries->get_all_countries();

	$codes = array();
	foreach ($jomres_countries->countries as $country) {
		$codes[ $country[ 'countrycode' ] ] = $country[ 'countryname' ];
	}

	return $codes;
}

/**
 *
 * @package Jomres\Core\Functions
*
* Used by the installer when initially populating the countries table
* 
*/
function old_countryCodesArray($translate = true)
{
	$countryCodes = array(

		'AD' => 'Andorra', 'AE' => 'United A. Emir.', 'AF' => 'Afghanistan', 'AG' => 'Antigua', 'AI' => 'Anguilla', 'AL' => 'Albania', 'AM' => 'Armenia', 'AN' => 'Neth. Ant.', 'AO' => 'Angola', 'AQ' => 'Antarctica', 'AR' => 'Argentina', 'AS' => 'Am. Samoa', 'AT' => 'Austria', 'AU' => 'Australia', 'AW' => 'Aruba', 'AZ' => 'Azerbaijan', 'BA' => 'Bosnia Herz', 'BB' => 'Barbados', 'BD' => 'Bangladesh', 'BE' => 'Belgium', 'BF' => 'Burkina Faso', 'BG' => 'Bulgaria', 'BH' => 'Bahrain', 'BI' => 'Burundi', 'BJ' => 'Benin', 'BM' => 'Bermuda', 'BN' => 'Brunei', 'BO' => 'Bolivia', 'BR' => 'Brazil', 'BS' => 'Bahamas', 'BT' => 'Bhutan', 'BV' => 'Bouvet Is.', 'BW' => 'Botswana', 'BY' => 'Belarus', 'BZ' => 'Belize', 'CA' => 'Canada', 'CC' => 'Cocos  Is.', 'CD' => 'Congo D. R.', 'CF' => 'Central Af. R.', 'CG' => 'Congo', 'CH' => 'Switzerland', 'CI' => "Cote D'Ivoire", 'CK' => 'Cook Is.', 'CL' => 'Chile', 'CM' => 'Cameroon', 'CN' => 'China', 'CO' => 'Colombia', 'CR' => 'Costa Rica', 'CU' => 'Cuba', 'CV' => 'Cape Verde', 'CX' => 'Christmas Is.', 'CY' => 'Cyprus', 'CZ' => 'Czech R.ublic', 'DE' => 'Germany', 'DJ' => 'Djibouti', 'DK' => 'Denmark', 'DM' => 'Dominica', 'DO' => 'Dominican R.', 'DZ' => 'Algeria', 'EC' => 'Ecuador', 'EE' => 'Estonia', 'EG' => 'Egypt', 'EH' => 'W. Sahara', 'ER' => 'Eritrea', 'ES' => 'Spain', 'ET' => 'Ethiopia', 'FI' => 'Finland', 'FJ' => 'Fiji', 'FK' => 'Falkland Is.', 'FM' => 'Micronesia', 'FO' => 'Faroe Is.', 'FR' => 'France', 'FX' => 'France, Metro.', 'GA' => 'Gabon', 'GB' => 'United Kingdom', 'GD' => 'Grenada', 'GE' => 'Georgia', 'GF' => 'Fr. Guiana', 'GH' => 'Ghana', 'GI' => 'Gibraltar', 'GL' => 'Greenland', 'GM' => 'Gambia', 'GN' => 'Guinea', 'GP' => 'Guadeloupe', 'GQ' => 'Eq. Guinea', 'GR' => 'Greece', 'GS' => 'S. Georgia', 'GT' => 'Guatemala', 'GU' => 'Guam', 'GW' => 'Guinea-Bissau', 'GY' => 'Guyana', 'HK' => 'Hong Kong', 'HM' => 'Heard Is.', 'HN' => 'Honduras', 'HR' => 'Croatia', 'HT' => 'Haiti', 'HU' => 'Hungary', 'ID' => 'Indonesia', 'IE' => 'Ireland', 'IL' => 'Israel', 'IN' => 'India', 'IO' => 'B. Ind. Oc. Tr.', 'IQ' => 'Iraq', 'IR' => 'Iran', 'IS' => 'Iceland', 'IT' => 'Italy', 'JM' => 'Jamaica', 'JO' => 'Jordan', 'JP' => 'Japan', 'KE' => 'Kenya', 'KG' => 'Kyrgyzstan', 'KH' => 'Cambodia', 'KI' => 'Kiribati', 'KM' => 'Comoros', 'KN' => 'St. Kitts and Nevis', 'KP' => 'Korea, D. R.', 'KR' => 'Korea, R.', 'KW' => 'Kuwait', 'KY' => 'Cayman Is.', 'KZ' => 'Kazakstan', 'LA' => 'Lao P.D. R.', 'LB' => 'Lebanon', 'LC' => 'St. Lucia', 'LI' => 'Liechtenstein', 'LK' => 'Sri Lanka', 'LR' => 'Liberia', 'LS' => 'Lesotho', 'LT' => 'Lithuania', 'LU' => 'Luxembourg', 'LV' => 'Latvia', 'LY' => 'Libyan A. J.', 'MA' => 'Morocco', 'MC' => 'Monaco', 'MD' => 'Moldova', 'MG' => 'Madagascar', 'MH' => 'Marshall Is.', 'MK' => 'Macedonia', 'ML' => 'Mali', 'MM' => 'Myanmar', 'MN' => 'Mongolia', 'MO' => 'Macau', 'MP' => 'N. Mariana Is.', 'MQ' => 'Martinique', 'MR' => 'Mauritania', 'MS' => 'Montserrat', 'MT' => 'Malta', 'MU' => 'Mauritius', 'MV' => 'Maldives', 'MW' => 'Malawi', 'MX' => 'Mexico', 'MY' => 'Malaysia', 'MZ' => 'Mozambique', 'NA' => 'Namibia', 'NC' => 'New Caledonia', 'NE' => 'Niger', 'NF' => 'Norfolk Is.', 'NG' => 'Nigeria', 'NI' => 'Nicaragua', 'NL' => 'Netherlands', 'NO' => 'Norway', 'NP' => 'Nepal', 'NR' => 'Nauru', 'NU' => 'Niue', 'NZ' => 'New Zealand', 'OM' => 'Oman', 'PA' => 'Panama', 'PE' => 'Peru', 'PF' => 'Fr. Polynesia', 'PG' => 'Pap. N. Guinea', 'PH' => 'Philippines', 'PK' => 'Pakistan', 'PL' => 'Poland', 'PM' => 'St. Pierre', 'PN' => 'Pitcairn', 'PR' => 'Puerto Rico', 'PS' => 'Palestinian Tr.', 'PT' => 'Portugal', 'PW' => 'Palau', 'PY' => 'Paraguay', 'QA' => 'Qatar', 'RE' => 'Reunion', 'RO' => 'Romania', 'RU' => 'Russian Fed.', 'RW' => 'Rwanda', 'SA' => 'Saudi Arabia', 'SB' => 'Solomon Is.', 'SC' => 'Seychelles', 'SD' => 'Sudan', 'SE' => 'Sweden', 'SG' => 'Singapore', 'SH' => 'St. Helena', 'SI' => 'Slovenia', 'SJ' => 'Svalbard JM', 'SK' => 'Slovakia', 'SL' => 'Sierra Leone', 'SM' => 'San Marino', 'SN' => 'Senegal', 'SO' => 'Somalia', 'SR' => 'Suriname', 'ST' => 'Sao Tome', 'SV' => 'El Salvador', 'SY' => 'Syria', 'SZ' => 'Swaziland', 'TC' => 'Turks Caicos Is.', 'TD' => 'Chad', 'TF' => 'Fr. S. Tr.', 'TG' => 'Togo', 'TH' => 'Thailand', 'TJ' => 'Tajikistan', 'TK' => 'Tokelau', 'TM' => 'Turkmenistan', 'TN' => 'Tunisia', 'TO' => 'Tonga', 'TP' => 'East Timor', 'TR' => 'Turkey', 'TT' => 'Trinidad Tob.', 'TV' => 'Tuvalu', 'TW' => 'Taiwan', 'TZ' => 'Tanzania', 'UA' => 'Ukraine', 'UG' => 'Uganda', 'UM' => 'U. States Out. Is.', 'US' => 'United States', 'UY' => 'Uruguay', 'UZ' => 'Uzbekistan', 'VA' => 'Vatican City', 'VC' => 'St. Vincent', 'VE' => 'Venezuela', 'VG' => 'Virgin Is., British', 'VI' => 'Virgin Is., U.S.', 'VN' => 'Vietnam', 'VU' => 'Vanuatu', 'WF' => 'Wallis', 'WS' => 'Samoa', 'YE' => 'Yemen', 'YT' => 'Mayotte', 'ZA' => 'S. Africa', 'ZM' => 'Zambia', 'ZR' => 'Zaire', 'ZW' => 'Zimbabwe', 'RS' => 'Serbia', 'MN' => 'Montenegro', 'CW' => 'Curaçao', 'AW' => 'Aruba', 'BQ' => 'Bonaire, Sint Eustatius and Saba', );

	if ($translate) {
		$new_arr = array();
		foreach ($countryCodes as $key => $val) {
			$new_arr[ $key ] = jr_gettext('_JOMRES_CUSTOMTEXT_COUNTRYNAMES_'.$key, $val, false, false);
		}
		$countryCodes = $new_arr;
	}

	asort($countryCodes);

	return $countryCodes;
}

/**
 *
 * @package Jomres\Core\Functions
*
* During installation/update, if the countries table is empty, then populate it. 
* 
*/
function import_countries()
{
	$jomres_countries = jomres_singleton_abstract::getInstance('jomres_countries');
	$jomres_countries->get_all_countries();
	
	if (empty($jomres_countries->countries)) {
		$query = '
			INSERT INTO #__jomres_countries 
			(countrycode,countryname) 
			VALUES 
			';

		$countries = old_countryCodesArray(false);
		$rows = '';
		foreach ($countries as $countrycode => $countryname) {
			$rows .= '(\''.$countrycode.'\',\''.filter_var($countryname, FILTER_SANITIZE_SPECIAL_CHARS).'\'),';
		}
		$rows = rtrim($rows, ',');
		$result = doInsertSql($query.$rows, '');

		$jomres_countries->countries = false;
		$jomres_countries->get_all_countries();

		return true;
	}
}

/**
 *
 * @package Jomres\Core\Functions
*
* During installation/update, if the regions table is empty, then populate it. 
* 
*/
function import_regions()
{
	$jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
	$jomres_regions->get_all_regions();

	if (empty($jomres_regions->regions)) {
		$query = '
			INSERT INTO #__jomres_regions 
			(countrycode,regionname) 
			VALUES 
			';

		$regions = regionNamesArray();

		$rows = '';
		foreach ($regions as $countrycode => $country) {
			foreach ($country as $region) {
				$rows .= '(\''.$countrycode.'\',\''.filter_var($region, FILTER_SANITIZE_SPECIAL_CHARS).'\'),';
			}
		}
		$rows = rtrim($rows, ',');
		
		$result = doInsertSql($query.$rows, '');

		$jomres_regions->regions = false;
		$jomres_regions->get_all_regions();
		
		return true;
	}
}
