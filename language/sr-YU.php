<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//German Translation since Jomres V2: Roger Perren (http://www.blueforce.ch)
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
/**
 *
 * @package Jomres\Core\Languages
 *
 * Language files.
 *
 **/
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Brza rezervacija');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Prikaži profile');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Opšte konfiguracije');
jr_define('_JOMRES_COM_MR_BACK', 'Nazad');
jr_define('_JOMRES_COM_MR_YES', 'Da');
jr_define('_JOMRES_COM_MR_NO', 'Ne');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Novo');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Novi objekat');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Novi gost');
jr_define('_JOMRES_COM_MR_SAVE', 'Sačuvaj');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Ime');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Dolazak');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Odlazak');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Korisničko ime');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Pristupni nivo');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Korisnik izmenjen');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Sve rezervacije');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Izmeni rezervacije');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Dolazak/Odlazak');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Gost');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Soba');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Plaćanje');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Ime');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Prezime');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Specijalni zahtevi');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Neki specijalni zahtjevi mogu zahtevati extra plaćanja.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Poništi rezervaciju');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Broj kuće ili naziv kuće');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ime');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Grad');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Poštanski broj');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Tel');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobilni');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Email');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Ne možete poništiti ovu rezervaciju jer je gost već prijavljen');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Depozit nije plaćen');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Potvrdi poništenje');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Rezervacija poništena');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dana do dolaska');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Tip rezervacije');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Crno');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepcija');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Ime sobe');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Soba');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Sprat');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Aktivirati nedozvoljeni pristup ?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Max osoba');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Tip sobe');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Opis tipa sobe');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Lista opcija sobe');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Depozit placen');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Unesite depozit');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Ukupno za naplatu');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Oznaka depozita');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Rezervacija');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Depozit');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Depozit sačuvan');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Nase sobe');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Objekat');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Tip sobe');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Izmenite podatke');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Ime');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Prezime');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Kuca');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Ulica');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Grad');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Postanski broj');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Tel');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mobilni');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Odaberite');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Broj dana');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Total');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Prikazi podešavanja soba i objekata');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Sobe');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Opcije soba');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Tipovi soba');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Objekat');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Opcije objekta');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Sobe');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Tip');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Ime');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Broj');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Sprat');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Maximum osoba');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Opcije');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Izmeni opcije');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Opcije sobe');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Opis opcija');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Opcija sobe dodata');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Opcije sobe izmenjene');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Tip sobe');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Tip sobe - skraćenica');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Tip sobe - opis');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Tip sobe dodat');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Izmeni detalje');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Ime');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Ulica');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Grad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Regija');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Zemlja');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Poštanski broj');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tel');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Web sajt');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Opcije');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Objekat izmenjen');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Opcije objekta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Opcije objekta - skraćenica');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Opcije objekta - puni opis');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Opcija objekta je izmenjena');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tarife');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Tarifa - naziv');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Opis');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Važi od');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Važi do');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Tarifa za noć');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Minimum dana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Maximum dana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Minimum osoba');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Maximum osoba');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Tip sobe');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorisite PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Dozvoli vikende');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Izmeni detalj');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Dupliraj detalj');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarifa izbrisana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Izmeni tarifu');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezervacija sacuvana');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Prijavite gosta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Odjavite gosta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Izlistaj rezervacije');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Tabla');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Gosti - admin');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Objekti - admin');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Provera dostupnosti');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Ime');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Prezime');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Broj kuće');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ulica');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Grad');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Poštanski broj (PAK)');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Tel');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobilni');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Nema soba koje sadrže sve parametre koje ste vi tražili');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Hvala vam što ste odabrali nas i nadamo se da ćete uživati u boravku.<br><br> <b>Ovo je samo preliminarna rezervacija, i neće biti potvrdjena dok ne primite potvrdno pismo.</center>');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Prijavite gosta ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Gost je prijavljen ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Gosti za odjavu ');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Suplementi');
jr_define('_JOMRES_COM_A_TARIFFS', 'Tarife & Valuta');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Upload fajlova');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Suplimenti za jednu osobu');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'proverite da li je postavljeno na Da ako zelite da vrsite naplatu suplimenata za jednu osobu');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Troškovi dodataka po osobi:');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Depozit u procentima?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Da li depozit mora biti procenat cele rezervacije? Ako ne želite, onda je depozit definisane veličine');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Veličina depozita');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Po osobi, po noćenju');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Odaberite Da ako želite da naplaćujete po osobi po noćenju. Ako ne želite, troškovi će biti izračunati po osnovi po sobi po noćenju');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Velicina fajla');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Max. velicina slike u Kilobyte');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Rezervisano');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Detalji rezervacije');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Podsećamo vas da je rezervacija legalni ugovor, pa ako ste zbog nekog razloga poništili rezervaciju ili skratili vaš boravak moraćete i dalje platiti celi iznos vašeg ugovora.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Poništenje i smanjenje naplate</i> Ako otkažete vaš odmor vaše otkazivanje mora biti potvrdjeno pismeno. Troškovi poništenja su sledećci:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Do 14 dana');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Štampaj garantno pismo');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Štampaj predračun');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Broj nocenja: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Cijena po nocenju: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Total');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Stampaj predracun');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Dodaj uslugu na racun');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Opis usluge');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Cijena usluge');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Ostali elementi koji su naplaceni');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Elementi dodati na racun');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Upload slike');
jr_define('_JOMRES_FILE_UPLOAD', 'File Upload-ovan');
jr_define('_JOMRES_COM_A_ODDS', 'Misc.');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'List minicomponent calls');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
jr_define('_JOMRES_FILE_DELETE', 'Izbrisi ovu sliku');
jr_define('_JOMRES_FILE_DELETED', 'Fajl izbrisan');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Izbrisi');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Nemoguce ukloniti ovu sobu, postoje rezervacije za nju. Ponistite rezervacije pa pokusajte ponovo.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Soba je izbrisana');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Izbrisite opcije sobe');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Nemoguce ukloniti opciju ove sobe, dodijeljena je nekim sobama. Uklonite tu opciju sa tih soba i pokusajte ponovo.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Opcija sobe izbrisana');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Izbrisi opciju objekta');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Nemoguce ukloniti opciju ovog objekta, dodijeljen je nekom objektu. Uklonite tu opciju sa tih objekata i pokusajte ponovo.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Opcija objekta je izbrisana');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Izbrisi tip sobe');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Tip sobe izbrisan');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Izbrisi objekat');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Objekat izbrisan');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Nemate prava da izbrisete ovaj objekat.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Sirina velike slike');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Mapa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Opis objekta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Vreme prijavljivanja');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Prostor aktivnosti');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Uputstva za vozače');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Aerodromi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Ostali transporti');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Polisom i obrazloženjima');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adresa');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Posetioci mogu rezervisati online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Postavite opciju na Da ako zelite da posjetioci rezervisu sobe online.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Rezervacije su za fiksni period');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Postavite opciju na Da, i rezervacije ce se uzimati za fiksni period. Ako je postavljeno na Ne, onda vam "definisani dan za dolazak" nece biti postavljen na Da (ukoliko zelite da prisilite goste da dodju na odredjeni dan) u suprotnom necete imati dovoljno linkova koji su slobodni u kalendaru.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Period rezervacije: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Rezervisane sobe');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maximalni period, primjer 3x 7 rezervacionih perioda = 21 dan');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Da li je ovo apartman/letnjikovac/vila?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Prikaži rezervaciju');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Potvrdi rezervaciju');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Ponedeljak');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Utorak');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Sreda');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Četvrtak');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Petak');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Subota');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Nedelja');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Pon');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Uto');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Sre');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Čet');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Pet');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Sub');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Ned');
jr_define('_JOMRES_COM_A_AVLCAL', 'Dostupnost');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Boja fonta za trenutni datum');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Boja fonta za dane u prikazanom mjesecu ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Boja fonta za dane kopji nijesu u prikazanom mjesecu');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Boja polja za dane kada je objekat/soba dostupna');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Boja polja za dane koji nijesu prikazani u mjesecu');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Boja polja za zauzete dane');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Boja polja za uslovno rezervisane sobe (rezervacije za koje nije uzet depozit)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Boja polja za prosle dane');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Zauzeto/Nije dostupno');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Dostupno za rezervacije');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Uslovna rezervacija');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Prijavljeni dan dolaska');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Samo za sajtove koji koriste fiksirani period rezervacije. Odaberite dan kada gosti moraju doci.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Fiksirani dan dolaska');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Dani ostanka');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Prikazati kalendar dostupnosti?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Postavite ovu opciju na Da ako zelite da prikazete kalendar dostupnosti');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Dostupnost');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Kliknite na slobodni datum ako zelite formu za rezervaciju.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Crne rezervacije');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Nove crne rezervacije');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Izbrisite gosta');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Gost izbrisan');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Nemoguce izbrisati gosta, ima rezervacije na svoje ime. Ponistite rezervacije pokusajte ponovo.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Bilo koji');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Kalendar format prikaza');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Kalendar format unosa');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Ovo dozvoljava korisniku da promijeni format unosa datuma u Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Fiksirani period rezervacija dozvoljava kratke prekide');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Duzina kratkog prekida');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Objavljeno');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Audit trail');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Datum');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Korisnik (username)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filter na datum');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Dolazak se ocekuje');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Dolazak danas');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Odredjeni Rezident');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Odlasci danas');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Rok za odlazak istekao');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Nije stigao');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Napravljena soba');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Izmenjena soba');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Izbrisana soba');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Napravljena opcija sobe');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Izmenjena opcija sobe');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Izbrisana opcija sobe');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Napravljen objekat ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Izmenjen objekat');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Izbrisan objekat');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Izmenjena podešavanja objekta');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Objavljeni objekti');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Napravljene tarife');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Izmenjene tarife');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Dodata naplata servisa');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Prijavljan gost');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Unesen depozit');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Napravljen gost');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Izmenjen gost');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Rezervisana soba');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Kreirano extra');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Izmenjeno extra');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Izbrisano extra');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Objavljeno extra.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Unesena crna rezervacija.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Izbrisana crna rezervacija.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Extra');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Opis');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Ime');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Cena');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Extra izmenjeno');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Izmeni opciju');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Extra izbrisan');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Extra administracija');
jr_define('_JOMRES_COM_A_EXTRAS', 'Prikazi extra za vrijeme rezervacije?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Postavi opciju na Da ako zelite da prikazete gostu extra opcije');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Opciono extra.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Crna rezervacija startni datum');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Datum nastavka servisa');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Crne rezervacije');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Postoji greska prilikom rezervacije ovih soba, jedna ili vise soba koje ste odabrali nije slobodna.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Sobe ukljucene u crnu rezervaciju');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Nema crnih rezervacija');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Broj zvezdica');
jr_define('_JOMRES_COM_A_RESET', 'Ponistiti');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezervacija ponistena');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Trazi ovdje za:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Simbol valute');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Kod valute');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Detalji');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Ogranici rezervacije unaprijed?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Postavite opciju na Da ako zelite da ogranicite rezervacije (koristite sledece polje da postavite ogranicenje u danima). Ako postavite opciju na Da i ako gost pokusa da rezervise vise od n dana unaprijed onda ce njegov dan dolaska biti postavljen za danas');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Dani za rezervaciju unaprijed ograniceni na:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Taksa');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Taksa Sobe');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Fiksna vrijednost takse');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Procenat takse');
jr_define('_JOMRES_COM_A_EUROTAX', 'Taksa');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Procenat takse');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Sacuvaj sve zapise');
jr_define('_JOMRES_FRONT_TARIFFS', 'Naše Tarife');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Ime Tarife');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Opis Tarife');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Tip sobe');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Dostupna od');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Dostupna do');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Po osobi po noćenju');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Po noćenju');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Ne uključujuci vikende');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Minimum dana');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Maximum dana');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min osoba');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max osoba');
jr_define('_JOMRES_FRONT_PREVIEW', 'Prikaz');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Izmene ukljucene?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Tekst je izmenjen.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Izmeni jezik');
jr_define('_JOMRES_FRONT_PTYPE', 'Tip objekta');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Izlistaj tipove objekata');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Izmijeni tipove objekata');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Tip objekta');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Opis tipa objekta');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Tip objekta sacuvan');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Tipovi objekata izbrisani');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Podsjetnik za placanje');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Nema extra servisa da se dodaju na racunu');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Depozit');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Puni iznos');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Iznos naplacen prilikom rezervacije');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Koristite ovu opciju da biste odlucili sta treba da naplacujete prilikom rezervacije. Odaberite depozit ako naplacujete depozit, ili puni iznos.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Mjeseci za prikaz');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'U dostupnosti sobe, koliko mjeseci na kalendaru ce se prikazivati?');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Payment Gateways');
jr_define('_JOMRES_COM_A_CANCEL', 'Ponisti');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Molim vas odaberite sobu ili sobe koje ne zelite da budu u upotrebi, i potrebne datume. <br>Ako soba nema oznaku, onda ne moze biti koriscena za crne rezervacije dok neka od rezervacija ne bude otkazana ili zavrsena.<br/> Kada ste odabrali trazene datume, kliknite na plavo dugme "apply" da proverite dostupnost sobe. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Izgleda da ste izlogovani zbog neaktivnosti</b> Molim vas logujte se ponovo.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Razlog');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Koristi payment gateway?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Molim vas odaberite nacin placanja.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Gateway ukljucen?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Izmenjeno podesavanje plugin-a');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Uneseno podesavanje plugin-a');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'View this property\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'External link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Put a link to your website here.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Izmeni kreditnu karticu');
jr_define('_JOMRES_COM_A_EDITICON', 'Izmeni velicinu ikonice');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Slajd-šou');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Prikazi link za slideshow?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Prikazi slideshow u okviru?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Slajd-šou');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Prikazi link za tarife?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Popup dozvoljen?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Upload slideshow slike');
jr_define('_JOMRES_A_TABS_MISC', 'Misc');
jr_define('_JOMRES_A', 'Sajt konfiguracija');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Koristi global opcije objekta');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Ikona');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Odaberite plugin za pretragu koji zelite da koristite.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Zao nam je, vaša pretraga nije dala rezultate. Molimo vas, izmenite pretragu i pokušajte ponovo.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Da li ste sigurni da to zelite da uradite?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Rezervišite sobu');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Rezervisi objekat');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Prikazati tarife?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adresa');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Cene i detalji');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Kliknite za sobe i dostupnost');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Prikazati informaciju o Adresi ispod ovog linka');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Prikazati detaljnu informaciju o objektu ispod ovog linka');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Prikazati sobe i dostupnost ispod ovog linka');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Flat rate tarife');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Srednje');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Odaberite model tarifiranja koji zelite da koristite');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Imate dva izbora za metod kalkulacije tarifa. Prvi, 'flat rate' metod dozvoljava vam da ponudi razne tarife gostima i cijena tokom cijelog boravka je ista. Ovo je korisno ako zelite da ponudite vise razlicitih tarifa za isti dan, pr. Spavanje i dorucak tarifa i B&B i Tarifa vecere. Odaberite 'srednje' tarife ako zelite da podesite vase cijene zavisno od datuma. Jomres ce naci sve tarife za svaki dan u rezervacijama, sastaviti zajedno i vratiti srednju vrijednost za dati period");
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Prikazati datum odlaska?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Postavite ovu opciju na Ne ako ne zelite da bude prikazano polje sa datumom odlaska. Ovo koristite samo ako ste sigurni sta radite, datum odlaska u rezervacijama ce pisati dan nakon dolaska.');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Limit opisa');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Ovo ogranicava broj karaktera prikazanih u listi objekata.');
// v1.4g+
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Koristite date() format?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Kliknite da biste objavili');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Kliknite da ne objavljujete');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Odaberite glavni tip sobe');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Da biste dodijelili sliku ovom tipu sobe morate prvo uploadovati sliku u /images/stories/jomres/rmtypes/ folder. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Input greska - boja pozadine');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Default zemlja u formi za rezervaciju');
jr_define('_JOMRES_JAVASCRIPT_', 'Polja označena crvenom zvezdom su obavezna.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Korisnici mogu da registruju svoje objekte?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Postavite ovu opciju na Da ako zelite da korisnici mogu registrovati svoje objekte bez dozvole administratora sajta.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Elementi označeni crvenom zvezdicom su obavezni.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Kreirani objekti');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Prikazati kalendar od početka godine?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Kalendar dostupnosti prikazuje od pocetka tekuce godine.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Broj dostupnih soba');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Nazad na detalje objekta');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Tipovi soba');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Limit nasumične pretrage');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Prikaži google konverxiju valuta link u listu tarifa?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Konvertor valuta:');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Dozvolite korisnicima da vrše izmjene koristeci html editore?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Koristite ovu formu da biste prijavili rezervaciju. Kursor misa preko "i" prikazaće vam više informacija. Unesite elemente rezervacije kao što su dan dolaska i odlaska broj gostiju, odaberite sobu ili sobe koje želite sa liste dostupnih. Kliknite na bilo koju sobu da biste je odabrali za rezervaciju. Kada to završite, možete dodati extra opcije koje želite. Kada popunite dovoljno potrebnih informacija biće vam prikazano dugme za potvrdu rezervacije.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Koristite ovu formu da biste prijavili rezervaciju. Kursor miša preko "i" prikazaće vam više informacija. Unesite elemente rezervacije kao što su dan dolaska i odlaska broj gostiju, odaberite sobu ili sobe koje želite sa liste dostupnih. Kliknite na bilo koju sobu da biste je odabrali za rezervaciju. Kada to završite, možete dodati extra opcije koje želite. Kada popunite dovoljno potrebnih informacija biće vam prikazano dugme za potvrdu rezervacije.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Opis knjiženja rezervacije');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Odaberite detalje vaših zahteva za rezervaciju');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Dostupnost ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Odaberite sobe koje želite');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Pogledajte ovde da li je objekat dostupan u ovom momentu.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Opcije extra');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Odaberite bilo koju extra opciju koju želite da uključite u rezervaciju');
jr_define('_JOMRES_COM_PERDAY', 'Po noći');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Vaša adresa');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Molim vas unesite vaše informacije. Sva polja su obavezna osim polja za mobilni telefon');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Dostupne sobe');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Odabrane sobe');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>
Najbliži datum dolaska je: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Po noćenju:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Total:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Extra:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Taksa:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Popust:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Ukupna cena:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Gosta');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Kliknite ovde ako želite da dodate sobu u vaš izbor');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Kliknite ovde ako želite da skloniite sobu iz vašgg izbora');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Tipovi gostiju');
jr_define('_JOMRES_VARIANCES_TYPE', 'Tip');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Tip gostiju, pr. Djeca godine 5-10, ili Student ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Napomene');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Napomene u vezi sa tipom gostiju');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Maximum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Maksimalan broj gostiju ovog tipa koji se moze odabrati prilikom rezervacije');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'U procentima');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Izracunata cifra je procenat osnovne cifre izracunate za sobu. Ako ste izabrali Ne onda ce se cifra koju ste vi odredili dodati ili odbiti od cijene sobe.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Dodati neslaganje?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Izracunata cifra je dodata ili uklonjena sa osnvone cijene sobe. Postavite opciju na Ne ako zelite da ovo bude popust na osnovnoj cijeni. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Neslaganje');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Iznos neslaganja');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Modifikovani spisak tipa musterija');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Izbrisan tip musterije');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Kreiran tip musterije');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Izmenjen tip musterije');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Izmenjen tip musterije');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Prikazi link na listu soba u stranici detalja objekta?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Prikazi <b>samo</b> Kalendar dostupnosti/Listu soba?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Postavi ovu opciju na Da ako zelite da prikazete header i detalje objekta, tako da je samo lista soba/kalendar dostupnosti vidljiv u okviru detalja objekta.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Dolazak-Odlazak minimalni interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Minimalni interval U rezervacionoj formi izmedju dana dolaska i odlaska.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Lista na rezervacionoj formi prikazuje broj sobe');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Lista na rezervacionoj formi prikazuje ime sobe');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Lista na rezervacionoj formi prikazuje naziv tarife');
jr_define('_JOMRES_ORDER', 'Poredak');
jr_define('_JOMRES_REQUIREDFIELDS', 'Obavezno');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Dani prije dolaska');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Minimum dana koji moraju proci od danasnjeg dana do dana dolaska.');
jr_define('_JOMRES_DTV', 'Varijacije tipa datuma');
jr_define('_JOMRES_DTV_DOW', 'Dan u nedjelji');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Tip gosta standardni');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Standardni broj prvog tipa gosta je 1. Ako koristite tipove gostiju, onda je ovo broj koji ce se pojavljivati za prvog tipa gostiju u formi za prijavu.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Registrovani korisnici samo mogu rezervisati online?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Izvinite, morate biti registrovani korisnik da biste rezervisali online. Kliknite ovde da biste se registrovali. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Boja fonta za linkove trenutnih rezervacija');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Vikend granice');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Soba je rezervisana');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Crna rezervacija');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Zaokruzite depozit na najblizu cifru?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Naplacujte depozit?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Tarife naplacujte na nedjeljni racun?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Imate mogucnost postavljanja razlicitih tarifa po dnevnoj ili nedjeljnoj vrijednosti. Ako koristite nedjeljni, morate postaviti ovu opciju na Da.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Cena po nedelji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Fiksirani datum dolaska potreban: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Kada je fiksirani datum selektovan, datum moze biti prikazan kao dropdown lista');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Datum dolaska netacan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Datum odlaska nije tacan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Rezervacija je prekratka. Mora biti najmanje ovoliko dana izmedju dana dolaska i odlaska :');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Vas interval je:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Tip gosta je netacan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Odaberite broj gostiju i tip');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Imate previse dozvoljenih tarifa');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Odabrali  ste vise soba nego sto imate gostiju, kliknite na ime sobe da biste je uklonili sa liste');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Previse gostiju imate za vas broj slobodnih kreveta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Morate odabrati vise soba');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Odaberi sobu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Ime je obavezno');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Prezime je obavezno');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Broj kuće ili ime kuće je obavezno');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Ulica je obavezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Grad je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Region je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Postanski broj je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Zemlja je obavezna');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Broj telefona je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Broj mobilnog je obavezan');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Email adresa je obavezna');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Imamo slobodne sobe!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Nijedna soba nije izabrana');
jr_define('_JOMRES_BOOKING_NUMBER', 'Broj rezervacije');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'OK za rezervaciju');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Izbrisati template varijable?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Izaberite ovo da omogucite DHTML dump template variabli za svaki FRONTEND template file. Korisno je ako zelite da proverite da li odredjeni elementi mogu da se koriste za odredjeni template.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Izracunati procenat');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Izaberite Da ako racunate po osobi u procentima. Ako ste odabrali Ne bice primenjeno kao flat suma.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Dozvoljeni limit sobe/tarife');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Ovim mozete da odaberete limit na broj soba slobodnih i tarifa koje su izlistane u formi za rezervaciju. Postavite na nulu ako ne zelite ogranicenje. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Nema soba trenutno slobodnih!');
// Introduced in v2.5
// Translate from here
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Book it now: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Global editing mode?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL properties in the system for the constant you are editing.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Global currency symbol');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Component wrapped');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Set this to Yes if if you want to force the site into Full Page view. This might be useful if you intend to access the site via iframes.');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Weekends only');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Dani vikenda');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the rooms list.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Izaberite zemlju pre nego što dodate informacije o objektu');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Sačuvajte promene pre nego što dodate sliku objekta');
jr_define('_JOMRES_TARIFFSFROM', 'Cene od - ');
jr_define('_JOMRES_SEARCH_ALL', 'Sve');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Pretraga po zeljami');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Pretraga po regionima');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Izlistaj po mestu: ');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Pretraga karakteristika');
jr_define('_JOMRES_SEARCH_BUTTON', 'Pretraži');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Pretraga reči');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Search word(s): ');
jr_define('_JOMRES_SEARCH_AVL_INFO', '');
jr_define('_JOMRES_SEARCH_PTYPES', 'Izlistaj po vrsti objekta: ');
jr_define('_JOMRES_SEARCH_RTYPES', 'List all properties by room type');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Default');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Property Name');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Property Region');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Property Town');
jr_define('_JOMRES_SORTORDER_STARS', 'Stars');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Opis objekta ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Booking form');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Update your address details');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Re-checking room availability<br/>
(Room selection will be reset)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Re-checking availability');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modifying your optional extras');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Changing your room selection');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Updating your address details');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Sorry, one or more address fields are incorrect.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Slika sobe');
jr_define('_JOMRES_CURRENCYFORMAT', 'Currency format');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Search options');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Log files');
jr_define('JOMRES_COM_A_MESSAGE', 'Message');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Advanced');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanage');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Tariff Configuration Mode');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b>Warning: Switching between different tariff types may result in loss of data. See the note below regarding this</b>.
<br/><br/>
You have three options as to how you configure your tariffs.<br/>
Normal mode: You will have one tariff for each room type that is valid for the next 10 years.<br/>
Micromanage: You can modify the price for each and every day for each room/property type. <br/>
Advanced: The \"old\" Jomres method of managing tariffs. <br/>
<br/>
The different tariff modes allow you to choose the method of configuring tariffs that suits you best.<br/>
Normal mode is the most simplistic but it's the easiest to understand because it will cross reference rooms and tariffs to room/property types and allows you to configure rooms and prices on the same page.<br/>
Micro manage allows you to vary the rates on a day to day basis without having to manage reams of tariffs, it is done by cross referencing lots of different tariffs with each other. This results in a number of tariffs being created for you covering a period of time, but you can not layer tariffs over each other.<br/>
Advanced mode lets you create a room and associate it with a room type. You then create a tariff and associate THAT with a room type. Using this method it is possible to \"layer\" tariffs over each other, for example a room type \"Double bed\" can have one tariff for bed and breakfast, and another for bed, breakfast and evening meal. The advanced method requires a little more attention to detail because it is possible to dis-associate a room or tariff from a room/property type, or to incorrectly set valid from and to dates, but it does give you configuration options that the other modes do not offer. <br/>
<br/>
Because Normal and Micromanage modes require a specific set up of rooms and tariffs for the tariff mode to work the system may need to reset some data to make the current tariff configurations compatible with the current tariff editing mode.<br/>
<br/>
Normal -> Advanced. No change. Existing tariffs are retained.<br/>
Normal -> Micromanage. All existing tariffs are removed.<br/>
Advanced -> Normal. All existing tariffs are removed.<br/>
Advanced -> Micromanage. All existing tariffs are removed.<br/>
Micromanage -> Advanced. All existing cross references between tariffs are removed, but the tariffs themselves will remain.<br/>
Micromanage -> Normal. All existing cross references and tariffs are removed.<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Show rooms list in property details page?');
jr_define('JOMRES_PROPERTYTYPE', 'Property type');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Max people per room');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Max people in booking');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Add note');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Edit note');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Delete note');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'View notes');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Added new note');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Edited note');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Deleted note');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'List Bookings');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'My Bookings');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'View Booking');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'View Favourites');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'You haven\'t added any favourites yet!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Property type');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Wise price');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Active');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'This plugin allows you to enable and configure your room prices dynamically.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Threashold (number of days between arrival date and today)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Percentage rooms occupied 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Percentage rooms occupied 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Percentage rooms occupied 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Percentage rooms occupied 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Discount %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' has been discounted from ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' to ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Room price not discounted ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'You can get a google maps API key from <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Active?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Set this to Yes if you want to offer last minute deals.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Threshold');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Discount');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'In percent');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'A discount has been applied to this booking!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'The cost of the stay has been reduced by ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'This property offers a last minute discount of  ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' percent if you book to arrive before ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', ' percent or more if you book to arrive before ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Book now to make the most of this offer!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Verbose tariff info');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Set this to Yes to show more detailed tariff information in the property details/tariff popup');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Minimise configuration options');
jr_define('_JOMCOMP_AMEND', 'Amend Booking - Property Selection');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Select Property');
jr_define('_JOMCOMP_AMEND_HEADER', 'Original Contract:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Deposit Paid');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Deposit Not Paid');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Override Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Override Deposit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Cancel');
jr_define('_JRPORTAL_CPANEL', 'Control Panel');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Default Commission rate');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'List Commission Rates');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Commission Rates');
jr_define('_JRPORTAL_CRATE_TITLE', 'Title');
jr_define('_JRPORTAL_CRATE_TYPE', 'Type');
jr_define('_JRPORTAL_CRATE_VALUE', 'Comission rate');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Currency code');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'List Properties');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Property name');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Property address');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Properties who\'s background colour is red have not yet had a commission rate applied to them.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Statistics');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Commission Rate');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Izlistaj rezervacije');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Objekat id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Invoice id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Booking total');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Date archived');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Description');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Cena smeštaja');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'noćenja');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'po sobi ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Produženje boravaka');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Ukupna cena');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Molimo pročitajte i potvrdite saglasnost');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Detalji vaše rezervacije su sumirani ispod.<br /> Da bi ste bilo šta promenili, molimo kliknite na dugme Amend Reservation. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Ukoliko želite da izmenite pilo koju informaciju prikazanu iznad, kliknite ovde ');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Izmeni rezervaciju');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Ukoliko imate bilo kakve dodatne zahteve, unesite ih u polje ispod.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Potvrdjujem da su gore unete informacije tačne i slažem se ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'po osobi po noćenju ');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'of');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Start');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Prev');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Next');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'End');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Results');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Note that this is not a booking form, instead you are sending an email.<br/>
Please enter the message you\'d like to send to ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Kontaktiraj hotel');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Property enquiry from ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' regarding ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Enquiry');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Molimo izaberite željeni smeštaj');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min rooms already selected');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max rooms already selected');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Slobodno');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Nešto je rezervisano');
jr_define('_JOMRES_AVLCAL_HALF', 'Polu-rezervisano');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Uglavnom rezervisano');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Rezervisano sve');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Per week');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Per day');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Per booking');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Per person per booking');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Per person per day');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Per person per week');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per days (min days)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Per days X rooms selected');
jr_define('_JOMRES_REGISTRYREBUILD', 'Rebuild minicomponent registry & rebuild cache');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registry rebuilt successfully');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Opseg cene');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'You haven\'t made any bookings yet!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Edit your property type');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Select your property type');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Your enquiry...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Property List limit');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'The number of propertys to show on a page after a search');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrated search feature');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Activate this feature?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Use columns');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Search region by select combo dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Search by property name');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Show the search by property name input.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Town/region');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Show the Region input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Search by property type');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Show the search by property type input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Search by room type');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Show the search by room type input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Features');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Show the search by feature input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Set this to no to show the list as tooltip images and checkboxes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Search by description');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Show the search by description input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Search by availability');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Show the search by availability input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Search by price ranges');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Show the search by price ranges input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Price range increments');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cron job settings and logs');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Method');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Display logging in the browser');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Only works if the method is set to Minicomponent.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging enabled');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Set this to Yes for logging to be enabled. The results of the logs will be output below.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Verbose logging');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lots of logging output');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Template Editing');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Custom fields');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Here you can define simple custom fields that will be shown in the booking form.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Fieldname (no spaces)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Default value');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Description');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Required');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maximum Quantity');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Tax rates');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Tax code');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Rate description');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'You cannot delete this tax rate.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Rate');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Invoices');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Unpaid');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Paid');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Cancelled');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Pending');
jr_define('_JRPORTAL_INVOICES_USER', 'User');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Status');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Raised');
jr_define('_JRPORTAL_INVOICES_DUE', 'Due');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Subscription');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Outstanding total');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Recurring frequency');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Recurring day of month');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Currency code');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Line items');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Name');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Description');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Initial Price');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Initial Quantity');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Initial Discount');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Initial Total');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Tax code');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Tax description');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Tax rate');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Override standard Jomres gateway settings?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Show my invoices');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Discount coupons');
jr_define('_JRPORTAL_COUPONS_DESC', 'Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Coupon code');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Valid from');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Valid to');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Discount amount');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Discount is a percentage');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Room only');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Save coupon');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Coupon saved against booking');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Coupon number not found');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Coupon discount value');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Booking discounted. Coupon code/discount value/coupon settings : ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Choose languages');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Choose the language options to be shown in the language switch dropdown.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Show the language selection dropdown?');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Dear');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Thank you for registering ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Your user name is : ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Your password is : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Please log in to view your bookings ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Coupon saved');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Coupon deleted');
// Not used yet
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Username');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Password');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Notification mobile number');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>Obviously, you cannot use/test this gateway from localhost, you'll need to do that on a 'live' server.</b>
<br/>
<br/>
In order to use the Clickatell gateway you need a Clickatell account and at least one registered connection (API sub-product instance) between your application and our gateway. Each connection
method is known as a sub-product. Here's how:<br/>
<br/>
<b>Step 1 - register for a Clickatell account</b><br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
<b>Step 2 - add a registered API connection (sub-product)</b><br/>
If you are not already logged into your account, then you must do so at http://www.clickatell.com/login.php<br/>
* Select \"Manage my Products\" from the top menu.<br/>
* Select the API connection type you wish to use (HTTP API) from the drop down menu ('Add Connection').<br/>
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to " .get_showtime('live_site')."/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Booking form room list show disabled access');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Booking form room list show max people');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'NAPOMINJEMO da cene soba, procene i puna cena rezervacije neće biti izračunata dok ne dodate sobu(e) u svoj izbor.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Subscription packages');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Name');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Description');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Published');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Full amount');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Property limit');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Subscribe');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Use subscription handling functionality');
jr_define('_JOMRES_COM_NEWUSER', 'Create new user on booking');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Create new user account on unregistered user booking.');
jr_define('_JOMRES_CLICKTOREGISTER', 'Click here to register your property');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'New user details ');
jr_define('_JOMRES_LATLONG_DESC', 'Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.');
jr_define('_JOMRES_CONTROLPANEL', 'Control Panel');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Show invoice');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Show invoices');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Add my property to this site');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Todo : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Sorry, but that package ID is not recognised.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Your business details');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'business name');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'VAT number');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Building number');
jr_define('_JOMRES_INVOICE_NUMBER', 'Invoice No. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Sorry, you cannot black book this property for those dates.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'You can blackbook this property for those dates.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Label Editing mode on');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Label Editing mode off');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Print invoice');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Charge variable deposits?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'The number of days, within which the full amount will be charged as a deposit.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Confirmation email has been sent. You may close this window now.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contact agent');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Mark invoice as paid');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Invoice marked as paid');
jr_define('_JOMRES_APIKEY_REMAKE', 'Make new API key');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Is this a single property installation?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Balance payment');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> for more information on this subject.');
jr_define('_JOMRES_SUPPORTKEY', 'Support key');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Personal discount');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Limit property registration to one country?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Properties are located in this country : ');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery theme');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Choose a jquery theme to use for the property details tabs.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'We are sorry, but that property is not currently available.');
jr_define('_JOMRES_REVIEWS', 'Reviews');
jr_define('_JOMRES_REVIEWS_TITLE', 'Review title');
jr_define('_JOMRES_REVIEWS_DATE', 'posted on ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'There are no reviews for this property yet.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Would you like to be the first to review this property?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'I agree with this review');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'I disagree with this review');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Average Rating: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Total Votes:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Add a new review.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'You need to be logged in to post a review.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Tell us what you think about this property : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'This reviewer told us : ');
jr_define('_JOMRES_REVIEWS_PROS', 'Pros: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Cons: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Submitted On: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'You have already reviewed this property, you can\'t post another review about it.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Sorry, but you are not allowed to post reviews on this site.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Show reviews');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' guests agree with this review. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' guests do not agree with this review.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' guest agrees with this review. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'guest does not agree with this review.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Thank you for sharing your opinion of this review.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Thank you, but you have already shared your opinion of this review.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Please ensure that all fields have been filled.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Please summarise your review by entering a title');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Please enter a more complete review in the description box');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Please enter the good parts of your experience of being a guest at this property');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Please enter any negative thoughts you might have of your experience');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Please rate the hostpitality you received from the staff');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Please rate your opinion of the property\s locale');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Please provide your opinion of the cleanliness of the property');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Please rate the accommodation. Was it comfortable or threadbare');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Please provide your opinion of whether it was value for money');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Please rate the services');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Review summary');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Your experience in more detail');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Thank you for submitting your review.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Thank you for submitting your review. It will be published soon by one of our hard working moderators.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Use Jomres review functionality?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Automatically publish reviews?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'If you set this to No you will need to manually publish reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Set reviews to test mode?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normally property managers cannot review propertys. With test mode enabled, they can. Naturally this is not ideal in a production environment.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'This is a list of all properties. To see a property\'s reviews, click on that property. From there you will be able to publish or delete a review.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Number of unpublished reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Total number of reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publish/Unpublish review');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Delete review');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Report review');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Review reports');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Please enter your report');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Submit');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Report created by ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.');
jr_define('_JOMRES_REVIEWS_RATING', 'Ratings (1 = poor 10 = excellent) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Hospitality  ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Location ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Cleanliness ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Accommodation ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Value for money ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Services ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Reviewed by : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Hide reviews');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Show Booking form in property details page?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Are prices set inclusive of tax?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Prices set are inclusive? If your prices include tax, then select Yes. If they are not, select No.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Extras tax:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Start range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'End range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Rate');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Set rates');
jr_define('_JOMRES_PARTNERS_TITLE', 'Partners');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Room ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'guest(s). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Note that your property is not yet published, only you can see the property, site visitors will not see it');
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Default search result order');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Change this option to change the order that search results are presented by default.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Show search result order dropdown');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Rooms list style');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'In the booking form, using the "classic" rooms list style you offer individual rooms to guests. With the room type view, guests choose the number of rooms of type X (eg. 2 x doubles) instead');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classic');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Room types');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Calendar week start day, Sunday or Monday');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Only property guests can review?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Per room');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Guests per room : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Guests per booking : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Number of rooms');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'January');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'February');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'March');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'April');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'May');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'June');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'July');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'August');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'September');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'October');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'November');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'December');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Please select an option for your booking');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Fullscreen view');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Normal view');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Partner discount ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Search user');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Existing partners');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Choose a partner to be taken to the partner administration page.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Partner :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Search for a property');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Enter a few characters from the property name and select a property.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Current properties');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Click on a property to edit the partner's discount settings for that property.");
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'This account has been suspended, it is not currently possible to administer your propert(ies) using this account.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Manager account suspended');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Manager account reinstated');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Remove favourite');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Booking data archive');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Edit account');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of. The user <em>must already be a user in the CMS</em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Existing managers');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Sleeps');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Show the search by guest number dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Stars');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Show the Stars dropdown');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Sleeps');
jr_define('_JOMRES_SEARCH_STARS', 'Number of stars');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Number of properties');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Load Jomres jQuery library?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Thumbnails are created automatically for uploaded images.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Small thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Small thumbnails max height (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Medium thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Medium thumbnails max height (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Label Translations');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Use commission functionality?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Set this to Yes to show the manager commission invoices which have been raised.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Manager bookings create commission invoices?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'If a manager makes a booking, does that also create a commission invoice line item?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Auto suspend managers where invoices are marked as Pending?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Auto suspend threashold');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished.');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Language context');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory.');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options may not be available if you don\'t have the appropriate plugin(s) installed. Users of the free, core system will not be able to take full advantage of the features that they enable.');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Load Jomres jQuery UI library?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Price (highest first)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Price (lowest first)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Price summary and estimates should be priced as per night/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Per night');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Per week');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Per month');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Per person');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'week(s) at ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'month(s) at ');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'How should the search option for people numbers work?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Please wait, your order is being processed and you will be redirected to the Paypal website.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'If you are not automatically redirected to Paypal within 5 seconds...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Click Here');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Booking valid from');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Booking valid to');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Guest name');
jr_define('_JRPORTAL_COUPONS_DESC_478', "Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'With your coupon, this booking has been discounted from ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' to ');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Set this to No to disable loading of both the Jquery UI javascript and CSS files.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Load Jomres jQuery UI CSS library?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Set this to No to disable only the jquery UI CSS file.');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Total inc tax');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Unpublished property');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Use conversion functionality');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Currency conversion/currency codes');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="https://www.ipinfodb.com/login" target="_blank">IPinfoDB</a> first.');
jr_define('_JOMRES_DEBUGGING_TAB', 'Debugging');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Accomodation ex tax');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Accomodation inc tax');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Rooms tax:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Open the booking form');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Back to property details');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatically Selected?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Balance (after deposit paid)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filter resources based on their features.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Latest booking');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'second');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'minute');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'hour');
jr_define('_JOMRES_DATEPERIOD_DAY', 'day');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'week');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'month');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'year');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'decade');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'ago');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'from now');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Bookings are for whole days?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'By default the system bookings resources out by the night, so a booking from the first of January '.date('Y', strtotime('next year')).' to the 2nd of January '.date('Y', strtotime('next year')).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Per day');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Per person per day');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Pickup');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Return');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'days(s) at');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Return date incorrect');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'The booking is too short. There needs to be at least this many days between the pickup and return dates:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Pickup/Return minimum interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Price summary and estimates should be priced as per day/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per day');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Days before the pickup date');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'The minimum number of days that must elapse, from "today", before the pickup date.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Show return date input?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Pre-defined pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fixed pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per person, per day');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (number of days between pickup date and today)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pickup Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Pickup today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Picked up');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returns today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Return overdue');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Has not picked up');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark a booking picked up.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark a booking returned.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark a booking picked up');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark a booking returned');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cost per day: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Number of days: ');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Override Accommodation Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Save override');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Email new users their login details?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Show tax output in the booking form totals summary?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Cancellation Threashold');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');
jr_define('_JOMRES_EDIT_PROFILE', 'Edit Profile');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship');
jr_define('_JOMRES_IMAGE', 'Image');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Edit Tax rate');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Edit Custom field');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'License server password');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'License server username');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'This Jomres version : ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Latest Jomres version');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres. The Core system is free, but it can be enhanced through the installation of plugins. To access those plugins you will need a download and support license. If you would like to purchase a Jomres Starter, Business or Enterprise license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section in the menu, including the "Getting Started" page which will guide you through your first steps.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Active property');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Email Settings');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alternate Host');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Change this to your smtp mail server');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternate Port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Change this to your smtp port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternate Protocol');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Use authentication');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternate Username');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternate Password');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Quick Info');
jr_define('_JOMRES_MENU_SHOW', 'Show');
jr_define('_JOMRES_MENU_HIDE', 'Hide');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Default');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Anybody');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registered');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Nobody');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Menu Access control');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Receptionist');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Full Access Control');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Full Access control');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Users with admin rights to this property');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Your email address');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parameters');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define('_JOMRES_METATITLE', 'Meta title');
jr_define('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Add your property : Step 2 of 2');
jr_define('_JOMRES_CART_TITLE', 'My proposed bookings');
jr_define('_JOMRES_CART_INFO', 'Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Confirm booking(s)');
jr_define('_JOMRES_CART_OR', ' or ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Save for later');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'You don\'t have any bookings saved yet.');
jr_define('_JOMRES_CART_VIEWCART', 'View cart');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Default Latitude Startpoint');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Default Longitude Startpoint');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');
jr_define('_JOMRES_SYSTEM_EMAILS', 'Emails sent from which address?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'List view');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Photo view');
jr_define('_JOMRES_COMPARE', 'Compare');
jr_define('_JOMRES_REMOVE', 'Remove');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Return to search results');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Add to favourites');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Remove from favourites');
jr_define('_JOMRES_VIEWSHORTLIST', 'View your shortlist');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Important: Cookie Policy');
jr_define('_JOMRES_COOKIEPOLICY_2', 'We use cookies to help keep our site relevant and easy to use.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Read more...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EU legislation requires that all websites clearly specify if cookies are being used and their purpose.');
jr_define('_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6', 'Yes, I accept the use of cookies in this way.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Deposit required is cost of the first night?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', "You haven't added any items to your favourites.");
jr_define('_JOMRES_SAFEMODE', 'Enable safe mode?');
jr_define('_JOMRES_SAFEMODE_DESC', "Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', 'Next');
jr_define('COMMON_CANCEL', 'Cancel');
jr_define('COMMON_SUBMIT', 'Submit');
jr_define('COMMON_SAVE', 'Save');
jr_define('COMMON_DELETE', 'Delete');
jr_define('COMMON_RETURN', 'Return');
jr_define('COMMON_CLOSE', 'Close');
jr_define('COMMON_BACK', 'Back');
jr_define('COMMON_HOME', 'Home');
jr_define('COMMON_NEW', 'New');
jr_define('COMMON_SEND', 'Send');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being "spammed" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href="http://www.google.com/recaptcha" target="_blank">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Public key');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Private key');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.');
jr_define('_JOMRES_BOOTSTRAPSWITCH', "Enable Jomres' Bootstrap templates and functionality?");
jr_define('COMMON_ACTION', 'Action');
jr_define('COMMON_VIEW', 'View');
jr_define('BACKTOTOP', 'Back to top');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Weak');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Strong');
jr_define('_JOMRES_INPUTFILTERING', 'Input filtering');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Input filtering level');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Allowed input tags');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Allowed inputs');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Property details in tabs?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Set this option to show property details in tabs. Set it to no to show them without tabs.');
jr_define('COMMON_PRINT', 'Print');
jr_define('COMMON_EDIT', 'Edit');
jr_define('COMMON_COPY', 'Copy');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres is designed to work within both the Bootstrap 2 or Bootstrap 3 frameworks. Once you have installed a BS2 or BS3 theme or template, set this switch to choose which of the flavours of Bootstrap you want Jomres to work with.');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Use Jomres Bootstrap templates in the frontend?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Here are some alternatives you might want to consider.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Auto-detect guest's country?");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option.");
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'About Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'help');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Getting started');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Access Control');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'developer tools');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'languages');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'income generation');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'site structure');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'My Account (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'portal functionality');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Plugin manager');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integration');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'reports/statistics');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'help');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Updates');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'payment methods');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tariff default');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'This only applies to new tariffs');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Years to show');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Defines the number of years to show when editing a tariff type');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'invoices');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'account details');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Login');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Logout');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'search');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'dashboard');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'reserve');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'invoices');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'settings');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'misc');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Edit country');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'Country id');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Country code');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Country name');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Edit region');
jr_define('_JOMRES_EDIT_REGION_ID', 'Region id');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Country code');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Region name');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'List countries');
jr_define('_JOMRES_COM_LISTREGIONS', 'List regions');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Export definitions');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community.');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Translate locales');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Translate lang file strings');
jr_define('_JOMRES_COM_NOTAMANAGER', "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Property Managers feature to make yourself BOTH a manager and a Super manager. This is a security feature.");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Property list default layout');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Stay for a minimum of');
jr_define('_JOMRES_NIGHTSFOR', ' nights for ');
jr_define('_JOMRES_AGENT', 'Agent');
jr_define('_JOMRES_AGENT_DETAILS', 'Agent details');
jr_define('_JOMRES_AGENT_LISTINGS', "Agent's listings");
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Automatically approve new properties');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Approvals');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'This property has not been approved yet. Once it has been approved you will be able to publish it.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Sorry, you cannot publish this property as it has not been approved yet.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'A new property requires approval');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'A property has been added to the system which requires your approval. Click the link to view the properties awaiting approval list : ');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Your property has been approved');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Congratulations, your property has been approved, please click the following link to view the property's control panel : ");
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Region names are translatable');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Unless you're running a very fast server you are advised to leave this set to No. Due to the large number of region names, region name translation takes up a lot of memory which can slow your search results down.");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Guest booked out.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Sorry, that email address is already in use. If this is your email address, please ensure you have logged in before attempting to book.');
jr_define('JOMRES_TAPTOCALL', 'Tap to call');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'New review for ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'A new review has been left for ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'New Report');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'A review has been reported for ');
jr_define('JOMRES_SUPERIOR', 'Superior');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Grand total (ex tax) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Grand total (inc tax) : ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Total tax : ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Type the two words: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Enter what you hear: ');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Replay the audio track ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Download the track in MP3 format');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Visual mode');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Audio mode');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Refresh');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Help');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Sorry, that was incorrect. Please try again.');
jr_define('JOMRES_GOOGLE_MAPS', 'Google map options');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Use weather layer?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Use transit layer?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Enable Gmap Points of Interest (including possibly your competitors)?');
jr_define('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Scan this code into your phone to get directions to us.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Congratulations. We were able to validate your VAT number.');
jr_define('_JOMRES_TAX_RULES_LIST', 'List tax rules');
jr_define('_JOMRES_TAX_RULE', 'Tax rule');
jr_define('_JOMRES_TAX_RULE_INFO', 'Tax rules are used to establish different tax rules for different regions. These tax rules affect the person making the booking, if they are registered, logged in and have edited their account using the "edit my account" page. The purpose of these rules is to accommodate bookers in those areas who are VAT exempt, you may find that you do not need to create many rules, if any at all.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Import tax rates');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Edit tax rule');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'The VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Please enter the VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT number validated.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'VAT number not validated.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Business details entered here will be used on commission and subscriptions invoices.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "You don't seem to have filled in your account details yet. To list your property on the site, we need you to complete your account details before we can go further.");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Production or Development?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to "production".');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Production');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Development');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Resource details');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tariff details');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Only');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'left!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Resource feature');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Unable to remove this resource feature, it is assigned to a resource. Remove the feature from this resource and retry.');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Centre');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Add images');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Room images');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Property main image');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slideshow images');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Clear list');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop files here');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Choose the resource you want to upload images for. If you can upload images for individual resources (e.g. rooms) you will be given a second dropdown to choose the specific resource. ');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'If you upload multiple images as the "Main property image" these will be used in the Property List . Slideshow images will be shown on the property details page.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'View your image');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Delete image');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Upload image');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Room types icons');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Property feature icons');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Upload all files');
//8.0
jr_define('COMMON_PREV', 'Prev');
jr_define('COMMON_MORE', 'More');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Today');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Year');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Month');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Week');
jr_define('_JOMRES_DASHBOARD_DAY', 'Day');
jr_define('_JOMRES_HLEGEND', 'Legend');
jr_define('_JOMRES_HFILTER', 'Filter');
jr_define('_JOMRES_HFROM', 'From');
jr_define('_JOMRES_HTO', 'To');
jr_define('_JOMRES_HNEW_BOOKING', 'New booking');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Deposit status');
jr_define('_JOMRES_HSTATUS_GUEST', 'Guest status');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Booking status');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Publishing status');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Invoice status');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Invoice type');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Approved');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Current business');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Show bookings for');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Show invoices for');
jr_define('_JOMRES_STATUS_ANY', 'Any');
jr_define('_JOMRES_STATUS_PAID', 'Paid');
jr_define('_JOMRES_STATUS_NOTPAID', 'Not paid');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Checked out');
jr_define('_JOMRES_STATUS_ACTIVE', 'Active');
jr_define('_JOMRES_STATUS_CANCELLED', 'Cancelled');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Published');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Not published');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Guests with active bookings');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Guests with past bookings');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Bookings');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Commissions');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'All my businesses');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Set as current');
jr_define('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Check out');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'bookings');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'properties');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'guests');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'reports');
jr_define('_JOMRES_HLIST_GUESTS', 'Guests');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'List guests');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'List invoices');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Properties');
jr_define('_JOMRES_HQUICK_BOOKING', 'Quick booking');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Date of booking');
jr_define('_JOMRES_HTWO_WEEKS', 'Two weeks');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'This booking will be cancelled. Press OK to cancel the booking.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkins');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Current residents');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Navigation bar location');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Default (content area)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixed to top');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixed to bottom');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Inverted navbar (colour change)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Booking number');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres includes it's own template sets, one for each supported version of Bootstrap. Joomla and Wordpress templates/themes that are based on Bootstrap will offer a specific version of Bootstrap so you need to ensure that the option you choose here is compatible with your template/theme. If your theme does not provide any Bootstrap code set this option to No Bootstrap in Theme and then Jomres will automatically include Bootstrap 3 files for it's own use. ");
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');
jr_define('_JOMRES_HFIXED_PERIODS', 'Fixed periods');
jr_define('_JOMRES_HDEPOSITS', 'Deposits');
jr_define('_JOMRES_HBOOKING_FORM', 'Booking form');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Required fields');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'My Street');
jr_define('COMMON_PLACEHOLDER_TOWN', 'My Town');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', 'Extended Configuration');
jr_define('SIMPLE_CONFIGURATION', 'Simple Configuration');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Resource features');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Resource type');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Edit guest type');
jr_define('_JOMRES_HEDIT_COUPON', 'Edit coupon');
jr_define('_JOMRES_HEDIT_EXTRA', 'Edit extra');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Create multiple resources');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generate resources');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'How many resources?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Resources type');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Max guests per resource');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Delete all existing resources?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.');
jr_define('DATATABLES_SINFO', 'Showing _START_ to _END_ of _TOTAL_ entries');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Approval');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Reject booking inquiry');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Approve booking inquiry');
jr_define('_JOMRES_STATUS_APPROVED', 'Approved');
jr_define('_JOMRES_STATUS_REJECTED', 'Rejected');
jr_define('_JOMRES_STATUS_INQUIRY', 'Inquiry');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Bookings require approval or availability confirmation?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.');
jr_define('_JOMRES_ERROR', 'Error');
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occurred while trying to process this function. It has been reported for you and we will look into it.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Message');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'File');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Edit email template');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Email subject');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Email text');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Email type');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Email name');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Email description');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Please see this page for help customizing the emails and a list of the available output: <a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Site Admin New Booking Email');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Email sent to the site admin when a new booking is made, if the global Paypal gateway is enabled');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Booking Email');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Email sent to property owner when a new booking is made');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Guest New Booking Email');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Email sent to guest when a new booking is made');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Guest Confirmation Letter');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Printable letter or email that can be sent manually by the property owner to confirm a booking');
jr_define('_JOMRES_CAN_BE_APPROVED', 'This booking can be approved. All selected resources are available for the selected dates.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Show the Powered by Jomres link in the Jomres footer.');
jr_define('GUEST_BUDGET', 'Budget');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Use Budget feature?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name: ');
jr_define('_JOMRES_FOR', 'For');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'night');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'nights');
jr_define('_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Feb');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'May');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Jun');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Aug');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Oct');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Dec');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', 'Prikaz _START_ do _END_ od ukupno _TOTAL_ elemenata');
jr_define('DATATABLES_SINFOEMPTY', 'Prikaz 0 do 0 od ukupno 0 elemenata');
jr_define('DATATABLES_SINFOFILTERED', '(filtrirano od ukupno _MAX_ elemenata)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SLENGTHMENU', 'Prikaži _MENU_ elemenata');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'Procesiranje u toku...');
jr_define('DATATABLES_SSEARCH', 'Pretraga:');
jr_define('DATATABLES_SZERORECORDS', 'Nije pronađen nijedan rezultat');
jr_define('DATATABLES_SFIRST', 'Početna');
jr_define('DATATABLES_SLAST', 'Poslednja');
jr_define('DATATABLES_SNEXT', 'Sledeća');
jr_define('DATATABLES_SPREVIOUS', 'Prethodna');
jr_define('DATATABLES_SSORTASCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SSORTDESCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SHOWHIDE', 'Change columns');
jr_define('_BOOKING_ONREQUEST', 'Booking on request');
jr_define('_BOOKING_INSTANT', 'Instant booking');
jr_define('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'Request booking');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Select a site');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');
jr_define('_JOMRES_IS_EU_COUNTRY', 'EU Country?');
jr_define('_JOMRES_HLASTCHANGED', 'Last changed');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Hotel Booking Cancellation Email');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Email sent to the property owner when a new booking is cancelled');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Guest Booking Cancellation Email');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Email sent to guest when a new booking is cancelled');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Send test email');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test email');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'This is a test email from your booking system.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Test email sent successfully');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Test email was not sent');
jr_define('_INVOICE_TRANSACTIONS', 'Transactions');
jr_define('_OPENEXCHANGE_API', 'Open Exchange Rates API key');
jr_define('_OPENEXCHANGE_API_DESC', 'To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');
jr_define('_JOMRES_COMMISSION', 'Commission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'If you upload multiple images for individual optional extras, only the first image will be used.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Pay now');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'This invoice in now due. Please click the button to select the payment method.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Here's a list of some of the great things you can purchase while making a booking at this property. ");
jr_define('GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category');
jr_define('_JOMRES_HCATEGORY', 'Category');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout');
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches.");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Give your property a sub-type');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Contact settings');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Override listings contact details?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirm booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend booking request');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending');
jr_define('_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- New Guest -- ');
jr_define('_JOMRES_CHARTS', 'Charts');
jr_define('_JOMRES_CHARTS_SELECT', 'Select chart...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Income by year/month');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, let's get started. First you need to create some rooms for this property.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Create some rooms now');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Upload an image');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Create some tariffs');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'What will guests book?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Rooms in the property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'The entire property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'What will guests book?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "You'll need to complete your address details so that your guests can find you when they come to stay.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Update your address');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, it looks like you might have forgotten to complete all the fields.');
jr_define('_JOMRES_CONTANT_US', 'Contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Welcome to your new online listing for ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hi, and welcome to your new property on ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "You recently added a new property to our website, and we'd like to welcome you to the family.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'You can see your new dashboard ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' here ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Once you've setup your property you can see how it looks to site visitors by visiting ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' your front page.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(it's not published, so site visitors can't see it yet).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'If you have any questions at all, please ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "and we'll be delighted to answer all your questions.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'All the best, our team at ');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Let's create some tours!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebook.com or anything else.');
jr_define('COMMON_DOWNLOAD', 'Download');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings. <br> Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Use the New button to create new Room Types.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'No bookings/Real estate ( simple listing )');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Log file location');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logs system activity by default to the '.JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map colour scheme');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Right, let's start adding your property to the website. We need to collect a little information about your property here. This will allow us to set up the bare bones of your property. Once that's done, then you'll be guided through adding rooms, prices and images.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'The property type helps you to define how the property will be booked, for example with hotels you "sell" just one or two rooms at a time, whereas with villas you offer the entire property.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Note that the email address doesn't need to be the same as the one you used when registering your account. This allows you to have different addresses for different properties.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Deposit');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'You can configure the minimum deposit amount to be charged. If you do, then the "Deposit required is cost of the first night?" & "Deposit required is percentage?" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'This figure cannot be less than ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Send an email to site admin when an error occurs?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. ");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'Manage Properties');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Permit number');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Some countries legislate that you must display a permit number for your property. If you have such a number, enter it here and it will be added to the property header section.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> Jomres Asamodule Mambot plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('SHORTCODE_TASK', 'Task');
jr_define('SHORTCODE_DESCRIPTION', 'Description');
jr_define('SHORTCODE_ARGUMENTS', 'Arguments');
jr_define('SHORTCODE_EXAMPLE', 'Example');
jr_define('INTEGRITY_CHECK', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_DESC', 'This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Version hash');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Awesome! No problems were found.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Read more');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Read less');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Tourist tax');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Tourist tax rate');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Is percentage?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Affects the entire booking value?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.');
jr_define('NO_LICENSE_MESSAGE', "You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE', "You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE', "Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any e.g. Optional Extras or Rooms, then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any Optional Extras then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>First choose the image(s) you'd like to upload by clicking Add Image or using Drag and Drop. These will appear in the column on the right hand side.</li>
  <li>Above this area, use the \"Choose the resource\" button to choose which resource you want to upload images for. You may be offered the option to choose a specific resource underneath. </li>
  <li> Once you've chosen a resource you can then click the Upload Image button under an image to associate it with that resource. Once an image has been uploaded, it will disappear from the column on the right hand site, and appear in the left.</li>
  <li>Use the Trash button next to existing images to remove images you no longer want to be shown.</li>
  <li>You can change the order that files are shown in the slideshow by renaming them before uploading them, as they are displayed in pages in alphabetical order.</li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Next to the Resource button, you may see a Preview button. If you click on this you will see a popup that shows you how the currently uploaded images will look in a page. This helps to give you an idea of how the images will look to your customers.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "There is no limit to the number of images you can upload. Images are automatically resized when they are uploaded. You can only upload JPG and PNG files.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideally any images you upload would be at least ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " pixels wide, otherwise they may look fuzzy after they've been uploaded.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Any images you upload cannot be more than ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " in size.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Choose the resource you want to upload images for");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specific resource");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Images already uploaded for this resource");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Text formatting');
