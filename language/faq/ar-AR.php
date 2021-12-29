<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_FAQ', 'الأسئلة المتداولة');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'الخصائص') ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'كيف أقوم بإنشاء عقار؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'انقر فوق خصائص> خاصية جديدة لإضافة خاصية جديدة.') ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'كيف يمكنني رؤية شكل مكان الإقامة الخاص بي للضيوف؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW' , 'انقر فوق خصائص> معاينة لترى كيف تبدو الممتلكات الخاصة بك للضيوف.') ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'كيف أضيف غرفًا؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP' , "تعتمد كيفية إضافة الغرف على وضع تعديل التعريفة الخاص بك. في وضع تحرير التعريفة العادي , لن تحتاج إلى إضافة غرف , حيث تتم إضافتها تلقائيًا عند تهيئة الأسعار. إذا كنت تستخدم الإدارة الجزئية أو وضع تحرير التعريفة المتقدم , ثم في الإعدادات> الغرف , يمكنك إضافة وتعديل وحذف الغرف. ستتمكن أيضًا من إنشاء ميزات الغرفة , وتعيين هذه الميزات لتلك الغرف. بالإضافة إلى ذلك , ستتمكن من تحميل الصور للأفراد الغرف باستخدام Media Center. عند إنشاء غرف , يجب أن تحاول التأكد من أنها تعكس غرف العالم الواقعي في ملكيتك لأن ذلك سيسهل إدارتها. ") ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'كيف يمكنني تحديد أسعار الغرف؟') ;
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES' , "هذا يعتمد على وضع تحرير التعريفة الخاص بك. إذا كنت تستخدم وضع تحرير التعرفة العادية (تكوين الخاصية> علامة التبويب أوضاع تعديل التعريفة) , فيمكنك تكوين عدد الغرف لديك والسعر وعدد الأشخاص الذين يمكن لكل غرفة استيعابهم وإجمالي عدد الأشخاص الذين تريدهم في كل حجز. يتيح لك هذا الوضع تحديد أسعار الغرف للأعوام العشرة القادمة. <br/> إذا كنت تستخدم وضعي تحرير التعريفة المتقدمة أو Micromanage , فأنت قادر على تحديد أسعار الغرف لكل يوم لسنوات قادمة.يمكنك أيضًا الحصول على تعريفات متعددة لنفس نوع الغرفة , على سبيل المثال يمكنك الحصول على تعريفة واحدة للمبيت والإفطار وأخرى للسرير والفطور ووجبة المساء. ما لم يكن لديك حاجة معينة , نوصيك باستخدام الإدارة الدقيقة طوال الوقت , سيعمل Advanced بنفس الطريقة ولكن يجب أن تكون حريصًا للتأكد من أن تواريخ بدء وانتهاء التعريفة المختلفة الخاصة بك متتالية. ") ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'كيف يمكنني إنشاء إضافات اختيارية؟') ;
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS' , 'يمكن إضافة الإضافات إلى الحجوزات وتهيئتها في الإعدادات> الإضافات. يمكن أن تكون اختيارية أو" إجبارية ", بمعنى آخر لا يمكن للضيف إلغاء اختيارها في الحجز. يمكنك تقديم طرق مختلفة في فرض رسوم على الإضافات الاختيارية , وما إذا كانت معروضة في صفحة تفاصيل مكان الإقامة الخاص بك أم لا. ولأن الإضافات يمكن أن تُظهر فقط إذا كان الحجز ضمن تواريخ معينة (على سبيل المثال , للفواكه الموسمية) , يجب عليك التأكد من قمت بتعيين تاريخ صالح من و إلى. بمجرد إنشاء الإضافات الاختيارية , يمكنك تحميل الصور لهم من خلال Media Manager. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', "كيف يمكنني تلقي المدفوعات عبر الإنترنت؟") ;
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS' , "لتلقي الدفعات عبر الإنترنت , يجب أن يكون لديك حساب لدى موفر الدفع عبر الإنترنت , يُسمى Gateway. للاطلاع على البوابات المتاحة , انتقل إلى تكوين الخاصية> علامة التبويب Gateways. انقر فوق اسم البوابة ليتم أخذها إلى صفحة التكوين الخاصة بها. ") ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'هل يمكنني تقديم خصومات؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS' , "يمكن تقديم الخصومات , وهناك عدد من الطرق المختلفة للقيام بذلك. إذا كنت تجري حجزًا نيابةً عن أحد العملاء , فيمكنك حينئذٍ تعيين إجماليات الإيداع والحجز الخاصة بك في نموذج الحجز , باستخدام حقلي Override Accommodation Total و Override Deposit (لا يمكن للضيوف استخدام هذه الميزة). هناك طريقة أخرى لمنح ضيف خصم وهي إنشاء كوبونات خصم , والتي يمكن تهيئتها بحيث يمكن استخدامها فقط بين تواريخ معينة (صالحة من / إلى) أو يتم تطبيقها فقط عندما يقع الحجز بين تواريخ معينة (الحجز صالح من / إلى). يمكن تخصيص قسائم الخصم هذه لضيف واحد فقط , أو إذا كنت تريد يمكنك طباعة القسائم. تتضمن النسخة المطبوعة رمز الاستجابة السريعة الذي يمكن للضيوف مسحه ضوئيًا في هواتفهم ونقلهم إلى نموذج الحجز الخاص بك مع تطبيق رمز الخصم بالفعل. ") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bookings') ;

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'عند النقر فوق حجز جديد , يتم نقلي إلى نموذج الاتصال , لماذا؟') ;
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE' , "قبل أن تتمكن من إجراء الحجوزات عبر الإنترنت , يجب عليك أولاً تهيئة بعض الأسعار (التعريفات) لكل نوع غرفة لديك في ملكيتك الحقيقية. بمجرد إنشاء بعض التعريفات , ستتمكن من إجراء الحجوزات . ") ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'ما هي الحجوزات السوداء؟') ;
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK' , 'الحجوزات السوداء هي الحجوزات التي تم إنشاؤها لإخراج غرفة أو غرف خارج الخدمة. وهي غير مرتبطة بأي ضيوف وهي مفيدة , على سبيل المثال , إذا كانت الغرفة بحاجة إلى التجديد.') ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Images') ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'كيف يمكنني تحميل الصور؟') ;
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO' , 'لتحميل الصور , تحتاج إلى زيارة صفحة الإعدادات> مركز الوسائط. سترى في هذه الصفحة عدة أجزاء. في الجزء العلوي , قد ترى بعض الملاحظات , وسترى أسفلها قائمة منسدلة. تتيح لك هذه القائمة المنسدلة تحديد المورد الذي تقوم بتحميل الصور إليه. <br/> يوجد عمود على اليمين مع إضافة صور ومسح القائمة وتحميل الكل. انقر فوق "إضافة صور" وحدد بعض الصور من سطح المكتب أو الجهاز المحمول. متى لقد فعلت ذلك , سيتغير العمود إلى قائمة من الصور المصغرة. من هنا يمكنك تحميل صورة واحدة أو أكثر لمواردك. ') ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', 'ما هي الصورة" الرئيسية "؟') ;
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN' , "الصورة الرئيسية هي تلك التي تظهر في نتائج البحث وفي رأس الممتلكات الخاصة بك (المنطقة أعلى الصفحات التي تعرض شيئًا عن ملكيتك). يجب عليك اختيار صورة تعرض ملكيتك في أفضل ضوء ممكن. لتحميل صورة رئيسية , تأكد من تحديد الخاصية الرئيسية للصورة في القائمة المنسدلة أعلى اليسار , ثم قم بتحميل صورة واحدة أو أكثر. إذا قمت بتحميل أكثر من صورة واحدة , فسيتم استخدام جميع الصور في البحث تظهر صفحة النتائج على شكل عرض شرائح صغير. ") ;
jr_define ("_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES" , "ما هي رموز ميزات الغرفة؟") ;
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES' , "يمكن إنشاء ميزات الغرفة بواسطة مستخدمي الإدارة الدقيقة أو أوضاع تحرير التعريفة المتقدمة. يمكن ربطها بغرفة واحدة أو أكثر , ويتم عرضها في نموذج الحجز. بمجرد إنشاء ميزة غرفة , يمكنك قم بتحميل صورة لهذه الميزة عن طريق تحديد أيقونات ميزات الغرفة أولاً في القائمة المنسدلة في Media Center , ثم تحديد اسم ميزة الغرفة من القائمة المنسدلة التي ستظهر أسفل. ") ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', "كيف يمكنني تحميل صور الغرفة؟");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS' , "يمكن إنشاء الغرف بواسطة مستخدمي أوضاع الإدارة الدقيقة أو تعديل التعرفة المتقدمة. بمجرد إنشاء غرفة واحدة أو أكثر , يمكنك تحميل صور متعددة لكل غرفة من خلال Media Center (حدد اسم / رقم الغرفة بعد تحديد صور الغرفة في القائمة المنسدلة). يمكن رؤية هذه الصور في عرض شرائح من خلال عرض صفحة المعاينة واختيار علامة التبويب غرفنا ثم النقر على رابط التوفر. ") ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'كيف يمكنني تحميل صور عرض الشرائح؟') ;
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW' , "تظهر صور عرض الشرائح في صفحة تفاصيل الخاصية (معاينة) , بجوار زر الحجز الآن.") ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'كيف يمكنني تحميل الصور الإضافية؟') ;
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS' , 'على غرار الغرف وميزات الغرف , تحتاج إلى إنشاء عنصر إضافي أولاً. وبمجرد الانتهاء من ذلك , يمكنك تحديد" الإضافات "في القائمة المنسدلة العلوية. عند الانتهاء من ذلك , تحتاج إلى تحديد اسم إضافي من القائمة المنسدلة أدناه. عند تحديد الاسم , يمكنك تحميل صورة واحدة أو أكثر لتلك الإضافية. ') ;
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'شيء متعلق بالضيف') ;
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'How do I blahblahblah؟') ;
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'You blahblahblah') ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'كيف يمكنني حفظ الأوصاف بلغات متعددة؟');

jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES' , "لحفظ الأوصاف بلغات متعددة , قم أولاً بزيارة صفحة الإعدادات> تفاصيل الخاصية. احفظ وصف مكان الإقامة الخاص بك هناك. بعد ذلك , قم بتغيير اللغة التي تشاهد الموقع بها. انتقل الآن إلى الإعدادات صفحة تفاصيل الخاصية مرة أخرى , وحفظ التفاصيل مرة أخرى. لذلك , إذا كان الموقع قادرًا على عرض اللغتين الإنجليزية والإسبانية (أو أي لغة أخرى) , فيمكنك تحديد اللغة الإنجليزية , وإدخال الوصف باللغة الإنجليزية ثم النقر فوق حفظ. بعد ذلك , قم بتغيير اللغة إلى الإسبانية , ثم احفظ الوصف الأسباني الجديد. يعمل هذا مع جميع المدخلات في تلك الصفحة. ") ;
jr_define ("_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES" , "هل يمكنني تعديل الخصائص الأخرى على هذا الموقع؟") ;
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES' , 'لا , لا يمكنك ذلك. يمكنك فقط إدارة الخصائص التي قمت بإنشائها أو التي تم تعيينها لها كمدير عقارات.') ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'هل يمكنني تعديل الخصائص الأخرى على هذا الموقع؟') ;
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "نعم يمكنك ذلك , أنت مدير عقارات ممتاز ويمكنك تعديل أي خصائص تظهر في صفحة خصائص القائمة.") ;
jr_define ("_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES" , "ما هي أنواع الضيوف / كيف يمكنني تغيير الشخص الواحد في الليلة؟") ;
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES' , 'في الإعدادات> تكوين الخاصية> علامة التبويب التعريفات والعملات , يمكنك تحديد ما إذا كنت تريد فرض رسوم على كل شخص في الليلة. إذا كنت تقوم بالدفع لكل شخص في الليلة , فستحتاج إلى إنشاء نوع واحد أو أكثر من الضيوف. يمكنك إنشاء نوع ضيف بسيط , حيث تقدم لهم وصفًا فقط (مثل الأشخاص) , أو يمكنك إنشاء عدة أنواع مختلفة من الضيوف , على سبيل المثال "الكبار" و "الأطفال دون سن العاشرة". بالنسبة للأطفال , إذا كنت ترغب في العرض خصم بنسبة 50٪ , ثم تقوم بتعيين "النسبة المئوية" إلى "نعم" , وقيمة التباين على 50. تحتوي الغرف على أسعار أساسية , ويسمح لك هذا الإعداد بتعديل سعر الغرفة بناءً على نوع الضيف. ') ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'ما هي ميزات الغرفة؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES' , 'ميزات الغرفة هي الأشياء التي تجعل الغرفة مميزة. يمكن أن تكون شيئًا بسيطًا مثل مرافق صنع الشاي والقهوة , أو يمكن أن تكون أشياء تجعل الغرفة بالفعل أعلى من الآخرين , مثل" مناظر فوق bay . بمجرد إنشاء ميزة الغرفة , يمكنك تحميل الصور لهذه الميزة في Media Center. يمكن عرض ميزات الغرفة هذه على صفحة توفر الغرفة , وإذا قمت بتكوين مكان الإقامة الخاص بك لإظهار نمط قائمة الغرف الكلاسيكية (حيث يمكن للضيوف اختيار الغرفة التي يريدون حجزها بالضبط) ثم يمكنهم استخدام ميزات الغرفة لتصفية الغرف المعروضة في نموذج الحجز. ') ;

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Payments') ;
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY' , "لا يمكنك رؤية بوابة الدفع بعد إجراء الحجز.") ;
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY' , "إذا قمت بتسجيل الدخول بصفتك مدير عقارات , فلن ترى بوابة الدفع , لأنك لا تدفع لنفسك. فقط المستخدمون غير الإداريين سيرون البوابة عند إجراء الحجوزات.") ;