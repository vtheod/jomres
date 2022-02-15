<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_FAQ', 'Domande frequenti');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Proprietà');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Come creo una proprietà?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Clicca su Proprietà > Nuova Proprietà per aggiungere una nuova proprietà.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Come posso vedere come appare la mia struttura agli ospiti?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Clicca su Proprietà > Anteprima per vedere come appare la tua struttura agli ospiti.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Come faccio ad aggiungere stanze?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "La modalità di aggiunta delle camere dipende dalla modalità di modifica delle tariffe. Nella modalità di modifica delle tariffe Normale, non è necessario aggiungere camere, poiché vengono aggiunte automaticamente quando si configurano i prezzi. Se si utilizza Modalità di modifica delle tariffe Microgestione o Avanzata, quindi in Impostazioni> Camere puoi aggiungere, modificare ed eliminare camere. Sarai anche in grado di creare caratteristiche delle camere e assegnare queste funzionalità a quelle camere. Inoltre, sarai in grado di caricare immagini per singoli stanze utilizzando il Media Center. Quando crei stanze, dovresti cercare di assicurarti che riflettano le stanze del mondo reale nella tua proprietà in quanto ciò le renderà più facili da gestire.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Come posso impostare i prezzi delle camere?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Dipende dalla modalità di modifica della tariffa. Se stai utilizzando la modalità di modifica della tariffa normale ( Configurazione proprietà > scheda Modalità di modifica della tariffa) puoi configurare il numero di camere che hai, il prezzo, il numero di persone che ogni camera può ospitare e il numero totale di persone che desideri in ogni prenotazione. Questa modalità ti consente di impostare i prezzi delle camere per i prossimi 10 anni. <br/>Se stai utilizzando le modalità di modifica delle tariffe Avanzate o Microgestione, allora sei in grado di fissare i prezzi delle camere per tutti i giorni per gli anni a venire Puoi anche avere più tariffe per la stessa tipologia di camera, ad esempio puoi avere una tariffa per Bed&Breakfast e un'altra per Bed, Breakfast & Evening Dinner. , ti consigliamo di utilizzare sempre Micromanage, Advanced funzionerà allo stesso modo ma devi fare attenzione a garantire che le date di inizio e di fine della tua tariffa diversa siano consecutive.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Come posso creare extra opzionali?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Gli extra possono essere aggiunti alle prenotazioni e sono configurati in Impostazioni > Extra. Questi possono essere facoltativi o 'forzati', in altre parole l'ospite non può deselezionarli nella prenotazione. Puoi offrire diversi metodi di addebitare gli extra facoltativi e se sono mostrati o meno nella pagina dei dettagli della struttura.Poiché gli extra possono essere visualizzati solo se una prenotazione è entro determinate date (ad esempio, per la frutta di stagione), dovresti assicurarti di hanno impostato le date Valido da e A. Dopo aver creato gli exta facoltativi, è possibile caricare immagini per loro tramite Media Manager.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Come posso accettare pagamenti online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Per accettare pagamenti online, devi avere un account con un fornitore di servizi di pagamento online, chiamato Gateway. Per vedere i gateway disponibili, vai su Configurazione proprietà > scheda Gateway. Fai clic sul nome di un gateway da prendere alla sua pagina di configurazione.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Posso fare sconti?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "È possibile concedere sconti, esistono diversi modi per farlo. Se si effettua una prenotazione per conto di un cliente, è possibile impostare il proprio deposito e i totali della prenotazione nel modulo di prenotazione , utilizzando i campi Sostituisci totale alloggio e Sostituisci deposito ( gli ospiti non possono utilizzare questa funzione ) Un altro modo per offrire uno sconto a un ospite è creare buoni sconto, che possono essere configurati in modo che possano essere utilizzati solo tra determinate date dal/al ) o applicato solo quando la prenotazione cade entro determinate date ( Prenotazione valida dal/al ). Questi buoni sconto possono essere assegnati ad un solo ospite, oppure se vuoi puoi stampare i coupon. La stampa include un codice QR che gli ospiti possono scansionare nei loro telefoni che li portano al tuo modulo di prenotazione con il codice sconto già applicato. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Prenotazioni');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Quando clicco su Nuova prenotazione, vengo indirizzato al modulo di contatto, perché?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Prima di poter prendere le prenotazioni online, devi prima configurare alcuni prezzi (tariffe) per ogni tipo di camera che hai nella tua proprietà reale. Una volta create alcune tariffe, sarai in grado di accettare le prenotazioni .');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Cosa sono le prenotazioni nere?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Le prenotazioni nere sono prenotazioni che sono state create per mettere fuori servizio una o più stanze. Non sono associate ad alcun ospite e sono utili, ad esempio, se una stanza deve essere ristrutturata.") ;
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Immagini');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Come faccio a caricare le immagini?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Per caricare immagini, devi visitare la pagina Impostazioni > Media Center. In questa pagina vedrai diversi riquadri. In alto potresti vedere alcune note e sotto di esse vedrai un menu a discesa. Questo menu a discesa ti consente di selezionare la risorsa per la quale stai caricando le immagini. <br/> Sulla destra c'è una colonna con Aggiungi immagini, Cancella elenco e Carica tutto. Fai clic su Aggiungi immagini e seleziona alcune immagini dal tuo desktop o dispositivo mobile. Quando fatto ciò, la colonna cambierà in un elenco di miniature. Da qui puoi caricare una o più immagini per le tue risorse.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Qual è l'immagine 'Principale'?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', "L'immagine principale è quella che appare nei risultati di ricerca e nell'intestazione della tua proprietà (l'area nella parte superiore delle pagine che mostra qualcosa sulla tua proprietà). Dovresti scegliere un'immagine che mostri la tua proprietà nella migliore luce possibile. Per caricare un'immagine principale, assicurati che Property Main Image sia selezionato nell'elenco a discesa in alto a sinistra, quindi carica una o più immagini. Se carichi più di un'immagine, tutte le immagini verranno utilizzate nella ricerca pagina dei risultati visualizzata come una piccola presentazione.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Cosa sono le icone delle caratteristiche della stanza?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Le funzionalità della camera possono essere create dagli utenti delle modalità di modifica delle tariffe Micromanage o Avanzate. Queste possono essere collegate a una o più camere e vengono visualizzate nel modulo di prenotazione. Una volta creata una caratteristica della camera, è possibile carica un'immagine per quella funzione selezionando prima le icone delle caratteristiche della stanza nel menu a discesa nel Media Center, quindi selezionando il nome della funzione della stanza dal menu a discesa che apparirà sotto.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Come faccio a caricare le immagini delle stanze?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Le stanze possono essere create dagli utenti delle modalità di modifica tariffaria Micromanage o Avanzate. Una volta create una o più stanze, è possibile caricare più immagini per ogni stanza attraverso il Media Center (selezionare il nome/numero della stanza dopo selezionando Immagini delle camere nel menu a discesa). Queste immagini possono essere visualizzate in una presentazione visualizzando la pagina di anteprima e selezionando la scheda Le nostre camere, quindi facendo clic sul collegamento Disponibilità.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Come posso caricare le immagini della presentazione?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Le immagini della presentazione sono visibili nella pagina Dettagli Proprietà ( Anteprima ), vicino al pulsante Prenota ora.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Come posso caricare immagini extra?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Simile alle stanze e alle caratteristiche delle stanze, devi prima creare un Extra. Una volta fatto, puoi selezionare Extra nel menu a tendina in alto. Quando lo hai fatto, devi selezionare il nome di l'Extra dall'elenco a discesa sottostante. Quando il nome è selezionato puoi caricare una o più immagini per quell'Extra.");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Qualcosa relativo agli ospiti');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Come faccio a bla bla bla?');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Tu blablabla ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Come faccio a salvare le descrizioni in più lingue?');
    
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Per salvare le descrizioni in più lingue, visita prima la pagina Impostazioni > Dettagli proprietà. Salva lì la descrizione della tua proprietà. Successivamente, cambia la lingua in cui stai visualizzando il sito. Ora vai alle Impostazioni Di nuovo la pagina Dettagli proprietà e salva nuovamente i dettagli. Quindi, se il sito è in grado di mostrare sia l'inglese che lo spagnolo (o qualsiasi altra lingua), dovresti selezionare Inglese, inserire la descrizione in inglese, quindi fare clic su Salva. Quindi, cambia il tuo attuale lingua in spagnolo, quindi salva la nuova descrizione spagnola. Funziona per tutti gli input in quella pagina.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Posso modificare altre proprietà su questo sito?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'No, non puoi. Puoi solo amministrare le proprietà che hai creato o a cui sei stato assegnato come gestore di proprietà.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Posso modificare altre proprietà su questo sito?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Sì puoi, sei un Super Property Manager e puoi modificare qualsiasi proprietà mostrata nella pagina Proprietà Elenco.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Quali sono i tipi di ospite/Come posso cambiare per persona per notte?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "In Impostazioni > Configurazione proprietà > scheda Tariffe e valute, puoi decidere se vuoi addebitare per persona per notte. Se addebiti per persona per notte, dovrai creare uno o più tipi di ospite. Puoi creare un semplice tipo di ospite, dove devi solo dare loro una descrizione ( ad es. Persone ), oppure puoi creare diversi tipi di ospite, ad esempio 'Adulti' e 'Bambini sotto i 10'. Per i bambini, se vuoi offrire uno sconto del 50% quindi imposteresti 'È percentuale' su Sì e il valore Varianza su 50. Le camere hanno tariffe base, questa impostazione ti consente di regolare il prezzo della camera in base al tipo di ospite.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Cosa sono le caratteristiche della stanza?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Le caratteristiche della stanza sono cose che fanno risaltare la stanza. Possono essere qualcosa di semplice come tè e caffè, o possono essere cose che fanno davvero salire la stanza sopra le altre, come 'Vista sul bay'. Una volta creata una caratteristica della camera, è possibile caricare immagini per quella caratteristica nel Media Center. Queste caratteristiche della camera possono essere visualizzate nella pagina di disponibilità delle camere e se hai configurato la tua struttura per mostrare lo stile dell'elenco delle camere Classic (dove gli ospiti possono selezionare esattamente quale stanza desiderano prenotare) quindi possono utilizzare le caratteristiche della stanza per filtrare le oom mostrate nel modulo di prenotazione.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Pagamenti');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Non puoi vedere il gateway di pagamento dopo aver effettuato una prenotazione.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Se sei loggato come Property Manager, non vedrai il gateway di pagamento, perché non paghi te stesso. Solo gli utenti non manager vedranno il gateway quando effettuano le prenotazioni.");
    