jr_define('_JOMRES_MARKDOWN_DESC', 'You can enter text here using simple Markdown formatting. You don\'t need to know any HTML, just use the buttons to make the information look like you want, or format text according to these examples.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Emphasis');
jr_define('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'italics');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define('_JOMRES_MARKDOWN_LISTS', "Lists");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numbered list item');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text to display');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'This is a quote.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'It can span multiple lines!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Images');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tables');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Column');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'If set to yes, a slideshow of property main images will be displayed. If set to no, then the first property main image will be displayed.');
jr_define('EDIT_CMS_USER', 'Edit CMS user');
jr_define('BOOKING_MADE_BY', 'Booking made by');
jr_define('_JOMRES_ROUTER_FEATURES', 'Amenities');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Room Types');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'External booking form URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Here you can set an external URL if you want to use a 3rd party website for making bookings. All jomres booking buttons will point to this URL. Leave this field blank if you want to use the Jomres booking form.');
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Room Description');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Guest blacklisted');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'If this guest is black listed then they will no longer be able to make bookings in this property.');jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define('_JOMRES_MAP_HEIGHT',"Map height (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Map zoom level ");
jr_define('_JOMRES_MAP_MAPTYPE',"Map type ");
jr_define('_JOMRES_TEMPLATE_PACKAGES',"Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Template packages are plugins that can provide override templates for various core Jomres template files.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"This page lists any template files that can be overridden by a template package's template files. If you want to override a certain template file, click on the edit button for that file, on the next page you will be able to choose which version you want to override with. Note, these overrides take priority over both Jomres Core and any Wordpress or Joomla theme/template overrides. You can disable an override by deleting it in the List Template Overrides page.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Template name");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Current path");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Not overridden");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"You can choose which template file to override the Core template files by changing the dropdown");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");
jr_define('_JOMRES_SELECT_WIDGETS',"Select widgets");
jr_define('_JOMRES_INTERVAL',"Interval");
jr_define('_JOMRES_TIMELINE',"Timeline");
jr_define('_JOMRES_CPANEL_GRID',"Control panel home layout");
jr_define('_JOMRES_CPANEL_GRID_DESC',"Select the grid layout of your frontend property management control panel home page.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES',"Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES',"Town images");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING',"Changing the property type will delete all rooms, tariffs, property settings and reset availability.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager. If you have Core plugins installed, but do not have a valid Jomres license then we <em>do not</em> recommend that you update Jomres as older plugins often may not work with newer versions of Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "If you would like to update Jomres and it's plugins you will need a renewal license. Please visit <a href='https://www.jomres.net/pricing' target='_blank'>our site</a> for more information. In most cases these licenses are 50% of the price of a full license. Please ensure that you have logged into our shop before attempting to purchase a renewal.");
jr_define('_JOMRES_PAYMENT_METHOD_USED',"Payment method : ");

jr_define('_JOMRES_PRICES',"Get Connected");


jr_define('_OAUTH_TITLE',"App key management");
jr_define('_OAUTH_APPS',"REST API client details");
jr_define('_OAUTH_IDENTIFIER',"Identifier");
jr_define('_OAUTH_APIKEY',"Client ID");
jr_define('_OAUTH_SECRET',"Secret");
jr_define('_OAUTH_CREATED',"Created/Updated App");
jr_define('_OAUTH_CLIENT_ID_INFO',"The Client ID and Secret are created for you. The Identifier is so that you can easily identify this key pair.");
jr_define('_OAUTH_SCOPE_TITLE',"Permissions ( what the client can do ) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER' , "User permissions");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES' , "Property permissions");

jr_define('API_DOCUMENTATION_TITLE',"App REST API documentation");

jr_define('_OAUTH_CONFIG',"API Core configuration");

jr_define('_OAUTH_CONFIG_SHOW',"Show API client configuration options in Jomres main menu?");
jr_define('_OAUTH_CONFIG_SHOW_DESC',"You may choose to not show the API client configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define( '_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define('API_METHODS_TITLE',"API Methods");
jr_define('API_METHODS_DESCRIPTION',"This list of methods is based on your installed API feature plugins and is automatically generated. If you install or delete an API feature plugin you must visit this page to rebuild this list of API methods available on your site.");

jr_define('_OAUTH_REDIRECT_URI',"Redirect URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER',"Give me a name that's meaningful to you, such as My Phone");

jr_define('_OAUTH_GRANT_TYPES',"This system supports two grant types , Client Credentials and Implicit. If you are using the <em>client_credentials</em> flow then you will need both the client id and the client secret. If using <em>implicit</em> then your app would send just the client id and you would log into the system to explicitly authorise that app.");

jr_define('_OAUTH_IMPLICIT_NOTES',"To use the <em>implicit</em> grant type flow, you will need to use this url to authorise your apps. When this url is called, and you have authorised the app the system will issue a token that you apps will then use to call this system's API ");
jr_define('_OAUTH_AUTHORISATION_URL',"Authorisation URL");

jr_define( 'WEBHOOKS_CORE', 'Webhooks' );

jr_define('_WEBHOOKS_CONFIG_SHOW',"Show Webhook configuration options in Jomres main menu?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC',"You may choose to not show the Webhook configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE',"Webhooks documentation");

jr_define( '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define( 'WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration' );
jr_define( 'WEBHOOKS_INTEGRATION_ID', 'Integration ID' );
jr_define( 'WEBHOOKS_INTEGRATION_URL', 'URL or Name' );
jr_define( 'WEBHOOKS_ENABLED', 'Enabled' );

jr_define( 'WEBHOOKS_AUTH_METHOD_SELECT', 'Authentication method/Integration' );

jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Any webhooks you create will not be triggered as you are not assigned to any properties. Super property managers are not typically assigned individual properties, so you may need a new user for webhook creation.' );
jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Any webhooks you create will be triggered against the following properties : ' );


jr_define( 'PORTAL_REVIEWS_LIMIT', 'Reviews limit' );
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Use this setting to limit the number of reviews shown in the property details page.' );
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Show all reviews' );

jr_define( 'VIDEO_TUTORIALS', 'Video Tutorials' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum deposit value' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "If the calculated deposit is less than this figure, then set deposit to this value instead. This figure might itself be over-ridden if it does not satisfy the site's minimum deposit setting. Leave it set to 0 to not use the setting." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'To increase your site speed, we recommend importing details of the existing site and properties images to database.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Import existing images details to database');

jr_define( '_JOMRES_S3_ACTIVE_DESC', 'Experimental feature. If enabled, images uploaded using the media centre feature will also be copied to your Amazon S3 bucket and served from your Amazon S3 bucket url. When enabling this the first time, you`ll also be promted to import existing images to your S3 bucket.');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Replace your default Amazon S3 domain with your CloudFront domain');
jr_define( '_JOMRES_S3_SSLTLS_DESC', 'Recommended to be enabled. For Windows and Mac OSX only, if libcurl wasn`t built with Schannel or Secure Transport support (the native SSL libraries included in Windows and Mac OS X), you should set this to No.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'You`ve enabled the Amazon S3 integration, so you`ll have to copy all existing images to your S3 bucket. Images are now served to your site visitors from your Amazon S3 url, so you`ll need to copy them first to your S3 bucket, otherwise they won`t be visible to your site visitors.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Once you click this button, please do not interrupt the process and wait for a success or error message. Depending on server speed, this may take a while to complete.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copy existing images to Amazon S3 bucket');


jr_define( 'JOMRES_INCOMPLETE', 'Incomplete' );
jr_define( 'JOMRES_WATING_APPROVAL', 'Pending approval' );
jr_define( 'JOMRES_GOOGLE_MAPS_PDETAILS', 'Property details map' );

jr_define( 'HAS_STARS_TITLE', 'Allows stars classification?');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force reimport image details to database');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force reupload images to S3 bucket');
jr_define( '_JOMRES_UNINSTALL_TABLES', 'Delete all Jomres data when uninstalling?');
jr_define( '_JOMRES_UNINSTALL_TABLES_DESC', 'If set to yes, Jomres will delete all it`s database tables when uninstalled. This will delete all Jomres data from db and can`t be undone.');

jr_define( 'TRANSACTION_IDS', 'Transaction id');
jr_define( 'PAYMENT_METHOD', 'Payment method');
jr_define( 'POA_DISPLAY_PRICE', 'POA Price');
jr_define( 'POA_DISPLAY_PRICE_DESC', 'When properties are shown in a list, the system will attempt to find a valid price from configured tariffs based on either today\'s date, or if dates were used in a search, then based on those dates. If it cannot, then it will show POA (Price on application), meaning that the guest should contact you to get a price. If you want, you can configure a price here that will be shown instead of the POA text. This figure would be a "fallback" price to display if no other price can be determined.');

jr_define( 'PLUGINMANAGER_INSTALL', 'You need to install the plugin manager before you can install Jomres plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_REINSTALL', 'You need to update the plugin manager before you can update any installed plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_INSTALL_BUTTON', "Let's do this!");

jr_define( 'INCLUDEINFILTERS', 'Include in filters?');
jr_define( 'INCLUDEINFILTERS_DESC', 'Property feature filters in Ajax Composite Search can become very long, so you can set this option to No to prevent this feature from showing in the property feature list.');

jr_define( 'REVIEW_REMINDER_PT1', "You have ");
jr_define( 'REVIEW_REMINDER_PT2', " booking(s) that you have not left a review for yet. Please leave a review.");
jr_define( 'BOOKINGS_AWAITING_REVIEWS', "Bookings waiting for reviews");
jr_define( 'REVIEW_NAG', "Nag guests for reviews?");
jr_define( 'REVIEW_NAG_DESC', "Once a guest has been booked out from a booking, the system will remind them to post a review for their booking. Set this option to No to disable this reminder.");

jr_define( 'HIDDEN_ADDRESS_SETTING', "Hide address?");
jr_define( 'HIDDEN_ADDRESS_SETTING_DESC', "If you set this option to Yes, then only guests who have already placed a booking on your property will be able to see the property street address. You might want to use this setting to hide the property's exact location if, for example, it is routinely left unattended.");
jr_define( 'HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimize images on upload?');
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'When enabled, images will be optimized for web (file size can be up to 75% smaller). Depending on the uploaded image type, your server needs to have one or more of these libraries installed by the hosting provider: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define( 'DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define( 'OBSOLETE_FILES_CHECK', 'Obsolete Files Check');
jr_define( 'DATATABLES_COLVIS', 'Column Visibility');

jr_define( 'API_TOKEN_LIFETIME', 'API token lifetime');
jr_define( 'API_TOKEN_LIFETIME_DESC', 'How long an API token remains valid for, in seconds. 86400 = 1 day, 31536000 = 1 year');


jr_define( 'ENCRYPTION_TITLE', 'Encryption' );
jr_define( 'ENCRYPTION_FILE_LOCATION', 'Encryption file location' );
jr_define( 'ENCRYPTION_FILE_LOCATION_DESC', '**Never delete the encryption file** <br/> User data is stored encrypted in tables to ensure that "data at rest" is protected securely, in accordance with GDPR recommendations. By default the encryption key is stored in the file "encryption_key.class.php" in the root of your Jomres installation (typically /public_html/jomres). You can change where the file is stored here. If you do change the location, you must MOVE the file, do not wait for Jomres to create a new version otherwise you will not be able to decode your guests\'s details.' );

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'The information you save here will be used on invoices generated for this property');

jr_define( '_JOMRES_GDPR_POLICIES', 'GDPR Policies' );
jr_define( '_JOMRES_GDPR_POLICIES_DESC', 'Here you can configure how long after a booking or invoice has been created it is removed from the system to ensure that you are compliant with the GDPR.' );

jr_define( '_JOMRES_GDPR_BOOKING_RETENTION', 'Booking Retention period (in days)' );
jr_define( '_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'How many days after a booking departure date should the booking be deleted? When it is deleted, both the booking and the invoice are removed. A typical retention period might be 365 days.' );

jr_define( '_JOMRES_GDPR_INVOICE_RETENTION', 'Invoice retention (non-booking) period' );
jr_define( '_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Other invoices, such as commission and subscription invoices, are not tied to bookings. As a result they will not be deleted when booking invoices and contracts are deleted. Depending on your country, and your own business practices, you will need to configure a different retention period. A typical retention period might be 3653 days, which is 10 years.' );


jr_define( '_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Your data' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Some features of this website need to store information about your visit. This is used only to provide service to you, is never shared with anyone else and is deleted when no longer needed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'DO YOU GIVE US PERMISSION TO STORE THIS INFORMATION??' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'In detail' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'You must consent to us storing this data for you to be able to make bookings on this site. Regardless of whether or not you consent to your data being stored, we will store a cookie on your computer to tell us whether or not you have opted in. This helps us to ensure that we do not constantly ask you whether or not you want to opt in or out and it does not contain any Personally Identifiable Information (PII). If you change your mind you can visit the "App permissions" page at any time to opt in or out.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'The information is stored for different time periods depending on the nature of your visit. So, if  you are just looking around we will store approximate geographical location (country level) information. If you perform searches, then to make search forms more user friendly we will store the last things you searched on. This information is typically stored for a maximum of 24 hours and is only used to make your visit more pleasant.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'When you make a booking with us, by necessity more information is stored.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'The technicalites of the booking form are captured and retained for a maximum of 60 days. This is required so that On Request bookings can be turned into full bookings once a booking is approved, and for analysis by our teams in case there is an issue with a booking. If you were not logged in when you made a booking then we will email you a username and password so that you can view your booking history and exercise your Right To Be Forgotten (RTBF) if you wish to do that.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Data entered into the booking form, for example name, email address, real address is stored for a maximum of 365 days after the booking\'s departure date. This information is stored in encrypted form in our database so that only authorised people can view it. If you make a booking then by law we must store your PII whilst the booking is valid. Once the booking has completed, either because it has been cancelled or you have been checked out, then you will be able to exercise your RTBF by logging in and visiting the "Your data" page. Invoice information for completed bookings will still be securely stored in our database to ensure that we abide by relevant tax laws but you will be able to remove all other PII after the booking is completed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'When you consent to your information being stored as described above, we are legally obliged to store this consent in our database. This information will include your IP number and the content of the opt-in form. We will retain this consent notification indefinately (this is a legal requirement).' );

jr_define( '_JOMRES_GDPR_CONSENT_NOT_SET', 'You have not yet told us if we can collect Personally Identifiable Information about you' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_IN', 'You have consented to us collecting the necessary Personally Identifiable Information to take bookings' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_OUT', 'You have told us to not collect Personally Identifiable Information' );

jr_define( '_JOMRES_GDPR_NOCONSENT_INTRO', 'You have not given us permission to collect your private data' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'For you to perform certain actions on this website we have to collect Personally Identifiable Information about you, but you have not given us permission to do so.' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Change your permissions' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continue viewing properties' );

jr_define( '_JOMRES_GDPR_APP_MENU_ITEM', 'App permissions' );

jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Guest data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'These are the details that are stored for you by the various properties. Different hotels may hold different records, depending on what you entered when you made the booking.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'You do not have any data stored with any hotels in this system' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profile data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'This is the main data set we hold for you, distinct from those you have shared with different properties.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'You have not saved any profile information' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Here is the Personally Identifyable Information that we store on this website for you. It is constructed in JSON (JavaScript Object Notation) format which is a lightweight data-interchange format. It is easy for humans to read and write and it is easy for machines to parse and generate.' );

jr_define( '_JOMRES_GDPR_REDACTION_STRING', 'Anonymised' );

jr_define( '_JOMRES_GDPR_MY_DATA', 'Your data' );
jr_define( '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'By accepting these Terms of Use Agreement (this "Agreement"), you agree that:

<ul>
	<li>
		You are authorized to book hotels through this website;
	</li>
	<li>
		You are at least 18 years of age;
	</li>
	<li>
		You possess the legal authority to create a binding legal obligation;
	</li>
	<li>
		You will use the Site in accordance with this Agreement;
	</li>
	<li>
		You will only use the Site to make legitimate reservations for yourself or for another person for whom you are legally authorised to act;
	</li>
	<li>
		You will inform such other persons about this Agreement that applies to the reservations I have made on their behalf, including all rules and restrictions applicable thereto;
	</li>
	<li>
		All information supplied by yourself to the Website is true, accurate, current and complete; and
	</li>
	<li>
		You will safeguard your account information and will supervise and be completely responsible for any use of your account by yourself and anyone other than you.
	</li>
</ul>
' );
jr_define( '_JOMRES_GDPR_MY_DATA_LEAD', 'Security and transparency are important to us.' );
jr_define( '_JOMRES_GDPR_MY_DATA_INTRO', 'We take our responsibilities regarding storing your data very seriously. All Personally Identifiable Information (PII) is stored encrypted in our database using industry standard algorithms to ensure that only authorised users can view this information.' );

jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'You can download all of the PII we store for you.' );
jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Download now' );

jr_define( '_JOMRES_GDPR_MY_RTBF_LEAD', 'Right To Be Forgotten (RTBF)' );
jr_define( '_JOMRES_GDPR_MY_RTBF_INTRO', 'We believe that you should be able to <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">delete</a> your <a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Personally Identifiable Information </a>if you want and if it is practicable. ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'You are not registered on this site. Your general location (country) and IP number will be stored for a maximum of 24 hours and then deleted.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'You are not registered on this site and you have opted out of data collection. We have not stored your PII.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'You are registered on the site and do not have any pending or active bookings. We can anonymise most information we currently hold for you. Would you like to do that? ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Note : This does not delete your account, it simply anonymises our records so that your account cannot be associated with you as a person. By law we must continue to store your PII for invoicing purposes, however we will delete all guest records.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'You are registered on the site, however you have bookings outstanding and we cannot anonymise your data at this time. This data will be retained for a maximum of one year after the booking has been completed, then it will be deleted, if you do not choose to remove it before that time.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Because you are a property manager on our site, we cannot offer you the ability to have your data deleted automatically. Instead, please contact us directly so that we can assign your property(s) to another manager. Once we have done that and removed your status as a property manager, you will be able to automatically have your data deleted.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Forget me!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'This cannot be undone!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Your data has been deleted!' );

jr_define( '_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Sorry, you cannot make a booking as your email address is invalid' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'This page gives you the ability to anonymise any guests who have their information stored in the system. This allows you to be compliant with the GDPR, however you cannot edit any other information on this page. To do that you have to log into the frontend as a property manager. The assumption is that a historic guest has contacted you requesting that you allow them to exercise their right to be forgotten. If they are unable to log into the frontend of the site (perhaps a user was not created for them when they booked) then you can use this area to anonymise them once you have confirmed their identity.' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymise guest' );
jr_define( '_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Guest data anonymised' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Cannot anonymise' );

jr_define( '_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'We need your permission to store your information before you can make a booking. CLICK HERE to give us permission.' );

jr_define( '_JOMRES_GDPR_CONFIG_ENABLE', 'Enable GDPR compliant functionality?' );
jr_define( '_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'WE DO NOT RECOMMEND THAT YOU DISABLE THE GDPR COMPLIANT FUNCTIONALITY. Jomres has built-in features that helps you to ensure that the Jomres section of your site is compliant with the GDPR. If you disable this feature (and you should not if you are in the EU or you do business with citizens of the EU) then Jomres will automatically assume that every visitor to the site has given their permission to have their personal data enabled. App permission and My Data pages will not be shown and users will not be prompted to give their permission to have the data collected.' );


jr_define( 'EMPTY_TEMP_DIR', 'Empty temp dir' );
jr_define( 'EMPTY_TEMP_DIR_DONE', 'Temporary files deleted' );

jr_define( 'MACHINE_TRANSLATION', 'Machine translations' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG', 'Source language' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'It is possible to hook in machine translation functionality. This allows you to enter strings in one language and translations could be pulled from remote services. Be aware that not all translation services support all languages. See those services for more detail.' );

jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Room Types' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'New Room type' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'You can create and edit room types on this page. These room types will be specific to this property only. When setting up your property you first need some Room Types. You can use either those room typies created by the administrator, or you can add your own. Once you have one or more Room Types you can then create rooms of that Room Type. After you have rooms you can then create tariffs (prices) for those rooms because tariffs are linked to Room Types.' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Managers can create room types?' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Use this option to configure whether or not managers can create their own room types in the frontend. We strongly recommend that you leave this option set to No when you first start using Jomres, especially if you are creating a portal because you should create all room types in the administrator area. Room types created by managers will appear in search forms, but because these room types are specific to individual properties, only one property will be shown in search results if that room type is selected durings searches. If you want so that only Super Property Managers can create room types then leave this option set to Yes and use the Access Control plugin to allow only super managers to view the "Settings > Room types" menu option. Only properties that rent out rooms in the property and use Advanced or Micromanage tariff editing modes can use this option. Villa/apartment type properties will not be able to use it.' );
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Room/property type updated');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Show room types in search options' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'If you choose to allow property managers to create their own room types, you can choose whether or not to show those created room types in the search options where you have chosen to show room types.' );


jr_define( '_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "You shouldn't re-use the same email address for each booking.<br/>If you have a unique domain (eg. not a gmail email address) for your business then use the guest's telephone number as their email address. The email address would then look something like 123456@mydomain.com<br/>This will ensure that a new guest is created when you create a booking ." );

jr_define( '_JOMRES_LOGIN_USERNAME', 'Email address' );
jr_define( '_JOMRES_LOGIN_PASSWORD', 'Password' );
jr_define( '_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED',"We are delighted that you would like to book with us again. To be able to manage all your bookings together, it is necessary that you log in so that the booking can be added to your account. This also ensures that you are authorized to use the e-mail address provided." );

jr_define( '_JOMRES_LOGIN_RESET_MESSAGE', 'If you do not know your password we can send you a password reset email. Please follow the instructions in that email to reset your password.' );
jr_define( '_JOMRES_LOGIN_RESET_BUTTON', 'Forgot your password?' );

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonymise your name?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'If you choose to anonymise your name when reviewing we will use your initials instead.');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', ' said ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Reply to this review');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Type your reply to this review here.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Your reply');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Main review');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Review reply saved');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Before submitting a review reply, you must read the following. By submitting a reply you confirm that you agree to these terms and conditions.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'What are our guidelines for a review reply?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'You are responding to the review of your property. You <em>must not</em> use your reply as a commercial dispute process. If you need to report a review, you must use the "Report Review" button on the listing, and not this review reply page.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Once you have left your reply you will not be able to edit it.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Allowed and Encouraged');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
	<ul>
    <li>A full response to the review.</li>
    <li>Courtesy and Honesty.</li>
    <li>Sensible responses to the reviewer\'s issues (remember, others may be having similar issues but did not take the opportunity to post a review).</li>
    <li>Encourage the guest to get in contact with you directly to solve issues.
    <li>Always remember that future guests will see your response. Make sure to be professional at all times.</li>
	</ul>
	');
	
jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Not allowed');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
	<ul>
    <li>Commercial disputes.</li>
    <li>Questions to the Reviewer or Others.</li>
    <li>Questionable Language (including cursing).</li>
	</ul>
	');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Last ran');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Schedule');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Invoice numbers');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Use custom invoice numbers?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'You can configure the system to use custom invoice numbers. Only new invoices will be affected.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Start number');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Numbers are created consecutively. What should the first number be?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'What format should the invoice number take?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Configure the invoice number format here. A format can look like {N}/{D} or {N}/{Y} where N is the automatically generated number, D = date in the format YYYYYMMDD (20190131) or Y = YYYY (2019). Any other alpha numeric characters not enclosed in curly braces will be left alone, so a pattern that looks like {N}/{D}-L would result in an invoice number (21) that looks something like 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Surcharge');
jr_define('_JOMRES_SURCHARGE_DESC', 'An additional charge that will be added to the room when booked (calculated per day)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritise site-wide labels?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Custom text saved in the label editing or the translate lang file strings pages are considered "site-wide" labels. Property managers can also customise labels for each property using the label editing feature in the frontend. This allows a property manager to have different texts for his property, which is useful if the property is different to all of the other properties on the site.<br/> When the system searches for label texts, it will prioritise site-wide texts over property specific texts meaning that if a site-wide text exists for that label, the system will choose that one first. If you set this option to No, the system will prioritise property specific texts over site-wide texts.');

jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // This could be changed if whitelisting, so site "World's best booking site" would change this to "WBBS" or similar.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Library Packages');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Vendor and Node Modules are separate (free) packages for Jomres. You can re-install the packages on this page.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Re-install library packages');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Unable to delete property type because it is still be used by some properties. You must change these properties to another property type first before attempting to delete this one. Property UIDs that prevent deletion : ');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Random email addresses');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Offer Random Emails');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'You can allow the system to generate random email addresses in the Quick Booking popup in the dashboard. This allows managers and receptionists to create bookings for guests that they do not have email addresses for, it is intended to work as a time saver for sites with many receptionists/managers who understand that these random emails will never be used for real communication, the purpose is to get around the fact that in Jomres all guests must have email addresses. You MUST also provide a domain in the next field.');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'This should not be a normal email domain, such as gmail or outlook. Instead it can either be your own domain, or something else entirely, such as "mysite.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Upload area');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'No user role');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptionist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Suspended');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Deleted from CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'If you like Jomres, please consider leaving a review on one of these sites');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'I`m a nice person, i`ve already left a review');

jr_define('_LICENCE_PROMPT_DEAR', 'Dear ');
jr_define('_LICENCE_EXPIRED', ', your Jomres license key has expired, so you`re missing these great features and benefits! ');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Plugin updates and new plugin releases');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_EXPIRED_POST', 'Connect to us for trouble free payment solutions and get access to all plugins and member-only support services.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Get access to all plugins now!');

jr_define('_LICENCE_INVALID_KEY', 'Unfortunately you don`t seem to be using a valid Jomres license key, so you`re missing on these great features and benefits!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugins</a> that greatly extend Jomres functionality');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_INVALID_POST', 'Connect to us for trouble free payment solutions and get access to all plugins and member-only support services.');
jr_define('_LICENCE_INVALID_START', 'Get access to all plugins now!');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Users');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Invoices');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Translations');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Tools');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Reports');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Settings');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Help');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total properties in system');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Published properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Unpublished properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Approved properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Properties requiring approval');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Unpublished reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Review reports ');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "This property's property type is not published, it may not appear in search results. Please contact the site administrator to publish the property type, or change the property type in the Edit Property page.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Update your property type');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Income (paid amounts)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Cannot delete the property feature "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" because it is used by the following property(s) : ');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'This page performs a basic test of the REST API using built-in functionality in Jomres. It calls the Jomres REST API to see if it receives a valid response.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'The server called this URL to see if the response is valid : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'The page received this response : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'The test appeared to go as expected, you will probably not have any problem receiving REST API requests from the rest of the Internet.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'The test failed, look in the Response field, if it looks like a lot of html, or you recieved a 404 message, then your server is redirecting calls to another url. This will prevent you from receiving API calls.');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndication test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'The Jomres App server maintains a list of all Jomres sites. This allows us to build a syndication network. This network is designed to allow our users to display properties from other sites on their own sites and is useful, particularly for new sites, to build up an SEO presence on the net. The goal is for all Jomres sites to work together, building trust in the network. There is no charge for this service.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Your site is not currently listed on the Jomres App server, which is part of the syndication network. This server will try again to add this server to the network on the next 6 page loads. If, after a few page loads, this does not change please check that the connectivity test above passes the tests. Note, localhost servers cannot be added to the network.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Congratulations, your server is listed on the Jomres App server.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Syndicated properties');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Here are some other properties available from our property network');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Syndication stats');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Congratulations, your server is listed on the Jomres Syndication Network. Your property(s) will start appearing on other Jomres sites soon, if they are not already being shown.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'You installation is not part of the Jomres Syndication Network, therefore your property(s) are not being shown on other Jomres based sites and you can\'t benefit from this free advertising.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Active Jomres installations : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'The total number of Jomres installations that are sharing Jomres Syndication Network properties on their sites. ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total Properties : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'This is the number of properties available in the JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Property displays : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'In total, all of the times a Jomres property has been linked to from another Jomres based site.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) is a free feature available to all Jomres users. It\'s purpose is to provide you with free advertising of your properties on other Jomres based sites. The goal is to help you get your site off the ground fast, offering free advertising so that your properties are recognised and trusted because they are linked to high confidence, high relevance websites that are already well known to the search engines. See this <a href="https://www.jomres.net/features/jomres-syndication-network" target="_blank">article on our website</a> and <a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank">the manual</a>  for more information.');


jr_define('GUEST_PROFILE_INFORMATION', 'This is your guest profile data, fields with this symbol <i class="fa fa-users" aria-hidden="true"></i>
 are publicly visible, whereas fields with this symbol <i class="fa fa-user-secret" aria-hidden="true"></i> can only be seen by you, your hosts and site administrators.<br/><br/>Hosts can only see private information if you have already created a booking with them.<br/><br/>Your information is safely encrypted and stored in our database using AES-256 encryption.');

jr_define('GUEST_PROFILE_OPTIONAL', 'These fields are optional, however hosts may use the information here to determine if they feel that they can trust you, therefore it\'s better to add the information. Remember, you are asking to stay in their property, and they may turn you down if they feel you aren’t a good fit or that your bio doesn’t contain enough information.');
 
jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Driving license');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Passport number');
jr_define('GUEST_PROFILE_IBAN', 'IBAN number');
jr_define('GUEST_PROFILE_ABOUT_ME', 'About me');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'This "About me" section is publicly viewable so don\'t put in any private information. That said, do make an effort to put as much as you feel comfortable sharing such as your passions, what you do for a living, your hobbies etc. You can use Markup to give it a bit of jazz. Hosts will want to feel that they can trust you with their properties. Make sure that your picture is a real picture of you, not your dog or car (yes, guys, we\'re talking to you!).');

jr_define('GUEST_PROFILE_PREFERENCES', 'Enter any special requirements you may have, such as ease of access needs here. They will not be shown on your public profile but they will be added to the booking information when you make a booking.');

jr_define('VIEW_HOST_PROFILE', 'Host\'s profile');

jr_define('GUEST_PROFILE_TITLE', 'Guest profile');
jr_define('GUEST_PROFILE_TITLE_MY', 'My profile');

jr_define('GUEST_PROFILE_WELCOME', 'Hi, let me tell you a little bit about myself.');
jr_define('GUEST_PROFILE_MY_NAME', 'My name is ');
jr_define('GUEST_PROFILE_I_COME_FROM', ' and I come from the ');
jr_define('GUEST_PROFILE_IN', ' region in ');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'My private information');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'We do our best to validate guest and host information however you should do your own due dilligence and decide for yourself whether or not this person is trustworthy.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'My properties');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'This is what I said about this property : ');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'I gave this property a rating score of : ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_OF_ME', 'What other people say about me');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'What this host said about me');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Review guest');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'My review of this guest ');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Here are some example guest reviews to get the ball rolling : <br/>
	
	<ul>
	<li>(guests name) was a pleasure to host! They left the space clean and were quiet throughout the weekend. They had smooth communication and I look forward to having them stay with me again!</li>
    <li>I loved having (guest name) because they were able to treat the place with respect, have a great time and enjoy the area. They were awesome with renting the space and I hope I get to host them again.</li>
    <li>All of my house rules were respected with (guest name) and they were able to come in and go with ease. I loved having them there as they were respectful and quiet. I highly recommend them to others!</li>
	</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Sorry, I can\'t find that user. Most likely they have not filled in their account details yet.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Guest');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');


