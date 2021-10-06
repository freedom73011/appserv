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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTION'				=> '動作',
	'ACTION_NOTE'			=> '動作/記錄',
	'ADD_FEEDBACK'			=> '增加意見/反映',
	'ADD_FEEDBACK_EXPLAIN'	=> '如果您要對此會員提出一個檢舉，請填寫下列表格。只可使用純文字，不允許使用 HTML、BBCode 等語法。',
	'ADD_WARNING'			=> '增加警告',
	'ADD_WARNING_EXPLAIN'	=> '如果您要對此會員發出一個警告，請填寫下列表格。只可使用純文字，不允許使用 HTML、BBCode 等語法。',
	'ALL_ENTRIES'			=> '所有項目',
	'ALL_NOTES_DELETED'		=> '所有會員的意見/反映已經刪除成功',
	'ALL_REPORTS'			=> '所有檢舉',
	'ALREADY_REPORTED'		=> '這篇文章已經被檢舉過了。',
	'ALREADY_REPORTED_PM'	=> '這則私訊已經被檢舉過了。',
	'ALREADY_WARNED'		=> '這篇文章已經被警告過了。',
	'APPROVE'				=> '核准',
	'APPROVE_POST'			=> '核准這篇文章',
	'APPROVE_POST_CONFIRM'	=> '您確定要核准這篇文章嗎？',
	'APPROVE_POSTS'			=> '核准這些文章',
	'APPROVE_POSTS_CONFIRM'	=> '您確定要核准這些文章嗎？',
	'APPROVE_TOPIC'			=> '核准這個主題',
	'APPROVE_TOPIC_CONFIRM'	=> '您確定要核准這個主題嗎？',
	'APPROVE_TOPICS'		=> '核准這些主題',
	'APPROVE_TOPICS_CONFIRM'=> '您確定要核准這些主題嗎？',

	'CANNOT_MOVE_SAME_FORUM'=> '您不能將主題移動到原來的版面內。',
	'CANNOT_WARN_ANONYMOUS'	=> '您不能警告尚未註冊的訪客。',
	'CANNOT_WARN_SELF'		=> '您不能警告您自己。',
	'CAN_LEAVE_BLANK'		=> '這裡可以不填寫。',
	'CHANGE_POSTER'			=> '改變文章的發表人',
	'CLOSE_PM_REPORT'		=> 'PM 檢舉結案',
	'CLOSE_PM_REPORT_CONFIRM'	=> '您確定要將這個 PM 檢舉結案？',
	'CLOSE_PM_REPORTS'		=> 'PM 檢舉結案',
	'CLOSE_PM_REPORTS_CONFIRM'	=> '您確定要將這些 PM 檢舉結案？',
	'CLOSE_REPORT'			=> '檢舉結案',
	'CLOSE_REPORT_CONFIRM'	=> '您確定要將這個檢舉結案嗎？',
	'CLOSE_REPORTS'			=> '檢舉結案',
	'CLOSE_REPORTS_CONFIRM'	=> '您確定要將這些檢舉結案嗎？',

	'DELETE_PM_REPORT'			=> '刪除 PM 檢舉',
	'DELETE_PM_REPORT_CONFIRM'	=> '您確定要刪除這個 PM 檢舉嗎？',
	'DELETE_PM_REPORTS'			=> '刪除 PM 檢舉',
	'DELETE_PM_REPORTS_CONFIRM'	=> '您確定要刪除這些 PM 檢舉嗎？',
	'DELETE_POSTS'				=> '刪除文章',
	'DELETE_REPORT'				=> '刪除檢舉',
	'DELETE_REPORT_CONFIRM'		=> '您確定要刪除這個檢舉嗎？',
	'DELETE_REPORTS'			=> '刪除檢舉',
	'DELETE_REPORTS_CONFIRM'	=> '您確定要刪除這些檢舉嗎？',
	'DELETE_SHADOW_TOPIC'		=> '在舊的版面上刪除已移動的主題',
	'DELETE_TOPICS'				=> '刪除這些主題',
	'DISAPPROVE'				=> '拒絕',
	'DISAPPROVE_REASON'			=> '拒絕的理由',
	'DISAPPROVE_POST'			=> '拒絕這篇文章',
	'DISAPPROVE_POST_CONFIRM'	=> '您確定要拒絕這篇文章嗎？',
	'DISAPPROVE_POSTS'			=> '拒絕這些文章',
	'DISAPPROVE_POSTS_CONFIRM'	=> '您確定要拒絕這些文章嗎？',
	'DISPLAY_LOG'				=> '顯示之前的記錄',
	'DISPLAY_OPTIONS'			=> '顯示選項',

	'EMPTY_REPORT'					=> '選擇這個理由時您必須輸入描述。',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> '請注意！一個或多個主題因為沒有任何內容已經從資料庫中刪除。',

	'FEEDBACK'				=> '意見/反應',
	'FORK'					=> '複製',
	'FORK_TOPIC'			=> '複製主題',
	'FORK_TOPIC_CONFIRM'	=> '您確定要複製這個主題嗎？',
	'FORK_TOPICS'			=> '複製這些主題',
	'FORK_TOPICS_CONFIRM'	=> '您確定要複製這些主題嗎？',
	'FORUM_DESC'			=> '版面簡介',
	'FORUM_NAME'			=> '版面名稱',
	'FORUM_NOT_EXIST'		=> '您選擇的版面不存在。',
	'FORUM_NOT_POSTABLE'	=> '您選擇的版面不能發表文章。',
	'FORUM_STATUS'			=> '版面狀態',
	'FORUM_STYLE'			=> '版面風格',

	'GLOBAL_ANNOUNCEMENT'	=> '全域公告',

	'IP_INFO'				=> 'IP 位址資訊',
	'IPS_POSTED_FROM'		=> '這個使用者發表文章時使用的 IP 位址',

	'LATEST_LOGS'				=> '最近的 5 個動作記錄',
	'LATEST_REPORTED'			=> '最新的 5 個檢舉',
	'LATEST_REPORTED_PMS'		=> '最新的 5 個 PM 檢舉',
	'LATEST_UNAPPROVED'			=> '最新 5 篇等待核准的文章',
	'LATEST_WARNING_TIME'		=> '最近發出的警告',
	'LATEST_WARNINGS'			=> '最近的 5 個警告記錄',
	'LEAVE_SHADOW'				=> '在舊的版面上留下已移動的主題',
	'LIST_REPORTS'				=> array(
		1	=> '%d 個檢舉',
	),
	'LOCK'						=> '鎖定',
	'LOCK_POST_POST'			=> '鎖定這篇文章',
	'LOCK_POST_POST_CONFIRM'	=> '您確定要禁止對這篇文章的編輯嗎？',
	'LOCK_POST_POSTS'			=> '鎖定這些文章',
	'LOCK_POST_POSTS_CONFIRM'	=> '您確定要禁止對這些文章的編輯嗎？',
	'LOCK_TOPIC_CONFIRM'		=> '您確定要鎖定這個主題嗎？',
	'LOCK_TOPICS'				=> '鎖定這些主題',
	'LOCK_TOPICS_CONFIRM'		=> '您確定要鎖定這些主題嗎？',
	'LOGS_CURRENT_TOPIC'		=> '目前正在檢視的記錄:',
	'LOGIN_EXPLAIN_MCP'			=> '您必須登入後才能管理這個版面。',
	'LOGVIEW_VIEWPOST'			=> '檢視文章',
	'LOGVIEW_VIEWTOPIC'			=> '檢視主題',
	'LOGVIEW_VIEWLOGS'			=> '檢視主題記錄',
	'LOGVIEW_VIEWFORUM'			=> '檢視版面',
	'LOOKUP_ALL'				=> '查閱所有 IP 位址',
	'LOOKUP_IP'					=> '查閱 IP 位址',

	'MARKED_NOTES_DELETED'		=> '選取的意見/反映已經刪除成功。',

	'MCP_ADD'						=> '增加一個警告',

	'MCP_BAN'					=> '封鎖會員',
	'MCP_BAN_EMAILS'			=> '封鎖電子郵件位址',
	'MCP_BAN_IPS'				=> '封鎖 IP 位址',
	'MCP_BAN_USERNAMES'			=> '封鎖會員名稱',

	'MCP_LOGS'						=> '版主記錄',
	'MCP_LOGS_FRONT'				=> '第一頁',
	'MCP_LOGS_FORUM_VIEW'			=> '版面記錄',
	'MCP_LOGS_TOPIC_VIEW'			=> '主題記錄',

	'MCP_MAIN'						=> '主頁',
	'MCP_MAIN_FORUM_VIEW'			=> '版面概觀',
	'MCP_MAIN_FRONT'				=> '第一頁',
	'MCP_MAIN_POST_DETAILS'			=> '文章詳細內容',
	'MCP_MAIN_TOPIC_VIEW'			=> '主題相關記錄',
	'MCP_MAKE_ANNOUNCEMENT'			=> '改變為「公告」',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> '您確定要將這個主題改變為「公告」嗎？',
	'MCP_MAKE_ANNOUNCEMENTS'		=> '改變為「公告」',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> '您確定要將這些主題改變為「公告」嗎？',
	'MCP_MAKE_GLOBAL'				=> '改變為「全域公告」',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> '您確定要將這個主題改變為「全域公告」嗎？',
	'MCP_MAKE_GLOBALS'				=> '改變為「全域公告」',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> '您確定要將這些主題改變為「全域公告」嗎？',
	'MCP_MAKE_STICKY'				=> '改變為「置頂」',
	'MCP_MAKE_STICKY_CONFIRM'		=> '您確定要將這個主題改變為「置頂」嗎？',
	'MCP_MAKE_STICKIES'				=> '改變為「置頂」',
	'MCP_MAKE_STICKIES_CONFIRM'		=> '您確定要將這些主題改變為「置頂」嗎？',
	'MCP_MAKE_NORMAL'				=> '改變為「普通主題」',
	'MCP_MAKE_NORMAL_CONFIRM'		=> '您確定要將這個主題改變為「普通主題」嗎？',
	'MCP_MAKE_NORMALS'				=> '改變為「普通主題」',
	'MCP_MAKE_NORMALS_CONFIRM'		=> '您確定要將這些主題改變為「普通主題」嗎？',

	'MCP_NOTES'						=> '會員記錄',
	'MCP_NOTES_FRONT'				=> '第一頁',
	'MCP_NOTES_USER'				=> '會員細節',

	'MCP_POST_REPORTS'				=> '這個文章的相關檢舉',

	'MCP_PM_REPORTS'				=> '被檢舉 PM',
	'MCP_PM_REPORT_DETAILS'			=> 'PM 檢舉細節',
	'MCP_PM_REPORTS_CLOSED'			=> '已結案 PM 檢舉',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> '這是所有已經解決的 PM 檢舉之列表。',
	'MCP_PM_REPORTS_OPEN'			=> '未處理 PM 檢舉',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> '這是所有尚未處理的 PM 檢舉之列表。',

	'MCP_REPORTS'					=> '被檢舉訊息',
	'MCP_REPORT_DETAILS'			=> '檢舉細節',
	'MCP_REPORTS_CLOSED'			=> '已結案的檢舉',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> '這是所有已經解決的檢舉文章之列表。',
	'MCP_REPORTS_OPEN'				=> '未處理的檢舉',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> '這是所有尚未處理的檢舉文章之列表。',

	'MCP_QUEUE'                        => '等待審核',
	'MCP_QUEUE_APPROVE_DETAILS'            => '核准細節',
	'MCP_QUEUE_UNAPPROVED_POSTS'         => '等待核准的文章',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'   => '這個列表的所有文章，需要經過核准後，使用者才能看見。',
	'MCP_QUEUE_UNAPPROVED_TOPICS'         => '等待核准的主題',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'   => '這個列表的所有主題，需要經過核准後，使用者才能看見。',
	'MCP_QUEUE_DELETED_POSTS'				=> '已刪除的文章',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> '這是所有的軟刪除文章之列表。您可以從此頁面恢復或永久刪除它們。',
	'MCP_QUEUE_DELETED_TOPICS'				=> '已刪除的主題',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> '這是所有的軟刪除主題之列表。這是所有的軟刪除主題之列表。您可以從此頁面恢復或永久刪除它們。',

	'MCP_VIEW_USER'			=> '檢視特定會員的警告',

	'MCP_WARN'				=> '警告記錄',
	'MCP_WARN_FRONT'		=> '管理首頁',
	'MCP_WARN_LIST'			=> '警告列表',
	'MCP_WARN_POST'			=> '警告特定文章',
	'MCP_WARN_USER'			=> '警告會員',

	'MERGE_POSTS_CONFIRM'	=> '您確定要合併這些文章嗎？',
	'MERGE_TOPIC_EXPLAIN'	=> '您可以使用下列表格把選擇的文章合併到另一個主題中。這些文章將自主題中分割，以及合併到其他的主題中。這些文章將不會經過重新排序，就像這些文章由會員們發表在新主題一樣的方式呈現。<br />請輸入目標主題的識別編號 (ID) 或是點選「選擇主題」來搜尋您想要的主題。',
	'MERGE_TOPIC_ID'		=> '目標主題的識別編號 (ID)',
	'MERGE_TOPICS'			=> '合併主題',
	'MERGE_TOPICS_CONFIRM'	=> '您確定要合併這些主題嗎？',
	'MODERATE_FORUM'		=> '管理版面',
	'MODERATE_TOPIC'		=> '管理主題',
	'MODERATE_POST'			=> '管理文章',
	'MOD_OPTIONS'			=> '版主選項',
	'MORE_INFO'				=> '更多資訊',
	'MOST_WARNINGS'			=> '警告次數最多的會員',
	'MOVE_TOPIC_CONFIRM'	=> '您確定要將這個主題移動到新版面嗎？',
	'MOVE_TOPICS'			=> '移動選擇的主題',
	'MOVE_TOPICS_CONFIRM'	=> '您確定要將這些主題移動到新版面嗎？',

	'NOTIFY_POSTER_APPROVAL'		=> '通知發表人文章已核准的訊息嗎？',
	'NOTIFY_POSTER_DISAPPROVAL'		=> '通知發表人文章未核准的訊息嗎？',
	'NOTIFY_USER_WARN'				=> '通知會員遭到警告的訊息嗎？',
	'NOT_MODERATOR'					=> '您不是這個版面的版主。',
	'NO_DESTINATION_FORUM'			=> '請選擇一個目標版面。',
	'NO_DESTINATION_FORUM_FOUND'	=> '沒有可用的目標版面。',
	'NO_ENTRIES'					=> '沒有任何記錄。',
	'NO_FEEDBACK'					=> '沒有關於這名會員的意見/反應。',
	'NO_FINAL_TOPIC_SELECTED'		=> '您必須為合併文章選擇一個目標主題。',
	'NO_MATCHES_FOUND'				=> '沒有找到符合的結果。',
	'NO_POST'						=> '您必須選擇一個文章做為警告會員的依據。',
	'NO_POST_REPORT'				=> '這個文章沒有被檢舉過。',
	'NO_POST_SELECTED'				=> '您必須選擇至少一篇文章來完成這個動作。',
	'NO_POSTS_DELETED'				=> '沒有已刪除的文章',
	'NO_POSTS_QUEUE'				=> '沒有需要審核的文章。',
	'NO_REASON_DISAPPROVAL'			=> '請提供一個拒絕的理由。',
	'NO_REPORT'						=> '沒有找到檢舉',
	'NO_REPORTS'					=> '沒有找到檢舉',
	'NO_REPORT_SELECTED'			=> '您必須選擇至少一個檢舉來完成這個動作。',
	'NO_TOPIC_ICON'					=> '無',
	'NO_TOPIC_SELECTED'				=> '您必須選擇至少一個主題來完成這個動作。',
	'NO_TOPICS_DELETED'				=> '沒有已刪除的主題',
	'NO_TOPICS_QUEUE'				=> '沒有需要審核的主題。',

	'ONLY_TOPIC'			=> '只顯示主題「%s」',
	'OTHER_USERS'			=> '其他使用這個 IP 位址發表文章的會員',

	'QUICKMOD_ACTION_NOT_ALLOWED' => "%s 不允許作為 quickmod",

	'PM_REPORT_CLOSED_SUCCESS'	=> '選擇的 PM 檢舉已經結案成功。',
	'PM_REPORT_DELETED_SUCCESS'	=> '選擇的 PM 檢舉已經刪除成功。',
	'PM_REPORTED_SUCCESS'		=> '這 PM 已被檢舉成功。',
	'PM_REPORTS_CLOSED_SUCCESS'	=> '選擇的 PM 檢舉已經結案成功。',
	'PM_REPORTS_DELETED_SUCCESS'=> '選擇的 PM 檢舉已經刪除成功。',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> '沒有 PM 檢舉需要處理。',
		1	=> '總共有 <strong>%d</strong> 個 PM 檢舉需要處理。',
	),
	'PM_REPORT_DETAILS'			=> 'PM 檢舉細節',
	'POSTER'					=> '發表人',
	'POSTS_APPROVED_SUCCESS'	=> '選擇的文章已經核准成功。',
	'POSTS_DELETED_SUCCESS'		=> '選擇的文章已經刪除成功。',
	'POSTS_DISAPPROVED_SUCCESS'	=> '選擇的文章已經拒絕成功。',
	'POSTS_LOCKED_SUCCESS'		=> '選擇的文章已經鎖定成功。',
	'POSTS_MERGED_SUCCESS'		=> '選擇的文章已經合併成功。',
	'POSTS_PER_PAGE'			=> '每頁顯示文章數',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(設定 0 來檢視所有文章。)',
	'POSTS_RESTORED_SUCCESS'	=> '選擇的文章已經恢復成功。',
	'POSTS_UNLOCKED_SUCCESS'	=> '選擇的文章已經解除鎖定成功。',
	'POST_APPROVED_SUCCESS'		=> '這篇文章已經核准成功。',
	'POST_DELETED_SUCCESS'		=> '這篇文章已經刪除成功。',
	'POST_DISAPPROVED_SUCCESS'	=> '這篇文章已經拒絕成功。',
	'POST_LOCKED_SUCCESS'		=> '這篇文章已經鎖定成功。',
	'POST_NOT_EXIST'			=> '您所尋找的文章不存在。',
	'POST_REPORTED_SUCCESS'		=> '這篇文章已經檢舉成功。',
	'POST_RESTORED_SUCCESS'		=> '這篇的文章已經恢復成功。',
	'POST_UNLOCKED_SUCCESS'		=> '這篇文章已經解除鎖定成功。',

	'READ_USERNOTES'			=> '會員記錄',
	'READ_WARNINGS'				=> '會員警告',
	'REPORTER'					=> '檢舉人',
	'REPORTED'					=> '檢舉',
	'REPORTED_BY'				=> '檢舉人',
	'REPORTED_ON_DATE'			=> '檢舉於',
	'REPORTS_CLOSED_SUCCESS'	=> '選擇的檢舉已經結案成功。',
	'REPORTS_DELETED_SUCCESS'	=> '選擇的檢舉已經刪除成功。',
	'REPORTS_TOTAL'				=> array(
		0	=> '沒有檢舉需要處理。',
		1	=> '總共有 <strong>%d</strong> 個檢舉需要處理。',
	),
	'REPORT_CLOSED'				=> '這個檢舉已經結案。',
	'REPORT_CLOSED_SUCCESS'		=> '選擇的檢舉已經結案成功。',
	'REPORT_DELETED_SUCCESS'	=> '選擇的檢舉已經刪除成功。',
	'REPORT_DETAILS'			=> '檢舉詳細內容',
	'REPORT_MESSAGE'			=> '檢舉這個文章內容',
	'REPORT_MESSAGE_EXPLAIN'	=> '使用這個表格來檢舉已選擇的 PM。檢舉一般僅用於該訊息違反討論區規則。<strong>檢舉 PM 將使得它的內容讓所有的版主看見。</strong>',
	'REPORT_NOTIFY'				=> '通知我',
	'REPORT_NOTIFY_EXPLAIN'		=> '當我的檢舉被處理後通知我。',
	'REPORT_POST_EXPLAIN'		=> '您可以使用這個表格來檢舉違反規則的文章。請勿濫用此項功能。',
	'REPORT_REASON'				=> '檢舉理由',
	'REPORT_TIME'				=> '檢舉時間',
	'RESTORE'					=> '恢復',
	'RESTORE_POST'				=> '恢復文章',
	'RESTORE_POST_CONFIRM'		=> '您確定要恢復這篇文章嗎？',
	'RESTORE_POSTS'				=> '恢復文章',
	'RESTORE_POSTS_CONFIRM'		=> '您確定要恢復這些文章嗎？',
	'RESTORE_TOPIC'				=> '恢復主題',
	'RESTORE_TOPIC_CONFIRM'		=> '您確定要恢復這個主題嗎？',
	'RESTORE_TOPICS'			=> '恢復主題',
	'RESTORE_TOPICS_CONFIRM'	=> '您確定要恢復這些主題嗎？',
	'RESYNC'					=> '重整對應資料',
	'RETURN_MESSAGE'			=> '%s回到私人訊息%s',
	'RETURN_NEW_FORUM'			=> '%s前往新的版面%s',
	'RETURN_NEW_TOPIC'			=> '%s前往新的主題%s',
	'RETURN_PM'					=> '%s回到私訊%s',
	'RETURN_POST'				=> '%s回到文章%s',
	'RETURN_QUEUE'				=> '%s回到審核%s',
	'RETURN_REPORTS'			=> '%s回到檢舉%s',
	'RETURN_TOPIC_SIMPLE'		=> '%s回到主題%s',

	'SEARCH_POSTS_BY_USER'				=> '搜尋文章發表人',
	'SELECT_ACTION'						=> '選擇需要的動作',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> '請選擇您希望顯示全域公告的版面。',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> '至少一個選擇的主題是全域公告。請選擇您希望這些全域公告出現的版面。',
	'SELECT_MERGE'						=> '選擇合併',
	'SELECT_TOPICS_FROM'				=> '選擇主題位置',
	'SELECT_TOPIC'						=> '選擇主題',
	'SELECT_USER'						=> '選擇會員',
	'SORT_ACTION'						=> '動作紀錄',
	'SORT_DATE'							=> '日期',
	'SORT_IP'							=> 'IP 位址',
	'SORT_WARNINGS'						=> '警告',
	'SPLIT_AFTER'						=> '從選擇的文章之後分割主題',
	'SPLIT_FORUM'						=> '新主題的版面',
	'SPLIT_POSTS'						=> '分割選擇的文章',
	'SPLIT_SUBJECT'						=> '新的主題',
	'SPLIT_TOPIC_ALL'					=> '把選擇的文章分割成新主題',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> '您確定要把選擇的文章從原來的主題中分割出來嗎？',
	'SPLIT_TOPIC_BEYOND'				=> '從選擇的文章開始分割主題',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> '您確定要把選擇的文章與之後的所有文章從原來的主題中分割出來嗎？',
	'SPLIT_TOPIC_EXPLAIN'				=> '您可以使用這個表格把主題分割為二，您可以選擇要分割的文章或是從選擇的文章開始分割。',

	'THIS_PM_IP'				=> '這個私人訊息的 IP 位址',
	'THIS_POST_IP'				=> '這篇文章的 IP 位址',
	'TOPICS_APPROVED_SUCCESS'	=> '選擇的主題已經核准成功。',
	'TOPICS_DELETED_SUCCESS'	=> '選擇的主題已經刪除成功。',
	'TOPICS_DISAPPROVED_SUCCESS'=> '選擇的主題已經拒絕成功。',
	'TOPICS_FORKED_SUCCESS'		=> '選擇的主題已經複製成功。',
	'TOPICS_LOCKED_SUCCESS'		=> '選擇的主題已經鎖定成功。',
	'TOPICS_MOVED_SUCCESS'		=> '選擇的主題已經移動成功。',
	'TOPICS_RESTORED_SUCCESS'	=> '選擇的主題已經恢復成功。',
	'TOPICS_RESYNC_SUCCESS'		=> '選擇的主題已經重整對應成功。',
	'TOPICS_TYPE_CHANGED'		=> '選擇的主題已經改變主題類型成功。',
	'TOPICS_UNLOCKED_SUCCESS'	=> '選擇的主題已經解除鎖定成功。',
	'TOPIC_APPROVED_SUCCESS'	=> '這個主題已經核准成功。',
	'TOPIC_DELETED_SUCCESS'		=> '這個主題已經刪除成功。',
	'TOPIC_DISAPPROVED_SUCCESS'	=> '這個主題已經拒絕成功。',
	'TOPIC_FORKED_SUCCESS'		=> '這個主題已經複製成功。',
	'TOPIC_LOCKED_SUCCESS'		=> '這個主題已經鎖定成功。',
	'TOPIC_MOVED_SUCCESS'		=> '這個主題已經移動成功。',
	'TOPIC_NOT_EXIST'			=> '您所尋找的主題不存在。',
	'TOPIC_RESTORED_SUCCESS'	=> '這個主題已經恢復成功。',
	'TOPIC_RESYNC_SUCCESS'		=> '這個主題已經重整對應成功。',
	'TOPIC_SPLIT_SUCCESS'		=> '這個主題已經分割成功。',
	'TOPIC_TIME'				=> '發表時間',
	'TOPIC_TYPE_CHANGED'		=> '這個主題已經改變主題類型成功。',
	'TOPIC_UNLOCKED_SUCCESS'	=> '這個主題已經解除鎖定成功。',
	'TOTAL_WARNINGS'			=> '警告總數',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> '沒有等待審核的文章。',
		1	=> '總共有 <strong>%d</strong> 篇文章等待審核。',
	),
	'UNLOCK'						=> '解除鎖定',
	'UNLOCK_POST'					=> '解除文章鎖定',
	'UNLOCK_POST_EXPLAIN'			=> '允許編輯',
	'UNLOCK_POST_POST'				=> '解除文章鎖定',
	'UNLOCK_POST_POST_CONFIRM'		=> '您確定要允許編輯這篇文章嗎？',
	'UNLOCK_POST_POSTS'				=> '解除選擇的文章鎖定',
	'UNLOCK_POST_POSTS_CONFIRM'		=> '您確定要允許編輯選擇的文章嗎？',
	'UNLOCK_TOPIC'					=> '解除主題鎖定',
	'UNLOCK_TOPIC_CONFIRM'			=> '您確定要允許編輯這個主題嗎？',
	'UNLOCK_TOPICS'					=> '解除選擇的主題鎖定',
	'UNLOCK_TOPICS_CONFIRM'			=> '您確定要允許編輯選擇的主題嗎？',
	'USER_CANNOT_POST'				=> '您無法在這個版面發表文章。',
	'USER_CANNOT_REPORT'			=> '您無法在這個版面檢舉文章。',
	'USER_FEEDBACK_ADDED'			=> '會員意見/反映已經送出成功。',
	'USER_WARNING_ADDED'			=> '會員警告已經送出成功。',

	'VIEW_DETAILS'			=> '檢視詳細內容',
	'VIEW_PM'				=> '檢視私訊',
	'VIEW_POST'				=> '檢視文章',

	'WARNED_USERS'			=> '已被警告的會員',
	'WARNED_USERS_EXPLAIN'	=> '以下列表列出警告尚未到期的會員名單。',
	'WARNING_PM_BODY'		=> '以下是這個網站的系統管理員或是版面管理員給予您的警告。[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> '您已經被本討論版給予警告',
	'WARNING_POST_DEFAULT'	=> '以下您發表的文章違反了討論版規則：%s。',
	'NO_WARNINGS'	=> '沒有任何警告。',

	'YOU_SELECTED_TOPIC'	=> '您選擇了主題識別編號 %d：%s。',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> '盜版軟體',
			'SPAM'		=> '垃圾廣告',
			'OFF_TOPIC'	=> '文不對題',
			'OTHER'		=> '其他問題'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> '這則訊息包含了不合法或違反智慧財產權法的內容或連結。',
			'SPAM'		=> '這則被檢舉訊息主要的目的是替商品或網站宣傳或是打廣告。',
			'OFF_TOPIC'	=> '這則被檢舉訊息的內容與主題無關。',
			'OTHER'		=> '這則被檢舉訊息的檢舉原因不適用在已有的類別中，請使用「更多資訊」欄位。'
		),
	),
));