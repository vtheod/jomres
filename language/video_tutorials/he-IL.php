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


jr_define ('VIDEO_TUTORALS_TITLE', 'הדרכות וידאו');

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'לוח הבקרה');
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC', 'מדריך זה מראה לך כיצד להשתמש בלוח הבקרה של ניהול נכסים.');

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'ציר זמן');
jr_define ('_JOMRES_TUTORIAL_TIMELINE_DESC', 'כיצד להשתמש בלוח השנה של ציר הזמן. בסרטון זה אנו יוצרים אורח חדש על ידי הזנת הפרטים שלו בחלון המוקפץ, ניתן להשתמש מחדש באורחים קיימים על ידי בחירת שמם מהתפריט הנפתח בחלון המוקפץ.') ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'List List');
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'כיצד להשתמש בדף מאפייני רשימה כדי להציג מידע נוסף, לשנות עמודות ולחפש נכסים ספציפיים.');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'ערוך את פרטי הנכס שלך');
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'עריכת פרטי הנכס שלך, כולל גרירה על המפה כדי להגדיר את המיקום שלך.');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'שנה מצב עריכת תעריפים');
jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'מצב עריכת התעריפים שלך קובע את השיטה שבה תוכל להגדיר מחירים לנכס שלך. אתה עושה זאת דרך דף תצורת הנכסים.');


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'מצב עריכת תעריפים רגיל למלונות, פנסיונים, צימרים');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'מצב עריכת תעריפים רגיל הוא תכונת עריכת תעריפים פשוטה המאפשרת לך לבחור את מספר החדרים בנכס, מחיר החדר, מספר האורחים שכל חדר יכול להכיל ומספר האורחים המרבי. במסיבה. כששומרים מחירים אלה תקפים לאחר מכן ל -10 השנים הבאות. ');

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'עריכת תעריפים רגילה לווילות ודירות');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'מצב עריכת תעריפים רגיל הוא תכונת עריכת תעריפים פשוטה המאפשרת לך לבחור את סוג המשנה של הנכס, את מחיר הנכס ללילה ואת מספר האורחים המרבי במסיבה. כאשר נשמרים מחירים אלה הם אז תקף ל -10 השנים הבאות. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'מצב עריכת תעריפים של מיקרו (מומלץ)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'מצב עריכת תעריפים של Micromanage מאפשר לך להגדיר הן את המחיר והן את מספר הימים המינימלי שניתן להישאר תקף עבור כל יום בשנה. זהו כלי רב עוצמה שנותן לך שליטה מלאה מעל התמחור. בדוגמה זו נראה לך כיצד ליצור ערכות מחירים מרובות לאותו סוג חדר, להגדיר מחירים שונים לתקופות שונות ומחירים שונים לימים ספציפיים בשבוע בתוך תקופה. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'מצב עריכת תעריפים של מיקרו עבור וילות/דירות (מומלץ)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'מצב עריכת תעריפים של Micromanage מאפשר לך להגדיר הן את המחיר והן את מספר הימים המינימלי שניתן להישאר תקף עבור כל יום בשנה. זהו כלי רב עוצמה שנותן לך שליטה מלאה מעל התמחור. בדוגמה זו נראה לך כיצד ליצור ערכות מחירים מרובות. נקבע מחירים שונים לתקופות שונות ומחירים שונים לימים ספציפיים בשבוע בתוך תקופה. לאחר שתעשה זאת ניצור תעריפים מרובים עבור אותו מחיר נכס, אך עם מספרי אורחים שונים המאפשרים לנו לשלוט במדויק במחירים לכל תרחיש. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'תעריפים שונים למספרי אורחים שונים');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'תוכל ליצור תעריפים מרובים עבור אותו סוג חדר, כך שאם אתה רוצה מחירים שונים עבור מספר אורחים שונה, תוכל לעשות זאת.');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'לאדם ללילה - סוגי אורחים');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'כדי לגבות תשלום לאדם ללילה יהיה עליך ליצור סוגי אורחים. סוגים שונים של אורחים יכולים להיות שונים מהמחיר הבסיסי של חדר, כך שילדים בגילאים שונים יכולים לקבל הנחות משתנות בהתאם לגילם. אתה. לא צריך לגבות לאדם ללילה כדי להשתמש בסוגי אורחים, אתה יכול להשתמש בהם גם אם אתה גובה תעריף אחיד אך עדיין רוצה ללכוד את מספר האורחים, או כי אתה רוצה להגביל את מספר האורחים בהזמנה. ' );

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'מרכז מדיה - העלאת תמונות');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'כל התמונות מועלות דרך מרכז המדיה. בסרטון זה נעלה את תמונת הנכס הראשי, כמה תמונות של מצגת שקופיות, מבחר קטן של תמונות שיוצגו בדף תוצאות החיפוש ותמונות לאחת מהן החדרים.');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'מרכז מדיה - העלאת תמונות');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'כל התמונות מועלות דרך מרכז המדיה. בסרטון זה נעלה את תמונת הנכס הראשי, מבחר קטן של תמונות שיוצגו בדף תוצאות החיפוש, וכמה תמונות של מצגת שקופיות.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'לוח הבקרה של מנהל המערכת');
jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'זהו דף הנחיתה המוגדר כברירת מחדל שלך באזור מנהל המערכת. תוכל לראות סיכום של סטטיסטיקות אתרים שונות ולראות אילו נכסים קיימים במערכת, אשר הושלמו ואשר הושלמו ומחכים לבדיקה לפני אישור. . לאחר אישור נכס, ניתן יהיה לפרסם אותו על ידי מנהל הנכס. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'מנהל תוספים, התקנה ושימוש');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'סרטון זה מראה לך כיצד להשתמש במנהל התוספים, כולל התקנת מנהל התוספים ולאחר מכן התקנה והתקנה של תוסף. אם אין לך מפתח רישיון תתבקש לשמור באתר. תצורה לפני שתוכל להתקין את המנהל. אם לא השתמשת במנהל התוספים לפני כן הרשימה הזו תחילה תהיה ריקה, בדוגמה זו כבר מותקנים לי מגוון תוספים. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'מנהלי נכסים');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'מנהלי נכסים מתווספים באחת משתי דרכים. או שהם יוצרים נכסים בעצמם (ניתנים להשבתה בתצורת האתר) או שמנהל האתר יכול להקצות מנהל קיים לנכסים מסוימים. מנהלים יכולים לגשת רק לנכסים שיש להם. נוצר, או שהוקצו לו. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Control Access');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', "תוכל להשתמש בתכונה' בקרת גישה 'כדי להשבית את אפשרויות התפריט, להפוך אותן לגלויות רק לקבוצות משתמשים מסוימות או אפילו לגרום להן להיעלם כליל. אם בשורת התפריטים אין אפשרויות תפריט להראות אז זה יכול להופיע ייעלם לחלוטין, כך שאם אינך רוצה שמבקרי האתר יראו אפשרויות כלשהן, תוכל פשוט להגדיר את כל האפשרויות כך שיהיו גלויות למשתמשים מחוברים, למשל. ");

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'סוגי נכסים וחדרים');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'בסרטון זה תראה שני מושגים חשובים. הראשון הוא יצירת סוגי נכסים וסוגי חדרים משויכים. תוכל לראות גם משתמש רשום שעדיין אינו מנהל ליצור נכס משלו ולהיות נכס משלו. מנהל (אך רק יכול להגדיר את הנכס שיצרו). סוגי נכסים וחדרים מקושרים, לאחר שתיצור סוג נכס, עליך להוסיף סוג חדר אחרת מנהלי הנכסים יראו הודעות שגיאה אדומות בעת ניסיון להגדיר את הנכסים שלהם. ');



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'העלאת סמני מפות');
jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'אתה משתמש במרכז המדיה כדי להעלות סמני מפות. <a href="https://mapicons.mapsmarker.com/" target="_blank"> ניתן למצוא כאן מקור רב של סמנים. << /a> נוהל העלאת תכונות הנכס, תכונות החדרים, סוגי החדרים ואחרים זהה. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'תכונות נכס');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'בסרטון זה נראה לך כיצד ליצור תכונות נכס ולהעלות תמונות עבורם.');