jr_define('BOOKING_NOSHOW_MENU', 'Mark as No Show');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Booking marked as No Show');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Bookings');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN statistics for this user');

jr_define('BOOKING_NOSHOW_INFO', 'Booking and No Show information is pulled from the Jomres Syndicate Network at booking time. It is taken from anonymised data and can be used by you to decide if this guest is a risk of not fulfilling the booking. If the system reports that the data is unknown, it is probably because this system is not recognised on the network.');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Unknown');

jr_define('CMF_CONFIG_TITLE', 'Channel Management Framework');
jr_define('CMF_CONFIG_KEY', 'Channel Management Framework Key');
jr_define('CMF_CONFIG_KEY_DESC', 'The Channel Management Framework license key. You will need to provide this key to be able to download Channel Management Framework plugins.');

jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Your property has not been approved');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Your property as been unapproved. If you think that this was done in error please contact us. ");

jr_define('_JOMRES_GUESTTYPES_IS_CHILD',"Is this a Child guest type?");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC',"Set this to Yes if this guest type would be classed as a Child guest type.");

jr_define('_JOMRES_GUESTTYPES_INTRO',"If you want to charge per person per night then you will need to create some guest types.");
jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS',"You can create as many guest types as you need, try starting out by creating just one guest type called 'Adult'. Leave all of the settings at their default values. Next, if for example you want to give children under 12 a discount of 50% you would create a new guest type, and call it 'Children under 12'. Set the 'Add variance?' option to - (negative) and set the 'Variance' to 50. This means when children are added to a booking they're charged 50% of the room cost of the room. " );

jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES',"Set prices manually");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS',"Set minimum nights manually");
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS',"Set minimum nights");

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW',"Set <em>price per night</em> by day of week");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES',"Set <em>price per night</em> by date range");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS',"Set <em>minimum nights</em> by date range");

jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES',"The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set price per night button.");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS',"The date pickers and the minimum nights input allow you to set one value for the minimum nights for a given date range. Choose a start and end date, input a number for the minimum nights, and click 'Set minimum nights'.");

jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO',"Use this dropdown to change between setting prices for individual dates, to setting minimum nights for individual dates. You can use the <em>by day of week</em> picker, the <em>by date range</em> picker or set the prices/minimum nights by manually editing the dates.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT',"Use this dropdown to change between setting prices for individual dates, to setting minimum nights for individual dates. You can use the <em>by date range</em> picker or set the prices/minimum nights by manually editing the dates.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR',"Set prices or minimum nights");

jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW',"Set <em>minimum nights</em> by day of week");
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO',"The day of week fields allow you to set a minimum number of nights for a given day of week, once you click the day of week button all days of the week will be set to that min nights setting.");


jr_define('_JOMRES_MICROMANAGE_MANUALLY',"Manually set prices/minimum nights");
jr_define('_JOMRES_MICROMANAGE_SET_PRICES',"Set prices");
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS',"Set minimum nights");

