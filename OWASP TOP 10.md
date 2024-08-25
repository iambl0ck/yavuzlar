# 1. Broken Access Control

Broken Access Control, uygulamalarınızdaki erişim kontrolü ayarlarının yanlış veya yetersiz olması nedeniyle yetkisiz kullanıcıların uygulamanız içindeki kaynaklara erişmesine olanak tanıyan bir güvenlik açığıdır. Bu güvenlik açığı, yetkisiz bir kullanıcının sisteme veya uygulamaya erişim hakkı olmasa bile bu kaynaklara erişmesine veya bunları değiştirmesine olanak tanıyabilir.

Broken Access Control açığından korunmak için alınması gereken önlemler:

· **Erişim kontrolleri düzgün yapılandırılmalıdır,**

· **Token-based authentication kullanılmalıdır,**

· **İşlemlerin logları tutulmalı**

# 2. Cryptographic Failures

Cryptographic Failures, depolanan verilerin uygunsuz şekilde şifrelendiği veya bozulduğu bir durumdur. Bu tür hatalar uygulamada kullanılan şifreleme algoritmasının yanlış seçilmesi veya uygulanması, anahtar kontrol hataları veya rastgele sayı üretimindeki yetersizlikler nedeniyle ortaya çıkabilir. Şifreleme hatası uygulama güvenliği açısından ciddi bir tehdittir çünkü kötü niyetli bir saldırganın bu güvenlik açıklarını kullanarak depolanan verilere erişmesi mümkündür.

Cryptographic Failures açığından korunmak için alınması gereken önlemler:

· **Doğru şifreleme algoritmaları kullanılmalıdır**

· **Anahtar yönetimi hatalarından kaçınılmalıdır**

· **Rastgele sayı üretimi doğru yapılmalıdır**

· **Kriptografik anahtarların düzenli olarak yenilenmesi gerekmektedir**

# 3. Injection

Injection, web uygulamalarında yaygın bir güvenlik açığıdır. Bu güvenlik açığı, uygulamalarda kullanılan veri girişleri genelinde veri girişlerinin uygunsuz şekilde kontrol edilmesi veya filtrelenmesi nedeniyle saldırganların veritabanı sorgularına, komutlarına veya uygulama tarafından yürütülen diğer işlevlere kötü amaçlı kod eklemesine olanak tanır. Saldırganlar bu güvenlik açığından yararlanarak veritabanından veya uygulama sunucularından yararlanarak kullanıcı bilgilerine veya diğer hassas verilere erişim sağlayabilir.

Injection açığından korunmak için alınması gereken önlemler:

· **Parametrelerin Doğrulanması**

· **SQL Parametreleştirme**

· **Kodlama Standartları**

· **WAF Kullanımı**

# 4. Insecure Design

Insecure Design (Güvensiz tasarım), bir web uygulamasının tasarımındaki hatalar veya eksiklikler nedeniyle ortaya çıkan bir güvenlik açığıdır. Bu, uygulama tasarımında yapılan hataların uygulamanın yaşam döngüsü boyunca devam edebileceği ve güvenliğini olumsuz yönde etkileyebileceği anlamına gelir. Uygulama, özellikle kimlik doğrulama, yetkilendirme, gizlilik ve veri bütünlüğü gibi önemli güvenlik konularında hatalar içerdiğinde güvenli olmayan bir tasarım ortaya çıkabilir.

Insecure Design açığından korunmak için alınması gereken önlemler:

· **Güvenli tasarım ilkeleri uygulanmalıdır**

· **Uygulama geliştirme ekibi, güvenlik odaklı bir yaklaşım benimsemelidir**

· **Güvenlik açıkları düzeltilmelidir**

· **Uygulama güvenliği için en iyi uygulamalar kullanılmalıdır**

# 5. Security Misconfiguration

Security Misconfiguration, bir uygulama veya sistemler yapılandırıldığında veya yanlış yapılandırıldığında ortaya çıkan bir güvenlik açığıdır. Bu güvenlik açığı, sistemi, uygulamayı veya sunucuları korumaya yönelik en iyi uygulamaların başarısızlığından veya eksik uygulanmasından kaynaklanabilir. Örneğin, yanlış yapılandırma nedeniyle bir web uygulaması sunucusunun güvenliği ihlal edilebilir. Bu durumda uygulama sunucusu için önerilen en iyi uygulamalar uygulanmadığı için saldırganlar uygulama sunucusuna erişim sağlayarak hassas verileri ele geçirebilir.

Security Misconfiguration açığından korunmak için alınması gereken önlemler:

· **En iyi uygulamaları takip etmek**

· **Yazılımın güvenlik düzeyini kontrol etmek**

· **Güvenlik yamalarını ve güncellemeleri takip etmek**

· **Sistem yapılandırmasını güncellemek**

# 6. Vulnerable and Outdated Components

Vulnerable and Outdated Components, bir uygulamada kullanılan üçüncü taraf bileşenlerin güncel olmaması veya bilinen güvenlik açıklarına sahip olması durumunda ortaya çıkan bir güvenlik açığıdır. Birçok modern uygulama, üçüncü taraf bileşenlerin kullanımını içerir. Bu bileşenler genellikle web uygulama çerçeveleri, veritabanı yönetim sistemleri, açık kaynak kitaplıkları, sunucu yazılımı ve diğer araçlar gibi yazılım bileşenleri olabilir. Bu bileşenlerde güvenlik açıkları keşfedilirse uygulama istismara açık hale gelebilir. 