jr_define ('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes');
jr_define ('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'קודים קצרים הם תכונה עוצמתית במיוחד של Jomres. העיקרון זהה הן לג\'ומלה והן ל- Wordpress. בסרטון זה נראה לכם היכן ניתן לצפות בקודים הקצרים (רשימה זו תשתנה בהתאם לאילו תוספים) מותקן) וכיצד להשתמש בהם. ניתן להשתמש בקודים במאמרים או במודולים. ');
    
jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'קובצי יומן');
jr_define ('_JOMRES_TUTORIAL_LOGFILES_DESC', 'סרטון זה יראה לך כיצד להציג קבצי יומן. רישום מקיף מתרחש כאשר המערכת מופעלת. במצב ייצור (אתר תצורת> ניפוי באגים) פחות יומנים נוצרים אז אם אתה בודק תכונה חדשה אז עליך להגדיר את האתר שלך לפיתוח. אם ברצונך להוסיף רישום משלך לסקריפטים של Jomres, עיין ב <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank">הדף הידני שלנו כיצד לעשות זאת. </a> כאן נזרוק שגיאה מזויפת, ואז נצפה בקובץ היומן. מכיוון שהאתר מוגדר שם לפיתוח שם הוא הרבה מידע, בדרך כלל היית רואה הודעה שאומרת שיש שגיאה והיא דווחה. ');

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'תרגום תוויות ומחרוזות אחרות');
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'ישנן מספר דרכים לתרגם מחרוזות שפה ב- Jomres, תוכל לערוך קבצי שפה אך הם עשויים להיחלף בעת השדרוג. במקום זאת אנו ממליצים לך להשתמש בכלי התרגום המובנים הייחודיים שלנו תוכנה. אם המחרוזת היא משהו שהוזן לטופס, כגון שם סוג חדר, תוכל להשתמש בדף עריכת תוויות. אם המחרוזת היא מקובץ השפה, תוכל להשתמש בכלי עריכת קבצי השפה. פשוט השתמש בכלי החיפוש של הדפדפן כדי למצוא את המחרוזת שברצונך לשנות ולאחר מכן לחץ על הקישור כדי לשנות אותה. שינויים אלה נשמרים במסד הנתונים ולכן הם בטוחים לעדכון. תוכל לקבל תוויות שונות לסוגי נכסים שונים, כך שתוכל שנה נכס חדש לקמפינג חדש, לדוגמה, על -ידי שינוי התפריט הנפתח של הקשר שפה בראש הדף לפני שינוי התווית. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'הוספת נכסים');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> בשלב זה Jomres הותקן ב- CMS והוא נוסף לתפריט החזית (או ב- Wordpress יצרת דף והוספת לו את קוד ה- Jomres הבסיסי). </ p>
<p> כאן תוכלו לראות כיצד משתמש רשום שעדיין אינו מנהל נכסים ב- Jomres יכול ליצור נכס חדש, להגדיר כמה הגדרות בסיסיות ולפרסם אותו. </p>
<p> בסוף תראה שהמנהל הוגדר באופן אוטומטי כמנהל נכסים, אולם הם יכולים להגדיר את הנכסים שלהם בלבד. </p>
<p> למרות שהממשק ב- Wordpress נראה שונה התהליך זהה לחלוטין עבור Joomla או Wordpress. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'קטגוריות נכסים');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'קטגוריות נכסים היא תכונה פשוטה המאפשרת למנהלי נכסים להקצות את הנכסים שלהם לקטגוריה מסוימת. מנהלי אתרים יכולים ליצור קיצורי דרך שיכללו את כל הנכסים בקטגוריה, כפי שמוצג בסרטון זה.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'נכסי צפייה במנהל האתר');
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> אינך מנהל נכסים מכאן, תוכל לנהל נכסים רק מהחזית, אולם ברשימה זו תוכל לראות נכסים הממתינים לאישור (אם התכונה מופעלת) וכל הנמצאים לא שלם (למשל עדיין צריך להעלות תמונות, להגדיר מחירים וכו ). לחץ על שם הנכס שיועבר ללוח המחוונים של אותו נכס. לאחר מכן תוכל להשתמש בקטעי המדריך בראש הדף כדי לראות את השלבים עליך לקחת כדי להשלים ולפרסם נכס. </p> ');