jr_define('_JOMRES_MICROMANAGE_PRICE',"Per night");
jr_define('_JOMRES_MICROMANAGE_MINDAYS',"Min nights");
jr_define('_JOMRES_MICROMANAGE_MAXDAYS',"Max nights");

jr_define('_JOMRES_MICROMANAGE_INTRO',"Here you can create you tariffs, which are associated with the room types that you have in your property. ");

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS',"Most commonly used options");

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON',"Instructions");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS',"If you want to add different prices for different numbers of guests then <em>you can create more than several tariffs for each room type</em> and have different min/max guests values in those tariffs.");

jr_define('_JOMRES_MICROMANAGE_INFO',"Give the tariff a name, define the maximum number of nights, and the minimum and maximum number of guests that are required in the booking form before the tariff is offered.<br/><br/> Use the date picker panel to add prices and minimum nights settings to a range of dates, or edit the inputs directly. If you don't want the tariff to be offered at all on certain dates, leave the price set to 0 ( zero ) on those dates. <br/><br/> You can have different minimum nights on different dates, so if you want longer bookings during festival/conference weeks then you can set the min nights to be higher in just those periods.<br/><br/>If you charge Per Person Per Pight (PPPN) you can enable that setting in Settings > Property Configuration > Tariffs and Currency tab, then create the guest types that you require in Settings > Guest Types.");

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS',"Extra options");

jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS',"These are additional options that are not so commonly used, but nevertheless available to you. <br/><strong>Ignore PPPN</strong> Means Ignore Per Person Per Night. You can have several different tariffs for the same room type, for example one of which charges per person per night, and one that does not.<br/><strong>Allow weekends</strong> The Allow Weekends option gives you the option to make a tariff that's only available during weekdays, for example if you want a special tariff for business travellers. In that case you would set the option to No and the min nights to 1 and the max nights, at most, 5.  <br/><strong>Weekends only</strong>  The Weekends only option is the converse of the Allow Weekends option. What you consider to be weekend days can be configured in your Property Configuration settings. This gives you the ability to define a weekend only rate that you might want to offer for special events.<br/><strong>Check-in Day of week</strong> This option gives you the ability to force checkin to only be on certain days of the week and is best used in conjunction with the Property Configuration > Bookings tab > Fixed periods options. The majority of users will want to leave this option set to All.<br/>The final two options, <strong>Min rooms already selected</strong> and <strong>Max rooms already selected</strong> are very specialised and useful to properties with extremely complicated tariffs. <em>Unless you have a specific need, you should leave these options alone.</em> Use them if you only want this tariff to be offered when the guest has already selected N number of rooms in the booking form, so for example you could have one basic tariff where those options are left at the default, and a second tariff where the min rooms already selected option is set to 1, then this second tariff will be offered in the booking form once a room has been selected.");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE',"You can create multiple tariffs for the same room type, so you can create one tariff for min/max days of 1 - 7 and a second tariff where the min days is 7, the max days 14, and so on. This allows you create pricing schemes as simple or as complicated as you need. It also allows you to create multiple tariffs with different conditions, so you can have a second set of tariffs where the price is lower for Bed & Breakfast, and another set of more expensive tariffs for Bed, Breakfast and Evening Meal.");

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES',"Set date picker days only");
jr_define( '_JOMRES_PROPERTY_HCATEGORIES', 'Property Categories' );
jr_define( '_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Edit Property Category' );
jr_define('_JOMRES_STOP_READTHISFIRST1',"Stop!");
jr_define('_JOMRES_STOP_READTHISFIRST2',"Thanks for installing Jomres");
jr_define('_JOMRES_STOP_READTHISFIRST3',"Property management is performed in public facing pages, not the administrator area.");
jr_define('_JOMRES_STOP_READTHISFIRST4',"If you are not familiar with Jomres please visit the Help section > Getting Started page.");


jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE',"Join the Jomres Syndicate");
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC',"Once you have your site setup and ready to start receiving visitors, join the Jomres.net syndicate and get your properties listed on other Jomres sites.");



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1',"You need at least one room of one of the following types before you can create a tariff :");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2',"Go to Settings > Rooms and create a room first, once  you have done that you will be able to create a tariff for that room type.");

jr_define('JOMRES_PLATFORM',"Jomres Platform");


jr_define('JOMRES_PLATFORM_CONNECTED',"Connected");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC',"Set this to Yes if you have already connected your Stripe account with the Jomres Platform.");

jr_define('JOMRES_PLATFORM_ACCOUNT_ID',"Stripe Live Account number");
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC',"This is your Stripe Account id which can be found in your Stripe Dashboard under Settings > Account information and looks like acct_xxxxxxxxx You would use this field if you have multiple Jomres installations and you want to use the same account across all sites and you have already connected to us. If you have not connected to the Jomres Platform, it's not sufficient to enter your details here. Instead, please visit the Get Connected menu option in the toolbar, under the Help section. If you want to test payments, in the Debugging tab of Site Configuration set your site from Production to Development.");

jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY',"Stripe live secret key");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC','Go to Developers > API keys in your Stripe Dashboard to find your secret keys. These are used by the system to verify booking data returned from the payment form is valid and that deposits have been paid before saving the booking.' );

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY',"Stripe test secret key");
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC',' ' );



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Standard Tariff Mode');

