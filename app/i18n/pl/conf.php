<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'archiving' => array(
		'_' => 'Archiwizacja',
		'exception' => 'Wyjątki od oczyszczania',
		'help' => 'Więcej opcji dostępne jest w ustawieniach konkretnych kanałów',
		'keep_favourites' => 'Nigdy nie usuwaj ulubionych',
		'keep_labels' => 'Nigdy nie usuwaj oznaczonych etykietą',
		'keep_max' => 'Maksymalna liczba wiadomości do przechowywania w każdym kanale',
		'keep_min_by_feed' => 'Minimalna liczba wiadomości do przechowywania w każdym kanale',
		'keep_period' => 'Maksymalny wiek wiadomości do przechowywania',
		'keep_unreads' => 'Nigdy nie usuwaj nieprzeczytanych wiadomości',
		'maintenance' => 'Konserwacja',
		'optimize' => 'Optymalizacja bazy danych',
		'optimize_help' => 'Uruchom od czasu do czasu, by zmniejszyć rozmiar bazy danych',
		'policy' => 'Polityka oczyszczania',
		'policy_warning' => 'Jeżeli nie zostanie wybrana polityka oczyszczania, żadna wiadomość nie zostanie usunięta.',
		'purge_now' => 'Oczyść teraz',
		'title' => 'Archiwizacja',
		'ttl' => 'Nie odświeżaj automatycznie częściej niż',
	),
	'display' => array(
		'_' => 'Wyświetlanie',
		'darkMode' => array(
			'_' => 'Tryb ciemny',
			'auto' => 'Automatyczny',
			'help' => 'For compatible themes only',	// TODO
			'no' => 'Wyłączony',
		),
		'icon' => array(
			'bottom_line' => 'Dolny margines',
			'display_authors' => 'Autorzy',
			'entry' => 'Ikony wiadomości',
			'publication_date' => 'Data publikacji',
			'related_tags' => 'Tagi',
			'sharing' => 'Podaj dalej',
			'summary' => 'Skrót wiadomości',
			'top_line' => 'Górny margines',
		),
		'language' => 'Język',
		'notif_html5' => array(
			'seconds' => 'sekund (0 oznacza wartość domyślną przeglądarki)',
			'timeout' => 'Czas wyświetlania powiadomienia HTML5',
		),
		'show_nav_buttons' => 'Pokaż przyciski nawigacyjne',
		'theme' => array(
			'_' => 'Motyw',
			'deprecated' => array(
				'_' => 'Przestarzały',
				'description' => 'Ten motyw nie jest już wspierany i zostanie usunięty w <a href="https://freshrss.github.io/FreshRSS/en/users/05_Configuration.html#theme" target="_blank">przyszłej wersji FreshRSS</a>',
			),
		),
		'theme_not_available' => 'Motyw “%s” nie jest już dostępny. Wybierz inny motyw.',
		'thumbnail' => array(
			'label' => 'Miniaturka',
			'landscape' => 'Pejzaż',
			'none' => 'Brak',
			'portrait' => 'Portret',
			'square' => 'Kwadrat',
		),
		'timezone' => 'Strefa czasowa',
		'title' => 'Wyświetlanie',
		'website' => array(
			'full' => 'Ikona i nazwa',
			'icon' => 'Tylko ikona',
			'label' => 'Strona źródłowa',
			'name' => 'Tylko nazwa',
			'none' => 'Ukryj',
		),
		'width' => array(
			'content' => 'Rozmiar treści',
			'large' => 'Szeroka',
			'medium' => 'Średnia',
			'no_limit' => 'Pełna szerokość',
			'thin' => 'Wąska',
		),
	),
	'logs' => array(
		'loglist' => array(
			'level' => 'Poziom',
			'message' => 'Zawartość wpisu',
			'timestamp' => 'Czas',
		),
		'pagination' => array(
			'first' => 'Początek',
			'last' => 'Koniec',
			'next' => 'Następne',
			'previous' => 'Poprzednie',
		),
	),
	'privacy' => array(
		'_' => 'Privacy',	// TODO
		'retrieve_extension_list' => 'Retrieve extension list',	// TODO
	),
	'profile' => array(
		'_' => 'Zarządzanie profilem',
		'api' => array(
			'_' => 'Zarządzanie API',
			'check_link' => 'Check API status via: <kbd><a href="../api/" target="_blank">%s</a></kbd>',	// TODO
			'disabled' => 'The API access is disabled.',	// TODO
			'documentation_link' => 'See the <a href="https://freshrss.github.io/FreshRSS/en/users/06_Mobile_access.html#access-via-mobile-app" target="_blank">documentation and list of known apps</a>',	// TODO
			'help' => 'See <a href="http://freshrss.github.io/FreshRSS/en/users/06_Mobile_access.html#access-via-mobile-app" target=_blank>documentation</a>',	// TODO
		),
		'delete' => array(
			'_' => 'Usunięcie konta',
			'warn' => 'Twoje konto i wszystkie powiązane z nim dane zostaną usunięte.',
		),
		'email' => 'Adres e-mail',
		'password_api' => 'Hasło API<br /><small>(np. dla aplikacji na telefony)</small>',
		'password_form' => 'Hasło<br /><small>(dla logowania przez formularz na stronie)</small>',
		'password_format' => 'Przynajmniej 7 znaków',
		'title' => 'Profil',
	),
	'query' => array(
		'_' => 'Zapisane zapytania',
		'deprecated' => 'To zapytanie nie jest już poprawne. Kategoria lub kanał do którego się odnosi już nie istnieje.',
		'description' => 'Description',	// TODO
		'filter' => array(
			'_' => 'Zastosowane filtry:',
			'categories' => 'Według kategorii',
			'feeds' => 'Według kanału',
			'order' => 'Sortowanie wg daty',
			'search' => 'Wyrażenie',
			'shareOpml' => 'Włącz udostępnianie OPML-i zawierających kategorie i kanały',
			'shareRss' => 'Włącz udostępnianie przez HTML i RSS',
			'state' => 'Stan',
			'tags' => 'Według tagu',
			'type' => 'Rodzaj',
		),
		'get_all' => 'Wyświetlenie wszystkich wiadomości',
		'get_all_labels' => 'Wyświetl wiadomości z dowolnymi etykietami',
		'get_category' => 'Wyświetlenie kategorii “%s”',
		'get_favorite' => 'Wyświetlenie ulubionych wiadomości',
		'get_feed' => 'Wyświetlenie kanału “%s”',
		'get_important' => 'Wyświetl wiadomości z ważnych kanałów',
		'get_label' => 'Wyświetl wiadomości z etykietą “%s”',
		'help' => 'Zapytania i dzielenie się nimi przez HTML / RSS / OPML opisane są w <a href="https://freshrss.github.io/FreshRSS/en/users/user_queries.html" target="_blank">dokumentacji</a>.',
		'image_url' => 'Image URL',	// TODO
		'name' => 'Nazwa',
		'no_filter' => 'Brak filtrów',
		'number' => 'Zapytanie nr %d',
		'order_asc' => 'Wyświetl najpierw najstarsze wiadomości',
		'order_desc' => 'Wyświetl najpierw najnowsze wiadomości',
		'search' => 'Szukaj “%s”',
		'share' => array(
			'_' => 'Udostępnij to zapytanie',
			'disabled' => array(
				'_' => 'disabled',	// TODO
				'title' => 'Sharing',	// TODO
			),
			'greader' => 'Shareable link to the GReader JSON',	// TODO
			'help' => 'Posłuż się tym odnośnikiem, aby podzielić się zapytaniem',
			'html' => 'Odnośnik do strony HTML',
			'opml' => 'Odnośnik do listy kanałów (OPML)',
			'rss' => 'Odnośnik do kanału RSS',
		),
		'state_0' => 'Wyświetl wszystkie wiadomości',
		'state_1' => 'Wyświetl przeczytane wiadomości',
		'state_2' => 'Wyświetl nieprzeczytane wiadomości',
		'state_3' => 'Wyświetl wszystkie wiadomości',
		'state_4' => 'Wyświetl ulubione wiadomości',
		'state_5' => 'Wyświetl przeczytane ulubione wiadomości',
		'state_6' => 'Wyświetl nieprzeczytane ulubione wiadomości',
		'state_7' => 'Wyświetl ulubione wiadomości',
		'state_8' => 'Wyświetl wiadomości, które nie są ulubione',
		'state_9' => 'Wyświetl przeczytane wiadomości, które nie są ulubione',
		'state_10' => 'Wyświetl nieprzeczytane wiadomości, które nie są ulubione',
		'state_11' => 'Wyświetl wiadomości, które nie są ulubione',
		'state_12' => 'Wyświetl wszystkie wiadomości',
		'state_13' => 'Wyświetl przeczytane wiadomości',
		'state_14' => 'Wyświetl nieprzeczytane wiadomości',
		'state_15' => 'Wyświetl wszystkie wiadomości',
		'title' => 'Zapisane zapytania',
	),
	'reading' => array(
		'_' => 'Czytanie',
		'after_onread' => 'Po oznaczeniu wszystkich jako przeczytane,',
		'always_show_favorites' => 'Pokaż wszystkie wiadomości po wejściu do ulubionych',
		'apply_to_individual_feed' => 'Applies to feeds individually',	// TODO
		'article' => array(
			'authors_date' => array(
				'_' => 'Autor i data',
				'both' => 'W nagłówku i stopce',
				'footer' => 'W stopce',
				'header' => 'W nagłówku',
				'none' => 'Brak',
			),
			'feed_name' => array(
				'above_title' => 'Ponad tytułem/tagami',
				'none' => 'Brak',
				'with_authors' => 'W tej samej linii co autor i data',
			),
			'feed_title' => 'Nazwa kanału',
			'icons' => array(
				'_' => 'Article icons position<br /><small>(Reading view only)</small>',	// TODO
				'above_title' => 'Above title',	// TODO
				'with_authors' => 'In authors and date row',	// TODO
			),
			'tags' => array(
				'_' => 'Tagi',
				'both' => 'W nagłówku i stopce',
				'footer' => 'W stopce',
				'header' => 'W nagłówku',
				'none' => 'Brak',
			),
			'tags_max' => array(
				'_' => 'Limit liczby wyświetlanych tagów',
				'help' => '0 oznacza: wyświetl wszystkie tagi i żadnego nie zwijaj',
			),
		),
		'articles_per_page' => 'Liczba wiadomości na stronę',
		'auto_load_more' => 'Załaduj więcej wiadomości po dojściu na koniec strony',
		'auto_remove_article' => 'Ukryj wiadomości po przeczytaniu',
		'confirm_enabled' => 'Pytaj o potwierdzenie przed oznaczeniem wszystkich wiadomości jako przeczytane.',
		'display_articles_unfolded' => 'Domyślnie wyświetlaj rozwinięte wiadomości',
		'display_categories_unfolded' => 'Kategorie do rozwinięcia',
		'headline' => array(
			'articles' => 'Wiadomości: otwieranie i zamykanie',
			'articles_header_footer' => 'Wiadomości: nagłówek i stopka',
			'categories' => 'Nawigacja po lewej: Kategorie',
			'mark_as_read' => 'Oznacz wiadomość jako przeczytaną',
			'misc' => 'Różne',
			'view' => 'Widok',
		),
		'hide_read_feeds' => 'Ukryj kategorie i kanały nie zawierające nieprzeczytanych wiadomości (nie działa gdy włączone jest wyświetlanie wszystkich wiadomości)',
		'img_with_lazyload' => 'Opóźnij ładowanie obrazów dopóki nie będą widoczne',
		'jump_next' => 'przejdź do następnego nieprzeczytanego rodzeństwa',
		'mark_updated_article_unread' => 'Oznacz zaktualizowane wiadomości jako nieprzeczytane',
		'number_divided_when_reader' => 'Dzielone przez 2 w widoku czytania.',
		'read' => array(
			'article_open_on_website' => 'gdy wiadomość jest otworzona na pierwotnej stronie',
			'article_viewed' => 'gdy wiadomość jest otworzona',
			'focus' => 'kiedy ma focus (z wyłączeniem ważnych kanałów)',
			'keep_max_n_unread' => 'Maksymalna liczba nieprzeczytanych wiadomości',
			'scroll' => 'podczas przewijania (z wyłączeniem ważnych kanałów)',
			'upon_gone' => 'gdy nie jest już listowana w źródle kanału',
			'upon_reception' => 'po otrzymaniu wiadomości',
			'when' => 'Oznacz wiadomość jako przeczytaną…',
			'when_same_title_in_category' => 'if an identical title already exists in the top <i>n</i> newest articles of the category',	// TODO
			'when_same_title_in_feed' => 'gdy identyczny tytuł już istnieje w <i>n</i> najnowszych wiadomościach (of the feed)',	// DIRTY
		),
		'show' => array(
			'_' => 'Wiadomości do wyświetlenia',
			'active_category' => 'Aktualna',
			'adaptive' => 'Dopasuj do sytuacji',
			'all_articles' => 'Wszystkie wiadomości',
			'all_categories' => 'Wszystkie',
			'no_category' => 'Żadna',
			'remember_categories' => 'Pamiętaj otwarte kategorie',
			'unread' => 'Tylko nieprzeczytane',
		),
		'show_fav_unread_help' => 'Stosuje się również do etykiet',
		'sides_close_article' => 'Kliknięcie poza zawartością wiadomości zamyka widok wiadomości',
		'sort' => array(
			'_' => 'Porządek sortowania',
			'newer_first' => 'Najpierw najnowsze',
			'older_first' => 'Najpierw najstarsze',
		),
		'star' => array(
			'when' => 'Mark an article as favourite…',	// TODO
		),
		'sticky_post' => 'Przesuń wiadomość na górę strony po otworzeniu',
		'title' => 'Czytanie',
		'view' => array(
			'default' => 'Domyślny widok',
			'global' => 'Widok globalny',
			'normal' => 'Widok normalny',
			'reader' => 'Widok czytania',
		),
	),
	'sharing' => array(
		'_' => 'Podawanie dalej',
		'add' => 'Dodaj sposób na podanie dalej wiadomości',
		'deprecated' => 'Ta usługa jest przestarzała i zostanie usunięta w <a href="https://freshrss.github.io/FreshRSS/en/users/08_sharing_services.html" title="Dodatkowe informacje znajdują się w dokumentacji" target="_blank">przyszłych wydaniach</a> FreshRSS.',
		'diaspora' => 'Diaspora*',	// IGNORE
		'email' => 'E-mail',
		'facebook' => 'Facebook',	// IGNORE
		'more_information' => 'Więcej informacji',
		'print' => 'Wydruk',
		'raindrop' => 'Raindrop.io',	// IGNORE
		'remove' => 'Usuń sposób na podanie dalej wiadomości',
		'shaarli' => 'Shaarli',	// IGNORE
		'share_name' => 'Wyświetlana nazwa serwisu',
		'share_url' => 'Adres API serwisu',
		'title' => 'Podawanie dalej',
		'twitter' => 'Twitter',	// IGNORE
		'wallabag' => 'wallabag',	// IGNORE
	),
	'shortcut' => array(
		'_' => 'Skróty klawiszowe',
		'article_action' => 'Akcje wiadomości',
		'auto_share' => 'Podaj dalej',
		'auto_share_help' => 'Gdy jest dostępna tylko jedna metoda podawania dalej jest ona od razu wykorzystywana. W pozostałych przypadkach poszczególne metody są dostępne przez wybranie ich numeru.',
		'close_dropdown' => 'Zamknięcie menu',
		'collapse_article' => 'Zwinięcie',
		'first_article' => 'Otworzenie pierwszej wiadomości',
		'focus_search' => 'Przejdź do pola wyszukiwania',
		'global_view' => 'Przełączenie na widok globalny',
		'help' => 'Wyświetlenie dokumentacji',
		'javascript' => 'JavaScript musi być włączony, aby można było wykorzystać skróty klawiszowe',
		'last_article' => 'Otworzenie ostatniej wiadomości',
		'load_more' => 'Załadowanie kolejnych wiadomości',
		'mark_favorite' => 'Zmiana stanu „ulubione”',
		'mark_read' => 'Zmiana stanu „przeczytane”',
		'navigation' => 'Nawigacja',
		'navigation_help' => 'Z wykorzystaniem modyfikatora <kbd>⇧ Shift</kbd> skróty nawigacyjne stosowane są dla kanałów.<br/>Z wykorzystaniem modyfikatora <kbd>Alt ⎇</kbd> skróty nawigacyjne stosowane są dla kategorii.',
		'navigation_no_mod_help' => 'Pozostałe skróty nawigacyjne nie wspierają modyfikatorów.',
		'next_article' => 'Otworzenie następnej wiadomości',
		'next_unread_article' => 'Otwórz następną nieprzeczytaną wiadomość',
		'non_standard' => 'Niektóre klawisze (<kbd>%s</kbd>) mogą nie działać jako skróty.',
		'normal_view' => 'Przełączenie na widok normalny',
		'other_action' => 'Inne akcje',
		'previous_article' => 'Otworzenie poprzedniej wiadomości',
		'reading_view' => 'Przełączenie na widok czytania',
		'rss_view' => 'Otwórz jako kanał RSS',
		'see_on_website' => 'Otwórz wiadomość na pierwotnej stronie',
		'shift_for_all_read' => 'Użycie modyfikatora <kbd>Alt ⎇</kbd> powoduje zmianę wszystkich poprzednich wiadomości<br />Użycie modyfikatora <kbd>⇧ Shift</kbd> powoduje zmianę wszystkich wiadomości',
		'skip_next_article' => 'Przejdź do następnej wiadomości bez otwierania',
		'skip_previous_article' => 'Przejdź do poprzedniej wiadomości bez otwierania',
		'title' => 'Skróty klawiszowe',
		'toggle_media' => 'Odtwarzanie/pauza mediów',
		'user_filter' => 'Przejdź do zapisanych zapytań',
		'user_filter_help' => 'Gdy zapisane jest tylko jedno zapytanie jest ono od razu wykorzystywane. W przeciwnym przypadku zapytania są dostępne przez wybranie ich numeru.',
		'views' => 'Widoki',
	),
	'user' => array(
		'articles_and_size' => '%s wiadomości (%s)',
		'current' => 'Aktualny użytkownik',
		'is_admin' => 'jest administratorem',
		'users' => 'Wszyscy użytkownicy',
	),
);
