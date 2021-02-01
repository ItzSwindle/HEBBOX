<?php
use App\Config;

$GLOBALS['language' ] = array (
    'website' => array (
        /* Aplicación / Ver / base.html */
        'base' => array (
            'nav_home'               => 'Inicio',

            'nav_community'          => 'Comunidad',
            'nav_news'               => 'Noticias',
            'nav_jobs'               => 'Trabajos',
            'nav_photos'             => 'Fotos',
            'nav_staff'              => 'Staff',
            'nav_team'               => 'Equipo',
            'nav_exchange'           => 'Mercado',

            'nav_shop'               => 'comprar' ,
            'nav_buy_points'         => Config::site['shortname']. ' Tienda',
            'nav_buy_club'           => 'Comprar ' . Config::site['shortname']. ' Club',
            'nav_purchasehistory'    => 'Historial de compras' ,
            'nav_changename'         => 'Cambiar ' . Config::site['shortname']. ' nombre',
            'nav_drawyourbadge'      => 'Dibuja tu Placa',
          
            'nav_highscores'         => 'Máximas puntuaciones ',

            'nav_forum'              => 'Mis grupos',

            'nav_helptool'           => 'Herramienta de ayuda',
            'nav_helptickets'        => 'Tickets de ayuda',

            'nav_housekeeping'       => 'HK',

            'close'                  => 'Cerrar',
            'cookies'                => 'utiliza cookies propias y de terceros para brindar un mejor servicio y también asegura que los anuncios se ajusten mejor a sus preferencias. Si utiliza nuestro website, acepta nuestra política de cookies ' ,
            'read_more'              => 'Leer más',
            'thanks_for_playing'     => 'Gracias por jugar',
            'made_with_love'         => 'fue hecho con mucho amor',
            'credits'                => 'Gracias a Raizer y Metus',
            'and_all'                => 'Y todos',

            'login_name'             => 'nombre' ,
            'login_password'         => 'Contraseña' ,
            'login_save_data'        => 'Recordarme' ,
            'login_lost_password'    => '¿Perdiste tu contraseña?' ,

            'report_message'         => 'Informar de este mensaje' ,
            'report_certainty'       => 'Está a punto de informar de este mensaje. ¿Estas seguro de que quieres reportar este mensaje?' ,
            'report_inappropriate'   => '¡Sí, esto es inapropiado!' ,

            'user_to'                => 'Para' ,
            'user_profile'           => 'Mi perfil' ,
            'user_settings'          => 'configuración' ,
            'user_logout'            => 'Cerrar sesión' ,

            'header_slogan'          => '¡Mundo virtual para jóvenes!' ,
            'header_slogan2'         => 'Únase a nuestra comunidad y haga nuevos amigos' ,
            'header_login'           => 'Iniciar sesión' ,
            'header_register'        => '¡Regístrese gratis!' ,
            'header_to'              => 'Entrar a' ,

            'footer_helptool'        => 'Herramienta de ayuda' ,
            'footer_rules'           => 'El ' . Config::site['shortname']. ' Reglas' ,
            'footer_terms'           => 'Términos y condiciones' ,
            'footer_privacy'         => 'Declaración de privacidad' ,
            'footer_cookies'         => 'Política de cookies' ,
            'footer_guide'           => 'Guía para padres'
        ),

        /* public / assets / js / web */
        'javascript' => array (
            'web_customforms_markedfields'                   => 'Todos los campos marcados con un * son obligatorios.' ,
            'web_customforms_loadingform'                    => 'Cargando formulario ...' ,
            'web_customforms_next'                           => 'Siguiente' ,
            'web_customforms_close'                          => 'Cerrar' ,
            'web_customforms_participation'                  => '¡Gracias por su participación!' ,
            'web_customforms_sent'                           => 'Sus respuestas han sido enviadas y serán analizadas por la persona que inicia este formulario.' ,
            'web_customforms_answer'                         => 'Su respuesta' ,

            'web_dialog_cancel'                              => 'Cancelar' ,
            'web_dialog_validate'                            => 'Validar' ,
            'web_dialog_confirm'                             => 'Confirme su elección' ,

            'web_hotel_backto'                               => 'Volver a ' . Config::site['shortname']. ' Hotel' ,

            'web_fill_pincode'                               => 'Ingrese el código pin que especificó al crear la seguridad adicional en su cuenta. Bueno, me olvidé de este? Entonces contáctenos a través del ' . Config::site['shortname'] . 'Herramienta de ayuda' ,
            'web_twostep'                                    => '¡Autorización de dos pasos!' ,
            'web_login'                                      => '¡Debes iniciar sesión para informar de este mensaje!' ,
            'web_loggedout'                                  => 'Desconectado :(' ,

            'web_notifications_success'                      => '¡Éxito!' ,
            'web_notifications_error'                        => '¡Error!' ,
            'web_notifications_info'                         => '¡Información!' ,

            'web_page_article_login'                         => '¡Debes iniciar sesión para publicar un comentario!' ,

            'web_page_community_photos_login'                => '¡Debes iniciar sesión para que me gusten las fotos!' ,
            'web_page_community_photos_loggedout'            => 'Desconectado :(' ,

            'web_page_forum_change'                          => 'Cambiar' ,
            'web_page_forum_cancel'                          => 'Cancelar' ,
            'web_page_forum_oops'                            => 'Vaya ...' ,
            'web_page_forum_topic_closed'                    => 'Este tema está cerrado y ya no puedes responder.' ,
            'web_page_forum_login_toreact'                   => '¡Para responder, debe iniciar sesión!' ,
            'web_page_forum_login_tolike'                    => '¡Debes iniciar sesión para que te guste esta publicación!' ,
            'web_page_forum_loggedout'                       => 'Desconectado :(' ,

            'web_page_profile_login'                         => '¡Debes iniciar sesión para que me gusten las fotos!' ,
            'web_page_profile_loggedout'                     => 'Desconectado :(' ,

            'web_page_settings_namechange_request'           => 'Solicitud' ,
            'web_page_settings_namechange_not_available'     => 'No disponible' ,
            'web_page_settings_namechange_choose_name'       => 'Elegir ' . Config::site['shortname']. ' nombre' ,

            'web_page_settings_verification_oops'            => 'Vaya ...' ,
            'web_page_settings_verification_fill_password'   => '¡Ingrese su contraseña!' ,
            'web_page_settings_verification_2fa_on'          => 'La autenticación de Google está configurada actualmente en su cuenta. Para utilizar otro método de verificación, primero debe eliminar su verificación anterior.' ,
            'web_page_settings_verification_2fa_secretkey'   => '¿Ha escaneado el código QR en su móvil? ¡Luego ingrese la clave secreta para confirmar su cuenta! ' ,
            'web_page_settings_verification_2fa_authcode'    => 'Código de autenticación' ,
            'web_page_settings_verification_pincode_on'      => 'Actualmente tienes un código PIN configurado en tu cuenta. Para utilizar otro método de verificación, primero debe eliminar su anterior verificación.' ,
            'web_page_settings_verification_2fa_off'         => 'Para deshabilitar la Autenticación de Google, le pedimos que ingrese el código secreto del generador.' ,
            'web_page_settings_verification_pincode_off'     => 'Para deshabilitar la autenticación del código PIN, le pedimos que ingrese su código PIN.',
            'web_page_settings_verification_pincode'         => 'Código PIN' ,
            'web_page_settings_verification_switch'          => '¡Seleccione el botón de cambio para habilitar un método de autenticación!' ,

            'web_page_shop_offers_neosurf_name'              => 'Neosurf' ,
            'web_page_shop_offers_neosurf_description'       => 'Pague fácilmente con Paypal y sus puntos Diamantes se recargarán inmediatamente.' ,
            'web_page_shop_offers_neosurf_dialog'            => 'Ingrese su dirección de correo electrónico de Paypal a continuación para continuar.' ,
            'web_page_shop_offers_paypal_name'               => 'Paypal' ,
            'web_page_shop_offers_paypal_description'        => 'Pague fácilmente con Paypal y sus puntos Diamantes se recargarán inmediatamente.' ,
            'web_page_shop_offers_paypal_dialog'             => 'Ingrese su dirección de correo electrónico de Paypal a continuación para continuar.' ,
            'web_page_shop_offers_sms_name'                  => 'SMS' ,
            'web_page_shop_offers_sms_description'           => 'Envíe un código por SMS y reciba un código de Diamantes.' ,
            'web_page_shop_offers_sms_dialog'                => 'Envíe el siguiente código en un SMS para obtener un código de Diamantes.' ,
            'web_page_shop_offers_audiotel_name'             => 'Audiotel' ,
            'web_page_shop_offers_audiotel_description'      => 'Llame a un número una o más veces para obtener un código de Diamantes.' ,
            'web_page_shop_offers_audiotel_dialog'           => 'Llame al número de abajo para obtener un código de Diamantes.' ,
            'web_page_shop_offers_pay_with'                  => 'Pagar con' ,
            'web_page_shop_offers_points_for'                => 'Puntos Diamantes para' ,
            'web_page_shop_offers_get_code'                  => 'Obtenga un código de Diamantes' ,
            'web_page_shop_offers_fill_code'                 => 'Ingrese su código de Diamantes' ,
            'web_page_shop_offers_fill_code_desc'            => 'Ingrese su código de Diamantes a continuación para recibir sus Diamantes.' ,
            'web_page_shop_offers_submit'                    => 'Enviar' ,
            'web_page_shop_offers_success'                   => '¡Compra exitosa!' ,
            'web_page_shop_offers_received'                  => 'Gracias por su compra. Tienes ' ,
            'web_page_shop_offers_received2'                 => 'Puntos Diamantes.' ,
            'web_page_shop_offers_close'                     => 'Cerrar' ,
            'web_page_shop_offers_failed'                    => ' ¡Error de compra!' ,
            'web_page_shop_offers_failed_desc'               => 'Error en la compra. Inténtelo de nuevo o contáctenos a través de la herramienta de ayuda. ' ,
            'web_page_shop_offers_back'                      => 'Atrás' ,
            'web_page_shop_offers_no_card'                   => 'Si no tiene una tarjeta prepaga Neosurf, puede ver el' ,
            'web_page_shop_offers_no_card2'                  => 'puntos de venta' ,
            'web_page_shop_offers_to'                        => 'a' ,
            'web_page_shop_offers_buy_code'                  => 'Código de acceso a la compra' ,
            'web_page_hotel_loading'                         => 'ahora se está cargando ...' ,
            'web_page_hotel_sometinhg_wrong_1'               => '¡Vaya, hay algo mal !.' ,
            'web_page_hotel_sometinhg_wrong_2'               => 'Recargar la página' ,
            'web_page_hotel_sometinhg_wrong_3'               => 'O crea un ticket en la herramienta de ayuda' ,
            'web_page_hotel_welcome_at'                      => 'Bienvenido a' ,
            'web_page_hotel_soon'                            => 'Toma un trago, estaremos allí pronto ...' ,
            'web_hotel_active_flash_1'                       => 'Ya casi estás dentro ' . Config::site['shortname'] . '!' ,
            'web_hotel_active_flash_2'                       => 'Haga clic aquí' ,
            'web_hotel_active_flash_3'                       => 'y haga clic en el lado izquierdo en "permitir" flash, para habilitar el flash.' ,
            
        ),

        /* Aplicación / Vista / Comunidad */
        'article' => array (
            'reactions'                  => 'Comentarios' ,
            'reactions_empty'            => 'Aún no hay comentarios.' ,
            'reactions_fill'             => 'Escribe tu mensaje aquí ...' ,
            'reactions_post'             => 'Publicar' ,
            'latest_news'                => 'Últimas noticias' ,
            'reaction_hidden_yes'        => '¡Los comentarios de noticias se hacen invisibles!' ,
            'reaction_hidden_no'         => '¡Noticia visible!' ,
            'forbidden_words'            => '¡Tu mensaje contiene palabras prohibidas!' ,
        ),
        'forum' => array (
          /* Foro / index.html */
            'index_subject'              => 'Asunto' ,
            'index_topics'               => 'Temas' ,
            'index_latest_topic'         => 'Último tema' ,
            'index_empty'                => 'Sin temas' ,
            'index_latest_activities'    => 'Últimas actividades' ,
            'index_by'                   => 'por' ,

          /* Foro / categoría.html */
            'category_new_topic'         => 'Nuevo tema' ,
            'category_back'              => 'Atrás' ,
            'category_topics'            => 'Temas' ,
            'category_posts'             => 'Publicaciones' ,
            'category_latest_reacts'     => 'Últimas reacciones' ,
            'category_topic_by'          => 'Por' ,
            'category_no_reacts'         => 'Sin reacciones' ,
            'category_latest_react_by'   => 'Última reacción de' ,
            'category_create_topic'      => 'Crear nuevo tema' ,
            'category_subject'           => 'Asunto' ,
            'category_description'       => 'Descripción' ,
            'category_create_button'     => 'Crear tema' ,
            'category_or'                => 'o' ,
            'category_cancel'            => 'cancelar' ,

          /* Foro / topic.html */
            'topic_react'                => 'Reaccionar' ,
            'topic_close'                => 'Cerrar' ,
            'topic_reopen'               => 'Reabrir ' ,
            'topic_since'                => 'Desde:' ,
            'topic_posts'                => 'Publicaciones:' ,
            'topic_topic'                => 'Tema:' ,
            'topic_reaction'             => 'Reacción:' ,
            'topic_closed'               => '¡Presta atención! Este tema está cerrado, ¿no estás de acuerdo? Entonces contáctenos a través del ' ,
            'topic_helptool'             => 'herramienta de ayuda' ,
            'topic_and'                  => 'y' ,
            'topic_likes_1'              => '¡a otros les gusta este!' ,
            'topic_likes_2'              => '¡le gusta esto!' ,
            'topic_likes_3'              => '¡así!'
        ),

        /* Aplicación / Vista / Comunidad */
        'community_photos' => array (
            'by'           => 'por',
            'photos_by'    => 'Fotos de',
            'photos_desc' => 'Ver las últimas fotos tomadas por',
            'load_more'    => 'Ver más fotos'
        ),
        'community_staff' => array (
            'title'        => 'Cómo puedo convertirme en personal de ' . Config::site['shortname'] . '?' ,
            'desc'         => '¡Nuestro personal está aquí para ayudarlo y guiarlo dentro de este hotel!' ,
            'content_1'    => 'Por supuesto que todos sueñan con ser empleados de ' . Config::site['shortname'] . ', pero desafortunadamente esto no es para todos. Convertirse en personal de ' . Config::site['shortname'] . 'debe aplicar.' ,
            'content_2'    => 'Esto solo es posible en momentos en que tenemos vacantes, cuando tenemos esto, esto se menciona en las noticias.'
        ),
        'community_value' => array (
            'title_header'       => 'Mercado de catálogos' ,
            'decs_header'        => '¡Todos los muebles exclusivos con un valor superior al tipo \'créditos\' se pueden comprar aquí!' ,
            'furni_name'         => 'Furniname' ,
            'furni_type'         => 'Tipo' ,
            'furni_costs'        => 'Ahora' ,
            'furni_amount'       => 'En el juego' ,
            'furni_value'        => 'Precio anterior' ,
            'furni_rate'         => 'Tarifa' ,
            'looking_for'        => 'Estoy buscando ..' ,
            'seller'             => 'Vendedor' ,
            'price'              => 'Precio' ,
            'nav_my'             => 'Mi mercado' ,
            'nav_shop'           => 'Mercado' ,
            'nav_catalogue'      => 'Catálogo' ,
            'marketplace_desc'   => 'Vendedores de ' . Config::site['shortname'] . 'El hotel ofrece sus cosas aquí que puedes pagar con tus monedas. ¡Quizás encuentre aquí artículos exclusivos que normalmente no puede comprar en nuestro catálogo! '
        ),
        /* Aplicación / Ver / Juegos */
        'games_ranking' => array (
            'username' => 'nombre'
        ),

        /* Aplicación / Ver / Ayuda */
        'help' => array (
          /* Help / help.html */
            'help_title'                 => 'Preguntas frecuentes' ,
            'help_label'                 => '¡Encuentre todas las respuestas a sus preguntas aquí!' ,
            'help_other_questions'       => 'Otras preguntas' ,
            'help_content_1'             => '¿No encontró la respuesta a su pregunta? No dude en ponerse en contacto con nuestro servicio de atención al cliente para que podamos brindarle más información. ' ,
            'help_contact'               => 'Contacto' ,
            'title'                      => 'Herramienta de ayuda' ,
            'desc'                       => 'Puede buscar aquí las respuestas a sus preguntas. Si no puede encontrar la respuesta a su pregunta, envíe una solicitud. ' ,

          /* Ayuda / request.html */
            'request_closed'             => 'CERRADO' ,
            'request_on'                 => 'Activado:' ,
            'request_ticket_amount'      => 'Cantidad de boletos:' ,
            'request_react_on'           => 'Reaccionar en:' ,
            'request_react'              => 'Reaccionar' ,
            'request_description'        => 'Descripción' ,
            'request_react_on_ticket'    => 'Reaccionar al ticket' ,
            'request_contact'            => 'Contactar a ' . Config::site['shortname'] ,
            'request_contact_help'       => 'Puede contactarnos abriendo un nuevo ticket.' ,
            'request_new_ticket'         => 'Nuevo ticket' ,
            'request_subject'            => 'Asunto' ,
            'request_type'               => 'Tipo' ,
            'request_status'             => 'Ticket abierto' ,
            'request_in_treatment'       => 'En tratamiento' ,
            'request_open'               => 'Abrir' ,
            'request_closed'             => 'Cerrado'
        ),
        'help_new' => array (
            'title'          => 'Mi	Tickets' ,
            'subject'        => 'Asunto' ,
            'description'    => 'Descripción' ,
            'open_ticket'    => 'Abrir un ticket'
        ),

        /* Aplicación / Ver / Inicio */
        'home' => array (
            'to'                       => 'Entrar a' ,
            'friends_online'           => 'Amigos en línea' ,
            'now_in'                   => 'Ahora en' ,
            'latest_news'              => 'Últimas noticias' ,
            'latest_facts'             => 'Los últimos hechos dentro de ' . Config::site['shortname'] . '!' ,
            'popular_rooms'            => 'Salas populares' ,
            'popular_rooms_label'      => 'Sepa qué salas son tendencia dentro ' . Config::site['shortname'] . '!' ,
            'popular_no_rooms'         => '¡¡No hay nadie dentro de nuestro hotel !!' ,
            'goto_room'                => 'Ir a la sala' ,
            'popular_groups'           => 'Grupos populares' ,
            'popular_groups_label'     => '¿A quién quieres unirte?' ,
            'popular_no_groups'        => ' ¡Aún no se han creado grupos!' ,
            'load_news'                => 'Cargar más noticias' ,
            'user_of_the_week'         =>   Config :: site [ 'shortname' ]. ' de la semana' ,
            'user_of_the_week_label'   => 'Usuario de la semana'
        ),
        'lost' => array (
            'page_not_found'           => '¡Página no encontrada!' ,
            'page_content_1'           => 'Lo sentimos, la página que está intentando encontrar no existe.' ,
            'page_content_2'           => 'Verifique nuevamente si tiene la URL correcta. Si vienes aquí de nuevo (¡bienvenido de nuevo!). Luego regresa al lugar de donde viniste con el botón \'Atrás \'. ' ,
            'sidebar_title'            => 'Quizás estabas buscando ...' ,
            'sidebar_stats'            => '¿La casa de uno de tus amigos?' ,
            'sidebar_stats_label_1'    => 'Quizás él / ella esté en el' ,
            'sidebar_stats_label_2'    => 'Máximas puntuaciones ' ,
            'sidebar_rooms'            => '¿Salas populares?' ,
            'sidebar_rooms_label_1'    => 'Examinar el' ,
            'sidebar_rooms_label_2'    => 'Navegador' ,
            'sidebar_else'             => '¡He perdido mis pantuflas!' ,
            'sidebar_else_label'       => '¡Entonces tienes que buscar mejor! :-) '
        ),
        'profile' => array (
            'overlay_search'         => '¿A quién estás buscando?' ,
            'since'                  => 'since' ,
            'currently'              => 'Actualmente' ,
            'never_online'           => 'Todavía no está en línea' ,
            'last_visit'             => 'Última visita' ,
            'guestbook_title'        => 'Libro de visitas' ,
            'guestbook_label'        => '¿Dejas algo?' ,
            'guestbook_input'        => '¿Qué estás haciendo?' ,
            'guestbook_input_1'      => '¿Qué quieres?' ,
            'guestbook_input_2'      => '¿saber?' ,
            'guestbook_load_more'    => 'Cargar más mensajes' ,
            'badges_title'           => 'Insignias' ,
            'badges_label'           => 'Insignias aleatorias que puedo usar' ,
            'badges_empty'           => 'Aún no ha establecido ninguna insignia' ,
            'friends_title'          => 'Amigos' ,
            'friends_label'          => 'Amigos aleatorios en mi lista' ,
            'friends_empty'          => 'Aún no ha hecho amigos' ,
            'groups_title'           => 'Grupos' ,
            'groups_label'           => '¡Mira lo que me encanta!' ,
            'groups_empty'           => 'Aún no se ha unido a un grupo' ,
            'rooms_title'            => 'Salas' ,
            'rooms_label'            => 'Mis últimas Salas creadas' ,
            'rooms_empty'            => 'Aún no ha creado ninguna sala' ,
            'photos_title'           => 'Fotos' ,
            'photos_label'           => '¿Quieres hacerte una foto conmigo?' ,
            'photos_empty'           => 'Aún no ha tomado ninguna foto' ,
            'title'                  => 'Perfil'
        ),
        'registration' => array (
            'title'                  => '¡Ingrese su información!' ,
            'email'                  => 'Dirección de correo electrónico' ,
            'email_fill'             => 'Ingrese su dirección de correo electrónico aquí ...' ,
            'email_help'             => 'Necesitaremos esta información para restaurar su cuenta en caso de que pierda el acceso.' ,
            'password'               => 'Contraseña' ,
            'password_fill'          => 'Contraseña ...' ,
            'password_repeat'        => 'Repetir contraseña' ,
            'password_repeat_fill'   => 'Repetir contraseña ...' ,
            'password_help_1'        => 'Su contraseña debe tener al menos 6 caracteres y contener letras y números.' ,
            'password_help_2'        => '¡Asegúrese de que su contraseña sea diferente a la de otros sitios web!' ,
            'birthdate'              => 'Fecha de nacimiento' ,
            'day'                    => 'Día' ,
            'month'                  => 'Mes' ,
            'year'                   => 'Año' ,
            'birthdate_help'         => 'Necesitaremos esta información para restaurar su cuenta en caso de que pierda el acceso.' ,
            'found'                  => 'Cómo encontraste a ' . Config::site['shortname'] . " ¿Hotel?" ,
            'found_choose'           => 'Haga una elección ...' ,
            'found_choose_1'         => 'Google' ,
            'found_choose_2'         => 'Por un amigo' ,
            'found_choose_3'         => 'Por otro juego' ,
            'found_choose_4'         => 'Por Facebook' ,
            'found_choose_5'         => 'Otro' ,
            'create_user'            => 'Crea tu ' . Config::site['shortname'] . '!' ,
            'username'               =>   Config :: site [ 'shortname' ]. ' nombre' ,
            'username_fill'          =>   Config :: site [ 'shortname' ]. ' nombre ...' ,
            'username_help'          => 'Su nombre único en ' . Config::site['shortname'] . ' Hotel.',
            'sex'                    => 'Sexo' ,
            'male'                   => 'Niño' ,
            'female'                 => 'Chica' ,
            'register'               => 'Registrarse' ,
            'header_slogan2'         => 'Únase a nuestra comunidad y haga nuevos amigos'
        ),

        /* Aplicación / Ver / Trabajos */
        'apply' => array (
            'title'                => 'Reaccionar en la factura' ,
            'content_1'            => 'Gracias por su interés en ' . Config::site['shortname'] . ' Hotel y por responder a la vacante.' ,
            'content_2'            => 'Intente responder el cuestionario con la mayor precisión posible.' ,
            'description'          => 'Descripción del trabajo' ,
            'question_name'        => '¿Cuál es tu nombre?' ,
            'question_age'         => '¿Cuántos años tienes?' ,
            'question_why'         => '¿Por qué crees que podrías ser adecuado?' ,
            'question_time'        => '¿Cuántas horas estás conectado?' ,
            'question_time_help'   => 'Díganos cuántas horas pasa en línea al día en ' . Config::site['shortname'] . ' Hotel.' ,
            'monday'               => 'Lunes' ,
            'tuesday'              => 'Martes' ,
            'wednesday'            => 'Miércoles' ,
            'thursday'             => 'jueves' ,
            'friday'               => 'Viernes' ,
            'saturday'             => 'Sábado' ,
            'sunday'               => 'Domingo' ,
            'time_to_time'         => 'de X a Y horas' ,
            'send'                 => 'Enviar mi solicitud'
        ),
        'jobs' => array (
            'title'                    => 'Lista de vacantes' ,
            'applications'             => 'Mis aplicaciones' ,
            'available_applications'   => 'Vacantes disponibles' ,
            'buildteam'                => 'Buildteam' ,
            'buildteam_desc'           => 'Ellos son responsables de construir salas (de eventos / oficiales).' ,
            'react'                    => 'Reaccionar'
        ),

        /* Aplicación / Ver / Contraseña */
        'password_claim' => array (
            'title'                  => '¿Olvidó su contraseña?' ,
            'content_1'              => 'Ingrese su ' . Config::site['shortname'] . ' nombre y dirección de correo electrónico a continuación y le enviaremos un enlace por correo electrónico para cambiar su contraseña.' ,
            'content_2'              => '¡No hagas esto si alguien te pide que lo hagas!' ,
            'username'               =>   Config :: site [ 'shortname' ]. ' nombre' ,
            'email'                  => 'Dirección de correo electrónico' ,
            'send'                   => 'Enviar correo electrónico' ,
            'wrong_page'             => '¡Falsa alarma!' ,
            'wrong_page_content_1'   => 'Si recuerda su contraseña, o terminó aquí por accidente, puede usar el enlace a continuación para volver a la página de inicio.' ,
            'back_to_home'           => 'Volver a la página de inicio'
        ),
        'password_reset' => array (
            'title'                      => 'Cambiar contraseña' ,
            'new_password'               => 'Nueva contraseña' ,
            'new_password_fill'          => 'Ingrese su nueva contraseña ...' ,
            'new_password_repeat_fill'   => 'Por favor, vuelva a ingresar su contraseña ...' ,
            'change_password'            => 'Cambiar contraseña'
        ),

        /* Aplicación / Ver / Configuración */
        'settings_panel' => array (
            'preferencias'     => 'Mis preferencias' ,
            'password'        => 'Cambiar contraseña' ,
            'verification'    => 'Establecer verificación' ,
            'email'           => 'Cambiar dirección de correo electrónico' ,
            'namechange'      => 'Cambiar ' . Config::site['shortname'] . ' nombre' ,
            'shop_history'    => 'Historial de compras'
        ),
        'settings_email' => array (
            'title'            => 'Cambiar correo electrónico' ,
            'email_title'      => 'Dirección de correo electrónico' ,
            'email_label'      => 'Su dirección de correo electrónico es necesaria para restaurar su cuenta en caso de que pierda el acceso.' ,
            'password_title'   => 'Contraseña actual' ,
            'fill_password'    => 'Ingrese su contraseña actual ...' ,
            'save'             => 'Guardar'
        ),
        'settings_namechange' => array (
            'title'            => 'Cambiar ' . Config::site['shortname'] . ' nombre' ,
            'help_1'           => '¿Quieres cambiar tu ' . Config::site['shortname'] . ' ¿nombre? Que puede! Esto cuesta ' ,
            'help_2'           => 'y se cargará inmediatamente después de su solicitud. Una vez que se haya cambiado su nombre, ¡no podemos revertirlo! ¡Así que asegúrese de pensar detenidamente sobre su decisión!',
            'fill_username'    =>   Config :: site [ 'shortname' ]. ' nombre ...' ,
            'request'          => 'Solicitud',
        ),
        'settings_password' => array (
            'title'                      => 'Cambiar contraseña' ,
            'password_title'             => 'Contraseña actual' ,
            'fill_password'              => 'Ingrese su contraseña actual ...' ,
            'newpassword_title'          => 'Nueva contraseña' ,
            'fill_newpassword'           => 'Ingrese su nueva contraseña aquí ...' ,
            'fill_newpassword_repeat'    => 'Repite tu nueva contraseña ...' ,
            'help'                       => 'Su contraseña debe tener al menos 6 caracteres y contener letras y números.' ,
            'save'                       => 'Guardar'
        ),
        'settings_preferences' => array (
            'title'                => 'Mis preferencias' ,
            'follow_title'         => 'Función de seguimiento: ¿quién puede seguirte?' ,
            'follow_label'         => 'No quiero ' . Config::site['shortname'] . ' es para seguirme' ,
            'friends_title'        => 'Solicitudes de amistad ' ,
            'friends_label'        => '¿Permitir solicitudes de amistad?' ,
            'room_title'           => 'Invitaciones a salas ' ,
            'room_label'           => 'No quiero que me inviten a las salas' ,
            'hotelalerts_title'    => 'Alertas de hoteles' ,
            'hotelalerts_label'    => 'No quiero recibir notificaciones del hotel' ,
            'chat_title'           => 'Configuración de chat' ,
            'chat_label'           => 'Quiero usar el chat antiguo'
        ),
        'settings_verification' => array (
            'title'                  => 'Asegure su cuenta' ,
            'help'                   => 'Esta comprobación aumenta la seguridad de su cuenta. Cuando inicie sesión, debe, según sus preferencias, responder las preguntas de seguridad que haya definido o introducir un código generado por su aplicación. ' ,
            'password_title'         => 'Ingrese su contraseña' ,
            'auth_title'             => 'Verificación en dos pasos' ,
            'auth_label'             => 'Asegure su cuenta con la verificación de dos pasos' ,
            'method_title'           => 'Método de verificación' ,
            'method_choose'          => 'Elija su método de verificación ...' ,
            'method_pincode'         => 'Quiero establecer un código pin' ,
            'method_auth_app'        => 'Quiero usar Google 2FA' ,
            'pincode_title'          => 'Seguridad de código PIN' ,
            'pincode_label'          => 'Ponga un código PIN en su cuenta como seguridad adicional, con esto asegura una mejor protección de su cuenta contra los piratas informáticos.' ,
            'fill_pincode'           => 'Ingrese su código PIN' ,
            'generate_auth'          => 'Generación de código por 2FA' ,
            'generate_auth_label'    => 'Este método es el más confiable. Vincula su ' . Config::site['shortname'] . ' cuenta a una aplicación de autenticación (Google Authenticator) en su teléfono. Cuando te registras, todo lo que tienes que hacer es ingresar el código generado por tu aplicación. ' ,
            'link_account'           => 'Vincula tu cuenta' ,
            'link_account_label'     => 'Para vincular su cuenta, simplemente escanee este código QR con su aplicación y luego haga clic en guardar para validar este cambio.' ,
            'save'                   => 'Guardar'
        ),

        /* Aplicación / Ver / Comprar */
        'shop_club' => array (
            'club_benefits'        => 'Beneficios del club' ,
            'club_buy'             => 'Comprar' . Config::site['shortname'] . ' Club' ,
            'unlimited'            => 'Ilimitado' ,
            'more_information'     => 'Más información' ,
            'content_1'            => '¿Tiene alguna pregunta o problema con una compra?' ,
            'content_2'            => 'No dude en ponerse en contacto con el servicio de atención al cliente a través de' ,
            'help_tool'            =>   Config :: site [ 'shortname' ]. ' Herramienta de ayuda' ,
            'random_club_users'    => 'Aleatorio de ' . Config::site['shortname'] . ' Miembros del club' ,
            'desc'                 => 'Aquí puedes comprar ' . Config::site['shortname'] . ' club por dinero real. Con el club puedes comprar artículos exclusivos.',
        ),
        'shop_history' => array (
            'buy_history'          => 'Historial de compras' ,
            'product'              => 'Producto' ,
            'date'                 => 'Fecha' ,
            'buy_history_empty'    => 'Aún no tienes un historial de compras.' ,
            'buy_club'             => 'Comprar ' . Config::site['shortname'] . ' Club' ,
            'content_1'            => '¿Tiene alguna pregunta o problema con una compra?' ,
            'content_2'            => 'No dude en ponerse en contacto con el servicio de atención al cliente a través de' ,
            'help_tool'            =>   Config :: site [ 'shortname' ]. ' Herramienta de ayuda' ,
            'title'                => 'Mi historial de compras' ,
            'desc'                 => 'Aquí ves todas las compras que has realizado' ,
            'title_draw'           => 'Dibuja tu insignia' ,
            'draw_desc'            => 'Dibuja tu propia insignia para obtener puntos'
        ),
        'shop_offers' => array (
            'back'               => 'Atrás' ,
            'buymethods'         => 'Métodos de pago' ,
            'for'                => 'para' ,
            'or_lower'           => 'o inferior' ,
            'loading_methods'    => 'Se están cargando los métodos de pago ...' ,
            'store'              => 'Tienda'
        ),
        'shop' => array (
            'title'              => 'Seleccionar un producto' ,
            'country'            => 'País:' ,
            'netherlands'        => 'Holanda' ,
            'belgium'            => 'Bélgica' ,
            'super_rare'         => 'Super raro' ,
            'more_information'   => 'Más información' ,
            'content_1'          => '¿Tiene alguna pregunta o problema con una compra?' ,
            'content_2'          => 'No dude en ponerse en contacto con el servicio de atención al cliente a través de' ,
            'help_tool'          =>   Config :: site [ 'shortname' ]. ' Herramienta de ayuda' ,
            'not_logged'         => '¡Vaya! No has iniciado sesión.',
            'have_to_login'      => 'Debe iniciar sesión para visitar el ' . Config::site['shortname'] . ' Tienda.' ,
            'click_here'         => 'Haga clic aquí' ,
            'to_login'           => 'para iniciar sesión.' ,
            'store'              => 'Tienda' ,
            'desc'               => 'Aquí puedes comprar créditos con dinero real, con esto puedes comprar artículos exclusivos en nuestro catálogo'
        ),
        'games_ranking' => array (
            'title'              => 'Máximas puntuaciones' ,
            'desc'               => '¡En esto encontrarás todos los puntajes altos de nuestros jugadores!'
        )
    ),
    'core' => array (
        'belcredits' => 'Puntos Diamantes' ,
        'hotelapi' => array (
            'disabled' => '¡No se puede procesar la solicitud porque el hotelapi está apagado!'
        ),
        'dialog' => array (
            'logged_in'              => '¡Vaya para visitar esta página, debe iniciar sesión!' ,
            'not_logged_in'          => '¡No es necesario que inicie sesión para visitar esta página!'
        ),
        'notification' => array (
            'message_placed'         => '¡Tu mensaje ha sido publicado!' ,
            'message_deleted'        => '¡Tu mensaje ha sido eliminado!' ,
            'invisible'              => '¡Esto se hace invisible!' ,
            'profile_invisible'      => 'Este ' . Config::site['shortname'] . ' ha hecho invisible su perfil.',
            'profile_notfound'       => 'Desafortunadamente ... no pudimos encontrar el ' . Config::site['shortname'] . '!' ,
            'no_permissions'         => 'No tienes permiso.' ,
            'already_liked'          => '¡Ya te gusta esto!' ,
            'liked'                  => '¡Te gusta esto!' ,
            'banned_1'               => 'Has sido baneado por romper el ' . Config::site['shortname'] . ' Reglas:' ,
            'banned_2'               => 'Tu prohibición expira:' ,
            'something_wrong'        => 'Algo salió mal, inténtelo de nuevo.' ,
            'room_not_exists'        => '¡Esta sala no existe!' ,
            'staff_received'         => '¡Gracias! a ' . Config::site['shortname'] . ' ¡El personal ha recibido esto!',
            'not_enough_belcredits' => 'No tienes suficientes Diamantespoints.' ,
            'not_enough_points'      => 'No tienes suficientes puntos.' ,
            'topic_closed'           => '¡No puede responder a un tema que ha sido cerrado!' ,
            'post_not_allowed'       => '¡No tienes acceso para crear una publicación en este foro!' ,
            'draw_badge_uploaded'    => '¡Su insignia ha sido enviada y está lista para revisión!'
        ),
        'pattern' => array (
            'can_be'                 => 'puede máximo' ,
            'must_be'                => 'debe ser mínimo' ,
            'characters_long'        => 'caracteres de longitud.' ,
            'invalid'                => 'no cumple con los requisitos!' ,
            'invalid_characters'     => '¡contiene caracteres inválidos!' ,
            'is_required'            => '¡Complete todos los campos!' ,
            'not_same'               => 'no coincide' ,
            'captcha'                => '¡Recaptcha se ingresó incorrectamente!' ,
            'numeric'                => '¡debe ser numérico!' ,
            'email'                  => '¡no es válido!'
        ),
        'title' => array (
            'home'               => '¡Haz amigos, juega, crea salas y destaca!' ,
            'lost'               => '¡Página no encontrada!' ,
            'registration'       => '¡Regístrese gratis!' ,
            'hotel'              => 'Hotel' ,

            'password' => array (
                'claim'     => '¿Olvidó su contraseña?' ,
                'reset'     => 'Cambiar contraseña' ,
            ),
            'settings' => array (
                'index'          => 'Mis preferencias' ,
                'password'       => 'Cambiar contraseña' ,
                'email'          => 'Cambiar correo electrónico' ,
                'namechange'     => 'Cambiar ' . Config::site['shortname'] . ' nombre'
            ),
            'community' => array (
                'index'      => 'Comunidad' ,
                'photos'     => 'Fotos \' s ' ,
                'staff'      =>   Config :: site [ 'shortname' ]. ' Personal' ,
                'team'       =>   Config :: site [ 'shortname' ]. ' Equipo' ,
				'department' =>   Config :: site [ 'shortname' ]. ' Departamentos' ,
                'fansites'   => 'Fansites' ,
                'value'      => 'Catalog Marketplace' ,
                'forum'      => 'Mis gremios'
            ),
            'games' => array (
                'ranking'    => 'Máximas puntuaciones'
            ),
            'shop' => array (
                'index'      =>   Config :: site [ 'shortname' ]. ' Tienda' ,
                'history'    => 'Historial de compras' ,
                'club'       =>   Config :: site [ 'shortname' ]. ' Club'
            ),
            'help' => array (
                'index'      => 'Herramienta de ayuda' ,
                'requests'   => 'Tickets de ayuda' ,
                'new'        => 'Abrir ticket de ayuda'
            ),
            'jobs' => array (
                'index'      =>   Config :: site [ 'shortname' ]. ' Vacantes' ,
                'apply'      => 'Responder al vacante'
            )
        )
    ),
    'login' => array (
        'invalid_password'           => 'Contraseña no válida.',
        'invalid_pincode'            => 'Este código pin no coincide con el de este ' . Config::site['shortname'] . '!' ,
        'fill_in_pincode'            => '¡Ingrese su código pin ahora para obtener acceso a su cuenta!'
    ),
    'register' => array (
        'username_invalid'           =>   Config :: site [ 'shortname' ]. ' nombre es contrario al ' . Config::site['shortname'] . ' Reglas.' ,
        'username_exists'            =>   Config :: site [ 'shortname' ]. ' nombre ya está en uso :-(' ,
        'email_exists'               =>   'Esta dirección de correo electrónico ya está en uso :-(' ,
        'too_many_accounts'          => 'Hay demasiadas cuentas registradas en esta ip :-('
    ),
    'claim' => array (
        'invalid_email'              => 'Esta dirección de correo electrónico no coincide con la de esta ' . Config::site['shortname'] . ' CARNÉ DE IDENTIDAD.' ,
        'invalid_link'               => 'Este enlace ha caducado. Solicite su contraseña nuevamente para cambiar su contraseña. ' ,
        'send_link'                  => '¡Le acabamos de enviar un correo electrónico! ¿No recibió nada? Luego revise la carpeta de correo no deseado. ' ,
        'password_changed'           => 'Su contraseña ha sido cambiada. ¡Ahora puede iniciar sesión de nuevo! ' ,

        'email'   => array (
            'title'                  => 'Cambie su contraseña.'
        ),
    ),
    'settings' => array (
        'email_saved'                => 'Su dirección de correo electrónico ha sido cambiada.' ,
        'pincode_saved'              => 'Tu código pin ha sido guardado, tendrás que iniciar sesión nuevamente. ¡Te veo pronto! :) ' ,
        'password_saved'             => 'Su contraseña ha sido cambiada. Ahora tendrá que iniciar sesión nuevamente. ¡Te veo pronto! :) ' ,
        'preferences_saved'          => ' ¡Sus preferencias han sido guardadas! ' ,
        'current_password_invalid'   => 'La contraseña actual no coincide con la de su ' . Config::site['shortname'] . ' CARNÉ DE IDENTIDAD.' ,
        'choose_new_username'        => 'Ingrese un nuevo ' . Config::site['shortname'] . ' nombre.' ,
        'choose_new_pincode'         => 'Ingrese un nuevo código PIN.' ,
        'user_is_active'             => 'Este ' . Config::site['shortname'] . ' ¡todavía puede estar activo!' ,
        'user_not_exists'            => 'Este ' . Config::site['shortname'] . ' ¡El nombre está disponible y aún no existe!' ,
        'name_change_saved'          => 'Su solicitud será procesada, se han cargado 50 puntos Diamantes.' ,
        'invalid_secretcode'         => 'El código secreto de autenticación de Google es incorrecto.' ,
        'enabled_secretcode'         => '¡Método de autenticación establecido! Tendrás que iniciar sesión de nuevo ... ¡hasta pronto! ' ,
        'disabled_secretcode'        => '¡Método de autenticación desactivado!'
    ),
    'shop' => array (
        'offers' => array (
            'invalid_transaction'    => '¡No se pudo procesar la transacción!' ,
            'invalid_code'           => 'El código que ingresó es incorrecto.' ,
            'success_1'              => '¡Gracias por su compra! Has recibido ' ,
            'success_2'              => 'Diamantes.'
        ),
        'club' => array (
            'already_vip'            => 'Eres un miembro ilimitado de ' . Config::site['shortname'] . ' Club.',
            'purchase_success'       => '¡Sí! Ahora eres miembro del ' . Config::site['shortname'] . ' Club durante 31 días.',

        ),
        'marketplace' => array (
            'expired'                => '¡El artículo ha caducado, no es posible comprar este artículo!' ,
            'purchased'              => 'El artículo se compró con éxito y ahora se agrega a su inventario' ,
            'regards'                => '¡Tu artículo ha llegado! Saludos cordiales de ' . Config::site['shortname']
        )
    ),
    'help' => array (
        'ticket_created'             => 'Se ha creado su ticket de ayuda. Vea sus Tickets de ayuda para ver la solicitud de ayuda. ' ,
        'ticket_received'            => 'An ' . Config::site['shortname'] . ' El personal ha respondido a su ticket de la herramienta de ayuda. Visite la herramienta de ayuda para ver la respuesta.' ,
        'already_open'               => '¡Aún tienes un ticket pendiente! Cuando esto haya sido tratado, puede crear un ticket de nuevo.' ,
        'no_answer_yet'              => 'Solo puede responder una vez y ' . Config::site['shortname'] . ' El personal ha respondido a su boleto.' ,
    ),
    'forum' => array (
        'is_sticky'                  => '¡Actualización pegajosa!' ,
        'is_closed'                  => '¡Estado del tema cambiado!'
    ),

    /* Limpieza interna */
    'housekeeping' => array (
        'base' => array (
            'dashboard_header_title'     => 'Panel de control '
        ),
        'javascript' => array (
            'dashboard_table_username'   => 'Nombre de usuario'
        )
    )
);