Vulnerable and Outdated Components açığından korunmak için alınması gereken önlemler:

· **Bileşenleri izlemek**

· **Güncelleme politikaları oluşturmak**

· **Bileşenleri doğrulamak**

# 7. Identification and Authentication Failures

Identification and Authentication, bir kullanıcının kimliğinin doğrulanması veya yetkilendirilmesinde yaşanan sorunlar nedeniyle ortaya çıkan bir güvenlik açığıdır. Bu tür bir güvenlik açığı, bir saldırganın kullanıcının kimliğini çalmasına veya sahte kimlik kullanarak uygulamada oturum açmasına olanak tanıyabilir. Örneğin bir uygulama, kullanıcı adı ve parola kombinasyonu gibi temel kimlik doğrulama yöntemlerini kullanarak kimlik doğrulaması yapabilir. Ancak uygulamanın bu bilgileri doğru bir şekilde doğrulamaması durumunda saldırganların sahte kimlik bilgileri kullanarak sisteme giriş yapması mümkündür.

Identification and Authentication Failures açığından korunmak için alınması gereken önlemler:

· **Güçlü kimlik doğrulama yöntemleri kullanmak**

· **Kimlik doğrulama işlemlerini izlemek**

· **Kimlik bilgilerini şifrelemek**

· **Düzenli olarak kimlik doğrulama politikalarını kontrol etmek**

· **Çok faktörlü kimlik doğrulama yöntemlerini kullanmak**

# 8. Software and Data Integrity Failures

Software and Data Integrity Failures, bir yazılımın veya veri sisteminin beklenmeyen bir şekilde değiştirilmesi veya bozulması sonucu ortaya çıkan bir güvenlik açığıdır. Bu güvenlik açığı, bir saldırganın sistem yazılımını veya verilerini hedef alarak sistemi istismar etmesine veya sistemi manipüle etmesine olanak tanıyabilir. Veri ve yazılım bütünlüğü hataları, bir yazılım güncellemesi sırasında, bir saldırganın yazılımı değiştirmesi veya bir saldırganın veri depolama ortamına kötü amaçlı yazılım yerleştirmesi gibi birçok farklı şekilde ortaya çıkabilir. Bu tür saldırılar sonucunda saldırgan verileri çalabilir, bozabilir veya sistemin kontrolünü ele geçirmeye başlayabilir.

· **Yazılımın veya verilerin beklenen kaynaktan olduğunu ve değiştirilmediğini doğrulamak için dijital imzalar veya benzer mekanizmaların kullanımı**

· **Npm veya Maven gibi kitaplıkların ve bağımlılıkların güvenilir depoları kullandığından emin olmak**

· **Kod ve yapılandırma değişiklikleri için bir inceleme süreci oluşturmak**

· **Yazılım güncellemelerini düzenli olarak yüklemek**

· **Güçlü erişim kontrolü uygulamak**

· **Güvenli yazılım geliştirme yöntemlerini kullanmak**

· **Yazılım ve veri yedeklemeleri oluşturmak**

# 9. Security Logging and Monitoring Failures

Security Logging and Monitoring Failures, güvenlik olayını günlüğe kaydetme ve izleme özelliklerinin yetersiz veya yanlış yapılandırılması sonucu ortaya çıkan bir güvenlik açığıdır. Bu tür bir güvenlik açığı, kötü amaçlı etkinliklerin tespit edilememesi veya güvenlik olaylarına yanıt verilamaması ile sonuçlanabilir.

Security Logging and Monitoring Failures açığından korunmak için alınması gereken önlemler:

· **Güvenlik olaylarının izlenmesi ve kaydedilmesi için uygun araçlar kullanmak**

· **Günlük kayıtlarının düzenli olarak incelenmesi**

· **Uyarı ve alarm sistemleri kullanmak**

· **Güvenlik politikalarının ve prosedürlerinin düzenli olarak gözden geçirilmesi**

# 10. Server-Side Request Forgery

Server-Side Request Forgery, bir saldırganın hedef sunucudaki bir URL'ye istek göndererek sahte bir kaynak IP adresi ve etki alanı adı sağlayarak sunucunun iç ağına veya diğer harici kaynaklara erişmesine olanak tanıyan bir web güvenlik açığıdır. . Bir SSRF saldırısı, bir uygulamanın kimlik doğrulama sürecini atlayarak veya bir URL'de sunucu adresi veya IP adresi gibi güvenliği kontrol etmeyen bir parametre kullanılarak gerçekleştirilebilir. Saldırganın sunucuya istek göndermesi, hassas verileri çalması, sunucu kaynaklarını tüketmesi, sunucunun kontrolünü ele geçirmesi veya sunucunun işleyişini bozabilmesi nedeniyle SSRF, hedef sunucunun güvenliği açısından ciddi bir tehdit oluşturmaktadır.

# Referanslar

1. [https://owasp.org/www-project-top-ten/](https://owasp.org/www-project-top-ten/)