jr_define('JOMRES_COM_A_ACCOMMODATES', 'Sleeps');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', 'How many people can this property accommodate?');
jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'The number of guests in your daily price');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Extra adults price ');

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Children');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Per person per night?');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 day modifier');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Discount on daily rate if booking is for 7 days or more. Leave this set to zero if you do not want the discount to be applied.');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 day modifier');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Discount on daily rate if booking is for 30 days or more. Leave this set to zero if you do not want the discount to be applied.');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Adults');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Price based on 2 adults');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Booking discounted from ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', ' to ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', ' because the booking is greater than 7 days.');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', ' because the booking is greater than 30 days.');


jr_define('JOMRES_CITY_TAX_HEADING', 'City taxes');
jr_define('JOMRES_CITY_TAX_VALUE', 'City tax value');
jr_define('JOMRES_CITY_TAX_METHOD', 'Tax calculation method');

jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', 'Single fee');
jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Per night');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Per guest');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Per guest per night');
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Percentage of booking value');

jr_define('JOMRES_CLEANING_FEE_HEADING', 'Cleaning fee');
jr_define('JOMRES_CLEANING_FEE_VALUE', 'Cleaning fee cost');


jr_define('JOMRES_COMPATABILITY_MODE', 'Force Compatability property configuration mode?');
jr_define('JOMRES_COMPATABILITY_MODE_DESC', "Compatability property configuration mode forces several things to happen. In older versions of Jomres, property managers could choose which tariff editing mode to use, and a variety of other settings (some of which may appear confusing) may have been available to them. Enabling Compatability configuration forces all new properties to use just the Standard tariff editing mode, which models the booking.com property configuration functionality with respect to pricing, child pricing etc. It is recommended that for installations that were created after 9.22.0, this option should be set to Yes, but for older installations it's up to you to decide if new properties should be automatically set to Compatability mode when they are created.");

jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', 'Do you accept children under 18 years of age?');
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Set this option to Yes if you allow children. If yes, then in the Settings menu you will have an option called Child Policies where you can edit children related settings.");

jr_define('JOMRES_POLICIES_CHILDREN', 'Child policies');

jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'At what ages are children allowed?');


jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Per child, per night');
jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Per child, per stay');

jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Child rates');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'New child rate');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Edit child rate');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Create your free or paid child rates here. Rates will only apply when you have created occupancy levels for room types.');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Age from');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Age to');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'per night or per stay?');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Rate');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'If zero or not set, children of this age range will be free.');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Ages at checkin');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Ages ');

jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Occupancy levels');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Maximum adults');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maximum children');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Maximum occupancy');

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Edit occupancy level for : ');
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Edit occupancy levels for this room type. Do not include guests sleeping on cots (those are added by creating an Extra) ');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'For each additional adult, how much should they be charged?');

jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Extra adults');


jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', 'You have not configured child rates yet.');
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Set child rate(s) now');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'You have configured your property to allow children but you have not set any occupancy levels for children yet.');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Set occupancy levels');
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', 'Any time you edit a room or your property type you should check and update the occupancy levels for your property/rooms as these affect the number of guests who can be accepted in the booking form.');


jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'Adults');
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', 'Chidren');


jr_define('_JOMRES_CONFIG_LEVEL_TITLE', 'Admin options level');
jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres has many menu and configuration options that you can use when configuring your site. The huge majority of them you will never need to change so they are hidden by default. You can choose to show those options by setting the Admin Options level.  Basic level shows you just what you need when setting up a site for the first time. Common level shows you those options which are most commonly changed, and Everything shows you all possible settings and menus options in the administrator area.');
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'Basic');
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'Common');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Everything');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Can we collect information about how you use Jomres?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'We would like to collect information about how you use Jomres. No personally identifyable information will be stored, usage will be anonymised and only used to help us to understand how people use Jomres.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', ' Yep, that\'s ok ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', ' No, I don\'t agree ');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Will you be taking bookings for more than one property?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres can be used for single or multi-property sites. If you will be taking bookings for just one property then many options will be redundant and potentially confusing. You can change this setting later in the Settings > Site Configuration > Portal functionality tab.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', ' Just one property ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', ' I will be listing more than one property ');


jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Which version of the Bootstrap framework does your template/theme support?");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Each version of the Bootstrap framework requires slightly different html markup. Jomres has three sets of Bootstrap compatible template sets, one for each Bootstrap version. You must ensure that you configure it to use the appropriate template set. If you don't then output such as layout, modals and menus will not work properly. If you decide to use a template/theme later with a different Bootstrap version you can change the Bootstrap template set that Jomres should use in Admin > Jomres > Settings > Misc tab. <br/><br/>Joomla 3 is distributed with Bootstrap 2 by default, Joomla 4 will use Bootstrap 5. Jomres Leohtian template (Joomla) and theme (Wordpress) uses Bootstrap 3. Different templates/themes may be distributed with their own Bootstrap files so if you are in any doubt, please contact your template/theme's developer.");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", " Bootstrap 2 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", " Bootstrap 3 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", " Bootstrap 4 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", " Bootstrap 5 ");
jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Strip decimals from output prices?');

jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Apply group by fix?');
jr_define('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Some mysql installations may have a problem with Jomres Queries in the List Properties, List guests and List invoices page. If those pages say that they are showing X of Y results but nothing appears in the list, then setting this option to Yes may fix the issue. It will not if you are on shared hosting and the hosting service does not allow your mysql user to issue the "SET GLOBAL sql_mode=" command. ');
jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'This is a channel property, it cannot be administered locally, visit the channel management framework page to find the property\'s remote administration link');
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", " No Bootstrap in theme ");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Social media links');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Put your social media account names here, for example "jomres", not the entire url');


jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Comma seperated list of languages your organisation speaks');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'Url to your organisation logo');


jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES',"Property type images");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE',"Need help booking?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB',"Call our customer services team on the number below to speak to one of our representatives who will help you with all of your holiday needs.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE',"Why book with us?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE',"We offer the best booking rates");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1',"We have the best priced properties currently on the market.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2',"No booking fees. Save money!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE',"Great selection of properties");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS'," properties");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS'," guest reviews");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE',"We’re Always Here");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT',"Call or email us, anytime");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT',"Get 24-hour support before, during, and after your trip");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA',"Social media");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD',"Find us on social media");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1',	"Outstanding");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2',	"Exceptional");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3',	"Fabulous");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4',	"Superb");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5',	"Fantastic");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD',	"Very good");
	jr_define('JOMRES_REVIEW_SCORE_GOOD',	"Good");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "New listing");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Discounted");


	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Where do you want to go?');
	jr_define( 'DATA_SOURCES_TITLE', "Refresh data sources" );
	jr_define( 'DATA_SOURCES_TITLE_INFO', "Data sources refreshed. Data sources are used by autocomplete input fields in the search widget and they are usually updated automatically, however this page forces the data to be updated manually if required." );


	jr_define('_OAUTH_TOKEN_REQUEST_URI', "To send a token request, send the request to this url");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "The main view property script");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "The property uid of the property to be viewed");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "The default template is property_details.html, with this argument you can define a different property details template to show.");

	jr_define('JOMRES_UPDATES_TITLE', 'Jomres Updates');
	jr_define('JOMRES_UPDATES_INFO', "This page can download and install the most recent version of Jomres for you. It uses it's own functionality and not that of the host CMS therefore if a problem occurs during the host CMS's update you can use this page to force a reinstallation of the most recent version of Jomres.");



