<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
* @正體中文化 竹貓星球 <http://phpbb-tw.net/phpbb/>
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> '每個討論區的管理員可以允許或禁止某種附加檔案類型。如果您不確定哪些被允許上傳，那麼請聯繫管理員以求協助。',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> '這個討論區允許上傳甚麼類型的附加檔案？',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> '如果要找到您已上傳附加檔案的列表，那麼前往會員控制台，進而點選「管理附加檔案」連結即可。',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> '我要如何找到所有我已上傳的附加檔案？',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> '附加檔案',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> '訂閱與我的最愛',
	'HELP_FAQ_BLOCK_FORMATTING'	=> '格式和主題類型',
	'HELP_FAQ_BLOCK_FRIENDS'	=> '好友與黑名單',
	'HELP_FAQ_BLOCK_GROUPS'	=> '會員等級和群組',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB 問題',
	'HELP_FAQ_BLOCK_LOGIN'	=> '登入和註冊問題',
	'HELP_FAQ_BLOCK_PMS'	=> '私人訊息',
	'HELP_FAQ_BLOCK_POSTING'	=> '發表文章相關問題',
	'HELP_FAQ_BLOCK_SEARCH'	=> '搜尋討論區',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> '會員偏好與設定',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> '在 phpBB 3.0，我的最愛功能類似於您在瀏覽器中的我的最愛，當主題有更新時，您不會收到提示。而 phpBB 3.1，我的最愛更像是訂閱主題。當我的最愛之主題更新時，您可以收到通知。無論如何，訂閱將會在討論區的版面或主題更新時通知您。我的最愛與訂閱的通知選項，在會員控制台的「討論區偏好設定」中。',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> '我的最愛與訂閱有何不同？',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> '要訂閱特定的版面，只要當您進入某個版面時，點選頁面底部「訂閱版面」的連結。',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> '我要如何訂閱特定的版面？',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> '要取消訂閱，前往您的會員控制台，點選底下的「管理訂閱」連結。',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> '我要如何取消訂閱？',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> '您可以透過點選「主題工具」選單的適當連結，對特定的主題設定我的最愛或訂閱，它的位置在討論主題的頂端或底部。<br />如果您有勾選「當文章回覆時通知我」選項，那麼當您訂閱的主題有回覆時，您會收到通知。',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> '我要如何對特定的主題設定我的最愛或訂閱？',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> '公告通常包含您目前所閱讀版面的重要資訊，無論何時您應該盡可能地閱讀它們。公告將顯示在該版面的每一頁的最頂端。和全域公告一樣，發表公告的權限由管理員授予。',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> '公告是甚麼？',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode 是一種特殊的 HTML 實現方式，能否使用 BBCode 由管理者決定（您也可以在發表文章的過程中停用它）。BBCode 本身和 HTML 風格相似，每個標籤用方括弧 [ 和 ] 而不是 &lt; 和 &gt; 並且這種方式提供更多的顯示控制。要得到更多的訊息請檢視發表文章頁面中的 BBCode 說明。',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'BBCode 是甚麼？',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> '全域公告包含重要的資訊，無論何時您應該盡可能地閱讀它們。它們將顯示在每個版面的最頂端和包含您的會員控制台。發表全域公告的權限由管理員授予。',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> '全域公告是甚麼？',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> '不行。在這個討論區上不能夠使用 HTML 語法發表文章。大部份使用 HTML 語法產生的格式都可以使用 BBCode 語法替代。',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> '我可以使用 HTML 語法嗎？',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> '主題圖示是由發表者選定，它是和主題相關的圖案用以顯示其內容。是否可以使用主題圖示端賴管理員的權限設定。',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> '主題圖示是甚麼？',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> '是的，在您的文章中可以顯示圖片。如果管理員允許，那麼您可以上傳圖檔到討論區上。否則，您必須使用連結去顯示儲存在公開網站上的圖檔，例如：http://www.example.com/my-picture.gif 而不能直接連結到儲存在您的電腦（除非您的電腦是一個公開的網站伺服器）或者是需要授權網站上的圖檔，例如您的 hotmail 或者 yahoo 信箱，或是受密碼保護的網站。要顯示連結的圖檔，請使用 BBCode [img] 標籤。',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> '我能貼圖嗎？',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> '被鎖定的主題，會員無法再做任何的回覆而且它所包含任何的投票都將結束。主題被鎖定的原因有很多，而且只有版主及管理員才有此權限。如果管理員有開放權限的話，那麼您也可以鎖定自己所發表的主題。',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> '鎖定主題是甚麼？',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> '表情符號，是能夠表示心情的小圖案，它是使用一個簡短的代碼產生，例如，:) 表示快樂的，而 :( 表示悲傷的。所有表情符號的列表可以在發文的頁面看到。然而，試著不要過度使用表情符號，因為它們會很快地傳遞一篇難以閱讀的文章而遭版主編輯或移除。管理員也許會設限您在每篇文章中可以使用表情符號的數目。',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> '表情符號是甚麼？',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> '版面上的置頂主題只有顯示在第一頁公告底下。它們通常相當重要，無論何時您應該盡可能地閱讀它們。和全域公告，公告一樣，發表置頂主題的權限由管理員授予。',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> '置頂主題是甚麼？',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> '您可以使用這些列表來組織討論區的其他會員。在您的會員控制台中會列出您新增的好友，方便您快速檢視上線狀態和發送私人訊息。在風格樣板的支援下，您的好友所發表的文章也許會以高亮度顯示。如果您將某個會員加入了黑名單，那麼他們發表的任何文章都將自動隱藏。',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> '好友與黑名單是甚麼？',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> '您可以透過兩種方式增加會員到您的列表。透過瀏覽會員個人資料，那裡有連結可以點選增加。另外，從您的會員控制台，您可以直接輸入會員名稱來增加。您也可以透過同樣的頁面刪除列表中的會員。',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> '我要如何於好友或黑名單中增加/刪除會員？',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> '管理員是擁有控制整個討論區的最高等級會員。他們可以從各個方面控制討論區運作，包括權限設定、封鎖會員、建立會員群組或版主等，這些權限由討論區原始建立者所賦予。他們也可以擁有所有版面的版主全部的權限，同樣由討論區原始建立者所賦予。',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> '管理員是甚麼？',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> '很可能是管理員將不同會員群組的成員設定不同的顏色，以方便區分會員群組。',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> '為何某些會員群組能顯示出不同的顏色？',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> '如果您隸屬於一個會員群組以上，那麼您的預設會員群組會用來顯示自己的會員群組顏色和會員群組等級。管理員也許會授予您在會員控制台中更改預設會員群組的權限。',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> '「預設會員群組」是甚麼？',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> '版主是獨立的會員（或會員群組中的一員），他們日常的工作是照顧版面。他們擁有所管理版面之編輯、刪除、鎖定、解鎖、移動、以及分割主題的權力。一般而言，版主會站在中立立場阻止會員發表離題、廣告或令人厭惡的文章。',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> '版主是甚麼？',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> '這個頁面提供您整個討論區的管理團隊人員列表，包含管理員、版主和其他相關討論區的詳細資料。',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> '「管理團隊」連結是甚麼？',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> '會員群組是管理員易於管理會員的組織。每個會員可以隸屬於多個會員群組，並且每個會員群組可以授予個別的權限。這使得管理員可以同時改變多個會員的權限，像是改變版主的權限，或允許其可以進入某個私密性的版面。',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> '您可以經由會員控制台中的「會員群組」連結去瀏覽所有的會員群組。如果您想要加入其中某個群組那麼您可以直接點選加入。然而，並非所有的群組都是開放的。有些必須經過審核，有些是關閉的，以及有些甚至是隱藏的。如果必須經過審核，那麼該群組的組長也許會詢問您為何要加入該群組。如果您的申請被拒絕，請不要騷擾群組組長；他們將有自己的理由。',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> '我要如何加入一個會員群組？',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> '當會員群組由管理員建立時，通常會指定一個會員群組組長。如果您有興趣建立一個會員群組，那麼請傳送私人訊息給管理員，告訴他們您的想法。',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> '我要如何成為一個會員群組的組長？',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> '會員群組是甚麼？',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> '如果討論區管理員啟用這個選項，那麼所有的使用者都可以使用「聯繫我們」的表單。<br />查詢討論區的成員也可以使用「管理團隊」連結。',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> '我要如何聯繫討論區管理員？',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> '這個軟體由 phpBB Limited 編寫與授權。如果您確信有必要增加的功能，那麼請訪問 <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a> 網站，在那裡您可以票選已有的想法或建議新的功能。',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> '為何沒有我需要的功能？',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> '您可以向任何一位在「管理團隊」列表上的管理員反映。如果沒有獲得回覆，那麼您應該聯繫該網域名稱的擁有者（利用 <a href="http://www.google.com/search?q=whois">whois lookup</a> 查詢）或者，如果這個討論區是運行在免費的伺服器（例如 yahoo、free、fr、f2s、com、...等），那麼請聯繫其管理者或違規管理部門。請注意！phpBB Limited <strong>沒有權力</strong>和義務來管理使用這個討論區的會員行為。不要對 phpBB Limited 詢問<strong>沒有直接關係</strong>到 phpBB.com 網站之任何的法律（服務中斷、連帶責任、誹謗、...等）問題。如果您給 phpBB Limited 寄送<strong>關於任何第三者</strong>使用此軟體的信件，都將可能獲得簡短的聲明或不予回覆。',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> '關於這個討論區上的濫用或法律上的相關事務，我該向誰反映？',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> '這個軟體（未經修改的版本）的開發及釋出，著作版權歸於 <a href="https://www.phpbb.com/">phpBB Limited</a>。遵循 GNU General Public Licence  2 版 (GPL-2.0) 版權宣告，可以自由使用和發佈，參考 <a href="https://www.phpbb.com/about/">About phpBB</a> 以獲得更詳細的資料。',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> '誰寫了這個討論區程式？',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> '如果您在登入時沒有勾選<em>記得我</em>的選項，那麼您登入討論區後只能在一定的時間內保持登入狀態。這樣能防止您的帳號被他人誤用。如果要保持登入狀態，請在登入時勾選<em>記得我</em>。若您在共用的電腦上登入討論區，則不建議您這麼做，例如在圖書館、網咖、電腦教室等。如果您沒有看到這個選項，那麼表示討論區管理員已經關閉了這項功能。',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> '為什麼我會自動登出？',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> '這種情況的發生有許多原因。首先，確認您輸入的會員名稱和密碼是否正確。如果是，請聯聯繫討論區管理員確認您的帳號是否被禁用。也有可能是網站擁有者在後端的組態設定錯誤，而他們需要做修正。',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> '很有可能管理員由於某種原因，停用或刪除了您的帳號。有些討論區會利用每隔一段時間移除從未發文的會員做法來減少資料量。如果是這個原因，那麼請重新註冊並參與更多的討論。',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> '我過去已經註冊（登入）過，但是現在卻無法登入？！',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> '為什麼我不能登入?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> '有可能是討論區管理員已經禁止了註冊，以防止新的訪客申請。或是討論區管理者封鎖了您所連線的 IP 位址或者禁用您想要註冊的會員名稱。請聯繫討論區管理員以獲得協助。',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> '為什麼我不能註冊？',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA，是指 1998 年美國的兒童上線隱私和保護條例。這條法律要求任何有可能收集年齡小於 13 歲的未成年人資訊的網站，必須獲得其父母的同意，或者其他合法監護人的容許。如果您不能確認您的註冊是否得遵守此法律，請聯繫律師以獲得援助。請注意 phpBB Limited 和討論區的擁有者，並不會提供法律諮詢，也不為各種法律事件提供幫助，除非有問題概述，如：「我要與誰聯繫有關與此討論區相關的濫用和或法律問題？」。',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'COPPA 是甚麼？',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '「刪除 Cookies」是指刪除所有在討論區所建立的 Cookies。這些 Cookies 保留您在討論區上的認證和登入狀態。如果它們已經被討論區管理員啟用，Cookies 還可以提供如讀出跟踪的功能。假如您有登入或登出討論區的問題，那麼刪除討論區 Cookies 或許是有幫助的。',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> '「刪除 Cookies」是做什麼用？',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> '不必慌張！當您忘記了自己的密碼，可以很容易重新設定。只要您到登入頁面，點選<em>我忘記了我的密碼</em>，依照說明的步驟完成，您就可以很快地獲得新的隨機密碼。<br />但是，如果您不能夠重設您的密碼，請聯繫討論區管理員。',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> '我忘記了我的密碼！',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> '您不一定要註冊，這要看管理員是否設定您需要註冊後才能發表文章。但是，註冊將給您更多不同於訪客的權限，例如設定頭像、收發私人訊息、收發 電子郵件 以及申請加入會員群組、...等。註冊只需要花您少許時間，所以建議您註冊。',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> '首先，確認您輸入的會員名稱和密碼是否正確。如果是，那麼可能會有兩個原因。第一：如果討論區支援 COPPA，而且您在註冊時指定自己小於 13 歲，那麼您必須先按照您收到的提示完成必要的步驟。第二個原因：很可能是因為您的帳號尚未啟用。某些討論區需要新註冊會員在登入前由自己或由管理員啟用帳號。當您完成註冊時討論區將告訴您是否需要啟用您的帳號。如果您收到了電子郵件，那麼就按照其中的步驟完成啟用，如果您沒有收到電子郵件，那麼您註冊的電子郵件位址可能不正確，或者是被當作是廣告信而過濾掉。如果您確信電子郵件位址沒錯，那麼請聯繫管理員。',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> '我已註冊但是無法登入！',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> '為什麼我需要註冊？',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> '這有三種原因：您尚未註冊或尚未登入，管理員禁止了整個討論區使用私人訊息，或者管理員取消了您使用私人訊息權限。如果屬於最後一種情況，請連絡管理員以獲得更多的資訊。',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> '我不能發送私人訊息！',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> '聽到那種情況我們感到抱歉。這個討論區的電子郵件表單特徵包含可以測試與追蹤寄件者的保護資訊，您應該將它完全地轉寄給管理員，其中包含寄件者的詳細資料這是非常重要的，管理員將可依此採取適當的行動。',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> '我收到了這個討論區裡的會員發送的廣告或騷擾之電子郵件！',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> '您可以在會員控制台中透過訊息規則以自動刪除來自某個會員的私訊。如果您收到某位特定會員的騷擾訊息，那麼請向管理員檢舉，他們有權力取消他發送私人訊息的權限。',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> '我老是收到不想要的私人訊息！',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> '當您在瀏覽文章時，點選「推文」連結，可以將自己所發表的主題 bump（推文）到該版面的第一頁最上頭。如果您看不到這個連結，那麼表示這個功能已經被停用，或者是尚未到達可推文的間隔時間。您也可以簡單地透過回覆主題來推文。無論您怎麼做，請確實遵守討論區的規則。',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> '我該如何 bump（推文）自己的主題？',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> '在版面上建立新的主題，請點選「發表主題」。要回覆某個主題，請點選「回覆文章」。您需要註冊之後才能發表文章，您所擁有的權限列表顯示在版面和文章頁面的下方（比如<em>您可以在這個版面上發表主題、您可以在這個版面上傳附加檔案、...等</em>這樣的列表）。',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> '我該如何建立新的主題或回覆文章？',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> '這允許您保存草稿而得以在日後完成與發表。重新裝載文章的功能請到會員控制台搜尋。',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> '在發表主題的時候顯示的「儲存」按鈕是做什麼用的？',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> '除非您是管理員或版主，否則您只能編輯您自己的文章。您可以點選<em>編輯</em>按鈕編輯一篇文章（有時必須在發表後的一段時間內）。如果有人已經回覆過這篇文章，您修改後會在文章的下方留下一段編輯過後的記錄，這將列出您修改的次數和時間。在沒有回覆的情況下不會顯示，在管理員和版主修改的情況下也可能不會顯示，除非他們決定留下一段記錄說明他們編輯文章的原因。請注意！普通會員無法刪除已經有人回覆的文章。',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> '我該如何編輯或刪除一篇文章？',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> '一些版面是限制訪問的。要檢視、閱讀、發表或執行其他的動作，您需要特別的權限。請聯繫版主或管理員允許您使用。',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> '為什麼我不能訪問這個版面？',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> '上傳附加檔案的功能，可以通過版面/會員/會員群組來設定。管理員可能不允許在某些版面上傳附加檔案，或者只允許討論區管理人員在版面上發表附加檔案。如果您不確定為什麼上傳附加檔案，請與管理員聯繫。',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> '為什麼我不能上傳附加檔案？',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> '投票選項數量的限制由管理員設定。如果您覺得需要增加允許的投票選項數量，那麼請聯繫管理員。',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> '為什麼我不能增加更多的投票選項？',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> '您可以很容易地建立一個投票，當您發表或者修改文章的時候，如果您有相應的權限，您可以在頁面下方看到一個「建立票選活動」的標籤。您需要為投票輸入一個票選問題和至少兩個票選項目。您可以設定投票的時間限制（0 表示沒有時間限制）。對於投票的選項數目，討論區會有一個限制，這由管理員設定決定。',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> '我該如何建立一個投票？',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> '投票只能由發表者，版主，或管理員修改。要編輯一個投票，請點選編輯該主題的第一篇文章；投票的相關設定總是在此。如果還沒有人參與投票，會員可以刪除投票或編輯投票選項，但是一旦已經有人參與投票，就只有版主或管理員可以編輯或刪除它。這是為了防止在投票中途修改投票選項。',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> '我該如何編輯或刪除一個投票？',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> '管理員可能設定了討論區的文章必須通過審核才能發表。這也可能是因為您被管理員放入了需要審核文章的會員列表。有關詳細信息，請與管理員聯繫。',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> '為什麼我的文章需要審核後才能發表？',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> '如果管理員允許檢舉，請在您想檢舉的文章上點選檢舉的按鈕，而後按照提示的步驟完成檢舉。',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> '我該如何向版主檢舉文章？',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> '您必須先建立一個簽名檔後才能在文章中增加，建立簽名檔在您的個人資料管理台。當您建立好簽名檔之後，請在發表文章的頁面中勾選<em>附上簽名</em>來增加簽名。您也可以在會員控制台的「偏好設定」選項中，設定顯示文章中的個人簽名，這樣每次發表文章時就會自動勾選相應選項。',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> '我該如何在我的文章後增加簽名？',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> '每個管理員對自己的討論區都有一套規則。如果您違反了規則，那麼您也許會收到一個警告。請注意！這是討論區管理人員的決定，phpBB Limited 官方和這些警告無關。如果您不確知為何會收到一個警告，那麼請聯繫討論區管理員。',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> '為什麼我收到了一個警告？',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> '您的搜尋結果數量太多以至於網站伺服器處理不來。請使用「進階搜尋」以及指定更明確的關鍵詞和相關的版面。',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> '我的搜尋結果為何是空白頁！？',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> '在首頁，版面或文章頁面的搜尋欄中輸入關鍵字就可以搜尋。點選每頁頁首的「進階搜尋」連結將可以做進一步的搜尋設定。',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> '我要如何搜尋版面文章？',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> '瀏覽「會員列表」頁面並點選「搜尋會員」連結。',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> '我要如何搜尋某位會員？',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> '您的搜尋可能太模糊，包含了許多未被 phpBB 系統建立索引的共用詞。您可以輸入更明確的關鍵詞和更多有效的選項來進行進階搜尋。',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> '我的搜尋為何沒有結果？',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> '您自己的文章可以透過點選會員控制台或瀏覽個人資料中「顯示您的文章」連結，或是點選討論區上方「快速連結」以獲得。如果要搜尋自己發表的主題，那麼請使用進階搜尋，並填入適當的選項。',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> '我要如何搜尋自己發表的文章和主題？',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> '在瀏覽文章時，可能會有兩個圖像和會員名稱一塊顯示。第一個是和您的等級相關的圖像，一般以星星、方塊或小圓點的形式，顯示您在這個討論區的地位，或者您已經發表了多少篇的文章。第二個通常是一個更大的圖像，這是會員的頭像，一般是具有獨特的或個人的表徵。',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> '在會員控制台的「個人資料」底下，您可以使用底下四種方法之一新增頭像：Gravatar、系統相簿、外部連結或電腦上傳。它是由討論區管理員啟用頭像，並選擇其中可提供頭像的方式。如果您無法使用頭像，請聯繫討論區管理員。',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> '我要如何顯示頭像？',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> '我如何才能在自己的會員名稱下顯示圖像呢？',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> '您的所有設定（如果您是註冊會員）都儲存在資料庫中。要修改它們，請訪問會員控制台；點選討論區上方的會員名稱，會找到這個連結。您可以在會員控制台中更改您的各種偏好設定。',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> '我要如何更改我的設定？',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> '很抱歉！只有註冊會員才能透過討論區發送電子郵件給其他會員（如果管理員啟用了電子郵件功能）。這主要是為了防止匿名使用者利用電子郵件系統發送垃圾郵件。',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> '當我點選會員的電子郵件連結時為什麼要讓我登入？',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> '在會員控制台的「偏好設定」底下，您可以找到<em>隱藏我的線上狀態</em>選項，啟用這個選項，那麼將只有管理員、版主和您自己能看到您的上線狀態。您將會顯示為隱形會員。',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> '我要如何讓自己的會員名稱不出現在線上會員列表裡頭？',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> '這可能是沒有您所用語言的語系檔，或者雖然有但是這個討論區的管理員並未安裝它。請試著詢問討論區的管理員是否可以安裝這種語言。如果確實沒有這種語言的語系檔，您可以參與我們的翻譯工作，建立您的語系檔。更多的相關訊息可以在 <a href="https://www.phpbb.com/">phpBB</a> 網站上找到。',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> '我的語系在列表中找不到！',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> '等級顯示在您的會員名稱下方，表明您發表的文章數或鑒定了某些特殊會員，例如：版主與管理員。一般您不能直接更改您的等級，它們是由討論區管理員設定的。請不要為了提高等級而濫用討論區來發表沒有意義的文章。這種情況下版主和管理員反而會大量刪除您的文章而降低您的等級。',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> '我的等級是甚麼？要如何更改？',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> '如果您確認您已經設定了正確的時區而時間依然錯誤，這很有可能是因為儲存在伺服器的時間是不正確的。討論區並未對標準時間和日光節約時間之間的變更做周密的處理，所以在夏季的月份裡時間有可能會和當地時間有一個小時的時間差。',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> '我更改了時區，但是時間還是顯示錯誤！',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> '一般很少出現伺服器時間不準的情況，您看到的時間不準有可能是因為討論區和您處於不同的時區。如果是這種原因，您可以在個人資料中更改時區，例如倫敦、巴黎、紐約、雪梨、...等等。請注意，更改時區等操作一般只有註冊會員才可以進行。如果您還未註冊，就請盡快註冊吧！',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> '顯示的時間不正確！',
));
