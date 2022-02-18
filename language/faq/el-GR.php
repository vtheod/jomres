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
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_FAQ', 'Συχνές ερωτήσεις');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Πώς δημιουργώ μια ιδιότητα;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Κάντε κλικ στις Ιδιότητες> Νέα ιδιότητα για να προσθέσετε μια νέα ιδιότητα.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Πώς μπορώ να δω πώς φαίνεται η ιδιοκτησία μου στους επισκέπτες;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Κάντε κλικ στις Ιδιότητες> Προεπισκόπηση για να δείτε πώς φαίνεται η ιδιοκτησία σας στους επισκέπτες.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Πώς προσθέτω δωμάτια;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Ο τρόπος προσθήκης δωματίων εξαρτάται από τη λειτουργία επεξεργασίας τιμολογίου. Στη λειτουργία Κανονικής επεξεργασίας τιμολογίων, δεν χρειάζεται να προσθέσετε δωμάτια, καθώς προστίθενται αυτόματα όταν διαμορφώνετε τις τιμές σας. Εάν χρησιμοποιείτε Μικροδιαχείριση ή Λειτουργία επεξεργασίας τιμολογίων για προχωρημένους, στη συνέχεια στις Ρυθμίσεις> Δωμάτια μπορείτε να προσθέσετε, να επεξεργαστείτε και να διαγράψετε δωμάτια. Θα μπορείτε επίσης να δημιουργήσετε λειτουργίες δωματίου και να εκχωρήσετε αυτές τις λειτουργίες σε αυτά τα δωμάτια. Επιπλέον, θα μπορείτε να ανεβάζετε εικόνες για μεμονωμένα άτομα τα δωμάτια που χρησιμοποιούν το Media Center. Όταν δημιουργείτε δωμάτια, θα πρέπει να προσπαθήσετε να διασφαλίσετε ότι αντικατοπτρίζουν τα δωμάτια του πραγματικού σας κόστους στην ιδιοκτησία σας, καθώς αυτό θα διευκολύνει τη διαχείρισή τους. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Πώς μπορώ να ορίσω τις τιμές των δωματίων;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Αυτό εξαρτάται από τον τρόπο επεξεργασίας των τιμολογίων σας. Εάν χρησιμοποιείτε τη λειτουργία Κανονικής τιμολόγησης (Διαμόρφωση ιδιοκτησίας> καρτέλα Λειτουργίες επεξεργασίας τιμολογίων), τότε μπορείτε να διαμορφώσετε τον αριθμό των δωματίων που έχετε, την τιμή, τον αριθμό των άτομα που μπορεί να φιλοξενήσει κάθε δωμάτιο και ο συνολικός αριθμός ατόμων που θέλετε σε κάθε κράτηση. Αυτή η λειτουργία σάς επιτρέπει να ορίσετε τις τιμές των δωματίων για τα επόμενα 10 χρόνια. <br/> Εάν χρησιμοποιείτε τις λειτουργίες σύνταξης ή μικροδιαχείρισης τιμολογίων, τότε είστε μπορείτε να ορίσετε τιμές δωματίων για κάθε μέρα για τα επόμενα χρόνια. Μπορείτε επίσης να έχετε πολλαπλές χρεώσεις για τον ίδιο τύπο δωματίου, για παράδειγμα μπορείτε να έχετε μία τιμή για Bed & Breakfast και άλλη για Bed, Breakfast & Evening. Εκτός αν έχετε συγκεκριμένη ανάγκη , σας συνιστούμε να χρησιμοποιείτε συνεχώς το Micromanage, το Advanced θα λειτουργεί με τον ίδιο τρόπο, αλλά πρέπει να είστε προσεκτικοί για να διασφαλίσετε ότι οι διαφορετικές ημερομηνίες έναρξης και λήξης των διαφορετικών τιμολογίων σας είναι διαδοχικές. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Πώς δημιουργώ προαιρετικά πρόσθετα;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Πρόσθετα μπορούν να προστεθούν στις κρατήσεις και διαμορφωθούν στις Ρυθμίσεις> Πρόσθετα. Αυτά μπορεί να είναι είτε προαιρετικά είτε 'αναγκαστικά', με άλλα λόγια ο επισκέπτης δεν μπορεί να τα αποεπιλέξει στην κράτηση. Μπορείτε να προσφέρετε διαφορετικές μεθόδους της χρέωσης για προαιρετικά πρόσθετα και αν εμφανίζονται ή όχι στη σελίδα Λεπτομέρειες ακινήτου. Επειδή τα πρόσθετα μπορούν να εμφανίζονται μόνο εάν μια κράτηση είναι εντός συγκεκριμένων ημερομηνιών (για παράδειγμα, για φρούτα εποχής), θα πρέπει να βεβαιωθείτε ότι έχετε ορίσει το Valid from and To ημερομηνίες. Αφού δημιουργήσετε προαιρετικά πρόσθετα, μπορείτε να ανεβάσετε εικόνες για αυτές μέσω του Media Manager. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Πώς μπορώ να λαμβάνω πληρωμές μέσω διαδικτύου;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Για να πραγματοποιείτε πληρωμές στο διαδίκτυο, πρέπει να έχετε λογαριασμό σε έναν πάροχο διαδικτυακών πληρωμών, που ονομάζεται Gateway. Για να δείτε τις διαθέσιμες πύλες, μεταβείτε στην καρτέλα Ρύθμιση παραμέτρων ιδιοτήτων> Πύλες. Κάντε κλικ στο όνομα μιας πύλης στη σελίδα διαμόρφωσης. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Μπορώ να κάνω εκπτώσεις;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Εκπτώσεις μπορούν να γίνουν, υπάρχουν διάφοροι τρόποι για να γίνει αυτό. Εάν κάνετε κράτηση για λογαριασμό πελάτη, τότε μπορείτε να ορίσετε τα δικά σας σύνολα κατάθεσης και κράτησης στη φόρμα κράτησης , χρησιμοποιώντας τα πεδία Override Accommodation Total και Override Deposit (οι επισκέπτες δεν μπορούν να χρησιμοποιήσουν αυτήν τη δυνατότητα). Ένας άλλος τρόπος για να δώσετε έκπτωση σε έναν επισκέπτη είναι η δημιουργία κουπονιών έκπτωσης, τα οποία μπορούν να διαμορφωθούν έτσι ώστε να μπορούν να χρησιμοποιηθούν μόνο μεταξύ συγκεκριμένων ημερομηνιών (Ισχύει από/έως) ή εφαρμόζεται μόνο όταν η κράτηση είναι μεταξύ συγκεκριμένων ημερομηνιών (Η κράτηση ισχύει από/έως). Αυτά τα κουπόνια έκπτωσης μπορούν να ανατεθούν σε έναν μόνο επισκέπτη ή εάν θέλετε μπορείτε να εκτυπώσετε τα κουπόνια. Η εκτύπωση περιλαμβάνει έναν κωδικό QR τα οποία οι επισκέπτες μπορούν να σαρώσουν στα τηλέφωνά τους που τους μεταφέρει στη φόρμα κράτησης με τον κωδικό έκπτωσης που ισχύει ήδη. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Κρατήσεις');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Όταν κάνω κλικ στην επιλογή Νέα κράτηση, μεταφέρομαι στη φόρμα επικοινωνίας, γιατί;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Προτού μπορέσετε να κάνετε κρατήσεις online, πρέπει πρώτα να διαμορφώσετε ορισμένες τιμές (τιμολόγια) για κάθε τύπο δωματίου που έχετε στην πραγματική σας ιδιοκτησία. Μόλις δημιουργήσετε κάποια τιμολόγια, θα μπορείτε να κάνετε κρατήσεις . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Τι είναι οι Black Bookings;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Οι μαύρες κρατήσεις είναι κρατήσεις που έχουν δημιουργηθεί για να βγάλουν ένα δωμάτιο ή δωμάτια εκτός υπηρεσίας. Δεν σχετίζονται με κανέναν επισκέπτη και είναι χρήσιμα, για παράδειγμα, εάν ένα δωμάτιο χρειάζεται ανακαίνιση.") ;

jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Εικόνες');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Πώς ανεβάζω εικόνες;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Για να ανεβάσετε εικόνες, πρέπει να επισκεφθείτε τη σελίδα Ρυθμίσεις> Κέντρο πολυμέσων. Σε αυτήν τη σελίδα θα δείτε πολλά παράθυρα. Στο επάνω μέρος μπορεί να δείτε κάποιες σημειώσεις και κάτω από αυτές θα δείτε ένα αναπτυσσόμενο μενού. Αυτό το αναπτυσσόμενο μενού σάς επιτρέπει να επιλέξετε για ποιον πόρο ανεβάζετε εικόνες. <br/> Στα δεξιά υπάρχει μια στήλη με Προσθήκη εικόνων, Εκκαθάριση λίστας και Μεταφόρτωση όλων. Κάντε κλικ στην επιλογή Προσθήκη εικόνων και επιλέξτε μερικές εικόνες από την επιφάνεια εργασίας ή την κινητή συσκευή σας. Όταν το έχετε κάνει, η στήλη θα αλλάξει σε μια λίστα με μικρογραφίες. Από εδώ μπορείτε να ανεβάσετε μία ή περισσότερες εικόνες για τους πόρους σας. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Τι είναι η εικόνα Κύρια ");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Η κύρια εικόνα είναι αυτή που εμφανίζεται στα αποτελέσματα αναζήτησης και στην κεφαλίδα της ιδιοκτησίας σας (η περιοχή στο πάνω μέρος των σελίδων που εμφανίζει κάτι για την ιδιοκτησία σας). Θα πρέπει να επιλέξετε μια εικόνα που να εμφανίζει την ιδιοκτησία σας στο το καλύτερο δυνατό φως. Για να ανεβάσετε μια κύρια εικόνα, βεβαιωθείτε ότι η κύρια εικόνα ιδιοτήτων είναι επιλεγμένη στην αναπτυσσόμενη λίστα επάνω αριστερά και, στη συνέχεια, ανεβάστε μία ή περισσότερες εικόνες. Αν ανεβάσετε περισσότερες από μία εικόνες, τότε όλες οι εικόνες θα χρησιμοποιηθούν στην αναζήτηση σελίδα αποτελεσμάτων που εμφανίζεται ως μια μικρή παρουσίαση. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Τι είναι τα εικονίδια χαρακτηριστικών του δωματίου;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Τα χαρακτηριστικά των δωματίων μπορούν να δημιουργηθούν από χρήστες των τρόπων επεξεργασίας μικροδιαχείρισης ή προχωρημένων τιμολογίων. Αυτά μπορούν να συνδεθούν με ένα ή περισσότερα δωμάτια και να εμφανιστούν στη φόρμα κράτησης. Μόλις δημιουργήσετε μια λειτουργία δωματίου, μπορείτε ανεβάστε μια εικόνα για αυτήν τη λειτουργία επιλέγοντας πρώτα εικονίδια Χαρακτηριστικά δωματίου στο αναπτυσσόμενο μενού στο Κέντρο πολυμέσων και, στη συνέχεια, επιλέγοντας το όνομα της λειτουργίας δωματίου από το αναπτυσσόμενο μενού που θα εμφανιστεί από κάτω. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Πώς ανεβάζω εικόνες δωματίου;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Τα δωμάτια μπορούν να δημιουργηθούν από χρήστες των τρόπων επεξεργασίας μικροδιαχείρισης ή προχωρημένων τιμολογίων. Αφού δημιουργηθεί ένα ή περισσότερα δωμάτια, μπορείτε να ανεβάσετε πολλές εικόνες για κάθε δωμάτιο μέσω του Media Center (επιλέξτε το όνομα/τον αριθμό δωματίου μετά επιλέγοντας Εικόνες δωματίου στο αναπτυσσόμενο μενού). Αυτές οι εικόνες μπορούν να προβληθούν σε προβολή διαφανειών, προβάλλοντας τη σελίδα Προεπισκόπηση και επιλέγοντας την καρτέλα Τα δωμάτιά μας και κάνοντας κλικ στο σύνδεσμο Διαθεσιμότητα. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Πώς ανεβάζω εικόνες παρουσίασης;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Οι εικόνες παρουσίασης εμφανίζονται στη σελίδα Λεπτομέρειες ιδιοκτησίας (Προεπισκόπηση), δίπλα στο κουμπί Κράτηση τώρα.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Πώς μπορώ να ανεβάσω επιπλέον εικόνες;');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Παρόμοια με τα δωμάτια και τις δυνατότητες των δωματίων, πρέπει πρώτα να δημιουργήσετε ένα Extra. Μόλις ολοκληρωθεί, μπορείτε να επιλέξετε Extras στο επάνω αναπτυσσόμενο μενού. Όταν το κάνετε αυτό, πρέπει να επιλέξετε το όνομα του το πρόσθετο από την αναπτυσσόμενη λίστα παρακάτω. Όταν επιλεγεί το όνομα, μπορείτε να ανεβάσετε μία ή περισσότερες εικόνες για αυτό το πρόσθετο. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Κάτι που σχετίζεται με τους επισκέπτες');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Πώς μπορώ να κάνω blahblahblah;');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'You blahblahblah');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Πώς μπορώ να αποθηκεύσω περιγραφές σε πολλές γλώσσες;');

