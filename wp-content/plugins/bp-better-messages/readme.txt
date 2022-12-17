=== Better Messages – Live Chat for WordPress, BuddyPress, BuddyBoss, Ultimate Member, PeepSo ===
Contributors: wordplus
Tags: BuddyPress, Ultimate Member, private message, chat, messaging, messages
Requires at least: 5.9.0
Tested up to: 6.1.1
Requires PHP: 7.1
Stable tag: trunk
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

**Better Messages** – is **realtime private messaging system for WordPress, BuddyPress, BuddyBoss Platform, Ultimate Member, PeepSo** and any other WordPress powered websites.

This private messages plugin packed with tons of features and settings to take engagement of your website users to the next level with **realtime chat features**, private **video and audio call**, **group video calls** and many other features.

Live chat functionality allow creating chatrooms or just private conversations between website users.

"**Better Messages**" plugin is formerly called "**BP Better Messages**".

**[More Info & Demo](https://www.better-messages.com/)**

**[Knowledge Base](https://www.better-messages.com/docs/installation)**

https://www.youtube.com/watch?v=WdsZb8SB0S8

**Improved features comparing to standard system:**

* AJAX or WebSocket powered realtime conversations
* Reworked email notifications
* Fully new concept and design
* Files Uploading
* Embedded links with thumbnail, title, etc...
* Emoji selector (using jsdelivr CDN to serve EmojiOne)
* Messages deleting
* Messages editing
* oEmbed YouTube, Vimeo, VideoPress, Flickr, DailyMotion, Kickstarter, Meetup.com, Mixcloud, SoundCloud and more
* Message sound notification
* Whole site messages notifications (User will be notified anywhere with small notification window)
* Mass messaging feature
* Mentions feature
* Bad words filter
* Block user feature
* Reactions to messages
* Messages for BuddyPress Groups **NEW**
* Chat Rooms **NEW**
* Voice Messages (available as addon) **NEW**

**And many more features not listed here and constantly expanding**

**Supported features from standard messages system:**

* Private Conversations
* Multiple Users Conversations
* Subjects
* Searching
* Mark messages as favorite

**Compatible plugins:**

* [BuddyPress](https://wordpress.org/plugins/buddypress)
* [Ultimate Member](https://wordpress.org/plugins/ultimate-member)
* [PeepSo](https://www.wordplus.org/peepso)
* [ProfileGrid](https://www.wordplus.org/profilegrid)
* [UsersWP](https://www.better-messages.com/docs/integrations/userswp/)
* [WP User Manager](https://www.better-messages.com/docs/integrations/wp-user-manager/)
* [WC Vendors](https://www.wordplus.org/knowledge-base/wc-vendors/)
* [WCFM](https://www.wordplus.org/knowledge-base/wcfm/)
* [WooCommerce](https://www.wordplus.org/knowledge-base/woocommerce-my-account/)
* [Verified Member for BuddyPress](https://www.wordplus.org/bpvm) - verified badges for users
* [MyCRED](https://www.wordplus.org/mc) - charge for messages
* [Block, Suspend, Report for BuddyPress](https://www.wordplus.org/BSRB) - allow users block each other
* [Youzer](https://www.wordplus.org/youzer) (Youzify)
* [Paid Memberships Pro](https://www.wordplus.org/pmpro)

**Tested themes:**

* [BuddyX](https://www.wordplus.org/buddyx)
* [Gorgo](https://www.wordplus.org/gorgo)
* [Cera](https://www.wordplus.org/cera)
* [Gwangi](https://www.wordplus.org/gwangi)
* [Vikinger](https://www.wordplus.org/vikinger)
* [Beehive](https://www.wordplus.org/beehive)
* [BuddyBoss](https://www.wordplus.org/buddyboss)

**Tested plugins:**

* [BP Messages Tool](https://www.wordplus.org/bpmt) - allow you to read your users messages
* WPML
* LocoTranslate

**Feel free to report any incompatibility or request more plugin/theme integrations!**

**WebSocket version:**

WebSocket version is a paid option, you can get license key on our website.

We are using our server to implement websockets communications between your site and users.

Our websockets servers are completely private and do not store or track any private data.

* **Significantly** reduces the load on your server
* **Instant** conversations and notifications
* **NEW** Video calls feature
* **NEW** Audio calls feature
* **NEW** Group Video Chats
* **NEW** Group Audio Chats
* **NEW** Screen Share feature
* **NEW** Web Push feature
* Messages Delivery Status (sent, delivered, seen)
* Typing indicator (indicates if another participant writing message at the moment)
* Online indicator
* Works with shared hosting
* More features coming!

[Why WebSockets are a game-changer?](https://medium.com/@monica.lucarini28/is-websocket-a-game-changer-aeaef68d1fba)

**[Get WebSocket version license key](https://www.wordplus.org/downloads/bp-better-messages/) | [Terms of Use](https://www.wordplus.org/end-user-license-agreement/)**

Languages:

* English
* Spanish
* Portuguese (Brazil)
* Russian
* Dutch
* Italiano
* Turkish
* Japanese

RTL Layout built in to plugin.

You can translate plugin to your language with LocoTranslate or [participate in plugin translation](https://translate.wordpress.org/projects/wp-plugins/bp-better-messages/).

== Frequently Asked Questions ==

= Please visit KnowledgeBase =

[https://www.wordplus.org/knowledge-base/](https://www.wordplus.org/knowledge-base/)

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/bp-better-messages` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings -> Better Messages to configure the plugin

== Screenshots ==

1. Thread screen
1. Embedded links
1. Thread list screen
1. New Thread screen
1. Writing notification
1. Onsite notification
1. Files attachments

== Changelog ==

= 2.0.71 =
* Bugfix: CSS Fix: Mobile floating icon color in dark mode

= 2.0.70 =
* Improvement: Improved compatibility with BuddyX theme
* Improvement: Improved compatibility with old iOS 13
* Improvement (WebSocket only): Added option to show message statuses in conversations list to plugin settings
* Improvement (WebSocket only): Improved private calls behaviour. (Users now can start & accept call in the same page instead of being redirected to user inbox)
* Improvement (WebSocket only): Improvement server sync when creating new conversation
* Bugfix/Improvement: Improved detection of mobile devices

= 2.0.69 =
* Improvement: Playing message notification sound only if conversation is not visible
* Improvement (WebSocket only): Faster and more smooth message status delivery
* Improvement: Added/documented new possibilities for developers
    * [better_messages_login_url](https://www.better-messages.com/docs/development/php-filters/better_messages_login_url/)
* Bugfix/Improvement: Correctly handling screen orientation change on mobile
* Other: Other CSS improvements

= 2.0.68 =
* Improvement: Added conversation subject to onsite notification popups
* Improvement: Admin can see all participants when seeing other user conversation
* Improvement: Admin option to set onsite notifications position to plugin settings
* Improvement: Added close all button to onsite notifications stack, if more than 2 messages shown
* Improvement: Added/documented new possibilities for developers
    * [better_messages_chat_room_join](https://www.better-messages.com/docs/development/js-actions/better_messages_chat_room_join/)
    * [better_messages_chat_room_leave](https://www.better-messages.com/docs/development/js-actions/better_messages_chat_room_leave/)
* Bugfix: Fixed desktop devices with touch screens
* Bugfix: Mini widgets close button was not showing in AJAX version
* Bugfix: Fixed console error when push notifications are disabled
* Bugfix: Avoided critical error under some conditions
* Other: Other minor UX/CSS improvements

= 2.0.67 =
* Improvement: Removed reply button if user has no permission to write new messages in conversation
* Improvement: Bulk message page enter now create new line on enter
* Improvement: Added fallback to get_threads function, which is not used anymore by plugin
* Improvement: Added/documented new functions for developers
    * [get_unique_conversation_id](https://www.better-messages.com/docs/development/php-functions/get_unique_conversation_id)
* Improvement: Shortcodes documentation and improvements
    * [better_messages](https://www.better-messages.com/docs/shortcodes/better_messages)
    * [better_messages_mini_chat_button](https://www.better-messages.com/docs/shortcodes/better_messages_mini_chat_button)
    * [better_messages_my_messages_url](https://www.better-messages.com/docs/shortcodes/better_messages_my_messages_url)
    * [better_messages_unread_counter](https://www.better-messages.com/docs/shortcodes/better_messages_unread_counter)
    * [better_messages_pm_button](https://www.better-messages.com/docs/shortcodes/better_messages_pm_button)
    * [better_messages_audio_call_button](https://www.better-messages.com/docs/shortcodes/better_messages_audio_call_button)
    * [better_messages_video_call_button](https://www.better-messages.com/docs/shortcodes/better_messages_video_call_button)
* Bugfix: Fixed participants button was not shown in chat rooms sometimes
* Bugfix: Fixed mentions on iOS
* Other: Improved local database errors handling
* Other: Changed class .info to .bm-info to avoid conflicts with some themes.

= 2.0.66 =
* Improvement: Added placeholder for the messages container
* Improvement: Added better placeholder for conversations list
* Improvement: Added better placeholder for friends and groups lists
* Improvement: Moving scripts to header for faster initialization
* Improvement: Added option what to show under username in private conversations (Online indicator, Subject or Nothing) to WP Customizer
* Improvement: Improved some SQL queries for better performance in huge websites

= 2.0.65 =
* Improvement: PeepSo Integration: Added header messages popup
* Improvement: Ultimate Member Integration: Added header messages to UM theme
* Improvement: Added option to never delete uploaded attachments
* Improvement: Added option to place mini widgets at left side to WP Customizer
* Improvement: Added option to remove date labels in messages list to WP Customizer
* Improvement: Added option to make message window rounded to WP Customizer
* Improvement: Added option to make mini widgets and buttons inside rounded to WP Customizer
* Improvement: Hide messages from blocked users in conversations list
* Improvement: Added/documented new functions
    * [openNewConversationWidget](https://www.better-messages.com/docs/development/js-functions/openNewConversationWidget)

= 2.0.64 =
* Improvement: Automatically truncate message content to 50 characters in conversation list
* Improvement: Added/documented new functions and filters requested by developers
    * [new_message](https://www.better-messages.com/docs/development/php-functions/new_message/)
    * [better_messages_can_send_message](https://www.better-messages.com/docs/development/php-filters/better_messages_can_send_message/)
    * [better_messages_before_message_send](https://www.better-messages.com/docs/development/php-actions/better_messages_before_message_send/)
    * [get_private_conversation_id](https://www.better-messages.com/docs/development/php-functions/get_private_conversation_id/)
    * [better_messages_before_new_thread](https://www.better-messages.com/docs/development/php-actions/better_messages_before_new_thread/)
* Improvement: Automatically rerender on initial emoji initialization
* Improvement: Minor improvements to GIF selector logic
* Improvement: Other minor CSS improvements
* Bugfix: Fixed more GIFs lazy loading when using search
* Bugfix: Fixed PHP warning on searching of Stickers when results are empty
* Bugfix: Removed miniFriends, miniGroups PHP warnings

= 2.0.63 =
* Improvement: Avatars in conversations list are not more clickable on mobile
* Improvement: Added new function for developers [get_user_conversation_url](https://www.better-messages.com/docs/development/php-functions/get_user_conversation_url)
* Improvement: Improved CSS to avoid conflicts with some plugins at new conversations screen
* Improvement: Improved message which contains only files will show placeholder while attachments are loading
* Improvement: Fixed uploading of WebP images if they are sending as JPG
* Improvement: Improved file uploader errors handling
* Improvement: Other minor CSS improvements
* Bugfix: Mini Widgets container do not show anymore without widgets enabled

= 2.0.62 =
* Improvement: Added option where to show messages sent date (at the message itself or at the start of messages stack) to WP Customizer
* Improvement: Added option to control where to show or hide avatars in messages list to WP Customizer
* Improvement: Minor ux improvement on context menu three dots click
* Translations: Fixed wrong string for user unblock popup
* Improvement: Possible to add /?openFullScreen to messages page url, and it will be opened in full screen mode automatically
* Improvement: Added hooks and functions which allow to implement any custom realtime functionality using WebSocket servers:
    * [better_messages_realtime_event](https://www.better-messages.com/docs/development/js-actions/better_messages_realtime_event)
    * [send_realtime_event](https://www.better-messages.com/docs/development/php-functions/send_realtime_event)

= 2.0.61 =
* Improvement: Added basic integration with WP User Manager: https://www.better-messages.com/docs/integrations/wp-user-manager/
* Improvement: Added basic integration with UsersWP: https://www.better-messages.com/docs/integrations/userswp/
* Bugfix: Group Chats with avatars disabled displaying in proper width
* Bugfix: Fixed mobile view wrong view positioning when mobile Full Screen Mode is disabled
* Bugfix: Added missing translation string for Group Online Participant
* Other: Updated Freemius SDK to the latest version

= 2.0.60 =
* Improvement: Added option to hide avatars from group chats to WP Customizer
* Improvement: Clicking on friends in mobile view does not redirect to other page anymore
* Improvement: Added call and video icons to BuddyBoss profile
* Improvement: Added new function for devs: https://www.better-messages.com/docs/development/php-functions/create_conversation_link/
* Improvement: Added basic integration with ProfileGrid: https://www.better-messages.com/docs/integrations/profile-grid/
* Bugfix: Removed rest request to unexisting endpoint when no words black list is active
* Bugfix: Admin received more messages than it should

= 2.0.59 =
* Improvement: Bad words list now saved in local DB for better performance
* Bugfix: Fixed bug with translation files generator
* Bugfix: Fixed settings pages created a lot of /// characters in some cases
* Bugfix: Fixed logical issue with copy text button

= 2.0.56 - 2.0.58 =
* Improvement: Returned admin functions for other conversations
* Improvement: Added copy text option to message context menu
* Improvement: Added block user button to conversation participant list
* Improvement: Listing online users first in conversation participant list
* Improvement: Added lazy rendering to conversation participant list to handle very long lists with no lags
* Improvement: Listing online users first in friends list
* Improvement: Added tooltip background and text colors configuration to WP Customizer
* Improvement: Do not open context when clicking on video or audio, so it`s possible to download
* Improvement: Fallback to use of RAM if device has no free storage space
* Improvement: Added support for older iOS devices
* Improvement: Added nocache header for rest api requests
* Improvement: Performance optimizations
* Bugfix: Messages statuses can be hidden now

= 2.0.55 =
* Improvement: Few translations strings grammar was improved (if you're using translation you will need to translate this strings again)
* Improvement: Hide mobile close button when using in BB App WebView fallback
* Improvement: Added fallbacks to be compatible with BP Registration options after update
* Improvement: Adding javascript hooks for developers
* Improvement: Starting to javascript hooks for customization: https://www.better-messages.com/docs/category/customization
* Improvement: Added initial height for chat rooms and group chats
* Improvement: Removed initial animation in chat rooms and groups
* Improvement: Minor CSS improvements
* Improvement: New Better Messages homepage and documentation: https://www.better-messages.com/
* Bugfix: Attachment was not sending when pressing enter

= 2.0.53 - 2.0.54 =
* Improvement: Message editor should now correctly support all languages autocompletion
* Improvement: Message editor should now correctly support "Firefox for Android" keyboard
* Improvement: Added ability to message same conversation in private threads (if exists)
* Improvement: Added translation strings for emoji picker
* Improvement: Emoji data now loaded even if BuddBoss Rest Api is restricted
* Improvement: Reduced JS file size
* Bugfix: Group conversation starter could not kick members

= 2.0.52 =
* Improvement: Improved text formatting tooltip styling
* Improvement: Slightly tuned unread conversation logic
* Bugfix: Fixed plugin contact us form
* Bugfix: Ultimate Member group avatars now displayed correctly

= 2.0.47 - 2.0.51 =
* Improvement: Translations can work from plugin folder as well
* Improvement: Improved compatibility with some optimization plugins
* Improvement: Added missing participants count in group chats at ajax version
* Improvement: Added files to messages viewer
* Improvement: Added button to download files in images lightbox
* Improvement: Added date radius setting to WP Customizer
* Improvement: Ensure version is exists in scripts tag to avoid cache issues
* Improvement: Added checks and fallbacks if wrong browser locale provided
* Improvement: Fallback BP_Better_Messages class
* Improvement: Fallback BP_Better_Messages_Hooks class
* Bugfix: Fixed translation issues
* Bugfix: Fixed file uploading when replying to message
* Bugfix: Removed usage of wp_cache_delete_multiple to support older WP versions
* Other bugfixes and improvements

= 2.0.42 - 2.0.46 =
* Improvement: Do not show tooltips on avatars and usernames if there is no profile url
* Improvement: Added polyfill to str_ends_with function when using with old WP versions
* Improvement: Images lightbox does not require CORS headers anymore
* Improvement: Automatically authorization token in case of expiration
* Improvement: Added avatar radius setting to WP Customizer
* Improvement: Added RTL Support
* Improvement: Emoticons to emojis conversion
* Bugfix: New conversation button in mini messages now redirects to correct page when mini chats are disabled
* Bugfix: New chat room could not be loaded properly
* Bugfix: Logged-out user couldn't access chat room
* Bugfix: Sound notifications were played when not needed in some cases
* Bugfix: Added scroller to user settings page
* Other bugfixes and improvements

= 2.0.41 =
* Fixed critical error in BuddyPress Group Chat

= 2.0.40 =
* Initial public release of Better Messages 2.0
* Other improvements

= 2.0.38 =
* Admin can always search within all users
* Hiding non friends from search suggestions if only friends mode is enabled
* More tunes to users search logic
* Reviewed MyCred integration
* Added back icons to messages which displaying missed and past calls
* Fixed messages placeholders displayed wrongly in some cases
* Other improvements

= 2.0.35 =
* Added typing indicators to mini chats
* Added participants number to mini chats
* Fixed muted conversations triggered sound notifications
* Improved search users logic
* Added all additional controls to mini chats
* Some other CSS improvements

= 2.0.34 =
* Reviewed on site notifications position logic
* Fixed not all messages loaded in conversation sometimes
* Fixed camera/mic in call was not possible to switch
* Some performance optimizations
* Many other small but important bugfixes and improvements

= 2.0.33 =
* Added images lightbox
* Started work on mobile app version
* Other bugfixes and improvements

= 2.0.32 =
* Android jumping keyboard issue should be fixed
* Added loading indicator to the threads list

= 2.0.31 =
* This update targeted to fix Android Keyboard issues
* Some other CSS improvements

= 2.0.30 =
* Added back proposal to subscribe to push notifications
* Removed HTML tags & correctly displaying Emojies in local notifications
* Fixed lazy loading in Friends List
* Added back search in friends and groups list


= 2.0.29 =
* This update targeted to fix Android Keyboard issues
* Updated Freemius SDK

= 2.0.28 =
* Added many customization options to WP Customizer
* Added built-in dark mode
* Many bugfixes and improvements

= 2.0.27 =
* Returned settings button in mobile view when bottom tabs are activated
* Making it work properly with Google Translate
* Every time settings are saved, client side database will be completely refreshed

= 2.0.26 =
* Improved browser database syncing
* Improved UX to avoid sending multiple messages when sending attachments

= 2.0.25 =
* Android keyboard fixes
* Fixed emojies conflict on mobile keyboards
* Added small avatar to conversation list for multiple participants conversations
* Other bugfixes and improvements

= 2.0.24 =
* MySQL Query Performance fix

= 2.0.23 =
* Added bulk messages back
* Bugfixes and improvements

= 2.0.1 - 2.0.22 =
* Bugfixes and improvements

= 2.0.0 =
* Initial Beta Release


== Upgrade Notice ==

= 2.0.40 =
Major update! Plugin fully rebuilt using ReactJS and using many modern browser features to ensure the best user experience. If you notice any bugs please shoot support email immediately
